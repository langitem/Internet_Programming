#!C:\Perl\bin\perl
# Fig. 25.4: fig25_04.pl
# Program to illustrate the use of scalar variables.

$number = 5;
print( "The value of variable \$number is: $number\n\n" );

$number += 5;
print( "Variable \$number after adding 5 is: $number\n" );

$number *= 2;
print( "Variable \$number after multiplying by 2 is: " );
print( "$number\n\n\n" );

# using an uninitialized variable in the context of a string
print( "Using a variable before initializing: $variable\n\n" );

# using an uninitialized variable in a numeric context
$test = $undefined + 5;
print( "Adding uninitialized variable \$undefined " );
print( "to 5 yields: $test\n" );

# using strings in numeric contexts
$string = "A string value";
$number += $string;
print( "Adding a string to an integer yields: $number\n" );

$string2 = "15charactersand1";
$number2 = $number + $string2;
print( "Adding $number to string \"$string2\" yields: " );
print( "$number2\n" ); 

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