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
    public $reviewCreatedOnDate="";//"reviewCreatedOnDate": "2021-01-25T13:00:35+00:00",
    public $reviewCreatedOnTime= 0; //  $timestamp = 1394003958; echo(date("F d, Y h:i:s", $timestamp));
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
}