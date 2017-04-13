<?php

namespace frontend\models;

use yii\base\Model;
use common\models\User;
use common\models\Member;

/**
 * Signup form
 */
class SignupForm extends Model {

    public $username;
    public $email;
    public $password;
    public $ref;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                ['username', 'trim'],
                ['username', 'required', 'message' => 'username tidak boleh kosong'],
                ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Username sudah ada yang menggunakan.'],
                ['username', 'string', 'min' => 2, 'max' => 255],
                ['email', 'trim'],
                ['email', 'required', 'message' => 'email tidak boleh kosong'],
                ['email', 'email'],
                ['email', 'string', 'max' => 255],
                ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Alamat Email sudah ada yang menggunakan.'],
                ['password', 'required', 'message' => 'password tidak boleh kosong'],
                ['password', 'string', 'min' => 6],
                ['ref', 'string', 'min' => 7, 'max' => 8],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup($member, $alamat, $kerja) {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->createUpdate();
            $user->createRefCode($this->ref);

            $connection = \Yii::$app->db;
            $transaction = $connection->beginTransaction();
            try {
                $user->save();
                $member->save();
                $alamat->save();
                $kerja->save();
                $transaction->commit();
            } catch (\yii\db\Exception $ex) {
                throw new \yii\web\HttpException(404, $ex);
            }
            return $user;
        }

        return null;
    }

}
