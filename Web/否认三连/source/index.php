<?php
error_reporting(0);
header("content-type:text/html;charset=utf-8");
include("flag.php");
extract($_GET);
$mark1 = "agsdsgdgsgsgs";
if ($justify1 === 'wobushi') {
    $justify2 = $_GET['justify2'];
    $justify3 = $_GET['justify3'];
    if (sha1($justify2) != sha1($justify3)) {
        echo 'i hope you to give me two equal justify.';
    } else {
        if (implode("", $justify2) == 'womeiyou') {
            if ($justify2 == $justify3) {
                die('nonono,they cannot be equal to each other!');
            } else {
                if (implode("", $justify3) == 'nibieluanshuoa') {
                    echo "now tell me the length of the hacker's mark:<br/>";
                    $mark = $_GET['mark'];
                    if (!is_null($mark)) {
                        if (strlen($mark) == 0) {
                            die($flag);
                        } else {
                            die('wrong!youre the hacker!');
                        }
                    } else {
                        die('mark cant be empty!');
                    }
                } else {
                    die('invalid justify!');
                }
            }
        } else {
            die('invalid justify!');
        }
    }
} else {
    echo 'I said you are.';
}
?>