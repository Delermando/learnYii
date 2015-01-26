<?php

/**
 * This is the model class for table "resultado".
 *
 * The followings are the available columns in table 'resultado':
 * @property integer $id
 * @property string $lugar
 * @property integer $psicologico
 * @property integer $tecnica
 * @property integer $entrevista
 * @property integer $total
 * @property integer $idUsuario
 *
 * The followings are the available model relations:
 * @property Usuarios $id0
 */
class Resultado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'resultado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lugar, psicologico, tecnica, entrevista, total, idUsuario', 'required'),
			array('psicologico, tecnica, entrevista, total, idUsuario', 'numerical', 'integerOnly'=>true),
			array('lugar', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, lugar, psicologico, tecnica, entrevista, total, idUsuario', 'safe', 'on'=>'search'),
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
			'id0' => array(self::BELONGS_TO, 'Usuarios', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'lugar' => 'Lugar',
			'psicologico' => 'Psicologico',
			'tecnica' => 'Tecnica',
			'entrevista' => 'Entrevista',
			'total' => 'Total',
			'idUsuario' => 'Id Usuario',
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
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('psicologico',$this->psicologico);
		$criteria->compare('tecnica',$this->tecnica);
		$criteria->compare('entrevista',$this->entrevista);
		$criteria->compare('total',$this->total);
		$criteria->compare('idUsuario',$this->idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Resultado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
