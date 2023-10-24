<?php

define('DEVELOPMENT', true);
define('STAGING_LINK', 'http:localhost/MVC/public');
define('PRODUCTION_LINK', 'http://'.$_SERVER['HTTP_HOST']);
define('BASE_URL', DEVELOPMENT ? rtrim(STAGING_LINK,'/') : rtrim(PRODUCTION_LINK, '/'));

define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASSWORD','root');
define('DBNAME','mvc');