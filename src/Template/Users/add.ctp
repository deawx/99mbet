<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('usercode');
            echo $this->Form->control('title');
            echo $this->Form->control('firstname');
            echo $this->Form->control('lastname');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('lineid');
            echo $this->Form->control('fax');
            echo $this->Form->control('isactive');
            echo $this->Form->control('isverify');
            echo $this->Form->control('islocked');
            echo $this->Form->control('iscustomer');
            echo $this->Form->control('isseller');
            echo $this->Form->control('gender');
            echo $this->Form->control('verifycode');
            echo $this->Form->control('position');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
