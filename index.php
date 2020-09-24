<?php

require 'core/bootstrap.php';

//comment
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
