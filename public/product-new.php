<?php 
    require ("/inc/header.php");
    var_dump($_GET);
    var_dump($_POST);
?>

<main class "container">

    <form class="container">

    <h1>Ajout d'un produit</h1>

        <div class="form-group">
            <label for="exampleFormControlInput1">Nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Prix</label>
            <input type="number" step="0.01" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">Le produit doit-il être publié</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Date de création</label>
            <input type="date" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre de vues</label>
            <input type="number" min="0" class="form-control" id="exampleFormControlInput1">
        </div>

        <input type="submit" value="Créer le produit" class="btn btn-outline-success">
    </form>



</main>

<?php 
    require ("/inc/footer.php");
   
?>