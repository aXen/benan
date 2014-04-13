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
	'$label'=>array('index'),
	'创建',
);\n";
?>

$this->menu=array(
	array('label'=>'<?php echo Yii::t('schema',$this->modelClass); ?>列表','url'=>array('index')),
	array('label'=>'管理<?php echo Yii::t('schema', $this->modelClass); ?>','url'=>array('admin')),
);
?>

<h1>创建 <?php echo Yii::t('schema', $this->modelClass); ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
