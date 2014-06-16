<?php
$this->breadcrumbs=array(
	'合作伙伴'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'合作伙伴列表','url'=>array('index')),
	array('label'=>'创建合作伙伴','url'=>array('create')),
	array('label'=>'查看合作伙伴','url'=>array('view','id'=>$model->id)),
	array('label'=>'管理合作伙伴','url'=>array('admin')),
);
?>

<h1>更新合作伙伴 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>