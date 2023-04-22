<form action = "действие" method = "метод">
</form>

<input type = "text" name = "имя переменной" size = "число" maxlength = "число" value = "">
<input type = "тип кнопки" value = "текст на кнопке">
<textarea name="имя переменной" rows = "число" cols="число" value></textarea>

<form action="3.2.php" method="post">

    <input type="hidden" name="seeform" value="y">

    Ваше имя:<br>
    <input type="text" name="FIO" value="" size="30" maxlength="30"><br>
    Ваш e-mail:<br>
    <input type="text" name="email" value="" size="30" maxlength="30"><br>
    Предложение:>br>
    <input type="text" name="tema" value="" size="63" maxlength="63"><br>
    Описание:<br>
    <textarea cols="50" rows="10" name="zakaz"></textarea>
    <br><br>
    <input type="submit" value="Все верно!"> <input type="reset" value="Повторить">
    </form>>

<?php

    $work_file = file("data.txt");

    if ($work_file != ""):

    //вычисление количества строк
        $numbers = count($work_file);

        if ($numbers != "0"):

            // последовательно обрабатываем все строки и выводим их на экран
            for ($numbers; $numbers > 0 ;$numbers -= 1):

                $work_str = array_shift($work_file);

                $FIO = strtok ($work_str,"|");

                $email = strtok ("|");

                $tema = strtok ("|");

                $zakaz = strtok ("|");

                <h3><?php print $FIO;?></h3>

                <h3><a href="mailto:<?php print $email;?>"><?php print $email;?></a></h3>

                <p class="courier"><?php print $tema;?></p>

                <p><?php print $zakaz;?></p>

                <hr>

            endfor;

        endif;

    endif;

?>