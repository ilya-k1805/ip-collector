<?php

namespace app\models;
use Yii;
use yii\base\Model;

class DebtActions extends Blacklist
{
	public $debt_id;

	public function cancel()
	{
		$debt = $this->getDebt();
		$debt->is_confirmed = -1;
		$debt->save();
	}

	public function confirm()
	{
		$debt = $this->getDebt();
		$debt->is_confirmed = 2;
		$debt->confirm_date = time();
		$debt->save();
	}

	public function getDebt()
	{
		return Blacklist::findOne($this->debt_id); 
	}

	public function publish()
    {
        $difference_time = time() - 60;
        $debts = Blacklist::find()->where(['is_confirmed' => 2])->andWhere(['<=', 'confirm_date', $difference_time])->all(); 
        foreach ($debts as $debt) {
        	$debt->is_confirmed = 1;
        	$debt->save();
        }
        		
    }
}