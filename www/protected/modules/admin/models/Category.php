<?php

/**
 * This is the model class for table "tbl_category".
 *
 * The followings are the available columns in table 'tbl_category':
 * @property integer $id
 * @property string $name
 * @property integer $parent_id
 * @property string $class_name
 * @property string $status
 * @property string $creator
 * @property string $create_time
 * @property string $modifier
 * @property string $modify_time
 */
class Category extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, parent_id', 'required'),
			array('parent_id', 'numerical', 'integerOnly'=>true),
			array('name, class_name', 'length', 'max'=>200),
			array('status, modifier', 'length', 'max'=>16),
			array('creator', 'length', 'max'=>32),
			array('create_time, modify_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, parent_id, class_name, status, creator, create_time, modifier, modify_time', 'safe', 'on'=>'search'),
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
            'parent' => array(self::BELONGS_TO, 'Category', 'parent_id'),
            'children' => array(self::HAS_MANY, 'Category', 'parent_id'),
            'childCount' => array(self::STAT, 'Category', 'parent_id'),
            'products' => array(self::HAS_MANY, 'Product', 'category_id'),
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
			'parent_id' => '父类',
			'class_name' => 'class名称',
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
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('class_name',$this->class_name,true);
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
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /**
     * @return array behaviors.
     */
    public function behaviors()
    {
        return array(
            'TreeBehavior' => array(
                'class' => 'ext.behaviors.XTreeBehavior',
                'treeLabelMethod'=> 'getTreeLabel',
//                'menuUrlMethod'=> 'getMenuUrl',
            ),
        );
    }

    /**
     * @return string tree label
     */
    public function getTreeLabel()
    {
        return $this->name . ':' . $this->childCount;
    }
}
