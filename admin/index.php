<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: index.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
  include_once("./db_inc.php");

if ($pass == $setting["admin_pass"]) {
  include("../tpl_style.php");
  include("tpl_admin_top.php");
  if (isset($_GET["action"])) {
    if ($_GET["action"] == 'settings') {
      include("tpl_settings.php");
    } else if ($_GET["action"] == 'email') {
      include("tpl_email.php");
    } else if ($_GET["action"] == 'submit') {
      include("tpl_submit.php");
    } else if ($_GET["action"] == 'phpinfo') {
      echo ''.phpinfo().'';
    }
  } else {
    include("tpl_admin.php");
  }
  include("tpl_admin_bot.php");
} else {
  header ("location: login.php");
}
?>