<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservation".
 *
 * @property integer $id
 * @property integer $client
 * @property integer $packageservice
 * @property string $priceoffer
 * @property string $finalprice
 * @property string $fullypaid
 * @property string $closed_deal
 * @property string $amount_paid
 * @property string $cost
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $updated_at
 *
 * @property Payments[] $payments
 * @property User $updatedBy
 * @property Clientusers $client0
 * @property Packageservices $packageservice0
 * @property User $createdBy
 */
class Reservation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'client', 'packageservice'], 'required'],
            [['id', 'client', 'packageservice', 'created_by', 'updated_by'], 'integer'],
            [['priceoffer', 'finalprice', 'amount_paid', 'cost'], 'number'],
            [['updated_at'], 'safe'],
            [['fullypaid', 'closed_deal'], 'string', 'max' => 1],
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
            'packageservice' => Yii::t('app', 'Packageservice'),
            'priceoffer' => Yii::t('app', 'Priceoffer'),
            'finalprice' => Yii::t('app', 'Finalprice'),
            'fullypaid' => Yii::t('app', 'Fullypaid'),
            'closed_deal' => Yii::t('app', 'Closed Deal'),
            'amount_paid' => Yii::t('app', 'Amount Paid'),
            'cost' => Yii::t('app', 'Cost'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['reservation' => 'id']);
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
        return $this->hasOne(Clientusers::className(), ['id' => 'client']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackageservice0()
    {
        return $this->hasOne(Packageservices::className(), ['id' => 'packageservice']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
