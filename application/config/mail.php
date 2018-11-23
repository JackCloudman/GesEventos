<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config["email"] = Array();
$config["email"]['protocol'] = 'smtp';
$config["email"]['smtp_host']    = 'mail.juanjoserv.com';
$config["email"]['smtp_port'] = 465;
$config["email"]['smtp_user'] = 'no-reply@juanjoserv.com'; // correo sin espacio
$config["email"]['smtp_pass'] = 'jackcloudman';
$config["email"]['smtp_crypto'] = 'ssl';
$config["email"]['smtp_timeout'] = '7';
$config["email"]['charset'] = 'utf-8';
$config["email"]['newline'] = "\r\n";
$config["email"]['mailtype'] = 'html'; // or html
$config["email"]['validation'] = TRUE; // bool whether to validate email or not
$config["email"]['newline'] = "\r\n";
$config["email"]['crlf']    = "\n";
$config["email"]['wordwrap'] = TRUE;
?>