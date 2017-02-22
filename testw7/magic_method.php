
<?php
// Declare a simple class
class TestClass
{
    public $foo;

    public $country = 'russia';



    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass;


echo serialize($class);
?>
