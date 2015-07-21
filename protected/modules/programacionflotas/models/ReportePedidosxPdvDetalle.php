<?php

/**
 * This is the model class for table "h_reportepedidosxpdvdetalle".
 *
 * The followings are the available columns in table 'h_reportepedidosxpdvdetalle':
 * @property integer $IdReportePedidosxPdvDetalle
 * @property integer $IdReportePedidosxPdv
 * @property integer $NumeroDeRegistro
 * @property integer $CodigoPdv
 * @property string $NombrePdv
 * @property string $Caja
 * @property string $Factura
 * @property string $Valor
 * @property string $NombreMensajero
 * @property string $CelularMensajero
 * @property string $NombreCliente
 * @property string $DireccionCliente
 * @property string $TelefonoCliente
 * @property string $EstadoPedido
 * @property string $CausalEntrega
 * @property string $FechaPos
 * @property string $FechaAceptacion
 * @property string $TiempoEspera
 * @property string $FechaEntrega
 * @property string $TiempoTotalMinutos
 * @property integer $IdRuta
 * @property integer $CodigoEstadoRegistro
 * @property integer $EsDiaFestivo
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
			array('IdReportePedidosxPdv, NumeroDeRegistro', 'required'),
			array('IdReportePedidosxPdv, NumeroDeRegistro, CodigoPdv, IdRuta, CodigoEstadoRegistro, EsDiaFestivo', 'numerical', 'integerOnly'=>true),
			array('NombrePdv, NombreCliente', 'length', 'max'=>100),
			array('Caja, Valor, TiempoEspera, TiempoTotalMinutos', 'length', 'max'=>10),
			array('Factura, EstadoPedido, CausalEntrega, FechaPos, FechaAceptacion, FechaEntrega', 'length', 'max'=>20),
			array('NombreMensajero', 'length', 'max'=>80),
			array('CelularMensajero, TelefonoCliente', 'length', 'max'=>40),
			array('DireccionCliente', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdReportePedidosxPdvDetalle, IdReportePedidosxPdv, NumeroDeRegistro, CodigoPdv, NombrePdv, Caja, Factura, Valor, NombreMensajero, CelularMensajero, NombreCliente, DireccionCliente, TelefonoCliente, EstadoPedido, CausalEntrega, FechaPos, FechaAceptacion, TiempoEspera, FechaEntrega, TiempoTotalMinutos, IdRuta, CodigoEstadoRegistro, EsDiaFestivo', 'safe', 'on'=>'search'),
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
			'NumeroDeRegistro' => 'Registro',
			'CodigoPdv' => 'Codigo Pdv',
			'NombrePdv' => 'Punto de Venta',
			'Caja' => 'Caja',
			'Factura' => 'Factura',
			'Valor' => 'Valor',
			'NombreMensajero' => 'Nombre Mensajero',
			'CelularMensajero' => 'Celular Mensajero',
			'NombreCliente' => 'Nombre Cliente',
			'DireccionCliente' => 'Direccion Cliente',
			'TelefonoCliente' => 'Telefono Cliente',
			'EstadoPedido' => 'Estado Pedido',
			'CausalEntrega' => 'Causal Entrega',
			'FechaPos' => 'Fecha Pos',
			'FechaAceptacion' => 'Fecha Aceptacion',
			'TiempoEspera' => 'Tiempo Espera',
			'FechaEntrega' => 'Fecha Entrega',
			'TiempoTotalMinutos' => 'Tiempo Total Minutos',
			'IdRuta' => 'Id Ruta',
			'CodigoEstadoRegistro' => 'Codigo Estado Registro',
			'EsDiaFestivo' => 'Es Dia Festivo',
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
		$criteria->compare('NumeroDeRegistro',$this->NumeroDeRegistro);
		$criteria->compare('CodigoPdv',$this->CodigoPdv);
		$criteria->compare('NombrePdv',$this->NombrePdv,true);
		$criteria->compare('Caja',$this->Caja,true);
		$criteria->compare('Factura',$this->Factura,true);
		$criteria->compare('Valor',$this->Valor,true);
		$criteria->compare('NombreMensajero',$this->NombreMensajero,true);
		$criteria->compare('CelularMensajero',$this->CelularMensajero,true);
		$criteria->compare('NombreCliente',$this->NombreCliente,true);
		$criteria->compare('DireccionCliente',$this->DireccionCliente,true);
		$criteria->compare('TelefonoCliente',$this->TelefonoCliente,true);
		$criteria->compare('EstadoPedido',$this->EstadoPedido,true);
		$criteria->compare('CausalEntrega',$this->CausalEntrega,true);
		$criteria->compare('FechaPos',$this->FechaPos,true);
		$criteria->compare('FechaAceptacion',$this->FechaAceptacion,true);
		$criteria->compare('TiempoEspera',$this->TiempoEspera,true);
		$criteria->compare('FechaEntrega',$this->FechaEntrega,true);
		$criteria->compare('TiempoTotalMinutos',$this->TiempoTotalMinutos,true);
		$criteria->compare('IdRuta',$this->IdRuta);
		$criteria->compare('CodigoEstadoRegistro',$this->CodigoEstadoRegistro);
		$criteria->compare('EsDiaFestivo',$this->EsDiaFestivo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}