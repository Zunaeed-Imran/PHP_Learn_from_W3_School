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

13.5. Function add value by "&"
- Passing Arguments by Reference
- in that example we add another argunment using "&"

14. Indexed Array
- simple example of Indexed array.
- first we use count function to count length.
- than to loop through all array we need to use loop we use for loop.

15. Associative Array
- simple associative array
- we print one out-put only in that example.

15.2. Associative array
- we use foreach-loop in that associative array

15.3 sorting array
- simple sorting array
- we use sort funtion to sort array

15.4. Multidimentional array
- Example of simple two dimentional array

16. PHP Superglobal - $GLOBALS
- Basic Example of PHP superGlobal Variable
- $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

17. PHP Superglobal - $_SERVER
- Super global variables are built-in variables that are always available in all scopes.

18. PHP Superglobal - $_REQUEST
- Super global variables are built-in variables that are always available in all scopes.
- Simple example of from  with suber global variable
- htmlspecialchars এটি ইউজ করলে কোন স্পেশাল ক্যারেক্টারের কার্যক্ষমতা হারায় শুধুমাত্র যা লিখবো সেটাই দেখাবে যেমন যদি কোন কারেক্টর Bold করি কিন্তু সেটি হবে না

19. PHP Superglobal - $_GET
- Example of GET method
- $_GET is an array of variables passed to the current script via the URL parameters.
- Information sent from a form with the GET method is visible to everyone

19.2. PHP Superglobal - $_GET
- More simple example of GET Method. 
- GET also has limits on the amount of information to send. The limitation is about 2000 characters. 
- GET should NEVER be used for sending passwords or other sensitive information!
- GET may be used for sending non-sensitive data.

20. PHP Superglobal - $_POST,
- $_POST is an array of variables passed to the current script via the HTTP POST method.
- and has no limits on the amount of information to send.
- POST supports advanced functionality such as support for multi-part binary input while uploading files to server.
- However, because the variables are not displayed in the URL, it is not possible to bookmark the page.

21. PHP Form Validation
- basic example of php form validation in PHP

22. PHP Complete Form Example
- Complated form example

### PHP Advanced
23. PHP Date and Time
- some function in php date and time in the example 23

24. PHP Include Files
- একটা পিএসপি ফাইল থেকে অন্য পিএসপি file যাওয়ার জন্য আমরা include বা require ব্যবহার করি
- include will only produce a warning (E_WARNING) and the script will continue
- require will produce a fatal error (E_COMPILE_ERROR) and stop the script
- even we can use variable from other file using include. 

24.2 include file example
- i exercise an example of a variable input from other php file
- using include method

25. PHP File Handling
- just a example what readfile function do. 
- The readfile() function in PHP is a built-in function that reads the contents of a file and writes the content to the output

26. PHP File Upload
- Make sure that the form uses method="post"
- Make sure that the file type is 'file'
- move_uploaded_file — Moves an uploaded file to a new location
- Be sure your file upload form has attribute enctype="multipart/form-data" otherwise the file upload will not work.
- Example of file upload 
``` echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
} ```



