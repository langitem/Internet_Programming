#!C:\Perl\bin\perl
# Fig. 25.13: fig25_13.pl
# Program to read information sent to the server
# from the form in the fig25_12.html document.

use CGI qw( :standard );

$os = param( "os" );
$firstName = param( "fname" );
$lastName = param( "lname" );
$email = param( "email" );
$phone = param( "phone" );
$book = param( "book" );

$dtd =
"-//W3C//DTD XHTML 1.0 Transitional//EN\"
   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd";

print( header() );

print( start_html( { dtd => $dtd,
                     title => "Form Results" } ) );

if ( $phone =~ / ^ \( \d{3} \) \d{3} - \d{4} $ /x ) {
   print( "Hi " );
   print( span( { style => "color: blue; font-weight: bold" }, 
                  $firstName ) );
   print( "!" );

   print( "\nThank you for completing the survey." );
   print( br(), "You have been added to the " );

   print( span( { style => "color: blue; font-weight: bold" },
                  $book ) );
   print( " mailing list.", br(), br() );

   print( span( { style => "font-weight: bold" },
                 "The following information has
                  been saved in our database: " ), br() );

   print( table(
          Tr( th( { style => "background-color: #ee82ee" }, 
                    "Name" ),
              th( { style => "background-color: #9370db" }, 
                    "E-mail" ),
              th( { style => "background-color: #4169e1" }, 
                    "Phone" ),
              th( { style => "background-color: #40e0d0" }, 
                    "OS" ) ),

          Tr( { style => "background-color: #c0c0c0" },
              td( "$firstName $lastName" ),
              td( $email ),
              td( $phone ),
              td( $os ) ) ) );

   print( br() );

   print( div( { style => "font-size: x-small" },
            "This is only a sample form. You have not been
             added to a mailing list." ) );  
}
else {
   print( div( { style => "color: red; font-size: x-large" },
             "INVALID PHONE NUMBER" ), br() );

   print( "A valid phone number must be in the form " );
   print( span( { style => "font-weight: bold" },
                  "(555)555-5555." ) );

   print( div( { style => "color: blue" },
             "Click the Back button, and enter a
              valid phone number and resubmit." ) );
   print( br(), br() );
   print( "Thank you." );
}

print( end_html() );

#**************************************************************************
#* (C) Copyright 1992-2004 by Deitel & Associates, Inc. and               *
#* Pearson Education, Inc. All Rights Reserved.                           *
#*                                                                        *
#* DISCLAIMER: The authors and publisher of this book have used their     *
#* best efforts in preparing the book. These efforts include the          *
#* development, research, and testing of the theories and programs        *
#* to determine their effectiveness. The authors and publisher make       *
#* no warranty of any kind, expressed or implied, with regard to these    *
#* programs or to the documentation contained in these books. The authors *
#* and publisher shall not be liable in any event for incidental or       *
#* consequential damages in connection with, or arising out of, the       *
#* furnishing, performance, or use of these programs.                     *
#**************************************************************************