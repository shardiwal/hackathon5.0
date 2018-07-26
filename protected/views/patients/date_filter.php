<script>
$(function() {
    $( "#date-format" ).change(function() {
        $( "#datepicker-date-format" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
});
</script>
<p>Time Period:<br />
<select id="date-format">
    <option value="mm/dd/yy">1 Month</option>
    <option value="yy-mm-dd">3 Month</option>
    <option value="d M, y">6 Month</option>
</select>
</p>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',
    array(
        'name'=>'datepicker-date-format',    
        'value'=>date('d/m/Y'),
        'options'=>array(        
            'showButtonPanel'=>true,
            'dateFormat'=>'mm/dd/yy',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
        ),
        'htmlOptions'=>array(
            'style'=>''
        ),
    )
);
?>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',
    array(
        'name'=>'datepicker-date-format',    
        'value'=>date('d/m/Y'),
        'options'=>array(        
            'showButtonPanel'=>true,
            'dateFormat'=>'mm/dd/yy',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
        ),
        'htmlOptions'=>array(
            'style'=>''
        ),
    )
);
?>