<?php

$link = mysql_connect('localhost', 'root', '141512')
	or die('error connect' . mysql_error());
mysql_select_db('site') or die ('error db select');