<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bd_alamat".
 *
 * @property string $ID
 * @property string $alamat
 * @property string $kota
 * @property string $kecamatan
 * @property string $kelurahan
 *
 * @property BdUser $iD
 */
class Alamat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bd_alamat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alamat'], 'string', 'max' => 255],
            [['kota', 'kecamatan', 'kelurahan'], 'string', 'max' => 45],
            [['ID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'kecamatan' => 'Kecamatan',
            'kelurahan' => 'Kelurahan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getID()
    {
        return $this->hasOne(BdUser::className(), ['ID' => 'ID']);
    }
}
