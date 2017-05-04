<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_serverlist_nav.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
?>
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" colspan="8">
<?php
$numlink = 1;
$pagelinks = ceil($servercount / $setting["perpage"]);

$pageprev = $page -1;

if ($page == $pagelinks) {
  $pagenext = $page;
} else {
  $pagenext = $page +1;
}

echo '<a href="listing.php?page=1&sort=';  if ($version_direction == 'server_version') { echo 'server_version'; } else { echo ''.$sort.''; }   echo '&direction='.$pagedirection.'&showgroup='.$showgroup.'">&#60;&#60;</a> ';
echo '<a href="listing.php?page='.$pageprev.'&sort=';  if ($version_direction == 'server_version') { echo 'server_version'; } else { echo ''.$sort.''; }   echo '&direction='.$pagedirection.'&showgroup='.$showgroup.'">&#60;</a> | ';
echo ' <a href="listing.php?page='.$pagenext.'&sort=';  if ($version_direction == 'server_version') { echo 'server_version'; } else { echo ''.$sort.''; }   echo '&direction='.$pagedirection.'&showgroup='.$showgroup.'">&#62;</a>';
echo ' <a href="listing.php?page='.$pagelinks.'&sort=';  if ($version_direction == 'server_version') { echo 'server_version'; } else { echo ''.$sort.''; }   echo '&direction='.$pagedirection.'&showgroup='.$showgroup.'">&#62;&#62;</a><br>';


while ($numlink <= $pagelinks) {
 if ($page == $numlink) {
   echo '<b>[';
 }
 echo '<a href="listing.php?page='.$numlink.'&sort=';  if ($version_direction == 'server_version') { echo 'server_version'; } else { echo ''.$sort.''; }   echo '&direction='.$pagedirection.'&showgroup='.$showgroup.'">'.$numlink.'</a>';
 if ($page == $numlink) {
   echo ']</b>';
 }
 if ($numlink != $pagelinks) {
  echo' ';
 }
 $numlink++;
}
?>
          </td>
        </tr>
