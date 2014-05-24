<?php
$this->breadcrumbs=array(
	'新闻'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'新闻列表','url'=>array('index')),
	array('label'=>'创建新闻','url'=>array('create')),
	array('label'=>'更新新闻','url'=>array('update','id'=>$model->id)),
	array('label'=>'删除新闻','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定要删除这条记录吗？')),
	array('label'=>'管理新闻','url'=>array('admin')),
    array('label'=>'预览','url'=>'#', 'linkOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myModal',
    )),
);
?>

<h1>查看新闻 #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'type',
		'type_name',
		'hit',
		'rank',
		'status',
		'creator',
		'create_time',
		'modifier',
		'modify_time',
		'publish_time',
	),
)); ?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>

<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Modal header</h4>
</div>

<div class="modal-body">
    <p>One fine body...</p>
</div>

<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Save changes',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>

<?php $this->endWidget(); ?>