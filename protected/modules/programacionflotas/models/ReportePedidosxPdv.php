<?php

/**
 * This is the model class for table "h_reportepedidosxpdv".
 *
 * The followings are the available columns in table 'h_reportepedidosxpdv':
 * @property integer $IdReportePedidosxPdv
 * @property string $FechaInicio
 * @property string $FechaFinal
 * @property integer $IdFlota
 * @property integer $CodigoEstadoReporte
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $CodigoEstadoRegistro
 *
 * The followings are the available model relations:
 * @property MFlotas $idFlota
 * @property Reportepedidosxpdvdetalle[] $Reportepedidosxpdvdetalles
 */
class Reportepedidosxpdv extends CActiveRecord
{
        public $flota;
        public $archivo;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Reportepedidosxpdv the static model class
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
		return 'h_reportepedidosxpdv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FechaInicio, FechaFinal, IdFlota, IdUsuarioGraba, FechaGraba, CodigoEstadoRegistro', 'required'),
			array('IdFlota, IdUsuarioGraba, CodigoEstadoRegistro', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdReportePedidosxPdv, FechaInicio, FechaFinal, IdFlota, flota, CodigoEstadoReporte, IdUsuarioGraba, FechaGraba, CodigoEstadoRegistro', 'safe', 'on'=>'search'),
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
			'Reportepedidosxpdvdetalles' => array(self::HAS_MANY, 'Reportepedidosxpdvdetalle', 'IdReportePedidosxPdv'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdReportePedidosxPdv' => 'Id Reporte Pedidosx Pdv',
			'FechaInicio' => 'Fecha Inicio',
			'FechaFinal' => 'Fecha Final',
			'IdFlota' => 'Flota',
			'CodigoEstadoReporte' => 'Codigo Estado Reporte',
			'IdUsuarioGraba' => 'Id Usuario Graba',
			'FechaGraba' => 'Fecha Graba',
			'CodigoEstadoRegistro' => 'Codigo Estado Registro',
                        'archivo' => 'Cargar Archivo',
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

		$criteria->compare('t.IdReportePedidosxPdv',$this->IdReportePedidosxPdv);
		$criteria->compare('t.FechaInicio',$this->FechaInicio,true);
		$criteria->compare('t.FechaFinal',$this->FechaFinal,true);
		$criteria->compare('t.IdFlota',$this->IdFlota);
		$criteria->compare('t.CodigoEstadoReporte',$this->CodigoEstadoReporte);
		$criteria->compare('t.IdUsuarioGraba',$this->IdUsuarioGraba);
		$criteria->compare('t.FechaGraba',$this->FechaGraba,true);
		$criteria->compare('t.CodigoEstadoRegistro',$this->CodigoEstadoRegistro);
                $criteria->compare('idFlota.NombreFlota',$this->flota,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        function getDescripcionReporte()
        {
                        
            return 'ID: '.$this->IdReportePedidosxPdv.' Flota: '.$this->IdFlota.' Fecha Inicio: '.$this->FechaInicio.' Fecha Final: '.$this->FechaFinal;
        }
}