<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientusers".
 *
 * @property integer $id
 * @property integer $client
 * @property string $firstName
 * @property string $lastName
 * @property string $NIPT
 * @property string $branch
 * @property string $tel
 * @property string $cel
 * @property string $fax
 * @property string $email
 * @property string $city
 * @property string $address
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $updated_at
 *
 * @property User $updatedBy
 * @property Client $client0
 * @property User $createdBy
 * @property Reservation[] $reservations
 */
class ClientUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientusers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client', 'firstName', 'lastName'], 'required'],
            [['client', 'created_by', 'updated_by'], 'integer'],
            [['updated_at'], 'safe'],
            [['firstName', 'lastName'], 'string', 'max' => 225],
            [['NIPT'], 'string', 'max' => 10],
            [['branch', 'tel', 'cel', 'fax', 'email', 'city', 'address'], 'string', 'max' => 45],
            [['created_by'], 'unique'],
            [['created_by'], 'unique'],
            [['updated_by'], 'unique'],
            [['created_by'], 'unique'],
            [['updated_by'], 'unique'],
            [['created_by'], 'unique'],
            [['updated_by'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'client' => Yii::t('app', 'Client'),
            'firstName' => Yii::t('app', 'First Name'),
            'lastName' => Yii::t('app', 'Last Name'),
            'NIPT' => Yii::t('app', 'Nipt'),
            'branch' => Yii::t('app', 'Branch'),
            'tel' => Yii::t('app', 'Tel'),
            'cel' => Yii::t('app', 'Cel'),
            'fax' => Yii::t('app', 'Fax'),
            'email' => Yii::t('app', 'Email'),
            'city' => Yii::t('app', 'City'),
            'address' => Yii::t('app', 'Address'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient0()
    {
        return $this->hasOne(Client::className(), ['id' => 'client']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservations()
    {
        return $this->hasMany(Reservation::className(), ['client' => 'id']);
    }
}
