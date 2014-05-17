#!C:\Python\python.exe
# Fig. 35.21: fig35_21.py
# Program that retrieves and displays client-side cookie values

import Cookie
import os

print "Content-type: text/html"
print
print """
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en"
   lang="en">
   <head><title>Cookie values</title></head>
   <body style =
   font-family: Arial, sans-serif; font-size: 11pt">"""

try:
   cookie = Cookie.SimpleCookie()
   cookie.load( os.environ[ "HTTP_COOKIE" ] )
except KeyError:
   print """<span style = "font-weight: bold">Error reading cookies
   </span>"""
else:
   print """<span style = "font-weight: bold">
   The following data is saved in a cookie on your computer.
   </span><br /><br />"""

   print """<table style = "border-width: 5; border-spacing: 0; 
      padding: 10">"""
   
   for item in cookie.keys():
      print """<tr>
         <td style = "background-color: lavender">%s</td>
         <td style = "background-color: white">%s</td>
      </tr>""" % ( item, cookie[ item ].value )
   
   print """</table>"""

print """</body></html>"""

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