<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('id'))); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('title'))); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>32, 'placeholder'=>'请输入'.$model->getAttributeLabel('type'))); ?>

	<?php echo $form->textFieldRow($model,'message',array('class'=>'span5','maxlength'=>2000, 'placeholder'=>'请输入'.$model->getAttributeLabel('message'))); ?>

	<?php echo $form->textFieldRow($model,'ip',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('ip'))); ?>

	<?php echo $form->textFieldRow($model,'tel',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('tel'))); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('email'))); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5 form_datetime', 'readonly'=>'true', 'placeholder'=>'请输入'.$model->getAttributeLabel('create_time'))); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'查询',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
