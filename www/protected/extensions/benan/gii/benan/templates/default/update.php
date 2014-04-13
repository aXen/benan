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
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'更新',
);\n";
?>

$this->menu=array(
	array('label'=>'<?php echo Yii::t('schema', $this->modelClass); ?>列表','url'=>array('index')),
	array('label'=>'创建<?php echo Yii::t('schema', $this->modelClass);?>','url'=>array('create')),
	array('label'=>'查看<?php echo Yii::t('schema', $this->modelClass); ?>','url'=>array('view','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'管理<?php echo Yii::t('schema', $this->modelClass); ?>','url'=>array('admin')),
);
?>

<h1>更新<?php echo Yii::t('schema', $this->modelClass)." <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form',array('model'=>\$model)); ?>"; ?>