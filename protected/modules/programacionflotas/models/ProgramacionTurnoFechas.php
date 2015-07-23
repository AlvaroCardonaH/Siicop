<?php

/**
 * This is the model class for table "t_programacionturnofechas".
 *
 * The followings are the available columns in table 't_programacionturnofechas':
 * @property integer $IdProgramacionTurnoFecha
 * @property integer $IdProgramacionTurno
 * @property string $FechaInicio
 * @property string $FechaFinal
 */
class ProgramacionTurnoFechas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_programacionturnofechas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdProgramacionTurno, FechaInicio, FechaFinal', 'required'),
			array('IdProgramacionTurno', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdProgramacionTurnoFecha, IdProgramacionTurno, FechaInicio, FechaFinal', 'safe', 'on'=>'search'),
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
			'IdProgramacionTurnoFecha' => 'Id Programacion Turno Fecha',
			'IdProgramacionTurno' => 'Id Programacion Turno',
			'FechaInicio' => 'Fecha Inicio',
			'FechaFinal' => 'Fecha Final',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('IdProgramacionTurnoFecha',$this->IdProgramacionTurnoFecha);
		$criteria->compare('IdProgramacionTurno',$this->IdProgramacionTurno);
		$criteria->compare('FechaInicio',$this->FechaInicio,true);
		$criteria->compare('FechaFinal',$this->FechaFinal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProgramacionTurnoFechas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
