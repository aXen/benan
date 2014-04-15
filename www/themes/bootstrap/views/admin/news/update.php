<?php
$this->breadcrumbs=array(
	'新闻'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'新闻列表','url'=>array('index')),
	array('label'=>'创建新闻','url'=>array('create')),
	array('label'=>'查看新闻','url'=>array('view','id'=>$model->id)),
	array('label'=>'管理新闻','url'=>array('admin')),
);
?>

<h1>更新新闻 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>