<?php

/**
 * This is the model class for table "t_resumen_clasificacion_dias".
 *
 * The followings are the available columns in table 't_resumen_clasificacion_dias':
 * @property integer $IdReportePedidosxPdv
 * @property integer $IdClasificacionDia
 * @property integer $NumeroPosicion
 * @property integer $IdHorario
 * @property string $HoraInicio
 * @property string $HoraFinal
 * @property integer $Lunes_Servicios
 * @property integer $Numero_Mensajeros_Lunes
 * @property integer $Martes_Servicios
 * @property integer $Numero_Mensajeros_Martes
 * @property integer $Miercoles_Servicios
 * @property integer $Numero_Mensajeros_Miercoles
 * @property integer $Jueves_Servicios
 * @property integer $Numero_Mensajeros_Jueves
 * @property integer $Viernes_Servicios
 * @property integer $Numero_Mensajeros_Viernes
 * @property integer $Sabado_Servicios
 * @property integer $Numero_Mensajeros_Sabado
 * @property integer $Domingo_Servicios
 * @property integer $Numero_Mensajeros_Domingo
 * @property integer $ClienteFiel_Servicios
 * @property integer $Numero_Mensajeros_ClienteFiel
 * @property integer $Promedio_Mensajeros_Hora_Normal
 * @property integer $Promedio_Mensajeros_Hora_Festivo
 */
