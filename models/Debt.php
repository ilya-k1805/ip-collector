<?php

namespace app\models;

use yii\db\ActiveRecord;

class Debt extends ActiveRecord
{

	static public function getDebts($params)
	{
		$debts = self::find()->where(['is_confirmed' => 0])->all();
		return $debts;
	}
}