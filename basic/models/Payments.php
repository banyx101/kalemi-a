<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property integer $id
 * @property integer $reservation
 * @property string $date
 * @property string $quantity
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $updated_at
 *
 * @property Reservation $reservation0
 * @property User $createdBy
 * @property User $updatedBy
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reservation'], 'required'],
            [['reservation', 'created_by', 'updated_by'], 'integer'],
            [['date', 'updated_at'], 'safe'],
            [['quantity'], 'number'],
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
            'reservation' => Yii::t('app', 'Reservation'),
            'date' => Yii::t('app', 'Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservation0()
    {
        return $this->hasOne(Reservation::className(), ['id' => 'reservation']);
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
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }
}
