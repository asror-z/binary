<?php ?><?php
/* You may add your copyright here and it will be added to every encoded file.
   Format the copyright string as PHP comments like below */

/* Copyright (c) by MyCompany */

/* Also you may add your custom error handler which is added UNENCODED to every encoded file. */
if (!function_exists('my_error_handler')) {
   function my_error_handler($code, $message) {
       /* This is a sample of the error handler you may use to catch SourceGuardian errors
          such as IP or domain lock violation, expiring the license etc.
          Add this my_error_handler function name to the 'Custom error handlers' list on the
          'Lock' window in your SourceGuardian project. Please refer to 'Custom errors handling'
          section in 'Locking options' in the user manual for further information. */
       echo sprintf("Something goes wrong. Error code %s. ", $code);
       echo "Please contact <a href='myname@mycompany.com'>myname@mycompany.com</a>";
   }
}

/* Or you may add custom PHP code and it will be added UNENCODED to every encoded file. */
if (!function_exists('function_added_to_every_file')) {
   function function_added_to_every_file() {
       /* This is a sample of the function which is added as-is to every encoded file */
   }
}
?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m')); ?><?php
   echo "It looks like you did not install the loader. ";
   echo "Please contact <a href='myname@mycompany.com'>myname@mycompany.com</a>";
?><?php
exit();}}return sg_load('A42E80F110DF3131AAQAAAAXAAAABIgAAACABAAAAAAAAAD/PSqF62U2A3gErJxQLWjyqOEZ244r9nfA8c7PDqLj0b7G7T/Jbg8d4So4cPGAlu7Vmz94nCPcaMg6OLEGb6cSM+eKXh0am/5qDMjfxicj7wmlUjjw9bpCaxvb40yszgXhl4WQAECvIH/zJt2UnuXxwedxUXUZvGDbRPjs9hjozzV6tUCHP/8NTEkAAADQAAAApCaP4r1KVBzlWKV4i4HrBgnP2PohHBeFHKQcmIintg3ZiryBglyhZizwi13sS3/1kkGeCDFDjcw0wcF85s7IQtqXvyuZRgdAzWKtAVaoPn8xQrq5KCkgm18bZqTDof9eH/g50UYUsm+6L1ZyCWE0NLQGhFFSMQOuJsIIEiOl7vSKi4gF6WDurOcaolFKbAmMEkhEzEq1/hFnmPcO9ups6J8eFXstQp8Bz2qVMqiPi5fp9nK3O3bDtW6rq7FnDEQxlYe6dUNITtZDPOmjVTsLFEoAAADIAAAAKwAEQXnGXbzZIyVwtBrCGvxTrjFxOJHz9B/wZpaBENOFEEa04OEUI9RoMr9yOSOvqDrapYZE38TMrDLO1rpUd1mh3+8Ayc9fVkv4IWS4FoAVrDOJoFb8Qvfeg9FAOUAq9yrp9p+zc1qX5v6DxdPHfPb10Truuq1eIQyVaY8ow5hyEQMD2Z+zgT9iE/81bOLTyE6CZw1veN5cwceYweFR0W09rwv1jNGTh+/Q9Cj15qaG9LnLkajHLMXIpoQmdC+KFcE5k2KQUJAAAAAA');
