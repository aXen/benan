<?php
$this->breadcrumbs=array(
	'合作伙伴',
);

$this->menu=array(
	array('label'=>'创建合作伙伴','url'=>array('create')),
	array('label'=>'管理合作伙伴','url'=>array('admin')),
);
?>

<h1>合作伙伴 列表</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
