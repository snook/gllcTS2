<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_admin_menu.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
?>
<br><hr><b><a href="index.php?pass=<?php echo ''.$pass.''; ?>">Admin Panel</a></b><hr>
<a href="index.php?action=settings&pass=<?php echo ''.$pass.''; ?>">Settings</a><br>
<a href="index.php?action=email&pass=<?php echo ''.$pass.''; ?>">Email Admins</a><br><hr>
<b>Webpost Stats</b><hr>
Totals<br>
<a href="../groups.php">Groups</a>: <?php getgroupcount() ?><br>
<a href="../listing.php">Servers</a>: <?php getservercount() ?><br>
<a href="../listing.php">Channels</a>: <?php getchannelcount() ?><br>
<a href="../listing.php?sort=clients_current&direction=desc&showgroup=all">Users</a>: <?php gettotalonline() ?><br>
<a href="../listing.php?sort=clients_current&direction=desc&showgroup=all">Active Servers</a>: <?php getactiveservercount() ?><br><hr>
<b>Server Info</b><hr>
gllcTS2: v<?php echo ''.$wpost2version.''; ?><br>
PHP: v<?php echo ''.phpversion().''; ?><br>
MySQL: <?php printf("%s\n", mysql_get_server_info()); ?><br>
Server: <?php echo ''.PHP_OS.''; ?><br>
<a href="index.php?action=phpinfo&pass=<?php echo ''.$pass.''; ?>">PHP Info</a><br>
<br>