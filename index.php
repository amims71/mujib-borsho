<?php

function en2bn($number) {
    $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    return str_replace($en, $bn, $number);
}

$months=[
    "স্বাধীনতা","শপথ","বেতারযুদ্ধ","যুদ্ধ","শোক","কৌশলযুদ্ধ",
    "আকাশযুদ্ধ","জেলহত্যা","বিজয়","ফিরে আসা","নবযাত্রা","ভাষা"];
$date=<Enter_Your_Date>;
$old=strtotime($date."- 16 days -2 months");
$day= date("d",$old);
$month=$months[date("m",$old)-1];
$year=date("Y",$old)-1920;

echo en2bn($day." - ".$month." মাস, ".$year." মুজিব বর্ষ");
