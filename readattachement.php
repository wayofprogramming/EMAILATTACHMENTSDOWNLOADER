<?php
require_once("attachmentread.class.php");
$host="{mail.gmail.com:993/imap/ssl}INBOX"; 
$login="YOUR_EMAIL@GMAIL.COM"; 
$password="YOUR PASSWORD";
$savedirpath="files" ; 
if (!is_dir($savedirpath)) {
   mkdir($savedirpath, 0755, true);
}
$jk=new readattachment();
$jk->getdata($host,$login,$password,$savedirpath); 
?>