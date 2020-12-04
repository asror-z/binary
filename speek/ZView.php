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
exit();}}return sg_load('A42E80F110DF3131AAQAAAAXAAAABIgAAACABAAAAAAAAAD/PSqF62U2A3gErJxQLWjyqOEZ244r9nfA8c7PDqLj0b7G7T/Jbg8d4So4cPGAlu7Vmz94nCPcaMg6OLEGb6cSM+eKXh0am/5qDMjfxicj7wmlUjjw9bpCaxvb40yszgXhl4WQAECvIH/zJt2UnuXxwedxUXUZvGDbRPjs9hjozzV6tUCHP/8NTEkAAABYAgAADS9RI3bzZ4d5xgMbowNoNV5y78aOqh0Wz5gBM5jxUXcZtyfslWTcXKgQgNGllwZaArtgsUYvWdRdiolw6UjJkrd8BQ4qUESBV+1MQ+rSryI/L9hMjbrxCb79EqDam909VpGZKOIiQ5vdqpbxC6qYIwsdnIxL4A6vgkgvuutakQXtH0mYUJT2la6y2kh1D6Ash2oKeWjbL+m/SATP9aKj8RVQ5b+QAv6cSZdnocD6mhUgA4wesb+H60R5Z27+UZKaO4+WNUJfc+Tf7tQRyqFuH1//DFZ0QCq3rHs2GGjMfTzHDJqPssd2JR1k+as4XPi/BBrETQstaj0Q46Bg99TAtcOlJnFHH2608jPoKURemg6z92iOaHjvuiSHIPyAEGIJVedyIozLhfSCAKc9I8KU8xziBRVcnSMpyi06Hcx7IGLw2bPreepqp/iACV+iwvRAzMxeqfTq5T1AbegX/rdFbRKEiv0WLHWEneP5BV2my9eBtGEaSBqLRgsMaTfGKqCcD9Lt9VLuEf8mqtmW7RICGUpy0S0q8OjcBWl5OfK5MZdO1bcZN7FxSB7qwi5sYlamquYMyqfJT0oBdSnUPuYd8jDOnj6clXp9uWINNKTq9Pq6sFwo2KLn+WfKxzq5sxaNwJVhMmCjplq2h66/qQwr+mC3x4GOpqBZFjCkoIfxbEAW7CeMVFhX+OpZmMOwWh+XOHAkJbTX5ayQSVYeBKtQBWolTGjIX64xmoBPEvH7+GABnmHlokzhODb2QYzCI9RQt3Pwx7GJxTE9hpJ6qLDmVrFCmsUVaN/kSgAAADgCAADvfOfgLag0QGeRmgNf8tmoo9B9XZZByMkhoCT+86wPwKjd+hDkvkNUTJ1Nn22IV9lCOV8kzX+6fNDw7Al8v3963hjSYQP0tNACoMW/MHfTjbAaghmmonHqTiQEFJdA/05jGbUdmrJFp4MqSCDVhmb0ABuJDTe/Qp9hSFX2ZXjO9MFUFdNeRo7OUS59+Dbv8IHkN3NLF+tHZYswh1Y2zBYKQoDYRRzBmUg5/nEeFQ4UOGXRDNr/nF7uGC/FhrYr/2EP+PHDfh+e05uvaAMOPUiGcMxkJr7XkdRBbsJfVYEiXr2g9UoQGGGd0Z87jSJGZvxL3yN83UgxrNJ3VrmYjmLxVP1ERHdz2PV8rv9p2gsMMkY/zCIEogoHLACJid6XoHsQqgHPkEL1k3hgfqkOL/5oV7EDlPNyL5XegoZw9KRmGRFSp4xj/fiiG10ZarqpJtErolf1Q+M2YtP8xyxEtpDSm0mFjgPmZC2OJFfrMIRcyFx0VgEN1fADK4yX6pOTA1VtvIsu6wdp06Qtd/lMHR2Wfj5SZ/0b2f8XF5DVhargZ5NqlXIgDyNzrYv05OFr+J8rRakLwLwApQmgQw3p1SkUV2Jzbo44KkCuGY6Y9T75DEqcyO52pPsABOooZUVURlO2YW/jDvumONj3zpBz+M+q8IMGntwiyI/1TIVR3tbODUoZGYA0TwKUepY0CeXdSTpjEZ27wGXgjfbSfJLaHOxAL+bP2wBhMLYnmpWeNQSNG22W2e/ssRsIAAAAAA==');