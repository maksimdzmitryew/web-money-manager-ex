<?php
require_once 'configuration_system.php';

if (file_exists('configuration_user.php'))
{
    require_once 'configuration_user.php';
}

require_once 'functions_design.php';
require_once 'functions_database.php';
require_once 'functions_security.php';
require_once 'functions_upgrade.php';
require_once 'functions_various.php';
require_once 'functions_attachments.php';
require_once 'functions_costant.php';
