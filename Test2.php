<?php
 
    // if the caller pressed anything but 1 send them back
    if($_REQUEST['Digits'] != '1') {
        header("Location: Test1.php");
        die;
    }
     
    // the user pressed 1, connect the call to 902-440-3989 
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Dial>+19024403989</Dial>
    <Say>Something messed up! It was probably Dave's fault. Try again later.</Say>
</Response>
