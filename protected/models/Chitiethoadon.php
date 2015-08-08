<?php

/**
 * This is the model class for table "chitiethoadon".
 *
 * The followings are the available columns in table 'chitiethoadon':
 * @property integer $chitiethoadon_id
 * @property integer $sanpham_id
 * @property integer $hoadon_id
 * @property integer $soluongmua
 * @property string $khuyenmai
 * @property integer $baohanh
 *
 * The followings are the available model relations:
 * @property Hoadon $hoadon
 * @property Sanpham $sanpham
 */
class Chitiethoadon extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'chitiethoadon';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('sanpham_id, hoadon_id, soluongmua, khuyenmai, baohanh', 'required'),
            array('sanpham_id, hoadon_id, soluongmua, baohanh', 'numerical', 'integerOnly' => true),
            array('khuyenmai', 'length', 'max' => 30),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('chitiethoadon_id, sanpham_id, hoadon_id, soluongmua, khuyenmai, baohanh', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'hoadon' => array(self::BELONGS_TO, 'Hoadon', 'hoadon_id'),
            'sanpham' => array(self::BELONGS_TO, 'Sanpham', 'sanpham_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'chitiethoadon_id' => 'Số Thứ Tự',
            'sanpham_id' => 'Sản Phẩm',
            'hoadon_id' => 'Hóa Đơn',
            'soluongmua' => 'Số Lượng Mua',
            'khuyenmai' => 'Khuyến Mại',
            'baohanh' => 'Bảo Hành',
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

        $criteria->compare('chitiethoadon_id', $this->chitiethoadon_id);
        $criteria->compare('sanpham_id', $this->sanpham_id);
        $criteria->compare('hoadon_id', $this->hoadon_id);
        $criteria->compare('soluongmua', $this->soluongmua);
        $criteria->compare('khuyenmai', $this->khuyenmai, true);
        $criteria->compare('baohanh', $this->baohanh);
        $criteria->order = 'chitiethoadon_id DESC';

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Chitiethoadon the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getSanphamName() {
        $sanpham = Sanpham::model()->findByPk($this->sanpham_id);
        if ($sanpham) {
            return $sanpham->ten;
        } else {
            return 'Chưa Xác Định';
        }
    }
}
