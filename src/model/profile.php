<?php 

class profile { 

    public $id;
    public $name;
    public $description;
    public $followers;
    public $imageUrl;
    
    public function __construct($id, $name, $description, $followers, $imageUrl) {
    	$this->id = $id;
    	$this->name = $name;
    	$this->description = $description;
    	$this->followers = $followers;
    	$this->imageUrl = $imageUrl;
    }

}