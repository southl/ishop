<?php defined('ISHOP') or die('Access denied'); ?>
<div class="content-txt">	
    <h2>Реєстрація</h2>

    <form method="post" action="#">
        <table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="zakaz-txt">*Логін</td>
                <td class="zakaz-inpt"><input type="text" name="login" value="<?=htmlspecialchars($_SESSION['reg']['login'])?>" /></td>
                <td class="zakaz-prim"></td>
            </tr>
            <tr>
                <td class="zakaz-txt">*Пароль</td>
                <td class="zakaz-inpt"><input type="password" name="pass" /></td>
                <td class="zakaz-prim"></td>
            </tr>
            <tr>
                <td class="zakaz-txt">*ПІБ</td>
                <td class="zakaz-inpt"><input type="text" name="name" value="<?=htmlspecialchars($_SESSION['reg']['name'])?>" /></td>
                <td class="zakaz-prim">Наприклад: Іванов Сергій Олександрович</td>
            </tr>
            <tr>
                <td class="zakaz-txt">*Е-mail</td>
                <td class="zakaz-inpt"><input type="text" name="email" value="<?=htmlspecialchars($_SESSION['reg']['email'])?>" /></td>
                <td class="zakaz-prim">Наприклад: test@gmail.com</td>
            </tr>
            <tr>
                <td class="zakaz-txt">*Телефон</td>
                <td class="zakaz-inpt"><input type="text" name="phone" value="<?=htmlspecialchars($_SESSION['reg']['phone'])?>" /></td>
                <td class="zakaz-prim">Наприклад: 111 111 111</td>
            </tr>
            <tr>
                <td class="zakaz-txt">*Адреса доставки</td>
                <td class="zakaz-inpt"><input type="text" name="address" value="<?=htmlspecialchars($_SESSION['reg']['addres'])?>" /></td>
                <td class="zakaz-prim"></td>
            </tr>                
		</table>
        <input type="submit" name="reg" value="Зареєструватися" />
    </form>	
    
    <?php
    
    if(isset($_SESSION['reg']['res'])){
        echo $_SESSION['reg']['res'];
        unset($_SESSION['reg']);
    }
    
    ?>
    	
</div> <!-- .content-txt -->