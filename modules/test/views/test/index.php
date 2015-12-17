<?php
use yii\helpers\Html;
?>
<h1>test/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>

<?= Html::a('Проверить авторизацию пользователя', ['test/chek-user', 'id' => $id], ['class' => 'profile-link']) ?>
