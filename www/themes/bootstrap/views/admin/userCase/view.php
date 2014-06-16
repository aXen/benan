<?php
$this->breadcrumbs=array(
	'合作伙伴'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'合作伙伴列表','url'=>array('index')),
	array('label'=>'创建合作伙伴','url'=>array('create')),
	array('label'=>'更新合作伙伴','url'=>array('update','id'=>$model->id)),
	array('label'=>'删除合作伙伴','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定要删除这条记录吗？')),
	array('label'=>'管理合作伙伴','url'=>array('admin')),
);
?>

<h1>查看合作伙伴 #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'type',
		'type_name',
		'brief',
		'description',
		'image',
		'status',
		'creator',
		'create_time',
		'modifier',
		'modify_time',
	),
)); ?>
