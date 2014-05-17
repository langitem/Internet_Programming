# Fig. 35.12: fig35_12.py
# Program searches a string using the regular expression module.

import re

searchString = "Testing pattern matches"

expression1 = re.compile( r"Test" )
expression2 = re.compile( r"^Test" )
expression3 = re.compile( r"Test$" )
expression4 = re.compile( r"\b\w*es\b" )
expression5 = re.compile( r"t[aeiou]", re.I )

if expression1.search( searchString ):
   print '"Test" was found.'
   
if expression2.match( searchString ):
   print '"Test" was found at the beginning of the line.'

if expression3.match( searchString ):
   print '"Test" was found at the end of the line.'
   
result = expression4.findall( searchString )

if result:
   print 'There are %d words(s) ending in "es":' % \
      ( len( result ) ),
   
   for item in result:
      print " " + item,

print

result = expression5.findall( searchString )

if result:
   print 'The letter t, followed by a vowel, occurs %d times:' % \
      ( len( result ) ),

   for item in result:
      print " " + item,

print      

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