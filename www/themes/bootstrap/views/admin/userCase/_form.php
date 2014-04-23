<?php
$cs=Yii::app()->clientScript;
$baseUrl = Yii::app()->baseUrl;

// select
$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
//$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
$cs->registerCssFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.css');
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-case-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">带 <span class="required">*</span> 是必填的。</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('name'))); ?>

    <?php echo $form->dropDownListRow($model,'type',array('1'=>'桥梁、交通钢结构', '2'=>'工程机械', '3'=>'机械仪表', '4'=>'厂房钢结构'), array('class'=>'span5 selectpicker','maxlength'=>16, 'placeholder'=>'请输入'.$model->getAttributeLabel('type'))); ?>

<!--	--><?php //echo $form->textFieldRow($model,'type',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('type'))); ?>

<div style="display: none;">
	<?php echo $form->textFieldRow($model,'type_name',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('type_name'))); ?>
</div>

<!--	--><?php //echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

<?php $this->widget('application.extensions.TheCKEditor.theCKEditorWidget', array(
    'model' => $model, # Data-Model (form model)
    'attribute' => 'description', # Attribute in the Data-Model
    'height' => '400px',
    'width' => '100%',
    'toolbarSet' => 'Basic', # EXISTING(!) Toolbar (see: ckeditor.js)
    'ckeditor' => Yii::app()->basePath . '/../assets/ckeditor/ckeditor.php',
    # Path to ckeditor.php
    'ckBasePath' => Yii::app()->baseUrl . '/assets/ckeditor/',
    # Relative Path to the Editor (from Web-Root)
    'css' => Yii::app()->baseUrl . '/assets/css/index.css',
    # Additional Parameters
)); ?>

<div style="display:none;">
	<?php echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('image'))); ?>
</div>

<?php
$this->widget('application.extensions.dropzone.EDropzone', array(
    'model' => $model,
    'attribute' => 'image',
    'url' => $this->createUrl('file/UploadUserCaseImage'),
    'mimeTypes' => array('image/jpeg', 'image/png'),
    'onSuccess' => 'AfterUpload(arguments);',
    'options' => array(),
));
?>
<script type="text/javascript">
    // 保存图片名称
    function AfterUpload(args) {
        $("input[name='UserCase[image]']").val(args[1]);
    }
</script>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'submit',
        'type'=>'primary',
        'label'=>$model->isNewRecord ? '创建' : '保存',
    )); ?>
</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
    $(function(){
        $('.selectpicker').selectpicker();
    });
</script>
