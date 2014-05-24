<?php
$cs=Yii::app()->clientScript;
$baseUrl = Yii::app()->baseUrl;

// datetimepicker
$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
$cs->registerCssFile($baseUrl.'/widgets/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css');

// select
$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
//$cs->registerScriptFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.js', CClientScript::POS_END, array('charset'=>'UTF-8'));
$cs->registerCssFile($baseUrl.'/widgets/bootstrap-select/bootstrap-select.css');
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">带 <span class="required">*</span> 是必填的。</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('title'))); ?>

    <?php $this->widget('application.extensions.TheCKEditor.theCKEditorWidget',array(
        'model'=>$model,                # Data-Model (form model)
        'attribute'=>'content',         # Attribute in the Data-Model
        'height'=>'400px',
        'width'=>'100%',
        'toolbarSet'=>'Basic',          # EXISTING(!) Toolbar (see: ckeditor.js)
        'ckeditor'=>Yii::app()->basePath.'/../assets/ckeditor/ckeditor.php',
        # Path to ckeditor.php
        'ckBasePath'=>Yii::app()->baseUrl.'/assets/ckeditor/',
        # Relative Path to the Editor (from Web-Root)
        'css' => Yii::app()->baseUrl.'/assets/css/index.css',
        # Additional Parameters
    ) ); ?>

<?php echo $form->dropDownListRow($model,'type',array('1'=>'企业新闻', '2'=>'行业动态', '3'=>'媒体报道'), array('class'=>'span5 selectpicker','maxlength'=>16, 'placeholder'=>'请输入'.$model->getAttributeLabel('type'))); ?>

<!--	--><?php //echo $form->textFieldRow($model,'type',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('type'))); ?>

<div style="display:none;">
	<?php echo $form->textFieldRow($model,'type_name',array('class'=>'span5','maxlength'=>200, 'placeholder'=>'请输入'.$model->getAttributeLabel('type_name'))); ?>
</div>

<!--	--><?php //echo $form->textFieldRow($model,'hit',array('class'=>'span5', 'placeholder'=>'请输入'.$model->getAttributeLabel('hit'))); ?>

    <?php echo $form->dropDownListRow($model,'rank',array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('class'=>'span5 selectpicker','maxlength'=>16, 'placeholder'=>'请输入'.$model->getAttributeLabel('rank'))); ?>

    <?php echo $form->textFieldRow($model,'publish_time',array('class'=>'span5 form_datetime', 'readonly'=>'true', 'placeholder'=>'请输入'.$model->getAttributeLabel('publish_time'))); ?>

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
        $('.form_datetime').datetimepicker({
            language:  'zh-CN',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
        $('.form_date').datetimepicker({
            language:  'zh-CN',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            language:  'zh-CN',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });
        $('.selectpicker').selectpicker();
    });
</script>
