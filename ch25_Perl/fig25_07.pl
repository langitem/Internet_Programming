#!C:\Perl\bin\perl
# Fig 25.7: fig25_07.pl
# Searches using the matching operator and regular expressions.

$search = "Now is is the time";
print( "Test string is: '$search'\n\n" );

if ( $search =~ /Now/ ) {
   print( "String 'Now' was found.\n" );
}

if ( $search =~ /^Now/ ) {
   print( "String 'Now' was found at the beginning of the line." );
   print( "\n" );
}

if ( $search =~ /Now$/ ) {
   print( "String 'Now' was found at the end of the line.\n" );
}

if ( $search =~ /\b ( \w+ ow ) \b/x ) {
   print( "Word found ending in 'ow': $1 \n" );
}

if ( $search =~ /\b ( \w+ ) \s ( \1 ) \b/x ) {
   print( "Repeated words found: $1 $2\n" );
}

@matches = ( $search =~ / \b ( t \w+ ) \b /gx );
print( "Words beginning with 't' found: @matches\n" );

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