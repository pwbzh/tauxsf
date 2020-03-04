<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Calcul du taux d'encadrement nécessaire pour un camp du Scoutisme Français">
    <meta name="keywords" content="scouts,guides,sgdf,fédération,scoutisme,français,guide,réglementaire,taux,encadrement,omms,amge,camp">
    <meta name="author" content="Pierre Weyl">

    <title>TauxSF</title>

    <link rel="stylesheet" href="css/style.min.css">
    <meta name="theme-color" content="#0d47a1">
    <link rel="icon" type="image/png" href="tauxsf.png">
</head>

<body>
    <div class="container" id="content">
        <h1>TauxSF <small class="text-muted">Taux d'encadrement du Scoutisme Français</small></h1>

        <?php
        if ($_SERVER['SERVER_NAME'] == 'tauxsf.pweyl.com') {
        ?>
        <div class="alert alert-warning" role="alert">Vous utilisez l'ancienne URL ! Je vous invite à dorénavant utiliser la nouvelle : <a class="text-white" href="https://tauxsf.pwbzh.fr">tauxsf.pwbzh.fr</a></div>
        <?php
        }
        ?>

        <?php include_once __DIR__.'/'.$template; ?>

        <p class="text-muted text-center mt-4 mb-0">Développé avec &hearts; par <a href="http://pwbzh.fr">Pierre Weyl</a>, bénévole chez les <a href="https://www.sgdf.fr/">Scouts et Guides de France</a>.</p>
        <p class="text-muted text-center mb-2">Ce site web n'est pas officiel. Il n'est pas édité par le Scoutisme Français.</p>
        <p class="text-muted text-center">Connaissez-vous le site web <a href="https://guidesf.pwbzh.fr">GuideSF</a> ?</p>
    </div>
</body>

</html>
