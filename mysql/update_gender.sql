mysql gender update in student table. Male to Female and Female to male;

UPDATE student
SET gender = CASE
    WHEN gender = 'Male' THEN 'Female'
    WHEN gender = 'Female' THEN 'Male'
    ELSE gender
END;