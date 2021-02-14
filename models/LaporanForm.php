<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class LaporanForm extends Model {

    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;
    public $periode_id;
    public $nip;
    public $tglawal;
    public $tglakhir;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            [['periode_id','nip', 'tglawal', 'tglakhir'], 'safe'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
}
