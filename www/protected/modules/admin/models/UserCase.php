<?php

/**
 * This is the model class for table "tbl_case".
 *
 * The followings are the available columns in table 'tbl_case':
 * @property integer $id
 * @property string $name
 * @property integer $type
 * @property string $type_name
 * @property string $description
 * @property string $image
 * @property string $status
 * @property string $creator
 * @property string $create_time
 * @property string $modifier
 * @property string $modify_time
 */
class UserCase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_case';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, type, description, image', 'required'),
			array('type', 'numerical', 'integerOnly'=>true),
			array('name, type_name, image', 'length', 'max'=>200),
			array('status, modifier', 'length', 'max'=>16),
			array('creator', 'length', 'max'=>32),
			array('create_time, modify_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, type, type_name, description, image, status, creator, create_time, modifier, modify_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '编号',
			'name' => '名称',
			'type' => '类别',
			'type_name' => '类别',
			'description' => '描述',
			'image' => '图片',
			'status' => '状态',
			'creator' => '创建者',
			'create_time' => '创建时间',
			'modifier' => '更新者',
			'modify_time' => '更新时间',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('type_name',$this->type_name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('creator',$this->creator,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('modifier',$this->modifier,true);
		$criteria->compare('modify_time',$this->modify_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserCase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
