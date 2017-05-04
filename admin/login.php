<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: login.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
  include_once("./db_inc.php");
  include("../tpl_style.php");
?>
<br>
<br>
<form action="index.php" method="post">
<table width="350" border="0" bgcolor="<?php echo ''.$setting["bordercolor"].''; ?>" class="listfont" align="center">
  <tr>
    <td bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" align="center"><b><?php echo ''.$setting["pagetitle"].''; ?> Admin Login</b></td>
  </tr>
  <tr>
    <td bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" align="center"><br>
      <table align="center">
        <tr>
          <!-- <td align="right"><input type="text" name="adminlogin"><br>Username</td> -->
          <td align="right"><input type="password" name="pass"><br>Password</td>
        </tr>
        <tr>
          <td colspan="2" align="center"><br><input type="submit" value="Log in"></td>
        </tr>
      </table><br>
    </td>
  </tr>
</table>
</form>
<center>
  <font size="1"><?php // Please do not remove copyright, Thank you. ?><a href="http://www.gryphonllc.com" target="_blank">© 2002-<?php echo ''.date("Y").''; ?> Gryphon, LLC</a><?php // Please do not remove copyright, Thank you. ?></font>
</center>

</body>
</html>