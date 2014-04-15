<?php
$this->breadcrumbs=array(
	'新闻',
);

$this->menu=array(
	array('label'=>'创建新闻','url'=>array('create')),
	array('label'=>'管理新闻','url'=>array('admin')),
);
?>

<h1>新闻 列表</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
