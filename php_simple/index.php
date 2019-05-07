<?php
$page = $_REQUEST['page'] ?? null;
if($page === 'info')
{
    echo phpinfo();
    die(0);
}

echo '<h1>Hello, World!</h1>';

echo '<p>ABC = '.getenv('ABC').'</p>';
echo '<p>CDE = '.getenv('CDE').'</p>';