<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'menu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">带 <span class="required">*</span> 是必须的。</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('title'))); ?>

	<?php echo $form->textFieldRow($model,'parent_id',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('parent_id'))); ?>

	<?php echo $form->textFieldRow($model,'level',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('level'))); ?>

	<?php echo $form->textFieldRow($model,'href',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('href'))); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '创建' : '保存',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
