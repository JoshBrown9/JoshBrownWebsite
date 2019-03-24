 <?php
            if (isset($_REQUEST['email']))
            {
            //send email
            $email = $_REQUEST['email'] ; 
            $subject = $_REQUEST['subject'] ;
            $message = $_REQUEST['message'] ;
            mail( "4amcoder@gmail.com", "Subject: $subject",
            $message, "From: $email" );
            }
header("Location: http://www.brown16p.myweb.cs.uwindsor.ca/portfolio.html");
die();

?>
