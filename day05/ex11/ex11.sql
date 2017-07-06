SELECT UCASE(user_card.last_name) AS 'NAME', user_card.first_name AS first_name, subscription.price AS 'price'
FROM user_card, subscription, member
WHERE user_card.id_user = member.id_user_card
      AND member.id_sub = subscription.id_sub
      AND subscription.price > 42
ORDER BY user_card.last_name, user_card.first_name ASC;