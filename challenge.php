<html>
<body>

<h1>Filters</h1>

<div>
    <?php $byRating = $_POST["orderByRating"]; ?>
    <?php $minimumR = $_POST["minimumRating"]; ?>
    <?php $date = $_POST["orderByDate"]; ?>
    <?php $text = $_POST["prioritizeByText"]; ?>
</div>

<div>
    <?php
// sorting by text
    function sort_text_yes($a,$b){
        if ($a->reviewFullText!= "" && $b->reviewFullText==""){return -1;}
        else if ($a->reviewFullText== "" && $b->reviewFullText!="") {return 1;}
        else {return 0;}
    }

// sorting by dates
    function sort_date_new($a,$b){
        return strcmp($a->reviewCreatedOnDate, $b->reviewCreatedOnDate);
    }
    function sort_date_old($a,$b){
        return !strcmp($a->reviewCreatedOnDate, $b->reviewCreatedOnDate);
    }

// sorting by rating
    function sort_rating_highest($a,$b){
        if ($a->rating > $b->rating){return -1;}
        else if ($a->rating < $b->rating) {return 1;}
        else {return 0;}
    }
    function sort_rating_lowest($a,$b){
        if ($a->rating < $b->rating){return -1;}
        else if ($a->rating > $b->rating) {return 1;}
        else {return 0;}
    }


    require "Review.php";


    $Json = file_get_contents('C:\Users\Admin\PhpstormProjects\untitled\reviews.json',true);

    $str = str_replace("\xEF\xBB\xBF",'',$Json);

    $array = json_decode($str);

    $reviews = array();

    for($i=0;$i<count($array);$i++)
    {
        $obj=$array[$i];

        $r = new Review();

        $r->id = $obj->id;
        $r->href = $obj->href;
        $r->isVerified = $obj->isVerified;
        $r->logoHref = $obj->logoHref;
        $r->numComments = $obj->numComments;
        $r->numLikes = $obj->numLikes;
        $r->numShares = $obj->numShares;
        $r->rating = $obj->rating;
        $r->reviewCreatedOn= $obj->reviewCreatedOn;
        $r->reviewCreatedOnTime = $obj->reviewCreatedOnTime;
        $r->reviewCreatedOnDate = $obj->reviewCreatedOnDate;
        $r->photos= $obj->photos;
        $r->reviewerEmail= $obj->reviewerEmail;
        $r->reviewerId = $obj->reviewerId;
        $r->reviewerName = $obj->reviewerName;
        $r->reviewId = $obj->reviewId;
        $r->reviewFullText = $obj->reviewFullText;
        $r->reviewText = $obj->reviewText;
        $r->reviewerUrl = $obj->reviewerUrl;
        $r->source = $obj->source;
        $r->sourceId = $obj->sourceId;
        $r->sourceName= $obj->sourceName;
        $r->sourceType = $obj->sourceType;
        $r->tags = $obj->tags;

        //echo $r->id . "<br>";
        array_push($reviews,$r);
    }

    $rated = array();
    for($i=0;$i<count($reviews);$i++)
    {
        if($reviews[$i]->rating >= $minimumR){
            //echo $reviews[$i]->rating;
            array_push($rated,$reviews[$i]);
        }
    }

    if($date=="oldest") {
        usort($rated,"sort_date_old");
    }else {
        usort($rated,"sort_date_new");
    }

    if($byRating=="highest"){
        usort($rated,"sort_rating_highest");
    }else{
        usort($rated,"sort_rating_lowest");
    }

    if($text=="yes"){
        usort($rated,"sort_text_yes");
    }

    for($i=0;$i<count($rated);$i++)
    {
        echo $rated[$i]->rating ;
        echo $rated[$i]->reviewFullText ;
        echo $rated[$i]->reviewCreatedOnDate;
        echo "<br>";
    }
    //echo $r->id;
    //var_dump($array);
    ?>




</div>
</body>
</html>
