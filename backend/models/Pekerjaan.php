<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bd_pekerjaan".
 *
 * @property string $ID
 * @property string $pekerjaan
 * @property string $nomor_kantor
 * @property string $lama_bekerja
 * @property string $alamat_kantor
 * @property string $kota
 * @property string $kecamatan
 * @property string $kelurahan
 *
 * @property BdUser $iD
 */
class Pekerjaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bd_pekerjaan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID'], 'integer'],
            [['pekerjaan', 'nomor_kantor', 'lama_bekerja', 'alamat_kantor', 'kota', 'kecamatan', 'kelurahan'], 'string', 'max' => 45],
            [['ID'], 'unique'],
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
            'pekerjaan' => 'Pekerjaan',
            'nomor_kantor' => 'Nomor Kantor',
            'lama_bekerja' => 'Lama Bekerja',
            'alamat_kantor' => 'Alamat Kantor',
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
