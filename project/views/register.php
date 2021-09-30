<?
require_once 'templates/header.php';
?>
<div class="register">
<div class="comment--respond">
<form action="http://frame/register/" data-form="validate" method="POST">

    <div class="form-group">
        <input type="text" name="name" placeholder="Имя" class="form-control" required>
    </div>

    <div class="form-group">
        <input type="text" name="surname" placeholder="Фамилия" class="form-control" required>
    </div>

    <div class="form-group">
        <input type="email" name="email" placeholder="Email" class="form-control" required>
    </div>

    <div class="form-group">
        <input type="password" name="password" placeholder="Пароль" class="form-control" required maxlength="255">
    </div>

    <button type="submit" name="submit" class="btn btn-default register">Регистрация</button>
</form>
</div>
</div>
<? if (isset($text)){
    echo $text;
} ?>
<?
    require 'templates/footer.php';
?>