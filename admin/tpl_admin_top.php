<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_admin_top.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
?>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="<?php echo ''.$setting["tablewidth"].''; ?>" class="listfont">
  <tr>
    <td>
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td valign="top">
            <table cellpadding="2" cellspacing="0" width="261">
              <tr>
                <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'' ?>" class="catagory" colspan="8"><a href="../listing.php?sort=clients_current&direction=desc&showgroup=all">Active Servers</a>: <?php getservercount() ?> | <a href="../listing.php?sort=clients_current&direction=desc&showgroup=all">Users Online</a>: <?php gettotalonline(); ?></td>
              </tr>
            </table>
            <a href="../<?php echo ''.$setting["homepage"].''; ?>"><img src="../images/ts_logo.gif" border="0" alt="<?php echo ''.$setting["pagetitle"].''; ?>"></a>
          </td>
          <td align="center"><b><?php if (isset($setting["message"])) { echo ''.$setting["message"].''; } ?></b></td>
        </tr>
      </table>
      <br>
      <table align="center" border="0" cellpadding="4" cellspacing="1" width="100%" bgcolor="<?php echo ''.$setting["bordercolor"].''; ?>">
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" colspan="2" nowrap><b><?php echo ''.$setting["pagetitle"].''; ?> Admin</b></td>
        </tr>
        <tr>
          <td bgcolor="<?php echo ''.$setting["rowcolor1"].''; ?>" class="listing" valign="top" align="center" nowrap>
            <?php include("tpl_admin_menu.php"); ?>
          </td>
          <td bgcolor="<?php echo ''.$setting["rowcolor1"].''; ?>" width="100%" class="listing" valign="top" align="center">
