<?php
$this->breadcrumbs=array(
	'产品分类'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'产品分类列表','url'=>array('index')),
	array('label'=>'创建产品分类','url'=>array('create')),
	array('label'=>'查看产品分类','url'=>array('view','id'=>$model->id)),
	array('label'=>'管理产品分类','url'=>array('admin')),
);
?>

<h1>更新产品分类 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>