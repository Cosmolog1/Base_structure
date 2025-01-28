<?php
include_once ("header.php");
include_once ("./asset/image/data.php")
?>

<form method = "post" action= "">
    <label for = "prenom">Prenom</label>
    <input id = "prenom" type = "text" name = "prenom" required>

    <br><br><label for = "age">Age</label>
    <input type = "number" name = "age" required>

    <br><br><label for = "email">Email</label>
    <input type = "email" name = "email" required>

    <br><br><label for = "sujet">Sujet :</label>
    <select name = "sujet" id = "sujet" required>
        <option value = "" disabled selected hidden></option>
        <option value = "question-produit"> Question</option>
        <option value = "autre"> Autre...</option>
    </select><br><br>

    <label for = "message">Message</label>
    <textarea id = "message" name = "message"></textarea><br><br>

    <br><br><button type = "submit">Soumettre</button>
    
</form>





<?php
var_dump($_POST);


if (isset($_POST["prenom"])  && isset($_POST['age']) && isset($_POST['email']) 
    && isset($_POST['sujet'])  && isset($_POST['message'])){
 
    $prenom = $_POST ['prenom'];
    echo "<p>" . $prenom . "</p>";

    $age = $_POST ['age'];
    echo "<p>" . $age . "</p>";

    $email = $_POST ['email'];
    echo "<p>" . $email . "</p>";

    $sujet = $_POST ['sujet'];
    echo "<p>" . $sujet . "</p>";

    $message = $_POST ['message'];
    echo "<p>" . $message . "</p>";

}

?>


















<?php
include_once ("footer.php");
?>