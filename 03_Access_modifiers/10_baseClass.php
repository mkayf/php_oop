<?php

class baseClass {
    public $publicProperty = 'Public property can be accessed anywhere in the code';

    protected $protectedProperty = 'Protected property can only accessed in the base class and the subclass';

    private $privateProperty = 'Private property can only be accessed in the base class';

    public function getProtectedProperty(){
        return $this->protectedProperty;
    }

    public function getPrivateProperty(){
        return $this->privateProperty;
    }

    protected function protectedMethod(){
        return 'This is a protected method';
    }
}