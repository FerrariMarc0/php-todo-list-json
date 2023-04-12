<?php
$todo_list= file_get_contents(__DIR__.'/todo.json');
$todo_list= json_decode($todo_list, true);
var_dump($todo_list);

$todo_list[2]["text"]= "react";
$todo_list= json_decode($todo_list);

file_put_contents(__DIR__.'/todo.json', $todo_list);

var_dump($todo_list);

header('Content-Type: application/json');
echo $todo_list;