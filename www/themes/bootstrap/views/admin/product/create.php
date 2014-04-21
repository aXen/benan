<?php
$cs=Yii::app()->clientScript;
$baseUrl = Yii::app()->baseUrl;
// select
$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
//$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
$cs->registerCssFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.css');
?>
<?php
$this->breadcrumbs=array(
	'产品'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'产品列表','url'=>array('index')),
	array('label'=>'管理产品','url'=>array('admin')),
);
?>

<h1>创建 产品</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'categories'=>$categories)); ?>

<script type="text/javascript">
    $(function(){
        $('.selectpicker').selectpicker();
    });
</script>