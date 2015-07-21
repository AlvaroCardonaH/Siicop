<?php

/**
 * This is the model class for table "m_fechafestivos".
 *
 * The followings are the available columns in table 'm_fechafestivos':
 * @property integer $IdFechaFestivo
 * @property string $FechaFestivo
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $IdUsuarioUltimaModifica
 * @property string $FechaUltimaModifica
 * @property integer $CodigoEstadoRegistro
 */
class MFechafestivos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MFechafestivos the static model class
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
		return 'm_fechafestivos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array(
                            'FechaFestivo', 
                            'unique', 
                            'attributeName'=>'FechaFestivo',
                            'className'=>'MFechafestivos',
                            'on' => 'insert',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
                    array(
                            'FechaFestivo', 
                            'unique', 
                            'attributeName'=>'FechaFestivo',
                            'className'=>'MFechafestivos',
                            'on' => 'update',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
			array('FechaFestivo, IdUsuarioGraba, FechaGraba', 'required'),
			array('IdUsuarioGraba, IdUsuarioUltimaModifica, CodigoEstadoRegistro', 'numerical', 'integerOnly'=>true),
			array('FechaUltimaModifica', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdFechaFestivo, FechaFestivo, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica, CodigoEstadoRegistro', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdFechaFestivo' => 'Id Fecha Festivo',
			'FechaFestivo' => 'Fecha Festivo',
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

		$criteria->compare('IdFechaFestivo',$this->IdFechaFestivo);
		$criteria->compare('FechaFestivo',$this->FechaFestivo,true);
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