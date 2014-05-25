<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class AdminController extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
    //	public $layout='/column2';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

    public function getCreateContext(){
        $context=array();
        $context['creator']=Yii::app()->user->name;
        $context['modifier']=Yii::app()->user->name;
        $context['create_time']=date('Y-m-d H:i:s',time());
        $context['modify_time']=date('Y-m-d H:i:s',time());
        $context['status']=100;
        return $context;
    }
}