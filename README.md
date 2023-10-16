# PHP_Learn_from_W3_School
###learn and practice from w3 school's.
#### What is PHP?
- PHP is an acronym for "PHP: Hypertext Preprocessor"
- PHP scripts are executed on the server
#### What Can PHP Do?
- PHP can generate dynamic page content
- PHP can create, open, read, write, delete, and close files on the server
- PHP can collect form data
- PHP can send and receive cookies
- PHP can add, delete, modify data in your database
- PHP can be used to control user-access
- PHP can encrypt data

### Some Note
- Note: PHP statements end with a semicolon (;).
- Note: However; all variable names are case-sensitive!
- In PHP, a variable starts with the $ sign
- Note: When you assign a text value to a variable, put quotes around the value.
- A variable name cannot start with a number

1. Variable
- just take a variable and print out.
- In the example above, notice that we did not have to tell PHP which data type the variable is.

2. PHP Global Variable
- we see if we use the global function out put will be "15"
- or only if we print $y out-put will be '10' in that example.

3. Gloval variable in array
- PHP also stores all global variables in an array called $GLOBALS[index]
- we see if we use the global array function out put will be "15"
- or only if we print $y out-put will be 10

4. echo statement
- The echo statement can be used with or without parentheses: echo or echo().

5. print statement
- The print statement can be used with or without parentheses: print or print().

6. var_dump statement
- The PHP var_dump() function returns the data type and value:
- it also see the string digit's
- it also print all array value.

7. PHP Object Class
-  inherit ধরা যাক আমরা অনেকগুলো গাড়ির নাম নিলাম এবং প্রত্যেকটা গাড়ির কালার এবং চাকা সাইজ ব্রেক এর মডেল আলাদা
- আমরা inherit করে Object Class এর মাধ্যমে সেগুলো Define করতে পারি|
- আমরা এখানে পাবলিক ব্যবহার করেছি কারণ ফাংশানের বাইরেও যাতে আমরা কল করতে পারি বা defin করতে পারি|
- উপরের উদাহরণ দেখে আমরা বুঝতে পারি একবার অবজেক্ট ডিফাইন করে একই জিনিস বারবার লেখা লাগবে না ফাংশনের মত কাজ করে কিন্তু inharit অর্থাৎ ভিতরের মানও চেঞ্জ করে
- if we use private in function it will not work

8. PHP Number's
- One thing to notice about PHP is that it provides automatic data type conversion.
- So, if you assign an integer value to a variable, the type of that variable will automatically be an integer.
- This automatic conversion can sometimes break your code.

9. constant in php
- we use define for const

*#=>* Operator in php
- and  operator ``` if ($x == 100 and $y == 50) {
    echo "Hello world!";
} ```
- or operator in php ``` if ($x == 100 or $y == 80) {
    echo "Hello world!";
} ```

10. Array Operator
- this example will add all array together

11. Foreach array.
- loop through all array element

12. Foreach Associative array. 
- associative array simple example in this foreach loop.

13. Function in PHP
- simple function example in php

13.2. Function in PHP
- we use multiple parameter in that example

13.3. Function Default argunment.
- we set a default argunment in that example

13.4. Return Function
- in that example we use return function in addition
