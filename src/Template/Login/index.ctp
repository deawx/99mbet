<div class="text-center m-b-md">
    <h3 class="g-color-white">PLEASE LOGIN TO APP</h3>
    <?= $this->Flash->render() ?>
</div>
<div class="row justify-content-center">
    <div class="col-sm-8 col-lg-5">
        <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
            <?= $this->Form->create('Users', ['novalidate' => true, 'class' => '', 'id' => 'login']) ?>
            <div class="form-group">
                <label class="control-label g-color-white" for="username">Username</label>
                <?= $this->Form->control('username', ['class' => 'form-control', 'label' => false, 'placeholder' => '']); ?>
            </div>
            <div class="form-group">
                <label class="control-label g-color-white" for="password">Password</label>
                <?= $this->Form->control('password', ['class' => 'form-control', 'label' => false, 'required' => 'required', 'aria-required' => 'true', 'aria-invalid' => 'true']); ?>
            </div>

            <button class="btn btn-primary btn-block">Login</button>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>