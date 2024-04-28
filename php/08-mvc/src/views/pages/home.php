<?php $render('header'); ?>

Opa, <?= $nome; ?>, eu tenho <?= $idade; ?> anos

<hr>

<?php foreach ($posts as $post) : ?>
  <h3><?= $post['titulo']; ?></h3>
  <p>
    <?= $post['corpo']; ?>
  </p>

<?php endforeach; ?>