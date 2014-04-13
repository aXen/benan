<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	'brand'=>'&nbsp;',
	'brandOptions'=>array(
		'class'=>'csa-logo',
		'title'=>'本安亚大'
	),
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'首页', 'url'=>array('/site/index')),
//				array('label'=>'权限管理', 'url'=>'#', 'items'=>array(  /* NOTE: i18n */
//                    array('label'=>'用户管理', 'url'=>array('/user/index')),  /* NOTE: relative */
//                    array('label'=>'角色管理', 'url'=>array('#')),
////                    '---',
////                    array('label'=>'授权信息', 'url'=>array('#')),
//                )),
				array('label'=>'内容管理', 'url'=>'#', 'items'=>array(  /* NOTE: i18n */
                    array('label'=>'首页图片', 'url'=>array('/hero/index')),  /* NOTE: relative */
                    array('label'=>'新闻管理', 'url'=>array('/news/index')),
                    array('label'=>'留言管理', 'url'=>array('/note/index')),
                    '---',
                    array('label'=>'菜单配置', 'url'=>array('/menu/index')),
                )),
				array('label'=>'产品管理', 'url'=>'#', 'items'=>array(
	                array('label'=>'产品分类', 'url'=>array('/category/index', 'view'=>'about')),
	                array('label'=>'产品信息 ', 'url'=>array('/product/index')),
                )),
				array('label'=>'帮助', 'url'=>'#', 'items'=>array( 
	                array('label'=>'关于网站', 'url'=>array('/site/page', 'view'=>'about')),
	                array('label'=>'联系我们 ', 'url'=>array('/site/contact')),
                )),
//				array('label'=>'demo', 'url'=>'#', 'items'=>array(
//	                array('label'=>'关于网站', 'url'=>array('/site/page', 'view'=>'about')),
//	                array('label'=>'联系我们 ', 'url'=>array('/site/contact')),
//                )),
                array('label'=>'登录', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'注销 ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<dl>
			<dt></dt>
			<dd>
				瓶子科技 版权所有.<br/>
				Copyright &copy; <?php echo date('Y'); ?> by pingz, All Rights Reserved.<br/>
				<?php //echo Yii::powered(); ?>
			</dd>
		</dl>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
