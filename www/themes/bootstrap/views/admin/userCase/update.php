<?php
$this->breadcrumbs=array(
	'施工案例'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'施工案例列表','url'=>array('index')),
	array('label'=>'创建施工案例','url'=>array('create')),
	array('label'=>'查看施工案例','url'=>array('view','id'=>$model->id)),
	array('label'=>'管理施工案例','url'=>array('admin')),
);
?>

<h1>更新施工案例 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>