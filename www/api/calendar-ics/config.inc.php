<?php

define('TOOL_NAME', 'Canvas Calendar &harr; ICS Tool');
define('TOOL_START_PAGE', dirname($_SERVER['PHP_SELF'])); // FIXME: should be index

define('LOCAL_TIMEZONE', 'US/Eastern');
define('SEPARATOR', '_'); // used when concatenating information in the cache database
define('SYNC_TIMESTAMP_FORMAT', 'Y-m-d\TH:iP'); // same as CANVAS_TIMESTAMP_FORMAT, FWIW

define('WORKING_DIR', '/var/www-data/canvas/calendar-ics/');

define('API_CLIENT_ERROR_RETRIES', 1);
define('API_SERVER_ERROR_RETRIES', 3);

?>