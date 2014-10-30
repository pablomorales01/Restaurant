<?php

/**
 * This is the model class for table "detalle_comanda".
 *
 * The followings are the available columns in table 'detalle_comanda':
 * @property integer $DETALLE_ID
 * @property integer $COM_ID
 * @property integer $PVENTA_ID
 * @property string $DETALLEESTADO
 *
 * The followings are the available model relations:
 * @property Comanda $cOM
 * @property ProductoVenta $pVENTA
 */
class DetalleComanda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detalle_comanda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COM_ID, PVENTA_ID', 'numerical', 'integerOnly'=>true),
			array('DETALLEESTADO', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('DETALLE_ID, COM_ID, PVENTA_ID, DETALLEESTADO', 'safe', 'on'=>'search'),
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
			'cOM' => array(self::BELONGS_TO, 'Comanda', 'COM_ID'),
			'pVENTA' => array(self::BELONGS_TO, 'ProductoVenta', 'PVENTA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DETALLE_ID' => 'Detalle',
			'COM_ID' => 'Com',
			'PVENTA_ID' => 'Pventa',
			'DETALLEESTADO' => 'Detalleestado',
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

		$criteria->compare('DETALLE_ID',$this->DETALLE_ID);
		$criteria->compare('COM_ID',$this->COM_ID);
		$criteria->compare('PVENTA_ID',$this->PVENTA_ID);
		$criteria->compare('DETALLEESTADO',$this->DETALLEESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetalleComanda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
