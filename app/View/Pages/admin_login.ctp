<?php echo $this->Html->css('admin.css'); ?>
<div class="login">
    <div class="login-wrapper">
        <div class="login-image">
            <img src="../img/common/fadmes-logo.png" alt="">
            <span>F.A De Mesa Elementary School</span>
        </div>
        <div class="login-form">
            <form action="">
                <div class="login-form-item">
                    <label>Log in as:</label>
                    <select>
                        <option value="">Admin</option>
                        <option value="">Teacher</option>
                    </select>
                </div>
                <div class="login-form-item">
                    <label>User ID:</label>
                    <input type="text" class="login-input" autocomplete="off">
                </div>
                <div class="login-form-item">
                    <label>Password:</label>
                    <input type="password" class="login-input">
                </div>
                <div class="login-form-item login-form-item-button">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>
</div>