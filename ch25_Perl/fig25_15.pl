#!C:\Perl\bin\perl
# Fig. 25.15: fig25_15.pl
# Program to track the number of times
# a Web page has been accessed.

use CGI qw( :standard );

open( COUNTREAD, "counter.dat" );
$data = <COUNTREAD>;
$data++;
close( COUNTREAD );

open( COUNTWRITE, ">counter.dat" );
print( COUNTWRITE $data );
close( COUNTWRITE );

print( header(), "<div style = \"text-align: center;
                                font-weight: bold\">" );
print( "You are visitor number", br() );

for ( $count = 0; $count < length( $data ); $count++ ) {
   $number = substr( $data, $count, 1 );
   print( img( { src => "images/$number.gif" } ), "\n" );
}

print( "</div>" );

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