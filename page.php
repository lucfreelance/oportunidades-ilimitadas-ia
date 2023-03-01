<?php
  $title = "Título de la entrada";
  $date = "Fecha de publicación";
  $author = "Nombre del autor";
  $content = "Contenido de la entrada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas euismod, enim sed imperdiet fringilla, felis lectus interdum purus, in imperdiet purus lacus eget quam. Nam sollicitudin, dolor at posuere tincidunt, elit purus tempus lectus, nec tincidunt enim nulla et urna. In imperdiet interdum tellus, sed malesuada felis. Donec imperdiet cursus urna, at consectetur quam feugiat in. Curabitur vehicula orci sed semper euismod. Sed sollicitudin est quis sem varius vestibulum. Proin non ullamcorper mauris. Duis placerat, metus a aliquam laoreet, metus metus sodales nisi, id tincidunt ligula felis et lorem. Nunc in felis facilisis, tristique mi non, ultricies leo.";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header> <!-- header -->
      <ul>
        <?php
          $links = array("Aprendizaje", "Emprendimiento", "Información general", "Organizaciones", "Unlisted");
          for ($i = 0; $i < count($links); $i++) {
            echo "<li><a href='" . $links[$i] . ".html'>" . $links[$i] . "</a></li>";
          }
        ?>
      </ul>
    </header>
Copy code
<main>
  <article>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $date; ?></p>
    <p><?php echo $author; ?></p>
    <p><?php echo $content; ?></p>
  </article>
</main>

<footer>
  <p>Copyright 2022 Blog de Oportunidades Ilimitadas</p>
</footer>

<script src="scripts.js"></script>
  </body>
</html>














// Para completar el archivo page.php, primero debemos incluir el código PHP que genera el menú de navegación en la parte superior de la página. Puedes copiar y pegar el código que ya habíamos utilizado anteriormente:

// ---php

// <header> <!-- header -->
//   <ul>
//     <?php
//       $links = array("Aprendizaje", "Emprendimiento", "Información general", "Organizaciones", "Unlisted");
//       for ($i = 0; $i < count($links); $i++) {
//         echo "<li><a href='" . $links[$i] . ".html'>" . $links[$i] . "</a></li>";
//       }
//     ?>
//   </ul>
// </header>
// ---
// Luego, debemos incluir la información de la entrada en el cuerpo del documento. Podemos utilizar las variables que definimos al principio del archivo para mostrar el título, la fecha de publicación y el autor de la entrada, así como el contenido de la entrada en sí:

// ---php

// <main>
//   <article>
//     <h1><?php echo $title; ?></h1>
//     <p class="date"><?php echo $date; ?></p>
//     <p class="author"><?php echo $author; ?></p>
//     <div class="content">
//       <?php echo $content; ?>
//     </div>
//   </article>
// </main>
// ---
// Finalmente, debemos incluir el pie de página en la parte inferior del documento:

// ---php
// <