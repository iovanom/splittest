<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-14 11:21:21 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/majeru/vhosts/splittest/modules/database/classes/Kohana/Database/Query.php:251
2015-03-14 11:21:21 --- DEBUG: #0 /home/majeru/vhosts/splittest/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/majeru/vhosts/splittest/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(15): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#9 {main} in /home/majeru/vhosts/splittest/modules/database/classes/Kohana/Database/Query.php:251
2015-03-14 11:22:07 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/modules/orm/classes/Kohana/ORM.php:1302
2015-03-14 11:22:07 --- DEBUG: #0 /home/majeru/vhosts/splittest/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/majeru/vhosts/splittest/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->save()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#9 {main} in /home/majeru/vhosts/splittest/modules/orm/classes/Kohana/ORM.php:1302
2015-03-14 11:22:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-14 11:22:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-14 11:22:56 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/modules/orm/classes/Kohana/ORM.php:1302
2015-03-14 11:22:56 --- DEBUG: #0 /home/majeru/vhosts/splittest/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/majeru/vhosts/splittest/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->save()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#9 {main} in /home/majeru/vhosts/splittest/modules/orm/classes/Kohana/ORM.php:1302
2015-03-14 11:24:55 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:55 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:58 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:58 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:58 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:58 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:24:59 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:00 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:01 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:01 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:01 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:01 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:01 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:01 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:01 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:01 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:02 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:02 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:02 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:02 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:02 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:02 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:02 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:02 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:03 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:03 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:03 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:03 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:03 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:04 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:04 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:04 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:04 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:04 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:04 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:04 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14
2015-03-14 11:25:04 --- DEBUG: #0 /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php(14): Kohana_ORM->check()
#1 /home/majeru/vhosts/splittest/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/majeru/vhosts/splittest/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/majeru/vhosts/splittest/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/majeru/vhosts/splittest/index.php(118): Kohana_Request->execute()
#7 {main} in /home/majeru/vhosts/splittest/application/classes/Controller/Welcome.php:14