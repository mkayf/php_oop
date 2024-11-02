<?php

class subClass extends baseClass{
    public function getProtectedMethod(){
        return $this->protectedMethod();
    }
}