<?php
require_once __DIR__.'/../traits/Trait.php';
class Category {
    // protected $id;
    // public $name;
    use Id;
    public $icon;

    public function __construct(
        int $id,
        string $name
    )
    {
        $this->id = $id;
        $this->name = $name;
        // $this->setValues(($name));
        if($id == 1){
            $this->icon = '<i class="fa-solid fa-dog"></i>';
        }
        elseif($id == 2){
            $this->icon = '<i class="fa-solid fa-cat"></i>';
        }
    }
    // public function printCategory(){
    //     if($this->id = 1){
    //         echo ''
    //     }
    // }
    public function setValues($string){
        if(strpos(strtolower($string),'dog')){
            $this->id = 1;
            $this->icon = '<i class="fa-solid fa-dog"></i>';
            $this->name = 'dog';
        }
        elseif(strpos(strtolower($string),'cat')){
            $this->id = 2;
            $this->icon = '<i class="fa-solid fa-cat"></i>';
            $this->name = 'cat';
        }
    }
}

$categoryDog = new Category(1,'dog');
$categoryCat = new Category(2,'cat');