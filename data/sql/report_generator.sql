TRUNCATE TABLE report_sell_product_monthly;
INSERT INTO
	report_sell_product_monthly (rec_date, product_id, rec_amount, rec_count)
SELECT 
	CONCAT(YEAR(purchase.status_date),'-',MONTH(purchase.status_date),'-01') as rec_date,
	product.id,
	SUM(purchase_product.price_total),
                SUM(purchase_product.amount)
FROM 
	purchase
INNER JOIN 
	purchase_product ON purchase_id = purchase.id
INNER JOIN 
	product ON product.id = purchase_product.product_id
WHERE
	purchase.status = 3
GROUP BY
	CONCAT(YEAR(purchase.status_date),'-',MONTH(purchase.status_date),'-01'),
    product.id;


TRUNCATE TABLE report_sell_product_daily;
INSERT INTO
	report_sell_product_daily (rec_date, product_id, rec_amount, rec_count)
SELECT 
	DATE(purchase.status_date) as rec_date,
	product.id,
	SUM(purchase_product.price_total),
    SUM(purchase_product.amount)
FROM 
	purchase
INNER JOIN 
	purchase_product ON purchase_id = purchase.id
INNER JOIN 
	product ON product.id = purchase_product.product_id
WHERE
	purchase.status = 3
GROUP BY
	DATE(purchase.status_date),
    product.id;