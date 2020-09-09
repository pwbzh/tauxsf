<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Calcul du taux d'encadrement nécessaire pour un camp du Scoutisme Français">
    <meta name="keywords" content="scouts,guides,sgdf,fédération,scoutisme,français,guide,réglementaire,taux,encadrement,omms,amge,camp">
    <meta name="author" content="Pierre Weyl">

    <title>TauxSF</title>

    <link rel="stylesheet" href="css/style.min.css?v=20200909">
    <meta name="theme-color" content="#01579b">
    <link rel="icon" type="image/png" href="tauxsf.png">
</head>

<body>
    <div id="top" class="shadow-sm">
        <div class="container" id="content">
            <h1>TauxSF <small class="text-muted">Taux d'encadrement du Scoutisme Français</small></h1>
        </div>
    </div>

    <div class="container" id="content">
        <?php
        if ($_SERVER['SERVER_NAME'] == 'tauxsf.pweyl.com') {
        ?>
        <div class="alert alert-warning" role="alert">Vous utilisez l'ancienne URL ! Je vous invite à dorénavant utiliser la nouvelle : <a href="https://tauxsf.pwbzh.fr">tauxsf.pwbzh.fr</a></div>
        <?php
        }
        ?>

        <?php include_once __DIR__.'/'.$template; ?>

        <footer>
            <p class="text-muted text-center mb-0">Ce site web n'est pas officiel. Il n'est pas édité par le Scoutisme Français.</p>
            <p class="text-muted text-center mb-2">Développé avec &hearts; par <a href="http://pwbzh.fr">Pierre Weyl</a>, bénévole chez les <a href="https://www.sgdf.fr/">Scouts et Guides de France</a>.</p>
            <p class="text-muted text-center mb-0">Tu souhaites contribuer ? Retrouvons-nous sur <a href="https://github.com/pwbzh/tauxsf">GitHub</a> :-)</p>
            <p class="text-muted text-center">Tu aimes ce site ? Tu aimeras sûrement <a href="https://guidesf.pwbzh.fr">GuideSF</a> !</p>
        </footer>
    </div>
</body>

</html>
