<?php echo $this->Html->css('admin.css'); ?>
<?php echo $this->Flash->render(); ?>
<div class="login">
    <div class="login-wrapper">
        <div class="login-image">
            <img src="../img/common/fadmes-logo.png" alt="">
            <span>F.A De Mesa Elementary School</span>
        </div>
        <div class="login-form">
            <form method = "post">
                <div class="login-form-item">
                    <label>Log in as:</label>
                    <select name="role">
                        <option value="1">Admin</option>
                        <option value="2">Teacher</option>
                    </select>
                </div>
                <div class="login-form-item">
                    <label>Username:</label>
                    <input type="text" class="login-input" autocomplete="off" name="username">
                </div>
                <div class="login-form-item">
                    <label>Password:</label>
                    <input type="password" class="login-input" name="password">
                </div>
                <div class="login-form-item login-form-item-button">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>
</div>