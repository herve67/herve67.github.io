<!DOCTYPE html>

<html lang="en-GB">

<head>

<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />
<title>testAppSoft</title>

</head>

<body>
<a title="page2" href="pageSqlRandomA.php"><IMG class="displayed" alt="next" src="div/next.svg"></a>

<?php
try
{
$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

else {}

$reponse = $mysqli->query('SELECT * FROM `TABLE 2` ORDER BY RAND() LIMIT 1');

while ($ligne = $reponse->fetch_assoc()) {
$pont=$ligne["urlPic"];

echo $pont ; 
echo '<IMG class="displayed" alt="space" data-entity-type="file" src="div/space.svg" />';
}

$reponse->close();
$mysqli->close();

?>
<a title="page2" href="pageSqlRandomA.php"><IMG class="displayed" alt="next" src="div/next.svg"></a>

</body>

</html>


