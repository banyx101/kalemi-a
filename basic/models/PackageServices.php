<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "packageservices".
 *
 * @property integer $id
 * @property integer $package
 * @property integer $service
 * @property string $comments
 * @property string $default_price
 * @property string $start
 * @property string $end
 * @property string $cost
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $updated_at
 *
 * @property User $updatedBy
 * @property Package $package0
 * @property Services $service0
 * @property User $createdBy
 * @property Reservation[] $reservations
 */
class PackageServices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'packageservices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['package', 'service'], 'required'],
            [['package', 'service', 'created_by', 'updated_by'], 'integer'],
            [['default_price', 'cost'], 'number'],
            [['start', 'end', 'updated_at'], 'safe'],
            [['comments'], 'string', 'max' => 300],
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
            'package' => Yii::t('app', 'Package'),
            'service' => Yii::t('app', 'Service'),
            'comments' => Yii::t('app', 'Comments'),
            'default_price' => Yii::t('app', 'Default Price'),
            'start' => Yii::t('app', 'Start'),
            'end' => Yii::t('app', 'End'),
            'cost' => Yii::t('app', 'Cost'),
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
    public function getPackage0()
    {
        return $this->hasOne(Package::className(), ['id' => 'package']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getService0()
    {
        return $this->hasOne(Services::className(), ['id' => 'service']);
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
        return $this->hasMany(Reservation::className(), ['packageservice' => 'id']);
    }
}
