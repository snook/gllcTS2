<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_serverdetail.php 284 2006-08-10 04:26:30Z gryphon $
* $Rev: 284 $
* $LastChangedBy: gryphon $
* $Date: 2006-08-09 21:26:30 -0700 (Wed, 09 Aug 2006) $
*/
?>
      <script type="text/javascript" language="javascript">
        function jstime(phptime) {
          $newdate = new Date(phptime*1000);
          $hours = $newdate.getHours();
          $mins = $newdate.getMinutes();
          $secs = $newdate.getSeconds();
          $offset = $newdate.getTimezoneOffset();

          if ($hours == 0) {
            $hours = "12";
            $ap = "AM";
          }
          else if ($hours < 12) {
            $ap = "AM";
          }
          else if ($hours == 12) {
            $ap = "PM";
          }
          else {
            $hours = $hours - 12
            $ap = "PM";
          }
          if ($mins < 10) { $mins = "0" + $mins; }
          if ($secs < 10) { $secs = "0" + $secs; }

          $offsetString = Math.floor(Math.abs($offset / 60));
          if ( ($offset % 60) != 0 ) { $offsetString = $offsetString + ":" + Math.abs($offset % 60); }
          if ( $offset > 0 ) { $timezone = "UTC-" + $offsetString; }
          else if ( $offset < 0 ) { $timezone = "UTC+" + $offsetString; }
          else { $timezone = "UTC"; }

          //$datestring = $newdate.toTimeString();
          $datestring = $hours + ":" + $mins + ":" + $secs + " " + $ap + " " + "(" + $timezone + ")";
          document.write($datestring);
        }
      </script>
      <br>
      <table align="center" border="0" cellpadding="3" cellspacing="1" width="100%" bgcolor="<?php echo ''.$setting["bordercolor"].'';  ?>">
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory" colspan="7">
            <b>Server Detail for
              <?php
                if (!preg_match("/webpost.php/i", $row->server_linkurl)) {
                  echo '<a href="'.$row->server_linkurl.'" title="Visit '.$row->server_linkurl.'" target="_blank">'.$row->server_name.'</a>';
                } else {
                  echo ''.$row->server_name.'';
                }
              ?>
            </a></b>
          </td>
        </tr>
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Country</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Priv/Pub</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Admin</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Name</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Server IP : Port</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>On/Max</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Server</b></td>
        </tr>
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor1"].''; ?>" class="listing"><?php echo ''.$row->server_ispcountry.''; ?></td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor1"].''; ?>" class="listing">
            <?php
              if ($row->server_password == 1) {
                echo '<img src="images/'.$setting["imgbg"].'_private.gif" border="0" alt="Private" title="This server requires a password to join.">';
              } else {
              	echo '<img src="images/'.$setting["imgbg"].'_open.gif" border="0" alt="Open" title="This server does not require password to join.">';
              }
            ?>
          </td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor1"].''; ?>" class="listing">
            <?php
              if (($row->server_adminemail) and ($row->server_adminemail != 'na')) {
                echo '<a href="mailto:'.$row->server_adminemail.'"><img src="images/'.$setting["imgbg"].'_email.gif" border="0" alt="Email" title="Contact the server administrator at '.$row->server_adminemail.'"></a>';
              } else {
              	echo 'N/A';
              }
            ?>
          </td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor1"].''; ?>" class="listing">
            <?php
              if ($row->server_linkurl != '' && !preg_match("/webpost.php/i", $row->server_linkurl)) {
                echo '<img src="images/'.$setting["imgbg"].'_www.gif" border="0" alt="WWW" title="Visit '.$row->server_name.' website" align="absmiddle"> <a href="'.$row->server_linkurl.'" title="Visit '.$row->server_linkurl.'" target="_blank">'.$row->server_name.'</a>';
              } else {
                echo ''.$row->server_name.'';
              }
            ?>
          </td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor1"].''; ?>" class="listing">
            <a href="login.php?detail=<?php echo ''.$row->server_id.''; ?>" title="Click to join <?php echo ''.$row->server_ip.':'.$row->server_port.''; ?>" onClick="NewWindow(this.href,'login','<?php echo ''.$setting["popupwidth"].''; ?>','<?php echo ''. $setting["popupheight"].''; ?>');return false"><?php echo ''.$row->server_ip.':'.$row->server_port.''; ?></a>
          </td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor1"].''; ?>" class="listing">
            <?php
              echo ''.number_format($row->clients_current).'/'.number_format($row->clients_maximum).'';
            ?>
          </td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor1"].''; ?>" class="listing">
            <?php echo ''.$row->server_platform.'<br>v'.$row->server_version_major.'.'.$row->server_version_minor.'.'.$row->server_version_release.'.'.$row->server_version_build.''; ?>
          </td>
        </tr>
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>ISP</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Type 1</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Type 2</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Last Updated</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Current Time</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Channels</b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory"><b>Uptime</b></td>
        </tr>
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing">
            <?php
              if (($row->server_isplinkurl) and ($row->server_isplinkurl != 'na')) {
                echo '<a href="'.$row->server_isplinkurl.'" target="_blank">'.$row->server_ispname.'</a>';
              } else if ($row->server_ispname) {
              	echo ''.$row->server_ispname.'';
              }
            ?>
          </td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing"><?php echo ''.ucfirst($row->server_type1).''; ?></td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing"><?php echo ''.ucfirst($row->server_type2).''; ?></td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing" nowrap><script>jstime(<?php echo sprintf("%u",$row->server_timestamp); ?>);</script></td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing" nowrap><script>jstime(<?php echo sprintf("%u",time()); ?>);</script></td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing"><?php echo ''.$row->channels_current.''; ?></td>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>" class="listing"><?php echo ''.getuptime($row->server_uptime,server).''; ?></td>
        </tr>
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].'';  ?>" class="catagory" colspan="7"><b>Users and Channels</b></td>
        </tr>
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["rowcolor1"].''; ?>" class="listing" colspan="7">
            <br>
            <table border="0" align="center" cellspacing="1" class="listing" width="460" bgcolor="<?php echo ''.$setting["bordercolor"]  ?>">
              <tr>
                <td valign="top" width="260" bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>">
                  <img src="images/bullet_server.gif" align="absmiddle"> <b>
                  <?php
                    echo ''.$row->server_name.'</b><br>';
                    getcldetail($row->server_ip, $row->server_port, $row->server_id);
                  ?>
                </td>
                <td valign="top" width="140" bgcolor="<?php echo ''.$setting["rowcolor2"].''; ?>">
                  <b>Channel Flags</b><br>&nbsp;&nbsp;R = Registered<br>&nbsp;&nbsp;M = Moderated<br>&nbsp;&nbsp;P = Passworded<br>&nbsp;&nbsp;S = Sub-Channels<br>&nbsp;&nbsp;D = Default<br>&nbsp;&nbsp;U = Unregistered
                  <hr width="140">
                  <b>Player Flags</b><br>&nbsp;&nbsp;R = Registered<br>&nbsp;&nbsp;SA = Server Admin<br>&nbsp;&nbsp;CA = Channel Admin<br>&nbsp;&nbsp;AO = Auto-Operator<br>&nbsp;&nbsp;AV = Auto-Voice<br>&nbsp;&nbsp;O = Operator<br>&nbsp&nbsp;V = Voice<br>&nbsp;&nbsp;U = Unregistered
                </td>
              </tr>
            </table>
            <br>
          </td>
        </tr>
      </table>
