# MySql

<image src="https://github.com/jafarimahdi/MySql/blob/master/pic/sQL.jpg" width=400>
<image src="https://github.com/jafarimahdi/MySql/blob/master/pic/select.png" width=350>

### Basics

__USE sql_store;__

    SELECT *
    FROM customers 
    WHERE state = ‘CA’ 
    ORDER BY first_name 
    LIMIT 3;
    
    •  SQL is not a case-sensitive language.
    • In MySQL, every statement must be terminated with a semicolon.
---
### Comments

    We use comments to add notes to our code.

    —- This is a comment and it won’t get executed. 
---
### SELECT Clause
 __Using expressions__

    SELECT (points * 10 + 20) AS discount_factor
    FROM customers
    Order of operations:

        • Parenthesis
        • Multiplication/division 
        • Addition/subtraction
---

### Removing duplicates

    SELECT DISTINCT state
    FROM customers 

---

### WHERE Clause
__We use the WHERE clause to filter data.__

    Comparison operators:

        • Greater than: >
        • Greater than or equal to: >= 
        • Less than: <
        • Less than or equal to: <=
        • Equal: =
        • Not equal: <>
        • Not equal: !=

---
### Logical Operators

__AND__ (both conditions must be True)

    SELECT *
    FROM customers 
    WHERE birthdate > ‘1990-01-01’ AND points > 1000

__OR__ (at least one condition must be True)

    SELECT *
    FROM customers 
    WHERE birthdate > ‘1990-01-01’ OR points > 1000

__NOT__ (to negate a condition)

    SELECT *
    FROM customers 
    WHERE NOT (birthdate > ‘1990-01-01’)

---

### IN Operator
Example: Returns customers in any of these states: VA, NY, CA

    SELECT *
    FROM customers 
    WHERE state IN (‘VA’, ‘NY’, ‘CA’)

---
### BETWEEN Operator
    SELECT *
    FROM customers 
    WHERE points BETWEEN 100 AND 200

---

### LIKE Operator
Example: Returns customers whose first name starts with b

    SELECT *
    FROM customers 
    WHERE first_name LIKE ‘b%’

        • %:any number of characters 
        • _:exactly one character

---

### REGEXP Operator
Example: Returns customers whose first name starts with a 

    SELECT *
    FROM customers 
    WHERE first_name REGEXP ‘^a’

        • ^: beginning of a string
        • $: end of a string
        • |: logical OR
        • [abc]: match any single characters 
        • [a-d]: any characters from a to d


    More Examples:

    1- Returns customers whose first name ends with EY or ON

        WHERE first_name REGEXP ‘ey$|on$’

    2- Returns customers whose first name starts with MY or contains SE 

        WHERE first_name REGEXP ‘^my|se’

    3- Returns customers whose first name contains B followed by R or U

        WHERE first_name REGEXP ‘b[ru]’


---

### IS NULL Operator
Example: Returns customers who don’t have a phone number

    SELECT *
    FROM customers 
    WHERE phone IS NULL

---
### ORDER BY Clause
Example:  Sort customers by state (in ascending order), and then by their first name (in descending order)

    SELECT *
    FROM customers 
    ORDER BY state, first_name DESC
---
### LIMIT Clause
Example: Return only 3 customers

    SELECT *
    FROM customers
    LIMIT 3

Example: Skip 6 customers and return 3

    SELECT *
    FROM customers 
    LIMIT 6, 3
---

<image src="https://github.com/jafarimahdi/MySql/blob/master/pic/SqlJoins.png" width=250>

### Inner Joins

    SELECT *
    FROM customers c JOIN orders o 
        ON c.customer_id = o.customer_id

### Outer Joins
Example: Return all customers whether they have any orders or not

    SELECT *
    FROM customers c
    LEFT JOIN orders o 
        ON c.customer_id = o.customer_id

### USING Clause
If column names are exactly the same, you can simplify the join with the USING clause.

    SELECT *
    FROM customers c JOIN orders o 
        USING (customer_id)

### Cross Joins
Example: Combine every color with every size 

    SELECT *
    FROM colors 
        CROSS JOIN sizes

---
### Unions
Example: Combine records from multiple result sets

    SELECT name, address
    FROM customers 
    UNION
        SELECT name, address 
        FROM clients 
---
### Inserting Data
Example: Insert a single record

    INSERT INTO customers(first_name, phone, points)

    VALUES (‘Mahdi’, NULL, DEFAULT)

Example: Insert multiple single records

    INSERT INTO customers(first_name, phone, points)

    VALUES (‘Mahdi’, NULL, DEFAULT), 
            (‘Bob’, ‘1234’, 10) 

