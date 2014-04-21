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
                array('label'=>'首页', 'url'=>array('/')),
//				array('label'=>'权限管理', 'url'=>'#', 'items'=>array(  /* NOTE: i18n */
//                    array('label'=>'用户管理', 'url'=>array('/user/index')),  /* NOTE: relative */
//                    array('label'=>'角色管理', 'url'=>array('#')),
////                    '---',
////                    array('label'=>'授权信息', 'url'=>array('#')),
//                )),
                array('label'=>'内容管理', 'url'=>'#', 'items'=>array(  /* NOTE: i18n */
                    array('label'=>'首页图片', 'url'=>array('hero/index')),  /* NOTE: relative */
                    array('label'=>'新闻管理', 'url'=>array('news/index')),
                    array('label'=>'留言管理', 'url'=>array('feedback/index')),
                    '---',
                    array('label'=>'菜单配置', 'url'=>array('menu/index')),
                )),
                array('label'=>'产品管理', 'url'=>'#', 'items'=>array(
                    array('label'=>'产品分类', 'url'=>array('category/index')),
                    array('label'=>'产品信息 ', 'url'=>array('product/index')),
                )),
                array('label'=>'帮助', 'url'=>'#', 'items'=>array(
                    array('label'=>'关于网站', 'url'=>array('home/page', 'view'=>'about')),
                    array('label'=>'联系我们 ', 'url'=>array('home/contact')),
                )),
//				array('label'=>'demo', 'url'=>'#', 'items'=>array(
//	                array('label'=>'关于网站', 'url'=>array('/site/page', 'view'=>'about')),
//	                array('label'=>'联系我们 ', 'url'=>array('/site/contact')),
//                )),
                array('label'=>'登录', 'url'=>array('login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'注销 ('.Yii::app()->user->name.')', 'url'=>array('home/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>