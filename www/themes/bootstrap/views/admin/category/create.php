<?php
$this->breadcrumbs=array(
	'产品分类'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'产品分类列表','url'=>array('index')),
	array('label'=>'管理产品分类','url'=>array('admin')),
);
?>

<div class="container">
    <h1>创建 产品分类</h1>
</div>

<div class="row">
    <?php echo $this->renderPartial('_tree', array('model' => $model)); ?>

    <?php echo $this->renderPartial('_form2', array('model' => $model)); ?>
</div>