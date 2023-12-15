use `eco_db`;
show tables in `eco_db`;
select * from resources;

DELETE FROM global WHERE id > 13;
DELETE FROM res_amount WHERE str_el > 13;
UPDATE global SET name = 'Onovo' WHERE name = 'Oleksandr';
UPDATE global SET name = 'lol' WHERE name = 'Victoria';
UPDATE global SET name = 'kek' WHERE name = 'Vladyslav';

select * from global;

DELETE FROM resources WHERE id = 2 or 7;

INSERT INTO resources (id, name, measure, cost_of_one, description) VALUES
(1, 'electricity', 'кВт*год', 1.8, 'default'),
(3, 'heat', 'Гкал', 2, 'default'),
(4, 'gas', 'тис. м3', 1500, 'default'),
(5, 'water', 'тис. м3', 2000, 'default'),
(6, 'coal', 'тон', 1500, 'default'),
(8, 'household waste', 'тон', 48, 'default'),
(9, 'products and services', 'годин', 200, 'default');