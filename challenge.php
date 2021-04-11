<html>
<body>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>

<?php
$data = file_get_contents("reviews.json");
echo $data;//= json_decode($data, true);
foreach($data as $row)
{

}
?>

</body>
</html>
