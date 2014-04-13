<?php
$this->breadcrumbs=array(
	'首页图片'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'首页图片列表','url'=>array('index')),
	array('label'=>'创建首页图片','url'=>array('create')),
	array('label'=>'查看首页图片','url'=>array('view','id'=>$model->id)),
	array('label'=>'管理首页图片','url'=>array('admin')),
);
?>

<h1>更新首页图片 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>