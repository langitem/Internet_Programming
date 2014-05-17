#!C:\Perl\bin\perl
# Fig. 25.5: fig25_05.pl
# Program to demonstrate arrays in Perl.

@array = ( "Bill", "Bobby", "Sue", "Michelle" );

print( "The array contains: @array\n" );
print( "Printing array outside of quotes: ", @array, "\n\n" );

print( "Third element: $array[ 2 ]\n" );

$number = 3;
print( "Fourth element: $array[ $number ]\n\n" );

@array2 = ( 'A' .. 'Z' );
print( "The range operator is used to create a list of\n" );
print( "all capital letters from A to Z:\n" );
print( "@array2 \n\n" );

$array3[ 3 ] = "4th";
print( "Array with just one element initialized: @array3 \n\n" );

print( 'Printing literal using single quotes: ' );
print( '@array and \n', "\n" );

print( "Printing literal using backslashes: " );
print( "\@array and \\n\n" );

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