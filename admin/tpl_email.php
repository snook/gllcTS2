<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_email.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
$REQUEST_URI = str_replace("admin/index.php?action=email&pass=$pass", "", $_SERVER["REQUEST_URI"]);
$url = "http://{$_SERVER['HTTP_HOST']}{$REQUEST_URI}";
?>
      <br>
      <table align="center" border="0" cellpadding="3" cellspacing="1" width="98%" bgcolor="<?php echo ''.$setting["bordercolor"].''; ?>">
        <tr><form name="report" method="post" action="index.php?action=submit&what=email">
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" colspan="2" nowrap><b>Email Server Admins</b></td>
        </tr>
        <tr>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing" colspan="2">This will allow you to send out notices to all server admins who have specified a contact email address in their server settings.  You can notify them of such things as TeamSpeak server upgrades or web site maintenance.</td>
        </tr>
        <tr>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing" nowrap><b>Your Name :</b></td>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing" width="100%"><input type="text" name="email_name" size="35"></td>
        </tr>
        <tr>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing" nowrap><b>Your Email :</b></td>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing"><input type="text" name="email_email" size="35"></td>
        </tr>
        <tr>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing" nowrap><b>Your Url :</b></td>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing"><input type="text" name="email_url" value="<?php echo ''.$url.''; ?>" size="35"></td>
        </tr>
        <tr>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing" valign="top" nowrap><b>Comments :</b></td>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing"><textarea cols="60" rows="15" name="email_comments"></textarea></td>
        </tr>
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" colspan="2" nowrap>Depending on how many servers there are, this can take a while.<br>Please be patient after pressing submit.<br><br>
            <input type="hidden" name="pass" value="<?php echo ''.$pass.''; ?>"><input type="submit" value="Submit"> <input type="reset" value="Reset" onclick="location.reload()">
          </td>
        </tr></form>
      </table>
