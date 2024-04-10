select id AS "ID", user_id AS "EMPCode", amount AS "Salary" FROM package_rois T1
WHERE 2 = (SELECT COUNT(distinct amount) from package_rois T2
			WHERE T1.amount <= T2.amount);