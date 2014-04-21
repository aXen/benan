<?php
$this->breadcrumbs=array(
	'在线反馈',
);

$this->menu=array(
	array('label'=>'创建在线反馈','url'=>array('create')),
	array('label'=>'管理在线反馈','url'=>array('admin')),
);
?>

<h1>在线反馈 列表</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
