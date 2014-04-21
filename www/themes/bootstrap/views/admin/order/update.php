<?php
$this->breadcrumbs=array(
	'在线订单'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'在线订单列表','url'=>array('index')),
	array('label'=>'创建在线订单','url'=>array('create')),
	array('label'=>'查看在线订单','url'=>array('view','id'=>$model->id)),
	array('label'=>'管理在线订单','url'=>array('admin')),
);
?>

<h1>更新在线订单 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>