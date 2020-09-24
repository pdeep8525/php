<?php

$users = $app['database']->selectAll('todo');

require 'views/index.view.php';