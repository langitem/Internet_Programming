# Fig. 35.15: fig35_15.py
# A simple program that illustrates exceptions.

def getFloat():
   return float( raw_input( "Enter a number: " ) )

number1 = number2 = None

while number1 == None:
   try:
      number1 = getFloat()
   except ValueError:
      print "Value entered was not a number"

while number2 == None:
   try:
      number2 = getFloat()
   except ValueError:
      print "Value entered was not a number"

try:
   result = number1 / number2
except ZeroDivisionError:
   print "Cannot divide by zero!"
else:
   print "The result of division is: %f" % result
   

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