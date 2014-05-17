#!C:\Perl\bin\perl
# Fig. 25.19: fig25_19.pl
# CGI program that generates a list of authors.

use CGI qw( :standard );
use DBI;
use DBD::mysql;

$dtd =
"-//W3C//DTD XHTML 1.0 Transitional//EN\"
   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd";

print( header() );

print( start_html( { dtd => $dtd,
                     title => "Authors" } ) );

# connect to "books" database, no password needed
$databaseHandle = DBI->connect( "DBI:mysql:books", 
                     "root", "", { RaiseError => 1 } );

# retrieve the names and IDs of all authors
$query = "SELECT FirstName, LastName, AuthorID 
          FROM Authors ORDER BY LastName";

# prepare the query for execution, then execute it
# a prepared query can be executed multiple times
$statementHandle = $databaseHandle->prepare( $query );
$statementHandle->execute();

print( h2( "Choose an author:" ) );

print( start_form( { action => 'fig25_20.pl' } ) );

print( "<select name = \"author\">\n" );

# drop-down list contains the author and ID number
# method fetchrow_array returns a single row from the result
while ( @row = $statementHandle->fetchrow_array() ) {
   print( "<option>" );
   print( "$row[ 2 ]. $row[ 1 ], $row[ 0 ]" );
   print( "</option>" );
}

print( "</select>\n" );

print( submit( { value => 'Get Info' } ) );
print( end_form(), end_html() );

# clean up -- close the statement and database handles
$databaseHandle->disconnect();
$statementHandle->finish();

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