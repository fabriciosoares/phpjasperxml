<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "setting.php";
require_once "../PHPJasperXML.inc.php";
require_once __DIR__ . '/../vendor/autoload.php';
use Simitgroup\PHPJasperXML\PHPJasperXML;

$PHPJasperXML = new PHPJasperXML();
// $PHPJasperXML->debugsql=true;
$PHPJasperXML->arrayParameter=array("parameter1"=>1);
$PHPJasperXML->load_xml_file("sample1.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db,'psql');
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file


?>
