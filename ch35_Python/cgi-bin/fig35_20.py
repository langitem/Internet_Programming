#!C:\Python\python.exe
# Fig. 35.20: fig35_20.py
# Writing a cookie to a client's machine

import cgi
import Cookie
import time

def printContent():
   print "Content-type: text/html"
   print
   print """
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en"
   lang="en">
   <head><title>Cookie values</title></head>"""

form = cgi.FieldStorage()  # get form information

try:  # extract form values
   name = form[ "name" ].value
   height = form[ "height" ].value
   color = form[ "color" ].value
except KeyError:
   printContent()
   print """<body><h3>You have not filled in all fields.
   <span style = "color: blue"> Click the Back button, 
   fill out the form and resubmit.<br /><br />
   Thank You. </span></h3>"""
else:

   # construct cookie expiration date and path
   expirationFormat = "%A, %d-%b-%y %X %Z"
   expirationTime = time.localtime( time.time() + 300 )  
   expirationDate = time.strftime( expirationFormat,
      expirationTime )
   path = "/"               

   # construct cookie contents
   cookie = Cookie.SimpleCookie()

   cookie[ "Name" ] = name
   cookie[ "Name" ][ "expires" ] = expirationDate
   cookie[ "Name" ][ "path" ] = path

   cookie[ "Height" ] = height
   cookie[ "Height" ][ "expires" ] = expirationDate
   cookie[ "Height" ][ "path" ] = path

   cookie[ "Color" ] = color
   cookie[ "Color" ][ "expires" ] = expirationDate
   cookie[ "Color" ][ "path" ] = path
    
   # print cookie to user and page to browser
   print cookie

   printContent()
   print """<body style = "background-image: /images/back.gif;
   font-family: Arial,sans-serif; font-size: 11pt">
   The cookie has been set with the following data: <br /><br /> 

   <span style = "color: blue">Name:</span> %s<br />
   <span style = "color: blue">Height:</span> %s<br />
   <span style = "color: blue">Favorite Color:</span>
   <span style = "color: %s"> %s</span><br />""" \
   % ( name, height, color, color )

   print """<br /><a href= "fig35_21.py">
   Read cookie values</a>"""

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