<?php

/**
 * This is the model class for table "m_diasclientefiel".
 *
 * The followings are the available columns in table 'm_diasclientefiel':
 * @property integer $IdDiaClienteFiel
 * @property integer $IdFlota
 * @property integer $NumeroDiaMes
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $IdUsuarioUltimaModifica
 * @property string $FechaUltimaModifica
 * @property integer $CodigoEstadoRegistro
 *
 * The followings are the available model relations:
 * @property MFlotas $idFlota
 */
class DiasClienteFiel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_diasclientefiel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdFlota, NumeroDiaMes, FechaGraba, FechaUltimaModifica', 'required'),
			array('NumeroDiaMes', 'numerical', 'max'=>31, 'min'=>1),
			array('IdFlota, NumeroDiaMes, IdUsuarioGraba, IdUsuarioUltimaModifica, CodigoEstadoRegistro', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdDiaClienteFiel, IdFlota, NumeroDiaMes, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica, CodigoEstadoRegistro', 'safe', 'on'=>'search'),
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
			'idFlota' => array(self::BELONGS_TO, 'Flotas', 'IdFlota'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdDiaClienteFiel' => 'Id Dia Cliente Fiel',
			'IdFlota' => 'Flota',
			'NumeroDiaMes' => 'Numero Dia Mes',
			'IdUsuarioGraba' => 'Id Usuario Graba',
			'FechaGraba' => 'Fecha Graba',
			'IdUsuarioUltimaModifica' => 'Id Usuario Ultima Modifica',
			'FechaUltimaModifica' => 'Fecha Ultima Modifica',
			'CodigoEstadoRegistro' => 'Codigo Estado Registro',
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

		$criteria->compare('IdDiaClienteFiel',$this->IdDiaClienteFiel);
		$criteria->compare('IdFlota',$this->IdFlota);
		$criteria->compare('NumeroDiaMes',$this->NumeroDiaMes);
		$criteria->compare('IdUsuarioGraba',$this->IdUsuarioGraba);
		$criteria->compare('FechaGraba',$this->FechaGraba,true);
		$criteria->compare('IdUsuarioUltimaModifica',$this->IdUsuarioUltimaModifica);
		$criteria->compare('FechaUltimaModifica',$this->FechaUltimaModifica,true);
		$criteria->compare('CodigoEstadoRegistro',$this->CodigoEstadoRegistro);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DiasClienteFiel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
