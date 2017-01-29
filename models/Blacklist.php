<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blacklist".
 *
 * @property integer $id
 * @property integer $creditor_id
 * @property string $company
 * @property string $adress
 * @property string $country
 * @property string $debt
 * @property string $debtor_email
 */
class Blacklist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blacklist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['adress'], 'string'],
            [['company', 'country', 'debt'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company' => 'Company',
            'adress' => 'Adress',
            'country' => 'Country',
            'debt' => 'Debt',
        ];
    }
}
