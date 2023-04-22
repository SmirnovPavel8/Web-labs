<?php

    if ($FIO == ""):
        print "<h3> Поле "Ваше имя" не заполнено </h3>";
    else:
    if ($tema == ""):
        print "<h3> Поле "Тема" не заполнено </h3>";
    else:
    // Проверка на наличие символа "@" в e-mail
    $eml=stristr($email,"@");
    if ($eml == false):
        	print "<h3>Введен некорректный e-mail адрес</h3>";
    else:
		$fd = fopen("data.txt","a");

    // Проверка не ввел ли пользователь запрещенные символы "|","<",">","%" и "\n" внутри 
    //сообщения и их удаление.
    		$FIO = str_replace("|","", $FIO);
    		$FIO = str_replace("<","", $FIO);
    		$FIO = str_replace(">","", $FIO);
    		$FIO = str_replace("%","", $FIO);
    		$email = str_replace("|","", $email);
    		$email = str_replace("<","", $email);
    		$email = str_replace(">","", $email);
    		$email = str_replace("%","", $email);
    		$tema = str_replace("|","", $tema);
    		$tema = str_replace("<","", $tema);
    		$tema = str_replace(">","", $tema);
    		$tema = str_replace("%","", $tema);
    		$zakaz = str_replace("|","", $zakaz);
    		$zakaz = str_replace("<","", $zakaz);
    		$zakaz = str_replace(">","", $zakaz);
    		$zakaz = str_replace("%","", $zakaz);
    		$zakaz = str_replace("\n"," ", $zakaz);

    // формирование строки для записи в файл
    $user_row = $FIO. "|".$email."|".$tema."|".$zakaz."\n";

    fwrite($fd, $user_row);

    fclose($fd);

//отображение правильно введенных данных
       <h3><?php print $FIO;?></h3>

        <h3><a href="mailto:<?php print $email;?>"><?php print $email;?></a></h3>

        <p class="courier"><?php print $tema;?></p>

        <p><?php print $zakaz;?></p>

        <h3 align="center"><a href="<?php print 3.1.php; ?>">Закрыть</a></h3>

        end_input1($write_file1);

    endif;
    endif;
    endif;

?>