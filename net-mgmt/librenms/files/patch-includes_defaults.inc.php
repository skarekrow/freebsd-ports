--- includes/defaults.inc.php.orig	2015-06-15 11:23:55 UTC
+++ includes/defaults.inc.php
@@ -31,7 +31,7 @@ $config['project_name']     = "LibreNMS"
 $config['project_id']     = strtolower($config['project_name']);
 
 $config['temp_dir']      = "/tmp";
-$config['install_dir']   = "/opt/" . $config['project_id'];
+$config['install_dir']   = "/usr/local/www/" . $config['project_id'];
 $config['log_dir']       = $config['install_dir'] . "/logs";
 
 // What is my own hostname (used to identify this host in its own database)
@@ -39,26 +39,26 @@ $config['own_hostname'] = "localhost";
 
 // Location of executables
 
-$config['rrdtool']          = "/usr/bin/rrdtool";
-$config['fping']            = "/usr/bin/fping";
+$config['rrdtool']          = "/usr/local/bin/rrdtool";
+$config['fping']            = "/usr/local/sbin/fping";
 $config['fping_options']['retries'] = 3;
 $config['fping_options']['timeout'] = 500;
-$config['fping6']           = "/usr/bin/fping6";
-$config['snmpwalk']         = "/usr/bin/snmpwalk";
-$config['snmpget']          = "/usr/bin/snmpget";
-$config['snmpbulkwalk']     = "/usr/bin/snmpbulkwalk";
+$config['fping6']           = "/usr/local/sbin/fping6";
+$config['snmpwalk']         = "/usr/local/bin/snmpwalk";
+$config['snmpget']          = "/usr/local/bin/snmpget";
+$config['snmpbulkwalk']     = "/usr/local/bin/snmpbulkwalk";
 $config['whois']            = "/usr/bin/whois";
-$config['ping']             = "/bin/ping";
-$config['mtr']              = "/usr/bin/mtr";
-$config['nmap']             = "/usr/bin/nmap";
-$config['nagios_plugins']   = "/usr/lib/nagios/plugins";
-$config['ipmitool']         = "/usr/bin/ipmitool";
-$config['virsh']            = "/usr/bin/virsh";
-$config['dot']              = "/usr/bin/dot";
-$config['unflatten']        = "/usr/bin/unflatten";
-$config['neato']            = "/usr/bin/neato";
-$config['sfdp']             = "/usr/bin/sfdp";
-$config['svn']              = "/usr/bin/svn";
+$config['ping']             = "/sbin/ping";
+$config['mtr']              = "/usr/local/bin/mtr";
+$config['nmap']             = "/usr/local/bin/nmap";
+$config['nagios_plugins']   = "/usr/local/libexec/nagios";
+$config['ipmitool']         = "/usr/local/bin/ipmitool";
+$config['virsh']            = "/usr/local/bin/virsh";
+$config['dot']              = "/usr/local/bin/dot";
+$config['unflatten']        = "/usr/local/bin/unflatten";
+$config['neato']            = "/usr/local/bin/neato";
+$config['sfdp']             = "/usr/local/bin/sfdp";
+$config['svn']              = "/usr/bin/svnlite";
 
 // Memcached - Keep immediate statistics
 