class TResumenClasificacionDias extends CActiveRecord
{
        public $BuscarDia;
        public $BuscarHora;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TResumenClasificacionDias the static model class
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
		return 't_resumen_clasificacion_dias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdReportePedidosxPdv, IdClasificacionDia, NumeroPosicion, IdHorario, HoraInicio, HoraFinal, Lunes_Servicios, Martes_Servicios, Numero_Mensajeros_Martes, Miercoles_Servicios, Numero_Mensajeros_Miercoles, Jueves_Servicios, Numero_Mensajeros_Jueves, Viernes_Servicios, Numero_Mensajeros_Viernes, Sabado_Servicios, Numero_Mensajeros_Sabado, Domingo_Servicios, Numero_Mensajeros_Domingo, ClienteFiel_Servicios, Numero_Mensajeros_ClienteFiel, Promedio_Mensajeros_Hora_Normal, Promedio_Mensajeros_Hora_Festivo', 'required'),
			array('IdReportePedidosxPdv, IdClasificacionDia, NumeroPosicion, IdHorario, Lunes_Servicios, Numero_Mensajeros_Lunes, Martes_Servicios, Numero_Mensajeros_Martes, Miercoles_Servicios, Numero_Mensajeros_Miercoles, Jueves_Servicios, Numero_Mensajeros_Jueves, Viernes_Servicios, Numero_Mensajeros_Viernes, Sabado_Servicios, Numero_Mensajeros_Sabado, Domingo_Servicios, Numero_Mensajeros_Domingo, ClienteFiel_Servicios, Numero_Mensajeros_ClienteFiel, Promedio_Mensajeros_Hora_Normal, Promedio_Mensajeros_Hora_Festivo', 'numerical', 'integerOnly'=>true),
			array('HoraInicio, HoraFinal', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdReportePedidosxPdv, IdClasificacionDia, BuscarDia, BuscarHora, NumeroPosicion, IdHorario, HoraInicio, HoraFinal, Lunes_Servicios, Numero_Mensajeros_Lunes, Martes_Servicios, Numero_Mensajeros_Martes, Miercoles_Servicios, Numero_Mensajeros_Miercoles, Jueves_Servicios, Numero_Mensajeros_Jueves, Viernes_Servicios, Numero_Mensajeros_Viernes, Sabado_Servicios, Numero_Mensajeros_Sabado, Domingo_Servicios, Numero_Mensajeros_Domingo, ClienteFiel_Servicios, Numero_Mensajeros_ClienteFiel, Promedio_Mensajeros_Hora_Normal, Promedio_Mensajeros_Hora_Festivo', 'safe', 'on'=>'search'),
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
                    'idClasificacionDia'=>array(self::BELONGS_TO,'MClasificaciondias','IdClasificacionDia'),
		);
	}
	
	public function primaryKey()
    {
            return 'IdReportePedidosxPdv';
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdReportePedidosxPdv' => 'Id Reporte Pedidosx Pdv',
			'IdClasificacionDia' => 'Id Clasificacion Dia',
			'NumeroPosicion' => 'Numero Posicion',
			'IdHorario' => 'Id Horario',
                        'BuscarHora' => 'Hora',
			'HoraInicio' => 'Hora Inicio',
			'HoraFinal' => 'Hora Final',
			'Lunes_Servicios' => 'Entr Lunes',
			'Numero_Mensajeros_Lunes' => 'Mens x H',
			'Martes_Servicios' => 'Entr Martes',
			'Numero_Mensajeros_Martes' => 'Mens x H',
			'Miercoles_Servicios' => 'Entr Miercoles',
			'Numero_Mensajeros_Miercoles' => 'Mens x H',
			'Jueves_Servicios' => 'Entr Jueves',
			'Numero_Mensajeros_Jueves' => 'Mens x H',
			'Viernes_Servicios' => 'Entr Viernes',
			'Numero_Mensajeros_Viernes' => 'Mens x H',
			'Sabado_Servicios' => 'Entr Sabado',
			'Numero_Mensajeros_Sabado' => 'Mens x H',
			'Domingo_Servicios' => 'Entr Domingo',
			'Numero_Mensajeros_Domingo' => '# Mensajeros',
			'ClienteFiel_Servicios' => 'Entr Cliente Fiel',
			'Numero_Mensajeros_ClienteFiel' => 'Mens x H',
			'Promedio_Mensajeros_Hora_Normal' => 'Promedio Mens x H Normal',
			'Promedio_Mensajeros_Hora_Festivo' => 'Promedio Mens x H Festivo',
                        'Promedio_Mensajeros_Hora_ClienteFiel' => 'Promedio Mens x H Cliente Fiel',
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
               // $criteria->with = array('idClasificacionDia');
                $criteria->together = true;  

		$criteria->compare('t.IdReportePedidosxPdv',$this->IdReportePedidosxPdv);
		$criteria->compare('t.IdClasificacionDia',$this->IdClasificacionDia);
		$criteria->compare('t.NumeroPosicion',$this->NumeroPosicion);
		$criteria->compare('t.IdHorario',$this->IdHorario);
		$criteria->compare('t.HoraInicio',$this->HoraInicio,true);
		$criteria->compare('t.HoraFinal',$this->HoraFinal,true);
                $criteria->compare('t.HoraInicio',$this->BuscarHora,true);
		$criteria->compare('t.Lunes_Servicios',$this->Lunes_Servicios);
		$criteria->compare('t.Numero_Mensajeros_Lunes',$this->Numero_Mensajeros_Lunes);
		$criteria->compare('t.Martes_Servicios',$this->Martes_Servicios);
		$criteria->compare('t.Numero_Mensajeros_Martes',$this->Numero_Mensajeros_Martes);
		$criteria->compare('t.Miercoles_Servicios',$this->Miercoles_Servicios);
		$criteria->compare('t.Numero_Mensajeros_Miercoles',$this->Numero_Mensajeros_Miercoles);
		$criteria->compare('t.Jueves_Servicios',$this->Jueves_Servicios);
		$criteria->compare('t.Numero_Mensajeros_Jueves',$this->Numero_Mensajeros_Jueves);
		$criteria->compare('t.Viernes_Servicios',$this->Viernes_Servicios);
		$criteria->compare('t.Numero_Mensajeros_Viernes',$this->Numero_Mensajeros_Viernes);
		$criteria->compare('t.Sabado_Servicios',$this->Sabado_Servicios);
		$criteria->compare('t.Numero_Mensajeros_Sabado',$this->Numero_Mensajeros_Sabado);
		$criteria->compare('t.Domingo_Servicios',$this->Domingo_Servicios);
		$criteria->compare('t.Numero_Mensajeros_Domingo',$this->Numero_Mensajeros_Domingo);
		$criteria->compare('t.ClienteFiel_Servicios',$this->ClienteFiel_Servicios);
		$criteria->compare('t.Numero_Mensajeros_ClienteFiel',$this->Numero_Mensajeros_ClienteFiel);
		$criteria->compare('t.Promedio_Mensajeros_Hora_Normal',$this->Promedio_Mensajeros_Hora_Normal);
		$criteria->compare('t.Promedio_Mensajeros_Hora_Festivo',$this->Promedio_Mensajeros_Hora_Festivo);
                $criteria->compare('idClasificacionDia.NombreClasificacionDia',$this->BuscarDia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}