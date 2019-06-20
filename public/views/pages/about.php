<?php ob_start(); ?>
<h1> trying about </h1>

<?php $content = ob_start() ?>

<?php view('template', compact('content')); ?>