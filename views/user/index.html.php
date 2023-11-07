<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Niveau</th>
        <th>Identité</th>
        <th>Mail</th>
        <th>Adresse</th>
        <th>Tel</th>
        <th>Mot de passe</th>
        <th>Anniversaire</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td>
                    <?= $user->getId() ?>
                </td>
                <td>
                    <?php
                    switch ($user->getNiveau()):
                        case ROLE_ADMIN:
                            echo "Administrateur";
                            break;
                        case ROLE_USER:
                            echo "user";
                            break;
                    endswitch;
                    ?>
                </td>
                <td>
                    <?= $user->getPrenom() . " " . $user->getNom() ?>
                </td>
                <td>
                    <?= $user->getMail() ?>
                </td>
                <td>
                    <?= $user->getAdresse() ?>
                </td>
                <td>
                    <?= $user->getTel() ?>
                </td>
                <td>
                    <?= $user->getMdp() ? "****" : "" ?>
                </td>
                <td>
                    <?= $user->getAnniversaire() ?>
                </td>

                <td>
                    <a href="<?= addLink("user", "update", $user->getId()) ?>" class="btn btn-secondary">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= addLink("user", "supprimer", $user->getId()) ?>" class="btn btn-secondary">
                        <i class="fa fa-trash"></i>
                    </a>
                    <a href="<?= addLink("user", "fiche", $user->getId()) ?>" class="btn btn-secondary">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>