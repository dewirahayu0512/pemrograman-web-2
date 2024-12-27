<!--visibility.php -->
<?php

class visibility{
    public $public;
    public $private;
    protected $protected;

    function tampilkanProperty(){
        echo "Ini diakses di dalam kelas <br>";
        echo "public :" . $this->public . '<br>';
        echo "protected :" . $this->protected . '<br>';
        echo "private :" . $this->private . '<br>';
    }

}