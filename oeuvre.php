<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

    <?php include('header.php'); ?>
    <?php include('oeuvres.php'); ?>
    
<main>



    <?php foreach ($oeuvres as $oeuvre){ // Boucle foreach pour afficher les articles
        //Si notre parametre GET_ID est égal à l'ID de l'oeuvre alors on affiche notre article
        if($oeuvre['id'] == $_GET['id']){ 
        ?>
    <article id="detail-oeuvre"> 
        <div id="img-oeuvre">
            <img src="img/<?php echo $oeuvre['img']; ?>" alt="<?php echo $oeuvre['titre']; ?>"> 
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['titre']; ?></h1>
            <p class="description"><?php echo $oeuvre['auteur']; ?></p>
            <p class="description-complete"><?php echo $oeuvre['description']; ?></p>
            </p>
        </div>
    </article>
    <?php }} ?>
</main>

    <?php include('footer.php'); ?>

</body>
</html>