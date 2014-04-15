<?php
$this->breadcrumbs=array(
	'首页图片'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'首页图片列表','url'=>array('index')),
	array('label'=>'管理首页图片','url'=>array('admin')),
);
?>

<h1>创建 首页图片</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>