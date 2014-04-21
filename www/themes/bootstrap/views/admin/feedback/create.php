<?php
$this->breadcrumbs=array(
	'在线反馈'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'在线反馈列表','url'=>array('index')),
	array('label'=>'管理在线反馈','url'=>array('admin')),
);
?>

<h1>创建 在线反馈</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>