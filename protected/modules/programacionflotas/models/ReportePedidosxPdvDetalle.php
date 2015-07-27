<?php

/**
 * This is the model class for table "h_reportepedidosxpdvdetalle".
 *
 * The followings are the available columns in table 'h_reportepedidosxpdvdetalle':
 * @property integer $IdReportePedidosxPdvDetalle
 * @property integer $IdReportePedidosxPdv
 * @property integer $CodigoPdv
 * @property string $FechaPos
 * @property string $TiempoTotalMinutos
 *
 * The followings are the available model relations:
 * @property HReportepedidosxpdv $idReportePedidosxPdv
 */
class Reportepedidosxpdvdetalle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Reportepedidosxpdvdetalle the static model class
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
		return 'h_reportepedidosxpdvdetalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdReportePedidosxPdv', 'required'),
			array('IdReportePedidosxPdv, CodigoPdv', 'numerical', 'integerOnly'=>true),
			array('NombrePdv, NombreCliente', 'length', 'max'=>100),
			array('TiempoTotalMinutos', 'length', 'max'=>10),
			array('FechaPos', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdReportePedidosxPdvDetalle, IdReportePedidosxPdv, CodigoPdv, NombrePdv, FechaPos, TiempoTotalMinutos', 'safe', 'on'=>'search'),
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
			'idReportePedidosxPdv' => array(self::BELONGS_TO, 'Reportepedidosxpdv', 'IdReportePedidosxPdv'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdReportePedidosxPdvDetalle' => 'Id Reporte Pedidosx Pdv Detalle',
			'IdReportePedidosxPdv' => 'Id Reporte Pedidosx Pdv',
			'CodigoPdv' => 'Codigo Pdv',
			'NombrePdv' => 'Punto de Venta',
			'FechaPos' => 'Fecha Pos',
			'TiempoTotalMinutos' => 'Tiempo Total Minutos',
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

		$criteria->compare('IdReportePedidosxPdvDetalle',$this->IdReportePedidosxPdvDetalle);
		$criteria->compare('IdReportePedidosxPdv',$this->IdReportePedidosxPdv);
		$criteria->compare('CodigoPdv',$this->CodigoPdv);
		$criteria->compare('NombrePdv',$this->NombrePdv,true);
		$criteria->compare('FechaPos',$this->FechaPos,true);
		$criteria->compare('TiempoTotalMinutos',$this->TiempoTotalMinutos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}