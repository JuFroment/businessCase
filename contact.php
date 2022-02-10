<?php
include 'global-stylesheets.php';
include 'global-scripts.php';
?>

<header>
    <?php include 'header.php'?>
</header>
<h2 class="text-center">Contact</h2>
<div class="container">
    <form>
        <div class="mb-3 offset-3 col-6">
            <label for="nom" class="form-label">Nom <sup>*</sup></label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Veuillez saisir votre nom">
        </div>
        <div class="mb-3 offset-3 col-6">
            <label for="email" class="form-label">Email <sup>*</sup></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Veuillez saisir votre email">
        </div>
        <div class="mb-3 offset-3 col-6">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Veuillez saisir votre numéro de téléphone">
        </div>
        <div class="mb-3 offset-3 col-6 d-flex flex-column">
            <label for="comment" class="mb-2">Comment pouvons-nous vous aider ? <sup>*</sup></label>
            <textarea id="comment" name="comment"
                      rows="5" cols="33" placeholder="Veuillez saisir votre commentaire">
</textarea>
        </div>
        <div class="text-center">
        <button type="submit" class="btn buttonStyle">Envoyer</button>
        </div>
    </form>
</div>
    <footer class="footer py-5 backgroundfooter">
<?php include 'footer.php'?>
    </footer>
