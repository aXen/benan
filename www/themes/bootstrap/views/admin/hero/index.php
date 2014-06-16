<?php
$this->breadcrumbs=array(
	'首页图片',
);

$this->menu=array(
	array('label'=>'创建首页图片','url'=>array('create')),
	array('label'=>'管理首页图片','url'=>array('admin')),
);
?>

<h1>首页图片 列表</h1>

<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>$items,
)); ?>
