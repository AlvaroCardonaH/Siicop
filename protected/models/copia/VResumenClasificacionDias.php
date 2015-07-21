<?php

/**
 * This is the model class for table "v_resumen_clasificacion_dias".
 *
 * The followings are the available columns in table 'v_resumen_clasificacion_dias':
 * @property integer $IdReportePedidosxPdv
 * @property string $IdClasificacionDia
 * @property string $HoraCero
 * @property string $HoraUno
 * @property string $HoraDos
 * @property string $HoraTres
 * @property string $HoraCuatro
 * @property string $HoraCinco
 * @property string $HoraSeis
 * @property string $HoraSiete
 * @property string $HoraOcho
 * @property string $HoraNueve
 * @property string $HoraDiez
 * @property string $HoraOnce
 * @property string $HoraDoce
 * @property string $HoraTrece
 * @property string $HoraCatorce
 * @property string $HoraQuince
 * @property string $HoraDieciSeis
 * @property string $HoraDieciSiete
 * @property string $HoraDieciOcho
 * @property string $HoraDieciNueve
 * @property string $HoraVeinte
 * @property string $HoraVeintiUna
 * @property string $HoraVeintiDos
 * @property string $HoraVeintiTres
 */
class VResumenClasificacionDias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VResumenClasificacionDias the static model class
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
		return 'v_resumen_clasificacion_dias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdReportePedidosxPdv', 'numerical', 'integerOnly'=>true),
			array('IdClasificacionDia, HoraCero, HoraUno, HoraDos, HoraTres, HoraCuatro, HoraCinco, HoraSeis, HoraSiete, HoraOcho, HoraNueve, HoraDiez, HoraOnce, HoraDoce, HoraTrece, HoraCatorce, HoraQuince, HoraDieciSeis, HoraDieciSiete, HoraDieciOcho, HoraDieciNueve, HoraVeinte, HoraVeintiUna, HoraVeintiDos, HoraVeintiTres', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdReportePedidosxPdv, IdClasificacionDia, HoraCero, HoraUno, HoraDos, HoraTres, HoraCuatro, HoraCinco, HoraSeis, HoraSiete, HoraOcho, HoraNueve, HoraDiez, HoraOnce, HoraDoce, HoraTrece, HoraCatorce, HoraQuince, HoraDieciSeis, HoraDieciSiete, HoraDieciOcho, HoraDieciNueve, HoraVeinte, HoraVeintiUna, HoraVeintiDos, HoraVeintiTres', 'safe', 'on'=>'search'),
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
			'IdReportePedidosxPdv' => 'Id Reporte Pedidosx Pdv',
			'IdClasificacionDia' => 'Id Clasificacion Dia',
			'HoraCero' => 'Hora Cero',
			'HoraUno' => 'Hora Uno',
			'HoraDos' => 'Hora Dos',
			'HoraTres' => 'Hora Tres',
			'HoraCuatro' => 'Hora Cuatro',
			'HoraCinco' => 'Hora Cinco',
			'HoraSeis' => 'Hora Seis',
			'HoraSiete' => 'Hora Siete',
			'HoraOcho' => 'Hora Ocho',
			'HoraNueve' => 'Hora Nueve',
			'HoraDiez' => 'Hora Diez',
			'HoraOnce' => 'Hora Once',
			'HoraDoce' => 'Hora Doce',
			'HoraTrece' => 'Hora Trece',
			'HoraCatorce' => 'Hora Catorce',
			'HoraQuince' => 'Hora Quince',
			'HoraDieciSeis' => 'Hora Dieci Seis',
			'HoraDieciSiete' => 'Hora Dieci Siete',
			'HoraDieciOcho' => 'Hora Dieci Ocho',
			'HoraDieciNueve' => 'Hora Dieci Nueve',
			'HoraVeinte' => 'Hora Veinte',
			'HoraVeintiUna' => 'Hora Veinti Una',
			'HoraVeintiDos' => 'Hora Veinti Dos',
			'HoraVeintiTres' => 'Hora Veinti Tres',
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

		$criteria->compare('IdReportePedidosxPdv',$this->IdReportePedidosxPdv);
		$criteria->compare('IdClasificacionDia',$this->IdClasificacionDia,true);
		$criteria->compare('HoraCero',$this->HoraCero,true);
		$criteria->compare('HoraUno',$this->HoraUno,true);
		$criteria->compare('HoraDos',$this->HoraDos,true);
		$criteria->compare('HoraTres',$this->HoraTres,true);
		$criteria->compare('HoraCuatro',$this->HoraCuatro,true);
		$criteria->compare('HoraCinco',$this->HoraCinco,true);
		$criteria->compare('HoraSeis',$this->HoraSeis,true);
		$criteria->compare('HoraSiete',$this->HoraSiete,true);
		$criteria->compare('HoraOcho',$this->HoraOcho,true);
		$criteria->compare('HoraNueve',$this->HoraNueve,true);
		$criteria->compare('HoraDiez',$this->HoraDiez,true);
		$criteria->compare('HoraOnce',$this->HoraOnce,true);
		$criteria->compare('HoraDoce',$this->HoraDoce,true);
		$criteria->compare('HoraTrece',$this->HoraTrece,true);
		$criteria->compare('HoraCatorce',$this->HoraCatorce,true);
		$criteria->compare('HoraQuince',$this->HoraQuince,true);
		$criteria->compare('HoraDieciSeis',$this->HoraDieciSeis,true);
		$criteria->compare('HoraDieciSiete',$this->HoraDieciSiete,true);
		$criteria->compare('HoraDieciOcho',$this->HoraDieciOcho,true);
		$criteria->compare('HoraDieciNueve',$this->HoraDieciNueve,true);
		$criteria->compare('HoraVeinte',$this->HoraVeinte,true);
		$criteria->compare('HoraVeintiUna',$this->HoraVeintiUna,true);
		$criteria->compare('HoraVeintiDos',$this->HoraVeintiDos,true);
		$criteria->compare('HoraVeintiTres',$this->HoraVeintiTres,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getDiferencia($valor, $total)
        {
            
            $diferencia =$valor- $total;
            return $diferencia;
           
        }

}