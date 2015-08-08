<?php

/**
 * This is the model class for table "hoadon".
 *
 * The followings are the available columns in table 'hoadon':
 * @property integer $hoadon_id
 * @property integer $khachhang_id
 * @property string $ngaymua
 *
 * The followings are the available model relations:
 * @property Chitiethoadon[] $chitiethoadons
 * @property Khachhang $khachhang
 */
class Hoadon extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hoadon';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('khachhang_id, ngaymua', 'required'),
            array('khachhang_id', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('hoadon_id, khachhang_id, ngaymua', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'chitiethoadons' => array(self::HAS_MANY, 'Chitiethoadon', 'hoadon_id'),
            'khachhang' => array(self::BELONGS_TO, 'Khachhang', 'khachhang_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'hoadon_id' => 'Số Thứ Tự',
            'khachhang_id' => 'Khách hàng Đặt mua',
            'ngaymua' => 'Ngày mua',
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

        $criteria->compare('hoadon_id', $this->hoadon_id);
        $criteria->compare('khachhang_id', $this->khachhang_id);
        $criteria->compare('ngaymua', $this->ngaymua, true);
        $criteria->order = 'hoadon_id DESC';
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Hoadon the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getKhachHangName() {
        $khachhang = Khachhang::model()->findByPk($this->khachhang_id);
        if ($khachhang) {
            return $khachhang->ten;
        } else {
            return 'Chưa Xác Định';
        }
    }
    public function getHoadonId() {
        $hoadons = $this->findAll();
        $names = array();
        foreach ($hoadons as $hoadon) {
            $names[$hoadon->hoadon_id] = $hoadon->hoadon_id;
        }
        return $names;
    }

}
