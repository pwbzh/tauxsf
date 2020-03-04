<div class="card">
    <div class="card-body">
        <form>
            <label for="search">Nombre de jeunes</label>

            <div class="input-group">
                <input type="number" class="form-control mb-1" name="search" id="search" min="7" value="<?php echo $this->children; ?>">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary mb-1 mr-sm-2">Calculer</button>
                </div>
            </div>

            <small class="form-text text-muted mb-3">Un accueil de scoutisme regroupe au moins 7 mineurs.</small>

            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="more-14" name="more-14" <?php if ($this->more14) { echo 'checked'; }; ?>>
                <label class="custom-control-label" for="more-14">Les jeunes ont tous plus de 14 ans</label>
            </div>
        </form>
    </div>
</div>

<p class="lead">
    <?php
    // Plural or singular?
    echo count($this->supervision_rate);

    if (count($this->supervision_rate) > 1) {
        echo ' combinaisons possibles';
    } else {
        echo ' combinaison possible';
    }
    ?>
    pour <?php echo $this->children; ?> jeunes
</p>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Jeunes</th>
                <th>Directeur</th>
                <th>Nombre d'encadrants minimum</th>
                <th>Qualifié</th>
                <th>Stagiaire</th>
                <th>Non qualifié</th>
                <th>Total avec le directeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->supervision_rate as $key => $value): ?>
                <tr>
                    <td><?php echo $value['children']; ?></td>
                    <td><?php echo $value['director']; ?></td>
                    <td><?php echo $value['leader']; ?></td>
                    <td><?php echo $value['qualified']; ?></td>
                    <td><?php echo $value['trainee']; ?></td>
                    <td><?php echo $value['unqualified']; ?></td>
                    <td><?php echo $value['total'] ; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<p><strong>Ceci est un tableau indicatif, il ne faut pas oublier certaines spécificités :</strong></p>

<ul>
    <li>
        Pour les unités où les jeunes ont tous plus de 14 ans,
        le directeur compte dans les effectifs d'encadrement.
    </li>
    <li>
        L'animateur en stage pratique BAFA doit être déclaré comme
        stagiaire BAFA. Il est aussi possible de le déclarer en plus
        comme animateur titulaire SF, dans ce cas il compte
        dans les 50% de qualifiés.
    </li>
    <li>
        En cas de grands groupes (nombre laissé à l'appréciation
        de l'organisateur), il est fortement recommandé que
        le directeur soit assisté d'un ou plusieurs adjoints.
        Ces adjoints doivent satisfaire aux conditions de qualification
        de direction, les directeurs adjoint comptent
        dans les quotas de "50% de qualifiés".
    </li>
</ul>

<p class="card-text">
    Source :
    <a title="http://www.scoutisme-francais.fr/formation"
    href="http://www.scoutisme-francais.fr/formation">
    Guide Réglementaire du Scoutisme Français - Édition du 3 avril 2018
    </a>
</p>
