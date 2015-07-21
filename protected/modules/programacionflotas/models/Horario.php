<?php

/**
 * This is the model class for table "m_horario".
 *
 * The followings are the available columns in table 'm_horario':
 * @property integer $IdHorario
 * @property string $HoraInicio
 * @property string $HoraFinal
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $IdUsuarioUltimaModifica
 * @property string $FechaUltimaModifica
 * @property integer $CodigoEstadoRegistro
 *
 * The followings are the available model relations:
 * @property Horarioxflota[] $Horarioxflotas
 */
class Horario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Horario the static model class
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
		return 'm_horario';
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
                            'HoraInicio', 
                            'unique', 
                            'attributeName'=>'HoraInicio',
                            'className'=>'Horario',
                            'on' => 'insert',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
                        array(
                            'HoraFinal', 
                            'unique', 
                            'attributeName'=>'HoraFinal',
                            'className'=>'Horario',
                            'on' => 'update',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
                        array(
                            'HoraFinal', 
                            'unique', 
                            'attributeName'=>'HoraFinal',
                            'className'=>'Horario',
                            'on' => 'insert',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
                        array(
                            'HoraInicio', 
                            'unique', 
                            'attributeName'=>'HoraInicio',
                            'className'=>'Horario',
                            'on' => 'update',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
			array('HoraInicio, HoraFinal, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica', 'required'),
			array('IdUsuarioGraba, IdUsuarioUltimaModifica, CodigoEstadoRegistro', 'numerical', 'integerOnly'=>true),
			array('HoraInicio, HoraFinal', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdHorario, HoraInicio, HoraFinal, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica, CodigoEstadoRegistro', 'safe', 'on'=>'search'),
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
			'Horarioxflotas' => array(self::HAS_MANY, 'Horarioxflota', 'IdHorario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdHorario' => 'Id Horario',
			'HoraInicio' => 'Hora Inicio',
			'HoraFinal' => 'Hora Final',
			'IdUsuarioGraba' => 'Id Usuario Graba',
			'FechaGraba' => 'Fecha Graba',
			'IdUsuarioUltimaModifica' => 'Id Usuario Ultima Modifica',
			'FechaUltimaModifica' => 'Fecha Ultima Modifica',
			'CodigoEstadoRegistro' => 'Codigo Estado Registro',
		);
	}
        public function getHorarioCompleto()
        {
        return $this->HoraInicio."-".$this->HoraFinal;

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

		$criteria->compare('IdHorario',$this->IdHorario);
		$criteria->compare('HoraInicio',$this->HoraInicio,true);
		$criteria->compare('HoraFinal',$this->HoraFinal,true);
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