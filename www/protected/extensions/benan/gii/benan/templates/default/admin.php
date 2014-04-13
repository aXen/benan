<?php
echo "<?php\n";
echo "\$cs=Yii::app()->clientScript;\n";
echo "\$baseUrl = Yii::app()->baseUrl;";
echo "// datetimepicker\n";
echo "\$cs->registerScriptFile(\$baseUrl.'/widgets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', CClientScript::POS_END, array('charset'=>'UTF-8'));\n";
echo "\$cs->registerScriptFile(\$baseUrl.'/widgets/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js', CClientScript::POS_END, array('charset'=>'UTF-8'));\n";
echo "\$cs->registerCssFile(\$baseUrl.'/widgets/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css');\n";
echo "// select\n";
echo "\$cs->registerScriptFile(\$baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));\n";
echo "//\$cs->registerScriptFile(\$baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));\n";
echo "\$cs->registerCssFile(\$baseUrl.'/widgets/bootstrap-select/bootstrap-select.css');\n";
echo "?>";
?>

<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label=Yii::t('schema', $this->pluralize($this->class2name($this->modelClass)));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'管理',
);\n";
?>

$this->menu=array(
	array('label'=>'<?php echo Yii::t('schema',$this->modelClass); ?>列表','url'=>array('index')),
	array('label'=>'创建<?php echo Yii::t('schema', $this->modelClass);?>','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 <?php echo $label; ?></h1>

<p>
    你可以在要查询的值前输入 比较符（<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>） 来指定如何比较
</p>

<?php echo "<?php echo CHtml::link('高级查询','#',array('class'=>'search-button btn')); ?>"; ?>

<div class="search-form" style="display:none">
<?php echo "<?php \$this->renderPartial('_search',array(
	'model'=>\$model,
)); ?>\n"; ?>
</div><!-- search-form -->

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
	if(++$count==7)
		echo "\t\t/*\n";
	echo "\t\t'".$column->name."',\n";
}
if($count>=7)
	echo "\t\t*/\n";
?>
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

<script type="text/javascript">
    $(function(){
        $('.form_datetime').datetimepicker({
            language:  'zh-CN',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
        $('.form_date').datetimepicker({
            language:  'zh-CN',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            language:  'zh-CN',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });

        $('.selectpicker').selectpicker();
    });
</script>