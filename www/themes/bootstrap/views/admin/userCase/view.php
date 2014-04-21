<?php
$this->breadcrumbs=array(
	'User Cases'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'施工案例列表','url'=>array('index')),
	array('label'=>'创建施工案例','url'=>array('create')),
	array('label'=>'更新施工案例','url'=>array('update','id'=>$model->id)),
	array('label'=>'删除施工案例','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定要删除这条记录吗？')),
	array('label'=>'管理施工案例','url'=>array('admin')),
);
?>

<h1>查看施工案例 #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'type',
		'type_name',
		'description',
		'image',
		'status',
		'creator',
		'create_time',
		'modifier',
		'modify_time',
	),
)); ?>
