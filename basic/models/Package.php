<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "package".
 *
 * @property integer $id
 * @property string $descriptiom
 * @property string $startdate
 * @property string $enddate
 * @property string $type
 * @property string $cost
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $updated_at
 *
 * @property User $updatedBy
 * @property User $createdBy
 * @property Packageservices[] $packageservices
 */
class Package extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'package';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['startdate', 'enddate', 'updated_at'], 'safe'],
            [['cost'], 'number'],
            [['created_by', 'updated_by'], 'integer'],
            [['descriptiom'], 'string', 'max' => 500],
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
            'descriptiom' => Yii::t('app', 'Descriptiom'),
            'startdate' => Yii::t('app', 'Startdate'),
            'enddate' => Yii::t('app', 'Enddate'),
            'type' => Yii::t('app', 'Type'),
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
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackageservices()
    {
        return $this->hasMany(Packageservices::className(), ['package' => 'id']);
    }
}
