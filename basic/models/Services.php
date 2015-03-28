<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $id
 * @property string $description
 * @property integer $provider
 * @property string $type
 * @property string $default_price
 * @property integer $capacity
 * @property string $price_per_unit
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $updated_at
 *
 * @property Packageservices[] $packageservices
 * @property User $updatedBy
 * @property Provider $provider0
 * @property User $createdBy
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'provider'], 'required'],
            [['provider', 'capacity', 'created_by', 'updated_by'], 'integer'],
            [['default_price', 'price_per_unit'], 'number'],
            [['updated_at'], 'safe'],
            [['description'], 'string', 'max' => 250],
            [['type'], 'string', 'max' => 45],
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
            'description' => Yii::t('app', 'Description'),
            'provider' => Yii::t('app', 'Provider'),
            'type' => Yii::t('app', 'Type'),
            'default_price' => Yii::t('app', 'Default Price'),
            'capacity' => Yii::t('app', 'Capacity'),
            'price_per_unit' => Yii::t('app', 'Price Per Unit'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackageservices()
    {
        return $this->hasMany(Packageservices::className(), ['service' => 'id']);
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
    public function getProvider0()
    {
        return $this->hasOne(Provider::className(), ['id' => 'provider']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
