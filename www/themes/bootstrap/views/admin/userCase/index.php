<?php
$this->breadcrumbs=array(
	'User Cases',
);

$this->menu=array(
	array('label'=>'创建施工案例','url'=>array('create')),
	array('label'=>'管理施工案例','url'=>array('admin')),
);
?>

<h1>User Cases 列表</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
