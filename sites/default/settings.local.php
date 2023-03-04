<?php

$settings['update_free_access'] = FALSE;
$settings['file_private_path'] = DRUPAL_ROOT . '/private-files';
$settings['file_temp_path'] = DRUPAL_ROOT . '/tmp';



$settings['trusted_host_patterns'] = [
  '^musetributeband\.ddev\.site$',
  '^.+\.musetributeband\.ddev\.site$',
  '^musetributeband\.com$',
  '^.+\.musetributeband\.come$',
];

$settings['config_sync_directory'] = DRUPAL_ROOT . '/sync';

