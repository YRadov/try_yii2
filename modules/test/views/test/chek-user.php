<?php
use yii\helpers\Html;
?>
<h1>test/chek-user</h1>
<h3><?= $message; ?></h3>
<pre>
<?php print_r(\Yii::$app->user->identity);?>
</pre>
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
