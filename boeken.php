<?php
//toevoegen aan db gebeurt alleen als er werkelijke data verzonden is via form
if (isset($_POST["verzonden"])) {
//controle noodzakelijke gegevens ingevuld
if (($_POST["titel" == ""]) || ($_post["auteur"] == "")) {
    print("Boek niet toegevoegd, gelieve een titel en auteur in te geven.");
}
 else {
     
     //maak verbinding met de database
     $connectie = mysqli_connect('localhost','phpgebruiker', 'php', 'webleren');
     $query = "INSTERT INTO boeken (titel, auteur, bldz) VALUES ('" . $_POST["titel"] . "', '" . $_POST["auteur"] . "', '" . *_POST["bldz"] . "')";
     mysqli_query($connectie, $query) or die("FOUT: " . mysqli_error($connectie));
     print("Het boek " . $_POST["titel"] . " werd toegevoegd");
     //sluiten verbinding
     mysqli_close($connectie);
 }   
}
?>

<html>
<head>
<title>Voeg een boek toe</title>
<meta charset="utf-8">
</head>
<body>
<h1> Voeg een boek toe</h1> 
    <form method="post" action="boeken.php">
    <input type="hidden" name="verzonden" value="ok">
    <table border="0">
        <tr>
        <td>Titel</td>
        <td><input type="text" name="titel" size="20" maxlength="50"></td>    
        </tr>
        <tr>
        <td>Auteur</td>
        <td>
        <select name="auteur">
<?php
$connectie = mysqli_connect("loclalhost","phpgebruiker","php","webleren");
$query = "SELECT auteurid, familienaam, voornaam FROM auterus ORDER BY familienaam";
$resultaat = mtysqli_query($connectie, $query);
            while($rij = mysqli_fetch_assoc($resultaat)) {
                print("<option value=" .$rij["auteurd"] . ">" . $rij["familienaam"] . " " . $rij["voornaam"] . "</option>");
            }
            mysqli_close($connectie); ?>
            
            </select>    
            
            </td>    
        </tr>
        </table>
    </form>
    
    </body>
</html>