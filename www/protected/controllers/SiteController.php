<?php

class SiteController extends Controller
{
    public function init()
    {
        Yii::import('admin.models.*');
        $this->layout = '//layouts/default';
    }

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
//        $this->layout = null;
        $criteria = new CDbCriteria;
//        $criteria->select='title';  // 只选择 'title' 列
//        $criteria->condition='postID=:postID';
//        $criteria->params=array(':postID'=>10);
        $criteria->limit = 6;
        $criteria->offset = 0;
        $criteria->order = 'create_time desc ';
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $dataProvider = new CActiveDataProvider('News',
            array('criteria' =>
                array(
                    'order' => 'create_time desc ',
                    'offset' => 0,
                    'limit' => 7
                ),
                'pagination' => false
            )
        );
//        $pagination = new CPagination();
//        $pagination->offset = 0;
//        $pagination->limit = 6;
//        $dataProvider->criteria = $criteria;
//        $dataProvider->pagination = $pagination;
        $heros = Hero::model()->findAll($criteria); // $params 不需要了
//        $heros = Hero::model()->query
        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'heros' => $heros,
//            'menu' => '_intromenu'
        ));
    }

    public function actionIntro()
    {
        $this->layout = '//layouts/default2';
        $this->render('intro', array(
        ));
    }

    public function actionOrgs()
    {
        $this->layout = '//layouts/default2';
        $this->render('orgs', array(
        ));
    }

    public function actionHonour()
    {
        $this->layout = '//layouts/default2';
        $this->render('honour', array(
        ));
    }

    public function actionTeam()
    {
        $this->layout = '//layouts/default2';
        $this->render('team', array(
        ));
    }

    public function actionCulture()
    {
        $this->layout = '//layouts/default2';
        $this->render('culture', array(
        ));
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $this->layout = '//layouts/default2';
        $this->render('contact', array());
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

    public function actionSupport()
    {
//        $this->layout = '//layouts/default3';
        $this->render('support', array());
    }

    public function actionFeedback()
    {
//        $this->layout = '//layouts/default3';
        $this->render('feedback', array());
    }

    public function actionMall()
    {
//        $this->layout = '//layouts/default3';
        $this->render('mall', array());
    }

    public function actionNetwork()
    {
//        $this->layout = '//layouts/default3';
        $this->render('network', array());
    }

    public function actionServiceIntro()
    {
//        $this->layout = '//layouts/default3';
        $this->render('support', array());
    }

    public function actionViewNews($id)
    {
        $dataProvider = new CActiveDataProvider('News');
        $criteria = new CDbCriteria;
//        $criteria->select='title';  // 只选择 'title' 列
//        $criteria->condition='postID=:postID';
//        $criteria->params=array(':postID'=>10);
        $criteria->limit = 6;
        $criteria->offset = 0;
        $heros = Hero::model()->findAll($criteria); // $params 不需要了
//        $heros = Hero::model()->query
        $this->render('news', array(
            'dataProvider' => $dataProvider,
            'heros' => $heros,
            'model' => $this->loadModel($id),
        ));
    }

    public function actionCompanyNews()
    {
        $dataProvider = new CActiveDataProvider('News');
        $criteria = new CDbCriteria;
        $criteria->condition = 'type=:typeid';
        $criteria->params = array(':typeid' => 1);
        $criteria->limit = 5;
        $criteria->offset = 0;
        $dataProvider->criteria = $criteria;
        $news = News::model()->findAll('type=1');
        $this->render('newslist', array(
            'dataProvider' => $dataProvider,
            'news' => $news,
        ));
    }

    public function actionIndustryNews()
    {
        $dataProvider = new CActiveDataProvider('News');
        $criteria = new CDbCriteria;
        $criteria->condition = 'type=:typeid';
        $criteria->params = array(':typeid' => 2);
        $criteria->limit = 5;
        $criteria->offset = 0;
        $dataProvider->criteria = $criteria;
        $news = News::model()->findAll('type=2');
        $this->render('newslist', array(
            'dataProvider' => $dataProvider,
            'news' => $news,
        ));
    }

    public function actionMediaNews()
    {
        $dataProvider = new CActiveDataProvider('News');
        $criteria = new CDbCriteria;
        $criteria->condition = 'type=:typeid';
        $criteria->params = array(':typeid' => 3);
        $criteria->limit = 5;
        $criteria->offset = 0;
        $dataProvider->criteria = $criteria;
        $news = News::model()->findAll('type=3');
        $this->render('newslist', array(
            'dataProvider' => $dataProvider,
            'news' => $news,
        ));
    }

    public function actionProducts()
    {
        $dataProvider = new CActiveDataProvider('Product');
        $categories = Category::model()->findAll('parent_id=0');
        $category = $categories[0];
        $this->render('products', array(
            'dataProvider' => $dataProvider,
            'categories' => $categories,
            'model' => $category,
        ));
    }

    public function actionViewCategory($id)
    {
        $dataProvider = new CActiveDataProvider('Product');
        $categories = Category::model()->findAll('parent_id=0');
        $category = Category::model()->findAll('id=' . $id)[0];
        $this->render('products', array(
            'dataProvider' => $dataProvider,
            'categories' => $categories,
            'model' => $category,
        ));
    }

    public function actionViewProduct($id)
    {
        $dataProvider = new CActiveDataProvider('Product');
        $categories = Category::model()->findAll('parent_id=0');
        $product = Product::model()->findAll('id=' . $id)[0];
        $this->render('product', array(
            'dataProvider' => $dataProvider,
            'categories' => $categories,
            'model' => $product,
        ));
    }

    public function actionCases()
    {
        $dataProvider = new CActiveDataProvider('UserCase');
        $this->render('cases', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionCaseType($id)
    {
        $dataProvider = new CActiveDataProvider('UserCase', array(
            'criteria' => array(
                'condition' => 'type=:type',
                'params' => array(':type' => $id),
            )
        ));
        $this->render('cases', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionViewCase($id)
    {
        $dataProvider = new CActiveDataProvider('UserCase');
        $usercase = UserCase::model()->findAll('id=' . $id)[0];
        $this->render('case', array(
            'dataProvider' => $dataProvider,
            'model' => $usercase,
        ));
    }

    public function loadModel($id)
    {
        $model = News::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
}