<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->disableAutoLayout();
?>

<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'bootstrap-4', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>


    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Register') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Html->link("Login", ['action' => 'login']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>

