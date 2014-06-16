<?php
$this->breadcrumbs=array(
	'合作伙伴'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'合作伙伴列表','url'=>array('index')),
	array('label'=>'管理合作伙伴','url'=>array('admin')),
);
?>

<h1>创建 合作伙伴</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>