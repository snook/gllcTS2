<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_serverlist_top.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
?>
      <br>
      <table align="center" border="0" cellpadding="3" cellspacing="1" width="100%" bgcolor="<?php echo ''.$setting["bordercolor"].''; ?>">
        <tr>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" nowrap><b><?php echo ''.$servercount.''; ?></b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" nowrap><b><a href="listing.php?sort=server_password&direction=<?php if ($sort == 'server_password') { echo "$direction"; } ?>&showgroup=<?php echo ''.$showgroup ?>">Priv/Pub</a> <?php if ($sort == 'server_password') { echo '<img src="images/'.$pagedirection.'.gif" border="0">'; } ?></b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" nowrap><b><a href="listing.php?sort=server_name&direction=<?php if ($sort == 'server_name') { echo "$direction"; } ?>&showgroup=<?php echo ''.$showgroup ?>">Name</a> <?php if ($sort == 'server_name') { echo '<img src="images/'.$pagedirection.'.gif" border="0">'; } ?></b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" nowrap><b><a href="listing.php?sort=server_ip&direction=<?php if ($sort == 'server_ip') { echo "$direction"; } ?>&showgroup=<?php echo ''.$showgroup ?>">Server IP : Port</a> <?php if ($sort == 'server_ip') { echo '<img src="images/'.$pagedirection.'.gif" border="0">'; } ?></b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" nowrap><b><?php if ($sort == 'clients_current') { echo '<img src="images/'.$pagedirection.'.gif" border="0">'; } ?> <a href="listing.php?sort=clients_current&direction=<?php if ($sort == 'clients_current') { echo "$direction"; } ?>&showgroup=<?php echo ''.$showgroup ?>">On</a>/<a href="listing.php?sort=clients_maximum&direction=<?php if ($sort == 'clients_maximum') { echo "$direction"; } ?>&showgroup=<?php echo ''.$showgroup ?>">Max</a> <?php if ($sort == 'clients_maximum') { echo '<img src="images/'.$pagedirection.'.gif" border="0">'; } ?></b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" nowrap><b><a href="listing.php?sort=server_platform&direction=<?php if ($sort == 'server_platform') { echo "$direction"; } ?>&showgroup=<?php echo ''.$showgroup ?>">Server</a> <?php if ($sort == 'server_platform') { echo '<img src="images/'.$pagedirection.'.gif" border="0">'; } ?></b></td>
          <td align="center" bgcolor="<?php echo ''.$setting["catrowcolor1"].''; ?>" class="catagory" valign="middle" nowrap><b><a href="listing.php?sort=server_version&direction=<?php if ($version_direction == 'server_version') { echo "$direction"; } ?>&showgroup=<?php echo ''.$showgroup ?>">Version</a> <?php if ($version_direction == 'server_version') { echo '<img src="images/'.$pagedirection.'.gif" border="0">'; } ?></b></td>
        </tr>
