<?php

/**
 * This is the model class for table "m_flotas".
 *
 * The followings are the available columns in table 'm_flotas':
 * @property integer $IdFlota
 * @property string $NombreFlota
 * @property integer $IdSede
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $IdUsuarioUltimaModifica
 * @property string $FechaUltimaModifica
 * @property string $CodigoEstadoRegistro
 *
 * The followings are the available model relations:
 * @property HReportepedidosxpdv[] $hReportepedidosxpdvs
 * @property MDiasclientefiel[] $mDiasclientefiels
 * @property MSedes $idSede
 * @property MHorarioxflota[] $mHorarioxflotas
 * @property MMensajeros[] $mMensajeroses
 */
class MFlotas extends CActiveRecord
{
        public $sede;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MFlotas the static model class
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
		return 'm_flotas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array(
                            'NombreFlota', 
                            'unique', 
                            'attributeName'=>'NombreFlota',
                            'className'=>'MFlotas',
                            'on' => 'insert',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
                    array(
                            'NombreFlota', 
                            'unique', 
                            'attributeName'=>'NombreFlota',
                            'className'=>'MFlotas',
                            'on' => 'update',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
			array('NombreFlota, IdSede, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica', 'required'),
			array('IdSede, IdUsuarioGraba, IdUsuarioUltimaModifica', 'numerical', 'integerOnly'=>true),
			array('NombreFlota, CodigoEstadoRegistro', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdFlota, NombreFlota, IdSede,sede, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica, CodigoEstadoRegistro', 'safe', 'on'=>'search'),
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
			'hReportepedidosxpdvs' => array(self::HAS_MANY, 'HReportepedidosxpdv', 'IdFlota'),
			'mDiasclientefiels' => array(self::HAS_MANY, 'MDiasclientefiel', 'IdFlota'),
			'idSede' => array(self::BELONGS_TO, 'MSedes', 'IdSede'),
			'mHorarioxflotas' => array(self::HAS_MANY, 'MHorarioxflota', 'IdFlota'),
			'mMensajeroses' => array(self::HAS_MANY, 'MMensajeros', 'IdFlota'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdFlota' => 'Id Flota',
			'NombreFlota' => 'Nombre Flota',
			'IdSede' => 'Sede',
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
                $criteria->with = array('idSede');
                $criteria->together = true;

		$criteria->compare('t.IdFlota',$this->IdFlota);
		$criteria->compare('t.NombreFlota',$this->NombreFlota,true);
		$criteria->compare('t.IdSede',$this->IdSede);
		$criteria->compare('t.IdUsuarioGraba',$this->IdUsuarioGraba);
		$criteria->compare('t.FechaGraba',$this->FechaGraba,true);
		$criteria->compare('t.IdUsuarioUltimaModifica',$this->IdUsuarioUltimaModifica);
		$criteria->compare('t.FechaUltimaModifica',$this->FechaUltimaModifica,true);
		$criteria->compare('t.CodigoEstadoRegistro',$this->CodigoEstadoRegistro,true);
                $criteria->compare('idSede.NombreSede',$this->sede,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
                            'defaultOrder' => 'NombreSede,NombreFlota',
                            'attributes' => array(
                                'NombreSede' => array(
                                'asc' => 'idSede.NombreSede, NombreFlota',
                                'desc' => 'idSede.NombreSede desc, NombreFlota',
                                 ),
                                '*',
                            ),
                        ),
		));
	}
}