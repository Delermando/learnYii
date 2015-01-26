<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property integer $nome
 * @property string $email
 * @property integer $estado
 * @property integer $identificacao
 * @property string $genero
 * @property integer $idCidade
 *
 * The followings are the available model relations:
 * @property Estudos $estudos
 * @property Experiencia[] $experiencias
 * @property Resultado $resultado
 * @property Cidade $idCidade0
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, email, estado, identificacao, genero, idCidade', 'required'),
			array('estado, identificacao, idCidade', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>255),
			array('genero', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, email, estado, identificacao, genero, idCidade', 'safe', 'on'=>'search'),
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
//			'estudos' => array(self::HAS_ONE, 'Estudos', 'id'),
			'experiencias' => array(self::HAS_MANY, 'Experiencia', 'idUsuario'),
			'vagas' => array(self::MANY_MANY, 'Vagas','relationVagaUsuario(idUsuario, idVaga)'),
			'experienciasCount' => array(self::STAT, 'Experiencia', 'idUsuario'),
//			'experienciasCount' => array(self::STAT, 'Experiencia', 'idUsuario','select'=>'COUNT(t.id)'),
			'avaliacao' => array(self::HAS_ONE, 'Resultado', 'id'),
			'cidade' => array(self::BELONGS_TO, 'Cidade', 'idCidade'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'email' => 'Email',
			'estado' => 'Estado',
			'identificacao' => 'Identificacao',
			'genero' => 'Genero',
			'idCidade' => 'Cidade',
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
		$criteria->compare('nome',$this->nome);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('identificacao',$this->identificacao);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('idCidade',$this->idCidade);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
