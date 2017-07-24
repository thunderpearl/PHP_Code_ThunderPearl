


<?php
    function func_notice($num, $str, $file, $line) {
        print "Encountered notice $num in $file, line $line: $str\n";
    }

    function func_error($num, $str, $file, $line) {
        print "Encountered error $num in $file, line $line: $str\n";
    }

    set_error_handler("func_notice", E_NOTICE);
    set_error_handler("func_notice", E_NOTICE);
    set_error_handler("func_notice", E_NOTICE);

    echo $foo;
    set_error_handler("func_notice", E_NOTICE);
    echo $foo;
    restore_error_handler();
    echo $foo;
    restore_error_handler();
    echo $foo;
    restore_error_handler();
    echo $foo;
    restore_error_handler();
    echo $foo;
?>