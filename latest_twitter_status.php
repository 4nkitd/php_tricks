<?php

function getLastXTwitterStatus($userid, $x)
{
    $url = "http://twitter.com/statuses/user_timeline/$userid.xml?count=$x";

    $xml = simplexml_load_file($url) or die('could not connect');
    echo '<ul>';
    foreach ($xml->status as $status) {
        $text = twitterify($status->text);
        echo '<li>' . utf8_decode($text) . '</li>';
    }
    echo '</ul>';
}

function twitterify($ret)
{
    $ret = preg_replace("#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t< ]*)#", "\\1<a href=\"\\2\" >\\2</a>", $ret);
    $ret = preg_replace("#(^|[\n ])((www|ftp)\.[^ \"\t\n\r< ]*)#", "\\1<a href=\"http://\\2\" >\\2</a>", $ret);
    $ret = preg_replace("/@(\w+)/", "<a href=\"http://www.twitter.com/\\1\" >@\\1</a>", $ret);
    $ret = preg_replace("/#(\w+)/", "<a href=\"http://search.twitter.com/search?q=\\1\" >#\\1</a>", $ret);
    return $ret;
}

//my user id kenrick1991
getLastXTwitterStatus('kenrick1991', 5);
