<?php

interface Dummy
{
    public function hello(int $msg);
}

class MyDummy implements Dummy 
{
    public function hello(string $msg) {
        echo "Hello {$msg}";
    }
}
