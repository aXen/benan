<?php
$this->breadcrumbs=array(
	'留言'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'留言列表','url'=>array('index')),
	array('label'=>'创建留言','url'=>array('create')),
	array('label'=>'查看留言','url'=>array('view','id'=>$model->id)),
	array('label'=>'管理留言','url'=>array('admin')),
);
?>

<h1>更新留言 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>