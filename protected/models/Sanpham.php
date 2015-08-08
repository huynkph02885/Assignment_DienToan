<?php

/**
 * This is the model class for table "sanpham".
 *
 * The followings are the available columns in table 'sanpham':
 * @property integer $sanpham_id
 * @property integer $loaisanpham_id
 * @property string $ten
 * @property string $masp
 * @property string $mota
 *
 * The followings are the available model relations:
 * @property Chitiethoadon[] $chitiethoadons
 * @property Loaisanpham $loaisanpham
 */
class Sanpham extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'sanpham';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('loaisanpham_id, ten, masp, mota', 'required'),
            array('loaisanpham_id', 'numerical', 'integerOnly' => true),
            array('ten, masp', 'length', 'max' => 30),
            array('mota', 'length', 'max' => 90),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('sanpham_id, loaisanpham_id, ten, masp, mota', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'chitiethoadons' => array(self::HAS_MANY, 'Chitiethoadon', 'sanpham_id'),
            'loaisanpham' => array(self::BELONGS_TO, 'Loaisanpham', 'loaisanpham_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'sanpham_id' => 'Số Thứ Tự',
            'loaisanpham_id' => 'Loại Sản Phẩm',
            'ten' => 'Tên Sản Phẩm',
            'masp' => 'Mã Sản Phẩm',
            'mota' => 'Mô Tả Sản Phẩm',
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

        $criteria->compare('sanpham_id', $this->sanpham_id);
        $criteria->compare('loaisanpham_id', $this->loaisanpham_id);
        $criteria->compare('ten', $this->ten, true);
        $criteria->compare('masp', $this->masp, true);
        $criteria->compare('mota', $this->mota, true);
        $criteria->order = 'sanpham_id DESC';
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Sanpham the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getLoaisanphamName() {
        $loaisanpham = Loaisanpham::model()->findByPk($this->loaisanpham_id);
        if ($loaisanpham) {
            return $loaisanpham->ten;
        } else {
            return 'Chưa Xác Định';
        }
    }
    public function getSanphamsName() {
        $sanphams = $this->findAll();
        $names = array();
        foreach ($sanphams as $sanpham) {
            $names[$sanpham->sanpham_id] = $sanpham->ten;
        }
        return $names;
    }

}
