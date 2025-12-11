<form action="?action=updateUser" method="POST">
    <input type="text" name="id" value="<?= $result->id ?>" hidden>
    <label for="">Nom</label>
    <input type="text" name="nom" value="<?= $result->nom ?>">
    <label for="">Prenom</label>
    <input type="text" name="prenom" value="<?= $result->prenom ?>">
    <label for="">Age</label>
    <input type="number" name="age" value="<?= $result->age ?>">
    <button type="submit">Send</button>
</form>