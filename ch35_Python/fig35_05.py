# Fig. 35.5: fig35_05.py
# Program to illustrate basic data types, control statements and
# functions.

def greatestCommonDivisor( x, y ):
   gcd = min( x, y )

   while gcd >= 1:

      if ( x % gcd ) == ( y % gcd ) == 0:
         return gcd
      else:
         gcd -= 1
         
def determineColor( color ):
   
   if color == "green":
      print "You entered green!"
   elif color == "purple":
      print "You entered purple!"
   else:
      print "You did not enter green or purple."

number1 = int( raw_input( "Enter a positive integer: " ) )
number2 = int( raw_input( "Enter a positive integer: " ) )

print "The greatest common divisor is", \
   greatestCommonDivisor( number1, number2 )

for entry in range( 5 ):
   colorChoice = raw_input( "\nEnter your favorite color: " )
   determineColor( colorChoice )

########################################################################## 
# (C) Copyright 1992-2004 by Deitel & Associates, Inc. and               #
# Pearson Education, Inc. All Rights Reserved.                           #
#                                                                        #
# DISCLAIMER: The authors and publisher of this book have used their     #
# best efforts in preparing the book. These efforts include the          #
# development, research, and testing of the theories and programs        #
# to determine their effectiveness. The authors and publisher make       #
# no warranty of any kind, expressed or implied, with regard to these    #
# programs or to the documentation contained in these books. The authors #
# and publisher shall not be liable in any event for incidental or       #
# consequential damages in connection with, or arising out of, the       #
# furnishing, performance, or use of these programs.                     #
##########################################################################