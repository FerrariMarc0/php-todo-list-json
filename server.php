<?php
$param= isset($_GET['index']) ? $_GET['index'] : NULL;
$newTodo= isset($_POST['newTodo']) ? $_POST['newTodo'] : NULL;
var_dump($newTodo);
die();

$todo_list= file_get_contents(__DIR__.'/todo.json');
$todo_list= json_decode($todo_list, true);

if($newTodo !== NULL){
    $todo_list[]= [
        "text" => $newTodo,
        "done" => true
    ];
}
/* var_dump($todo_list); */

/* $todo_list[0]['text']= "HTML"; */

$todo_list= json_encode($todo_list);

file_put_contents(__DIR__.'/todo.json', $todo_list);
/* if($param !== NULL){
    $todo_list= $todo_list[$param];
} */
/* var_dump($todo_list); */

header('Content-Type: application/json');
echo $todo_list;