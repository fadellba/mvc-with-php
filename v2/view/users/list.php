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
        <?php while($obj = $result->fetch(PDO::FETCH_OBJ)): ?>
            <tr>
                <td><?= $obj->id ?></td>
                <td><?= $obj->nom ?></td>
                <td><?= $obj->prenom ?></td>
                <td><?= $obj->age ?></td>
                <td>
                    <a href="?action=deleteUser&id=<?= $obj->id ?>">Supprimer</a>
                    <a href="?action=editUser&id=<?= $obj->id ?>">Modifier</a>
                </td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>