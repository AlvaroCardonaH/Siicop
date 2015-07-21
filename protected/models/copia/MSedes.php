<?php

/**
 * This is the model class for table "m_sedes".
 *
 * The followings are the available columns in table 'm_sedes':
 * @property integer $IdSede
 * @property string $NombreSede
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property string $IdUsuarioUltimaModifica
 * @property string $FechaUltimaModifica
 * @property integer $CodigoEstadoRegistro
 *
 * The followings are the available model relations:
 * @property MFlotas[] $mFlotases
 */
class MSedes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MSedes the static model class
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
		return 'm_sedes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NombreSede, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica', 'required'),
                        array(
                            'NombreSede', 
                            'unique', 
                            'attributeName'=>'NombreSede',
                            'className'=>'MSedes',
                            'on' => 'insert',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
                        array(
                            'NombreSede', 
                            'unique', 
                            'attributeName'=>'NombreSede',
                            'className'=>'MSedes',
                            'on' => 'update',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
                        array(
                            array('NombreSede'),
                            'match', 
                            'pattern'=>'/^[a-záéíóúñÑ\s]+$/i',
                            'message' => 'El formato del campo {attribute} no es correcto. Solo letras y espacios',
                        ),
			array('IdUsuarioGraba, CodigoEstadoRegistro', 'numerical', 'integerOnly'=>true),
			array('NombreSede, IdUsuarioUltimaModifica', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdSede, NombreSede, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica, CodigoEstadoRegistro', 'safe', 'on'=>'search'),
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
			'mFlotases' => array(self::HAS_MANY, 'MFlotas', 'IdSede'),
                        'mUsuarios' => array(self::BELONGS_TO, 'MUsuarios', 'IdUsuarioGraba'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdSede' => 'Id Sede',
			'NombreSede' => 'Nombre Sede',
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

		$criteria->compare('IdSede',$this->IdSede);
		$criteria->compare('NombreSede',$this->NombreSede,true);
		$criteria->compare('IdUsuarioGraba',$this->IdUsuarioGraba);
		$criteria->compare('FechaGraba',$this->FechaGraba,true);
		$criteria->compare('IdUsuarioUltimaModifica',$this->IdUsuarioUltimaModifica,true);
		$criteria->compare('FechaUltimaModifica',$this->FechaUltimaModifica,true);
		$criteria->compare('CodigoEstadoRegistro',$this->CodigoEstadoRegistro);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
                        'defaultOrder' => 'NombreSede',
                        'attributes' => array(
                        'NombreSede' => array(
                        'asc' => 'NombreSede',
                        'desc' => 'NombreSede desc',
                ),
                
                '*',
            ),
        ),
		));
	}
}