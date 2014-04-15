<?php
$this->breadcrumbs=array(
	'菜单'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'菜单列表','url'=>array('index')),
	array('label'=>'管理菜单','url'=>array('admin')),
);
?>

<h1>创建 菜单</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>