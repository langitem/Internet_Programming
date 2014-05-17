#!c:\Python\python.exe
# Fig. 35.23: fig35_23.py
# A program to illustrate Python's database connectivity.

import cgi
import MySQLdb
import sys

# get results from form
form = cgi.FieldStorage()

print "Content-type: text/html"
print
print """
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="en"
   lang="en">
   <head><title>Query results</title></head>
   <body style =
   font-family: Arial, sans-serif; font-size: 11pt">"""

try:
   authorID = form[ "authorID" ].value
except KeyError:
   print """<span style = "color: red size = 15pt">
   FORM ERROR</span><br />
   You did not select an author.<br />
   <span style = "color: blue"> Click the Back button, 
   fill out the form and resubmit.<br /><br />
   Thank You.</span></body></html>"""
   sys.exit()

# connect to database and get cursor
try:
   connection = MySQLdb.connect( db = 'books' )
except OperationalError:
   print """<span style = "color: red size = 15pt">
   DATABASE ERROR</span><br /> Unable to connect to database.
   </body></html>"""
   sys.exit()

queryString = """select Titles.* from Titles, AuthorISBN
              where AuthorISBN.AuthorID=%s and
              Titles.ISBN=AuthorISBN.ISBN""" % authorID

cursor = connection.cursor()
cursor.execute( queryString )
      
results = cursor.fetchall()

cursor.close()                  # close cursor
connection.close()              # close connection

# display results
print """<table style = "border: groove 2 pt;
            border-colapse: separate">
         <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Edition</th>
            <th>Year</th>
            <th>Description</th>
            <th>Publisher ID</th>
         </tr>"""

for row in results:
   print "<tr>"
      
   for entry in row: 
      print '<td style = "border: solid 2pt">%s</td>' % entry

   print "</tr>"      

print """</table></body></html>"""

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