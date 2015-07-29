<?php

/**
 * This is the model class for table "t_programacionturnomensajeros".
 *
 * The followings are the available columns in table 't_programacionturnomensajeros':
 * @property integer $IdProgramacionTurnoMensajero
 * @property integer $IdProgramacionTurnoFecha
 * @property integer $NumeroTurno
 * @property string $HoraInicio
 * @property string $HoraFinal
 * @property integer $Documento
 * @property string $NombreCompleto
 * @property integer $DiferenciaHoras
 * @property string $HoraFinalAnterior
 */
class ProgramacionTurnoMensajeros extends CActiveRecord
{
        public $BuscarDia;
        public $BuscarFechaInicial;
        public $BuscarFechaFinal;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_programacionturnomensajeros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdProgramacionTurnoFecha, NumeroTurno, HoraInicio, HoraFinal, Documento, NombreCompleto', 'required'),
			array('IdProgramacionTurnoFecha, NumeroTurno, Documento, DiferenciaHoras', 'numerical', 'integerOnly'=>true),
			array('HoraInicio, HoraFinal, HoraFinalAnterior', 'length', 'max'=>10),
			array('NombreCompleto', 'length', 'max'=>80),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdProgramacionTurnoMensajero, BuscarDia, BuscarFechaInicial, BuscarFechaFinal  IdProgramacionTurnoFecha, NumeroTurno, HoraInicio, HoraFinal, Documento, NombreCompleto, DiferenciaHoras, HoraFinalAnterior', 'safe', 'on'=>'search'),
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
			'idProgramacionTurnoFecha' => array(self::BELONGS_TO, 'ProgramacionTurnoFechas', 'IdProgramacionTurnoFecha'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdProgramacionTurnoMensajero' => 'Id Programacion Turno Mensajero',
			'IdProgramacionTurnoFecha' => 'Id Programacion Turno Fecha',
			'NumeroTurno' => 'Numero Turno',
			'HoraInicio' => 'Hora Inicio',
			'HoraFinal' => 'Hora Final',
			'Documento' => 'Documento',
			'NombreCompleto' => 'Nombre Completo',
			'DiferenciaHoras' => 'Diferencia Horas',
			'HoraFinalAnterior' => 'Hora Final Anterior',
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
                $criteria->with = array('idProgramacionTurnoFecha.idProgramacionTurno.idClasificacionDia');
                $criteria->together = true;  

		$criteria->compare('t.IdProgramacionTurnoMensajero',$this->IdProgramacionTurnoMensajero);
		$criteria->compare('t.IdProgramacionTurnoFecha',$this->IdProgramacionTurnoFecha);
		$criteria->compare('t.NumeroTurno',$this->NumeroTurno);
		$criteria->compare('t.HoraInicio',$this->HoraInicio,true);
		$criteria->compare('t.HoraFinal',$this->HoraFinal,true);
		$criteria->compare('t.Documento',$this->Documento);
		$criteria->compare('t.NombreCompleto',$this->NombreCompleto,true);
		$criteria->compare('t.DiferenciaHoras',$this->DiferenciaHoras);
		$criteria->compare('t.HoraFinalAnterior',$this->HoraFinalAnterior,true);
                $criteria->compare('idClasificacionDia.NombreClasificacionDia',$this->BuscarDia,true);
                $criteria->compare('idProgramacionTurnoFecha.FechaInicio',$this->BuscarFechaInicial,true);
                $criteria->compare('idProgramacionTurnoFecha.FechaFinal',$this->BuscarFechaFinal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>200,
                ),

		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProgramacionTurnoMensajeros the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
