<?php

/**
 * This is the model class for table "t_programacionsugeridadetalle".
 *
 * The followings are the available columns in table 't_programacionsugeridadetalle':
 * @property integer $IdProgramacionSugeridaDetalle
 * @property integer $IdProgramacionSugerida
 * @property integer $NumeroMensajero
 * @property integer $HoraCero
 * @property integer $HoraUno
 * @property integer $HoraDos
 * @property integer $HoraTres
 * @property integer $HoraCuatro
 * @property integer $HoraCinco
 * @property integer $HoraSeis
 * @property integer $HoraSiete
 * @property integer $HoraOcho
 * @property integer $HoraNueve
 * @property integer $HoraDiez
 * @property integer $HoraOnce
 * @property integer $HoraDoce
 * @property integer $HoraTrece
 * @property integer $HoraCatorce
 * @property integer $HoraQuince
 * @property integer $HoraDieciSeis
 * @property integer $HoraDieciSiete
 * @property integer $HoraDieciOcho
 * @property integer $HoraDieciNueve
 * @property integer $HoraVeinte
 * @property integer $HoraVeintiUna
 * @property integer $HoraVeintiDos
 * @property integer $HoraVeintiTres
 * @property integer $TotalHorasProgramadas
 */
class TProgramacionsugeridadetalle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TProgramacionsugeridadetalle the static model class
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
		return 't_programacionsugeridadetalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdProgramacionSugerida, NumeroMensajero', 'required'),
			array('IdProgramacionSugerida, NumeroMensajero, HoraCero, HoraUno, HoraDos, HoraTres, HoraCuatro, HoraCinco, HoraSeis, HoraSiete, HoraOcho, HoraNueve, HoraDiez, HoraOnce, HoraDoce, HoraTrece, HoraCatorce, HoraQuince, HoraDieciSeis, HoraDieciSiete, HoraDieciOcho, HoraDieciNueve, HoraVeinte, HoraVeintiUna, HoraVeintiDos, HoraVeintiTres, TotalHorasProgramadas', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdProgramacionSugeridaDetalle, IdProgramacionSugerida, NumeroMensajero, HoraCero, HoraUno, HoraDos, HoraTres, HoraCuatro, HoraCinco, HoraSeis, HoraSiete, HoraOcho, HoraNueve, HoraDiez, HoraOnce, HoraDoce, HoraTrece, HoraCatorce, HoraQuince, HoraDieciSeis, HoraDieciSiete, HoraDieciOcho, HoraDieciNueve, HoraVeinte, HoraVeintiUna, HoraVeintiDos, HoraVeintiTres, TotalHorasProgramadas', 'safe', 'on'=>'search'),
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
			'IdProgramacionSugeridaDetalle' => 'Id Programacion Sugerida Detalle',
			'IdProgramacionSugerida' => 'Id Programacion Sugerida',
			'NumeroMensajero' => 'Numero Mensajero',
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
			'TotalHorasProgramadas' => 'Total Horas Programadas',
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

		$criteria->compare('IdProgramacionSugeridaDetalle',$this->IdProgramacionSugeridaDetalle);
		$criteria->compare('IdProgramacionSugerida',$this->IdProgramacionSugerida);
		$criteria->compare('NumeroMensajero',$this->NumeroMensajero);
		$criteria->compare('HoraCero',$this->HoraCero);
		$criteria->compare('HoraUno',$this->HoraUno);
		$criteria->compare('HoraDos',$this->HoraDos);
		$criteria->compare('HoraTres',$this->HoraTres);
		$criteria->compare('HoraCuatro',$this->HoraCuatro);
		$criteria->compare('HoraCinco',$this->HoraCinco);
		$criteria->compare('HoraSeis',$this->HoraSeis);
		$criteria->compare('HoraSiete',$this->HoraSiete);
		$criteria->compare('HoraOcho',$this->HoraOcho);
		$criteria->compare('HoraNueve',$this->HoraNueve);
		$criteria->compare('HoraDiez',$this->HoraDiez);
		$criteria->compare('HoraOnce',$this->HoraOnce);
		$criteria->compare('HoraDoce',$this->HoraDoce);
		$criteria->compare('HoraTrece',$this->HoraTrece);
		$criteria->compare('HoraCatorce',$this->HoraCatorce);
		$criteria->compare('HoraQuince',$this->HoraQuince);
		$criteria->compare('HoraDieciSeis',$this->HoraDieciSeis);
		$criteria->compare('HoraDieciSiete',$this->HoraDieciSiete);
		$criteria->compare('HoraDieciOcho',$this->HoraDieciOcho);
		$criteria->compare('HoraDieciNueve',$this->HoraDieciNueve);
		$criteria->compare('HoraVeinte',$this->HoraVeinte);
		$criteria->compare('HoraVeintiUna',$this->HoraVeintiUna);
		$criteria->compare('HoraVeintiDos',$this->HoraVeintiDos);
		$criteria->compare('HoraVeintiTres',$this->HoraVeintiTres);
		$criteria->compare('TotalHorasProgramadas',$this->TotalHorasProgramadas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getTotal($records, $column)
        {
                $total = 0;
                foreach ($records as $record) {
                        $total += $record->$column;
                }
                return $total;
        }
}