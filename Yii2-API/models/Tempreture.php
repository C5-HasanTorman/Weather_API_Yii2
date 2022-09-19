<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tempreture".
 *
 * @property int $temp_id
 * @property int $tempreture
 * @property int $city_id
 *
 * @property City $city
 */
class Tempreture extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tempreture';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tempreture', 'city_id'], 'required'],
            [['tempreture', 'city_id'], 'integer'],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::class, 'targetAttribute' => ['city_id' => 'city_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'temp_id' => 'Temp ID',
            'tempreture' => 'Tempreture',
            'city_id' => 'City ID',
        ];
    }

    /**
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::class, ['city_id' => 'city_id']);
    }
}
