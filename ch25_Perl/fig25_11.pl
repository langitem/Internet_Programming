#!C:\Perl\bin\perl
# Fig. 25.11: fig25_11.pl
# Program to display CGI environment variables.

use CGI qw( :standard );

$dtd =
"-//W3C//DTD XHTML 1.0 Transitional//EN\"
   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd";

print( header() );

print( start_html( { dtd => $dtd,
          title => "Environment Variables..." } ) );

print( "<table style = \"border: 0; padding: 2;
        font-weight: bold\">" );

print( Tr( th( "Variable Name" ),
           th( "Value" ) ) );

print( Tr( td( hr() ), td( hr() ) ) );

foreach $variable ( sort( keys( %ENV ) ) ) {

   print( Tr( td( { style => "background-color: #11bbff" }, 
                    $variable ),
              td( { style => "font-size: 12pt" }, 
                        $ENV{ $variable } ) ) );

   print( Tr( td( hr() ), td( hr() ) ) );
}

print( "</table>" );
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