<?php

require_once '10_baseClass.php';
require_once '11_subClass.php';

$baseObj = new baseClass();
$subObj = new subClass();

# PUBLIC PROPERTY

// Accessing public property from base class and sub class:

// print $baseObj->publicProperty . '<br>';
// print $subObj->publicProperty . '<br>';

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# PROTECTED PROPERTY

// Accessing protected property from base class and sub class:

// print $baseObj->protectedProperty . '<br>';
// print $subObj->protectedProperty . '<br>';

// We cannot access protected property directly from base class or sub class. If we want to we can use the getter method to get the protected property and return it but the method should be public.

// print $baseObj->getProtectedProperty() . '<br>';
// print $subObj->getProtectedProperty() . '<br>';

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# PRIVATE PROPERTY

// Accessing private property from base class and sub class:

// print $baseObj->privateProperty . '<br>';
// print $subObj->privateProperty . '<br>';

// We cannot access private property directly from base class or sub class. If we want to we can use the getter method to get the private property and return it but the method should be public.

// print $baseObj->getPrivateProperty() . '<br>';
// print $subObj->getPrivateProperty() . '<br>';


// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# METHOD VISIBILITY

// We can access the protected method in a base class by returning it inside the sub class public method

// print $subObj->getProtectedMethod();