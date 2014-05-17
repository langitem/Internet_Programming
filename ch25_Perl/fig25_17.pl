#!C:\Perl\bin\perl
# Fig. 25.17: fig25_17.pl
# Program to search a database for usernames and passwords.

use CGI qw( :standard );

$dtd =
"-//W3C//DTD XHTML 1.0 Transitional//EN\"
   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd";

$testUsername = param( "username" );
$testPassword = param( "password" );

open( FILE, "password.txt" ) ||
   die( "The database could not be opened." );

while ( $line = <FILE> ) {
   chomp( $line );
   ( $username, $password ) = split( ",", $line );
   
   if ( $testUsername eq $username ) {
      $userVerified = 1;

      if ( $testPassword eq $password ) {
         $passwordVerified = 1;
         last;
      }
   } 
}

close( FILE );

print( header() );
print( start_html( { dtd => $dtd,
                     title => "Password Analyzed" } ) );

if ( $userVerified && $passwordVerified ) {
   accessGranted();
}
elsif ( $userVerified && !$passwordVerified ) {
   wrongPassword();
}
else {
   accessDenied();
}

print( end_html() );

sub accessGranted
{
   print( div( { style => "font-face: arial;
                           color: blue;
                           font-weight: bold" },
      "Permission has been granted,
       $username.", br(), "Enjoy the site." ) );
}

sub wrongPassword
{
   print( div( { style => "font-face: arial;
                           color: red;
                           font-weight: bold" },
      "You entered an invalid password.", br(), 
      "Access has been denied." ) );
}

sub accessDenied
{
   print( div( { style => "font-face: arial;
                           color: red; 
                           font-size: larger;
                           font-weight: bold" },
      "You have been denied access to this site." ) );
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