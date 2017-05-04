<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_submit.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/

  if (isset($_POST["set_listips"])) {
    $set_listips = str_replace(" ", "", $_POST["set_listips"]);
  if (substr("$set_listips", -1) != ',') {
    $set_listips = ''.$set_listips.',';
  } else {
    $set_listips = $set_listips;
  }
}

if ($_GET["what"] == 'settings') {
  $message = 'Settings Updated';
  query("UPDATE $dbtable5 SET
    admin_pass='$_POST[set_admin_pass]',
    pagetitle='$_POST[set_pagetitle]',
    listadmin='$_POST[set_listadmin]',
    homepage='$_POST[set_homepage]',
    tablewidth='$_POST[set_tablewidth]',
    popupwidth='$_POST[set_popupwidth]',
    popupheight='$_POST[set_popupheight]',
    perpage='$_POST[set_perpage]',
    ispperpage='$_POST[set_ispperpage]',
    showgroups='$_POST[set_showgroups]',
    imgbg='$_POST[set_imgbg]',
    refresh='$_POST[set_refresh]',
    refreshtime='$_POST[set_refreshtime]',
    message='$_POST[set_message]',
    bodybgcolor='$_POST[set_bodybgcolor]',
    bodytxtcolor='$_POST[set_bodytxtcolor]',
    bodylnkcolor='$_POST[set_bodylnkcolor]',
    bodyvlnkcolor='$_POST[set_bodyvlnkcolor]',
    bodyalnkcolor='$_POST[set_bodyalnkcolor]',
    bordercolor='$_POST[set_bordercolor]',
    catrowcolor1='$_POST[set_catrowcolor1]',
    cattxtcolor='$_POST[set_cattxtcolor]',
    catlnkcolor='$_POST[set_catlnkcolor]',
    cathvrcolor='$_POST[set_cathvrcolor]',
    lsttxtcolor='$_POST[set_lsttxtcolor]',
    lstlnkcolor='$_POST[set_lstlnkcolor]',
    lstvlnkcolor='$_POST[set_lstvlnkcolor]',
    lstalnkcolor='$_POST[set_lstalnkcolor]',
    lsthvrcolor='$_POST[set_lsthvrcolor]',
    rowcolor1='$_POST[set_rowcolor1]',
    rowcolor2='$_POST[set_rowcolor2]',
    listamount='$_POST[set_listamount]',
    listips='$set_listips',
    showtimeonline='$_POST[set_showtimeonline]'
  ");
} else if ($_GET["what"] == 'email') {
  $sqlemail = query("SELECT DISTINCT server_adminemail FROM $dbtable1 WHERE server_adminemail like '%@%'");
  $emailtothismany = number_format(mysql_num_rows($sqlemail));
  $fromname = $setting["pagetitle"];

  $message = "Email Sent to $emailtothismany server admins.";

  $sendname = stripslashes($_POST["email_name"]);
  $sendemail = stripslashes($_POST["email_email"]);
  $sendurl = stripslashes($_POST["email_url"]);
  $sendcomments = stripslashes($_POST["email_comments"]);

  $body = "From: $sendname\n";
  $body .= "Url: $sendurl\n\n";
  $body .= "Message: $sendcomments\n";

  while ($emaildata = mysql_fetch_row($sqlemail)) {
    mail("$emaildata[0]", "$fromname Teamspeak Serverlist", "$body", "From: $sendemail");
  }

} else {
  $message = 'Not sure what is updated here.';
}
?>
      <br>
      <table align="center" border="0" cellpadding="3" cellspacing="1" width="98%" bgcolor="<?php echo ''.$setting["bordercolor"].''; ?>">
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory" valign="middle" colspan="2" nowrap><b>Update</b></td>
        </tr>
        <tr>
          <td bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" width="50%" colspan="2" class="listing" align="center">
            <br><b><?php echo ''.$message.''; ?></b><br>(<a href="index.php?pass=<?php echo ''.$pass.''; ?>">Back to Admin Home</a>)<br><br>
          </td>
        </tr>
      </table>