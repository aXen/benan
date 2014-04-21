<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'feedback-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">带 <span class="required">*</span> 是必填的。</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('name'))); ?>

	<?php echo $form->textFieldRow($model,'country',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('country'))); ?>

	<?php echo $form->textFieldRow($model,'province',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('province'))); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('city'))); ?>

	<?php echo $form->textFieldRow($model,'county',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('county'))); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('address'))); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>32, 'placeholder'=>'请输入'.$model->getAttributeLabel('type'))); ?>

	<?php echo $form->textFieldRow($model,'type_name',array('class'=>'span5','maxlength'=>32, 'placeholder'=>'请输入'.$model->getAttributeLabel('type_name'))); ?>

	<?php echo $form->textFieldRow($model,'user_type',array('class'=>'span5','maxlength'=>32, 'placeholder'=>'请输入'.$model->getAttributeLabel('user_type'))); ?>

	<?php echo $form->textFieldRow($model,'user_type_name',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('user_type_name'))); ?>

	<?php echo $form->textFieldRow($model,'ip',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('ip'))); ?>

	<?php echo $form->textFieldRow($model,'tel',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('tel'))); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('email'))); ?>

	<?php echo $form->textFieldRow($model,'message',array('class'=>'span5','maxlength'=>2000, 'placeholder'=>'请输入'.$model->getAttributeLabel('message'))); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '创建' : '保存',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
