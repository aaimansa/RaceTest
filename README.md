# RaceTest

A simple web race example based on [https://blog.tomecek.net/post/test-race-conditions/](https://blog.tomecek.net/post/test-race-conditions/)

- Download or clone to your web server
- Import racetestDB.sql to your local db machine
- Change DB configuration on functions.php
- Make sure rewriteUrl is active on your Apache web server


### How to test
- run test.sh


### Test results

Different amount in 4 times test, even with same initial amount (1000000)

![1st try](https://github.com/hermanka/RaceTest/blob/master/screenshot/1.PNG)

![2nd try](https://github.com/hermanka/RaceTest/blob/master/screenshot/2.PNG)

![3rd try](https://github.com/hermanka/RaceTest/blob/master/screenshot/3.PNG)

![4th try](https://github.com/hermanka/RaceTest/blob/master/screenshot/4.PNG)



