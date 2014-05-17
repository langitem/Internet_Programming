#!C:\Perl\bin\perl
# Fig. 25.22: fig25_22.pl
# Program to write a cookie to a client’s machine.

use CGI qw( :standard );

$name = param( "name" );
$height = param( "height" );
$color = param( "color" );

$expires = gmtime( time() + 86400 );

print( "Set-Cookie: Name=$name; expires=$expires; path=\n" );
print( "Set-Cookie: Height=$height; expires=$expires; path=\n" );
print( "Set-Cookie: Color=$color; expires=$expires; path=\n" );

$dtd =
"-//W3C//DTD XHTML 1.0 Transitional//EN\"
   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd";

print( header() );
print( start_html( { dtd => $dtd,
                     title => "Cookie Saved" } ) );

print <<End_Data;
<div style = "font-face: arial; font-size: larger">
   The cookie has been set with the following data:
</div><br /><br />

<span style = "color: blue">
Name: <span style = "color: black">$name</span><br />
Height: <span style = "color: black">$height</span><br />
Favorite Color:</span>

<span style = "color: $color"> $color</span><br />
<br />Click <a href = "fig25_25.pl">here</a>
to read saved cookie.
End_Data

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