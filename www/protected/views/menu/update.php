<?php
$this->breadcrumbs=array(
	'菜单'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'菜单列表','url'=>array('index')),
	array('label'=>'创建菜单','url'=>array('create')),
	array('label'=>'查看菜单','url'=>array('view','id'=>$model->id)),
	array('label'=>'管理菜单','url'=>array('admin')),
);
?>

<h1>更新菜单 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>