<?php
$cs=Yii::app()->clientScript;
$baseUrl = Yii::app()->baseUrl;

// select
$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
//$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
$cs->registerCssFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.css');
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'hero-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">带 <span class="required">*</span> 是必填的。</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('title'))); ?>

<div style="display:none;">
	<?php echo $form->textFieldRow($model,'picture',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('picture'))); ?>
</div>
   
    <?php
    $this->widget('application.extensions.dropzone.EDropzone', array(
        'model' => $model,
        'attribute' => 'picture',
        'url' => $this->createUrl('file/uploadpicture'),
        'mimeTypes' => array('image/jpeg', 'image/png'),
        'onSuccess' => 'AfterUpload(arguments);',
        'options' => array(),
    ));
    ?>
    <script type="text/javascript">
        // 保存图片名称
        function AfterUpload(args){
            $("input[name='Hero[picture]']").val(args[1]);
        }
    </script>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>2000, 'placeholder'=>'请输入'.$model->getAttributeLabel('description'))); ?>

	<?php echo $form->textFieldRow($model,'href',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('href'))); ?>

<!--	--><?php //echo $form->textFieldRow($model,'hit',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('hit'))); ?>

    <?php echo $form->dropDownListRow($model,'rank',array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('class'=>'span5 selectpicker','maxlength'=>16, 'placeholder'=>'请输入'.$model->getAttributeLabel('rank'))); ?>

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