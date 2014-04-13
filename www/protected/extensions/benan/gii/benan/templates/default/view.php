<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=Yii::t('schema', $this->pluralize($this->class2name($this->modelClass)));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
);\n";
?>

$this->menu=array(
	array('label'=>'<?php echo Yii::t('schema', $this->modelClass); ?>列表','url'=>array('index')),
	array('label'=>'创建<?php echo Yii::t('schema', $this->modelClass); ?>','url'=>array('create')),
	array('label'=>'更新<?php echo Yii::t('schema', $this->modelClass); ?>','url'=>array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'删除<?php echo Yii::t('schema', $this->modelClass); ?>','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'确定要删除这条记录吗？')),
	array('label'=>'管理<?php echo Yii::t('schema', $this->modelClass); ?>','url'=>array('admin')),
);
?>

<h1>查看<?php echo Yii::t('schema', $this->modelClass)." #<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
	echo "\t\t'".$column->name."',\n";
?>
	),
)); ?>
