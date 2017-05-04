-- ************************************************
-- * gllcTS2 © Gryphon, LLC (www.gryphonllc.com ) *
-- ************************************************
--
-- $Id: gllcts2.sql 10 2005-11-08 21:20:04Z gryphon $
-- $Rev: 10 $
-- $LastChangedBy: gryphon $
-- $Date: 2005-11-08 13:20:04 -0800 (Tue, 08 Nov 2005) $
--
-- Database: `gllcts2`
--

-- --------------------------------------------------------

--
-- Table structure for table `gllcts2_admin`
--

DROP TABLE IF EXISTS `gllcts2_admin`;
CREATE TABLE `gllcts2_admin` (
  `admin_id` varchar(255) NOT NULL default '',
  `admin_pass` varchar(255) NOT NULL default '',
  `bodybgcolor` varchar(255) NOT NULL default '',
  `bodytxtcolor` varchar(255) NOT NULL default '',
  `bodylnkcolor` varchar(255) NOT NULL default '',
  `bodyvlnkcolor` varchar(255) NOT NULL default '',
  `bodyalnkcolor` varchar(255) NOT NULL default '',
  `lsttxtcolor` varchar(255) NOT NULL default '',
  `lstlnkcolor` varchar(255) NOT NULL default '',
  `lstvlnkcolor` varchar(255) NOT NULL default '',
  `lstalnkcolor` varchar(255) NOT NULL default '',
  `lsthvrcolor` varchar(255) NOT NULL default '',
  `catrowcolor1` varchar(255) NOT NULL default '',
  `cattxtcolor` varchar(255) NOT NULL default '',
  `catlnkcolor` varchar(255) NOT NULL default '',
  `cathvrcolor` varchar(255) NOT NULL default '',
  `pagetitle` varchar(255) NOT NULL default '',
  `listadmin` varchar(255) NOT NULL default '',
  `tablewidth` varchar(255) NOT NULL default '',
  `refresh` varchar(255) NOT NULL default '',
  `refreshtime` varchar(255) NOT NULL default '',
  `perpage` varchar(255) NOT NULL default '',
  `ispperpage` varchar(255) NOT NULL default '',
  `popupwidth` varchar(255) NOT NULL default '',
  `popupheight` varchar(255) NOT NULL default '',
  `bordercolor` varchar(255) NOT NULL default '',
  `rowcolor1` varchar(255) NOT NULL default '',
  `rowcolor2` varchar(255) NOT NULL default '',
  `imgbg` varchar(255) NOT NULL default '',
  `message` text NOT NULL,
  `showgroups` varchar(255) NOT NULL default '',
  `homepage` varchar(255) NOT NULL default '',
  `listamount` varchar(255) NOT NULL default '',
  `listips` text NOT NULL,
  `showtimeonline` int(255) NOT NULL default '0',
  KEY `admin_id` (`admin_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `gllcts2_admin`
--

INSERT INTO `gllcts2_admin` VALUES ('admin', 'testing', '#D1D7DB', '#000000', '#005C8C', '#ffffff', '#ffffff', '#000000', '#000000', '#000000', '#000000', '#005C8C', '#1C7DC6', '#ffffff', '#ffffff', '#ffffff', 'gllcTS2', 'admin@yoursite.com', '700', 'off', '60', '15', '10', '220', '380', '#000000', '#DCE8EE', '#C9DCE5', 'light', 'Set your PostUrl in the Server settings to<br>http://php.gryphonllc.com/gllcts2/webpost.php<br>to help development.<br><br>Download available <a href="http://www.thzclan.com/files/index.php?cat=29&file=53" target="_blank">here</a>.', 'no', 'index.php', '50', '127.0.0.1,', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gllcts2_channel`
--

DROP TABLE IF EXISTS `gllcts2_channel`;
CREATE TABLE `gllcts2_channel` (
  `channel_id` int(11) NOT NULL auto_increment,
  `server_ip` varchar(255) NOT NULL default '',
  `server_port` varchar(255) NOT NULL default '',
  `cl_number` int(255) NOT NULL default '0',
  `cl_codec` varchar(255) NOT NULL default '',
  `cl_parent` varchar(255) NOT NULL default '',
  `cl_order` int(255) NOT NULL default '0',
  `cl_maxuser` varchar(255) NOT NULL default '',
  `cl_name` varchar(255) NOT NULL default '',
  `cl_flags` varchar(255) NOT NULL default '',
  `cl_private` varchar(255) NOT NULL default '',
  `cl_topic` varchar(255) NOT NULL default '',
  `server_timestamp` varchar(255) NOT NULL default '',
  KEY `id` (`channel_id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gllcts2_group`
--

DROP TABLE IF EXISTS `gllcts2_group`;
CREATE TABLE `gllcts2_group` (
  `group_id` int(11) NOT NULL auto_increment,
  `group_ispname` varchar(255) NOT NULL default '',
  `group_ispurl` varchar(255) NOT NULL default '',
  `group_servers` int(255) NOT NULL default '0',
  `group_users` int(255) NOT NULL default '0',
  `server_timestamp` int(255) NOT NULL default '0',
  KEY `id` (`group_id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gllcts2_user`
--

DROP TABLE IF EXISTS `gllcts2_user`;
CREATE TABLE `gllcts2_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `server_ip` varchar(255) NOT NULL default '',
  `server_port` varchar(255) NOT NULL default '',
  `pl_id` varchar(255) NOT NULL default '',
  `pl_channelid` varchar(255) NOT NULL default '',
  `pl_pktssend` varchar(255) NOT NULL default '',
  `pl_bytessend` varchar(255) NOT NULL default '',
  `pl_pktsrecv` varchar(255) NOT NULL default '',
  `pl_bytesrecv` varchar(255) NOT NULL default '',
  `pl_pktloss` varchar(255) NOT NULL default '',
  `pl_ping` varchar(255) NOT NULL default '',
  `pl_logintime` varchar(255) NOT NULL default '',
  `pl_idletime` varchar(255) NOT NULL default '',
  `pl_channelprivileges` varchar(255) NOT NULL default '',
  `pl_playerprivileges` int(255) NOT NULL default '0',
  `pl_playerflags` varchar(255) NOT NULL default '',
  `pl_ipaddress` varchar(255) NOT NULL default '',
  `pl_nickname` varchar(255) NOT NULL default '',
  `pl_loginname` varchar(255) NOT NULL default '',
  `server_timestamp` varchar(255) NOT NULL default '',
  KEY `id` (`user_id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gllcts2_weblist`
--

DROP TABLE IF EXISTS `gllcts2_weblist`;
CREATE TABLE `gllcts2_weblist` (
  `server_id` int(11) NOT NULL auto_increment,
  `server_adminemail` varchar(255) NOT NULL default '',
  `server_isplinkurl` varchar(255) NOT NULL default '',
  `server_ispname` varchar(255) NOT NULL default '',
  `server_ispcountry` varchar(255) NOT NULL default '',
  `server_platform` varchar(255) NOT NULL default '',
  `server_version_major` int(255) NOT NULL default '0',
  `server_version_minor` int(255) NOT NULL default '0',
  `server_version_release` int(255) NOT NULL default '0',
  `server_version_build` int(255) NOT NULL default '0',
  `server_ip` varchar(255) NOT NULL default '',
  `server_port` varchar(255) NOT NULL default '',
  `server_name` varchar(255) NOT NULL default '',
  `server_uptime` int(255) NOT NULL default '0',
  `server_password` varchar(255) NOT NULL default '',
  `server_type1` varchar(255) NOT NULL default '',
  `server_type2` varchar(255) NOT NULL default '',
  `clients_current` int(255) NOT NULL default '0',
  `clients_maximum` int(255) NOT NULL default '0',
  `channels_current` varchar(255) NOT NULL default '',
  `server_linkurl` varchar(255) NOT NULL default '',
  `server_queryport` varchar(255) NOT NULL default '',
  `server_timestamp` varchar(255) NOT NULL default '',
  KEY `id` (`server_id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;
