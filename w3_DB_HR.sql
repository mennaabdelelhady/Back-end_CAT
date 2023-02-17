/*p1*/
SELECT name FROM Employee WHERE salary > 2000 AND months < 10 ORDER BY employee_id;
/*p2*/
SELECT City.Name 
FROM City, Country 
WHERE City.CountryCode = Country.Code AND Continent = 'Africa' ;
/*p3*/
SELECT SUM(City.population)
FROM Country
INNER JOIN City
    ON Country.Code = City.CountryCode
WHERE Country.Continent='Asia';
/*p4*/
UPDATE salary

SET
sex = CASE sex
 WHEN 'm' THEN 'f'
   ELSE 'm'

    END;
/*p5*/
SELECT s.Name
FROM Students s
JOIN Packages p1 ON s.ID = p1.ID
JOIN Friends f ON s.ID = f.ID
JOIN Packages p2 ON f.Friend_ID = p2.ID
WHERE p2.Salary > p1.Salary
ORDER BY p2.Salary;
