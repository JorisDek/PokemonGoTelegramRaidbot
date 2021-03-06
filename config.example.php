<?php
//SQL database
define('DB_HOST',			'localhost');
define('DB_NAME',			'your_database_name');
define('DB_USER',			'your_database_user');
define('DB_PASSWORD',			'your_database_password');

// General config
define('DEBUG',				true);
define('CONFIG_LOGFILE',		'/var/log/tg-bots/dev-raid-bot.log');
define('CONFIG_HASH',			'aaaabbbbccccddddeeeeffff1111222233334444555566667777888899990000aaaabbbbccccddddeeeeffff1111222233334444555566667777888899990000');
define('DDOS_MAXIMUM',			'10');

// Proxy
define('CURL_USEPROXY',			false);
define('CURL_PROXYSERVER',		'http://your.proxyserver.com:8080');

// Access
define('MAINTAINER',			'@your_tg_username');
define('MAINTAINER_ID',			'your_tg_integer');
define('BOT_NAME',			'@RaidPokemonBot');
define('BOT_ADMINS',			'');
define('BOT_ACCESS',			'');

// Languages: EN, DE, NL or PT-BR
define('LANGUAGE',             		'EN');
define('RAID_POLL_LANGUAGE', 		'EN');

// Timezone and Google maps API 
define('TIMEZONE',			'Europe/Berlin');
define('GOOGLE_API_KEY',		''); 

// Raid creation
define('RAID_VIA_LOCATION',		true);
define('RAID_EGG_DURATION',		'60');
define('RAID_POKEMON_DURATION_SHORT',	'45');
define('RAID_POKEMON_DURATION_LONG',	'90');
define('RAID_DURATION_CLOCK_STYLE',	true);

// Raid times
define('RAID_LOCATION',			false);
define('RAID_SLOTS',			'15');
define('RAID_LAST_START',		'10');
define('RAID_ANYTIME',			false);
define('RAID_VIA_LOCATION', 'false');

// Raid poll design and layout
define('RAID_VOTE_ICONS',		true);
define('RAID_VOTE_TEXT',		false);
define('RAID_LATE_MSG',			true);
define('RAID_LATE_TIME',		'3');
define('POLL_UI_ORDER',			'MODIFIED'); //can be set to MODIFIED to order the buttons first by time, and then other buttons; or any other string for the original button ordering

// Raid sharing
define('SHARE_MODERATORS',		true);
define('SHARE_USERS',			true);
define('SHARE_CHATS',			'');

// Raid overview
define('RAID_PIN_MESSAGE',		'');

//Map settings
define('MAP_URL',   ''); 

// Cleanup
define('CLEANUP',			false);
define('CLEANUP_LOGFILE',		'/var/log/tg-bots/dev-raid-bot-cleanup.log');
define('CLEANUP_SECRET',		'your-cleanup-secret/passphrase');
define('CLEANUP_TELEGRAM',		true);
define('CLEANUP_TIME_TG',		'10');
define('CLEANUP_DATABASE',		true);
define('CLEANUP_TIME_DB',		'10080');