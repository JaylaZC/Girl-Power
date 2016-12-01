<?php 
    /* send the submitted data to outlook */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    /* shows echo "All fields are required, please fill out the again." if information is not filled out */
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        }  
    /* shows echo "Email sent!" if all information filled out */  
   else {         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("jayla.cole@students.jmcss.org", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?>
