<?php
$this->breadcrumbs=array(
	'新闻'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'新闻列表','url'=>array('index')),
	array('label'=>'管理新闻','url'=>array('admin')),
);
?>

<h1>创建 新闻</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>