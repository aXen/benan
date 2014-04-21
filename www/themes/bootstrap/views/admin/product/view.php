<?php
$this->breadcrumbs=array(
	'产品'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'产品列表','url'=>array('index')),
	array('label'=>'创建产品','url'=>array('create')),
	array('label'=>'更新产品','url'=>array('update','id'=>$model->id)),
	array('label'=>'删除产品','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定要删除这条记录吗？')),
	array('label'=>'管理产品','url'=>array('admin')),
);
?>

<h1>查看产品 #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'category_id',
		'category_name',
		'description',
		'image',
		'status',
		'creator',
		'create_time',
		'modifier',
		'modify_time',
	),
)); ?>
