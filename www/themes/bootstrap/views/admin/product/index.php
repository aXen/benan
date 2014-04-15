<?php
$this->breadcrumbs=array(
	'产品',
);

$this->menu=array(
	array('label'=>'创建产品','url'=>array('create')),
	array('label'=>'管理产品','url'=>array('admin')),
);
?>

<h1>产品 列表</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
