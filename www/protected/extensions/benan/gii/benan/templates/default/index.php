<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label=Yii::t('schema', $this->pluralize($this->class2name($this->modelClass)));
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>

$this->menu=array(
	array('label'=>'创建<?php echo Yii::t('schema', $this->modelClass); ?>','url'=>array('create')),
	array('label'=>'管理<?php echo Yii::t('schema', $this->modelClass); ?>','url'=>array('admin')),
);
?>

<h1><?php echo $label; ?> 列表</h1>

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
