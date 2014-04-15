<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 登录';
$this->breadcrumbs=array(
	'登录',
);
?>

<h1>登录</h1>

<p>请填写登录身份信息：</p>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

    <p class="note">带 <span class="required">*</span> 是必须的。</p>

	<?php echo $form->textFieldRow($model,'username'); ?>

<!--	--><?php //echo $form->passwordFieldRow($model,'password',array(
//        'hint'=>'Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>',
//    )); ?>

    <?php echo $form->passwordFieldRow($model,'password'); ?>

	<?php echo $form->checkBoxRow($model,'rememberMe'); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'登录',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
