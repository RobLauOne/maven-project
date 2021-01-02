<?php
echo "<html>";
echo "<head>";
// old version of jQuery not hosted with google
echo "<script src=\"https://code.jquery.com/jquery-3.3.0.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>";
echo "<title>False Flags</title>";
echo "</head><body>";

echo "<h1>False Flags Intranet Landing Page</h1>";
echo "<p>This Intranet is full of false flags</p>";
echo "<ul><li>It is used to test detection capabilities</li>";
echo "<li>It is used to check alerts are working</ul>";

// Prohibited Oracle database connection
echo "<p>Open an database connection to an Oracle database server</p>";
echo "@oci_connect"; // Connect to Oracle istance

// Use of an unencrypted protocol
echo "<p>Link to Full Intranet</p>";
echo "<a href='http://production.lanstrom.green.jmc'>Full Intranet</a>";

// Prohibited link to youtube
echo "Click here to for Company training videos";
echo "<a href='https://youtu.be/onGRNJb_0Y8'>Walking</a>";

// Prohibited language
echo "This system will be switing to 2FA in the next month";			//Tim: expect this to cause our IDAM to crack a shit.
echo "<a href='http://www.google.com/landing/2step/'>Find out more</a>";
?>
