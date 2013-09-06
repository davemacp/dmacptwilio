<?php
         
    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Hi, you've reached the offices of LiveCA, Chartered Accountant.</Say>
    <Gather numDigits="1" action="https://github.com/davemacp/dmacptwilio/blob/master/Test2.php" method="POST">
        <Say>To speak to one of us, press 1.  To leave a message, press 2. Press any other key to start 	over.</Say>
    </Gather>
</Response>
