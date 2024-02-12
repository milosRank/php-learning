<?php 
    echo phpversion();
    $test = 5;
    var_dump($test);
    var_dump(5);
    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);

    // Static scope
    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
    }
    
    myTest();
    myTest();
    myTest();

    var_dump(__LINE__);
    
    // PHP funcitons is next chapter
?>