<div>
	<h4>Disease</h4>
	<?php echo $model->codisease->disease; ?>
</div>
<table class="table">
	<tr>
		<th scope="col">Correlation %</th>
		<th scope="col">
			Case Fatality Rate
			<span style="font-size: 10px">(Deaths/Diagnosis)*100</span>
		</th>
		<th scope="col">Symptom Score</th>
		<th scope="col">Area Score</th>
		<th scope="col">Career Score</th>
		<th scope="col">Factor Score</th>
		<th scope="col">Season Factor</th>
	</tr>
	<tr>
		<?php
			$total = $model->symptoms_score + $model->area_score + $model->career_score + $model->factor_score + $model->session_score;
			$percentage = ($total/50) * 100;
		?>
		<td><?php echo $percentage; ?>%</td>
		<td>0</td>
		<td><?php echo $model->symptoms_score; ?></td>
		<td><?php echo $model->area_score; ?></td>
		<td><?php echo $model->career_score; ?></td>
		<td><?php echo $model->factor_score; ?></td>
		<td><?php 
			if ( $session->season_count ) {
				echo number_format(($session->season_count/$session->count)*100,2) . '%';
			}
			else {
				echo $model->session_score .' Score';
			}
		?></td>
	</tr>
</table>
<div>
	<h4>References</h4>
	<?php echo nl2br($model->reference); ?>
</div>
<div>
	<h4>Findings</h4>
	<?php echo nl2br($model->suggestion); ?>
</div>
