<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<head>
    <title>WhatIsMyIP &mdash; Show me please</title>
</head>
<body>
<h1>WhatIsMyIP?</h1>
<?php

echo '<h2>Your IP address is: 🔑 '.$_SERVER['REMOTE_ADDR'].'</h2>';
echo '<h2>Your browser is: 🤖 '.$_SERVER['HTTP_USER_AGENT'].'</h2>';

echo '<hr/>';
echo '<pre>Proudly served by <a href="https://www.github.com/ottlinger/whatismyip"i target="_blank">WhatIsMyIP</a> at '.date("Y-m-d H:i:s").'</pre>';
?>
</body>
</html>
