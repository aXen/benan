<?php
$cs=Yii::app()->clientScript;
$baseUrl = Yii::app()->baseUrl;// datetimepicker
$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
$cs->registerCssFile($baseUrl.'/widgets/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css');
// select
$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
//$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
$cs->registerCssFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.css');
?>
<?php
$this->breadcrumbs=array(
	'User Cases'=>array('index'),
	'管理',
);

$this->menu=array(
	array('label'=>'施工案例列表','url'=>array('index')),
	array('label'=>'创建施工案例','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-case-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 User Cases</h1>

<p>
    你可以在要查询的值前输入 比较符（<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>） 来指定如何比较
</p>

<?php echo CHtml::link('高级查询','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'user-case-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'type',
		'type_name',
		'description',
		'image',
		/*
		'status',
		'creator',
		'create_time',
		'modifier',
		'modify_time',
		*/
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