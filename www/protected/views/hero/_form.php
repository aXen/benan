<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'hero-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">带 <span class="required">*</span> 是必填的。</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('title'))); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>2000, 'placeholder'=>'请输入'.$model->getAttributeLabel('description'))); ?>

    <div style="display:none;">
	<?php echo $form->textFieldRow($model,'picture',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('picture'))); ?>
    </div>

	<?php echo $form->textFieldRow($model,'hit',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('hit'))); ?>

	<?php echo $form->textFieldRow($model,'rank',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('rank'))); ?>

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

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '创建' : '保存',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
