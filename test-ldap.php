<?php
//in clic $php test-ldap.php
    error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors',1);
    $ldaphost = 'ldap://xx.xx.xx.xx';
    $ldapport = 389;
    $ldappass =  '';
    $ldapdn = "uid=,o=,c=";

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
?>

