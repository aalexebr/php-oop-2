<?php

class Category {
    public $id;
    public $name;

    public function __construct(
        int $id,
        string $name
    )
    {
        $this->id = $id;
        $this->name = $name;
    }
    // public function printCategory(){
    //     if($this->id = 1){
    //         echo ''
    //     }
    // }
}