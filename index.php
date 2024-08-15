<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cultivar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Rubik+Mono+One&display=swap" rel="stylesheet">
</head>
<body>
    <!--<a href="" style="font-size:1.5rem;">agregar cierre de inscripcion,
    tiempo de duracion del curso y modalidad en ambos proyectos</a>-->
    <header>
        <b>cultiv&</b>
    </header>
    <main>
        <img src="img/hojas-cayendo.png"  title="imagen hoja de plantas cayendo" class="icono">
        <section class="contenedor1">
            <h1 tabindex="1">aprende a <span>cultivar</span></h1>
            <p tabindex="2">en nuestro seminarios aprenderas a <strong>cultivar</strong>
              de manera sana para el suelo y ver los
              mejores resultados</p>
            <img src="img/imgAgricultura1.jpg" tabindex="3" alt="imagen de persona cultivando" class="fotos">
        </section>

        <section class="contenedor2">
            <img src="img/imgAgricultura3.jpg" tabindex="4" alt="imagen numero 2 de persona cultivando" class="fotos">
            <p class="texto" tabindex="5">somos una empresa dedicada a enseñar ubicada en buenos aires, argentina
            con nuestro seminario vas aprender a tener tus propios <strong>cultivos</strong> de todo tipo
            de frutas y verduras para autoabastecerte a ti y a tu familia</p>
            <article class="caja1" tabindex="6" aria-label="especificacion del curso"><b tabindex="7">duracion</b><p tabindex="8">2 semanas</p></article>
            <article class="caja2" tabindex="9" aria-label="especificacion del curso"><b tabindex="10">cierre de <br> inscripcion</b><p tabindex="11">3 semanas</p></article>
            <article class="caja3" tabindex="12" aria-label="especificacion del curso"><b tabindex="13">modalidad</b><p tabindex="14">solo <br> presencial</p></article>
        </section>

        <section class="contenedor3">
            <form method="post" tabindex="15" aria-label="formulario para registrarse">
                <b>guarda tu lugar registrandote aqui</b>
                <input type="text" placeholder="escribe tu nombre" name="nombre" tabindex="16">
                <input type="email" placeholder="escribe tu mail" name="nombreMail" tabindex="17">
                <textarea placeholder="tu mensaje" name="mensaje" tabindex="19" aria-label="escribe tu mensaje"></textarea>
                <input type="submit" value="enviar" name="boton" tabindex="20" aria-label="boton de enviar">
              </form>
        </section>
    </main>
    <footer>
        <img src="img/instagram_1384015.png" alt="icono de instagram" title="icono de instagram"><a href="" tabindex="21" aria-label="link de acceso a la pagina de instagram">instagram</a>
        <img src="img/facebook_1051309.png" alt="icono de facebook" title="icono de facebook"><a href="" tabindex="22" aria-label="link de acceso a la pagina de facebook">facebook</a>
        <img src="img/twitter_2931618.png" alt="icono de twiter" title="icono de twiter"><a href="" tabindex="23" aria-label="link de acceso a la pagina de twitter">twitter</a>
        <img src="img/whatsapp.png" alt="icono de whatsapp" title="icono de whatsapp"><a href="" tabindex="24" aria-label="link de acceso a whatsapp">whatsapp</a>
    </footer>
    <script src="script.js"></script>
    <?php include("backend.php") ?>
</body>
</html>