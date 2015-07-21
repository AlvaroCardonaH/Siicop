<?php

/**
 * This is the model class for table "m_horarioxflota".
 *
 * The followings are the available columns in table 'm_horarioxflota':
 * @property integer $IdHorarioxFlota
 * @property integer $IdFlota
 * @property integer $IdHorario
 * @property integer $NumeroPosicion
 * @property integer $EstaHabilitada
 * @property integer $EsHoraPico
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $IdUsuarioUltimaModifica
 * @property string $FechaUltimaModifica
 * @property integer $CodigoEstadoRegistro
 *
 * The followings are the available model relations:
 * @property MFlotas $idFlota
 * @property MHorario $idHorario
 */
class MHorarioxflota extends CActiveRecord
{
        public $flota;
        public $HoraInicio;
        public $HoraFinal;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MHorarioxflota the static model class
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
		return 'm_horarioxflota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdFlota, IdHorario,HoraInicio, HoraFinal, NumeroPosicion, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica', 'required'),
			array('IdFlota, IdHorario, NumeroPosicion, EstaHabilitada, EsHoraPico, IdUsuarioGraba, IdUsuarioUltimaModifica, CodigoEstadoRegistro', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdHorarioxFlota, IdFlota, IdHorario, NumeroPosicion, EstaHabilitada, EsHoraPico, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica, CodigoEstadoRegistro', 'safe', 'on'=>'search'),
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
			'idFlota' => array(self::BELONGS_TO, 'MFlotas', 'IdFlota'),
			'idHorario' => array(self::BELONGS_TO, 'MHorario', 'IdHorario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdHorarioxFlota' => 'Id Horariox Flota',
			'IdFlota' => 'Flota',
			'IdHorario' => 'Id Horario',
			'NumeroPosicion' => 'Numero Posicion',
			'EstaHabilitada' => 'Esta Habilitada',
			'EsHoraPico' => 'Es Hora Pico',
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
                $criteria->with = array('idFlota');
                $criteria->together = true;

		$criteria->compare('t.IdHorarioxFlota',$this->IdHorarioxFlota);
		$criteria->compare('t.IdFlota',$this->IdFlota);
		$criteria->compare('t.IdHorario',$this->IdHorario);
		$criteria->compare('t.NumeroPosicion',$this->NumeroPosicion);
		$criteria->compare('t.EstaHabilitada',$this->EstaHabilitada);
		$criteria->compare('t.EsHoraPico',$this->EsHoraPico);
		$criteria->compare('t.IdUsuarioGraba',$this->IdUsuarioGraba);
		$criteria->compare('t.FechaGraba',$this->FechaGraba,true);
		$criteria->compare('t.IdUsuarioUltimaModifica',$this->IdUsuarioUltimaModifica);
		$criteria->compare('t.FechaUltimaModifica',$this->FechaUltimaModifica,true);
		$criteria->compare('t.CodigoEstadoRegistro',$this->CodigoEstadoRegistro);
                $criteria->compare('idFlota.NombreFlota',$this->flota,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
                            'defaultOrder' => 'idFlota.NombreFlota, NumeroPosicion',
                            'attributes' => array(
                                'NombreSede' => array(
                                'asc' => 'NumeroPosicion',
                                'desc' => 'NumeroPosicion',
                                 ),
                                '*',
                            ),
                        ),
		));
	}
}