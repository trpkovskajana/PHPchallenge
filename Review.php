<?php

class Review
{
    public $id =0;
    public $reviewId="";
    public $reviewFullText="";
    public $reviewText="";
    public $numLikes= 0;
    public $numComments =0;
    public $numShares = 0;
    public $rating =0;
    public $reviewCreatedOn="";
    public $reviewCreatedOnDate="";
    public $reviewCreatedOnTime= 0;
    public $reviewerId=null;
    public $reviewerUrl = null;
    public $reviewerName = "";
    public $reviewerEmail = null;
    public $sourceType="";
    public $isVerified =false;
    public $source="";
    public $sourceName="";
    public $sourceId="";
    public $tags =[];
    public $href= null;
    public $logoHref=null;
    public $photos= [];

    public function __toString() {
        return "Rating : $this->rating" ."<br>"." Text : $this->reviewFullText"."<br>"." Date of creation : $this->reviewCreatedOnDate"."<br><br>" ;
    }
}