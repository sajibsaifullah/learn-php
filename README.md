# Learn PHP #

**PHP** : Hypertext Preprocessor.

- The **PHP Hypertext Preprocessor (PHP)** is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web-based software applications. 

- PHP
    - is a Server Side Scripting Language.
    - is Open Source.
    - is Easy to Learn & Code.
    - is faster then other scripting language.
    - runs on Different Platform like Windows, Linux, Mac etc.
    - is an object-oriented language.
    - can be embedded into HTML.


## Variables ##

**Variables** are Containers for Storing Data.

- Rules for PHP variables:
    - A variable
        - starts with $ sign. e.g.: $name.
        - name must start with a letter or the underscore character. e.g.: $name or $_name.
        - name cannot start with a number
        - name can only contain alpha-numeric character and underscore.
        - names are **case sensitive**. e.r.: $name and $Name are different variables.
    
        Appropriate way  | Wrong Way
        ------------- | -------------
        $testname  | $test name
        $test_name  | $99testname
        $_testname  | $test%name
        $test-name  | -
        $testName  | -
        $testname99  | -


## echo vs print ##   
- echo & print are more or less the same
- echo has no return value while print has a return value of 1.
- echo can take multiple parameters.
- echo is marginally faster than print.

## Data types ##
- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL

**var_dump & print_r**
- In PHP, var_dump() and print_r() are both functions that display the contents of a variable.
- var_dump() provides more detailed information about a variable, including data types and sizes.
- var_dump() displays values along with data types as output. 
- print_r() displays human-readable information about a variable.
- print_r() displays only value as output.
- print_r() mostly use in array.

## Operators ##
- Arithmetic operators
- Assignment operators
- Comparison operators
- Logical operators ...


#### Arithmetic operators ####
Operator | Name | Example
| :--- | ---: | :---:
 '+' | Addition | $x + $y
 '-' | Subtraction | $x - $y
 '*' | Multiplication | $x * $y
 '/' | Division | $x / $y
 '%' | Modulus | $x % $y
 '**' | Exponentiation | $x ** $y


#### Assignment operators #### 
Assignment | Same as... | Description
| :--- | ---: | :---:
 x = y | x = y | Left & Right equal
 x += y | x = x + y | Addition
 x -= y | x = x - y | Subtraction
 x *= y | x = x * y | Multiplication
 x /= y | x = x / y | Division
 x %= y | x = x % y | Modulus


#### Comparison operators #### 
Operator | Name | Example
| :--- | ---: | :---:
 '==' | Equal | $x == $y
 '===' | Identical | $x === $y
 '!=' | Not equal | $x != $y
 '!==' | Not identical | $x !== $y
 '>' | Greater than | $x > $y
 '<' | Less than | $x < $y
 '>=' | Greater than or equal to | $x >= $y
 '<=' | Less than or equal to | $x <= $y


#### Logical operators #### 
Operator | Name | Example
| :--- | ---: | :---:
 'and' | And | $x and $y
 'or' | Or | $x or $y
 'xor' | Xor | $x xor $y
 '&&' | And | $x && $y
 '||' | Or | $x || $y
 '!' | Not | $x ! $y


