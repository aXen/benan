<?php
$this->breadcrumbs=array(
	'菜单',
);

$this->menu=array(
	array('label'=>'创建菜单','url'=>array('create')),
	array('label'=>'管理菜单','url'=>array('admin')),
);
?>

<h1>菜单 列表</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
