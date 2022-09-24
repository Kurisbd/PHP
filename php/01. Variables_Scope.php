<?php
//Variables Scope
// 01. local
// 02. global
// 03. static

// 01. Local variables (local scope)
// 02. Global variables (special global scope)
// 03. Static variables (local scope)
// 04. Function parameters (local scope)


//1. Local Scope Variables
function local_scope()
{
    $count = 1;
    echo $count++ . "<br>";
}

local_scope();


// 02. Global variables (special global scope)
//01. Method One
$count = 0;
function global_scope()
{
    global $count;
    echo $count++ . "<br>";
}

global_scope();
echo $count;
//02. Method Two

$count = 0;

function global_scope_two()
{
    echo $GLOBALS['count']++ . "<br/>";
}

global_scope_two();
echo $count;

// 03. Static variables (local scope)

function counter()
{
    static $count = 0;
    echo $count;
    $count++;
}

// 04. Function parameters (local scope)

function foo()
{
    $fruit = 'apple';
    $bar = function () {
        // $fruit cannot be accessed inside here
        $animal = 'lion';
    };
    // $animal cannot be accessed outside here
}