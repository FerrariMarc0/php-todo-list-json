<?php
$param= isset($_GET['index']) ? $_GET['index'] : NULL;
$todo_list= file_get_contents(__DIR__.'/todo.json');
$todo_list= json_decode($todo_list, true);
/* var_dump($todo_list); */

/* $todo_list[0]['text']= "HTML"; */
if($param !== NULL){
    $todo_list= $todo_list[$param];
}
$todo_list= json_encode($todo_list);

/* file_put_contents(__DIR__.'/todo.json', $todo_list);

var_dump($todo_list); */

header('Content-Type: application/json');
echo $todo_list;