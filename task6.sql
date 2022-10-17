--1
SELECT salesman_id, name, city, commission FROM `salespeople` WHERE city IN('Paris'  , 'Rome');


--2
SELECT EMP_IDNO, EMP_FNAME, EMP_LNAME, EMP_DEPT FROM employees WHERE EMP_LNAME LIKE 'D%';


--3
SELECT col1 FROM table WHERE col1 NOT LIKE '%/%';


--4 
SELECT salesman_id, name, city, commission FROM `salespeople` WHERE name LIKE 'N__l%';


--5
SELECT ord_no, ord_date, purch_amt FROM orders WHERE salesman_id = 5001;


--6
SELECT city , MAX(grade) as maximum_grade from customers GROUP BY city ;


--7
SELECT customer_id, ord_date , Max(purch_amt) as maximumPurchaseAmount FROM orders 
where purch_amt in (SELECT purch_amt from orders where purch_amt between 2000 AND 6000)
GROUP by customer_id;


--8
SELECT customer_id, ord_date , Max(purch_amt) as maximumPurchaseAmount FROM orders 
where purch_amt in (SELECT purch_amt from orders where purch_amt in (2000, 3000, 5760, 6000) )
GROUP by customer_id;


--9
SELECT cusotmers_id , cust_name, customer.city , grade , cusotmers.salesman_id  FROM cusotmers JOIN salespeople 
ON cusotmers.salesman_id = salespeople.salesman_id
where  salespeople.name ='Mc Lyon' ;


-- 10
 SELECT ord_no, purch_amt, ord_date,orders.salesman_id FROM orders JOIN salespeople 
 ON orders.salesman_id = salespeople.salesman_id 
 WHERE commission = (SELECT Max(commission) FROM salespeople);

 
 -- 11
 SELECT ord_no, purch_amt, ord_date, customer_id ,salesman_id FROM orders WHERE purch_amt > (SELECT AVG(purch_amt) FROM orders); 


 --12
 SELECT ord_date, SUM(purch_amt) FROM orders as ordA
GROUP by ord_date 
HAVING SUM(purch_amt) >= (SELECT 1000.00 + MAX(purch_amt) FROM orders as ordB 
WHERE ordA.ord_date = ordB.ord_date) ;


--13
SELECT cust_name, city, ord_no, ord_date, purch_amt  FROM customer  RIGHT JOIN orders 
 ON customer.customer_id= orders.customer_id 
 WHERE grade IS NOT NULL;

 
 
