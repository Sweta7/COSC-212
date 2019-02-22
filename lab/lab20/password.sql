-- To check when both username and password are correct
SELECT * FROM Users
WHERE username = 'first'
AND password = SHA('secret1');

-- To check when username is incorrect but password is correct
SELECT * FROM Users _
WHERE username = 'first1'
AND password = SHA('secret1');

-- To check when username is correct but password is incorrect
SELECT * FROM Users _
WHERE username = 'first'
AND password = SHA('secret');

