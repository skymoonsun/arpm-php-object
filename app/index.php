<?php
class Foo
{
    /** @var string **/
    private $sHelloString = 'Hello world!';

    /** @var array **/
    public $aArray = [];

    public function printString(): void
    {
        echo $this->helloString;
    }

    /** Write here the method */
    public function __toString(): string
    {
        $properties = get_object_vars($this);
        $output = '';

        foreach($properties as $name => $value) {
            if(is_array($value)){
                $output .= "$name: ".implode(', ', $value)."\n";
            }else{
                $output .= "$name: $value\n";
            }
        }

        return $output;
    }

}

$foo = new Foo();
echo $foo;