<?php
/**
 * ApiController class file
 * @author Joachim Werner <joachim.werner@diggin-data.de>
 */

/**
 * ApiController
 *
 * @uses Controller
 * @author Joachim Werner <joachim.werner@diggin-data.de>
 * @author
 * @see http://www.gen-x-design.com/archives/making-restful-requests-in-php/
 * @license (tbd)
 */
class FileController extends Controller
{
    public function actionUpload()
    {
        $folder = Yii::getPathOfAlias('webroot') . '/assets/files/'; // folder for uploaded files

        if (!is_dir($folder)) {
            mkdir($folder);
        }

        $model = new Hero;
        $file = CUploadedFile::getInstance($model, 'picture');
        $file->saveAs($folder . uniqid());
        echo CJSON::encode(uniqid());
    }


    /**
     * 上传图片
     */
    public function actionUploadPicture()
    {
        $folder = Yii::getPathOfAlias('webroot') . '/assets/files/pictures/'; // folder for uploaded files

        if (!is_dir($folder)) {
            mkdir($folder);
        }

        $model = new Hero;
        $file = CUploadedFile::getInstance($model, 'picture');
        CFileHelper::getExtension($file->name);
        $filePath = $folder . uniqid() .".". CFileHelper::getExtension($file->name);
        $file->saveAs($filePath);
        echo basename($filePath);
    }
}

?>