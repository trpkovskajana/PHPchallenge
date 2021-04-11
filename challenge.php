<html>
<body>

<h1>Welcome to my home page!</h1>

<div>
    Welcome
    Order by rating : <?php echo $_POST["orderByRating"]; ?>
    <br>
    minimum Rating: <?php echo $_POST["minimumRating"]; ?>
    <br>
    order by date: <?php echo $_POST["orderByDate"]; ?>
    <br>
    priotize by text: <?php echo $_POST["prioritizeByText"]; ?>
</div>

<div>
    <?php

    //require "Review.php";
    //$obj = new Review();

    $Json = file_get_contents('C:\Users\Admin\PhpstormProjects\untitled\reviews.json',true);

    $str = str_replace("\xEF\xBB\xBF",'',$Json);

    $myarray = json_decode($str);

    var_dump($myarray);
    ?>
</div>

</body>
</html>
