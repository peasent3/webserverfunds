<?php

function controlLED($state) {

    shell_exec("gpio toggle 7");
    $state = shell_exec("gpio read 7");
    echo "LED is now $state";
}

// Check if the form is submitted and the 'ledToggle' parameter is set
if (isset($_POST['ledToggle'])) {
    // Get the value of the 'ledToggle' parameter
    $ledState = $_POST['ledToggle'];

    // Call the function to control the LED with the received state
    controlLED($ledState);
} else {
    // Handle the case when the form is not submitted
    echo "Form not submitted.";
}
?>