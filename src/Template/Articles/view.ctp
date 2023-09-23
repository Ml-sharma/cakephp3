<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles index large-9 medium-8 columns content">
    <h2><?= h($article->title) ?></h2>
    <hr>
    <p class="checks"><?= h($article->body) ?></p>
    <p class="right"><span>Created:</span> <?= $article->created ?></p>
    <button style="background: white;
  border: 1px solid green;
  border-radius: 5px;
"><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></button>
</div>
