<?php

/**
 * This is the model class for table "v_resumen_pedidos_normal".
 *
 * The followings are the available columns in table 'v_resumen_pedidos_normal':
 * @property integer $IdSede
 * @property string $NombreSede
 * @property integer $IdReportePedidosxPdv
 * @property integer $IdFlota
 * @property string $NombreFlota
 * @property integer $IdClasificacionDia
 * @property string $NombreClasificacionDia
 * @property integer $NumeroPosicion
 * @property integer $IdHorario
 * @property string $HoraInicio
 * @property string $HoraFinal
 * @property integer $NumeroDiaSemana
 * @property string $NombreDiaSemana
 * @property string $NumeroServicios
 */
class VResumenPedidosNormal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VResumenPedidosNormal the static model class
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
		return 'v_resumen_pedidos_normal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NombreSede, NombreFlota, NombreClasificacionDia, NumeroPosicion, HoraInicio, HoraFinal, NumeroDiaSemana, NombreDiaSemana', 'required'),
			array('IdSede, IdReportePedidosxPdv, IdFlota, IdClasificacionDia, NumeroPosicion, IdHorario, NumeroDiaSemana', 'numerical', 'integerOnly'=>true),
			array('NombreSede, NombreFlota, NombreClasificacionDia', 'length', 'max'=>45),
			array('HoraInicio, HoraFinal', 'length', 'max'=>5),
			array('NombreDiaSemana', 'length', 'max'=>20),
			array('NumeroServicios', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdSede, NombreSede, IdReportePedidosxPdv, IdFlota, NombreFlota, IdClasificacionDia, NombreClasificacionDia, NumeroPosicion, IdHorario, HoraInicio, HoraFinal, NumeroDiaSemana, NombreDiaSemana, NumeroServicios', 'safe', 'on'=>'search'),
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
                    'idReporte' => array(self::BELONGS_TO, 'HReportepedidosxpdv', 'IdReportePedidosxPdv'),
                    
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
			'IdSede' => 'Id Sede',
			'NombreSede' => 'Nombre Sede',
			'IdReportePedidosxPdv' => 'Id Reporte Pedidosx Pdv',
			'IdFlota' => 'Id Flota',
			'NombreFlota' => 'Nombre Flota',
			'IdClasificacionDia' => 'Id Clasificacion Dia',
			'NombreClasificacionDia' => 'Nombre Clasificacion Dia',
			'NumeroPosicion' => 'Numero Posicion',
			'IdHorario' => 'Id Horario',
			'HoraInicio' => 'Hora Inicio',
			'HoraFinal' => 'Hora Final',
			'NumeroDiaSemana' => 'Numero Dia Semana',
			'NombreDiaSemana' => 'Nombre Dia Semana',
			'NumeroServicios' => 'Numero Servicios',
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

		$criteria->compare('IdSede',$this->IdSede);
		$criteria->compare('NombreSede',$this->NombreSede,true);
		$criteria->compare('IdReportePedidosxPdv',$this->IdReportePedidosxPdv);
		$criteria->compare('IdFlota',$this->IdFlota);
		$criteria->compare('NombreFlota',$this->NombreFlota,true);
		$criteria->compare('IdClasificacionDia',$this->IdClasificacionDia);
		$criteria->compare('NombreClasificacionDia',$this->NombreClasificacionDia,true);
		$criteria->compare('NumeroPosicion',$this->NumeroPosicion);
		$criteria->compare('IdHorario',$this->IdHorario);
		$criteria->compare('HoraInicio',$this->HoraInicio,true);
		$criteria->compare('HoraFinal',$this->HoraFinal,true);
		$criteria->compare('NumeroDiaSemana',$this->NumeroDiaSemana);
		$criteria->compare('NombreDiaSemana',$this->NombreDiaSemana,true);
		$criteria->compare('NumeroServicios',$this->NumeroServicios,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}