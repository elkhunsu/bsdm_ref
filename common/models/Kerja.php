<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bd_kerja}}".
 *
 * @property string $ID
 * @property string $pekerjaan
 * @property string $lama_bekerja
 * @property string $alamat_kantor
 * @property string $kota
 * @property integer $no_telp
 *
 * @property BdUser $iD
 */
class Kerja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bd_kerja}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_telp'], 'integer'],
            [['pekerjaan', 'lama_bekerja', 'alamat_kantor', 'kota'], 'string', 'max' => 45],
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
            'lama_bekerja' => 'Lama Bekerja',
            'alamat_kantor' => 'Alamat Kantor',
            'kota' => 'Kota',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getID()
    {
        return $this->hasOne(User::className(), ['ID' => 'ID']);
    }
}
