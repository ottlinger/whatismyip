<!DOCTYPE HTML>
<html lang="en">
<meta charset="utf-8"/>
<head>
    <title>WhatIsMyIP &mdash; Show me, please</title>
</head>
<body>
<h1>WhatIsMyIP?</h1>

<script>
    function copyToClipboard(dataTargetId) {
        var copyText = document.getElementById(dataTargetId);
        var textArea = document.createElement("textarea");
        textArea.value = copyText.innerText;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("Copy");
        textArea.remove();
    }
</script>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
echo '<h2>Your IP address is: 🔑 <span id=\'ipadr\'>'.$ip.'</span></h2>';
echo '<p><button onclick="copyToClipboard(\'ipadr\')">COPY2Clipboard</button></p>';

echo '<h2>Your browser is: 🤖 '.$_SERVER['HTTP_USER_AGENT'].'</h2>';

echo '<hr/>';
echo '<pre>Proudly served by <a href="https://www.github.com/ottlinger/whatismyip" target="_blank">WhatIsMyIP</a> at '.date('Y-m-d H:i:s').'</pre>';
?>

</body>
</html>
