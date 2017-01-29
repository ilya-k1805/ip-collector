<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $content->title;
$this->params['breadcrumbs'][] = $content->page_name;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
	<?= $content->text ?>
</div>
