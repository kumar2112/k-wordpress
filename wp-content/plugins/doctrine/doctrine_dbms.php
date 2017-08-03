<?php
/**
* @package Doctrine DBMS
* @author Flynsarmy
* @version 1.0.0
*/
/*
Plugin Name: Doctrine DBMS Integration
Plugin URI: http://www.flynsarmy.com/
Description: This plugin enables Doctrine DBMS support in WordPress to ease development.
Author: Flynsarmy
Version: 1.0.0
Author URI: http://www.flynsarmy.com/
*/

 define('DB_USER','root');
 define('DB_PASSWORD','');
 define('DB_HOST','localhost');
 define('DB_NAME','wordpress');
        require_once dirname(__FILE__)."/vendor/autoload.php";
	// load Doctrine library
	require_once dirname(__FILE__).'/vendor/bin/doctrine.php';
 
	// this will allow Doctrine to load Model classes automatically
	spl_autoload_register(array('Doctrine', 'autoload'));
 
	$dsn = 'mysql://' . DB_USER .
		':' . DB_PASSWORD .
		'@' . DB_HOST .
		'/' . DB_NAME;
		Doctrine_Manager::connection($dsn, 'default');
 
	// telling Doctrine where our models are located
	Doctrine::loadModels( dirname(__FILE__).'/models' );
 
	// (OPTIONAL) CONFIGURATION BELOW
 
	// load our shortcodes
	foreach( glob(dirname(__FILE__) . '/shortcodes/*.php') as $sc_file )
		require_once( $sc_file );
 
	// this will allow us to use "mutators"
	Doctrine_Manager::getInstance()->setAttribute(
		Doctrine::ATTR_AUTO_ACCESSOR_OVERRIDE, true);
 
	// this sets all table columns to notnull and unsigned (for ints) by default
	Doctrine_Manager::getInstance()->setAttribute(
		Doctrine::ATTR_DEFAULT_COLUMN_OPTIONS,
		array('notnull' => true, 'unsigned' => true));
 
	// set the default primary key to be named 'id', integer, 4 bytes
	Doctrine_Manager::getInstance()->setAttribute(
		Doctrine::ATTR_DEFAULT_IDENTIFIER_OPTIONS,
		array('name' => 'id', 'type' => 'integer', 'length' => 4));

