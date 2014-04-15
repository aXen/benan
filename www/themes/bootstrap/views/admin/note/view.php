<?php
$this->breadcrumbs=array(
	'留言'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'留言列表','url'=>array('index')),
	array('label'=>'创建留言','url'=>array('create')),
	array('label'=>'更新留言','url'=>array('update','id'=>$model->id)),
	array('label'=>'删除留言','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定要删除这条记录吗？')),
	array('label'=>'管理留言','url'=>array('admin')),
);
?>

<h1>查看留言 #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'type',
		'message',
		'ip',
		'tel',
		'email',
		'create_time',
	),
)); ?>
