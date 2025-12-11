<a href="?action=addUser">Ajouter</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>AGE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $line): ?>
            <tr>
                <td><?= $line['id'] ?></td>
                <td><?= $line['nom'] ?></td>
                <td><?= $line['prenom'] ?></td>
                <td><?= $line['age'] ?></td>
                <td>
                    <a href="?action=deleteUser&id=<?= $line['id'] ?>">Supprimer</a>
                    <a href="?action=editUser&id=<?= $line['id'] ?>">Modifier</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>