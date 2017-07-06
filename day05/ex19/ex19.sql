SELECT DATEDIFF(MAX(DATE(member_history.date)), MIN(DATE(member_history.date))) AS 'uptime'
FROM member_history
GROUP BY member_history.id_film;