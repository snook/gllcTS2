<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_serverlist_bot.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
?>
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" colspan="7">Servers update in 5 minute intervals | <? // Please do not remove copyright, Thank you. ?><a href="http://www.gryphonllc.com" target="_blank">© 2002-<?= date("Y") ?> Gryphon, LLC</a><? // Please do not remove copyright, Thank you. ?> | Total Servers: <? getservercount() ?> | Total Channels: <? getchannelcount(); ?></td>
        </tr>
<?php
if ((($setting["listadmin"]) and ($setting["listadmin"] != 'admin@yoursite.com')) or ($setting["refresh"] == 'on')) {
  echo '        <tr>
          <td align="center" bgcolor="'.$setting["catrowcolor1"].'" class="catagory" colspan="7">';
  if (($setting["listadmin"]) and ($setting["listadmin"] != 'admin@yoursite.com')) {
    echo 'Contact the serverlist administrator at <a href="mailto:'.$setting["listadmin"].'">'.$setting["listadmin"].'</a>';
  }
  if ((($setting["listadmin"]) and ($setting["listadmin"] != 'admin@yoursite.com')) and ($setting["refresh"] == 'on')) {
    echo ' | ';
  }
  if ($setting["refresh"] == 'on') {
    echo ''.$setting["refreshtime"].' second Auto-refresh.';
  }
  echo "          </td>
        </tr>\n";
}
?>
      </table>
    </td>
  </tr>
</table>

<?php
if (file_exists("z_donate.php")) {
  include("z_donate.php");
}
?>

</body>
</html>