## LDAP

Some Tutorial link.
https://www.youtube.com/watch?v=bhQ5qssGdLI

### Test LDAP Account Authentication
PHP Script
```
<?php

$ldaphost = 'ldaps://10.XX.XX.XXX:1636';
$username = 'USERNAME';
$ldappass =  'PASSWORD';
$ldapdn = "uid=".$username.",o=university of mindanao,c=ph";
$ldapconn = @ldap_connect($ldaphost) or die("Could not connect to $ldaphost");
ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
if(ldap_bind($ldapconn, $ldapdn, $ldappass)){
  echo "Account exists";
}
exit;
?>
```
PHP LDAP extension
```
Nginx: /etc/php/7.4/fpm/php.ini
Apache: /etc/php/7.4/apache/php.ini

extension=ldap
```
LDAP /etc/ldap/ldap.conf
```
PORT 1636
TLS_REQCERT never
```
