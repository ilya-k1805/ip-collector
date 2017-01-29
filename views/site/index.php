<?php

/* @var $this yii\web\View */
use yii\helpers\Html;


$this->title = $content->title;
?>
<div class="site-index">
	<h1><?=  Html::encode($content->h1) ?></h1>
	<?= $content->text ?>
</div>
