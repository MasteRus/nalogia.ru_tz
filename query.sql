SELECT STORAGE_ID , Category_ID, quantity 
FROM incoming 
WHERE time in (
	SELECT MAX(time) 
	from incoming 
	GROUP BY STORAGE_ID , Category_ID 
) 
GROUP BY STORAGE_ID , Category_ID
