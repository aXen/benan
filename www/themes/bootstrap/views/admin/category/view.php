<?php
$this->breadcrumbs=array(
	'产品分类'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'产品分类列表','url'=>array('index')),
	array('label'=>'创建产品分类','url'=>array('create')),
	array('label'=>'更新产品分类','url'=>array('update','id'=>$model->id)),
	array('label'=>'删除产品分类','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定要删除这条记录吗？')),
	array('label'=>'管理产品分类','url'=>array('admin')),
);
?>

<h1>查看产品分类 #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'parent_id',
		'class_name',
		'status',
		'creator',
		'create_time',
		'modifier',
		'modify_time',
	),
)); ?>
