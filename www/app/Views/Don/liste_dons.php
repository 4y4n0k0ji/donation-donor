<?php
include __DIR__.'/../common/header.php';
$dons = $_GET['dons'];

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
                        <h3>Chercher les dons</h3>
                        <p>Saisir  un Donneur !</p>
                    </div>
                </div>
                <form method="post" action="/index.php/list_dons.php">
                    <div>
                        <input name="donneurSearch" type="text" placeholder="Chercher par donneur">
                    </div>
                    <button type="submit">Chercher</button>
                </form>
            </div>
        </div>

      <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
            ?>
        <div class="container">
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
            <tr>
                <td>ID</td>
                <td>Nom Don</td>
                <td>Type</td>
            </tr>
            </thead>
            <?php
            /** @var \App\Models\Don $don */
            foreach ($dons as $don) { ?>
                <tr>
                    <td><?php echo $don['id']; ?></td>
                    <td><?php echo $don['nom_don']; ?></td>
                    <td><?php echo $don['type']; ?></td>
                </tr>
            <?php }
            }else{?>
            <p class="text-center" style="color: red;"> Saisir un donneur pour afficher un tableau des dons !!</p>
             <?php }?>
        </table>
        </div>
    </div>