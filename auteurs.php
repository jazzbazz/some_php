<?php
//enkel indien er werkelijke data is wordt er verzonden
if (isset($_POST["verzonden"])) {
//controle voor en familienaam ingevuld
if (($_POST["voornaam"]) == "") || ($_POST["familienaam"] == "")) {
    print("Auteur niet toegevoegd, gelieve een voornaam en familienaam in te geven");
    } else {
// verbinding maken met db
$connectie = mysqli_connect('localhost', 'phpgebruiker', 'php','webleren');
$query = "INSERT INTO auteurs (voornaam, familienaam) VALUES ('".$_POST["voornaam"]."','" . $_POST["familienaam"] . "')";
mysqli_query($connectie, $query) or die("FOUT: " . mysqli_error($connectie));
print("Auteur " . $_POST["voornaam"] . " " . $_POST["familienaam"] . " werd toegevoegd");
//sluit verbinding
mysqli_close($connectie);
}
}

?>

<html>
<head>
<title>Voeg een auteur toe</title>
<meta charset = "utf-8">
</head>
<body>
    
    <h1>Voeg een auteur toe.</h1>
    
    <form method="post" action="auteurs.php">
    <input type="hidden" name="verzonden" value="ok">
        <table border="0">
        <tr>
            <td>Voornaam</td>
            <td> <input type="text" name="voornaam" size="20" maxlength ="50"></td>
        </tr>
        <tr>
            <td>Familienaam</td>
            <td><input type="text" name="familienaam" size="20" maxlength="50"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Toevoegen"></td>
            </tr>
        </table>
    
    
    </form>
    </body>
</html>