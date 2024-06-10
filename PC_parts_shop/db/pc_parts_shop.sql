-- Assuming your database name is `pc_parts_shop` and the table is `parts`

USE pc_parts_shop;

-- Add 20 CPU items
INSERT INTO parts (name, type, wattage, price) VALUES
                                                   ('Intel Core i9-11900K', 'CPU', 125, 539.00),
                                                   ('Intel Core i7-11700K', 'CPU', 125, 399.00),
                                                   ('Intel Core i5-11600K', 'CPU', 125, 262.00),
                                                   ('Intel Core i3-10100', 'CPU', 65, 122.00),
                                                   ('AMD Ryzen 9 5950X', 'CPU', 105, 799.00),
                                                   ('AMD Ryzen 7 5800X', 'CPU', 105, 449.00),
                                                   ('AMD Ryzen 5 5600X', 'CPU', 65, 299.00),
                                                   ('AMD Ryzen 3 3300X', 'CPU', 65, 120.00),
                                                   ('Intel Pentium Gold G6400', 'CPU', 58, 64.00),
                                                   ('Intel Celeron G5905', 'CPU', 58, 52.00),
                                                   ('AMD Athlon 3000G', 'CPU', 35, 49.00),
                                                   ('Intel Core i9-11900', 'CPU', 65, 439.00),
                                                   ('Intel Core i7-11700', 'CPU', 65, 329.00),
                                                   ('Intel Core i5-11400', 'CPU', 65, 182.00),
                                                   ('AMD Ryzen 9 5900X', 'CPU', 105, 549.00),
                                                   ('AMD Ryzen 7 5700G', 'CPU', 65, 359.00),
                                                   ('AMD Ryzen 5 4600G', 'CPU', 65, 159.00),
                                                   ('AMD Ryzen 3 4100', 'CPU', 65, 99.00),
                                                   ('Intel Xeon W-1290P', 'CPU', 125, 679.00),
                                                   ('AMD Threadripper 3960X', 'CPU', 280, 1399.00);

-- Add 20 GPU items
INSERT INTO parts (name, type, wattage, price) VALUES
                                                   ('NVIDIA GeForce RTX 3090', 'GPU', 350, 1499.00),
                                                   ('NVIDIA GeForce RTX 3080 Ti', 'GPU', 350, 1199.00),
                                                   ('NVIDIA GeForce RTX 3080', 'GPU', 320, 699.99),
                                                   ('NVIDIA GeForce RTX 3070 Ti', 'GPU', 290, 599.00),
                                                   ('NVIDIA GeForce RTX 3070', 'GPU', 220, 499.00),
                                                   ('NVIDIA GeForce RTX 3060 Ti', 'GPU', 200, 399.00),
                                                   ('NVIDIA GeForce RTX 3060', 'GPU', 170, 329.00),
                                                   ('AMD Radeon RX 6900 XT', 'GPU', 300, 999.00),
                                                   ('AMD Radeon RX 6800 XT', 'GPU', 300, 649.00),
                                                   ('AMD Radeon RX 6800', 'GPU', 250, 579.00),
                                                   ('AMD Radeon RX 6700 XT', 'GPU', 230, 479.00),
                                                   ('AMD Radeon RX 6600 XT', 'GPU', 160, 379.00),
                                                   ('AMD Radeon RX 6600', 'GPU', 132, 329.00),
                                                   ('NVIDIA GeForce GTX 1660 Ti', 'GPU', 120, 279.00),
                                                   ('NVIDIA GeForce GTX 1660 Super', 'GPU', 125, 229.00),
                                                   ('NVIDIA GeForce GTX 1650 Super', 'GPU', 100, 159.00),
                                                   ('NVIDIA GeForce GTX 1050 Ti', 'GPU', 75, 149.00),
                                                   ('AMD Radeon RX 5700 XT', 'GPU', 225, 399.00),
                                                   ('AMD Radeon RX 5600 XT', 'GPU', 150, 279.00),
                                                   ('NVIDIA GeForce RTX 2060', 'GPU', 160, 349.00);

