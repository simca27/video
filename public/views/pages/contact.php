<?php ob_start(); ?>
<h1>contact !</h1>


<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>