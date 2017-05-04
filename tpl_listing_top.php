<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_listing_top.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
include("tpl_style.php");
?>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="<?php echo ''.$setting["tablewidth"].''; ?>" class="listfont">
  <tr>
    <td>
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td valign="top">
            <table cellpadding="2" cellspacing="0" width="100%">
              <tr>
                <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" colspan="8"><a href="listing.php?sort=clients_current&direction=desc&showgroup=all">Active Servers</a>: <?php echo ''.getactiveservercount().''; ?> | <a href="listing.php?sort=clients_current&direction=desc&showgroup=all">Users Online</a>: <?php echo ''.gettotalonline().''; ?></td>
              </tr>
            </table>
            <a href="<?php echo ''.$setting["homepage"].''; ?>"><img src="images/ts_logo.gif" border="0" alt="<?php echo ''.$setting["pagetitle"].''; ?>"></a>
          </td>
          <td align="center" width="100%"><b><?php echo ''.$setting["message"].''; ?></b></td>
        </tr>
      </table>
