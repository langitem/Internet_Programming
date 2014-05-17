#!C:\Perl\bin\perl
# Fig. 25.6: fig25_06.pl
# Program to demonstrate the eq, ne, lt, gt operators.

@fruits = qw( apple orange banana );

foreach $item ( @fruits ) {

   if ( $item eq "banana" ) {
      print( "String '$item' matches string 'banana'\n" );
   }

   if ( $item ne "banana" ) {
      print( "String '$item' does not match string 'banana'\n" );
   }

   if ( $item lt "banana" ) {
      print( "String '$item' is less than string 'banana'\n" );
   }

   if ( $item gt "banana" ) {
      print( "String '$item' is greater than string 'banana'\n" );
   }
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