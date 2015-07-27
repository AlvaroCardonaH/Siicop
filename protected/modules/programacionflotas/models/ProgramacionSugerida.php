<?php

/**
 * This is the model class for table "t_programacionsugerida".
 *
 * The followings are the available columns in table 't_programacionsugerida':
 * @property integer $IdProgramacionSugerida
 * @property integer $IdClasificacionDia
 * @property integer $IdReportePedidosxPdv
 * @property string $FechaInicio
 * @property string $FechaFinal
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $IdUsuarioUltimaModifica
 * @property string $FechaUltimaModifica
 * @property integer $CodigoEstadoRegistro
 * @property string $DescripcionProgramacionSugerida
 */
class Programacionsugerida extends CActiveRecord
{
        public $BuscarFlota;
        public $BuscarDia;
        public $IdFlota;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Programacionsugerida the static model class
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
		return 't_programacionsugerida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdReportePedidosxPdv, FechaInicio, FechaFinal, NumeroMensajerosProgramacion', 'required'),
			array('FechaFinal', 'compare', 'compareAttribute' => 'FechaInicio', 'operator' => '>', 'message'=>'La Fecha Final debe ser superior a la Fecha de Inicio'),
			array('IdClasificacionDia, IdReportePedidosxPdv, IdUsuarioGraba, IdUsuarioUltimaModifica,NumeroMensajerosProgramacion, CodigoEstadoRegistro, IdFlota', 'numerical', 'integerOnly'=>true),
			array('DescripcionProgramacionSugerida', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdProgramacionSugerida, IdClasificacionDia, NumeroMensajerosProgramacion,IdReportePedidosxPdv, BuscarDia, BuscarFlota, FechaInicio, FechaFinal, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica, CodigoEstadoRegistro, DescripcionProgramacionSugerida', 'safe', 'on'=>'search'),
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
                    'idReportexpdv'=>array(self::BELONGS_TO,'Reportepedidosxpdv','IdReportePedidosxPdv'),                  
                    'idClasificacionDia'=>array(self::BELONGS_TO,'Clasificaciondias','IdClasificacionDia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdProgramacionSugerida' => 'Programacion Sugerida',
			'IdClasificacionDia' => 'Clasificacion Dia',
			'IdReportePedidosxPdv' => 'ID Reporte',
			'FechaInicio' => 'Fecha Inicio',
			'FechaFinal' => 'Fecha Final',
                        'NumeroMensajerosProgramacion' => '# Mensajeros Programacion',
			'IdUsuarioGraba' => 'Id Usuario Graba',
			'FechaGraba' => 'Fecha Graba',
			'IdUsuarioUltimaModifica' => 'Id Usuario Ultima Modifica',
			'FechaUltimaModifica' => 'Fecha Ultima Modifica',
			'CodigoEstadoRegistro' => 'Codigo Estado Registro',
                        'DescripcionProgramacionSugerida' => 'Descripcion Programacion',
                        'IdFlota' => 'Flota',
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
                $criteria->with = array('idClasificacionDia','idReportexpdv.idFlota');
                $criteria->together = true;  

		$criteria->compare('t.IdProgramacionSugerida',$this->IdProgramacionSugerida);
		$criteria->compare('t.IdClasificacionDia',$this->IdClasificacionDia);
		$criteria->compare('t.IdReportePedidosxPdv',$this->IdReportePedidosxPdv);
		$criteria->compare('t.FechaInicio',$this->FechaInicio,true);
		$criteria->compare('t.FechaFinal',$this->FechaFinal,true);
		$criteria->compare('t.IdUsuarioGraba',$this->IdUsuarioGraba);
		$criteria->compare('t.FechaGraba',$this->FechaGraba,true);
		$criteria->compare('t.IdUsuarioUltimaModifica',$this->IdUsuarioUltimaModifica);
		$criteria->compare('t.FechaUltimaModifica',$this->FechaUltimaModifica,true);
                $criteria->compare('t.DescripcionProgramacionSugerida',$this->DescripcionProgramacionSugerida,true);
		$criteria->compare('t.CodigoEstadoRegistro',$this->CodigoEstadoRegistro);
                $criteria->compare('t.NumeroMensajerosProgramacion',$this->NumeroMensajerosProgramacion);
                $criteria->compare('idClasificacionDia.NombreClasificacionDia',$this->BuscarDia,true);
                $criteria->compare('idFlota.NombreFlota', $this->BuscarFlota, true );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>30,
                         ),
			'sort' => array(
                            'defaultOrder' => 't.FechaInicio desc, idClasificacionDia.NombreClasificacionDia desc, t.FechaGraba asc',
                            /*'attributes' => array(
                                'FechaInicio' => array(
                                'asc' => 'FechaInicio',
                               // 'desc' => 'idSede.NombreSede desc, NombreFlota',
                                 ),
                                '*',
                            ),*/
                        ),
		));
	}
        
        public function getNecesidad($IdProgramacion, $IdClasificacionDia, $IdReportePedidos)
        {
            
            
            $sql = "SELECT IF(tabla.DiferenciaHoraCero <= 0, 0,tabla.DiferenciaHoraCero)
                +IF(tabla.DiferenciaHoraUno <= 0, 0, tabla.DiferenciaHoraUno)
                +IF(tabla.DiferenciaHoraDos <= 0, 0, tabla.DiferenciaHoraDos)
                +IF(tabla.DiferenciaHoraTres <= 0, 0, tabla.DiferenciaHoraTres)
                +IF(tabla.DiferenciaHoraCuatro <= 0, 0, tabla.DiferenciaHoraCuatro)
                +IF(tabla.DiferenciaHoraCinco <= 0, 0, tabla.DiferenciaHoraCinco)
                +IF(tabla.DiferenciaHoraSeis <= 0, 0, tabla.DiferenciaHoraSeis)
                +IF(tabla.DiferenciaHoraSiete <= 0, 0, tabla.DiferenciaHoraSiete)
                +IF(tabla.DiferenciaHoraOcho <= 0, 0, tabla.DiferenciaHoraOcho)
                +IF(tabla.DiferenciaHoraNueve <= 0, 0, tabla.DiferenciaHoraNueve)
                +IF(tabla.DiferenciaHoraDiez <= 0, 0, tabla.DiferenciaHoraDiez)
                +IF(tabla.DiferenciaHoraOnce <= 0, 0, tabla.DiferenciaHoraOnce)
                +IF(tabla.DiferenciaHoraDoce <= 0, 0, tabla.DiferenciaHoraDoce)
                +IF(tabla.DiferenciaHoraTrece <= 0, 0, tabla.DiferenciaHoraTrece)
                +IF(tabla.DiferenciaHoraCatorce <= 0, 0, tabla.DiferenciaHoraCatorce)
                +IF(tabla.DiferenciaHoraQuince <= 0, 0, tabla.DiferenciaHoraQuince)
                +IF(tabla.DiferenciaHoraDieciSeis <= 0, 0, tabla.DiferenciaHoraDieciSeis)
                +IF(tabla.DiferenciaHoraDieciSiete <= 0, 0, tabla.DiferenciaHoraDieciSiete)
                +IF(tabla.DiferenciaHoraDieciOcho <= 0, 0, tabla.DiferenciaHoraDieciOcho)
                +IF(tabla.DiferenciaHoraDieciNueve <= 0, 0, tabla.DiferenciaHoraDieciNueve)
                +IF(tabla.DiferenciaHoraVeinte <= 0, 0, tabla.DiferenciaHoraVeinte)
                +IF(tabla.DiferenciaHoraVeintiUna <= 0, 0, tabla.DiferenciaHoraVeintiUna)
                +IF(tabla.DiferenciaHoraVeintiDos <= 0, 0, tabla.DiferenciaHoraVeintiDos)
                +IF(tabla.DiferenciaHoraVeintiTres <= 0, 0, tabla.DiferenciaHoraVeintiTres) AS Necesidad
                FROM (
                SELECT SUM(cd.HoraCero) - (SELECT SUM(sd.HoraCero)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraCero,
                SUM(cd.HoraUno) - (SELECT SUM(sd.HoraUno)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraUno,
                SUM(cd.HoraDos) - (SELECT SUM(sd.HoraDos)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraDos,
                SUM(cd.HoraTres) - (SELECT SUM(sd.HoraTres)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraTres,
                SUM(cd.HoraCuatro) - (SELECT SUM(sd.HoraCuatro)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraCuatro,
                SUM(cd.HoraCinco) - (SELECT SUM(sd.HoraCinco)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraCinco,
                SUM(cd.HoraSeis) - (SELECT SUM(sd.HoraSeis)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraSeis,
                SUM(cd.HoraSiete) - (SELECT SUM(sd.HoraSiete)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraSiete,
                SUM(cd.HoraOcho) - (SELECT SUM(sd.HoraOcho)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraOcho,
                SUM(cd.HoraNueve) - (SELECT SUM(sd.HoraNueve)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraNueve,
                SUM(cd.HoraDiez) - (SELECT SUM(sd.HoraDiez)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraDiez,
                SUM(cd.HoraOnce) - (SELECT SUM(sd.HoraOnce)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraOnce,
                SUM(cd.HoraDoce) - (SELECT SUM(sd.HoraDoce)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraDoce,
                SUM(cd.HoraTrece) - (SELECT SUM(sd.HoraTrece)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraTrece,
                SUM(cd.HoraCatorce) - (SELECT SUM(sd.HoraCatorce)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraCatorce,
                SUM(cd.HoraQuince) - (SELECT SUM(sd.HoraQuince)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraQuince,
                SUM(cd.HoraDieciSeis) - (SELECT SUM(sd.HoraDieciSeis)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraDieciSeis,
                SUM(cd.HoraDieciSiete) - (SELECT SUM(sd.HoraDieciSiete)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraDieciSiete,
                SUM(cd.HoraDieciOcho) - (SELECT SUM(sd.HoraDieciOcho)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraDieciOcho,
                SUM(cd.HoraDieciNueve) - (SELECT SUM(sd.HoraDieciNueve)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraDieciNueve,
                SUM(cd.HoraVeinte) - (SELECT SUM(sd.HoraVeinte)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraVeinte,
                SUM(cd.HoraVeintiUna) - (SELECT SUM(sd.HoraVeintiUna)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraVeintiUna,
                SUM(cd.HoraVeintiDos) - (SELECT SUM(sd.HoraVeintiDos)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraVeintiDos,
                SUM(cd.HoraVeintiTres) - (SELECT SUM(sd.HoraVeintiTres)
                FROM  t_programacionsugeridadetalle sd
                WHERE sd.IdProgramacionSugerida = $IdProgramacion
                ) AS DiferenciaHoraVeintiTres
                FROM  v_resumen_clasificacion_dias cd
                WHERE cd.IdClasificacionDia = $IdClasificacionDia
                AND cd.IdReportePedidosxPdv = $IdReportePedidos
                ) AS tabla
                ";
                $Necesidad = Yii::app()->db->createCommand($sql)->queryScalar();
                
                return $Necesidad;
        }
        
        
}