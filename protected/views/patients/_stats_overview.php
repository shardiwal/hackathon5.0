<?php

    $region_wise = array();
    $gender_wise = array();
    $disease_wise = array();
    $age_wise = array(
        array( 'count' => 0, 'age' => '0-14', 'label' => '(children)' ), 
        array( 'count' => 0, 'age' => '15-24', 'label' => '(early working age)' ), 
        array( 'count' => 0, 'age' => '25-54', 'label' => '(prime working age)' ), 
        array( 'count' => 0, 'age' => '55-64', 'label' => '(mature working age)' ), 
        array( 'count' => 0, 'age' => '65-110', 'label' => '(elderly)' )
    );

    foreach ($activeprodiver->getData() as $data) {
        $disease = $data->disease->disease;
        if ( !array_key_exists($disease, $disease_wise) ) {
            $disease_wise[$disease] = 0;
        }
        $disease_wise[$disease]++;

        if ( !array_key_exists($data->patient->gender, $gender_wise) ) {
            $gender_wise[$data->patient->gender] = 0;
        }
        $gender_wise[$data->patient->gender]++;

        $patient_age = $data->patient->age;
        foreach ($age_wise as &$ageg) {
            $age_range = explode('-', $ageg['age']);
            if ( $patient_age > $age_range[0] && $patient_age < $age_range[1] ) {
                $ageg['count']++;
            }
        }

        $district = $data->patient->district();
        $tehsil   = $data->patient->tehsil();

        if ( !array_key_exists($district, $region_wise) ) {
            $region_wise[$district] = array();
        }
        if ( !array_key_exists($tehsil, $region_wise[$district]) ) {
            $region_wise[$district][$tehsil] = 0;
        }
        $region_wise[$district][$tehsil]++;
    }
?>


<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Demographic
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
        <?php
            foreach ($gender_wise as $key => $value) {
                echo "<li><label>$key:</label><span>$value</span></li>";
            }
        ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Age Groups
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="age_s">
        <?php
            foreach ($age_wise as $v) {
                $label = $v['age'] .' '. $v['label'];
                $count = $v['count'];
                echo "<li><label>$label:</label><span>$count</span></li>";
            }
        ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Disease Stat
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="disease_s">
        <?php
            foreach ($disease_wise as $key => $value) {
                echo "<li><label>$key:</label><span>$value</span></li>";
            }
        ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Regional Stat
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="regional">
        <?php
            foreach ($region_wise as $district => $tehsils) {
                echo "<li class='dist'><label>$district:</label><ul>";
                foreach ($tehsils as $key => $value) {
                    echo "<li><label>$key:</label><span>$value</span></li>";
                }
                echo "</ul></li>";
            }
        ?>
        </ul>
      </div>
    </div>
  </div>
</div>
