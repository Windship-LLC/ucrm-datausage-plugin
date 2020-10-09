<?php
require_once __DIR__ . '/vendor/autoload.php';

// Get UCRM log manager.
$log = \Ubnt\UcrmPluginSdk\Service\PluginLogManager::create();

// Get UCRM API manager.
$api = \Ubnt\UcrmPluginSdk\Service\UcrmApi::create();

