<?php

$app['database']->insert('todo', [
    'name' => $_POST['name']
]);

header('Location: /');