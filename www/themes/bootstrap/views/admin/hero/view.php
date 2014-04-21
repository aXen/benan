<?php
$this->breadcrumbs=array(
	'首页图片'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'首页图片列表','url'=>array('index')),
	array('label'=>'创建首页图片','url'=>array('create')),
	array('label'=>'更新首页图片','url'=>array('update','id'=>$model->id)),
	array('label'=>'删除首页图片','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定要删除这条记录吗？')),
	array('label'=>'管理首页图片','url'=>array('admin')),
);
?>

<h1>查看首页图片 #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'picture',
		'description',
		'href',
		'hit',
		'rank',
		'status',
		'creator',
		'create_time',
		'modifier',
		'modify_time',
	),
)); ?>
