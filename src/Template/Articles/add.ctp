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
<div class="users index large-9 medium-8 columns content">
    <?php
    echo $this->Form->create($article);
    ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>

        <?php

        echo $this->Form->control('title');
        echo $this->Form->control('body', ['rows' => '3']);
        ?>

    </fieldset>
    <?php
    echo $this->Form->button(__('Submit'), ['class' => 'right']);
    echo $this->Form->end();
    ?>
</div>
