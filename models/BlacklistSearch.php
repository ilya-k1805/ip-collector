<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Blacklist;

/**
 * BlacklistSearch represents the model behind the search form about `app\models\Blacklist`.
 */
class BlacklistSearch extends Blacklist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'creditor_id'], 'integer'],
            [['company', 'adress', 'country', 'debt'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params,$select = null,$auth = false)
    {
        if($select !== null && $auth === false)
        {
            $query = Blacklist::find()->where(['is_confirmed' => $select]);
        }
        elseif ($select !== null && $auth !== false) {
            $query = Blacklist::find()->where(['is_confirmed' => $select,'creditor_id' => Yii::$app->user->id]);
        }
        else 
        {
            $query = Blacklist::find();
        }
        

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'creditor_id' => $this->creditor_id,
        ]);

        $query->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'debt', $this->debt]);

        return $dataProvider;
    }
}
