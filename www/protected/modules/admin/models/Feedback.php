<?php

/**
 * This is the model class for table "tbl_feedback".
 *
 * The followings are the available columns in table 'tbl_feedback':
 * @property integer $id
 * @property string $name
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $county
 * @property string $address
 * @property string $type
 * @property string $type_name
 * @property string $user_type
 * @property string $user_type_name
 * @property string $ip
 * @property string $tel
 * @property string $email
 * @property string $message
 * @property string $status
 * @property string $creator
 * @property string $create_time
 * @property string $modifier
 * @property string $modify_time
 */
class Feedback extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_feedback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, country, province, city, county, address, type, user_type, tel, message', 'required'),
			array('name, country, province, city, county, address, user_type_name', 'length', 'max'=>200),
			array('type, type_name, user_type, creator', 'length', 'max'=>32),
			array('ip, tel, email', 'length', 'max'=>128),
			array('message', 'length', 'max'=>2000),
			array('status, modifier', 'length', 'max'=>16),
			array('create_time, modify_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, country, province, city, county, address, type, type_name, user_type, user_type_name, ip, tel, email, message, status, creator, create_time, modifier, modify_time', 'safe', 'on'=>'search'),
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
			'country' => '国家',
			'province' => '省份',
			'city' => '城市',
			'county' => '区县',
			'address' => '地址',
			'type' => '类别',
			'type_name' => '类别',
			'user_type' => '客户性质',
			'user_type_name' => '客户性质',
			'ip' => 'ip',
			'tel' => '电话',
			'email' => '电子邮件',
			'message' => '留言',
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
		$criteria->compare('country',$this->country,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('type_name',$this->type_name,true);
		$criteria->compare('user_type',$this->user_type,true);
		$criteria->compare('user_type_name',$this->user_type_name,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('message',$this->message,true);
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
	 * @return Feedback the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
