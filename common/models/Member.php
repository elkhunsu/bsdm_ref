<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bd_member}}".
 *
 * @property string $ID
 * @property integer $ktp
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $ibu_kandung
 * @property string $tempat_lahir
 * @property integer $no_hp
 * @property string $poin_ref
 *
 * @property BdUser $iD
 */
class Member extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%bd_member}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['ktp', 'no_hp', 'poin_ref'], 'integer'],
                ['ktp', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
                [['tanggal_lahir'], 'safe'],
                [['jenis_kelamin'], 'string', 'max' => 7],
                [['ibu_kandung', 'tempat_lahir'], 'string', 'max' => 45],
                [['ID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'ID' => 'ID',
            'ktp' => 'Ktp',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'ibu_kandung' => 'Ibu Kandung',
            'tempat_lahir' => 'Tempat Lahir',
            'no_hp' => 'No Hp',
            'poin_ref' => 'Poin Ref',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getID() {
        return $this->hasOne(BdUser::className(), ['ID' => 'ID']);
    }

}
