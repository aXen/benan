<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('id'))); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('name'))); ?>

	<?php echo $form->textFieldRow($model,'category_id',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('category_id'))); ?>

	<?php echo $form->textFieldRow($model,'category_name',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('category_name'))); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('image'))); ?>

	<?php echo $form->dropDownListRow($model,'status',array('100'=>'正常', '-1'=>'已删除'), array('class'=>'span5 selectpicker','maxlength'=>16, 'placeholder'=>'请输入'.$model->getAttributeLabel('status'))); ?>

	<?php echo $form->textFieldRow($model,'creator',array('class'=>'span5','maxlength'=>32, 'placeholder'=>'请输入'.$model->getAttributeLabel('creator'))); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5 form_datetime', 'readonly'=>'true', 'placeholder'=>'请输入'.$model->getAttributeLabel('create_time'))); ?>

	<?php echo $form->textFieldRow($model,'modifier',array('class'=>'span5','maxlength'=>16, 'placeholder'=>'请输入'.$model->getAttributeLabel('modifier'))); ?>

	<?php echo $form->textFieldRow($model,'modify_time',array('class'=>'span5 form_datetime', 'readonly'=>'true', 'placeholder'=>'请输入'.$model->getAttributeLabel('modify_time'))); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'查询',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
