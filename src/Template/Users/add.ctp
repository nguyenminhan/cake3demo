<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-12 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('group_id', ['options' => $groups]);
            echo $this->Form->control('email');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),array('id' => 'reg')) ?>
    <p class="text">
        <?= $this->Html->link(__('Quay lại đăng nhập ?'), ['controller' => 'Users', 'action' => 'login']) ?>
    </p>
    <?= $this->Form->end() ?>
</div>
