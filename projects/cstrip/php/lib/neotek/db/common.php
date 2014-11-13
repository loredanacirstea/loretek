<?php

include_once("db_connect_my.php");

function get_result($sql) {
    global $dbh;
    $term = NULL;
    //echo $sql;
    try {
        $sth = $dbh->query($sql);
        //echo "queried";
    } catch (PDOException $e) {
        echo 'Query failed: ' . $e->getMessage();
    }
    //var_dump($sth);
    foreach($sth as $row) {
        $term = $row;
        //var_dump($row);
        //$i++;
    }
    if ($sth) return $term;

}

function get_results($sql) {
    global $dbh;
    $term = NULL;
    //echo $sql;
    try {
        $sth = $dbh->query($sql);
        //echo "queried";
    } catch (PDOException $e) {
        echo 'Query failed: ' . $e->getMessage();
    }
    $term = array();
    foreach($sth as $row) {
        $term[] = $row;
        //var_dump($term);
        //$i++;
    }
    return $term;

}

function dbinsert($sql) {
	global $dbh;
    //echo $sql;
    try {
        $sth = $dbh->query($sql);
        //print_r($sth);
        //echo "queried";
    } catch (PDOException $e) {
        echo 'Query failed: ' . $e->getMessage();
        exit();
    }
}

function dbdelete($sql) {
    global $dbh;
    //echo $sql;
    try {
        $sth = $dbh->query($sql);
        //print_r($sth);
        //echo "queried";
    } catch (PDOException $e) {
        echo 'Query failed: ' . $e->getMessage();
        exit();
    }
}

function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}

?>