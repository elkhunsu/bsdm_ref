<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bd_user".
 *
 * @property string $ID
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $auth_key
 * @property string $email
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $ref
 *
 * @property BdAlamat $bdAlamat
 * @property BdMember $bdMember
 * @property BdPekerjaan $bdPekerjaan
 */
class User extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'bd_user';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['status'], 'integer'],
                [['created_at', 'updated_at'], 'safe'],
                [['ref'], 'required'],
                [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
                [['auth_key'], 'string', 'max' => 32],
                [['ref'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'ID' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'auth_key' => 'Auth Key',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'ref' => 'Ref',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBdAlamat() {
        return $this->hasOne(BdAlamat::className(), ['ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBdMember() {
        return $this->hasOne(BdMember::className(), ['ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBdPekerjaan() {
        return $this->hasOne(BdPekerjaan::className(), ['ID' => 'ID']);
    }

}
