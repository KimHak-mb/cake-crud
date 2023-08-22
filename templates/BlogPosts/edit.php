<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $blogPost->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Blog Posts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blogPosts form content">
            <?= $this->Form->create($blogPost) ?>
            <fieldset>
                <legend><?= __('Edit Blog Post') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('categories._ids', ['options' => $categories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
