<?php

/**
 * This is the model class for table "m_diassemana".
 *
 * The followings are the available columns in table 'm_diassemana':
 * @property integer $NumeroDiaSemana
 * @property string $NombreDiaSemana
 * @property integer $IdClasificacionDia
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $IdUsuarioUltimaModifica
 * @property string $FechaUltimaModifica
 * @property integer $CodigoEstadoRegistro
 *
 * The followings are the available model relations:
 * @property Clasificaciondias $idClasificacionDia
 */
class Diassemana extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Diassemana the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_diassemana';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NumeroDiaSemana, NombreDiaSemana, IdClasificacionDia, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica', 'required'),
			array('NumeroDiaSemana, IdClasificacionDia, IdUsuarioGraba, IdUsuarioUltimaModifica, CodigoEstadoRegistro', 'numerical', 'integerOnly'=>true),
			array('NombreDiaSemana', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NumeroDiaSemana, NombreDiaSemana, IdClasificacionDia, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica, CodigoEstadoRegistro', 'safe', 'on'=>'search'),
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
			'idClasificacionDia' => array(self::BELONGS_TO, 'Clasificaciondias', 'IdClasificacionDia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NumeroDiaSemana' => 'Numero Dia Semana',
			'NombreDiaSemana' => 'Nombre Dia Semana',
			'IdClasificacionDia' => 'Clasificacion Dia',
			'IdUsuarioGraba' => 'Id Usuario Graba',
			'FechaGraba' => 'Fecha Graba',
			'IdUsuarioUltimaModifica' => 'Id Usuario Ultima Modifica',
			'FechaUltimaModifica' => 'Fecha Ultima Modifica',
			'CodigoEstadoRegistro' => 'Codigo Estado Registro',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('NumeroDiaSemana',$this->NumeroDiaSemana);
		$criteria->compare('NombreDiaSemana',$this->NombreDiaSemana,true);
		$criteria->compare('IdClasificacionDia',$this->IdClasificacionDia);
		$criteria->compare('IdUsuarioGraba',$this->IdUsuarioGraba);
		$criteria->compare('FechaGraba',$this->FechaGraba,true);
		$criteria->compare('IdUsuarioUltimaModifica',$this->IdUsuarioUltimaModifica);
		$criteria->compare('FechaUltimaModifica',$this->FechaUltimaModifica,true);
		$criteria->compare('CodigoEstadoRegistro',$this->CodigoEstadoRegistro);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}