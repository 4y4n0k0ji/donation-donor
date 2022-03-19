<?php
include __DIR__.'/../common/header.php';

$donneurs = $_GET['donneurs'];

?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }
    .login-page .form .login{
        margin-top: -31px;
        margin-bottom: 26px;
    }
    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form select {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background-color: #328f8a;
        background-image: linear-gradient(45deg,#328f8a,#08ac4b);
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }
    body {
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
</style>

<div class="login-page">
    <div class="form">
        <div class="login">
            <div class="login-header">
                <h3>Formulaire</h3>
                <p>Ajouter un Don!</p>
            </div>
        </div>
        <form method="post" action="/index.php/ajouter_don.php">
            <input type="text" name="nom" placeholder="saisir le don" required>
            <select name="type" id="type">
                <option selected disabled>--- choisir un type ---</option>
                <option value="Somme d'argent">Somme d'argent</option>
                <option value="vetements alimentaires">vetements alimentaires</option>
                <option value="produits alimentaires">produits alimentaires</option>
            </select>
            <label for="donneur">Donneur:</label>
            <select name="donneur" id="donneur_id">
                <option selected disabled>--- choisir un donneur ---</option>
                 <?php foreach($donneurs  as $value){ ?>
                <option value="<?php echo $value['id']; ?>"><?php echo $value['nom_donneur']; ?></option>
                <?php } ?>
            </select>
            <button type="submit">Ajouter un Don</button>
        </form>
    </div>
</div>

