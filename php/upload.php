<?php
  require_once 'db.php';

  $date = date("d/m/Y");
  //Получаем имя файла без разрешщения
  $fileName = $_FILES["image"]["name"];
  $fileName = explode('.', $fileName);
  $fileName = $fileName[0]; 
  //Генерируем новое имя файла
  $extension = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
  $newFileName = uniqid() . '.' . $extension;
  //Указываем пути к фулл и превью картинки с новым именем
  $full = "../img/full/".$newFileName;
  $thumbnail = "../img/thumbnails/".$newFileName;
  //Массив с допустимыми типами файлов
  $types = array('image/gif', 'image/png', 'image/jpeg');
  //Проверка размера фала
  if($_FILES["image"]["size"] > 1024*5*1024)
   {
     exit("Размер файла превышает пять мегабайтов");
   } 
   elseif (!in_array($_FILES['image']['type'], $types)) {
     exit('Запрещённый тип файла. <a href="/">Попробовать другой файл?</a>');
   }
   if(is_uploaded_file($_FILES["image"]["tmp_name"]))
   {  

      //Создаем новое изображение исходя из начально типа      
      if ($_FILES["image"]["type"] == 'image/jpeg')
        $source = imagecreatefromjpeg($_FILES["image"]["tmp_name"]);
      elseif ($_FILES["image"]["type"] == 'image/png')
        $source = imagecreatefrompng($_FILES["image"]["tmp_name"]);
      elseif ($_FILES["image"]["type"] == 'image/gif')
        $source = imagecreatefromgif($_FILES["image"]["tmp_name"]);
      else
        return false;
      
      //Изменяем разрешение изображения

      //Задаём максимальная размер
      $max_widht = 200;
      //Определения размеров исходного изображения
      $w_src = imagesx($source); 
      $h_src = imagesy($source);
      

      //Вывод ошибки при низком разрешении картинки
      if ($w_src < 201) {
        exit('Файл слишком маленький. <a href="/">Попробовать другой файл?</a>');
      }
      elseif ($w_src > $max_widht)
       { // Если ширина больше заданной
         // Вычисление пропорций
         $ratio = $w_src/$max_widht;
         $w_dest = round($w_src/$ratio);
         $h_dest = round($h_src/$ratio);
      }
      // Создаём пустую картинку
      $dest = imagecreatetruecolor($w_dest, $h_dest);
      
      // Копируем старое изображение в новое с изменением параметров
      imagecopyresampled($dest, $source, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src);
      imagejpeg($dest, $thumbnail, 100);

     // Если файл загружен успешно, перемещаем его оригинал
     // Из временной директории в конечную
      move_uploaded_file($_FILES["image"]["tmp_name"], $full);
      
      // Записуем данные в базу данных
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $statement = $db->prepare("INSERT INTO `posts` (`title`, `date`, `image`, `moderated`) VALUES (?,?,?,?)");
      $statement->execute(array($fileName, $date, $newFileName, 0));
      //Перенаправление на главную
      header('Location: /?page=1');
   } else {
      echo("Ошибка загрузки файла");
   }
;