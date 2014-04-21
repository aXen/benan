<?php
$this->breadcrumbs=array(
	'User Cases'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'施工案例列表','url'=>array('index')),
	array('label'=>'管理施工案例','url'=>array('admin')),
);
?>

<h1>创建 施工案例</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>