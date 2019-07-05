<?= $this->Form->create('Post', array('action' => 'login','id' => 'login')) ?>
<fieldset>
    <legend><?= __('Please enter your username and password') ?></legend>
    <?= $this->Form->control('username',['label' => false]) ?>
    <?= $this->Form->control('password',['label' => false]) ?>
</fieldset>
<div class="text-center">
<?= $this->Form->button(__('Login')); ?>
<p class="text">
    <?= $this->Html->link(__('Bạn chưa đăng ký tài khoản ?'), ['controller' => 'Users', 'action' => 'add']) ?>
</p>
</div>
<?= $this->Form->end() ?>