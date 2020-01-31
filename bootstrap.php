<?php
require 'vendor/autoload.php';

use Dotenv\Dotenv;

use Src\System\DatabaseConnector;
use Src\TableGateways\PersonGateway;

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

// test code, should output:
// api://default
// when you run $ php bootstrap.php
// echo getenv('OKTAAUDIENCE');

$dbConnection = (new DatabaseConnector())->getConnection();

$personGateway = new PersonGateway($dbConnection);
// return all records
$result = $personGateway->findAll();

// return the record with id = 1
$result = $personGateway->find(1);

// insert a new record
$result = $personGateway->insert([
  'firstname' => 'Doug',
  'lastname' => 'Ellis'
]);

// update the record with id = 10
$result = $personGateway->update(10, [
  'firstname' => 'Doug',
  'lastname' => 'Ellis',
  'secondparent_id' => 1
]);

// delete the record with id = 10
$result = $personGateway->delete(10);
