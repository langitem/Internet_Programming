# Fig. 35.10: fig35_10.py
# Program to illustrate use of strings

# simple string assignments
string1 = "This is a string."
print string1

string2 = "This is a second string."
print string2

# string concatenation
string3 = string1 + " " + string2
print string3

# using operators
string4 = '*'
print "String with an asterisk: " + string4
string4 *= 10
print "String with 10 asterisks: " + string4

# using quotes
print "This is a string with \"double quotes.\""
print 'This is another string with "double quotes."'
print 'This is a string with \'single quotes.\''
print "This is another string with 'single quotes.'"
print """This string has "double quotes" and 'single quotes.'"""

# string formatting
name = raw_input( "Enter your name: " )
age = raw_input( "Enter your age: " )
print "Hello, %s, you are %s years old." % ( name, age )

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