-- Add 20 RAM items
INSERT INTO parts (name, type, wattage, price) VALUES
                                                   ('Corsair Vengeance LPX 16GB DDR4 3200', 'RAM', 8, 89.99),
                                                   ('G.Skill Trident Z RGB 16GB DDR4 3200', 'RAM', 8, 94.99),
                                                   ('Kingston HyperX Fury 16GB DDR4 3200', 'RAM', 8, 84.99),
                                                   ('Crucial Ballistix 16GB DDR4 3200', 'RAM', 8, 79.99),
                                                   ('Corsair Vengeance LPX 32GB DDR4 3200', 'RAM', 10, 174.99),
                                                   ('G.Skill Trident Z RGB 32GB DDR4 3200', 'RAM', 10, 184.99),
                                                   ('Kingston HyperX Fury 32GB DDR4 3200', 'RAM', 10, 169.99),
                                                   ('Crucial Ballistix 32GB DDR4 3200', 'RAM', 10, 164.99),
                                                   ('Corsair Vengeance LPX 8GB DDR4 3200', 'RAM', 6, 44.99),
                                                   ('G.Skill Trident Z RGB 8GB DDR4 3200', 'RAM', 6, 49.99),
                                                   ('Kingston HyperX Fury 8GB DDR4 3200', 'RAM', 6, 39.99),
                                                   ('Crucial Ballistix 8GB DDR4 3200', 'RAM', 6, 34.99),
                                                   ('Corsair Dominator Platinum RGB 16GB DDR4 3200', 'RAM', 8, 139.99),
                                                   ('G.Skill Ripjaws V 16GB DDR4 3200', 'RAM', 8, 79.99),
                                                   ('Kingston HyperX Predator 16GB DDR4 3200', 'RAM', 8, 99.99),
                                                   ('Team T-Force Delta RGB 16GB DDR4 3200', 'RAM', 8, 69.99),
                                                   ('Patriot Viper Steel 16GB DDR4 3200', 'RAM', 8, 74.99),
                                                   ('Corsair Vengeance LPX 64GB DDR4 3200', 'RAM', 12, 349.99),
                                                   ('G.Skill Trident Z Royal 16GB DDR4 3200', 'RAM', 8, 144.99),
                                                   ('Kingston HyperX Fury 64GB DDR4 3200', 'RAM', 12, 329.99);

-- Add 20 Storage items
INSERT INTO parts (name, type, wattage, price) VALUES
                                                   ('Samsung 970 EVO Plus 1TB NVMe SSD', 'Storage', 6, 149.99),
                                                   ('Western Digital Black SN850 1TB NVMe SSD', 'Storage', 6, 139.99),
                                                   ('Kingston A2000 1TB NVMe SSD', 'Storage', 5, 99.99),
                                                   ('Crucial P5 1TB NVMe SSD', 'Storage', 5, 109.99),
                                                   ('Samsung 870 EVO 1TB SSD', 'Storage', 5, 99.99),
                                                   ('Western Digital Blue 1TB SSD', 'Storage', 5, 89.99),
                                                   ('Kingston A400 1TB SSD', 'Storage', 5, 74.99),
                                                   ('Crucial MX500 1TB SSD', 'Storage', 5, 89.99),
                                                   ('Seagate BarraCuda 2TB HDD', 'Storage', 8, 54.99),
                                                   ('Western Digital Blue 2TB HDD', 'Storage', 8, 49.99),
                                                   ('Toshiba P300 2TB HDD', 'Storage', 8, 49.99),
                                                   ('Seagate IronWolf 4TB NAS HDD', 'Storage', 9, 109.99),
                                                   ('Western Digital Red 4TB NAS HDD', 'Storage', 9, 109.99),
                                                   ('Samsung 870 QVO 2TB SSD', 'Storage', 5, 179.99),
                                                   ('Kingston NV1 2TB NVMe SSD', 'Storage', 6, 119.99),
                                                   ('Crucial BX500 2TB SSD', 'Storage', 5, 139.99),
                                                   ('Seagate FireCuda 2TB HDD', 'Storage', 8, 59.99),
                                                   ('Western Digital My Passport 4TB External HDD', 'Storage', 6, 99.99),
                                                   ('Toshiba Canvio Basics 4TB External HDD', 'Storage', 6, 89.99),
                                                   ('Samsung T7 1TB External SSD', 'Storage', 5, 129.99);
