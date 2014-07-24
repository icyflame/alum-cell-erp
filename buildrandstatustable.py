from random import *

startid = 2
endid = 26

for i in range(startid, endid+1):

    search = randrange(1, 5)
    called = randrange(1, 5)
    register =  randrange(1, 3)
    pay =  randrange(1, 3)
    touserid =  randrange(6, 11)
    year =  choice([1965, 1975, 1985])

##    print "INSERT INTO `status` VALUES (`%d`,`%d`,`%d`,`%d`,`%d`,`%d`,`%d`)" %i %search %called %register %pay %touserid %year
##    s = "INSERT INTO `status` VALUES (`"

    s = "INSERT INTO `status`(`alumid`, `search`, `called`, `register`, `pay`, `touserid`, `year`) VALUES ('"
    s += "%d', '" %i
    s += "%d', '" %search
    s += "%d', '" %called
    s += "%d', '" %register
    s += "%d', '" %pay
    s += "%d', '" %touserid
    s += "%d');" %year

    print s
