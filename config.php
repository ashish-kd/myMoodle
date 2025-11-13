<?php  // Moodle configuration file

unset($CFG);
global $CFG;
ini_set('max_input_vars', 5000);
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodleuser';
$CFG->dbpass    = 'moodlepass';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://humble-lamp-v5gqxvvv4vj36g9r-8080.app.github.dev';
$CFG->dataroot  = '/var/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

$CFG->reverseproxy = true;
$CFG->sslproxy = true;
require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
