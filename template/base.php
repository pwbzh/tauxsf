<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Calcul du taux d'encadrement nécessaire pour un camp du Scoutisme Français">
    <meta name="keywords" content="scouts,guides,sgdf,fédération,scoutisme,français,guide,réglementaire,taux,encadrement,omms,amge,camp">
    <meta name="author" content="Pierre Weyl">

    <title>TauxSF</title>

    <link rel="stylesheet" href="css/style.min.css?v=39b8cdd9-2fc6-4197-885b-0748c3653294">
    <meta name="theme-color" content="#01579b">
    <link rel="icon" type="image/png" href="tauxsf.png">
</head>

<body>
    <div class="container mt-3" id="content">
        <h1>TauxSF <small class="text-muted">Taux d'encadrement du Scoutisme Français</small></h1>

        <?php
        if ($_SERVER['SERVER_NAME'] == 'tauxsf.pweyl.com') {
        ?>
        <div class="alert alert-warning" role="alert">Vous utilisez l'ancienne URL ! Je vous invite à dorénavant utiliser la nouvelle : <a href="https://tauxsf.pwbzh.fr">tauxsf.pwbzh.fr</a></div>
        <?php
        }
        ?>

        <div class="alert alert-warning">
        <span class="lead">La calculatrice est dorénavant intégrée au site du guide réglementaire en ligne <a href="https://guidesf.pwbzh.fr">GuideSF</a> :-)</span><br>
        Ce site, TauxSF, cessera d'exister le 1er septembre 2021.<br>
        Un seul site, une seule adresse : <a href="https://guidesf.pwbzh.fr">https://guidesf.pwbzh.fr</a> !
        </div>

        <?php include_once __DIR__.'/'.$template; ?>

        <footer>
        <hr>
            <div class="row">
                <div class="col-md-7">
                    <p class="text-muted mb-0">Ce site web n'est pas officiel. Il n'est pas édité par le Scoutisme Français.</p>
                    <p class="text-muted mb-0">Développé avec &hearts; par <a href="http://pwbzh.fr" target="_blank">Pierre Weyl</a>, bénévole chez les <a href="https://www.sgdf.fr/" target="_blank">Scouts et Guides de France</a>.</p>
                </div>

                <div class="col-md-5">
                    <p class="text-muted mb-0">Tu souhaites contribuer ? Retrouvons-nous sur <a href="https://github.com/pwbzh/tauxsf" target="_blank">GitHub</a> :-)</p>
                    <p class="text-muted mb-0">Tu aimes ce site ? Tu aimeras sûrement <a href="https://guidesf.pwbzh.fr" target="_blank">GuideSF</a> !</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
