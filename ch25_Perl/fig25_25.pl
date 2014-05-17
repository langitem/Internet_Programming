#!C:\Perl\bin\perl
# Fig. 25.25: fig25_25.pl
# Program to read cookies from the client's computer.

use CGI qw( :standard );

$dtd =
"-//W3C//DTD XHTML 1.0 Transitional//EN\"
   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd";

print( header() );
print( start_html( { dtd => $dtd,
                     title => "Read Cookies" } ) );

print( div( { style => "font-face: arial;
                        font-size: larger;
                        font-weight: bold" },
          "The following data is saved in a
           cookie on your computer." ), br() );

print( "<table style = \"background-color: #aaaaaa\"
               border = 5 cellpadding = 10
               cellspacing = 0>" );

%cookies = readCookies(); 
$color = $cookies{ Color };

foreach $cookieName ( "Name", "Height", "Color" ) {
   print( Tr( td( { style => "background-color: $color" },
                  $cookieName ),
              td( $cookies{ $cookieName } ) ) );
}

print( "<table>" );
print( end_html() );

sub readCookies
{
   @cookieArray = split( "; ", $ENV{ 'HTTP_COOKIE' } );

   foreach ( @cookieArray ) {
      ( $cookieName, $cookieValue ) = split( "=", $_ );
      $cookieHash{ $cookieName } = $cookieValue;
   } 
   
   return %cookieHash; 
}

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