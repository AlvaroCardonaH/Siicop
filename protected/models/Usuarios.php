<?php

/**
 * This is the model class for table "m_usuarios".
 *
 * The followings are the available columns in table 'm_usuarios':
 * @property integer $IdUsuario
 * @property integer $Documento
 * @property string $LoginUsuario
 * @property string $ContrasenaUsuario
 * @property string $PrimerNombre
 * @property string $SegundoNombre
 * @property string $PrimerApellido
 * @property string $SegundoApellido
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $IdUsuarioUltimaModifica
 * @property string $FechaUltimaModifica
 * @property integer $CodigoEstadoRegistro
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
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
		return 'm_usuarios';
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
                            'Documento', 
                            'unique', 
                            'attributeName'=>'Documento',
                            'className'=>'Usuarios',
                            'on' => 'insert',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
			array(
                            'LoginUsuario', 
                            'unique', 
                            'attributeName'=>'LoginUsuario',
                            'className'=>'Usuarios',
                            'on' => 'insert',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
			array(
                            'Documento', 
                            'unique', 
                            'attributeName'=>'Documento',
                            'className'=>'Usuarios',
                            'on' => 'update',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
                        array(
                            'LoginUsuario', 
                            'unique', 
                            'attributeName'=>'LoginUsuario',
                            'className'=>'Usuarios',
                            'on' => 'update',
                            'message' => 'El valor del Campo {attribute} Ya Existe',
                        ),
                        array(
                            array('PrimerNombre', 'PrimerApellido', 'SegundoNombre', 'SegundoApellido',),
                            'match', 
                            'pattern'=>'/^[a-záéíóúñ\s]+$/i',
                            'message' => 'El Formato del tipo de dato no es Correcto. Solo letras y espacios',
                        ),
                    
                        array(
                            'LoginUsuario',
                            'length',
                            'min' => 5,
                            'tooShort' => 'Campo debe tener mínimo 5 caracteres',
                            'max' => 20,
                            'tooLong' => 'Campo debe tener máximo 20 caracteres',                            
                        ),
                        array(
                            'LoginUsuario',
                            'match', 
                            //'pattern'=>'/^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i',
                            'pattern'=>'/^[a-z0-9]+$/i',
                            'message' => 'El Formato del tipo de dato no es Correcto. Solo letras y números',
                        ),
                        array(
                            'ContrasenaUsuario',
                            'length',
                            'min' => 5,
                            'tooShort' => 'Campo debe tener mínimo 5 caracteres',
                            'max' => 80,
                            'tooLong' => 'Campo debe tener máximo 15 caracteres',                            
                        ),
			array('Documento, LoginUsuario, ContrasenaUsuario, PrimerNombre, PrimerApellido, IdUsuarioGraba, FechaGraba', 'required'),
			array('Documento, IdUsuarioGraba, IdUsuarioUltimaModifica, CodigoEstadoRegistro', 'numerical', 'integerOnly'=>true),
			array('LoginUsuario', 'length', 'max'=>20),
			array('ContrasenaUsuario', 'length', 'max'=>50),
			array('PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido', 'length', 'max'=>15),
			array('FechaUltimaModifica', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IdUsuario, Documento, LoginUsuario, ContrasenaUsuario, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, IdUsuarioGraba, FechaGraba, IdUsuarioUltimaModifica, FechaUltimaModifica, CodigoEstadoRegistro', 'safe', 'on'=>'search'),
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
			'IdUsuario' => 'Id Usuario',
			'Documento' => 'Documento',
			'LoginUsuario' => 'Login Usuario',
			'ContrasenaUsuario' => 'Contraseña Usuario',
			'PrimerNombre' => 'Primer Nombre',
			'SegundoNombre' => 'Segundo Nombre',
			'PrimerApellido' => 'Primer Apellido',
			'SegundoApellido' => 'Segundo Apellido',
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

		$criteria->compare('IdUsuario',$this->IdUsuario);
		$criteria->compare('Documento',$this->Documento);
		$criteria->compare('LoginUsuario',$this->LoginUsuario,true);
		$criteria->compare('ContrasenaUsuario',$this->ContrasenaUsuario,true);
		$criteria->compare('PrimerNombre',$this->PrimerNombre,true);
		$criteria->compare('SegundoNombre',$this->SegundoNombre,true);
		$criteria->compare('PrimerApellido',$this->PrimerApellido,true);
		$criteria->compare('SegundoApellido',$this->SegundoApellido,true);
		$criteria->compare('IdUsuarioGraba',$this->IdUsuarioGraba);
		$criteria->compare('FechaGraba',$this->FechaGraba,true);
		$criteria->compare('IdUsuarioUltimaModifica',$this->IdUsuarioUltimaModifica);
		$criteria->compare('FechaUltimaModifica',$this->FechaUltimaModifica,true);
		$criteria->compare('CodigoEstadoRegistro',$this->CodigoEstadoRegistro);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}