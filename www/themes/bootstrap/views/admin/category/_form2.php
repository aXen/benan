<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'span3')
)); ?>

	<p class="help-block">带 <span class="required">*</span> 字段是必填的。</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'parent_id',array('class'=>'span5')); ?>

<!--	--><?php //echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>16)); ?>
<!---->
<!--	--><?php //echo $form->textFieldRow($model,'creator',array('class'=>'span5','maxlength'=>32)); ?>
<!---->
<!--	--><?php //echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>
<!---->
<!--	--><?php //echo $form->textFieldRow($model,'modifier',array('class'=>'span5','maxlength'=>16)); ?>
<!---->
<!--	--><?php //echo $form->textFieldRow($model,'modify_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '创建' : '保存',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
