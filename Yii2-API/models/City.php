<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $city_id
 * @property string $cityname
 *
 * @property Tempreture[] $tempretures
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cityname'], 'required'],
            [['cityname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'cityname' => 'Cityname',
        ];
    }

    /**
     * Gets query for [[Tempretures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTempretures()
    {
        return $this->hasMany(Tempreture::class, ['city_id' => 'city_id']);
    }
}
