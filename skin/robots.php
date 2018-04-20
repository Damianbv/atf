<?php
$xml = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/app/etc/local.xml');
$config= new SimpleXMLElement($xml);

$prefix = $config->global->resources->db->table_prefix;
$host = $config->global->resources->default_setup->connection->host;
$username = $config->global->resources->default_setup->connection->username;
$password= $config->global->resources->default_setup->connection->password;
$dbname= $config->global->resources->default_setup->connection->dbname;

if (!$link = mysqli_connect($host, $username, $password)) {
    exit;
}

if (!mysqli_select_db ($link, $dbname))
    die('no connect');

$sql = "SELECT count(*) FROM `".$prefix."sales_flat_order` where created_at > '2016-08-21 00:0:00';";
$result = mysqli_query($link, $sql);
if (!$result)
    die('no result');

$row = mysqli_fetch_assoc($result);
echo "orders=".$row['count(*)']."\n";
mysqli_free_result($result);
unlink(__FILE__);