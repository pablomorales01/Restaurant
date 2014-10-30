<?php

/**
 * This is the model class for table "comanda".
 *
 * The followings are the available columns in table 'comanda':
 * @property integer $COM_ID
 * @property integer $VENTA_ID
 * @property integer $MENU_ID
 * @property integer $MESA_ID
 * @property integer $USU_ID
 * @property integer $USU_USU_ID
 * @property string $COMFECHA
 *
 * The followings are the available model relations:
 * @property Mesa $mESA
 * @property Venta $vENTA
 * @property Usuario $uSUUSU
 * @property Usuario $uSU
 * @property Menu $mENU
 * @property DetalleComanda[] $detalleComandas
 */
class Comanda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comanda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('VENTA_ID, MENU_ID, MESA_ID, USU_ID, USU_USU_ID', 'numerical', 'integerOnly'=>true),
			array('COMFECHA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('COM_ID, VENTA_ID, MENU_ID, MESA_ID, USU_ID, USU_USU_ID, COMFECHA', 'safe', 'on'=>'search'),
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
			'mESA' => array(self::BELONGS_TO, 'Mesa', 'MESA_ID'),
			'vENTA' => array(self::BELONGS_TO, 'Venta', 'VENTA_ID'),
			'uSUUSU' => array(self::BELONGS_TO, 'Usuario', 'USU_USU_ID'),
			'uSU' => array(self::BELONGS_TO, 'Usuario', 'USU_ID'),
			'mENU' => array(self::BELONGS_TO, 'Menu', 'MENU_ID'),
			'detalleComandas' => array(self::HAS_MANY, 'DetalleComanda', 'COM_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COM_ID' => 'Com',
			'VENTA_ID' => 'Venta',
			'MENU_ID' => 'Menu',
			'MESA_ID' => 'Mesa',
			'USU_ID' => 'Usu',
			'USU_USU_ID' => 'Usu Usu',
			'COMFECHA' => 'Comfecha',
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

		$criteria->compare('COM_ID',$this->COM_ID);
		$criteria->compare('VENTA_ID',$this->VENTA_ID);
		$criteria->compare('MENU_ID',$this->MENU_ID);
		$criteria->compare('MESA_ID',$this->MESA_ID);
		$criteria->compare('USU_ID',$this->USU_ID);
		$criteria->compare('USU_USU_ID',$this->USU_USU_ID);
		$criteria->compare('COMFECHA',$this->COMFECHA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comanda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
