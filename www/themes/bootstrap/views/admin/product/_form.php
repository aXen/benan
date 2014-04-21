<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'product-form',
    'enableAjaxValidation' => false,
)); ?>

<p class="help-block">带 <span class="required">*</span> 是必填的。</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'name', array('class' => 'span5', 'maxlength' => 200, 'placeholder' => '请输入' . $model->getAttributeLabel('name'))); ?>

<?php echo $form->dropDownListRow($model,'category_id',CHtml::listData($categories, 'id', 'name'), array('class'=>'span5 selectpicker','maxlength'=>16, 'placeholder'=>'请输入'.$model->getAttributeLabel('category_id'))); ?>

<div style="display: none;">
    <?php echo $form->textFieldRow($model, 'category_name', array('class' => 'span5', 'maxlength' => 200, 'placeholder' => '请输入' . $model->getAttributeLabel('category_name'))); ?>
</div>

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
    <?php echo $form->textFieldRow($model, 'image', array('class' => 'span5', 'maxlength' => 200, 'placeholder' => '请输入' . $model->getAttributeLabel('image'))); ?>
</div>

<?php
$this->widget('application.extensions.dropzone.EDropzone', array(
    'model' => $model,
    'attribute' => 'image',
    'url' => $this->createUrl('file/uploadproductimage'),
    'mimeTypes' => array('image/jpeg', 'image/png'),
    'onSuccess' => 'AfterUpload(arguments);',
    'options' => array(),
));
?>
<script type="text/javascript">
    // 保存图片名称
    function AfterUpload(args) {
        $("input[name='Product[image]']").val(args[1]);
    }
</script>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? '创建' : '保存',
    )); ?>
</div>

<?php $this->endWidget(); ?>
