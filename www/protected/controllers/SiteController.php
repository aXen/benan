<?php

class SiteController extends Controller
{
    public function init()
    {
        Yii::import('admin.models.*');
    }

    /**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
        $dataProvider=new CActiveDataProvider('News');
        $criteria=new CDbCriteria;
//        $criteria->select='title';  // 只选择 'title' 列
//        $criteria->condition='postID=:postID';
//        $criteria->params=array(':postID'=>10);
        $criteria->limit = 6;
        $criteria->offset = 0;
        $heros=Hero::model()->findAll($criteria); // $params 不需要了
//        $heros = Hero::model()->query
		$this->render('index',array(
            'dataProvider'=>$dataProvider,
            'heros'=>$heros,
        ));
	}

    public function actionViewNews($id)
    {
        $dataProvider=new CActiveDataProvider('News');
        $criteria=new CDbCriteria;
//        $criteria->select='title';  // 只选择 'title' 列
//        $criteria->condition='postID=:postID';
//        $criteria->params=array(':postID'=>10);
        $criteria->limit = 6;
        $criteria->offset = 0;
        $heros=Hero::model()->findAll($criteria); // $params 不需要了
//        $heros = Hero::model()->query
        $this->render('news',array(
            'dataProvider'=>$dataProvider,
            'heros'=>$heros,
            'model'=>$this->loadModel($id),
        ));
    }

    public function actionIntro()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('intro',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }

    public function actionOrgs()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('orgs',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }

    public function actionHonour()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('honour',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }

    public function actionTeam()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('team',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }

    public function actionCulture()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('culture',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }

    public function actionSupport()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('support',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }

    public function actionFeedback()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('feedback',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }


    public function actionMall()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('mall',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }


    public function actionNetwork()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('network',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }


    public function actionCases()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('cases',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }

    public function actionProducts()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('products',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }

    public function actionCompanyNews()
    {
        $dataProvider=new CActiveDataProvider('News');
        $criteria=new CDbCriteria;
        $criteria->condition='type=:typeid';
        $criteria->params=array(':typeid'=>1);
        $criteria->limit = 5;
        $criteria->offset = 0;
        $dataProvider->criteria = $criteria;
        $news=News::model()->findAll('type=1');
        $this->render('companynews',array(
            'dataProvider'=>$dataProvider,
            'news'=>$news,
        ));
    }

    public function actionIndustryNews()
    {
        $dataProvider=new CActiveDataProvider('News');
        $criteria=new CDbCriteria;
        $criteria->condition='type=:typeid';
        $criteria->params=array(':typeid'=>2);
        $criteria->limit = 5;
        $criteria->offset = 0;
        $dataProvider->criteria = $criteria;
        $news=News::model()->findAll('type=2');
        $this->render('industrynews',array(
            'dataProvider'=>$dataProvider,
            'news'=>$news,
        ));
    }

    public function actionMediaNews()
    {
        $dataProvider=new CActiveDataProvider('News');
        $criteria=new CDbCriteria;
        $criteria->condition='type=:typeid';
        $criteria->params=array(':typeid'=>3);
        $criteria->limit = 5;
        $criteria->offset = 0;
        $dataProvider->criteria = $criteria;
        $news=News::model()->findAll('type=3');
        $this->render('medianews',array(
            'dataProvider'=>$dataProvider,
            'news'=>$news,
        ));
    }

    public function actionViewCategory($id)
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=Category::model()->findAll('id='.$id)[0];
        $this->render('products',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
    }

    public function actionViewProduct($id)
    {
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $product=Product::model()->findAll('id='.$id)[0];
        $this->render('product',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$product,
        ));
    }

    public function loadModel($id)
    {
        $model=News::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
        $dataProvider=new CActiveDataProvider('Product');
        $categories=Category::model()->findAll('parent_id=0');
        $category=$categories[0];
        $this->render('contact',array(
            'dataProvider'=>$dataProvider,
            'categories'=>$categories,
            'model'=>$category,
        ));
//		$model=new ContactForm;
//		if(isset($_POST['ContactForm']))
//		{
//			$model->attributes=$_POST['ContactForm'];
//			if($model->validate())
//			{
//				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
//				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
//				$headers="From: $name <{$model->email}>\r\n".
//					"Reply-To: {$model->email}\r\n".
//					"MIME-Version: 1.0\r\n".
//					"Content-Type: text/plain; charset=UTF-8";
//
//				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
//				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
//				$this->refresh();
//			}
//		}
//		$this->render('contact',array('model'=>$model));
	}
}