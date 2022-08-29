<h1>Landen Overzicht</h1>
<?php


include "../app/controllers/ccountries.php";
include "../app/models/MCountry.php";

$conn = new DatabaseController();


?> <br> <?

//De connection values called ie <dus username en wachtwoord en database enz>
$conn1 = $conn->connect();
//insert de connection values en returned de select tabel 
$conn->getCountries($conn1);

?>