<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_admin.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
$REQUEST_URI = str_replace("admin/index.php?action=email&pass=$pass", "", $_SERVER["REQUEST_URI"]);
$serverlisturl = 'http://'.$_SERVER[HTTP_HOST].''.$REQUEST_URI.'';

$versioninfo = 'Automatic version checking permanently disabled in this version, it may return in the next version.  You can check for updates at <a href="http://php.gryphonllc.com/gllcts2" target="_blank">php.gryphonllc.com/gllcts2</a>';
?>
      <br>
      <table align="center" border="0" cellpadding="3" cellspacing="1" width="98%" bgcolor="<?php echo ''.$setting["bordercolor"].''; ?>">
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" colspan="2" nowrap><b>Welcome</b></td>
        </tr>
<?php if (file_exists("install.php")) { ?>
        <tr>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" width="50%" colspan="2" class="listing" align="center">
            <font size="2" color="red"><b>** Security Warning **<br>Remove install.php from the admin folder<br>** Security Warning **</b></font>
          </td>
        </tr>
<?php } ?>

        <tr>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" width="50%" colspan="2" class="listing">
            Thanks for installing gllcTs2.  I hope you enjoy this script. You may make any changes that you want to the code, all I ask is that you leave all copyrights in the code, Thanks.<br><br>Thanks to the great people at Dominating Bytes Design for giving us <a href="http://www.teamspeak.org" target="_blank">Teamspeak</a>, a great voice communication application.<br><br>&nbsp;&nbsp;&nbsp;- Ryan "Gryphon" Snook
          </td>
        </tr>
        <tr>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" width="50%" colspan="2" class="listing" align="center">
            <b>Updates</b><br><?php echo ''.$versioninfo.''; ?>
          </td>
        </tr>
        <tr><form action="https://www.paypal.com/cgi-bin/webscr" methd="post" target="_blank">
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" width="50%" align="center" class="listing">
            If you find this script useful,<br>click below to send a small donation.<br>Thank you :)<br>
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="rsnook@gryphonllc.com">
            <input type="hidden" name="item_name" value="gllcTS2 Donation">
            <input type="hidden" name="no_shipping" value="1">
            <input type="hidden" name="return" value="http://www.gryphonllc.com">
            <input type="hidden" name="cancel_return" value="http://www.gryphonllc.com">
            <input type="image" src="http://images.paypal.com/images/x-click-but04.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" width="62" height="31">
          </td></form><form action="http://www.teamspeak.org/forums/threadrate.php" method="get" target="_blank">
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" width="50%" align="center" class="listing">
            Rate This Script:<br>
            <input type="hidden" name="s" value="">
            <input type="hidden" name="threadid" value="1466">
            <select name="vote">
              <option value="-1" selected>Select a rating...</option>
              <option value="5">5 .. Best</option>
              <option value="4">4</option>
              <option value="3">3 .. Average</option>
              <option value="2">2</option>
              <option value="1">1 .. Worst</option>
            </select>
            <input type="submit" value="Go"><br>
            <font size="1">Press <u>Try this action again!</u><br>when the new window appears. Thanks :)</font>
          </td></form>
        </tr>
      </table>
