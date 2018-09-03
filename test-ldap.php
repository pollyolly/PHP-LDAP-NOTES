<?php
/**
 * Check if account exists
 */
    error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors',1);
    $ldaphost = 'ldap://10.xx.xx.xx';
    $ldapport = 389;
/*
    $ldappass =  '';
    $ldapdn = "uid=sampleuser,o=Quezon City University,c=PH";

    $ldapconn = ldap_connect($ldaphost, $ldapport) or die("Could not connect to $ldaphost");
    if($ldapconn){
        echo "Connection True \n";
    }
    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
    if(@ldap_bind($ldapconn, $ldapdn, $ldappass)){
        echo "Account Exists \n";
    } else {
        echo "Account Not Exists \n";
    }
*/
/**
 * List of existing accounts
 */
    $ldapuser = "uid=sampleuser,o=Quezon City University,c=PH";
    $ldappass = "";
    $ldapdn = "o=Quezon City University,c=PH";
    $filter = "(employeetype=fac)";
    $attronly = 0;
    $sizelimit = 0;
    $timelimit = 30;
    $attrib = array('sn','mail','uid');
    $ldapconn = ldap_connect($ldaphost, $ldapport) or die("Could not connect to $ldaphost");
    if($ldapconn){
        echo "Connection True \n";
    }
    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
    if(@ldap_bind($ldapconn, $ldapuser, $ldappass)){
        echo "Account Exists \n";
        $results = ldap_search($ldapconn, $ldapdn, $filter, $attrib, $attronly, $sizelimit, $timelimit);
        $data = ldap_get_entries($ldapconn, $results);
        echo "No of records:".count($data);
    } else {
        echo "Account Not Exists \n";
    }
?>