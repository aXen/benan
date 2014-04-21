<?php
$this->breadcrumbs=array(
	'在线反馈'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'在线反馈列表','url'=>array('index')),
	array('label'=>'创建在线反馈','url'=>array('create')),
	array('label'=>'更新在线反馈','url'=>array('update','id'=>$model->id)),
	array('label'=>'删除在线反馈','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定要删除这条记录吗？')),
	array('label'=>'管理在线反馈','url'=>array('admin')),
);
?>

<h1>查看在线反馈 #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'country',
		'province',
		'city',
		'county',
		'address',
		'type',
		'type_name',
		'user_type',
		'user_type_name',
		'ip',
		'tel',
		'email',
		'message',
		'status',
		'creator',
		'create_time',
		'modifier',
		'modify_time',
	),
)); ?>
