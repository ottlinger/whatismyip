<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<head>
    <title>WhatIsMyIP &mdash; Show me please</title>
</head>
<body>
<h1>WhatIsMyIP?</h1>

<script>
    function copyToClipboard(text) {
        window.prompt("Copy to clipboard: Ctrl+C, Enter", text);
    }
</script>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
echo '<h2>Your IP address is: 🔑 ' . $ip . '</p><h2/>';
echo '<p>Copy to clipboard <button id="whatismyip" onclick="copyToClipboard(document.getElementById(\'whatismyip\').innerHTML)">' . $ip . '</button></p>';

echo '<h2>Your browser is: 🤖 ' . $_SERVER['HTTP_USER_AGENT'] . '</h2>';

echo '<hr/>';
echo '<pre>Proudly served by <a href="https://www.github.com/ottlinger/whatismyip"i target="_blank">WhatIsMyIP</a> at ' . date("Y-m-d H:i:s") . '</pre>';
?>


</body>
</html>
