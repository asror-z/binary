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
exit();}}return sg_load('A42E80F110DF3131AAQAAAAXAAAABIgAAACABAAAAAAAAAD/PSqF62U2A3gErJxQLWjyqOEZ244r9nfA8c7PDqLj0b7G7T/Jbg8d4So4cPGAlu7Vmz94nCPcaMg6OLEGb6cSM+eKXh0am/5qDMjfxicj7wmlUjjw9bpCaxvb40yszgXhl4WQAECvIH/zJt2UnuXxwedxUXUZvGDbRPjs9hjozzV6tUCHP/8NTEkAAABoAgAAcajdRR+MOPcBJM8VaggYvV31NqocdXr8qSpoLlsWwcEGuuByc6iItxXdI8AkT9nQnSzvryvvnYW7mWmcWECWMOtlYIx2ht8HHeD3IhnhKKHylLUfCusz+CADwFbW9ybQF0esDi36cZ2Evit52GKj3m7qxGsO3R97JWMu9k7UY606LAMTb7VHOmkqtu0ysahZ+1C8Yjw1Nh0lUueRY59AWhjdRaYdoQ32y8hvmad2EukOeuwJNfAx1pbXNM/Ea5/bO2jtG8aTetDYjdHV/62kRJcnOZabRwfQNcVFSo4paV/Bofu2qI6Ho+MSXhKEVWq8H4lyN28CyUGuQGrXTbgBkA3SdHK08rpuRlNy56Dal4rtu4YEm6KDK2r1vY37yl18OU6WaXyML62/ucr1Ptp/114orWifqzmNAQDuBpAl2/Lb7m4igSbB6D9AqsZcXVrwhARdH/OoAS5EQhM2W6JdXjOBPn2i8iGl2eSU//tv5bAPlTnNAwqn+YnbWQfbKMJX3qNyN9K568waLL/UJ3ae2iFl9LZWc0b0S9N0jmsErtrMW1uVHkNiRX97D5LuGR6234T9hFuUlJIPqGh/PMy91/U//30lP/+GALjlAaxNuwbjq/h6E/q/l33DMcVg4zyM+2Hppvzyf4hKkx42Zk4yiWTIBsan3Igs/sp7L2gKQuTwlJI+n26xjvMF/42UUoiyxF0gr4pmhnn8sUTLtHVDrz/6kAWFSw3hpM4eGNQUwZOQdu1prmiKAONSBMX2uQp3+PZeZM2l94+5Hqne5cYXqFJ35oUkEfMTJURWCyUPTSTSwqzOSJXdEEoAAABQAgAABdp6LCXxsrOSGumxyep8HnZ4HXu22ENeAHEWq0Dq/nQMIA5zO6dpSFUf6vj/ZI7IozAVGYgncdObEGtd7SSbbwRZG7WGn/VnjbQ71I817PjRjicDm+VTpQctG6WhY7xn9L4XpVo91Us7s34d3lHiU1PP8hYFHNyjVF0jCsqIT9vQsooP58rbiCNuF9IuII7czrg/9YIwy4NL+iEgVom0v7MZ4dOMvtYMrC8ncqLZ5gRVszCYkIQcrt00zPUT1HlaoU6Fi23iov+aEJ7ymioPQTE4Nr42ykARsHOIfXZRS99ToPV8DFh/Yx1uTBP/obsYqkbGQKoyqxzDQrNkyZx01KwSaB7SDZphqK9j4me2B/EDxj3mFJp7NSMtHrIsVQBPvojCevBDtcIZM3uqQ+a3cb3HZmGZ0wgdr0Km3eV1XnBilwlHYGWOqKPLR4RNBeVhXZj/k3wtLuZ/zBi3APgW50hkE34QUj6XSJ2d2LA4TuCz4Gly2HlnbfDfgcYgO2kfdvOcNvsTwZm8eunKLWht+e72qTZ19Q/sMKOzvTYgc+cgzD6K74Peah6l2nqbjwrFmWRHLBw4Q+4NWoUWJFNPvKVFg0woUisTIFnf+O3EVk54RpyIZivs5ukAg7fdylnjSI9dqJwqSLZfKS5FDBFdNiyiTRadQaSdURja5nG/K8+5AOF6vDnBv1sXN/ewk5zsXUa6LI8vWh52SXh6jYQqH3iTlR9dq9MZ8NDqG7E9VvcIkxX+K7y9sw0mL2qRTAYpJmaGgzXxuFqmnOrSmIASjQAAAAA=');
