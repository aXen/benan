<?php
$this->breadcrumbs=array(
	'留言',
);

$this->menu=array(
	array('label'=>'创建留言','url'=>array('create')),
	array('label'=>'管理留言','url'=>array('admin')),
);
?>

<h1>留言 列表</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
