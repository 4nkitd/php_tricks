<?php

echo file_get_contents($_GET['url']);
// WARNING: You REALLY should write something to whitelist or otherwise limit what the function will accept, or it could be a security danger to your server (people could read any file).
