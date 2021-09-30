<?
require_once 'templates/header.php';
?>
<div class="register">
<div class="comment--respond">
<form action="http://frame/login/" data-form="validate" method="POST">

    <div class="form-group">
        <input type="email" name="email" placeholder="Email" class="form-control" required>
    </div>

    <div class="form-group">
        <input type="password" name="password" placeholder="Пароль" class="form-control" required maxlength="255">
    </div>

    <button type="submit" name="submit" class="btn btn-default register">Войти</button>
</form>
<a href="/register/">Регистрация</a>
</div>
</div>
<?
    require 'templates/footer.php';
?>