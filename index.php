<?php
require_once 'GestionContacts.php';
$gestion = new GestionContacts();
if (isset($_POST['prenom'])&& isset($_POST['nom'])){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'head.include.html'; ?>

<body>

<header>
</header>

<div class="row">
    <div class="col m4 offset-m4">
        <div class="card teal z-depth-5">
            <div class="card-image" style="width:fit-content">
                <img width="auto" src="images/liste_contacts.jpg">
                <span class="card-title black-text">Liste de contacts</span>
            </div>
            <div class="card-content white-text">
                <div class="card-content">
                    <?php
                    if (isset($_POST['buttonNom'])) {
                        $gestion->triNomAsc();
                        $gestion->afficheContacts();
                    }
                    if (isset($_POST['buttonPrenom'])) {
                        $gestion->triPrenomAsc();
                        $gestion->afficheContacts();
                    }
                    ?>
                </div>
            </div>
            <div class="card-action">
                <form action="index.php" method="post">
                    <!-- Bouton pour trier par nom -->
                    <button class="btn waves-effect waves-light " type="submit" name="buttonNom">
                        <b>nom</b>
                    </button>
                    <!-- Bouton pour trier par prénom -->
                    <button class="btn waves-effect waves-light" type="submit" name="buttonPrenom">
                        <b>prénom</b>
                </form>

            </div>
            <div class="card-action">
                <?php include 'ajouter.include.html'; ?>
            </div>
        </div>
    </div>
</div>
<footer>
</footer>

</body>
</html>