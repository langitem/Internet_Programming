# Fig. 35.7: fig35_07.py
# A program that illustrates tuples, lists and dictionaries.

# tuples
aTuple = ( 1, "a", 3.0 )      # create tuple
firstItem = aTuple[ 0 ]       # first tuple item
secondItem = aTuple[ 1 ]      # second tuple item
thirdItem = aTuple[ 2 ]       # third tuple item

print "The first item in the tuple is", firstItem
print "The second item in the tuple is", secondItem
print "The third item in the tuple is", thirdItem
print

firstItem, secondItem, thirdItem = aTuple
print "The first item in the tuple is", firstItem
print "The second item in the tuple is", secondItem
print "The third item in the tuple is", thirdItem
print

aTuple += ( 4, )     
print "Used the += statement on the tuple" 
print

# print the tuple
print "The raw tuple data is:", aTuple
print "The items in the tuple are:"

for item in aTuple:   # print each item
    print item,

print      # end previous line
print      # blank line

# lists
aList = [ 1, 2, 3 ]     # create list
aList[ 0 ] = 0          # change first element of list
aList.append( 5 )       # add item to end of list

print "The raw list data is:", aList   # print list data
print

aList += [ 4 ]     # add an item to the end of the list
print "Added an item to the list using the += statement"
print

# print each item in the list
print "The items in the list are:"

for item in aList:
    print item,

print      # end previous line
print      # blank line

# dictionaries
aDictionary = { 1 : "January", 2 : "February", 3 : "March",
                4 : "April", 5 : "May", 6 : "June", 7 : "July",
                8 : "August", 9 : "September", 10 : "October",
                11 : "November" }
aDictionary[ 12 ] = "December"          # add item to dictionary

print "The raw dictionary data is:", aDictionary
print "\nThe entries in the dictionary are:"

for item in aDictionary.keys():
    print "aDictionary[ ", item, " ] = ", aDictionary[ item ]

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