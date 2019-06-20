<?php ob_start(); ?>
<h1>Ajoutez un article :</h1>

<form method="post" action="<?= url('ajout-article') ?>">

    <input type="text" name="content" placeholder="Contenu de l'article">

    <input type="submit" value="Envoyer l'article">
</form>


<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>