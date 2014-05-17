#!c:\Python\python.exe
# Fig. 35.22: fig35_22.py
# A program to illustrate Python's database connectivity.
import MySQLdb

print "Content-type: text/html"
print
print """
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en"
   lang="en">
   <head><title>Select Author</title></head>
   <body style =
   font-family: Arial, sans-serif; font-size: 11pt">"""

try:
   connection = MySQLdb.connect( db = "books" )
except OperationalError:
   print "Unable to connect to database: %s" % message
else:
   cursor = connection.cursor()
   cursor.execute( "SELECT * FROM Authors" )
   authorList = cursor.fetchall()

   cursor.close()                  # close cursor
   connection.close()              # close connection
   
   print """
   <form method = "post" action = "/cgi-bin/fig35_23.py">
      <select name = "authorID">"""

   for author in authorList:
      print """<option value = %d>%s, %s</option>"""  \
            % ( author[ 0 ], author[ 2 ], author[ 1 ] )

   print """
      </select>
      <input type = "submit" value = "Execute Query" />
   </ form>"""

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