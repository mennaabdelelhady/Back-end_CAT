/*p1*/
select * from CITY;
/*p2*/
select * from CITY 
WHERE ID =1661;
/*p3*/
select * from CITY
WHERE POPULATION >100000
AND CountryCode='USA';
/*p4*/
select NAME from CITY
WHERE COUNTRYCODE='JPN';
/*p5*/
select name from STUDENTS
WHERE Marks >75
ORDER BY RIGHT(NAME, 3), ID ASC;
