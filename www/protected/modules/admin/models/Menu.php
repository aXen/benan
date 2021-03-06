<?php

/**
 * This is the model class for table "tbl_menu".
 *
 * The followings are the available columns in table 'tbl_menu':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $parent_id
 * @property integer $level
 * @property string $level_class
 * @property string $single_page
 * @property string $predefined
 * @property string $page_content
 * @property string $href
 * @property integer $hit
 * @property string $status
 * @property string $creator
 * @property string $create_time
 * @property string $modifier
 * @property string $modify_time
 */
class Menu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, parent_id, level', 'required'),
			array('parent_id, level, hit', 'numerical', 'integerOnly'=>true),
			array('title, level_class', 'length', 'max'=>200),
			array('single_page, predefined', 'length', 'max'=>1),
			array('href', 'length', 'max'=>128),
			array('status, modifier', 'length', 'max'=>16),
			array('creator', 'length', 'max'=>32),
			array('description, page_content, create_time, modify_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, parent_id, level, level_class, single_page, predefined, page_content, href, hit, status, creator, create_time, modifier, modify_time', 'safe', 'on'=>'search'),
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
			'title' => '标题',
			'description' => '描述',
			'parent_id' => '父类',
			'level' => '级别',
			'level_class' => '级别class',
			'single_page' => '是否单页面',
			'predefined' => '系统预定义',
			'page_content' => '页面内容',
			'href' => '链接',
			'hit' => '点击次数',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('level',$this->level);
		$criteria->compare('level_class',$this->level_class,true);
		$criteria->compare('single_page',$this->single_page,true);
		$criteria->compare('predefined',$this->predefined,true);
		$criteria->compare('page_content',$this->page_content,true);
		$criteria->compare('href',$this->href,true);
		$criteria->compare('hit',$this->hit);
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
	 * @return Menu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
