<?php
$this->breadcrumbs=array(
	'菜单'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'菜单列表','url'=>array('index')),
	array('label'=>'创建菜单','url'=>array('create')),
	array('label'=>'更新菜单','url'=>array('update','id'=>$model->id)),
	array('label'=>'删除菜单','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定要删除这条记录吗？')),
	array('label'=>'管理菜单','url'=>array('admin')),
);
?>

<h1>查看菜单 #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'parent_id',
		'level',
		'href',
		'status',
		'creator',
		'create_time',
		'modifier',
		'modify_time',
	),
)); ?>
