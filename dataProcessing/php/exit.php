<?php
setcookie("log", "user", time() - 3600 * 24 * 30, "/");
echo true;