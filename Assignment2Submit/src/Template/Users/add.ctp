<!-- src/Template/Users/add.ctp -->

<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
        <?= $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author']
        ]) ?>
		 <?= $this->Form->input('FirstName') ?>
		 <?= $this->Form->input('LastName') ?>
		 <?= $this->Form->input('Street') ?>
		 <?= $this->Form->input('province',  array('options' => array('ON', 'QC', 'MB', 'SK'), 'empty' => '(choose one)')); ?>
		 <?= $this->Form->input('postalCode') ?>
		 <?= $this->Form->input('telephone') ?>
		 <?= $this->Form->input('email') ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>