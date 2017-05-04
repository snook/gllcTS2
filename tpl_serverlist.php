<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_serverlist.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
?>
        <tr>
          <td align="center" bgcolor="<?php echo ''.$rowcolor.''; ?>" class="listing"><a href="listing.php?detail=<?php echo ''.$row->server_ip.''; ?>&detailport=<?php echo ''.$row->server_port.''; ?>&page=<?php echo ''.$page.''; ?>&sort=<?php if ($version_direction == 'server_version') { echo 'server_version'; } else { echo ''.$sort.''; } ?>&direction=<?php echo ''.$pagedirection.''; ?>&showgroup=<?php echo ''.$showgroup.''; ?>">Details</a></td>
          <td align="center" bgcolor="<?php echo ''.$rowcolor.''; ?>" class="listing"><?php if ($row->server_password == '1') { echo'<img src="images/'.$setting["imgbg"].'_private.gif" border="0" alt="Private" title="This server requires a password to join.">'; } else { echo'<img src="images/'.$setting["imgbg"].'_open.gif" border="0" alt="Open" title="This server does not require password to join.">'; } ?></td>
          <td align="center" bgcolor="<?php echo ''.$rowcolor.''; ?>" class="listing"><?php if (($row->server_linkurl) and (!preg_match("/webpost.php/i", $row->server_linkurl))) { echo '<img src="images/'.$setting["imgbg"].'_www.gif" border="0" alt="WWW" title="Visit '.$row->server_name.' website" align="absmiddle"> <a href="'.$row->server_linkurl.'" title="Visit '.$row->server_linkurl.'" target="_blank">'; } ?><?php echo ''.$row->server_name.''; ?></a></td>
          <td align="center" bgcolor="<?php echo ''.$rowcolor.''; ?>" class="listing"><a href="login.php?detail=<?php echo ''.$row->server_id.''; ?>" title="Click to join <?php echo ''.$row->server_ip.''; ?>:<?php echo ''.$row->server_port.''; ?> | This opens in a popup window." onClick="NewWindow(this.href,'login','<?php echo ''.$setting["popupwidth"].''; ?>','<?php echo ''.$setting["popupheight"].''; ?>');return false"><?php echo ''.$row->server_ip.''; ?>:<?php echo ''.$row->server_port.''; ?></a></td>
          <td align="center" bgcolor="<?php echo ''.$rowcolor.''; ?>" class="listing"><?php echo ''.number_format($row->clients_current).''; ?>/<?php echo ''.number_format($row->clients_maximum).''; ?></td>
          <td align="center" bgcolor="<?php echo ''.$rowcolor.''; ?>" class="listing"><img src="images/<?php echo ''.$setting["imgbg"].'' ?>_<?php echo ''.$row->server_platform.''; ?>.gif" border="0" alt="<?php echo ''.$row->server_platform.''; ?>" title="<?php echo ''.$row->server_platform.''; ?> v<?php echo ''.$row->server_version_major.''; ?>.<?php echo ''.$row->server_version_minor.''; ?>.<?php echo ''.$row->server_version_release.''; ?>.<?php echo ''.$row->server_version_build.''; ?>"></td>
          <td align="center" bgcolor="<?php echo ''.$rowcolor.''; ?>" class="listing"><nobr>v<?php echo ''.$row->server_version_major.''; ?>.<?php echo ''.$row->server_version_minor.''; ?>.<?php echo ''.$row->server_version_release.''; ?>.<?php echo ''.$row->server_version_build.''; ?></nobr></td>
        </tr>
