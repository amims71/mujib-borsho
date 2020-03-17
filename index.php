<?php
$months=[
    "স্বাধীনতা","শপথ","বেতারযুদ্ধ","যুদ্ধ","শোক","কৌশলযুদ্ধ",
    "আকাশযুদ্ধ","জেলহত্যা","বিজয়","ফিরে আসা","নবযাত্রা","ভাষা"];
$date=date();
$old=strtotime($date."- 16 days -2 months");
$day= date("d",$old);
$month=$months[date("m",$old)-1];
$year=date("Y",$old)-1920;

echo $day." - ".$month." মাস, ".$year." মুজিব বর্ষ";
