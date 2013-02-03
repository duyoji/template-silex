<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . "/yaml");
$isDevMode = false;


// the connection configuration
$conn = array(
	'driver'   => 'pdo_mysql',
	'user'     => 'user_name',
	'password' => 'db_password',
	'dbname'   => 'db_name',
	'host'     => '127.0.0.1'
);

$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
$em = \Doctrine\ORM\EntityManager::create($conn, $config);


$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
	'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
	'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));
