<?php

/**
 * This is the model class for table "khachhang".
 *
 * The followings are the available columns in table 'khachhang':
 * @property integer $khachhang_id
 * @property string $ten
 * @property string $email
 * @property integer $phone
 *
 * The followings are the available model relations:
 * @property Hoadon[] $hoadons
 */
class Khachhang extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'khachhang';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ten, email, phone', 'required'),
            array('phone', 'numerical', 'integerOnly' => true),
            array('ten, email', 'length', 'max' => 40),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('khachhang_id, ten, email, phone', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'hoadons' => array(self::HAS_MANY, 'Hoadon', 'khachhang_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'khachhang_id' => 'Số Thứ tự',
            'ten' => 'Tên',
            'email' => 'Email',
            'phone' => 'Số Điện Thoại',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('khachhang_id', $this->khachhang_id);
        $criteria->compare('ten', $this->ten, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('phone', $this->phone);
        $criteria->order = 'khachhang_id DESC';
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Khachhang the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getKhachhangsName() {
        $khachhangs = $this->findAll();
        $names = array();
        foreach ($khachhangs as $khachhang) {
            $names[$khachhang->khachhang_id] = $khachhang->ten;
        }
        return $names;
    }

}
