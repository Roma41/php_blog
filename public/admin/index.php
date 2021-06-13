<?php

require_once('auth.php');

require_auth();
echo 'Success';
require_once $_SERVER['DOCUMENT_ROOT']."/views/new_article.php";