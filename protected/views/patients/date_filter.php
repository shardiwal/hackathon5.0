<label>
    Time Period:<br />
    <select name="date_type" id="date-format">
<?php
    $date_options = array(
        array('label'=>'Till Today', 'value'=>''),
        array('label'=>'Last 1 Month', 'value'=>'1 month'),
        array('label'=>'Last 3 Month', 'value'=>'3 month'),
        array('label'=>'Last 6 Month', 'value'=>'6 month'),
        array('label'=>'Custom Dates', 'value'=>'custom')
    );
    foreach ($date_options as $d) {
        $value = $d['value'];
        $label = $d['label'];
        $selected_option = '';
        if ( $selected_date_filter == $value ) {
            $selected_option = 'selected';
        }
        echo "<option $selected_option value='$value'>$label</option>";
    }
?>
    </select>
</label>

<div id="custom_dates" style="display: none;">
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',
    array(
        'name'=>'start_date',    
        'value'=> $selected_start_date,
        'options'=>array(        
            'showButtonPanel'=>true,
            'dateFormat'=>'yy-mm-dd',
        ),
        'htmlOptions'=>array(
            'placeholder'=>'Start Date'
        ),
    )
);
?>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',
    array(
        'name'=>'end_date',    
        'value'=> $selected_end_date,
        'options'=>array(        
            'showButtonPanel'=>true,
            'dateFormat'=>'yy-mm-dd',
        ),
        'htmlOptions'=>array(
            'placeholder'=>'End Date'
        ),
    )
);
?>
<br/><br/>
</div>

<div>
    <?php echo CHtml::submitButton('Set Date',array('class'=>'btn-sm btn-primary')); ?>
</div>

<script>
$(function() {
    $( "#date-format" ).change(function() {
        $('#custom_dates').hide();
        value = $(this).val();
        if ( value == 'custom' ) {
            $('#custom_dates').show();
        }
    });
    $( "#date-format" ).trigger('change');
});
</script>