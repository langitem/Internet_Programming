#!C:\Perl\bin\perl
# Fig. 25.20: fig25_20.pl
# CGI program to query a MySQL database.

use CGI qw( :standard );
use DBI;
use DBD::mysql;

$dtd =
"-//W3C//DTD XHTML 1.0 Transitional//EN\"
   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd";

print( header() );

# retrieve author's ID and name from the posted form
$authorID = substr( param( "author" ), 0, 1 );
$authorName = substr( param( "author" ), 3 );

print( start_html( { dtd => $dtd,
                     title => "Books by $authorName" } ) );

$databaseHandle = DBI->connect( "DBI:mysql:books", 
                     "root", "", { RaiseError => 1 } );

# use AuthorID to find all the ISBNs related to this author
$query1 = "SELECT ISBN FROM AuthorISBN
           WHERE AuthorID = $authorID";

$statementHandle1 = $databaseHandle->prepare( $query1 );
$statementHandle1->execute();

print( h2( "$authorName" ) );

print( "<table border = 1>" );
print( th( "Title" ), th( "ISBN" ), th( "Publisher" ) );

while ( @isbn = $statementHandle1->fetchrow_array() ) {
   print( "<tr>\n" );

   # use ISBN to find the corresponding title
   $query2 = "SELECT Title, PublisherID FROM titles 
              WHERE ISBN = \'$isbn[ 0 ]\'";
   $statementHandle2 = $databaseHandle->prepare( $query2 );
   $statementHandle2->execute();
   @title_publisherID = $statementHandle2->fetchrow_array();

   # use PublisherID to find the corresponding PublisherName
   $query3 = "SELECT PublisherName FROM Publishers
              WHERE PublisherID = \'$title_publisherID[ 1 ]\'";

   $statementHandle3 = $databaseHandle->prepare( $query3 );
   $statementHandle3->execute();
   @publisher = $statementHandle3->fetchrow_array();


   # print resulting values
   print( td( $title_publisherID[ 0 ] ), "\n" );
   print( td( $isbn[ 0 ] ), "\n" );
   print( td( $publisher[ 0 ] ), "\n" );

   print( "</tr>" );

   $statementHandle2->finish();
   $statementHandle3->finish();
}

print( "</table>" );

print( end_html() );

$databaseHandle->disconnect();
$statementHandle1->finish();

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