<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'menu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">带 <span class="required">*</span> 是必填的。</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('title'))); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'parent_id',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('parent_id'))); ?>

	<?php echo $form->textFieldRow($model,'level',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('level'))); ?>

	<?php echo $form->textFieldRow($model,'level_class',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('level_class'))); ?>

	<?php echo $form->textFieldRow($model,'single_page',array('class'=>'span5','maxlength'=>1, 'placeholder'=>'请输入'.$model->getAttributeLabel('single_page'))); ?>

	<?php echo $form->textFieldRow($model,'predefined',array('class'=>'span5','maxlength'=>1, 'placeholder'=>'请输入'.$model->getAttributeLabel('predefined'))); ?>

	<?php echo $form->textAreaRow($model,'page_content',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'href',array('class'=>'span5','maxlength'=>128, 'placeholder'=>'请输入'.$model->getAttributeLabel('href'))); ?>

	<?php echo $form->textFieldRow($model,'hit',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('hit'))); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '创建' : '保存',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
