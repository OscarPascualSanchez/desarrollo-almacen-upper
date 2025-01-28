<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2024-08-15 00:05:08 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:05:08 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:05:08 --> Final output sent to browser
DEBUG - 2024-08-15 00:05:08 --> Total execution time: 0.2051
INFO - 2024-08-15 00:05:10 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:05:10 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:05:10 --> Final output sent to browser
DEBUG - 2024-08-15 00:05:10 --> Total execution time: 0.1665
INFO - 2024-08-15 00:05:22 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:05:22 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:05:22 --> Final output sent to browser
DEBUG - 2024-08-15 00:05:22 --> Total execution time: 0.1531
INFO - 2024-08-15 00:05:39 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:05:39 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:05:39 --> Final output sent to browser
DEBUG - 2024-08-15 00:05:39 --> Total execution time: 0.1751
ERROR - 2024-08-15 00:12:08 --> Query error: Unknown column 'type_pallet' in 'field list' - Invalid query: SELECT `id_platform`, `type_pallet`
FROM `platform`
WHERE `status` = 'activo'
AND `status` = 'activo'
INFO - 2024-08-15 00:12:08 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 00:17:20 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:17:20 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:17:20 --> Final output sent to browser
DEBUG - 2024-08-15 00:17:20 --> Total execution time: 0.1578
INFO - 2024-08-15 00:17:22 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:17:22 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:17:22 --> Final output sent to browser
DEBUG - 2024-08-15 00:17:22 --> Total execution time: 0.1774
INFO - 2024-08-15 00:17:24 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:17:24 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:17:24 --> Final output sent to browser
DEBUG - 2024-08-15 00:17:24 --> Total execution time: 0.1566
ERROR - 2024-08-15 00:19:24 --> Query error: Unknown column 'type_platform' in 'field list' - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16362024081462', 'Sin defirnir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '3', 'BAIFFCIO2024', 'Contenedor Flat Rack', 'Guadalajara_1', '2', 'Descarga', '2', '2024-08-14', '', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Pedro', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00:18', '01:18', NULL, '03:23', '05:20', '', '', 'Angélica')
INFO - 2024-08-15 00:19:24 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 00:21:07 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wms_db`.`arrival`, CONSTRAINT `fk_platform` FOREIGN KEY (`id_platform`) REFERENCES `platform` (`id_platform`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16362024081462', 'Sin defirnir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '3', 'BAIFFCIO2024', 'Contenedor Flat Rack', 'Guadalajara_1', '2', 'Descarga', '2', '2024-08-14', '', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Pedro', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00:18', '01:18', NULL, '03:23', '05:20', '', '', 'Angélica')
INFO - 2024-08-15 00:21:07 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 00:41:27 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:41:27 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:41:27 --> Final output sent to browser
DEBUG - 2024-08-15 00:41:27 --> Total execution time: 0.2089
INFO - 2024-08-15 00:41:31 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:41:31 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:41:31 --> Final output sent to browser
DEBUG - 2024-08-15 00:41:31 --> Total execution time: 0.1702
INFO - 2024-08-15 00:42:26 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 00:42:26 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:42:26 --> Final output sent to browser
DEBUG - 2024-08-15 00:42:26 --> Total execution time: 0.1341
INFO - 2024-08-15 00:42:46 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 00:42:46 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:42:46 --> Final output sent to browser
DEBUG - 2024-08-15 00:42:46 --> Total execution time: 0.1649
INFO - 2024-08-15 00:42:51 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 00:42:51 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:42:51 --> Final output sent to browser
DEBUG - 2024-08-15 00:42:51 --> Total execution time: 0.1273
INFO - 2024-08-15 00:42:53 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 00:42:53 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:42:53 --> Final output sent to browser
DEBUG - 2024-08-15 00:42:53 --> Total execution time: 0.1679
INFO - 2024-08-15 00:42:57 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 00:42:57 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:42:57 --> Final output sent to browser
DEBUG - 2024-08-15 00:42:57 --> Total execution time: 0.1367
INFO - 2024-08-15 00:45:18 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 00:45:18 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:45:18 --> Final output sent to browser
DEBUG - 2024-08-15 00:45:18 --> Total execution time: 0.1560
INFO - 2024-08-15 00:45:31 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 00:45:31 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:45:31 --> Final output sent to browser
DEBUG - 2024-08-15 00:45:31 --> Total execution time: 0.1287
INFO - 2024-08-15 00:45:34 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 00:45:34 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:45:34 --> Final output sent to browser
DEBUG - 2024-08-15 00:45:34 --> Total execution time: 0.1200
INFO - 2024-08-15 00:45:53 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 00:45:53 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:45:53 --> Final output sent to browser
DEBUG - 2024-08-15 00:45:53 --> Total execution time: 0.1367
INFO - 2024-08-15 00:46:00 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:46:00 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:46:00 --> Final output sent to browser
DEBUG - 2024-08-15 00:46:00 --> Total execution time: 0.2101
INFO - 2024-08-15 00:46:02 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:46:02 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:46:02 --> Final output sent to browser
DEBUG - 2024-08-15 00:46:02 --> Total execution time: 0.1610
ERROR - 2024-08-15 00:47:33 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wms_db`.`arrival`, CONSTRAINT `fk_platform` FOREIGN KEY (`id_platform`) REFERENCES `platform` (`id_platform`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16372024081462', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '3', 'BAIFFCIO2024', 'Contenedor Flat Rack', 'Guadalajara_1', '2', 'Descarga', '2', '2024-08-14', '', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Pedro', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02:46', '03:46', NULL, '05:46', '09:46', '', '', 'Angélica')
INFO - 2024-08-15 00:47:33 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 00:52:28 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:52:28 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:52:28 --> Final output sent to browser
DEBUG - 2024-08-15 00:52:28 --> Total execution time: 0.1787
INFO - 2024-08-15 00:53:01 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/products.php
INFO - 2024-08-15 00:53:01 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:53:01 --> Final output sent to browser
DEBUG - 2024-08-15 00:53:01 --> Total execution time: 0.1767
INFO - 2024-08-15 00:53:04 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/products.php
INFO - 2024-08-15 00:53:04 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:53:04 --> Final output sent to browser
DEBUG - 2024-08-15 00:53:04 --> Total execution time: 0.1542
INFO - 2024-08-15 00:54:02 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/products.php
INFO - 2024-08-15 00:54:02 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:54:02 --> Final output sent to browser
DEBUG - 2024-08-15 00:54:02 --> Total execution time: 0.1603
INFO - 2024-08-15 00:54:15 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:54:15 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:54:15 --> Final output sent to browser
DEBUG - 2024-08-15 00:54:15 --> Total execution time: 0.1544
INFO - 2024-08-15 00:54:17 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 00:54:17 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 00:54:17 --> Final output sent to browser
DEBUG - 2024-08-15 00:54:17 --> Total execution time: 0.1356
ERROR - 2024-08-15 00:57:05 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wms_db`.`arrival`, CONSTRAINT `fk_platform` FOREIGN KEY (`id_platform`) REFERENCES `platform` (`id_platform`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16262024081553', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Nuevo León', '3', 'Descarga', '2', '2024-08-15', '', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Manuel', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01:54', '05:54', NULL, '13:55', '09:55', '', '', 'Angélica')
INFO - 2024-08-15 00:57:05 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 01:01:03 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 01:01:03 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 01:01:03 --> Final output sent to browser
DEBUG - 2024-08-15 01:01:03 --> Total execution time: 0.1655
INFO - 2024-08-15 01:01:06 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 01:01:06 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 01:01:06 --> Final output sent to browser
DEBUG - 2024-08-15 01:01:06 --> Total execution time: 0.1804
INFO - 2024-08-15 01:01:30 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 01:01:30 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 01:01:30 --> Final output sent to browser
DEBUG - 2024-08-15 01:01:30 --> Total execution time: 0.1424
INFO - 2024-08-15 01:01:48 --> Final output sent to browser
DEBUG - 2024-08-15 01:01:48 --> Total execution time: 0.1059
INFO - 2024-08-15 01:01:58 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/dashboard/statistik.php
INFO - 2024-08-15 01:01:58 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 01:01:58 --> Final output sent to browser
DEBUG - 2024-08-15 01:01:58 --> Total execution time: 0.1287
INFO - 2024-08-15 01:02:03 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 01:02:03 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 01:02:03 --> Final output sent to browser
DEBUG - 2024-08-15 01:02:03 --> Total execution time: 0.1474
INFO - 2024-08-15 01:02:21 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 01:02:21 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 01:02:21 --> Final output sent to browser
DEBUG - 2024-08-15 01:02:21 --> Total execution time: 0.1376
INFO - 2024-08-15 01:02:24 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 01:02:24 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 01:02:24 --> Final output sent to browser
DEBUG - 2024-08-15 01:02:24 --> Total execution time: 0.1714
INFO - 2024-08-15 01:02:40 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 01:02:40 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 01:02:40 --> Final output sent to browser
DEBUG - 2024-08-15 01:02:40 --> Total execution time: 0.1527
INFO - 2024-08-15 01:02:47 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 01:02:47 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 01:02:47 --> Final output sent to browser
DEBUG - 2024-08-15 01:02:47 --> Total execution time: 0.1535
INFO - 2024-08-15 01:02:50 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 01:02:50 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 01:02:50 --> Final output sent to browser
DEBUG - 2024-08-15 01:02:50 --> Total execution time: 0.1388
ERROR - 2024-08-15 01:06:51 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`wms_db`.`arrival`, CONSTRAINT `fk_platform` FOREIGN KEY (`id_platform`) REFERENCES `platform` (`id_platform`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16262024081563', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Nuevo León', '3', 'Descarga', '2', '2024-08-15', '', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Pedro', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13:05', '18:10', NULL, '23:05', '14:06', '', '', 'Angélica')
INFO - 2024-08-15 01:06:51 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 01:49:01 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16262024081563', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Nuevo León', '3', 'Descarga', '2', '2024-08-15', '', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Pedro', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13:05', '18:10', NULL, '23:05', '14:06', '', '', 'Angélica')
INFO - 2024-08-15 01:49:01 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 01:58:49 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16262024081563', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Nuevo León', '3', 'Descarga', '2', '2024-08-15', '', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Pedro', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13:05', '18:10', NULL, '23:05', '14:06', '', '', 'Angélica')
INFO - 2024-08-15 01:58:49 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 02:15:54 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16262024081563', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Nuevo León', '3', 'Descarga', '2', '2024-08-15', '9', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Pedro', '6', '500', '5', '100.00', '2', '8', '98', '492', '492', '13:05', '18:10', '2024-08-28', '23:05', '14:06', '', '', 'Angélica')
INFO - 2024-08-15 02:15:54 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 02:21:26 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16262024081563', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Nuevo León', '3', 'Descarga', '2', '2024-08-15', '9', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Pedro', '6', '500', '5', '100.00', '2', '8', '98', '492', '492', '13:05', '18:10', '2024-08-28', '23:05', '14:06', '', '', 'Angélica')
INFO - 2024-08-15 02:21:26 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 02:22:48 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16262024081563', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Nuevo León', '3', 'Descarga', '2', '2024-08-15', '9', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Pedro', '6', '500', '5', '100.00', '2', '8', '98', '492', '492', '13:05', '18:10', '2024-08-28', '23:05', '14:06', 'Ninguna', 'Activo', 'Angélica')
INFO - 2024-08-15 02:22:48 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 02:24:32 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 02:24:32 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 02:24:32 --> Final output sent to browser
DEBUG - 2024-08-15 02:24:32 --> Total execution time: 0.1599
INFO - 2024-08-15 02:24:34 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 02:24:34 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 02:24:34 --> Final output sent to browser
DEBUG - 2024-08-15 02:24:34 --> Total execution time: 0.1545
INFO - 2024-08-15 02:25:09 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 02:25:09 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 02:25:09 --> Final output sent to browser
DEBUG - 2024-08-15 02:25:09 --> Total execution time: 0.1786
INFO - 2024-08-15 02:25:11 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 02:25:11 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 02:25:11 --> Final output sent to browser
DEBUG - 2024-08-15 02:25:11 --> Total execution time: 0.1559
INFO - 2024-08-15 02:25:23 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/platform.php
INFO - 2024-08-15 02:25:23 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 02:25:23 --> Final output sent to browser
DEBUG - 2024-08-15 02:25:23 --> Total execution time: 0.1144
INFO - 2024-08-15 02:25:29 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 02:25:29 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 02:25:29 --> Final output sent to browser
DEBUG - 2024-08-15 02:25:29 --> Total execution time: 0.1870
INFO - 2024-08-15 02:25:32 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 02:25:32 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 02:25:32 --> Final output sent to browser
DEBUG - 2024-08-15 02:25:32 --> Total execution time: 0.1579
ERROR - 2024-08-15 02:27:04 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16262024081462', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '2024-08-14', '10', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Pedro', '6', '200', '5', '40.00', '3', '12', '37', '188', '188', '14:26', '16:26', '2030-06-04', '18:26', '19:26', 'Ninguna', 'Activo', 'Angélica')
INFO - 2024-08-15 02:27:04 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 02:36:53 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16262024081462', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '2024-08-14', '10', NULL, '6', 'SI28A47S_1', 'Camión_1', 'Pedro', '6', '200', '5', '40.00', '3', '12', '37', '188', '188', '14:26', '16:26', '2030-06-04', '18:26', '19:26', 'Ninguna', 'Activo', 'Angélica')
INFO - 2024-08-15 02:36:53 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 02:38:55 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 02:38:55 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 02:38:55 --> Final output sent to browser
DEBUG - 2024-08-15 02:38:55 --> Total execution time: 0.1171
INFO - 2024-08-15 02:40:09 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 02:40:09 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 02:40:09 --> Final output sent to browser
DEBUG - 2024-08-15 02:40:09 --> Total execution time: 0.1843
INFO - 2024-08-15 02:40:14 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 02:40:14 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 02:40:14 --> Final output sent to browser
DEBUG - 2024-08-15 02:40:14 --> Total execution time: 0.1266
ERROR - 2024-08-15 02:42:28 --> Query error: Column 'id_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '2024-08-15', NULL, NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '100', '5', '20.00', '4', '18', '16', '82', '82', '14:40', '15:40', '2028-09-10', '16:40', '17:41', 'Ninguna', 'Activo', 'Angélica')
INFO - 2024-08-15 02:42:28 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 02:46:52 --> Query error: Column 'id_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '2024-08-15', NULL, NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '100', '5', '20.00', '4', '18', '16', '82', '82', '14:40', '15:40', '2028-09-10', '16:40', '17:41', 'Ninguna', 'Activo', 'Angélica')
INFO - 2024-08-15 02:46:52 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 02:49:14 --> Query error: Column 'id_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '2024-08-15', NULL, NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '100', '5', '20.00', '4', '18', '16', '82', '82', '14:40', '15:40', '2028-09-10', '16:40', '17:41', 'Ninguna', 'Activo', 'Angélica')
INFO - 2024-08-15 02:49:14 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:12:44 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '2024-08-15', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:12:44 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:14:35 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `event_date`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '2024-08-15', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:14:35 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:41:04 --> Query error: Column 'id_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', NULL, NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '100', '5', '20.00', '4', '18', '16', '82', '82', '14:40', '15:40', '2028-09-10', '16:40', '17:41', 'Ninguna', 'Activo', 'Angélica')
INFO - 2024-08-15 03:41:04 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:42:18 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:42:18 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:46:28 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:46:28 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:47:25 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:47:25 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:47:44 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:47:44 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:48:00 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:48:00 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:49:47 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:49:47 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:49:56 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:49:56 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:53:22 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:53:22 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:57:05 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:57:05 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 03:57:50 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 03:57:50 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 04:06:21 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 04:06:21 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 04:10:45 --> Query error: Column 'id_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', NULL, NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '100', '5', '20.00', '4', '18', '16', '82', '82', '14:40', '15:40', '2028-09-10', '16:40', '17:41', 'Ninguna', 'Activo', 'Angélica')
INFO - 2024-08-15 04:10:45 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 04:15:31 --> Query error: Column 'id_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', NULL, NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '100', '5', '20.00', '4', '18', '16', '82', '82', '14:40', '15:40', '2028-09-10', '16:40', '17:41', 'Ninguna', 'Activo', 'Angélica')
INFO - 2024-08-15 04:15:31 --> Language file loaded: language/english/db_lang.php
ERROR - 2024-08-15 04:15:48 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 04:15:48 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 00:39:00 --> Config Class Initialized
INFO - 2024-08-15 00:39:00 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:39:00 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:39:00 --> Utf8 Class Initialized
INFO - 2024-08-15 00:39:00 --> URI Class Initialized
INFO - 2024-08-15 00:39:00 --> Router Class Initialized
INFO - 2024-08-15 00:39:00 --> Output Class Initialized
INFO - 2024-08-15 00:39:00 --> Security Class Initialized
DEBUG - 2024-08-15 00:39:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:39:00 --> Input Class Initialized
INFO - 2024-08-15 00:39:00 --> Language Class Initialized
INFO - 2024-08-15 00:39:00 --> Loader Class Initialized
INFO - 2024-08-15 00:39:00 --> Helper loaded: application_helper
INFO - 2024-08-15 00:39:00 --> Helper loaded: url_helper
INFO - 2024-08-15 00:39:00 --> Helper loaded: file_helper
INFO - 2024-08-15 00:39:00 --> Helper loaded: security_helper
INFO - 2024-08-15 00:39:00 --> Helper loaded: date_helper
INFO - 2024-08-15 00:39:00 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:39:00 --> Helper loaded: form_helper
INFO - 2024-08-15 00:39:00 --> Helper loaded: language_helper
INFO - 2024-08-15 00:39:00 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:39:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:39:00 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:39:00 --> Upload Class Initialized
INFO - 2024-08-15 00:39:00 --> Controller Class Initialized
INFO - 2024-08-15 00:39:00 --> Model "M_admin" initialized
INFO - 2024-08-15 00:39:00 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:39:00 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:39:00 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:39:00 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 05:39:00 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 05:39:00 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 00:40:20 --> Config Class Initialized
INFO - 2024-08-15 00:40:20 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:40:20 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:40:20 --> Utf8 Class Initialized
INFO - 2024-08-15 00:40:20 --> URI Class Initialized
INFO - 2024-08-15 00:40:20 --> Router Class Initialized
INFO - 2024-08-15 00:40:20 --> Output Class Initialized
INFO - 2024-08-15 00:40:20 --> Security Class Initialized
DEBUG - 2024-08-15 00:40:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:40:20 --> Input Class Initialized
INFO - 2024-08-15 00:40:20 --> Language Class Initialized
INFO - 2024-08-15 00:40:20 --> Loader Class Initialized
INFO - 2024-08-15 00:40:20 --> Helper loaded: application_helper
INFO - 2024-08-15 00:40:20 --> Helper loaded: url_helper
INFO - 2024-08-15 00:40:20 --> Helper loaded: file_helper
INFO - 2024-08-15 00:40:20 --> Helper loaded: security_helper
INFO - 2024-08-15 00:40:20 --> Helper loaded: date_helper
INFO - 2024-08-15 00:40:20 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:40:20 --> Helper loaded: form_helper
INFO - 2024-08-15 00:40:20 --> Helper loaded: language_helper
INFO - 2024-08-15 00:40:20 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:40:20 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:40:20 --> Upload Class Initialized
INFO - 2024-08-15 00:40:20 --> Controller Class Initialized
INFO - 2024-08-15 00:40:20 --> Model "M_admin" initialized
INFO - 2024-08-15 00:40:20 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:40:20 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:40:20 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:40:20 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 05:40:20 --> Query error: Column 'id_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '40', 'Panel solar', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', NULL, NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '100', '5', '20.00', '4', '18', '16', '82', '82', '14:40', '15:40', '2028-09-10', '16:40', '17:41', 'Ninguna', 'Activo', 'Angélica')
INFO - 2024-08-15 05:40:20 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 00:43:05 --> Config Class Initialized
INFO - 2024-08-15 00:43:05 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:43:05 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:43:05 --> Utf8 Class Initialized
INFO - 2024-08-15 00:43:05 --> URI Class Initialized
INFO - 2024-08-15 00:43:05 --> Router Class Initialized
INFO - 2024-08-15 00:43:05 --> Output Class Initialized
INFO - 2024-08-15 00:43:05 --> Security Class Initialized
DEBUG - 2024-08-15 00:43:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:43:05 --> Input Class Initialized
INFO - 2024-08-15 00:43:05 --> Language Class Initialized
INFO - 2024-08-15 00:43:05 --> Loader Class Initialized
INFO - 2024-08-15 00:43:05 --> Helper loaded: application_helper
INFO - 2024-08-15 00:43:05 --> Helper loaded: url_helper
INFO - 2024-08-15 00:43:05 --> Helper loaded: file_helper
INFO - 2024-08-15 00:43:05 --> Helper loaded: security_helper
INFO - 2024-08-15 00:43:05 --> Helper loaded: date_helper
INFO - 2024-08-15 00:43:05 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:43:05 --> Helper loaded: form_helper
INFO - 2024-08-15 00:43:05 --> Helper loaded: language_helper
INFO - 2024-08-15 00:43:05 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:43:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:43:05 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:43:05 --> Upload Class Initialized
INFO - 2024-08-15 00:43:05 --> Controller Class Initialized
INFO - 2024-08-15 00:43:05 --> Model "M_admin" initialized
INFO - 2024-08-15 00:43:05 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:43:05 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:43:05 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:43:05 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 05:43:05 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 05:43:05 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 00:43:58 --> Config Class Initialized
INFO - 2024-08-15 00:43:58 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:43:58 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:43:58 --> Utf8 Class Initialized
INFO - 2024-08-15 00:43:58 --> URI Class Initialized
INFO - 2024-08-15 00:43:58 --> Router Class Initialized
INFO - 2024-08-15 00:43:58 --> Output Class Initialized
INFO - 2024-08-15 00:43:58 --> Security Class Initialized
DEBUG - 2024-08-15 00:43:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:43:58 --> Input Class Initialized
INFO - 2024-08-15 00:43:58 --> Language Class Initialized
INFO - 2024-08-15 00:43:58 --> Loader Class Initialized
INFO - 2024-08-15 00:43:58 --> Helper loaded: application_helper
INFO - 2024-08-15 00:43:58 --> Helper loaded: url_helper
INFO - 2024-08-15 00:43:58 --> Helper loaded: file_helper
INFO - 2024-08-15 00:43:58 --> Helper loaded: security_helper
INFO - 2024-08-15 00:43:58 --> Helper loaded: date_helper
INFO - 2024-08-15 00:43:58 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:43:58 --> Helper loaded: form_helper
INFO - 2024-08-15 00:43:58 --> Helper loaded: language_helper
INFO - 2024-08-15 00:43:58 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:43:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:43:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:43:58 --> Upload Class Initialized
INFO - 2024-08-15 00:43:58 --> Controller Class Initialized
INFO - 2024-08-15 00:43:58 --> Model "M_admin" initialized
INFO - 2024-08-15 00:43:58 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:43:58 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:43:58 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:43:58 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 05:43:58 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 05:43:58 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 00:44:29 --> Config Class Initialized
INFO - 2024-08-15 00:44:29 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:44:29 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:44:29 --> Utf8 Class Initialized
INFO - 2024-08-15 00:44:29 --> URI Class Initialized
INFO - 2024-08-15 00:44:29 --> Router Class Initialized
INFO - 2024-08-15 00:44:29 --> Output Class Initialized
INFO - 2024-08-15 00:44:29 --> Security Class Initialized
DEBUG - 2024-08-15 00:44:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:44:29 --> Input Class Initialized
INFO - 2024-08-15 00:44:29 --> Language Class Initialized
INFO - 2024-08-15 00:44:29 --> Loader Class Initialized
INFO - 2024-08-15 00:44:29 --> Helper loaded: application_helper
INFO - 2024-08-15 00:44:29 --> Helper loaded: url_helper
INFO - 2024-08-15 00:44:29 --> Helper loaded: file_helper
INFO - 2024-08-15 00:44:29 --> Helper loaded: security_helper
INFO - 2024-08-15 00:44:29 --> Helper loaded: date_helper
INFO - 2024-08-15 00:44:29 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:44:29 --> Helper loaded: form_helper
INFO - 2024-08-15 00:44:29 --> Helper loaded: language_helper
INFO - 2024-08-15 00:44:29 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:44:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:44:29 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:44:29 --> Upload Class Initialized
INFO - 2024-08-15 00:44:29 --> Controller Class Initialized
INFO - 2024-08-15 00:44:29 --> Model "M_admin" initialized
INFO - 2024-08-15 00:44:29 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:44:29 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:44:29 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:44:29 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 05:44:29 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 05:44:29 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 00:45:02 --> Config Class Initialized
INFO - 2024-08-15 00:45:02 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:45:02 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:45:02 --> Utf8 Class Initialized
INFO - 2024-08-15 00:45:02 --> URI Class Initialized
INFO - 2024-08-15 00:45:02 --> Router Class Initialized
INFO - 2024-08-15 00:45:02 --> Output Class Initialized
INFO - 2024-08-15 00:45:02 --> Security Class Initialized
DEBUG - 2024-08-15 00:45:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:45:02 --> Input Class Initialized
INFO - 2024-08-15 00:45:02 --> Language Class Initialized
INFO - 2024-08-15 00:45:02 --> Loader Class Initialized
INFO - 2024-08-15 00:45:02 --> Helper loaded: application_helper
INFO - 2024-08-15 00:45:02 --> Helper loaded: url_helper
INFO - 2024-08-15 00:45:02 --> Helper loaded: file_helper
INFO - 2024-08-15 00:45:02 --> Helper loaded: security_helper
INFO - 2024-08-15 00:45:02 --> Helper loaded: date_helper
INFO - 2024-08-15 00:45:02 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:45:02 --> Helper loaded: form_helper
INFO - 2024-08-15 00:45:02 --> Helper loaded: language_helper
INFO - 2024-08-15 00:45:02 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:45:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:45:02 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:45:02 --> Upload Class Initialized
INFO - 2024-08-15 00:45:02 --> Controller Class Initialized
INFO - 2024-08-15 00:45:02 --> Model "M_admin" initialized
INFO - 2024-08-15 00:45:02 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:45:02 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:45:02 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:45:02 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 05:45:02 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16272024081552', 'Sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '2', '123DNLD_1', 'Caja seca_1', 'Guadalajara_1', '2', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Manuel', '5', '500', '10', '50.00', '2', '17', '48', '483', '483', '14:40', '15:40', '2026-10-20', '16:40', '17:41', 'Nada', 'Suspendido', 'Angélica')
INFO - 2024-08-15 05:45:02 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 00:45:51 --> Config Class Initialized
INFO - 2024-08-15 00:45:51 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:45:51 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:45:51 --> Utf8 Class Initialized
INFO - 2024-08-15 00:45:51 --> URI Class Initialized
INFO - 2024-08-15 00:45:51 --> Router Class Initialized
INFO - 2024-08-15 00:45:51 --> Output Class Initialized
INFO - 2024-08-15 00:45:51 --> Security Class Initialized
DEBUG - 2024-08-15 00:45:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:45:51 --> Input Class Initialized
INFO - 2024-08-15 00:45:51 --> Language Class Initialized
INFO - 2024-08-15 00:45:51 --> Loader Class Initialized
INFO - 2024-08-15 00:45:51 --> Helper loaded: application_helper
INFO - 2024-08-15 00:45:51 --> Helper loaded: url_helper
INFO - 2024-08-15 00:45:51 --> Helper loaded: file_helper
INFO - 2024-08-15 00:45:51 --> Helper loaded: security_helper
INFO - 2024-08-15 00:45:51 --> Helper loaded: date_helper
INFO - 2024-08-15 00:45:51 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:45:51 --> Helper loaded: form_helper
INFO - 2024-08-15 00:45:51 --> Helper loaded: language_helper
INFO - 2024-08-15 00:45:51 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:45:51 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:45:51 --> Upload Class Initialized
INFO - 2024-08-15 00:45:51 --> Controller Class Initialized
INFO - 2024-08-15 00:45:51 --> Model "M_admin" initialized
INFO - 2024-08-15 00:45:51 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:45:51 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:45:51 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:45:51 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 05:45:51 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 05:45:51 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 05:45:51 --> Final output sent to browser
DEBUG - 2024-08-15 05:45:51 --> Total execution time: 0.2040
INFO - 2024-08-15 00:45:54 --> Config Class Initialized
INFO - 2024-08-15 00:45:54 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:45:54 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:45:54 --> Utf8 Class Initialized
INFO - 2024-08-15 00:45:54 --> URI Class Initialized
INFO - 2024-08-15 00:45:54 --> Router Class Initialized
INFO - 2024-08-15 00:45:54 --> Output Class Initialized
INFO - 2024-08-15 00:45:54 --> Security Class Initialized
DEBUG - 2024-08-15 00:45:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:45:54 --> Input Class Initialized
INFO - 2024-08-15 00:45:54 --> Language Class Initialized
INFO - 2024-08-15 00:45:54 --> Loader Class Initialized
INFO - 2024-08-15 00:45:54 --> Helper loaded: application_helper
INFO - 2024-08-15 00:45:54 --> Helper loaded: url_helper
INFO - 2024-08-15 00:45:54 --> Helper loaded: file_helper
INFO - 2024-08-15 00:45:54 --> Helper loaded: security_helper
INFO - 2024-08-15 00:45:54 --> Helper loaded: date_helper
INFO - 2024-08-15 00:45:54 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:45:54 --> Helper loaded: form_helper
INFO - 2024-08-15 00:45:54 --> Helper loaded: language_helper
INFO - 2024-08-15 00:45:54 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:45:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:45:54 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:45:54 --> Upload Class Initialized
INFO - 2024-08-15 00:45:54 --> Controller Class Initialized
INFO - 2024-08-15 00:45:54 --> Model "M_admin" initialized
INFO - 2024-08-15 00:45:54 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:45:54 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:45:54 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:45:54 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 05:45:54 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 05:45:54 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 05:45:54 --> Final output sent to browser
DEBUG - 2024-08-15 05:45:54 --> Total execution time: 0.1956
INFO - 2024-08-15 00:59:26 --> Config Class Initialized
INFO - 2024-08-15 00:59:26 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:59:26 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:59:26 --> Utf8 Class Initialized
INFO - 2024-08-15 00:59:26 --> URI Class Initialized
INFO - 2024-08-15 00:59:26 --> Router Class Initialized
INFO - 2024-08-15 00:59:26 --> Output Class Initialized
INFO - 2024-08-15 00:59:26 --> Security Class Initialized
DEBUG - 2024-08-15 00:59:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:59:26 --> Input Class Initialized
INFO - 2024-08-15 00:59:26 --> Language Class Initialized
INFO - 2024-08-15 00:59:26 --> Loader Class Initialized
INFO - 2024-08-15 00:59:26 --> Helper loaded: application_helper
INFO - 2024-08-15 00:59:26 --> Helper loaded: url_helper
INFO - 2024-08-15 00:59:26 --> Helper loaded: file_helper
INFO - 2024-08-15 00:59:26 --> Helper loaded: security_helper
INFO - 2024-08-15 00:59:26 --> Helper loaded: date_helper
INFO - 2024-08-15 00:59:26 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:59:26 --> Helper loaded: form_helper
INFO - 2024-08-15 00:59:26 --> Helper loaded: language_helper
INFO - 2024-08-15 00:59:26 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:59:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:59:26 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:59:26 --> Upload Class Initialized
INFO - 2024-08-15 00:59:26 --> Controller Class Initialized
INFO - 2024-08-15 00:59:26 --> Model "M_admin" initialized
INFO - 2024-08-15 00:59:26 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:59:26 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:59:26 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:59:26 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 05:59:26 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 05:59:26 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 05:59:26 --> Final output sent to browser
DEBUG - 2024-08-15 05:59:26 --> Total execution time: 0.1795
INFO - 2024-08-15 00:59:42 --> Config Class Initialized
INFO - 2024-08-15 00:59:42 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:59:42 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:59:42 --> Utf8 Class Initialized
INFO - 2024-08-15 00:59:42 --> URI Class Initialized
INFO - 2024-08-15 00:59:42 --> Router Class Initialized
INFO - 2024-08-15 00:59:42 --> Output Class Initialized
INFO - 2024-08-15 00:59:42 --> Security Class Initialized
DEBUG - 2024-08-15 00:59:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:59:42 --> Input Class Initialized
INFO - 2024-08-15 00:59:42 --> Language Class Initialized
INFO - 2024-08-15 00:59:42 --> Loader Class Initialized
INFO - 2024-08-15 00:59:42 --> Helper loaded: application_helper
INFO - 2024-08-15 00:59:42 --> Helper loaded: url_helper
INFO - 2024-08-15 00:59:42 --> Helper loaded: file_helper
INFO - 2024-08-15 00:59:42 --> Helper loaded: security_helper
INFO - 2024-08-15 00:59:42 --> Helper loaded: date_helper
INFO - 2024-08-15 00:59:42 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:59:42 --> Helper loaded: form_helper
INFO - 2024-08-15 00:59:42 --> Helper loaded: language_helper
INFO - 2024-08-15 00:59:42 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:59:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:59:42 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:59:42 --> Upload Class Initialized
INFO - 2024-08-15 00:59:42 --> Controller Class Initialized
INFO - 2024-08-15 00:59:42 --> Model "M_admin" initialized
INFO - 2024-08-15 00:59:42 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:59:42 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:59:42 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:59:42 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 00:59:42 --> Final output sent to browser
DEBUG - 2024-08-15 00:59:42 --> Total execution time: 0.1552
INFO - 2024-08-15 00:59:49 --> Config Class Initialized
INFO - 2024-08-15 00:59:49 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:59:49 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:59:49 --> Utf8 Class Initialized
INFO - 2024-08-15 00:59:49 --> URI Class Initialized
INFO - 2024-08-15 00:59:49 --> Router Class Initialized
INFO - 2024-08-15 00:59:49 --> Output Class Initialized
INFO - 2024-08-15 00:59:49 --> Security Class Initialized
DEBUG - 2024-08-15 00:59:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:59:49 --> Input Class Initialized
INFO - 2024-08-15 00:59:49 --> Language Class Initialized
INFO - 2024-08-15 00:59:49 --> Loader Class Initialized
INFO - 2024-08-15 00:59:49 --> Helper loaded: application_helper
INFO - 2024-08-15 00:59:49 --> Helper loaded: url_helper
INFO - 2024-08-15 00:59:49 --> Helper loaded: file_helper
INFO - 2024-08-15 00:59:49 --> Helper loaded: security_helper
INFO - 2024-08-15 00:59:49 --> Helper loaded: date_helper
INFO - 2024-08-15 00:59:49 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:59:49 --> Helper loaded: form_helper
INFO - 2024-08-15 00:59:49 --> Helper loaded: language_helper
INFO - 2024-08-15 00:59:49 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:59:49 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:59:49 --> Upload Class Initialized
INFO - 2024-08-15 00:59:49 --> Controller Class Initialized
INFO - 2024-08-15 00:59:49 --> Model "M_admin" initialized
INFO - 2024-08-15 00:59:49 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:59:49 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:59:49 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:59:49 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 00:59:49 --> Final output sent to browser
DEBUG - 2024-08-15 00:59:49 --> Total execution time: 0.1275
INFO - 2024-08-15 00:59:57 --> Config Class Initialized
INFO - 2024-08-15 00:59:57 --> Hooks Class Initialized
DEBUG - 2024-08-15 00:59:57 --> UTF-8 Support Enabled
INFO - 2024-08-15 00:59:57 --> Utf8 Class Initialized
INFO - 2024-08-15 00:59:57 --> URI Class Initialized
INFO - 2024-08-15 00:59:57 --> Router Class Initialized
INFO - 2024-08-15 00:59:57 --> Output Class Initialized
INFO - 2024-08-15 00:59:57 --> Security Class Initialized
DEBUG - 2024-08-15 00:59:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 00:59:57 --> Input Class Initialized
INFO - 2024-08-15 00:59:57 --> Language Class Initialized
INFO - 2024-08-15 00:59:57 --> Loader Class Initialized
INFO - 2024-08-15 00:59:57 --> Helper loaded: application_helper
INFO - 2024-08-15 00:59:57 --> Helper loaded: url_helper
INFO - 2024-08-15 00:59:57 --> Helper loaded: file_helper
INFO - 2024-08-15 00:59:57 --> Helper loaded: security_helper
INFO - 2024-08-15 00:59:57 --> Helper loaded: date_helper
INFO - 2024-08-15 00:59:57 --> Helper loaded: captcha_helper
INFO - 2024-08-15 00:59:57 --> Helper loaded: form_helper
INFO - 2024-08-15 00:59:57 --> Helper loaded: language_helper
INFO - 2024-08-15 00:59:57 --> Database Driver Class Initialized
DEBUG - 2024-08-15 00:59:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 00:59:57 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 00:59:57 --> Upload Class Initialized
INFO - 2024-08-15 00:59:57 --> Controller Class Initialized
INFO - 2024-08-15 00:59:57 --> Model "M_admin" initialized
INFO - 2024-08-15 00:59:57 --> Model "M_config" initialized
DEBUG - 2024-08-15 00:59:57 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 00:59:57 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 00:59:57 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 00:59:57 --> Final output sent to browser
DEBUG - 2024-08-15 00:59:57 --> Total execution time: 0.1644
INFO - 2024-08-15 01:01:27 --> Config Class Initialized
INFO - 2024-08-15 01:01:27 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:01:27 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:01:27 --> Utf8 Class Initialized
INFO - 2024-08-15 01:01:27 --> URI Class Initialized
INFO - 2024-08-15 01:01:27 --> Router Class Initialized
INFO - 2024-08-15 01:01:27 --> Output Class Initialized
INFO - 2024-08-15 01:01:27 --> Security Class Initialized
DEBUG - 2024-08-15 01:01:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:01:27 --> Input Class Initialized
INFO - 2024-08-15 01:01:27 --> Language Class Initialized
INFO - 2024-08-15 01:01:27 --> Loader Class Initialized
INFO - 2024-08-15 01:01:27 --> Helper loaded: application_helper
INFO - 2024-08-15 01:01:27 --> Helper loaded: url_helper
INFO - 2024-08-15 01:01:27 --> Helper loaded: file_helper
INFO - 2024-08-15 01:01:27 --> Helper loaded: security_helper
INFO - 2024-08-15 01:01:27 --> Helper loaded: date_helper
INFO - 2024-08-15 01:01:27 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:01:27 --> Helper loaded: form_helper
INFO - 2024-08-15 01:01:27 --> Helper loaded: language_helper
INFO - 2024-08-15 01:01:27 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:01:27 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:01:27 --> Upload Class Initialized
INFO - 2024-08-15 01:01:27 --> Controller Class Initialized
INFO - 2024-08-15 01:01:27 --> Model "M_admin" initialized
INFO - 2024-08-15 01:01:27 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:01:27 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:01:27 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:01:27 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 01:01:27 --> Final output sent to browser
DEBUG - 2024-08-15 01:01:27 --> Total execution time: 0.1566
INFO - 2024-08-15 01:02:08 --> Config Class Initialized
INFO - 2024-08-15 01:02:08 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:02:08 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:02:08 --> Utf8 Class Initialized
INFO - 2024-08-15 01:02:08 --> URI Class Initialized
INFO - 2024-08-15 01:02:08 --> Router Class Initialized
INFO - 2024-08-15 01:02:08 --> Output Class Initialized
INFO - 2024-08-15 01:02:08 --> Security Class Initialized
DEBUG - 2024-08-15 01:02:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:02:08 --> Input Class Initialized
INFO - 2024-08-15 01:02:08 --> Language Class Initialized
INFO - 2024-08-15 01:02:08 --> Loader Class Initialized
INFO - 2024-08-15 01:02:08 --> Helper loaded: application_helper
INFO - 2024-08-15 01:02:08 --> Helper loaded: url_helper
INFO - 2024-08-15 01:02:08 --> Helper loaded: file_helper
INFO - 2024-08-15 01:02:08 --> Helper loaded: security_helper
INFO - 2024-08-15 01:02:08 --> Helper loaded: date_helper
INFO - 2024-08-15 01:02:08 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:02:08 --> Helper loaded: form_helper
INFO - 2024-08-15 01:02:08 --> Helper loaded: language_helper
INFO - 2024-08-15 01:02:08 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:02:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:02:08 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:02:08 --> Upload Class Initialized
INFO - 2024-08-15 01:02:08 --> Controller Class Initialized
INFO - 2024-08-15 01:02:08 --> Model "M_admin" initialized
INFO - 2024-08-15 01:02:08 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:02:08 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:02:08 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:02:08 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 06:02:08 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16372024081563', 'sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '3', 'BAIFFCIO2024', 'Contenedor Flat Rack', 'Nuevo León', '3', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Pedro', '6', '200', '10', '20.00', '2', '18', '18', '182', '182', '17:00', '19:00', '2026-10-20', '21:00', '23:00', 'Ninguna_1', 'Activo', 'Angélica')
INFO - 2024-08-15 06:02:08 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 01:13:57 --> Config Class Initialized
INFO - 2024-08-15 01:13:57 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:13:57 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:13:57 --> Utf8 Class Initialized
INFO - 2024-08-15 01:13:57 --> URI Class Initialized
INFO - 2024-08-15 01:13:57 --> Router Class Initialized
INFO - 2024-08-15 01:13:57 --> Output Class Initialized
INFO - 2024-08-15 01:13:57 --> Security Class Initialized
DEBUG - 2024-08-15 01:13:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:13:57 --> Input Class Initialized
INFO - 2024-08-15 01:13:57 --> Language Class Initialized
INFO - 2024-08-15 01:13:57 --> Loader Class Initialized
INFO - 2024-08-15 01:13:57 --> Helper loaded: application_helper
INFO - 2024-08-15 01:13:57 --> Helper loaded: url_helper
INFO - 2024-08-15 01:13:57 --> Helper loaded: file_helper
INFO - 2024-08-15 01:13:57 --> Helper loaded: security_helper
INFO - 2024-08-15 01:13:57 --> Helper loaded: date_helper
INFO - 2024-08-15 01:13:57 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:13:57 --> Helper loaded: form_helper
INFO - 2024-08-15 01:13:57 --> Helper loaded: language_helper
INFO - 2024-08-15 01:13:57 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:13:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:13:57 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:13:57 --> Upload Class Initialized
INFO - 2024-08-15 01:13:57 --> Controller Class Initialized
INFO - 2024-08-15 01:13:57 --> Model "M_admin" initialized
INFO - 2024-08-15 01:13:57 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:13:57 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:13:57 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:13:57 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 06:13:57 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16372024081563', 'sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '3', 'BAIFFCIO2024', 'Contenedor Flat Rack', 'Nuevo León', '3', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Pedro', '6', '200', '10', '20.00', '2', '18', '18', '182', '182', '17:00', '19:00', '2026-10-20', '21:00', '23:00', 'Ninguna_1', 'Activo', 'Angélica')
INFO - 2024-08-15 06:13:57 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 01:21:16 --> Config Class Initialized
INFO - 2024-08-15 01:21:16 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:21:16 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:21:16 --> Utf8 Class Initialized
INFO - 2024-08-15 01:21:16 --> URI Class Initialized
INFO - 2024-08-15 01:21:16 --> Router Class Initialized
INFO - 2024-08-15 01:21:16 --> Output Class Initialized
INFO - 2024-08-15 01:21:16 --> Security Class Initialized
DEBUG - 2024-08-15 01:21:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:21:16 --> Input Class Initialized
INFO - 2024-08-15 01:21:16 --> Language Class Initialized
INFO - 2024-08-15 01:21:16 --> Loader Class Initialized
INFO - 2024-08-15 01:21:16 --> Helper loaded: application_helper
INFO - 2024-08-15 01:21:16 --> Helper loaded: url_helper
INFO - 2024-08-15 01:21:16 --> Helper loaded: file_helper
INFO - 2024-08-15 01:21:16 --> Helper loaded: security_helper
INFO - 2024-08-15 01:21:16 --> Helper loaded: date_helper
INFO - 2024-08-15 01:21:16 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:21:16 --> Helper loaded: form_helper
INFO - 2024-08-15 01:21:16 --> Helper loaded: language_helper
INFO - 2024-08-15 01:21:16 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:21:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:21:16 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:21:16 --> Upload Class Initialized
INFO - 2024-08-15 01:21:16 --> Controller Class Initialized
INFO - 2024-08-15 01:21:16 --> Model "M_admin" initialized
INFO - 2024-08-15 01:21:16 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:21:16 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:21:16 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:21:16 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 06:21:16 --> Query error: Column 'type_platform' cannot be null - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16372024081563', 'sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '3', 'BAIFFCIO2024', 'Contenedor Flat Rack', 'Nuevo León', '3', 'Descarga', '2', '10', NULL, '7', 'EI0SHJD123SJ', 'Tráiler', 'Pedro', '6', '200', '10', '20.00', '2', '18', '18', '182', '182', '17:00', '19:00', '2026-10-20', '21:00', '23:00', 'Ninguna_1', 'Activo', 'Angélica')
INFO - 2024-08-15 06:21:16 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 01:24:03 --> Config Class Initialized
INFO - 2024-08-15 01:24:03 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:24:03 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:24:03 --> Utf8 Class Initialized
INFO - 2024-08-15 01:24:03 --> URI Class Initialized
INFO - 2024-08-15 01:24:03 --> Router Class Initialized
INFO - 2024-08-15 01:24:03 --> Output Class Initialized
INFO - 2024-08-15 01:24:03 --> Security Class Initialized
DEBUG - 2024-08-15 01:24:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:24:03 --> Input Class Initialized
INFO - 2024-08-15 01:24:03 --> Language Class Initialized
INFO - 2024-08-15 01:24:03 --> Loader Class Initialized
INFO - 2024-08-15 01:24:03 --> Helper loaded: application_helper
INFO - 2024-08-15 01:24:03 --> Helper loaded: url_helper
INFO - 2024-08-15 01:24:03 --> Helper loaded: file_helper
INFO - 2024-08-15 01:24:03 --> Helper loaded: security_helper
INFO - 2024-08-15 01:24:03 --> Helper loaded: date_helper
INFO - 2024-08-15 01:24:03 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:24:03 --> Helper loaded: form_helper
INFO - 2024-08-15 01:24:03 --> Helper loaded: language_helper
INFO - 2024-08-15 01:24:03 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:24:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:24:03 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:24:03 --> Upload Class Initialized
INFO - 2024-08-15 01:24:03 --> Controller Class Initialized
INFO - 2024-08-15 01:24:03 --> Model "M_admin" initialized
INFO - 2024-08-15 01:24:03 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:24:03 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:24:03 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:24:03 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 06:24:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, ...' at line 1 - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform_data`, 0, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16372024081563', 'sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '3', 'BAIFFCIO2024', 'Contenedor Flat Rack', 'Nuevo León', '3', 'Descarga', '2', '10', Array, 1, '7', 'EI0SHJD123SJ', 'Tráiler', 'Pedro', '6', '200', '10', '20.00', '2', '18', '18', '182', '182', '17:00', '19:00', '2026-10-20', '21:00', '23:00', 'Ninguna_1', 'Activo', 'Angélica')
INFO - 2024-08-15 06:24:03 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 01:27:27 --> Config Class Initialized
INFO - 2024-08-15 01:27:27 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:27:27 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:27:27 --> Utf8 Class Initialized
INFO - 2024-08-15 01:27:27 --> URI Class Initialized
INFO - 2024-08-15 01:27:27 --> Router Class Initialized
INFO - 2024-08-15 01:27:27 --> Output Class Initialized
INFO - 2024-08-15 01:27:27 --> Security Class Initialized
DEBUG - 2024-08-15 01:27:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:27:27 --> Input Class Initialized
INFO - 2024-08-15 01:27:27 --> Language Class Initialized
INFO - 2024-08-15 01:27:27 --> Loader Class Initialized
INFO - 2024-08-15 01:27:27 --> Helper loaded: application_helper
INFO - 2024-08-15 01:27:27 --> Helper loaded: url_helper
INFO - 2024-08-15 01:27:27 --> Helper loaded: file_helper
INFO - 2024-08-15 01:27:27 --> Helper loaded: security_helper
INFO - 2024-08-15 01:27:27 --> Helper loaded: date_helper
INFO - 2024-08-15 01:27:27 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:27:27 --> Helper loaded: form_helper
INFO - 2024-08-15 01:27:27 --> Helper loaded: language_helper
INFO - 2024-08-15 01:27:27 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:27:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:27:27 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:27:27 --> Upload Class Initialized
INFO - 2024-08-15 01:27:27 --> Controller Class Initialized
INFO - 2024-08-15 01:27:27 --> Model "M_admin" initialized
INFO - 2024-08-15 01:27:27 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:27:27 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:27:27 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:27:27 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 06:27:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, ...' at line 1 - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform_data`, 0, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16372024081563', 'sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '3', 'BAIFFCIO2024', 'Contenedor Flat Rack', 'Nuevo León', '3', 'Descarga', '2', '10', Array, 1, '7', 'EI0SHJD123SJ', 'Tráiler', 'Pedro', '6', '200', '10', '20.00', '2', '18', '18', '182', '182', '17:00', '19:00', '2026-10-20', '21:00', '23:00', 'Ninguna_1', 'Activo', 'Angélica')
INFO - 2024-08-15 06:27:27 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 01:28:00 --> Config Class Initialized
INFO - 2024-08-15 01:28:00 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:28:00 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:28:00 --> Utf8 Class Initialized
INFO - 2024-08-15 01:28:00 --> URI Class Initialized
INFO - 2024-08-15 01:28:00 --> Router Class Initialized
INFO - 2024-08-15 01:28:00 --> Output Class Initialized
INFO - 2024-08-15 01:28:00 --> Security Class Initialized
DEBUG - 2024-08-15 01:28:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:28:00 --> Input Class Initialized
INFO - 2024-08-15 01:28:00 --> Language Class Initialized
INFO - 2024-08-15 01:28:00 --> Loader Class Initialized
INFO - 2024-08-15 01:28:00 --> Helper loaded: application_helper
INFO - 2024-08-15 01:28:00 --> Helper loaded: url_helper
INFO - 2024-08-15 01:28:00 --> Helper loaded: file_helper
INFO - 2024-08-15 01:28:00 --> Helper loaded: security_helper
INFO - 2024-08-15 01:28:00 --> Helper loaded: date_helper
INFO - 2024-08-15 01:28:00 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:28:00 --> Helper loaded: form_helper
INFO - 2024-08-15 01:28:00 --> Helper loaded: language_helper
INFO - 2024-08-15 01:28:00 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:28:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:28:00 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:28:00 --> Upload Class Initialized
INFO - 2024-08-15 01:28:00 --> Controller Class Initialized
INFO - 2024-08-15 01:28:00 --> Model "M_admin" initialized
INFO - 2024-08-15 01:28:00 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:28:00 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:28:00 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:28:00 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 06:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, ...' at line 1 - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform_data`, 0, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16372024081563', 'sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '3', 'BAIFFCIO2024', 'Contenedor Flat Rack', 'Nuevo León', '3', 'Descarga', '2', '10', 'Estándar', 1, '7', 'EI0SHJD123SJ', 'Tráiler', 'Pedro', '6', '200', '10', '20.00', '2', '18', '18', '182', '182', '17:00', '19:00', '2026-10-20', '21:00', '23:00', 'Ninguna_1', 'Activo', 'Angélica')
INFO - 2024-08-15 06:28:00 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 01:28:51 --> Config Class Initialized
INFO - 2024-08-15 01:28:51 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:28:51 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:28:51 --> Utf8 Class Initialized
INFO - 2024-08-15 01:28:51 --> URI Class Initialized
INFO - 2024-08-15 01:28:51 --> Router Class Initialized
INFO - 2024-08-15 01:28:51 --> Output Class Initialized
INFO - 2024-08-15 01:28:51 --> Security Class Initialized
DEBUG - 2024-08-15 01:28:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:28:51 --> Input Class Initialized
INFO - 2024-08-15 01:28:51 --> Language Class Initialized
INFO - 2024-08-15 01:28:51 --> Loader Class Initialized
INFO - 2024-08-15 01:28:51 --> Helper loaded: application_helper
INFO - 2024-08-15 01:28:51 --> Helper loaded: url_helper
INFO - 2024-08-15 01:28:51 --> Helper loaded: file_helper
INFO - 2024-08-15 01:28:51 --> Helper loaded: security_helper
INFO - 2024-08-15 01:28:51 --> Helper loaded: date_helper
INFO - 2024-08-15 01:28:51 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:28:51 --> Helper loaded: form_helper
INFO - 2024-08-15 01:28:51 --> Helper loaded: language_helper
INFO - 2024-08-15 01:28:51 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:28:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:28:51 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:28:51 --> Upload Class Initialized
INFO - 2024-08-15 01:28:52 --> Controller Class Initialized
INFO - 2024-08-15 01:28:52 --> Model "M_admin" initialized
INFO - 2024-08-15 01:28:52 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:28:52 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:28:52 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:28:52 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 06:28:52 --> Query error: Unknown column 'type_platform_data' in 'field list' - Invalid query: INSERT INTO `arrival` (`identification_number`, `sale_order`, `id_supplier`, `nama_supplier`, `id_product`, `product_name`, `event_type`, `id_container`, `container_number`, `container_type`, `state`, `id_origin`, `type_maneuver`, `id_maneuver`, `id_platform`, `type_platform_data`, `id_transport`, `platenumber`, `vehicletype`, `name_driver`, `id_driver`, `stock`, `quantity_product_pallet`, `quantity_pallet`, `damaged_pallets`, `damaged_stock`, `good_pallets`, `good_stock`, `available_pallets`, `arrival_time`, `maneuver_start`, `expiration_date`, `maneuver_end`, `departure_time`, `note`, `status`, `created_by`) VALUES ('AS16372024081563', 'sin definir', '16', 'Innovet', '41', 'Termoformado', 'Arribo', '3', 'BAIFFCIO2024', 'Contenedor Flat Rack', 'Nuevo León', '3', 'Descarga', '2', '10', 'Estándar', '7', 'EI0SHJD123SJ', 'Tráiler', 'Pedro', '6', '200', '10', '20.00', '2', '18', '18', '182', '182', '17:00', '19:00', '2026-10-20', '21:00', '23:00', 'Ninguna_1', 'Activo', 'Angélica')
INFO - 2024-08-15 06:28:52 --> Language file loaded: language/english/db_lang.php
INFO - 2024-08-15 01:29:14 --> Config Class Initialized
INFO - 2024-08-15 01:29:14 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:29:14 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:29:14 --> Utf8 Class Initialized
INFO - 2024-08-15 01:29:14 --> URI Class Initialized
INFO - 2024-08-15 01:29:14 --> Router Class Initialized
INFO - 2024-08-15 01:29:14 --> Output Class Initialized
INFO - 2024-08-15 01:29:14 --> Security Class Initialized
DEBUG - 2024-08-15 01:29:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:29:14 --> Input Class Initialized
INFO - 2024-08-15 01:29:14 --> Language Class Initialized
INFO - 2024-08-15 01:29:14 --> Loader Class Initialized
INFO - 2024-08-15 01:29:14 --> Helper loaded: application_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: url_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: file_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: security_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: date_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: form_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: language_helper
INFO - 2024-08-15 01:29:14 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:29:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:29:14 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:29:14 --> Upload Class Initialized
INFO - 2024-08-15 01:29:14 --> Controller Class Initialized
INFO - 2024-08-15 01:29:14 --> Model "M_admin" initialized
INFO - 2024-08-15 01:29:14 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:29:14 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:29:14 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:29:14 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 01:29:14 --> Config Class Initialized
INFO - 2024-08-15 01:29:14 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:29:14 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:29:14 --> Utf8 Class Initialized
INFO - 2024-08-15 01:29:14 --> URI Class Initialized
INFO - 2024-08-15 01:29:14 --> Router Class Initialized
INFO - 2024-08-15 01:29:14 --> Output Class Initialized
INFO - 2024-08-15 01:29:14 --> Security Class Initialized
DEBUG - 2024-08-15 01:29:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:29:14 --> Input Class Initialized
INFO - 2024-08-15 01:29:14 --> Language Class Initialized
INFO - 2024-08-15 01:29:14 --> Loader Class Initialized
INFO - 2024-08-15 01:29:14 --> Helper loaded: application_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: url_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: file_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: security_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: date_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: form_helper
INFO - 2024-08-15 01:29:14 --> Helper loaded: language_helper
INFO - 2024-08-15 01:29:14 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:29:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:29:14 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:29:14 --> Upload Class Initialized
INFO - 2024-08-15 01:29:14 --> Controller Class Initialized
INFO - 2024-08-15 01:29:14 --> Model "M_admin" initialized
INFO - 2024-08-15 01:29:14 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:29:14 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:29:14 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:29:14 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 06:29:14 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 06:29:14 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 06:29:14 --> Final output sent to browser
DEBUG - 2024-08-15 06:29:14 --> Total execution time: 0.1448
INFO - 2024-08-15 01:30:26 --> Config Class Initialized
INFO - 2024-08-15 01:30:26 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:30:26 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:30:26 --> Utf8 Class Initialized
INFO - 2024-08-15 01:30:26 --> URI Class Initialized
INFO - 2024-08-15 01:30:26 --> Router Class Initialized
INFO - 2024-08-15 01:30:26 --> Output Class Initialized
INFO - 2024-08-15 01:30:26 --> Security Class Initialized
DEBUG - 2024-08-15 01:30:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:30:26 --> Input Class Initialized
INFO - 2024-08-15 01:30:26 --> Language Class Initialized
INFO - 2024-08-15 01:30:26 --> Loader Class Initialized
INFO - 2024-08-15 01:30:26 --> Helper loaded: application_helper
INFO - 2024-08-15 01:30:26 --> Helper loaded: url_helper
INFO - 2024-08-15 01:30:26 --> Helper loaded: file_helper
INFO - 2024-08-15 01:30:26 --> Helper loaded: security_helper
INFO - 2024-08-15 01:30:26 --> Helper loaded: date_helper
INFO - 2024-08-15 01:30:26 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:30:26 --> Helper loaded: form_helper
INFO - 2024-08-15 01:30:26 --> Helper loaded: language_helper
INFO - 2024-08-15 01:30:26 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:30:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:30:26 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:30:26 --> Upload Class Initialized
INFO - 2024-08-15 01:30:26 --> Controller Class Initialized
INFO - 2024-08-15 01:30:26 --> Model "M_admin" initialized
INFO - 2024-08-15 01:30:26 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:30:26 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:30:26 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:30:26 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 06:30:26 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 06:30:26 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 06:30:26 --> Final output sent to browser
DEBUG - 2024-08-15 06:30:26 --> Total execution time: 0.1794
INFO - 2024-08-15 01:32:26 --> Config Class Initialized
INFO - 2024-08-15 01:32:26 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:32:26 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:32:26 --> Utf8 Class Initialized
INFO - 2024-08-15 01:32:26 --> URI Class Initialized
INFO - 2024-08-15 01:32:26 --> Router Class Initialized
INFO - 2024-08-15 01:32:26 --> Output Class Initialized
INFO - 2024-08-15 01:32:26 --> Security Class Initialized
DEBUG - 2024-08-15 01:32:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:32:26 --> Input Class Initialized
INFO - 2024-08-15 01:32:26 --> Language Class Initialized
INFO - 2024-08-15 01:32:26 --> Loader Class Initialized
INFO - 2024-08-15 01:32:26 --> Helper loaded: application_helper
INFO - 2024-08-15 01:32:26 --> Helper loaded: url_helper
INFO - 2024-08-15 01:32:26 --> Helper loaded: file_helper
INFO - 2024-08-15 01:32:26 --> Helper loaded: security_helper
INFO - 2024-08-15 01:32:26 --> Helper loaded: date_helper
INFO - 2024-08-15 01:32:26 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:32:26 --> Helper loaded: form_helper
INFO - 2024-08-15 01:32:26 --> Helper loaded: language_helper
INFO - 2024-08-15 01:32:26 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:32:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:32:26 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:32:26 --> Upload Class Initialized
INFO - 2024-08-15 01:32:27 --> Controller Class Initialized
INFO - 2024-08-15 01:32:27 --> Model "M_admin" initialized
INFO - 2024-08-15 01:32:27 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:32:27 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:32:27 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:32:27 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 01:32:27 --> Final output sent to browser
DEBUG - 2024-08-15 01:32:27 --> Total execution time: 0.1338
INFO - 2024-08-15 01:32:43 --> Config Class Initialized
INFO - 2024-08-15 01:32:43 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:32:43 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:32:43 --> Utf8 Class Initialized
INFO - 2024-08-15 01:32:43 --> URI Class Initialized
INFO - 2024-08-15 01:32:43 --> Router Class Initialized
INFO - 2024-08-15 01:32:43 --> Output Class Initialized
INFO - 2024-08-15 01:32:43 --> Security Class Initialized
DEBUG - 2024-08-15 01:32:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:32:43 --> Input Class Initialized
INFO - 2024-08-15 01:32:43 --> Language Class Initialized
INFO - 2024-08-15 01:32:43 --> Loader Class Initialized
INFO - 2024-08-15 01:32:43 --> Helper loaded: application_helper
INFO - 2024-08-15 01:32:43 --> Helper loaded: url_helper
INFO - 2024-08-15 01:32:43 --> Helper loaded: file_helper
INFO - 2024-08-15 01:32:43 --> Helper loaded: security_helper
INFO - 2024-08-15 01:32:43 --> Helper loaded: date_helper
INFO - 2024-08-15 01:32:43 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:32:43 --> Helper loaded: form_helper
INFO - 2024-08-15 01:32:43 --> Helper loaded: language_helper
INFO - 2024-08-15 01:32:43 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:32:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:32:43 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:32:43 --> Upload Class Initialized
INFO - 2024-08-15 01:32:43 --> Controller Class Initialized
INFO - 2024-08-15 01:32:43 --> Model "M_admin" initialized
INFO - 2024-08-15 01:32:43 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:32:43 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:32:43 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:32:43 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 01:32:43 --> Final output sent to browser
DEBUG - 2024-08-15 01:32:43 --> Total execution time: 0.1417
INFO - 2024-08-15 01:32:57 --> Config Class Initialized
INFO - 2024-08-15 01:32:57 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:32:57 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:32:57 --> Utf8 Class Initialized
INFO - 2024-08-15 01:32:57 --> URI Class Initialized
INFO - 2024-08-15 01:32:57 --> Router Class Initialized
INFO - 2024-08-15 01:32:57 --> Output Class Initialized
INFO - 2024-08-15 01:32:57 --> Security Class Initialized
DEBUG - 2024-08-15 01:32:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:32:57 --> Input Class Initialized
INFO - 2024-08-15 01:32:57 --> Language Class Initialized
INFO - 2024-08-15 01:32:57 --> Loader Class Initialized
INFO - 2024-08-15 01:32:57 --> Helper loaded: application_helper
INFO - 2024-08-15 01:32:57 --> Helper loaded: url_helper
INFO - 2024-08-15 01:32:57 --> Helper loaded: file_helper
INFO - 2024-08-15 01:32:57 --> Helper loaded: security_helper
INFO - 2024-08-15 01:32:57 --> Helper loaded: date_helper
INFO - 2024-08-15 01:32:57 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:32:57 --> Helper loaded: form_helper
INFO - 2024-08-15 01:32:57 --> Helper loaded: language_helper
INFO - 2024-08-15 01:32:57 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:32:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:32:57 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:32:57 --> Upload Class Initialized
INFO - 2024-08-15 01:32:57 --> Controller Class Initialized
INFO - 2024-08-15 01:32:57 --> Model "M_admin" initialized
INFO - 2024-08-15 01:32:57 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:32:57 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:32:57 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:32:57 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 01:32:57 --> Final output sent to browser
DEBUG - 2024-08-15 01:32:57 --> Total execution time: 0.1599
INFO - 2024-08-15 01:33:17 --> Config Class Initialized
INFO - 2024-08-15 01:33:17 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:33:17 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:33:17 --> Utf8 Class Initialized
INFO - 2024-08-15 01:33:17 --> URI Class Initialized
INFO - 2024-08-15 01:33:17 --> Router Class Initialized
INFO - 2024-08-15 01:33:17 --> Output Class Initialized
INFO - 2024-08-15 01:33:17 --> Security Class Initialized
DEBUG - 2024-08-15 01:33:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:33:17 --> Input Class Initialized
INFO - 2024-08-15 01:33:17 --> Language Class Initialized
INFO - 2024-08-15 01:33:17 --> Loader Class Initialized
INFO - 2024-08-15 01:33:17 --> Helper loaded: application_helper
INFO - 2024-08-15 01:33:17 --> Helper loaded: url_helper
INFO - 2024-08-15 01:33:17 --> Helper loaded: file_helper
INFO - 2024-08-15 01:33:17 --> Helper loaded: security_helper
INFO - 2024-08-15 01:33:17 --> Helper loaded: date_helper
INFO - 2024-08-15 01:33:17 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:33:17 --> Helper loaded: form_helper
INFO - 2024-08-15 01:33:17 --> Helper loaded: language_helper
INFO - 2024-08-15 01:33:17 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:33:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:33:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:33:17 --> Upload Class Initialized
INFO - 2024-08-15 01:33:17 --> Controller Class Initialized
INFO - 2024-08-15 01:33:17 --> Model "M_admin" initialized
INFO - 2024-08-15 01:33:17 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:33:17 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:33:17 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:33:17 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 01:33:17 --> Final output sent to browser
DEBUG - 2024-08-15 01:33:17 --> Total execution time: 0.1525
INFO - 2024-08-15 01:34:27 --> Config Class Initialized
INFO - 2024-08-15 01:34:27 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:34:27 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:34:27 --> Utf8 Class Initialized
INFO - 2024-08-15 01:34:27 --> URI Class Initialized
INFO - 2024-08-15 01:34:27 --> Router Class Initialized
INFO - 2024-08-15 01:34:27 --> Output Class Initialized
INFO - 2024-08-15 01:34:27 --> Security Class Initialized
DEBUG - 2024-08-15 01:34:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:34:27 --> Input Class Initialized
INFO - 2024-08-15 01:34:27 --> Language Class Initialized
INFO - 2024-08-15 01:34:27 --> Loader Class Initialized
INFO - 2024-08-15 01:34:27 --> Helper loaded: application_helper
INFO - 2024-08-15 01:34:27 --> Helper loaded: url_helper
INFO - 2024-08-15 01:34:27 --> Helper loaded: file_helper
INFO - 2024-08-15 01:34:27 --> Helper loaded: security_helper
INFO - 2024-08-15 01:34:27 --> Helper loaded: date_helper
INFO - 2024-08-15 01:34:27 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:34:27 --> Helper loaded: form_helper
INFO - 2024-08-15 01:34:27 --> Helper loaded: language_helper
INFO - 2024-08-15 01:34:27 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:34:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:34:27 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:34:27 --> Upload Class Initialized
INFO - 2024-08-15 01:34:27 --> Controller Class Initialized
INFO - 2024-08-15 01:34:27 --> Model "M_admin" initialized
INFO - 2024-08-15 01:34:27 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:34:27 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:34:27 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:34:27 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 01:34:27 --> Final output sent to browser
DEBUG - 2024-08-15 01:34:27 --> Total execution time: 0.1337
INFO - 2024-08-15 01:37:53 --> Config Class Initialized
INFO - 2024-08-15 01:37:53 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:37:53 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:37:53 --> Utf8 Class Initialized
INFO - 2024-08-15 01:37:53 --> URI Class Initialized
INFO - 2024-08-15 01:37:53 --> Router Class Initialized
INFO - 2024-08-15 01:37:53 --> Output Class Initialized
INFO - 2024-08-15 01:37:53 --> Security Class Initialized
DEBUG - 2024-08-15 01:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:37:53 --> Input Class Initialized
INFO - 2024-08-15 01:37:53 --> Language Class Initialized
INFO - 2024-08-15 01:37:53 --> Loader Class Initialized
INFO - 2024-08-15 01:37:53 --> Helper loaded: application_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: url_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: file_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: security_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: date_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: form_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: language_helper
INFO - 2024-08-15 01:37:53 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:37:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:37:53 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:37:53 --> Upload Class Initialized
INFO - 2024-08-15 01:37:53 --> Controller Class Initialized
INFO - 2024-08-15 01:37:53 --> Model "M_admin" initialized
INFO - 2024-08-15 01:37:53 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:37:53 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:37:53 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:37:53 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 01:37:53 --> Config Class Initialized
INFO - 2024-08-15 01:37:53 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:37:53 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:37:53 --> Utf8 Class Initialized
INFO - 2024-08-15 01:37:53 --> URI Class Initialized
INFO - 2024-08-15 01:37:53 --> Router Class Initialized
INFO - 2024-08-15 01:37:53 --> Output Class Initialized
INFO - 2024-08-15 01:37:53 --> Security Class Initialized
DEBUG - 2024-08-15 01:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:37:53 --> Input Class Initialized
INFO - 2024-08-15 01:37:53 --> Language Class Initialized
INFO - 2024-08-15 01:37:53 --> Loader Class Initialized
INFO - 2024-08-15 01:37:53 --> Helper loaded: application_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: url_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: file_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: security_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: date_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: form_helper
INFO - 2024-08-15 01:37:53 --> Helper loaded: language_helper
INFO - 2024-08-15 01:37:53 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:37:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:37:53 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:37:53 --> Upload Class Initialized
INFO - 2024-08-15 01:37:53 --> Controller Class Initialized
INFO - 2024-08-15 01:37:53 --> Model "M_admin" initialized
INFO - 2024-08-15 01:37:53 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:37:53 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:37:53 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:37:53 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 06:37:53 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 06:37:53 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 06:37:53 --> Final output sent to browser
DEBUG - 2024-08-15 06:37:53 --> Total execution time: 0.2126
INFO - 2024-08-15 01:38:04 --> Config Class Initialized
INFO - 2024-08-15 01:38:04 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:38:04 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:38:04 --> Utf8 Class Initialized
INFO - 2024-08-15 01:38:04 --> URI Class Initialized
INFO - 2024-08-15 01:38:04 --> Router Class Initialized
INFO - 2024-08-15 01:38:04 --> Output Class Initialized
INFO - 2024-08-15 01:38:04 --> Security Class Initialized
DEBUG - 2024-08-15 01:38:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:38:04 --> Input Class Initialized
INFO - 2024-08-15 01:38:04 --> Language Class Initialized
INFO - 2024-08-15 01:38:04 --> Loader Class Initialized
INFO - 2024-08-15 01:38:04 --> Helper loaded: application_helper
INFO - 2024-08-15 01:38:04 --> Helper loaded: url_helper
INFO - 2024-08-15 01:38:04 --> Helper loaded: file_helper
INFO - 2024-08-15 01:38:04 --> Helper loaded: security_helper
INFO - 2024-08-15 01:38:04 --> Helper loaded: date_helper
INFO - 2024-08-15 01:38:04 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:38:04 --> Helper loaded: form_helper
INFO - 2024-08-15 01:38:04 --> Helper loaded: language_helper
INFO - 2024-08-15 01:38:04 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:38:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:38:04 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:38:04 --> Upload Class Initialized
INFO - 2024-08-15 01:38:04 --> Controller Class Initialized
INFO - 2024-08-15 01:38:04 --> Model "M_admin" initialized
INFO - 2024-08-15 01:38:04 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:38:04 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:38:04 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:38:04 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 06:38:04 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 06:38:04 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 06:38:04 --> Final output sent to browser
DEBUG - 2024-08-15 06:38:04 --> Total execution time: 0.1739
INFO - 2024-08-15 01:38:40 --> Config Class Initialized
INFO - 2024-08-15 01:38:40 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:38:40 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:38:40 --> Utf8 Class Initialized
INFO - 2024-08-15 01:38:40 --> URI Class Initialized
INFO - 2024-08-15 01:38:40 --> Router Class Initialized
INFO - 2024-08-15 01:38:40 --> Output Class Initialized
INFO - 2024-08-15 01:38:40 --> Security Class Initialized
DEBUG - 2024-08-15 01:38:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:38:40 --> Input Class Initialized
INFO - 2024-08-15 01:38:40 --> Language Class Initialized
INFO - 2024-08-15 01:38:40 --> Loader Class Initialized
INFO - 2024-08-15 01:38:40 --> Helper loaded: application_helper
INFO - 2024-08-15 01:38:40 --> Helper loaded: url_helper
INFO - 2024-08-15 01:38:40 --> Helper loaded: file_helper
INFO - 2024-08-15 01:38:40 --> Helper loaded: security_helper
INFO - 2024-08-15 01:38:40 --> Helper loaded: date_helper
INFO - 2024-08-15 01:38:40 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:38:40 --> Helper loaded: form_helper
INFO - 2024-08-15 01:38:40 --> Helper loaded: language_helper
INFO - 2024-08-15 01:38:40 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:38:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:38:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:38:40 --> Upload Class Initialized
INFO - 2024-08-15 01:38:40 --> Controller Class Initialized
INFO - 2024-08-15 01:38:40 --> Model "M_admin" initialized
INFO - 2024-08-15 01:38:40 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:38:40 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:38:40 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:38:40 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 06:38:40 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/supplier.php
INFO - 2024-08-15 06:38:40 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 06:38:40 --> Final output sent to browser
DEBUG - 2024-08-15 06:38:40 --> Total execution time: 0.1818
INFO - 2024-08-15 01:38:43 --> Config Class Initialized
INFO - 2024-08-15 01:38:43 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:38:43 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:38:43 --> Utf8 Class Initialized
INFO - 2024-08-15 01:38:43 --> URI Class Initialized
INFO - 2024-08-15 01:38:43 --> Router Class Initialized
INFO - 2024-08-15 01:38:43 --> Output Class Initialized
INFO - 2024-08-15 01:38:43 --> Security Class Initialized
DEBUG - 2024-08-15 01:38:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:38:43 --> Input Class Initialized
INFO - 2024-08-15 01:38:43 --> Language Class Initialized
INFO - 2024-08-15 01:38:43 --> Loader Class Initialized
INFO - 2024-08-15 01:38:43 --> Helper loaded: application_helper
INFO - 2024-08-15 01:38:43 --> Helper loaded: url_helper
INFO - 2024-08-15 01:38:43 --> Helper loaded: file_helper
INFO - 2024-08-15 01:38:43 --> Helper loaded: security_helper
INFO - 2024-08-15 01:38:43 --> Helper loaded: date_helper
INFO - 2024-08-15 01:38:43 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:38:43 --> Helper loaded: form_helper
INFO - 2024-08-15 01:38:43 --> Helper loaded: language_helper
INFO - 2024-08-15 01:38:43 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:38:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:38:43 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:38:43 --> Upload Class Initialized
INFO - 2024-08-15 01:38:43 --> Controller Class Initialized
INFO - 2024-08-15 01:38:43 --> Model "M_admin" initialized
INFO - 2024-08-15 01:38:43 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:38:43 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:38:43 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:38:43 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 06:38:43 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/supplier.php
INFO - 2024-08-15 06:38:43 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 06:38:43 --> Final output sent to browser
DEBUG - 2024-08-15 06:38:43 --> Total execution time: 0.1609
INFO - 2024-08-15 01:40:10 --> Config Class Initialized
INFO - 2024-08-15 01:40:10 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:40:10 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:40:10 --> Utf8 Class Initialized
INFO - 2024-08-15 01:40:10 --> URI Class Initialized
INFO - 2024-08-15 01:40:10 --> Router Class Initialized
INFO - 2024-08-15 01:40:10 --> Output Class Initialized
INFO - 2024-08-15 01:40:10 --> Security Class Initialized
DEBUG - 2024-08-15 01:40:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:40:10 --> Input Class Initialized
INFO - 2024-08-15 01:40:10 --> Language Class Initialized
INFO - 2024-08-15 01:40:10 --> Loader Class Initialized
INFO - 2024-08-15 01:40:10 --> Helper loaded: application_helper
INFO - 2024-08-15 01:40:10 --> Helper loaded: url_helper
INFO - 2024-08-15 01:40:10 --> Helper loaded: file_helper
INFO - 2024-08-15 01:40:10 --> Helper loaded: security_helper
INFO - 2024-08-15 01:40:10 --> Helper loaded: date_helper
INFO - 2024-08-15 01:40:10 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:40:11 --> Helper loaded: form_helper
INFO - 2024-08-15 01:40:11 --> Helper loaded: language_helper
INFO - 2024-08-15 01:40:11 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:40:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:40:11 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:40:11 --> Upload Class Initialized
INFO - 2024-08-15 01:40:11 --> Controller Class Initialized
INFO - 2024-08-15 01:40:11 --> Model "M_admin" initialized
INFO - 2024-08-15 01:40:11 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:40:11 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:40:11 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:40:11 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 06:40:11 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/supplier.php
INFO - 2024-08-15 06:40:11 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 06:40:11 --> Final output sent to browser
DEBUG - 2024-08-15 06:40:11 --> Total execution time: 0.1595
INFO - 2024-08-15 01:40:29 --> Config Class Initialized
INFO - 2024-08-15 01:40:29 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:40:29 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:40:29 --> Utf8 Class Initialized
INFO - 2024-08-15 01:40:29 --> URI Class Initialized
INFO - 2024-08-15 01:40:29 --> Router Class Initialized
INFO - 2024-08-15 01:40:29 --> Output Class Initialized
INFO - 2024-08-15 01:40:29 --> Security Class Initialized
DEBUG - 2024-08-15 01:40:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:40:29 --> Input Class Initialized
INFO - 2024-08-15 01:40:29 --> Language Class Initialized
INFO - 2024-08-15 01:40:29 --> Loader Class Initialized
INFO - 2024-08-15 01:40:29 --> Helper loaded: application_helper
INFO - 2024-08-15 01:40:29 --> Helper loaded: url_helper
INFO - 2024-08-15 01:40:29 --> Helper loaded: file_helper
INFO - 2024-08-15 01:40:29 --> Helper loaded: security_helper
INFO - 2024-08-15 01:40:29 --> Helper loaded: date_helper
INFO - 2024-08-15 01:40:29 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:40:29 --> Helper loaded: form_helper
INFO - 2024-08-15 01:40:29 --> Helper loaded: language_helper
INFO - 2024-08-15 01:40:29 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:40:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:40:29 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:40:29 --> Upload Class Initialized
INFO - 2024-08-15 01:40:29 --> Controller Class Initialized
INFO - 2024-08-15 01:40:29 --> Model "M_admin" initialized
INFO - 2024-08-15 01:40:29 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:40:29 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:40:29 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:40:29 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 06:40:29 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 06:40:29 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 06:40:29 --> Final output sent to browser
DEBUG - 2024-08-15 06:40:29 --> Total execution time: 0.1586
INFO - 2024-08-15 01:40:55 --> Config Class Initialized
INFO - 2024-08-15 01:40:55 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:40:55 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:40:55 --> Utf8 Class Initialized
INFO - 2024-08-15 01:40:55 --> URI Class Initialized
INFO - 2024-08-15 01:40:55 --> Router Class Initialized
INFO - 2024-08-15 01:40:55 --> Output Class Initialized
INFO - 2024-08-15 01:40:55 --> Security Class Initialized
DEBUG - 2024-08-15 01:40:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:40:55 --> Input Class Initialized
INFO - 2024-08-15 01:40:55 --> Language Class Initialized
INFO - 2024-08-15 01:40:55 --> Loader Class Initialized
INFO - 2024-08-15 01:40:55 --> Helper loaded: application_helper
INFO - 2024-08-15 01:40:55 --> Helper loaded: url_helper
INFO - 2024-08-15 01:40:55 --> Helper loaded: file_helper
INFO - 2024-08-15 01:40:55 --> Helper loaded: security_helper
INFO - 2024-08-15 01:40:55 --> Helper loaded: date_helper
INFO - 2024-08-15 01:40:55 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:40:55 --> Helper loaded: form_helper
INFO - 2024-08-15 01:40:55 --> Helper loaded: language_helper
INFO - 2024-08-15 01:40:55 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:40:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:40:55 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:40:55 --> Upload Class Initialized
INFO - 2024-08-15 01:40:55 --> Controller Class Initialized
INFO - 2024-08-15 01:40:55 --> Model "M_admin" initialized
INFO - 2024-08-15 01:40:55 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:40:55 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:40:55 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:40:55 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 06:40:55 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 06:40:55 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 06:40:55 --> Final output sent to browser
DEBUG - 2024-08-15 06:40:55 --> Total execution time: 0.1597
INFO - 2024-08-15 01:40:59 --> Config Class Initialized
INFO - 2024-08-15 01:40:59 --> Hooks Class Initialized
DEBUG - 2024-08-15 01:40:59 --> UTF-8 Support Enabled
INFO - 2024-08-15 01:40:59 --> Utf8 Class Initialized
INFO - 2024-08-15 01:40:59 --> URI Class Initialized
INFO - 2024-08-15 01:40:59 --> Router Class Initialized
INFO - 2024-08-15 01:40:59 --> Output Class Initialized
INFO - 2024-08-15 01:40:59 --> Security Class Initialized
DEBUG - 2024-08-15 01:40:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 01:40:59 --> Input Class Initialized
INFO - 2024-08-15 01:40:59 --> Language Class Initialized
INFO - 2024-08-15 01:40:59 --> Loader Class Initialized
INFO - 2024-08-15 01:40:59 --> Helper loaded: application_helper
INFO - 2024-08-15 01:40:59 --> Helper loaded: url_helper
INFO - 2024-08-15 01:40:59 --> Helper loaded: file_helper
INFO - 2024-08-15 01:40:59 --> Helper loaded: security_helper
INFO - 2024-08-15 01:40:59 --> Helper loaded: date_helper
INFO - 2024-08-15 01:40:59 --> Helper loaded: captcha_helper
INFO - 2024-08-15 01:40:59 --> Helper loaded: form_helper
INFO - 2024-08-15 01:40:59 --> Helper loaded: language_helper
INFO - 2024-08-15 01:40:59 --> Database Driver Class Initialized
DEBUG - 2024-08-15 01:40:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 01:40:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 01:40:59 --> Upload Class Initialized
INFO - 2024-08-15 01:40:59 --> Controller Class Initialized
INFO - 2024-08-15 01:40:59 --> Model "M_admin" initialized
INFO - 2024-08-15 01:40:59 --> Model "M_config" initialized
DEBUG - 2024-08-15 01:40:59 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 01:40:59 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 01:40:59 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 06:40:59 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/details.php
INFO - 2024-08-15 06:40:59 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 06:40:59 --> Final output sent to browser
DEBUG - 2024-08-15 06:40:59 --> Total execution time: 0.1523
INFO - 2024-08-15 02:00:12 --> Config Class Initialized
INFO - 2024-08-15 02:00:12 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:00:12 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:00:12 --> Utf8 Class Initialized
INFO - 2024-08-15 02:00:12 --> URI Class Initialized
INFO - 2024-08-15 02:00:12 --> Router Class Initialized
INFO - 2024-08-15 02:00:12 --> Output Class Initialized
INFO - 2024-08-15 02:00:12 --> Security Class Initialized
DEBUG - 2024-08-15 02:00:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:00:12 --> Input Class Initialized
INFO - 2024-08-15 02:00:12 --> Language Class Initialized
INFO - 2024-08-15 02:00:12 --> Loader Class Initialized
INFO - 2024-08-15 02:00:12 --> Helper loaded: application_helper
INFO - 2024-08-15 02:00:12 --> Helper loaded: url_helper
INFO - 2024-08-15 02:00:12 --> Helper loaded: file_helper
INFO - 2024-08-15 02:00:12 --> Helper loaded: security_helper
INFO - 2024-08-15 02:00:12 --> Helper loaded: date_helper
INFO - 2024-08-15 02:00:12 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:00:12 --> Helper loaded: form_helper
INFO - 2024-08-15 02:00:12 --> Helper loaded: language_helper
INFO - 2024-08-15 02:00:12 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:00:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:00:12 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:00:12 --> Upload Class Initialized
INFO - 2024-08-15 02:00:12 --> Controller Class Initialized
INFO - 2024-08-15 02:00:12 --> Model "M_admin" initialized
INFO - 2024-08-15 02:00:12 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:00:12 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:00:12 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:00:12 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:00:12 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:00:12 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:00:12 --> Final output sent to browser
DEBUG - 2024-08-15 07:00:12 --> Total execution time: 0.1958
INFO - 2024-08-15 02:00:16 --> Config Class Initialized
INFO - 2024-08-15 02:00:16 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:00:16 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:00:16 --> Utf8 Class Initialized
INFO - 2024-08-15 02:00:16 --> URI Class Initialized
INFO - 2024-08-15 02:00:16 --> Router Class Initialized
INFO - 2024-08-15 02:00:16 --> Output Class Initialized
INFO - 2024-08-15 02:00:16 --> Security Class Initialized
DEBUG - 2024-08-15 02:00:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:00:16 --> Input Class Initialized
INFO - 2024-08-15 02:00:16 --> Language Class Initialized
INFO - 2024-08-15 02:00:16 --> Loader Class Initialized
INFO - 2024-08-15 02:00:16 --> Helper loaded: application_helper
INFO - 2024-08-15 02:00:16 --> Helper loaded: url_helper
INFO - 2024-08-15 02:00:16 --> Helper loaded: file_helper
INFO - 2024-08-15 02:00:16 --> Helper loaded: security_helper
INFO - 2024-08-15 02:00:16 --> Helper loaded: date_helper
INFO - 2024-08-15 02:00:16 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:00:16 --> Helper loaded: form_helper
INFO - 2024-08-15 02:00:16 --> Helper loaded: language_helper
INFO - 2024-08-15 02:00:16 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:00:16 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:00:16 --> Upload Class Initialized
INFO - 2024-08-15 02:00:17 --> Controller Class Initialized
INFO - 2024-08-15 02:00:17 --> Model "M_admin" initialized
INFO - 2024-08-15 02:00:17 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:00:17 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:00:17 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:00:17 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:00:17 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/details.php
INFO - 2024-08-15 07:00:17 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:00:17 --> Final output sent to browser
DEBUG - 2024-08-15 07:00:17 --> Total execution time: 0.1448
INFO - 2024-08-15 02:00:20 --> Config Class Initialized
INFO - 2024-08-15 02:00:20 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:00:20 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:00:20 --> Utf8 Class Initialized
INFO - 2024-08-15 02:00:20 --> URI Class Initialized
INFO - 2024-08-15 02:00:20 --> Router Class Initialized
INFO - 2024-08-15 02:00:20 --> Output Class Initialized
INFO - 2024-08-15 02:00:20 --> Security Class Initialized
DEBUG - 2024-08-15 02:00:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:00:20 --> Input Class Initialized
INFO - 2024-08-15 02:00:20 --> Language Class Initialized
INFO - 2024-08-15 02:00:20 --> Loader Class Initialized
INFO - 2024-08-15 02:00:20 --> Helper loaded: application_helper
INFO - 2024-08-15 02:00:20 --> Helper loaded: url_helper
INFO - 2024-08-15 02:00:20 --> Helper loaded: file_helper
INFO - 2024-08-15 02:00:20 --> Helper loaded: security_helper
INFO - 2024-08-15 02:00:20 --> Helper loaded: date_helper
INFO - 2024-08-15 02:00:20 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:00:20 --> Helper loaded: form_helper
INFO - 2024-08-15 02:00:20 --> Helper loaded: language_helper
INFO - 2024-08-15 02:00:20 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:00:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:00:20 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:00:20 --> Upload Class Initialized
INFO - 2024-08-15 02:00:20 --> Controller Class Initialized
INFO - 2024-08-15 02:00:20 --> Model "M_admin" initialized
INFO - 2024-08-15 02:00:20 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:00:20 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:00:20 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:00:20 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:00:20 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:00:20 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:00:20 --> Final output sent to browser
DEBUG - 2024-08-15 07:00:20 --> Total execution time: 0.1489
INFO - 2024-08-15 02:00:22 --> Config Class Initialized
INFO - 2024-08-15 02:00:22 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:00:22 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:00:22 --> Utf8 Class Initialized
INFO - 2024-08-15 02:00:22 --> URI Class Initialized
INFO - 2024-08-15 02:00:22 --> Router Class Initialized
INFO - 2024-08-15 02:00:22 --> Output Class Initialized
INFO - 2024-08-15 02:00:22 --> Security Class Initialized
DEBUG - 2024-08-15 02:00:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:00:22 --> Input Class Initialized
INFO - 2024-08-15 02:00:22 --> Language Class Initialized
INFO - 2024-08-15 02:00:22 --> Loader Class Initialized
INFO - 2024-08-15 02:00:22 --> Helper loaded: application_helper
INFO - 2024-08-15 02:00:22 --> Helper loaded: url_helper
INFO - 2024-08-15 02:00:22 --> Helper loaded: file_helper
INFO - 2024-08-15 02:00:22 --> Helper loaded: security_helper
INFO - 2024-08-15 02:00:22 --> Helper loaded: date_helper
INFO - 2024-08-15 02:00:22 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:00:22 --> Helper loaded: form_helper
INFO - 2024-08-15 02:00:22 --> Helper loaded: language_helper
INFO - 2024-08-15 02:00:22 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:00:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:00:22 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:00:22 --> Upload Class Initialized
INFO - 2024-08-15 02:00:22 --> Controller Class Initialized
INFO - 2024-08-15 02:00:22 --> Model "M_admin" initialized
INFO - 2024-08-15 02:00:22 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:00:22 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:00:22 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:00:22 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:00:22 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/details.php
INFO - 2024-08-15 07:00:22 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:00:22 --> Final output sent to browser
DEBUG - 2024-08-15 07:00:22 --> Total execution time: 0.1667
INFO - 2024-08-15 02:00:42 --> Config Class Initialized
INFO - 2024-08-15 02:00:42 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:00:42 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:00:42 --> Utf8 Class Initialized
INFO - 2024-08-15 02:00:42 --> URI Class Initialized
INFO - 2024-08-15 02:00:42 --> Router Class Initialized
INFO - 2024-08-15 02:00:42 --> Output Class Initialized
INFO - 2024-08-15 02:00:42 --> Security Class Initialized
DEBUG - 2024-08-15 02:00:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:00:42 --> Input Class Initialized
INFO - 2024-08-15 02:00:42 --> Language Class Initialized
INFO - 2024-08-15 02:00:42 --> Loader Class Initialized
INFO - 2024-08-15 02:00:42 --> Helper loaded: application_helper
INFO - 2024-08-15 02:00:42 --> Helper loaded: url_helper
INFO - 2024-08-15 02:00:42 --> Helper loaded: file_helper
INFO - 2024-08-15 02:00:42 --> Helper loaded: security_helper
INFO - 2024-08-15 02:00:42 --> Helper loaded: date_helper
INFO - 2024-08-15 02:00:42 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:00:42 --> Helper loaded: form_helper
INFO - 2024-08-15 02:00:42 --> Helper loaded: language_helper
INFO - 2024-08-15 02:00:42 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:00:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:00:42 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:00:42 --> Upload Class Initialized
INFO - 2024-08-15 02:00:42 --> Controller Class Initialized
INFO - 2024-08-15 02:00:42 --> Model "M_admin" initialized
INFO - 2024-08-15 02:00:42 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:00:42 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:00:42 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:00:42 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:00:42 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:00:42 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:00:42 --> Final output sent to browser
DEBUG - 2024-08-15 07:00:42 --> Total execution time: 0.1691
INFO - 2024-08-15 02:00:46 --> Config Class Initialized
INFO - 2024-08-15 02:00:46 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:00:46 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:00:46 --> Utf8 Class Initialized
INFO - 2024-08-15 02:00:46 --> URI Class Initialized
INFO - 2024-08-15 02:00:46 --> Router Class Initialized
INFO - 2024-08-15 02:00:46 --> Output Class Initialized
INFO - 2024-08-15 02:00:46 --> Security Class Initialized
DEBUG - 2024-08-15 02:00:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:00:46 --> Input Class Initialized
INFO - 2024-08-15 02:00:46 --> Language Class Initialized
INFO - 2024-08-15 02:00:46 --> Loader Class Initialized
INFO - 2024-08-15 02:00:46 --> Helper loaded: application_helper
INFO - 2024-08-15 02:00:46 --> Helper loaded: url_helper
INFO - 2024-08-15 02:00:46 --> Helper loaded: file_helper
INFO - 2024-08-15 02:00:46 --> Helper loaded: security_helper
INFO - 2024-08-15 02:00:46 --> Helper loaded: date_helper
INFO - 2024-08-15 02:00:46 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:00:46 --> Helper loaded: form_helper
INFO - 2024-08-15 02:00:46 --> Helper loaded: language_helper
INFO - 2024-08-15 02:00:46 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:00:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:00:46 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:00:46 --> Upload Class Initialized
INFO - 2024-08-15 02:00:46 --> Controller Class Initialized
INFO - 2024-08-15 02:00:46 --> Model "M_admin" initialized
INFO - 2024-08-15 02:00:46 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:00:46 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:00:46 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:00:46 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:00:46 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/details.php
INFO - 2024-08-15 07:00:46 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:00:46 --> Final output sent to browser
DEBUG - 2024-08-15 07:00:46 --> Total execution time: 0.1548
INFO - 2024-08-15 02:00:54 --> Config Class Initialized
INFO - 2024-08-15 02:00:54 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:00:54 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:00:54 --> Utf8 Class Initialized
INFO - 2024-08-15 02:00:54 --> URI Class Initialized
INFO - 2024-08-15 02:00:55 --> Router Class Initialized
INFO - 2024-08-15 02:00:55 --> Output Class Initialized
INFO - 2024-08-15 02:00:55 --> Security Class Initialized
DEBUG - 2024-08-15 02:00:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:00:55 --> Input Class Initialized
INFO - 2024-08-15 02:00:55 --> Language Class Initialized
INFO - 2024-08-15 02:00:55 --> Loader Class Initialized
INFO - 2024-08-15 02:00:55 --> Helper loaded: application_helper
INFO - 2024-08-15 02:00:55 --> Helper loaded: url_helper
INFO - 2024-08-15 02:00:55 --> Helper loaded: file_helper
INFO - 2024-08-15 02:00:55 --> Helper loaded: security_helper
INFO - 2024-08-15 02:00:55 --> Helper loaded: date_helper
INFO - 2024-08-15 02:00:55 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:00:55 --> Helper loaded: form_helper
INFO - 2024-08-15 02:00:55 --> Helper loaded: language_helper
INFO - 2024-08-15 02:00:55 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:00:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:00:55 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:00:55 --> Upload Class Initialized
INFO - 2024-08-15 02:00:55 --> Controller Class Initialized
INFO - 2024-08-15 02:00:55 --> Model "M_admin" initialized
INFO - 2024-08-15 02:00:55 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:00:55 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:00:55 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:00:55 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:00:55 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:00:55 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:00:55 --> Final output sent to browser
DEBUG - 2024-08-15 07:00:55 --> Total execution time: 0.1651
INFO - 2024-08-15 02:00:58 --> Config Class Initialized
INFO - 2024-08-15 02:00:58 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:00:58 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:00:58 --> Utf8 Class Initialized
INFO - 2024-08-15 02:00:58 --> URI Class Initialized
INFO - 2024-08-15 02:00:58 --> Router Class Initialized
INFO - 2024-08-15 02:00:58 --> Output Class Initialized
INFO - 2024-08-15 02:00:58 --> Security Class Initialized
DEBUG - 2024-08-15 02:00:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:00:58 --> Input Class Initialized
INFO - 2024-08-15 02:00:58 --> Language Class Initialized
INFO - 2024-08-15 02:00:58 --> Loader Class Initialized
INFO - 2024-08-15 02:00:58 --> Helper loaded: application_helper
INFO - 2024-08-15 02:00:58 --> Helper loaded: url_helper
INFO - 2024-08-15 02:00:58 --> Helper loaded: file_helper
INFO - 2024-08-15 02:00:58 --> Helper loaded: security_helper
INFO - 2024-08-15 02:00:58 --> Helper loaded: date_helper
INFO - 2024-08-15 02:00:58 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:00:58 --> Helper loaded: form_helper
INFO - 2024-08-15 02:00:58 --> Helper loaded: language_helper
INFO - 2024-08-15 02:00:58 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:00:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:00:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:00:58 --> Upload Class Initialized
INFO - 2024-08-15 02:00:58 --> Controller Class Initialized
INFO - 2024-08-15 02:00:58 --> Model "M_admin" initialized
INFO - 2024-08-15 02:00:58 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:00:58 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:00:58 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:00:58 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:00:58 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/details.php
INFO - 2024-08-15 07:00:58 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:00:58 --> Final output sent to browser
DEBUG - 2024-08-15 07:00:58 --> Total execution time: 0.1513
INFO - 2024-08-15 02:01:01 --> Config Class Initialized
INFO - 2024-08-15 02:01:01 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:01:01 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:01:01 --> Utf8 Class Initialized
INFO - 2024-08-15 02:01:01 --> URI Class Initialized
INFO - 2024-08-15 02:01:01 --> Router Class Initialized
INFO - 2024-08-15 02:01:01 --> Output Class Initialized
INFO - 2024-08-15 02:01:01 --> Security Class Initialized
DEBUG - 2024-08-15 02:01:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:01:01 --> Input Class Initialized
INFO - 2024-08-15 02:01:01 --> Language Class Initialized
INFO - 2024-08-15 02:01:01 --> Loader Class Initialized
INFO - 2024-08-15 02:01:01 --> Helper loaded: application_helper
INFO - 2024-08-15 02:01:01 --> Helper loaded: url_helper
INFO - 2024-08-15 02:01:01 --> Helper loaded: file_helper
INFO - 2024-08-15 02:01:01 --> Helper loaded: security_helper
INFO - 2024-08-15 02:01:01 --> Helper loaded: date_helper
INFO - 2024-08-15 02:01:01 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:01:01 --> Helper loaded: form_helper
INFO - 2024-08-15 02:01:01 --> Helper loaded: language_helper
INFO - 2024-08-15 02:01:01 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:01:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:01:01 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:01:01 --> Upload Class Initialized
INFO - 2024-08-15 02:01:02 --> Controller Class Initialized
INFO - 2024-08-15 02:01:02 --> Model "M_admin" initialized
INFO - 2024-08-15 02:01:02 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:01:02 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:01:02 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:01:02 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:01:02 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:01:02 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:01:02 --> Final output sent to browser
DEBUG - 2024-08-15 07:01:02 --> Total execution time: 0.1737
INFO - 2024-08-15 02:01:04 --> Config Class Initialized
INFO - 2024-08-15 02:01:04 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:01:04 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:01:04 --> Utf8 Class Initialized
INFO - 2024-08-15 02:01:04 --> URI Class Initialized
INFO - 2024-08-15 02:01:04 --> Router Class Initialized
INFO - 2024-08-15 02:01:04 --> Output Class Initialized
INFO - 2024-08-15 02:01:04 --> Security Class Initialized
DEBUG - 2024-08-15 02:01:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:01:04 --> Input Class Initialized
INFO - 2024-08-15 02:01:04 --> Language Class Initialized
INFO - 2024-08-15 02:01:04 --> Loader Class Initialized
INFO - 2024-08-15 02:01:04 --> Helper loaded: application_helper
INFO - 2024-08-15 02:01:04 --> Helper loaded: url_helper
INFO - 2024-08-15 02:01:04 --> Helper loaded: file_helper
INFO - 2024-08-15 02:01:04 --> Helper loaded: security_helper
INFO - 2024-08-15 02:01:04 --> Helper loaded: date_helper
INFO - 2024-08-15 02:01:04 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:01:04 --> Helper loaded: form_helper
INFO - 2024-08-15 02:01:04 --> Helper loaded: language_helper
INFO - 2024-08-15 02:01:04 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:01:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:01:04 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:01:04 --> Upload Class Initialized
INFO - 2024-08-15 02:01:04 --> Controller Class Initialized
INFO - 2024-08-15 02:01:04 --> Model "M_admin" initialized
INFO - 2024-08-15 02:01:04 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:01:04 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:01:04 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:01:04 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:01:04 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/details.php
INFO - 2024-08-15 07:01:04 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:01:04 --> Final output sent to browser
DEBUG - 2024-08-15 07:01:04 --> Total execution time: 0.1570
INFO - 2024-08-15 02:01:09 --> Config Class Initialized
INFO - 2024-08-15 02:01:09 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:01:09 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:01:09 --> Utf8 Class Initialized
INFO - 2024-08-15 02:01:09 --> URI Class Initialized
INFO - 2024-08-15 02:01:09 --> Router Class Initialized
INFO - 2024-08-15 02:01:09 --> Output Class Initialized
INFO - 2024-08-15 02:01:09 --> Security Class Initialized
DEBUG - 2024-08-15 02:01:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:01:09 --> Input Class Initialized
INFO - 2024-08-15 02:01:09 --> Language Class Initialized
INFO - 2024-08-15 02:01:09 --> Loader Class Initialized
INFO - 2024-08-15 02:01:09 --> Helper loaded: application_helper
INFO - 2024-08-15 02:01:09 --> Helper loaded: url_helper
INFO - 2024-08-15 02:01:09 --> Helper loaded: file_helper
INFO - 2024-08-15 02:01:09 --> Helper loaded: security_helper
INFO - 2024-08-15 02:01:09 --> Helper loaded: date_helper
INFO - 2024-08-15 02:01:09 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:01:09 --> Helper loaded: form_helper
INFO - 2024-08-15 02:01:09 --> Helper loaded: language_helper
INFO - 2024-08-15 02:01:09 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:01:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:01:09 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:01:09 --> Upload Class Initialized
INFO - 2024-08-15 02:01:09 --> Controller Class Initialized
INFO - 2024-08-15 02:01:09 --> Model "M_admin" initialized
INFO - 2024-08-15 02:01:09 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:01:09 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:01:09 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:01:09 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:01:09 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:01:09 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:01:09 --> Final output sent to browser
DEBUG - 2024-08-15 07:01:09 --> Total execution time: 0.1508
INFO - 2024-08-15 02:01:22 --> Config Class Initialized
INFO - 2024-08-15 02:01:22 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:01:22 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:01:22 --> Utf8 Class Initialized
INFO - 2024-08-15 02:01:22 --> URI Class Initialized
INFO - 2024-08-15 02:01:22 --> Router Class Initialized
INFO - 2024-08-15 02:01:22 --> Output Class Initialized
INFO - 2024-08-15 02:01:22 --> Security Class Initialized
DEBUG - 2024-08-15 02:01:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:01:22 --> Input Class Initialized
INFO - 2024-08-15 02:01:22 --> Language Class Initialized
INFO - 2024-08-15 02:01:22 --> Loader Class Initialized
INFO - 2024-08-15 02:01:22 --> Helper loaded: application_helper
INFO - 2024-08-15 02:01:22 --> Helper loaded: url_helper
INFO - 2024-08-15 02:01:22 --> Helper loaded: file_helper
INFO - 2024-08-15 02:01:22 --> Helper loaded: security_helper
INFO - 2024-08-15 02:01:22 --> Helper loaded: date_helper
INFO - 2024-08-15 02:01:22 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:01:22 --> Helper loaded: form_helper
INFO - 2024-08-15 02:01:22 --> Helper loaded: language_helper
INFO - 2024-08-15 02:01:22 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:01:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:01:22 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:01:22 --> Upload Class Initialized
INFO - 2024-08-15 02:01:22 --> Controller Class Initialized
INFO - 2024-08-15 02:01:22 --> Model "M_admin" initialized
INFO - 2024-08-15 02:01:22 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:01:22 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:01:22 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:01:22 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:01:22 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:01:22 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:01:22 --> Final output sent to browser
DEBUG - 2024-08-15 07:01:22 --> Total execution time: 0.1741
INFO - 2024-08-15 02:01:41 --> Config Class Initialized
INFO - 2024-08-15 02:01:41 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:01:41 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:01:41 --> Utf8 Class Initialized
INFO - 2024-08-15 02:01:41 --> URI Class Initialized
INFO - 2024-08-15 02:01:41 --> Router Class Initialized
INFO - 2024-08-15 02:01:41 --> Output Class Initialized
INFO - 2024-08-15 02:01:41 --> Security Class Initialized
DEBUG - 2024-08-15 02:01:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:01:41 --> Input Class Initialized
INFO - 2024-08-15 02:01:41 --> Language Class Initialized
INFO - 2024-08-15 02:01:41 --> Loader Class Initialized
INFO - 2024-08-15 02:01:41 --> Helper loaded: application_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: url_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: file_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: security_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: date_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: form_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: language_helper
INFO - 2024-08-15 02:01:41 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:01:41 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:01:41 --> Upload Class Initialized
INFO - 2024-08-15 02:01:41 --> Controller Class Initialized
INFO - 2024-08-15 02:01:41 --> Model "M_admin" initialized
INFO - 2024-08-15 02:01:41 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:01:41 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:01:41 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:01:41 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:01:41 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:01:41 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:01:41 --> Final output sent to browser
DEBUG - 2024-08-15 07:01:41 --> Total execution time: 0.1705
INFO - 2024-08-15 02:01:41 --> Config Class Initialized
INFO - 2024-08-15 02:01:41 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:01:41 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:01:41 --> Utf8 Class Initialized
INFO - 2024-08-15 02:01:41 --> URI Class Initialized
INFO - 2024-08-15 02:01:41 --> Router Class Initialized
INFO - 2024-08-15 02:01:41 --> Output Class Initialized
INFO - 2024-08-15 02:01:41 --> Security Class Initialized
DEBUG - 2024-08-15 02:01:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:01:41 --> Input Class Initialized
INFO - 2024-08-15 02:01:41 --> Language Class Initialized
INFO - 2024-08-15 02:01:41 --> Loader Class Initialized
INFO - 2024-08-15 02:01:41 --> Helper loaded: application_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: url_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: file_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: security_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: date_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: form_helper
INFO - 2024-08-15 02:01:41 --> Helper loaded: language_helper
INFO - 2024-08-15 02:01:41 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:01:41 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:01:41 --> Upload Class Initialized
INFO - 2024-08-15 02:01:41 --> Controller Class Initialized
INFO - 2024-08-15 02:01:41 --> Model "M_admin" initialized
INFO - 2024-08-15 02:01:41 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:01:41 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:01:41 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:01:41 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 02:01:41 --> Final output sent to browser
DEBUG - 2024-08-15 02:01:41 --> Total execution time: 0.1481
INFO - 2024-08-15 02:01:57 --> Config Class Initialized
INFO - 2024-08-15 02:01:57 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:01:57 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:01:57 --> Utf8 Class Initialized
INFO - 2024-08-15 02:01:57 --> URI Class Initialized
INFO - 2024-08-15 02:01:57 --> Router Class Initialized
INFO - 2024-08-15 02:01:57 --> Output Class Initialized
INFO - 2024-08-15 02:01:57 --> Security Class Initialized
DEBUG - 2024-08-15 02:01:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:01:57 --> Input Class Initialized
INFO - 2024-08-15 02:01:57 --> Language Class Initialized
INFO - 2024-08-15 02:01:57 --> Loader Class Initialized
INFO - 2024-08-15 02:01:57 --> Helper loaded: application_helper
INFO - 2024-08-15 02:01:57 --> Helper loaded: url_helper
INFO - 2024-08-15 02:01:57 --> Helper loaded: file_helper
INFO - 2024-08-15 02:01:57 --> Helper loaded: security_helper
INFO - 2024-08-15 02:01:57 --> Helper loaded: date_helper
INFO - 2024-08-15 02:01:57 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:01:57 --> Helper loaded: form_helper
INFO - 2024-08-15 02:01:57 --> Helper loaded: language_helper
INFO - 2024-08-15 02:01:57 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:01:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:01:57 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:01:57 --> Upload Class Initialized
INFO - 2024-08-15 02:01:58 --> Controller Class Initialized
INFO - 2024-08-15 02:01:58 --> Model "M_admin" initialized
INFO - 2024-08-15 02:01:58 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:01:58 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:01:58 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:01:58 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:01:58 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:01:58 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:01:58 --> Final output sent to browser
DEBUG - 2024-08-15 07:01:58 --> Total execution time: 0.1510
INFO - 2024-08-15 02:02:30 --> Config Class Initialized
INFO - 2024-08-15 02:02:30 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:02:30 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:02:30 --> Utf8 Class Initialized
INFO - 2024-08-15 02:02:30 --> URI Class Initialized
INFO - 2024-08-15 02:02:30 --> Router Class Initialized
INFO - 2024-08-15 02:02:30 --> Output Class Initialized
INFO - 2024-08-15 02:02:30 --> Security Class Initialized
DEBUG - 2024-08-15 02:02:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:02:30 --> Input Class Initialized
INFO - 2024-08-15 02:02:30 --> Language Class Initialized
INFO - 2024-08-15 02:02:30 --> Loader Class Initialized
INFO - 2024-08-15 02:02:30 --> Helper loaded: application_helper
INFO - 2024-08-15 02:02:30 --> Helper loaded: url_helper
INFO - 2024-08-15 02:02:30 --> Helper loaded: file_helper
INFO - 2024-08-15 02:02:30 --> Helper loaded: security_helper
INFO - 2024-08-15 02:02:30 --> Helper loaded: date_helper
INFO - 2024-08-15 02:02:31 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:02:31 --> Helper loaded: form_helper
INFO - 2024-08-15 02:02:31 --> Helper loaded: language_helper
INFO - 2024-08-15 02:02:31 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:02:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:02:31 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:02:31 --> Upload Class Initialized
INFO - 2024-08-15 02:02:31 --> Controller Class Initialized
INFO - 2024-08-15 02:02:31 --> Model "M_admin" initialized
INFO - 2024-08-15 02:02:31 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:02:31 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:02:31 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:02:31 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:02:31 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:02:31 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:02:31 --> Final output sent to browser
DEBUG - 2024-08-15 07:02:31 --> Total execution time: 0.1413
INFO - 2024-08-15 02:02:31 --> Config Class Initialized
INFO - 2024-08-15 02:02:31 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:02:31 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:02:31 --> Utf8 Class Initialized
INFO - 2024-08-15 02:02:31 --> URI Class Initialized
INFO - 2024-08-15 02:02:31 --> Router Class Initialized
INFO - 2024-08-15 02:02:31 --> Output Class Initialized
INFO - 2024-08-15 02:02:31 --> Security Class Initialized
DEBUG - 2024-08-15 02:02:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:02:31 --> Input Class Initialized
INFO - 2024-08-15 02:02:31 --> Language Class Initialized
INFO - 2024-08-15 02:02:31 --> Loader Class Initialized
INFO - 2024-08-15 02:02:31 --> Helper loaded: application_helper
INFO - 2024-08-15 02:02:31 --> Helper loaded: url_helper
INFO - 2024-08-15 02:02:31 --> Helper loaded: file_helper
INFO - 2024-08-15 02:02:31 --> Helper loaded: security_helper
INFO - 2024-08-15 02:02:31 --> Helper loaded: date_helper
INFO - 2024-08-15 02:02:31 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:02:31 --> Helper loaded: form_helper
INFO - 2024-08-15 02:02:31 --> Helper loaded: language_helper
INFO - 2024-08-15 02:02:31 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:02:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:02:31 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:02:31 --> Upload Class Initialized
INFO - 2024-08-15 02:02:31 --> Controller Class Initialized
INFO - 2024-08-15 02:02:31 --> Model "M_admin" initialized
INFO - 2024-08-15 02:02:31 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:02:31 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:02:31 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:02:31 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 02:02:31 --> Final output sent to browser
DEBUG - 2024-08-15 02:02:31 --> Total execution time: 0.1402
INFO - 2024-08-15 02:02:53 --> Config Class Initialized
INFO - 2024-08-15 02:02:53 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:02:53 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:02:53 --> Utf8 Class Initialized
INFO - 2024-08-15 02:02:53 --> URI Class Initialized
INFO - 2024-08-15 02:02:53 --> Router Class Initialized
INFO - 2024-08-15 02:02:53 --> Output Class Initialized
INFO - 2024-08-15 02:02:53 --> Security Class Initialized
DEBUG - 2024-08-15 02:02:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:02:53 --> Input Class Initialized
INFO - 2024-08-15 02:02:53 --> Language Class Initialized
INFO - 2024-08-15 02:02:53 --> Loader Class Initialized
INFO - 2024-08-15 02:02:53 --> Helper loaded: application_helper
INFO - 2024-08-15 02:02:53 --> Helper loaded: url_helper
INFO - 2024-08-15 02:02:53 --> Helper loaded: file_helper
INFO - 2024-08-15 02:02:53 --> Helper loaded: security_helper
INFO - 2024-08-15 02:02:53 --> Helper loaded: date_helper
INFO - 2024-08-15 02:02:53 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:02:53 --> Helper loaded: form_helper
INFO - 2024-08-15 02:02:53 --> Helper loaded: language_helper
INFO - 2024-08-15 02:02:53 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:02:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:02:53 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:02:53 --> Upload Class Initialized
INFO - 2024-08-15 02:02:53 --> Controller Class Initialized
INFO - 2024-08-15 02:02:53 --> Model "M_admin" initialized
INFO - 2024-08-15 02:02:53 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:02:53 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:02:53 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:02:53 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:02:53 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:02:53 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:02:53 --> Final output sent to browser
DEBUG - 2024-08-15 07:02:53 --> Total execution time: 0.1500
INFO - 2024-08-15 02:05:38 --> Config Class Initialized
INFO - 2024-08-15 02:05:38 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:05:38 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:05:38 --> Utf8 Class Initialized
INFO - 2024-08-15 02:05:38 --> URI Class Initialized
INFO - 2024-08-15 02:05:38 --> Router Class Initialized
INFO - 2024-08-15 02:05:38 --> Output Class Initialized
INFO - 2024-08-15 02:05:38 --> Security Class Initialized
DEBUG - 2024-08-15 02:05:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:05:38 --> Input Class Initialized
INFO - 2024-08-15 02:05:38 --> Language Class Initialized
INFO - 2024-08-15 02:05:38 --> Loader Class Initialized
INFO - 2024-08-15 02:05:38 --> Helper loaded: application_helper
INFO - 2024-08-15 02:05:38 --> Helper loaded: url_helper
INFO - 2024-08-15 02:05:38 --> Helper loaded: file_helper
INFO - 2024-08-15 02:05:38 --> Helper loaded: security_helper
INFO - 2024-08-15 02:05:38 --> Helper loaded: date_helper
INFO - 2024-08-15 02:05:38 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:05:38 --> Helper loaded: form_helper
INFO - 2024-08-15 02:05:38 --> Helper loaded: language_helper
INFO - 2024-08-15 02:05:38 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:05:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:05:38 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:05:38 --> Upload Class Initialized
INFO - 2024-08-15 02:05:38 --> Controller Class Initialized
INFO - 2024-08-15 02:05:38 --> Model "M_admin" initialized
INFO - 2024-08-15 02:05:38 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:05:38 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:05:38 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:05:38 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:05:38 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:05:38 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:05:38 --> Final output sent to browser
DEBUG - 2024-08-15 07:05:38 --> Total execution time: 0.1474
INFO - 2024-08-15 02:10:37 --> Config Class Initialized
INFO - 2024-08-15 02:10:37 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:10:37 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:10:37 --> Utf8 Class Initialized
INFO - 2024-08-15 02:10:37 --> URI Class Initialized
INFO - 2024-08-15 02:10:37 --> Router Class Initialized
INFO - 2024-08-15 02:10:37 --> Output Class Initialized
INFO - 2024-08-15 02:10:37 --> Security Class Initialized
DEBUG - 2024-08-15 02:10:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:10:37 --> Input Class Initialized
INFO - 2024-08-15 02:10:37 --> Language Class Initialized
INFO - 2024-08-15 02:10:37 --> Loader Class Initialized
INFO - 2024-08-15 02:10:37 --> Helper loaded: application_helper
INFO - 2024-08-15 02:10:37 --> Helper loaded: url_helper
INFO - 2024-08-15 02:10:37 --> Helper loaded: file_helper
INFO - 2024-08-15 02:10:37 --> Helper loaded: security_helper
INFO - 2024-08-15 02:10:37 --> Helper loaded: date_helper
INFO - 2024-08-15 02:10:37 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:10:37 --> Helper loaded: form_helper
INFO - 2024-08-15 02:10:37 --> Helper loaded: language_helper
INFO - 2024-08-15 02:10:37 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:10:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:10:37 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:10:37 --> Upload Class Initialized
INFO - 2024-08-15 02:10:37 --> Controller Class Initialized
INFO - 2024-08-15 02:10:37 --> Model "M_admin" initialized
INFO - 2024-08-15 02:10:37 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:10:37 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:10:37 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:10:37 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:10:37 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:10:37 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:10:37 --> Final output sent to browser
DEBUG - 2024-08-15 07:10:37 --> Total execution time: 0.1816
INFO - 2024-08-15 02:10:59 --> Config Class Initialized
INFO - 2024-08-15 02:10:59 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:10:59 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:10:59 --> Utf8 Class Initialized
INFO - 2024-08-15 02:10:59 --> URI Class Initialized
INFO - 2024-08-15 02:10:59 --> Router Class Initialized
INFO - 2024-08-15 02:10:59 --> Output Class Initialized
INFO - 2024-08-15 02:10:59 --> Security Class Initialized
DEBUG - 2024-08-15 02:10:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:10:59 --> Input Class Initialized
INFO - 2024-08-15 02:10:59 --> Language Class Initialized
INFO - 2024-08-15 02:10:59 --> Loader Class Initialized
INFO - 2024-08-15 02:10:59 --> Helper loaded: application_helper
INFO - 2024-08-15 02:10:59 --> Helper loaded: url_helper
INFO - 2024-08-15 02:10:59 --> Helper loaded: file_helper
INFO - 2024-08-15 02:10:59 --> Helper loaded: security_helper
INFO - 2024-08-15 02:10:59 --> Helper loaded: date_helper
INFO - 2024-08-15 02:10:59 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:10:59 --> Helper loaded: form_helper
INFO - 2024-08-15 02:10:59 --> Helper loaded: language_helper
INFO - 2024-08-15 02:10:59 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:10:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:10:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:10:59 --> Upload Class Initialized
INFO - 2024-08-15 02:10:59 --> Controller Class Initialized
INFO - 2024-08-15 02:10:59 --> Model "M_admin" initialized
INFO - 2024-08-15 02:10:59 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:10:59 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:10:59 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:10:59 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:10:59 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:10:59 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:10:59 --> Final output sent to browser
DEBUG - 2024-08-15 07:10:59 --> Total execution time: 0.1759
INFO - 2024-08-15 02:11:44 --> Config Class Initialized
INFO - 2024-08-15 02:11:44 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:11:44 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:11:44 --> Utf8 Class Initialized
INFO - 2024-08-15 02:11:44 --> URI Class Initialized
INFO - 2024-08-15 02:11:44 --> Router Class Initialized
INFO - 2024-08-15 02:11:44 --> Output Class Initialized
INFO - 2024-08-15 02:11:44 --> Security Class Initialized
DEBUG - 2024-08-15 02:11:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:11:44 --> Input Class Initialized
INFO - 2024-08-15 02:11:44 --> Language Class Initialized
INFO - 2024-08-15 02:11:44 --> Loader Class Initialized
INFO - 2024-08-15 02:11:44 --> Helper loaded: application_helper
INFO - 2024-08-15 02:11:44 --> Helper loaded: url_helper
INFO - 2024-08-15 02:11:44 --> Helper loaded: file_helper
INFO - 2024-08-15 02:11:44 --> Helper loaded: security_helper
INFO - 2024-08-15 02:11:44 --> Helper loaded: date_helper
INFO - 2024-08-15 02:11:44 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:11:44 --> Helper loaded: form_helper
INFO - 2024-08-15 02:11:44 --> Helper loaded: language_helper
INFO - 2024-08-15 02:11:44 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:11:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:11:44 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:11:44 --> Upload Class Initialized
INFO - 2024-08-15 02:11:44 --> Controller Class Initialized
INFO - 2024-08-15 02:11:44 --> Model "M_admin" initialized
INFO - 2024-08-15 02:11:44 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:11:44 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:11:44 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:11:44 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:11:44 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/keluar.php
INFO - 2024-08-15 07:11:44 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:11:44 --> Final output sent to browser
DEBUG - 2024-08-15 07:11:44 --> Total execution time: 0.1529
INFO - 2024-08-15 02:11:54 --> Config Class Initialized
INFO - 2024-08-15 02:11:54 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:11:54 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:11:54 --> Utf8 Class Initialized
INFO - 2024-08-15 02:11:54 --> URI Class Initialized
INFO - 2024-08-15 02:11:54 --> Router Class Initialized
INFO - 2024-08-15 02:11:54 --> Output Class Initialized
INFO - 2024-08-15 02:11:54 --> Security Class Initialized
DEBUG - 2024-08-15 02:11:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:11:54 --> Input Class Initialized
INFO - 2024-08-15 02:11:54 --> Language Class Initialized
INFO - 2024-08-15 02:11:54 --> Loader Class Initialized
INFO - 2024-08-15 02:11:54 --> Helper loaded: application_helper
INFO - 2024-08-15 02:11:54 --> Helper loaded: url_helper
INFO - 2024-08-15 02:11:54 --> Helper loaded: file_helper
INFO - 2024-08-15 02:11:54 --> Helper loaded: security_helper
INFO - 2024-08-15 02:11:54 --> Helper loaded: date_helper
INFO - 2024-08-15 02:11:54 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:11:54 --> Helper loaded: form_helper
INFO - 2024-08-15 02:11:54 --> Helper loaded: language_helper
INFO - 2024-08-15 02:11:54 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:11:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:11:54 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:11:54 --> Upload Class Initialized
INFO - 2024-08-15 02:11:54 --> Controller Class Initialized
INFO - 2024-08-15 02:11:54 --> Model "M_admin" initialized
INFO - 2024-08-15 02:11:54 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:11:54 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:11:54 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:11:54 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:11:54 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/masuk.php
INFO - 2024-08-15 07:11:54 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:11:54 --> Final output sent to browser
DEBUG - 2024-08-15 07:11:54 --> Total execution time: 0.1539
INFO - 2024-08-15 02:12:02 --> Config Class Initialized
INFO - 2024-08-15 02:12:02 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:12:02 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:12:02 --> Utf8 Class Initialized
INFO - 2024-08-15 02:12:02 --> URI Class Initialized
INFO - 2024-08-15 02:12:02 --> Router Class Initialized
INFO - 2024-08-15 02:12:02 --> Output Class Initialized
INFO - 2024-08-15 02:12:02 --> Security Class Initialized
DEBUG - 2024-08-15 02:12:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:12:02 --> Input Class Initialized
INFO - 2024-08-15 02:12:02 --> Language Class Initialized
INFO - 2024-08-15 02:12:02 --> Loader Class Initialized
INFO - 2024-08-15 02:12:02 --> Helper loaded: application_helper
INFO - 2024-08-15 02:12:03 --> Helper loaded: url_helper
INFO - 2024-08-15 02:12:03 --> Helper loaded: file_helper
INFO - 2024-08-15 02:12:03 --> Helper loaded: security_helper
INFO - 2024-08-15 02:12:03 --> Helper loaded: date_helper
INFO - 2024-08-15 02:12:03 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:12:03 --> Helper loaded: form_helper
INFO - 2024-08-15 02:12:03 --> Helper loaded: language_helper
INFO - 2024-08-15 02:12:03 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:12:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:12:03 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:12:03 --> Upload Class Initialized
INFO - 2024-08-15 02:12:03 --> Controller Class Initialized
INFO - 2024-08-15 02:12:03 --> Model "M_admin" initialized
INFO - 2024-08-15 02:12:03 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:12:03 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:12:03 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:12:03 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:12:03 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/penyesuaian.php
INFO - 2024-08-15 07:12:03 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:12:03 --> Final output sent to browser
DEBUG - 2024-08-15 07:12:03 --> Total execution time: 0.1660
INFO - 2024-08-15 02:12:08 --> Config Class Initialized
INFO - 2024-08-15 02:12:08 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:12:08 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:12:08 --> Utf8 Class Initialized
INFO - 2024-08-15 02:12:08 --> URI Class Initialized
INFO - 2024-08-15 02:12:08 --> Router Class Initialized
INFO - 2024-08-15 02:12:08 --> Output Class Initialized
INFO - 2024-08-15 02:12:08 --> Security Class Initialized
DEBUG - 2024-08-15 02:12:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:12:08 --> Input Class Initialized
INFO - 2024-08-15 02:12:08 --> Language Class Initialized
INFO - 2024-08-15 02:12:08 --> Loader Class Initialized
INFO - 2024-08-15 02:12:08 --> Helper loaded: application_helper
INFO - 2024-08-15 02:12:08 --> Helper loaded: url_helper
INFO - 2024-08-15 02:12:08 --> Helper loaded: file_helper
INFO - 2024-08-15 02:12:08 --> Helper loaded: security_helper
INFO - 2024-08-15 02:12:08 --> Helper loaded: date_helper
INFO - 2024-08-15 02:12:08 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:12:08 --> Helper loaded: form_helper
INFO - 2024-08-15 02:12:08 --> Helper loaded: language_helper
INFO - 2024-08-15 02:12:08 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:12:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:12:08 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:12:08 --> Upload Class Initialized
INFO - 2024-08-15 02:12:08 --> Controller Class Initialized
INFO - 2024-08-15 02:12:08 --> Model "M_admin" initialized
INFO - 2024-08-15 02:12:08 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:12:08 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:12:08 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:12:08 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:12:08 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/identitas.php
INFO - 2024-08-15 07:12:08 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:12:08 --> Final output sent to browser
DEBUG - 2024-08-15 07:12:08 --> Total execution time: 0.1580
INFO - 2024-08-15 02:12:48 --> Config Class Initialized
INFO - 2024-08-15 02:12:48 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:12:48 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:12:48 --> Utf8 Class Initialized
INFO - 2024-08-15 02:12:48 --> URI Class Initialized
INFO - 2024-08-15 02:12:48 --> Router Class Initialized
INFO - 2024-08-15 02:12:48 --> Output Class Initialized
INFO - 2024-08-15 02:12:48 --> Security Class Initialized
DEBUG - 2024-08-15 02:12:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:12:48 --> Input Class Initialized
INFO - 2024-08-15 02:12:48 --> Language Class Initialized
INFO - 2024-08-15 02:12:48 --> Loader Class Initialized
INFO - 2024-08-15 02:12:48 --> Helper loaded: application_helper
INFO - 2024-08-15 02:12:48 --> Helper loaded: url_helper
INFO - 2024-08-15 02:12:48 --> Helper loaded: file_helper
INFO - 2024-08-15 02:12:48 --> Helper loaded: security_helper
INFO - 2024-08-15 02:12:48 --> Helper loaded: date_helper
INFO - 2024-08-15 02:12:48 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:12:48 --> Helper loaded: form_helper
INFO - 2024-08-15 02:12:48 --> Helper loaded: language_helper
INFO - 2024-08-15 02:12:48 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:12:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:12:48 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:12:48 --> Upload Class Initialized
INFO - 2024-08-15 02:12:48 --> Controller Class Initialized
INFO - 2024-08-15 02:12:48 --> Model "M_admin" initialized
INFO - 2024-08-15 02:12:48 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:12:48 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:12:48 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:12:48 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:12:48 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:12:48 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:12:48 --> Final output sent to browser
DEBUG - 2024-08-15 07:12:48 --> Total execution time: 0.1623
INFO - 2024-08-15 02:13:00 --> Config Class Initialized
INFO - 2024-08-15 02:13:00 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:13:00 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:13:00 --> Utf8 Class Initialized
INFO - 2024-08-15 02:13:00 --> URI Class Initialized
INFO - 2024-08-15 02:13:00 --> Router Class Initialized
INFO - 2024-08-15 02:13:00 --> Output Class Initialized
INFO - 2024-08-15 02:13:00 --> Security Class Initialized
DEBUG - 2024-08-15 02:13:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:13:00 --> Input Class Initialized
INFO - 2024-08-15 02:13:00 --> Language Class Initialized
INFO - 2024-08-15 02:13:00 --> Loader Class Initialized
INFO - 2024-08-15 02:13:00 --> Helper loaded: application_helper
INFO - 2024-08-15 02:13:00 --> Helper loaded: url_helper
INFO - 2024-08-15 02:13:00 --> Helper loaded: file_helper
INFO - 2024-08-15 02:13:00 --> Helper loaded: security_helper
INFO - 2024-08-15 02:13:00 --> Helper loaded: date_helper
INFO - 2024-08-15 02:13:00 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:13:00 --> Helper loaded: form_helper
INFO - 2024-08-15 02:13:00 --> Helper loaded: language_helper
INFO - 2024-08-15 02:13:00 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:13:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:13:00 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:13:00 --> Upload Class Initialized
INFO - 2024-08-15 02:13:00 --> Controller Class Initialized
INFO - 2024-08-15 02:13:00 --> Model "M_admin" initialized
INFO - 2024-08-15 02:13:00 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:13:00 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:13:00 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:13:00 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:13:00 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:13:00 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:13:00 --> Final output sent to browser
DEBUG - 2024-08-15 07:13:00 --> Total execution time: 0.1717
INFO - 2024-08-15 02:13:10 --> Config Class Initialized
INFO - 2024-08-15 02:13:10 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:13:10 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:13:10 --> Utf8 Class Initialized
INFO - 2024-08-15 02:13:10 --> URI Class Initialized
INFO - 2024-08-15 02:13:10 --> Router Class Initialized
INFO - 2024-08-15 02:13:10 --> Output Class Initialized
INFO - 2024-08-15 02:13:10 --> Security Class Initialized
DEBUG - 2024-08-15 02:13:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:13:10 --> Input Class Initialized
INFO - 2024-08-15 02:13:10 --> Language Class Initialized
INFO - 2024-08-15 02:13:10 --> Loader Class Initialized
INFO - 2024-08-15 02:13:10 --> Helper loaded: application_helper
INFO - 2024-08-15 02:13:10 --> Helper loaded: url_helper
INFO - 2024-08-15 02:13:10 --> Helper loaded: file_helper
INFO - 2024-08-15 02:13:10 --> Helper loaded: security_helper
INFO - 2024-08-15 02:13:10 --> Helper loaded: date_helper
INFO - 2024-08-15 02:13:10 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:13:10 --> Helper loaded: form_helper
INFO - 2024-08-15 02:13:10 --> Helper loaded: language_helper
INFO - 2024-08-15 02:13:10 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:13:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:13:10 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:13:10 --> Upload Class Initialized
INFO - 2024-08-15 02:13:11 --> Controller Class Initialized
INFO - 2024-08-15 02:13:11 --> Model "M_admin" initialized
INFO - 2024-08-15 02:13:11 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:13:11 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:13:11 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:13:11 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:13:11 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:13:11 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:13:11 --> Final output sent to browser
DEBUG - 2024-08-15 07:13:11 --> Total execution time: 0.1666
INFO - 2024-08-15 02:13:16 --> Config Class Initialized
INFO - 2024-08-15 02:13:16 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:13:16 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:13:16 --> Utf8 Class Initialized
INFO - 2024-08-15 02:13:16 --> URI Class Initialized
INFO - 2024-08-15 02:13:16 --> Router Class Initialized
INFO - 2024-08-15 02:13:16 --> Output Class Initialized
INFO - 2024-08-15 02:13:16 --> Security Class Initialized
DEBUG - 2024-08-15 02:13:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:13:16 --> Input Class Initialized
INFO - 2024-08-15 02:13:16 --> Language Class Initialized
INFO - 2024-08-15 02:13:16 --> Loader Class Initialized
INFO - 2024-08-15 02:13:16 --> Helper loaded: application_helper
INFO - 2024-08-15 02:13:16 --> Helper loaded: url_helper
INFO - 2024-08-15 02:13:16 --> Helper loaded: file_helper
INFO - 2024-08-15 02:13:16 --> Helper loaded: security_helper
INFO - 2024-08-15 02:13:16 --> Helper loaded: date_helper
INFO - 2024-08-15 02:13:16 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:13:16 --> Helper loaded: form_helper
INFO - 2024-08-15 02:13:16 --> Helper loaded: language_helper
INFO - 2024-08-15 02:13:16 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:13:16 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:13:16 --> Upload Class Initialized
INFO - 2024-08-15 02:13:16 --> Controller Class Initialized
INFO - 2024-08-15 02:13:16 --> Model "M_admin" initialized
INFO - 2024-08-15 02:13:16 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:13:16 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:13:16 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:13:16 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:13:16 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 07:13:16 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:13:16 --> Final output sent to browser
DEBUG - 2024-08-15 07:13:16 --> Total execution time: 0.1576
INFO - 2024-08-15 02:13:17 --> Config Class Initialized
INFO - 2024-08-15 02:13:17 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:13:17 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:13:17 --> Utf8 Class Initialized
INFO - 2024-08-15 02:13:17 --> URI Class Initialized
INFO - 2024-08-15 02:13:17 --> Router Class Initialized
INFO - 2024-08-15 02:13:17 --> Output Class Initialized
INFO - 2024-08-15 02:13:17 --> Security Class Initialized
DEBUG - 2024-08-15 02:13:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:13:17 --> Input Class Initialized
INFO - 2024-08-15 02:13:17 --> Language Class Initialized
INFO - 2024-08-15 02:13:17 --> Loader Class Initialized
INFO - 2024-08-15 02:13:17 --> Helper loaded: application_helper
INFO - 2024-08-15 02:13:17 --> Helper loaded: url_helper
INFO - 2024-08-15 02:13:17 --> Helper loaded: file_helper
INFO - 2024-08-15 02:13:17 --> Helper loaded: security_helper
INFO - 2024-08-15 02:13:17 --> Helper loaded: date_helper
INFO - 2024-08-15 02:13:17 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:13:17 --> Helper loaded: form_helper
INFO - 2024-08-15 02:13:17 --> Helper loaded: language_helper
INFO - 2024-08-15 02:13:17 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:13:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:13:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:13:17 --> Upload Class Initialized
INFO - 2024-08-15 02:13:17 --> Controller Class Initialized
INFO - 2024-08-15 02:13:17 --> Model "M_admin" initialized
INFO - 2024-08-15 02:13:17 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:13:17 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:13:17 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:13:17 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:13:17 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:13:17 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:13:17 --> Final output sent to browser
DEBUG - 2024-08-15 07:13:17 --> Total execution time: 0.1696
INFO - 2024-08-15 02:15:36 --> Config Class Initialized
INFO - 2024-08-15 02:15:36 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:15:36 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:15:36 --> Utf8 Class Initialized
INFO - 2024-08-15 02:15:36 --> URI Class Initialized
INFO - 2024-08-15 02:15:36 --> Router Class Initialized
INFO - 2024-08-15 02:15:36 --> Output Class Initialized
INFO - 2024-08-15 02:15:36 --> Security Class Initialized
DEBUG - 2024-08-15 02:15:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:15:36 --> Input Class Initialized
INFO - 2024-08-15 02:15:36 --> Language Class Initialized
INFO - 2024-08-15 02:15:36 --> Loader Class Initialized
INFO - 2024-08-15 02:15:36 --> Helper loaded: application_helper
INFO - 2024-08-15 02:15:36 --> Helper loaded: url_helper
INFO - 2024-08-15 02:15:36 --> Helper loaded: file_helper
INFO - 2024-08-15 02:15:36 --> Helper loaded: security_helper
INFO - 2024-08-15 02:15:36 --> Helper loaded: date_helper
INFO - 2024-08-15 02:15:36 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:15:36 --> Helper loaded: form_helper
INFO - 2024-08-15 02:15:36 --> Helper loaded: language_helper
INFO - 2024-08-15 02:15:36 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:15:36 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:15:36 --> Upload Class Initialized
INFO - 2024-08-15 02:15:36 --> Controller Class Initialized
INFO - 2024-08-15 02:15:36 --> Model "M_admin" initialized
INFO - 2024-08-15 02:15:36 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:15:36 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:15:36 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:15:36 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:15:36 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:15:36 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:15:36 --> Final output sent to browser
DEBUG - 2024-08-15 07:15:36 --> Total execution time: 0.1512
INFO - 2024-08-15 02:15:39 --> Config Class Initialized
INFO - 2024-08-15 02:15:39 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:15:39 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:15:39 --> Utf8 Class Initialized
INFO - 2024-08-15 02:15:39 --> URI Class Initialized
INFO - 2024-08-15 02:15:39 --> Router Class Initialized
INFO - 2024-08-15 02:15:39 --> Output Class Initialized
INFO - 2024-08-15 02:15:39 --> Security Class Initialized
DEBUG - 2024-08-15 02:15:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:15:39 --> Input Class Initialized
INFO - 2024-08-15 02:15:39 --> Language Class Initialized
INFO - 2024-08-15 02:15:39 --> Loader Class Initialized
INFO - 2024-08-15 02:15:39 --> Helper loaded: application_helper
INFO - 2024-08-15 02:15:39 --> Helper loaded: url_helper
INFO - 2024-08-15 02:15:39 --> Helper loaded: file_helper
INFO - 2024-08-15 02:15:39 --> Helper loaded: security_helper
INFO - 2024-08-15 02:15:39 --> Helper loaded: date_helper
INFO - 2024-08-15 02:15:39 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:15:39 --> Helper loaded: form_helper
INFO - 2024-08-15 02:15:39 --> Helper loaded: language_helper
INFO - 2024-08-15 02:15:39 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:15:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:15:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:15:39 --> Upload Class Initialized
INFO - 2024-08-15 02:15:39 --> Controller Class Initialized
INFO - 2024-08-15 02:15:39 --> Model "M_admin" initialized
INFO - 2024-08-15 02:15:39 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:15:39 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:15:39 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:15:39 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:15:39 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:15:39 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:15:39 --> Final output sent to browser
DEBUG - 2024-08-15 07:15:39 --> Total execution time: 0.1614
INFO - 2024-08-15 02:15:53 --> Config Class Initialized
INFO - 2024-08-15 02:15:53 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:15:53 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:15:53 --> Utf8 Class Initialized
INFO - 2024-08-15 02:15:53 --> URI Class Initialized
INFO - 2024-08-15 02:15:53 --> Router Class Initialized
INFO - 2024-08-15 02:15:53 --> Output Class Initialized
INFO - 2024-08-15 02:15:53 --> Security Class Initialized
DEBUG - 2024-08-15 02:15:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:15:53 --> Input Class Initialized
INFO - 2024-08-15 02:15:53 --> Language Class Initialized
INFO - 2024-08-15 02:15:53 --> Loader Class Initialized
INFO - 2024-08-15 02:15:53 --> Helper loaded: application_helper
INFO - 2024-08-15 02:15:53 --> Helper loaded: url_helper
INFO - 2024-08-15 02:15:53 --> Helper loaded: file_helper
INFO - 2024-08-15 02:15:53 --> Helper loaded: security_helper
INFO - 2024-08-15 02:15:53 --> Helper loaded: date_helper
INFO - 2024-08-15 02:15:53 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:15:53 --> Helper loaded: form_helper
INFO - 2024-08-15 02:15:53 --> Helper loaded: language_helper
INFO - 2024-08-15 02:15:53 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:15:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:15:53 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:15:53 --> Upload Class Initialized
INFO - 2024-08-15 02:15:53 --> Controller Class Initialized
INFO - 2024-08-15 02:15:53 --> Model "M_admin" initialized
INFO - 2024-08-15 02:15:53 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:15:53 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:15:53 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:15:53 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:15:53 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:15:53 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:15:53 --> Final output sent to browser
DEBUG - 2024-08-15 07:15:53 --> Total execution time: 0.1548
INFO - 2024-08-15 02:15:58 --> Config Class Initialized
INFO - 2024-08-15 02:15:58 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:15:58 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:15:58 --> Utf8 Class Initialized
INFO - 2024-08-15 02:15:58 --> URI Class Initialized
INFO - 2024-08-15 02:15:58 --> Router Class Initialized
INFO - 2024-08-15 02:15:58 --> Output Class Initialized
INFO - 2024-08-15 02:15:58 --> Security Class Initialized
DEBUG - 2024-08-15 02:15:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:15:58 --> Input Class Initialized
INFO - 2024-08-15 02:15:58 --> Language Class Initialized
INFO - 2024-08-15 02:15:58 --> Loader Class Initialized
INFO - 2024-08-15 02:15:58 --> Helper loaded: application_helper
INFO - 2024-08-15 02:15:58 --> Helper loaded: url_helper
INFO - 2024-08-15 02:15:58 --> Helper loaded: file_helper
INFO - 2024-08-15 02:15:58 --> Helper loaded: security_helper
INFO - 2024-08-15 02:15:58 --> Helper loaded: date_helper
INFO - 2024-08-15 02:15:58 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:15:58 --> Helper loaded: form_helper
INFO - 2024-08-15 02:15:58 --> Helper loaded: language_helper
INFO - 2024-08-15 02:15:58 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:15:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:15:58 --> Upload Class Initialized
INFO - 2024-08-15 02:15:58 --> Controller Class Initialized
INFO - 2024-08-15 02:15:58 --> Model "M_admin" initialized
INFO - 2024-08-15 02:15:58 --> Model "M_config" initialized
DEBUG - 2024-08-15 02:15:58 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 02:15:58 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 02:15:58 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 07:15:58 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 07:15:58 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 07:15:58 --> Final output sent to browser
DEBUG - 2024-08-15 07:15:58 --> Total execution time: 0.1382
INFO - 2024-08-15 02:30:36 --> Config Class Initialized
INFO - 2024-08-15 02:30:36 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:30:36 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:30:36 --> Utf8 Class Initialized
INFO - 2024-08-15 02:30:36 --> URI Class Initialized
INFO - 2024-08-15 02:30:36 --> Router Class Initialized
INFO - 2024-08-15 02:30:36 --> Output Class Initialized
INFO - 2024-08-15 02:30:36 --> Security Class Initialized
DEBUG - 2024-08-15 02:30:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:30:36 --> Input Class Initialized
INFO - 2024-08-15 02:30:36 --> Language Class Initialized
INFO - 2024-08-15 02:30:36 --> Loader Class Initialized
INFO - 2024-08-15 02:30:36 --> Helper loaded: application_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: url_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: file_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: security_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: date_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: form_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: language_helper
INFO - 2024-08-15 02:30:36 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:30:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:30:36 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:30:36 --> Upload Class Initialized
INFO - 2024-08-15 02:30:36 --> Controller Class Initialized
INFO - 2024-08-15 02:30:36 --> Model "M_login" initialized
INFO - 2024-08-15 02:30:36 --> Model "M_admin" initialized
INFO - 2024-08-15 02:30:36 --> Model "M_config" initialized
ERROR - 2024-08-15 02:30:36 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 02:30:36 --> Config Class Initialized
INFO - 2024-08-15 02:30:36 --> Hooks Class Initialized
DEBUG - 2024-08-15 02:30:36 --> UTF-8 Support Enabled
INFO - 2024-08-15 02:30:36 --> Utf8 Class Initialized
INFO - 2024-08-15 02:30:36 --> URI Class Initialized
INFO - 2024-08-15 02:30:36 --> Router Class Initialized
INFO - 2024-08-15 02:30:36 --> Output Class Initialized
INFO - 2024-08-15 02:30:36 --> Security Class Initialized
DEBUG - 2024-08-15 02:30:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 02:30:36 --> Input Class Initialized
INFO - 2024-08-15 02:30:36 --> Language Class Initialized
INFO - 2024-08-15 02:30:36 --> Loader Class Initialized
INFO - 2024-08-15 02:30:36 --> Helper loaded: application_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: url_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: file_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: security_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: date_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: captcha_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: form_helper
INFO - 2024-08-15 02:30:36 --> Helper loaded: language_helper
INFO - 2024-08-15 02:30:36 --> Database Driver Class Initialized
DEBUG - 2024-08-15 02:30:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 02:30:36 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 02:30:36 --> Upload Class Initialized
INFO - 2024-08-15 02:30:36 --> Controller Class Initialized
INFO - 2024-08-15 02:30:36 --> Model "M_login" initialized
INFO - 2024-08-15 02:30:36 --> Model "M_admin" initialized
INFO - 2024-08-15 02:30:36 --> Model "M_config" initialized
ERROR - 2024-08-15 02:30:36 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 02:30:36 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/login.php
INFO - 2024-08-15 02:30:36 --> Final output sent to browser
DEBUG - 2024-08-15 02:30:36 --> Total execution time: 0.1181
INFO - 2024-08-15 16:52:58 --> Config Class Initialized
INFO - 2024-08-15 16:52:58 --> Hooks Class Initialized
DEBUG - 2024-08-15 16:52:58 --> UTF-8 Support Enabled
INFO - 2024-08-15 16:52:58 --> Utf8 Class Initialized
INFO - 2024-08-15 16:52:58 --> URI Class Initialized
DEBUG - 2024-08-15 16:52:58 --> No URI present. Default controller set.
INFO - 2024-08-15 16:52:58 --> Router Class Initialized
INFO - 2024-08-15 16:52:58 --> Output Class Initialized
INFO - 2024-08-15 16:52:58 --> Security Class Initialized
DEBUG - 2024-08-15 16:52:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 16:52:58 --> Input Class Initialized
INFO - 2024-08-15 16:52:58 --> Language Class Initialized
INFO - 2024-08-15 16:52:58 --> Loader Class Initialized
INFO - 2024-08-15 16:52:58 --> Helper loaded: application_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: url_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: file_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: security_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: date_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: captcha_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: form_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: language_helper
INFO - 2024-08-15 16:52:58 --> Database Driver Class Initialized
DEBUG - 2024-08-15 16:52:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 16:52:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 16:52:58 --> Upload Class Initialized
INFO - 2024-08-15 16:52:58 --> Controller Class Initialized
INFO - 2024-08-15 16:52:58 --> Model "M_admin" initialized
INFO - 2024-08-15 16:52:58 --> Model "M_config" initialized
ERROR - 2024-08-15 16:52:58 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 16:52:58 --> Config Class Initialized
INFO - 2024-08-15 16:52:58 --> Hooks Class Initialized
DEBUG - 2024-08-15 16:52:58 --> UTF-8 Support Enabled
INFO - 2024-08-15 16:52:58 --> Utf8 Class Initialized
INFO - 2024-08-15 16:52:58 --> URI Class Initialized
INFO - 2024-08-15 16:52:58 --> Router Class Initialized
INFO - 2024-08-15 16:52:58 --> Output Class Initialized
INFO - 2024-08-15 16:52:58 --> Security Class Initialized
DEBUG - 2024-08-15 16:52:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 16:52:58 --> Input Class Initialized
INFO - 2024-08-15 16:52:58 --> Language Class Initialized
INFO - 2024-08-15 16:52:58 --> Loader Class Initialized
INFO - 2024-08-15 16:52:58 --> Helper loaded: application_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: url_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: file_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: security_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: date_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: captcha_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: form_helper
INFO - 2024-08-15 16:52:58 --> Helper loaded: language_helper
INFO - 2024-08-15 16:52:58 --> Database Driver Class Initialized
DEBUG - 2024-08-15 16:52:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 16:52:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 16:52:58 --> Upload Class Initialized
INFO - 2024-08-15 16:52:58 --> Controller Class Initialized
INFO - 2024-08-15 16:52:58 --> Model "M_login" initialized
INFO - 2024-08-15 16:52:58 --> Model "M_admin" initialized
INFO - 2024-08-15 16:52:58 --> Model "M_config" initialized
ERROR - 2024-08-15 16:52:58 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 16:52:58 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/login.php
INFO - 2024-08-15 16:52:58 --> Final output sent to browser
DEBUG - 2024-08-15 16:52:58 --> Total execution time: 0.1156
INFO - 2024-08-15 16:53:48 --> Config Class Initialized
INFO - 2024-08-15 16:53:48 --> Hooks Class Initialized
DEBUG - 2024-08-15 16:53:48 --> UTF-8 Support Enabled
INFO - 2024-08-15 16:53:48 --> Utf8 Class Initialized
INFO - 2024-08-15 16:53:48 --> URI Class Initialized
INFO - 2024-08-15 16:53:48 --> Router Class Initialized
INFO - 2024-08-15 16:53:48 --> Output Class Initialized
INFO - 2024-08-15 16:53:48 --> Security Class Initialized
DEBUG - 2024-08-15 16:53:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 16:53:48 --> Input Class Initialized
INFO - 2024-08-15 16:53:48 --> Language Class Initialized
INFO - 2024-08-15 16:53:48 --> Loader Class Initialized
INFO - 2024-08-15 16:53:48 --> Helper loaded: application_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: url_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: file_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: security_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: date_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: captcha_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: form_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: language_helper
INFO - 2024-08-15 16:53:48 --> Database Driver Class Initialized
DEBUG - 2024-08-15 16:53:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 16:53:48 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 16:53:48 --> Upload Class Initialized
INFO - 2024-08-15 16:53:48 --> Controller Class Initialized
INFO - 2024-08-15 16:53:48 --> Model "M_login" initialized
INFO - 2024-08-15 16:53:48 --> Model "M_admin" initialized
INFO - 2024-08-15 16:53:48 --> Model "M_config" initialized
ERROR - 2024-08-15 16:53:48 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 16:53:48 --> Config Class Initialized
INFO - 2024-08-15 16:53:48 --> Hooks Class Initialized
DEBUG - 2024-08-15 16:53:48 --> UTF-8 Support Enabled
INFO - 2024-08-15 16:53:48 --> Utf8 Class Initialized
INFO - 2024-08-15 16:53:48 --> URI Class Initialized
INFO - 2024-08-15 16:53:48 --> Router Class Initialized
INFO - 2024-08-15 16:53:48 --> Output Class Initialized
INFO - 2024-08-15 16:53:48 --> Security Class Initialized
DEBUG - 2024-08-15 16:53:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 16:53:48 --> Input Class Initialized
INFO - 2024-08-15 16:53:48 --> Language Class Initialized
INFO - 2024-08-15 16:53:48 --> Loader Class Initialized
INFO - 2024-08-15 16:53:48 --> Helper loaded: application_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: url_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: file_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: security_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: date_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: captcha_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: form_helper
INFO - 2024-08-15 16:53:48 --> Helper loaded: language_helper
INFO - 2024-08-15 16:53:48 --> Database Driver Class Initialized
DEBUG - 2024-08-15 16:53:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 16:53:48 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 16:53:48 --> Upload Class Initialized
INFO - 2024-08-15 16:53:48 --> Controller Class Initialized
INFO - 2024-08-15 16:53:48 --> Model "M_admin" initialized
INFO - 2024-08-15 16:53:48 --> Model "M_config" initialized
ERROR - 2024-08-15 16:53:48 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 21:53:48 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/dashboard/statistik.php
INFO - 2024-08-15 21:53:48 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 21:53:48 --> Final output sent to browser
DEBUG - 2024-08-15 21:53:48 --> Total execution time: 0.1782
INFO - 2024-08-15 16:53:52 --> Config Class Initialized
INFO - 2024-08-15 16:53:52 --> Hooks Class Initialized
DEBUG - 2024-08-15 16:53:52 --> UTF-8 Support Enabled
INFO - 2024-08-15 16:53:52 --> Utf8 Class Initialized
INFO - 2024-08-15 16:53:52 --> URI Class Initialized
INFO - 2024-08-15 16:53:52 --> Router Class Initialized
INFO - 2024-08-15 16:53:52 --> Output Class Initialized
INFO - 2024-08-15 16:53:52 --> Security Class Initialized
DEBUG - 2024-08-15 16:53:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 16:53:52 --> Input Class Initialized
INFO - 2024-08-15 16:53:52 --> Language Class Initialized
INFO - 2024-08-15 16:53:52 --> Loader Class Initialized
INFO - 2024-08-15 16:53:52 --> Helper loaded: application_helper
INFO - 2024-08-15 16:53:52 --> Helper loaded: url_helper
INFO - 2024-08-15 16:53:52 --> Helper loaded: file_helper
INFO - 2024-08-15 16:53:52 --> Helper loaded: security_helper
INFO - 2024-08-15 16:53:52 --> Helper loaded: date_helper
INFO - 2024-08-15 16:53:52 --> Helper loaded: captcha_helper
INFO - 2024-08-15 16:53:52 --> Helper loaded: form_helper
INFO - 2024-08-15 16:53:52 --> Helper loaded: language_helper
INFO - 2024-08-15 16:53:52 --> Database Driver Class Initialized
DEBUG - 2024-08-15 16:53:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 16:53:52 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 16:53:52 --> Upload Class Initialized
INFO - 2024-08-15 16:53:52 --> Controller Class Initialized
INFO - 2024-08-15 16:53:52 --> Model "M_admin" initialized
INFO - 2024-08-15 16:53:52 --> Model "M_config" initialized
DEBUG - 2024-08-15 16:53:52 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 16:53:52 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 16:53:52 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 21:53:52 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 21:53:52 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 21:53:52 --> Final output sent to browser
DEBUG - 2024-08-15 21:53:52 --> Total execution time: 0.2050
INFO - 2024-08-15 16:58:15 --> Config Class Initialized
INFO - 2024-08-15 16:58:15 --> Hooks Class Initialized
DEBUG - 2024-08-15 16:58:15 --> UTF-8 Support Enabled
INFO - 2024-08-15 16:58:15 --> Utf8 Class Initialized
INFO - 2024-08-15 16:58:15 --> URI Class Initialized
INFO - 2024-08-15 16:58:15 --> Router Class Initialized
INFO - 2024-08-15 16:58:15 --> Output Class Initialized
INFO - 2024-08-15 16:58:15 --> Security Class Initialized
DEBUG - 2024-08-15 16:58:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 16:58:15 --> Input Class Initialized
INFO - 2024-08-15 16:58:15 --> Language Class Initialized
INFO - 2024-08-15 16:58:15 --> Loader Class Initialized
INFO - 2024-08-15 16:58:15 --> Helper loaded: application_helper
INFO - 2024-08-15 16:58:15 --> Helper loaded: url_helper
INFO - 2024-08-15 16:58:15 --> Helper loaded: file_helper
INFO - 2024-08-15 16:58:15 --> Helper loaded: security_helper
INFO - 2024-08-15 16:58:15 --> Helper loaded: date_helper
INFO - 2024-08-15 16:58:15 --> Helper loaded: captcha_helper
INFO - 2024-08-15 16:58:15 --> Helper loaded: form_helper
INFO - 2024-08-15 16:58:15 --> Helper loaded: language_helper
INFO - 2024-08-15 16:58:15 --> Database Driver Class Initialized
DEBUG - 2024-08-15 16:58:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 16:58:15 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 16:58:15 --> Upload Class Initialized
INFO - 2024-08-15 16:58:15 --> Controller Class Initialized
INFO - 2024-08-15 16:58:15 --> Model "M_admin" initialized
INFO - 2024-08-15 16:58:15 --> Model "M_config" initialized
DEBUG - 2024-08-15 16:58:15 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 16:58:15 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 16:58:15 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 21:58:15 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 21:58:15 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 21:58:15 --> Final output sent to browser
DEBUG - 2024-08-15 21:58:15 --> Total execution time: 0.1882
INFO - 2024-08-15 17:05:43 --> Config Class Initialized
INFO - 2024-08-15 17:05:43 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:05:43 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:05:43 --> Utf8 Class Initialized
INFO - 2024-08-15 17:05:43 --> URI Class Initialized
INFO - 2024-08-15 17:05:43 --> Router Class Initialized
INFO - 2024-08-15 17:05:43 --> Output Class Initialized
INFO - 2024-08-15 17:05:43 --> Security Class Initialized
DEBUG - 2024-08-15 17:05:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:05:43 --> Input Class Initialized
INFO - 2024-08-15 17:05:43 --> Language Class Initialized
INFO - 2024-08-15 17:05:43 --> Loader Class Initialized
INFO - 2024-08-15 17:05:43 --> Helper loaded: application_helper
INFO - 2024-08-15 17:05:43 --> Helper loaded: url_helper
INFO - 2024-08-15 17:05:43 --> Helper loaded: file_helper
INFO - 2024-08-15 17:05:43 --> Helper loaded: security_helper
INFO - 2024-08-15 17:05:43 --> Helper loaded: date_helper
INFO - 2024-08-15 17:05:43 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:05:43 --> Helper loaded: form_helper
INFO - 2024-08-15 17:05:43 --> Helper loaded: language_helper
INFO - 2024-08-15 17:05:43 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:05:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:05:43 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:05:43 --> Upload Class Initialized
INFO - 2024-08-15 17:05:43 --> Controller Class Initialized
INFO - 2024-08-15 17:05:43 --> Model "M_admin" initialized
INFO - 2024-08-15 17:05:43 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:05:43 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:05:43 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:05:43 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:05:43 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 22:05:43 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 22:05:43 --> Final output sent to browser
DEBUG - 2024-08-15 22:05:43 --> Total execution time: 0.1405
INFO - 2024-08-15 17:07:59 --> Config Class Initialized
INFO - 2024-08-15 17:07:59 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:07:59 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:07:59 --> Utf8 Class Initialized
INFO - 2024-08-15 17:07:59 --> URI Class Initialized
INFO - 2024-08-15 17:07:59 --> Router Class Initialized
INFO - 2024-08-15 17:07:59 --> Output Class Initialized
INFO - 2024-08-15 17:07:59 --> Security Class Initialized
DEBUG - 2024-08-15 17:07:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:07:59 --> Input Class Initialized
INFO - 2024-08-15 17:07:59 --> Language Class Initialized
INFO - 2024-08-15 17:07:59 --> Loader Class Initialized
INFO - 2024-08-15 17:07:59 --> Helper loaded: application_helper
INFO - 2024-08-15 17:07:59 --> Helper loaded: url_helper
INFO - 2024-08-15 17:07:59 --> Helper loaded: file_helper
INFO - 2024-08-15 17:07:59 --> Helper loaded: security_helper
INFO - 2024-08-15 17:07:59 --> Helper loaded: date_helper
INFO - 2024-08-15 17:07:59 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:07:59 --> Helper loaded: form_helper
INFO - 2024-08-15 17:07:59 --> Helper loaded: language_helper
INFO - 2024-08-15 17:07:59 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:07:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:07:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:07:59 --> Upload Class Initialized
INFO - 2024-08-15 17:07:59 --> Controller Class Initialized
INFO - 2024-08-15 17:07:59 --> Model "M_admin" initialized
INFO - 2024-08-15 17:07:59 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:07:59 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:07:59 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:07:59 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:07:59 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/all_arrivals.php
INFO - 2024-08-15 22:07:59 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 22:07:59 --> Final output sent to browser
DEBUG - 2024-08-15 22:07:59 --> Total execution time: 0.1827
INFO - 2024-08-15 17:08:02 --> Config Class Initialized
INFO - 2024-08-15 17:08:02 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:08:02 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:08:02 --> Utf8 Class Initialized
INFO - 2024-08-15 17:08:02 --> URI Class Initialized
INFO - 2024-08-15 17:08:02 --> Router Class Initialized
INFO - 2024-08-15 17:08:02 --> Output Class Initialized
INFO - 2024-08-15 17:08:02 --> Security Class Initialized
DEBUG - 2024-08-15 17:08:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:08:02 --> Input Class Initialized
INFO - 2024-08-15 17:08:02 --> Language Class Initialized
INFO - 2024-08-15 17:08:02 --> Loader Class Initialized
INFO - 2024-08-15 17:08:02 --> Helper loaded: application_helper
INFO - 2024-08-15 17:08:02 --> Helper loaded: url_helper
INFO - 2024-08-15 17:08:02 --> Helper loaded: file_helper
INFO - 2024-08-15 17:08:02 --> Helper loaded: security_helper
INFO - 2024-08-15 17:08:02 --> Helper loaded: date_helper
INFO - 2024-08-15 17:08:02 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:08:02 --> Helper loaded: form_helper
INFO - 2024-08-15 17:08:02 --> Helper loaded: language_helper
INFO - 2024-08-15 17:08:02 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:08:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:08:02 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:08:02 --> Upload Class Initialized
INFO - 2024-08-15 17:08:02 --> Controller Class Initialized
INFO - 2024-08-15 17:08:02 --> Model "M_admin" initialized
INFO - 2024-08-15 17:08:02 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:08:02 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:08:02 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:08:02 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:08:02 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/details.php
INFO - 2024-08-15 22:08:02 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 22:08:02 --> Final output sent to browser
DEBUG - 2024-08-15 22:08:02 --> Total execution time: 0.1670
INFO - 2024-08-15 17:08:08 --> Config Class Initialized
INFO - 2024-08-15 17:08:08 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:08:08 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:08:08 --> Utf8 Class Initialized
INFO - 2024-08-15 17:08:08 --> URI Class Initialized
INFO - 2024-08-15 17:08:08 --> Router Class Initialized
INFO - 2024-08-15 17:08:08 --> Output Class Initialized
INFO - 2024-08-15 17:08:08 --> Security Class Initialized
DEBUG - 2024-08-15 17:08:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:08:08 --> Input Class Initialized
INFO - 2024-08-15 17:08:08 --> Language Class Initialized
INFO - 2024-08-15 17:08:08 --> Loader Class Initialized
INFO - 2024-08-15 17:08:08 --> Helper loaded: application_helper
INFO - 2024-08-15 17:08:08 --> Helper loaded: url_helper
INFO - 2024-08-15 17:08:08 --> Helper loaded: file_helper
INFO - 2024-08-15 17:08:08 --> Helper loaded: security_helper
INFO - 2024-08-15 17:08:08 --> Helper loaded: date_helper
INFO - 2024-08-15 17:08:08 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:08:08 --> Helper loaded: form_helper
INFO - 2024-08-15 17:08:08 --> Helper loaded: language_helper
INFO - 2024-08-15 17:08:08 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:08:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:08:08 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:08:08 --> Upload Class Initialized
INFO - 2024-08-15 17:08:09 --> Controller Class Initialized
INFO - 2024-08-15 17:08:09 --> Model "M_admin" initialized
INFO - 2024-08-15 17:08:09 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:08:09 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:08:09 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:08:09 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 22:08:09 --> Severity: error --> Exception: syntax error, unexpected token "}" C:\xampp\htdocs\ci_wms\application\views\admin\content\website\movements.php 413
INFO - 2024-08-15 17:08:13 --> Config Class Initialized
INFO - 2024-08-15 17:08:13 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:08:13 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:08:13 --> Utf8 Class Initialized
INFO - 2024-08-15 17:08:13 --> URI Class Initialized
INFO - 2024-08-15 17:08:13 --> Router Class Initialized
INFO - 2024-08-15 17:08:13 --> Output Class Initialized
INFO - 2024-08-15 17:08:13 --> Security Class Initialized
DEBUG - 2024-08-15 17:08:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:08:13 --> Input Class Initialized
INFO - 2024-08-15 17:08:13 --> Language Class Initialized
INFO - 2024-08-15 17:08:13 --> Loader Class Initialized
INFO - 2024-08-15 17:08:13 --> Helper loaded: application_helper
INFO - 2024-08-15 17:08:13 --> Helper loaded: url_helper
INFO - 2024-08-15 17:08:13 --> Helper loaded: file_helper
INFO - 2024-08-15 17:08:13 --> Helper loaded: security_helper
INFO - 2024-08-15 17:08:13 --> Helper loaded: date_helper
INFO - 2024-08-15 17:08:13 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:08:13 --> Helper loaded: form_helper
INFO - 2024-08-15 17:08:13 --> Helper loaded: language_helper
INFO - 2024-08-15 17:08:13 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:08:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:08:13 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:08:13 --> Upload Class Initialized
INFO - 2024-08-15 17:08:13 --> Controller Class Initialized
INFO - 2024-08-15 17:08:13 --> Model "M_admin" initialized
INFO - 2024-08-15 17:08:13 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:08:13 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:08:13 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:08:13 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:08:13 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/details.php
INFO - 2024-08-15 22:08:13 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 22:08:13 --> Final output sent to browser
DEBUG - 2024-08-15 22:08:13 --> Total execution time: 0.1622
INFO - 2024-08-15 17:08:33 --> Config Class Initialized
INFO - 2024-08-15 17:08:33 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:08:33 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:08:33 --> Utf8 Class Initialized
INFO - 2024-08-15 17:08:33 --> URI Class Initialized
INFO - 2024-08-15 17:08:33 --> Router Class Initialized
INFO - 2024-08-15 17:08:33 --> Output Class Initialized
INFO - 2024-08-15 17:08:33 --> Security Class Initialized
DEBUG - 2024-08-15 17:08:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:08:33 --> Input Class Initialized
INFO - 2024-08-15 17:08:33 --> Language Class Initialized
INFO - 2024-08-15 17:08:33 --> Loader Class Initialized
INFO - 2024-08-15 17:08:33 --> Helper loaded: application_helper
INFO - 2024-08-15 17:08:33 --> Helper loaded: url_helper
INFO - 2024-08-15 17:08:33 --> Helper loaded: file_helper
INFO - 2024-08-15 17:08:33 --> Helper loaded: security_helper
INFO - 2024-08-15 17:08:33 --> Helper loaded: date_helper
INFO - 2024-08-15 17:08:33 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:08:33 --> Helper loaded: form_helper
INFO - 2024-08-15 17:08:33 --> Helper loaded: language_helper
INFO - 2024-08-15 17:08:33 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:08:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:08:33 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:08:33 --> Upload Class Initialized
INFO - 2024-08-15 17:08:33 --> Controller Class Initialized
INFO - 2024-08-15 17:08:33 --> Model "M_admin" initialized
INFO - 2024-08-15 17:08:33 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:08:33 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:08:33 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:08:33 --> Language file contains no data: language/indonesia/frontend_lang.php
ERROR - 2024-08-15 22:08:33 --> Severity: error --> Exception: syntax error, unexpected token "}" C:\xampp\htdocs\ci_wms\application\views\admin\content\website\movements.php 413
INFO - 2024-08-15 17:54:30 --> Config Class Initialized
INFO - 2024-08-15 17:54:30 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:54:30 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:54:30 --> Utf8 Class Initialized
INFO - 2024-08-15 17:54:30 --> URI Class Initialized
INFO - 2024-08-15 17:54:30 --> Router Class Initialized
INFO - 2024-08-15 17:54:30 --> Output Class Initialized
INFO - 2024-08-15 17:54:30 --> Security Class Initialized
DEBUG - 2024-08-15 17:54:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:54:30 --> Input Class Initialized
INFO - 2024-08-15 17:54:30 --> Language Class Initialized
INFO - 2024-08-15 17:54:30 --> Loader Class Initialized
INFO - 2024-08-15 17:54:30 --> Helper loaded: application_helper
INFO - 2024-08-15 17:54:30 --> Helper loaded: url_helper
INFO - 2024-08-15 17:54:30 --> Helper loaded: file_helper
INFO - 2024-08-15 17:54:30 --> Helper loaded: security_helper
INFO - 2024-08-15 17:54:30 --> Helper loaded: date_helper
INFO - 2024-08-15 17:54:30 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:54:30 --> Helper loaded: form_helper
INFO - 2024-08-15 17:54:30 --> Helper loaded: language_helper
INFO - 2024-08-15 17:54:30 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:54:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:54:30 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:54:30 --> Upload Class Initialized
INFO - 2024-08-15 17:54:30 --> Controller Class Initialized
INFO - 2024-08-15 17:54:30 --> Model "M_admin" initialized
INFO - 2024-08-15 17:54:30 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:54:30 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:54:30 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:54:30 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:54:30 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/masuk.php
INFO - 2024-08-15 22:54:30 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 22:54:30 --> Final output sent to browser
DEBUG - 2024-08-15 22:54:30 --> Total execution time: 0.1769
INFO - 2024-08-15 17:54:39 --> Config Class Initialized
INFO - 2024-08-15 17:54:39 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:54:39 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:54:39 --> Utf8 Class Initialized
INFO - 2024-08-15 17:54:39 --> URI Class Initialized
INFO - 2024-08-15 17:54:39 --> Router Class Initialized
INFO - 2024-08-15 17:54:39 --> Output Class Initialized
INFO - 2024-08-15 17:54:39 --> Security Class Initialized
DEBUG - 2024-08-15 17:54:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:54:39 --> Input Class Initialized
INFO - 2024-08-15 17:54:39 --> Language Class Initialized
INFO - 2024-08-15 17:54:39 --> Loader Class Initialized
INFO - 2024-08-15 17:54:39 --> Helper loaded: application_helper
INFO - 2024-08-15 17:54:39 --> Helper loaded: url_helper
INFO - 2024-08-15 17:54:39 --> Helper loaded: file_helper
INFO - 2024-08-15 17:54:39 --> Helper loaded: security_helper
INFO - 2024-08-15 17:54:39 --> Helper loaded: date_helper
INFO - 2024-08-15 17:54:39 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:54:39 --> Helper loaded: form_helper
INFO - 2024-08-15 17:54:39 --> Helper loaded: language_helper
INFO - 2024-08-15 17:54:39 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:54:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:54:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:54:39 --> Upload Class Initialized
INFO - 2024-08-15 17:54:39 --> Controller Class Initialized
INFO - 2024-08-15 17:54:39 --> Model "M_admin" initialized
INFO - 2024-08-15 17:54:39 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:54:39 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:54:39 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:54:39 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:54:39 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 22:54:39 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 22:54:39 --> Final output sent to browser
DEBUG - 2024-08-15 22:54:39 --> Total execution time: 0.1891
INFO - 2024-08-15 17:54:45 --> Config Class Initialized
INFO - 2024-08-15 17:54:45 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:54:45 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:54:45 --> Utf8 Class Initialized
INFO - 2024-08-15 17:54:45 --> URI Class Initialized
INFO - 2024-08-15 17:54:45 --> Router Class Initialized
INFO - 2024-08-15 17:54:45 --> Output Class Initialized
INFO - 2024-08-15 17:54:45 --> Security Class Initialized
DEBUG - 2024-08-15 17:54:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:54:45 --> Input Class Initialized
INFO - 2024-08-15 17:54:45 --> Language Class Initialized
INFO - 2024-08-15 17:54:45 --> Loader Class Initialized
INFO - 2024-08-15 17:54:45 --> Helper loaded: application_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: url_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: file_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: security_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: date_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: form_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: language_helper
INFO - 2024-08-15 17:54:45 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:54:45 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:54:45 --> Upload Class Initialized
INFO - 2024-08-15 17:54:45 --> Controller Class Initialized
INFO - 2024-08-15 17:54:45 --> Model "M_admin" initialized
INFO - 2024-08-15 17:54:45 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:54:45 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:54:45 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:54:45 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:54:45 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 22:54:45 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 22:54:45 --> Final output sent to browser
DEBUG - 2024-08-15 22:54:45 --> Total execution time: 0.1947
INFO - 2024-08-15 17:54:45 --> Config Class Initialized
INFO - 2024-08-15 17:54:45 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:54:45 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:54:45 --> Utf8 Class Initialized
INFO - 2024-08-15 17:54:45 --> URI Class Initialized
INFO - 2024-08-15 17:54:45 --> Router Class Initialized
INFO - 2024-08-15 17:54:45 --> Output Class Initialized
INFO - 2024-08-15 17:54:45 --> Security Class Initialized
DEBUG - 2024-08-15 17:54:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:54:45 --> Input Class Initialized
INFO - 2024-08-15 17:54:45 --> Language Class Initialized
INFO - 2024-08-15 17:54:45 --> Loader Class Initialized
INFO - 2024-08-15 17:54:45 --> Helper loaded: application_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: url_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: file_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: security_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: date_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: form_helper
INFO - 2024-08-15 17:54:45 --> Helper loaded: language_helper
INFO - 2024-08-15 17:54:45 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:54:45 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:54:45 --> Upload Class Initialized
INFO - 2024-08-15 17:54:45 --> Controller Class Initialized
INFO - 2024-08-15 17:54:45 --> Model "M_admin" initialized
INFO - 2024-08-15 17:54:45 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:54:45 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:54:45 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:54:45 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 17:54:45 --> Final output sent to browser
DEBUG - 2024-08-15 17:54:45 --> Total execution time: 0.1498
INFO - 2024-08-15 17:55:40 --> Config Class Initialized
INFO - 2024-08-15 17:55:40 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:55:40 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:55:40 --> Utf8 Class Initialized
INFO - 2024-08-15 17:55:40 --> URI Class Initialized
INFO - 2024-08-15 17:55:40 --> Router Class Initialized
INFO - 2024-08-15 17:55:40 --> Output Class Initialized
INFO - 2024-08-15 17:55:40 --> Security Class Initialized
DEBUG - 2024-08-15 17:55:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:55:40 --> Input Class Initialized
INFO - 2024-08-15 17:55:40 --> Language Class Initialized
INFO - 2024-08-15 17:55:40 --> Loader Class Initialized
INFO - 2024-08-15 17:55:40 --> Helper loaded: application_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: url_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: file_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: security_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: date_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: form_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: language_helper
INFO - 2024-08-15 17:55:40 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:55:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:55:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:55:40 --> Upload Class Initialized
INFO - 2024-08-15 17:55:40 --> Controller Class Initialized
INFO - 2024-08-15 17:55:40 --> Model "M_admin" initialized
INFO - 2024-08-15 17:55:40 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:55:40 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:55:40 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:55:40 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:55:40 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 22:55:40 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 22:55:40 --> Final output sent to browser
DEBUG - 2024-08-15 22:55:40 --> Total execution time: 0.1813
INFO - 2024-08-15 17:55:40 --> Config Class Initialized
INFO - 2024-08-15 17:55:40 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:55:40 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:55:40 --> Utf8 Class Initialized
INFO - 2024-08-15 17:55:40 --> URI Class Initialized
INFO - 2024-08-15 17:55:40 --> Router Class Initialized
INFO - 2024-08-15 17:55:40 --> Output Class Initialized
INFO - 2024-08-15 17:55:40 --> Security Class Initialized
DEBUG - 2024-08-15 17:55:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:55:40 --> Input Class Initialized
INFO - 2024-08-15 17:55:40 --> Language Class Initialized
INFO - 2024-08-15 17:55:40 --> Loader Class Initialized
INFO - 2024-08-15 17:55:40 --> Helper loaded: application_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: url_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: file_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: security_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: date_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: form_helper
INFO - 2024-08-15 17:55:40 --> Helper loaded: language_helper
INFO - 2024-08-15 17:55:40 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:55:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:55:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:55:40 --> Upload Class Initialized
INFO - 2024-08-15 17:55:40 --> Controller Class Initialized
INFO - 2024-08-15 17:55:40 --> Model "M_admin" initialized
INFO - 2024-08-15 17:55:40 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:55:40 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:55:40 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:55:40 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 17:55:40 --> Final output sent to browser
DEBUG - 2024-08-15 17:55:40 --> Total execution time: 0.1356
INFO - 2024-08-15 17:55:42 --> Config Class Initialized
INFO - 2024-08-15 17:55:42 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:55:42 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:55:42 --> Utf8 Class Initialized
INFO - 2024-08-15 17:55:42 --> URI Class Initialized
INFO - 2024-08-15 17:55:42 --> Router Class Initialized
INFO - 2024-08-15 17:55:42 --> Output Class Initialized
INFO - 2024-08-15 17:55:42 --> Security Class Initialized
DEBUG - 2024-08-15 17:55:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:55:42 --> Input Class Initialized
INFO - 2024-08-15 17:55:42 --> Language Class Initialized
INFO - 2024-08-15 17:55:43 --> Loader Class Initialized
INFO - 2024-08-15 17:55:43 --> Helper loaded: application_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: url_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: file_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: security_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: date_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: form_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: language_helper
INFO - 2024-08-15 17:55:43 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:55:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:55:43 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:55:43 --> Upload Class Initialized
INFO - 2024-08-15 17:55:43 --> Controller Class Initialized
INFO - 2024-08-15 17:55:43 --> Model "M_admin" initialized
INFO - 2024-08-15 17:55:43 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:55:43 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:55:43 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:55:43 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:55:43 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 22:55:43 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 22:55:43 --> Final output sent to browser
DEBUG - 2024-08-15 22:55:43 --> Total execution time: 0.2129
INFO - 2024-08-15 17:55:43 --> Config Class Initialized
INFO - 2024-08-15 17:55:43 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:55:43 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:55:43 --> Utf8 Class Initialized
INFO - 2024-08-15 17:55:43 --> URI Class Initialized
INFO - 2024-08-15 17:55:43 --> Router Class Initialized
INFO - 2024-08-15 17:55:43 --> Output Class Initialized
INFO - 2024-08-15 17:55:43 --> Security Class Initialized
DEBUG - 2024-08-15 17:55:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:55:43 --> Input Class Initialized
INFO - 2024-08-15 17:55:43 --> Language Class Initialized
INFO - 2024-08-15 17:55:43 --> Loader Class Initialized
INFO - 2024-08-15 17:55:43 --> Helper loaded: application_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: url_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: file_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: security_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: date_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: form_helper
INFO - 2024-08-15 17:55:43 --> Helper loaded: language_helper
INFO - 2024-08-15 17:55:43 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:55:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:55:43 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:55:43 --> Upload Class Initialized
INFO - 2024-08-15 17:55:43 --> Controller Class Initialized
INFO - 2024-08-15 17:55:43 --> Model "M_admin" initialized
INFO - 2024-08-15 17:55:43 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:55:43 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:55:43 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:55:43 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 17:55:43 --> Final output sent to browser
DEBUG - 2024-08-15 17:55:43 --> Total execution time: 0.1722
INFO - 2024-08-15 17:56:03 --> Config Class Initialized
INFO - 2024-08-15 17:56:03 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:56:03 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:56:03 --> Utf8 Class Initialized
INFO - 2024-08-15 17:56:03 --> URI Class Initialized
INFO - 2024-08-15 17:56:03 --> Router Class Initialized
INFO - 2024-08-15 17:56:03 --> Output Class Initialized
INFO - 2024-08-15 17:56:03 --> Security Class Initialized
DEBUG - 2024-08-15 17:56:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:56:03 --> Input Class Initialized
INFO - 2024-08-15 17:56:03 --> Language Class Initialized
INFO - 2024-08-15 17:56:03 --> Loader Class Initialized
INFO - 2024-08-15 17:56:03 --> Helper loaded: application_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: url_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: file_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: security_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: date_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: form_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: language_helper
INFO - 2024-08-15 17:56:03 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:56:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:56:03 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:56:03 --> Upload Class Initialized
INFO - 2024-08-15 17:56:03 --> Controller Class Initialized
INFO - 2024-08-15 17:56:03 --> Model "M_admin" initialized
INFO - 2024-08-15 17:56:03 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:56:03 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:56:03 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:56:03 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:56:03 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 22:56:03 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 22:56:03 --> Final output sent to browser
DEBUG - 2024-08-15 22:56:03 --> Total execution time: 0.1841
INFO - 2024-08-15 17:56:03 --> Config Class Initialized
INFO - 2024-08-15 17:56:03 --> Hooks Class Initialized
DEBUG - 2024-08-15 17:56:03 --> UTF-8 Support Enabled
INFO - 2024-08-15 17:56:03 --> Utf8 Class Initialized
INFO - 2024-08-15 17:56:03 --> URI Class Initialized
INFO - 2024-08-15 17:56:03 --> Router Class Initialized
INFO - 2024-08-15 17:56:03 --> Output Class Initialized
INFO - 2024-08-15 17:56:03 --> Security Class Initialized
DEBUG - 2024-08-15 17:56:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 17:56:03 --> Input Class Initialized
INFO - 2024-08-15 17:56:03 --> Language Class Initialized
INFO - 2024-08-15 17:56:03 --> Loader Class Initialized
INFO - 2024-08-15 17:56:03 --> Helper loaded: application_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: url_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: file_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: security_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: date_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: captcha_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: form_helper
INFO - 2024-08-15 17:56:03 --> Helper loaded: language_helper
INFO - 2024-08-15 17:56:03 --> Database Driver Class Initialized
DEBUG - 2024-08-15 17:56:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 17:56:04 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 17:56:04 --> Upload Class Initialized
INFO - 2024-08-15 17:56:04 --> Controller Class Initialized
INFO - 2024-08-15 17:56:04 --> Model "M_admin" initialized
INFO - 2024-08-15 17:56:04 --> Model "M_config" initialized
DEBUG - 2024-08-15 17:56:04 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 17:56:04 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 17:56:04 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 17:56:04 --> Final output sent to browser
DEBUG - 2024-08-15 17:56:04 --> Total execution time: 0.1772
INFO - 2024-08-15 18:24:40 --> Config Class Initialized
INFO - 2024-08-15 18:24:40 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:24:40 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:24:40 --> Utf8 Class Initialized
INFO - 2024-08-15 18:24:40 --> URI Class Initialized
INFO - 2024-08-15 18:24:40 --> Router Class Initialized
INFO - 2024-08-15 18:24:40 --> Output Class Initialized
INFO - 2024-08-15 18:24:40 --> Security Class Initialized
DEBUG - 2024-08-15 18:24:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:24:40 --> Input Class Initialized
INFO - 2024-08-15 18:24:40 --> Language Class Initialized
INFO - 2024-08-15 18:24:40 --> Loader Class Initialized
INFO - 2024-08-15 18:24:40 --> Helper loaded: application_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: url_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: file_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: security_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: date_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: form_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: language_helper
INFO - 2024-08-15 18:24:40 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:24:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:24:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:24:40 --> Upload Class Initialized
INFO - 2024-08-15 18:24:40 --> Controller Class Initialized
INFO - 2024-08-15 18:24:40 --> Model "M_admin" initialized
INFO - 2024-08-15 18:24:40 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:24:40 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:24:40 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:24:40 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:24:40 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 23:24:40 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 23:24:40 --> Final output sent to browser
DEBUG - 2024-08-15 23:24:40 --> Total execution time: 0.1942
INFO - 2024-08-15 18:24:40 --> Config Class Initialized
INFO - 2024-08-15 18:24:40 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:24:40 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:24:40 --> Utf8 Class Initialized
INFO - 2024-08-15 18:24:40 --> URI Class Initialized
INFO - 2024-08-15 18:24:40 --> Router Class Initialized
INFO - 2024-08-15 18:24:40 --> Output Class Initialized
INFO - 2024-08-15 18:24:40 --> Security Class Initialized
DEBUG - 2024-08-15 18:24:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:24:40 --> Input Class Initialized
INFO - 2024-08-15 18:24:40 --> Language Class Initialized
INFO - 2024-08-15 18:24:40 --> Loader Class Initialized
INFO - 2024-08-15 18:24:40 --> Helper loaded: application_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: url_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: file_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: security_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: date_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: form_helper
INFO - 2024-08-15 18:24:40 --> Helper loaded: language_helper
INFO - 2024-08-15 18:24:40 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:24:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:24:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:24:40 --> Upload Class Initialized
INFO - 2024-08-15 18:24:40 --> Controller Class Initialized
INFO - 2024-08-15 18:24:40 --> Model "M_admin" initialized
INFO - 2024-08-15 18:24:40 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:24:40 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:24:40 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:24:40 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 18:24:40 --> Final output sent to browser
DEBUG - 2024-08-15 18:24:40 --> Total execution time: 0.1281
INFO - 2024-08-15 18:26:47 --> Config Class Initialized
INFO - 2024-08-15 18:26:47 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:26:47 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:26:47 --> Utf8 Class Initialized
INFO - 2024-08-15 18:26:47 --> URI Class Initialized
INFO - 2024-08-15 18:26:47 --> Router Class Initialized
INFO - 2024-08-15 18:26:47 --> Output Class Initialized
INFO - 2024-08-15 18:26:47 --> Security Class Initialized
DEBUG - 2024-08-15 18:26:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:26:47 --> Input Class Initialized
INFO - 2024-08-15 18:26:47 --> Language Class Initialized
INFO - 2024-08-15 18:26:47 --> Loader Class Initialized
INFO - 2024-08-15 18:26:47 --> Helper loaded: application_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: url_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: file_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: security_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: date_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: form_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: language_helper
INFO - 2024-08-15 18:26:47 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:26:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:26:47 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:26:47 --> Upload Class Initialized
INFO - 2024-08-15 18:26:47 --> Controller Class Initialized
INFO - 2024-08-15 18:26:47 --> Model "M_admin" initialized
INFO - 2024-08-15 18:26:47 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:26:47 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:26:47 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:26:47 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:26:47 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 23:26:47 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 23:26:47 --> Final output sent to browser
DEBUG - 2024-08-15 23:26:47 --> Total execution time: 0.1259
INFO - 2024-08-15 18:26:47 --> Config Class Initialized
INFO - 2024-08-15 18:26:47 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:26:47 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:26:47 --> Utf8 Class Initialized
INFO - 2024-08-15 18:26:47 --> URI Class Initialized
INFO - 2024-08-15 18:26:47 --> Router Class Initialized
INFO - 2024-08-15 18:26:47 --> Output Class Initialized
INFO - 2024-08-15 18:26:47 --> Security Class Initialized
DEBUG - 2024-08-15 18:26:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:26:47 --> Input Class Initialized
INFO - 2024-08-15 18:26:47 --> Language Class Initialized
INFO - 2024-08-15 18:26:47 --> Loader Class Initialized
INFO - 2024-08-15 18:26:47 --> Helper loaded: application_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: url_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: file_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: security_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: date_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: form_helper
INFO - 2024-08-15 18:26:47 --> Helper loaded: language_helper
INFO - 2024-08-15 18:26:47 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:26:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:26:47 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:26:47 --> Upload Class Initialized
INFO - 2024-08-15 18:26:47 --> Controller Class Initialized
INFO - 2024-08-15 18:26:47 --> Model "M_admin" initialized
INFO - 2024-08-15 18:26:47 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:26:47 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:26:47 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:26:47 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 18:26:48 --> Final output sent to browser
DEBUG - 2024-08-15 18:26:48 --> Total execution time: 0.0993
INFO - 2024-08-15 18:41:09 --> Config Class Initialized
INFO - 2024-08-15 18:41:09 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:41:09 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:41:09 --> Utf8 Class Initialized
INFO - 2024-08-15 18:41:09 --> URI Class Initialized
INFO - 2024-08-15 18:41:09 --> Router Class Initialized
INFO - 2024-08-15 18:41:09 --> Output Class Initialized
INFO - 2024-08-15 18:41:09 --> Security Class Initialized
DEBUG - 2024-08-15 18:41:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:41:09 --> Input Class Initialized
INFO - 2024-08-15 18:41:09 --> Language Class Initialized
INFO - 2024-08-15 18:41:09 --> Loader Class Initialized
INFO - 2024-08-15 18:41:09 --> Helper loaded: application_helper
INFO - 2024-08-15 18:41:09 --> Helper loaded: url_helper
INFO - 2024-08-15 18:41:09 --> Helper loaded: file_helper
INFO - 2024-08-15 18:41:09 --> Helper loaded: security_helper
INFO - 2024-08-15 18:41:09 --> Helper loaded: date_helper
INFO - 2024-08-15 18:41:09 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:41:09 --> Helper loaded: form_helper
INFO - 2024-08-15 18:41:09 --> Helper loaded: language_helper
INFO - 2024-08-15 18:41:09 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:41:09 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:41:09 --> Upload Class Initialized
INFO - 2024-08-15 18:41:10 --> Controller Class Initialized
INFO - 2024-08-15 18:41:10 --> Model "M_admin" initialized
INFO - 2024-08-15 18:41:10 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:41:10 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:41:10 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:41:10 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:41:10 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 23:41:10 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 23:41:10 --> Final output sent to browser
DEBUG - 2024-08-15 23:41:10 --> Total execution time: 0.1246
INFO - 2024-08-15 18:41:10 --> Config Class Initialized
INFO - 2024-08-15 18:41:10 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:41:10 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:41:10 --> Utf8 Class Initialized
INFO - 2024-08-15 18:41:10 --> URI Class Initialized
INFO - 2024-08-15 18:41:10 --> Router Class Initialized
INFO - 2024-08-15 18:41:10 --> Output Class Initialized
INFO - 2024-08-15 18:41:10 --> Security Class Initialized
DEBUG - 2024-08-15 18:41:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:41:10 --> Input Class Initialized
INFO - 2024-08-15 18:41:10 --> Language Class Initialized
INFO - 2024-08-15 18:41:10 --> Loader Class Initialized
INFO - 2024-08-15 18:41:10 --> Helper loaded: application_helper
INFO - 2024-08-15 18:41:10 --> Helper loaded: url_helper
INFO - 2024-08-15 18:41:10 --> Helper loaded: file_helper
INFO - 2024-08-15 18:41:10 --> Helper loaded: security_helper
INFO - 2024-08-15 18:41:10 --> Helper loaded: date_helper
INFO - 2024-08-15 18:41:10 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:41:10 --> Helper loaded: form_helper
INFO - 2024-08-15 18:41:10 --> Helper loaded: language_helper
INFO - 2024-08-15 18:41:10 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:41:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:41:10 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:41:10 --> Upload Class Initialized
INFO - 2024-08-15 18:41:10 --> Controller Class Initialized
INFO - 2024-08-15 18:41:10 --> Model "M_admin" initialized
INFO - 2024-08-15 18:41:10 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:41:10 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:41:10 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:41:10 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 18:41:10 --> Final output sent to browser
DEBUG - 2024-08-15 18:41:10 --> Total execution time: 0.1046
INFO - 2024-08-15 18:41:22 --> Config Class Initialized
INFO - 2024-08-15 18:41:22 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:41:22 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:41:22 --> Utf8 Class Initialized
INFO - 2024-08-15 18:41:22 --> URI Class Initialized
INFO - 2024-08-15 18:41:22 --> Router Class Initialized
INFO - 2024-08-15 18:41:22 --> Output Class Initialized
INFO - 2024-08-15 18:41:22 --> Security Class Initialized
DEBUG - 2024-08-15 18:41:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:41:22 --> Input Class Initialized
INFO - 2024-08-15 18:41:22 --> Language Class Initialized
INFO - 2024-08-15 18:41:22 --> Loader Class Initialized
INFO - 2024-08-15 18:41:22 --> Helper loaded: application_helper
INFO - 2024-08-15 18:41:22 --> Helper loaded: url_helper
INFO - 2024-08-15 18:41:22 --> Helper loaded: file_helper
INFO - 2024-08-15 18:41:22 --> Helper loaded: security_helper
INFO - 2024-08-15 18:41:22 --> Helper loaded: date_helper
INFO - 2024-08-15 18:41:22 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:41:22 --> Helper loaded: form_helper
INFO - 2024-08-15 18:41:22 --> Helper loaded: language_helper
INFO - 2024-08-15 18:41:23 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:41:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:41:23 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:41:23 --> Upload Class Initialized
INFO - 2024-08-15 18:41:23 --> Controller Class Initialized
INFO - 2024-08-15 18:41:23 --> Model "M_admin" initialized
INFO - 2024-08-15 18:41:23 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:41:23 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:41:23 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:41:23 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:41:23 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 23:41:23 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 23:41:23 --> Final output sent to browser
DEBUG - 2024-08-15 23:41:23 --> Total execution time: 0.1105
INFO - 2024-08-15 18:41:25 --> Config Class Initialized
INFO - 2024-08-15 18:41:25 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:41:25 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:41:25 --> Utf8 Class Initialized
INFO - 2024-08-15 18:41:25 --> URI Class Initialized
INFO - 2024-08-15 18:41:25 --> Router Class Initialized
INFO - 2024-08-15 18:41:25 --> Output Class Initialized
INFO - 2024-08-15 18:41:25 --> Security Class Initialized
DEBUG - 2024-08-15 18:41:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:41:25 --> Input Class Initialized
INFO - 2024-08-15 18:41:25 --> Language Class Initialized
INFO - 2024-08-15 18:41:25 --> Loader Class Initialized
INFO - 2024-08-15 18:41:25 --> Helper loaded: application_helper
INFO - 2024-08-15 18:41:25 --> Helper loaded: url_helper
INFO - 2024-08-15 18:41:25 --> Helper loaded: file_helper
INFO - 2024-08-15 18:41:25 --> Helper loaded: security_helper
INFO - 2024-08-15 18:41:25 --> Helper loaded: date_helper
INFO - 2024-08-15 18:41:25 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:41:25 --> Helper loaded: form_helper
INFO - 2024-08-15 18:41:25 --> Helper loaded: language_helper
INFO - 2024-08-15 18:41:25 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:41:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:41:25 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:41:25 --> Upload Class Initialized
INFO - 2024-08-15 18:41:25 --> Controller Class Initialized
INFO - 2024-08-15 18:41:25 --> Model "M_admin" initialized
INFO - 2024-08-15 18:41:25 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:41:25 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:41:25 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:41:25 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:41:25 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 23:41:25 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 23:41:25 --> Final output sent to browser
DEBUG - 2024-08-15 23:41:25 --> Total execution time: 0.1119
INFO - 2024-08-15 18:41:36 --> Config Class Initialized
INFO - 2024-08-15 18:41:36 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:41:36 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:41:36 --> Utf8 Class Initialized
INFO - 2024-08-15 18:41:36 --> URI Class Initialized
INFO - 2024-08-15 18:41:36 --> Router Class Initialized
INFO - 2024-08-15 18:41:36 --> Output Class Initialized
INFO - 2024-08-15 18:41:36 --> Security Class Initialized
DEBUG - 2024-08-15 18:41:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:41:36 --> Input Class Initialized
INFO - 2024-08-15 18:41:36 --> Language Class Initialized
INFO - 2024-08-15 18:41:36 --> Loader Class Initialized
INFO - 2024-08-15 18:41:36 --> Helper loaded: application_helper
INFO - 2024-08-15 18:41:36 --> Helper loaded: url_helper
INFO - 2024-08-15 18:41:36 --> Helper loaded: file_helper
INFO - 2024-08-15 18:41:36 --> Helper loaded: security_helper
INFO - 2024-08-15 18:41:36 --> Helper loaded: date_helper
INFO - 2024-08-15 18:41:36 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:41:36 --> Helper loaded: form_helper
INFO - 2024-08-15 18:41:36 --> Helper loaded: language_helper
INFO - 2024-08-15 18:41:36 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:41:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:41:36 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:41:36 --> Upload Class Initialized
INFO - 2024-08-15 18:41:36 --> Controller Class Initialized
INFO - 2024-08-15 18:41:36 --> Model "M_admin" initialized
INFO - 2024-08-15 18:41:36 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:41:36 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:41:36 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:41:36 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:41:36 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 23:41:36 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 23:41:36 --> Final output sent to browser
DEBUG - 2024-08-15 23:41:36 --> Total execution time: 0.1105
INFO - 2024-08-15 18:41:41 --> Config Class Initialized
INFO - 2024-08-15 18:41:41 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:41:41 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:41:41 --> Utf8 Class Initialized
INFO - 2024-08-15 18:41:41 --> URI Class Initialized
INFO - 2024-08-15 18:41:41 --> Router Class Initialized
INFO - 2024-08-15 18:41:41 --> Output Class Initialized
INFO - 2024-08-15 18:41:41 --> Security Class Initialized
DEBUG - 2024-08-15 18:41:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:41:41 --> Input Class Initialized
INFO - 2024-08-15 18:41:41 --> Language Class Initialized
INFO - 2024-08-15 18:41:41 --> Loader Class Initialized
INFO - 2024-08-15 18:41:41 --> Helper loaded: application_helper
INFO - 2024-08-15 18:41:41 --> Helper loaded: url_helper
INFO - 2024-08-15 18:41:41 --> Helper loaded: file_helper
INFO - 2024-08-15 18:41:41 --> Helper loaded: security_helper
INFO - 2024-08-15 18:41:41 --> Helper loaded: date_helper
INFO - 2024-08-15 18:41:41 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:41:41 --> Helper loaded: form_helper
INFO - 2024-08-15 18:41:41 --> Helper loaded: language_helper
INFO - 2024-08-15 18:41:41 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:41:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:41:41 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:41:41 --> Upload Class Initialized
INFO - 2024-08-15 18:41:41 --> Controller Class Initialized
INFO - 2024-08-15 18:41:41 --> Model "M_admin" initialized
INFO - 2024-08-15 18:41:41 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:41:41 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:41:41 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:41:41 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:41:41 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 23:41:41 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 23:41:41 --> Final output sent to browser
DEBUG - 2024-08-15 23:41:41 --> Total execution time: 0.1104
INFO - 2024-08-15 18:41:41 --> Config Class Initialized
INFO - 2024-08-15 18:41:41 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:41:41 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:41:41 --> Utf8 Class Initialized
INFO - 2024-08-15 18:41:41 --> URI Class Initialized
INFO - 2024-08-15 18:41:41 --> Router Class Initialized
INFO - 2024-08-15 18:41:41 --> Output Class Initialized
INFO - 2024-08-15 18:41:42 --> Security Class Initialized
DEBUG - 2024-08-15 18:41:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:41:42 --> Input Class Initialized
INFO - 2024-08-15 18:41:42 --> Language Class Initialized
INFO - 2024-08-15 18:41:42 --> Loader Class Initialized
INFO - 2024-08-15 18:41:42 --> Helper loaded: application_helper
INFO - 2024-08-15 18:41:42 --> Helper loaded: url_helper
INFO - 2024-08-15 18:41:42 --> Helper loaded: file_helper
INFO - 2024-08-15 18:41:42 --> Helper loaded: security_helper
INFO - 2024-08-15 18:41:42 --> Helper loaded: date_helper
INFO - 2024-08-15 18:41:42 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:41:42 --> Helper loaded: form_helper
INFO - 2024-08-15 18:41:42 --> Helper loaded: language_helper
INFO - 2024-08-15 18:41:42 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:41:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:41:42 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:41:42 --> Upload Class Initialized
INFO - 2024-08-15 18:41:42 --> Controller Class Initialized
INFO - 2024-08-15 18:41:42 --> Model "M_admin" initialized
INFO - 2024-08-15 18:41:42 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:41:42 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:41:42 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:41:42 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 18:41:42 --> Final output sent to browser
DEBUG - 2024-08-15 18:41:42 --> Total execution time: 0.1041
INFO - 2024-08-15 18:42:54 --> Config Class Initialized
INFO - 2024-08-15 18:42:54 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:42:54 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:42:54 --> Utf8 Class Initialized
INFO - 2024-08-15 18:42:54 --> URI Class Initialized
INFO - 2024-08-15 18:42:54 --> Router Class Initialized
INFO - 2024-08-15 18:42:54 --> Output Class Initialized
INFO - 2024-08-15 18:42:54 --> Security Class Initialized
DEBUG - 2024-08-15 18:42:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:42:54 --> Input Class Initialized
INFO - 2024-08-15 18:42:54 --> Language Class Initialized
INFO - 2024-08-15 18:42:54 --> Loader Class Initialized
INFO - 2024-08-15 18:42:54 --> Helper loaded: application_helper
INFO - 2024-08-15 18:42:54 --> Helper loaded: url_helper
INFO - 2024-08-15 18:42:54 --> Helper loaded: file_helper
INFO - 2024-08-15 18:42:54 --> Helper loaded: security_helper
INFO - 2024-08-15 18:42:54 --> Helper loaded: date_helper
INFO - 2024-08-15 18:42:54 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:42:54 --> Helper loaded: form_helper
INFO - 2024-08-15 18:42:54 --> Helper loaded: language_helper
INFO - 2024-08-15 18:42:54 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:42:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:42:54 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:42:54 --> Upload Class Initialized
INFO - 2024-08-15 18:42:55 --> Controller Class Initialized
INFO - 2024-08-15 18:42:55 --> Model "M_admin" initialized
INFO - 2024-08-15 18:42:55 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:42:55 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:42:55 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:42:55 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:42:55 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/content/website/arrival.php
INFO - 2024-08-15 23:42:55 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/home.php
INFO - 2024-08-15 23:42:55 --> Final output sent to browser
DEBUG - 2024-08-15 23:42:55 --> Total execution time: 0.1253
INFO - 2024-08-15 18:42:55 --> Config Class Initialized
INFO - 2024-08-15 18:42:55 --> Hooks Class Initialized
DEBUG - 2024-08-15 18:42:55 --> UTF-8 Support Enabled
INFO - 2024-08-15 18:42:55 --> Utf8 Class Initialized
INFO - 2024-08-15 18:42:55 --> URI Class Initialized
INFO - 2024-08-15 18:42:55 --> Router Class Initialized
INFO - 2024-08-15 18:42:55 --> Output Class Initialized
INFO - 2024-08-15 18:42:55 --> Security Class Initialized
DEBUG - 2024-08-15 18:42:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 18:42:55 --> Input Class Initialized
INFO - 2024-08-15 18:42:55 --> Language Class Initialized
INFO - 2024-08-15 18:42:55 --> Loader Class Initialized
INFO - 2024-08-15 18:42:55 --> Helper loaded: application_helper
INFO - 2024-08-15 18:42:55 --> Helper loaded: url_helper
INFO - 2024-08-15 18:42:55 --> Helper loaded: file_helper
INFO - 2024-08-15 18:42:55 --> Helper loaded: security_helper
INFO - 2024-08-15 18:42:55 --> Helper loaded: date_helper
INFO - 2024-08-15 18:42:55 --> Helper loaded: captcha_helper
INFO - 2024-08-15 18:42:55 --> Helper loaded: form_helper
INFO - 2024-08-15 18:42:55 --> Helper loaded: language_helper
INFO - 2024-08-15 18:42:55 --> Database Driver Class Initialized
DEBUG - 2024-08-15 18:42:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 18:42:55 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 18:42:55 --> Upload Class Initialized
INFO - 2024-08-15 18:42:55 --> Controller Class Initialized
INFO - 2024-08-15 18:42:55 --> Model "M_admin" initialized
INFO - 2024-08-15 18:42:55 --> Model "M_config" initialized
DEBUG - 2024-08-15 18:42:55 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 18:42:55 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 18:42:55 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 18:42:55 --> Final output sent to browser
DEBUG - 2024-08-15 18:42:55 --> Total execution time: 0.1188
INFO - 2024-08-15 19:08:24 --> Config Class Initialized
INFO - 2024-08-15 19:08:24 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:08:24 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:08:24 --> Utf8 Class Initialized
INFO - 2024-08-15 19:08:24 --> URI Class Initialized
INFO - 2024-08-15 19:08:24 --> Router Class Initialized
INFO - 2024-08-15 19:08:24 --> Output Class Initialized
INFO - 2024-08-15 19:08:24 --> Security Class Initialized
DEBUG - 2024-08-15 19:08:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:08:24 --> Input Class Initialized
INFO - 2024-08-15 19:08:24 --> Language Class Initialized
INFO - 2024-08-15 19:08:24 --> Loader Class Initialized
INFO - 2024-08-15 19:08:24 --> Helper loaded: application_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: url_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: file_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: security_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: date_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: form_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: language_helper
INFO - 2024-08-15 19:08:24 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:08:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:08:24 --> Upload Class Initialized
INFO - 2024-08-15 19:08:24 --> Controller Class Initialized
INFO - 2024-08-15 19:08:24 --> Model "M_admin" initialized
INFO - 2024-08-15 19:08:24 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:08:24 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:08:24 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:08:24 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:08:24 --> Config Class Initialized
INFO - 2024-08-15 19:08:24 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:08:24 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:08:24 --> Utf8 Class Initialized
INFO - 2024-08-15 19:08:24 --> URI Class Initialized
INFO - 2024-08-15 19:08:24 --> Router Class Initialized
INFO - 2024-08-15 19:08:24 --> Output Class Initialized
INFO - 2024-08-15 19:08:24 --> Security Class Initialized
DEBUG - 2024-08-15 19:08:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:08:24 --> Input Class Initialized
INFO - 2024-08-15 19:08:24 --> Language Class Initialized
INFO - 2024-08-15 19:08:24 --> Loader Class Initialized
INFO - 2024-08-15 19:08:24 --> Helper loaded: application_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: url_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: file_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: security_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: date_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: form_helper
INFO - 2024-08-15 19:08:24 --> Helper loaded: language_helper
INFO - 2024-08-15 19:08:24 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:08:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:08:24 --> Upload Class Initialized
INFO - 2024-08-15 19:08:24 --> Controller Class Initialized
INFO - 2024-08-15 19:08:24 --> Model "M_admin" initialized
INFO - 2024-08-15 19:08:24 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:08:24 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:08:24 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:08:24 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:08:24 --> Final output sent to browser
DEBUG - 2024-08-15 19:08:24 --> Total execution time: 0.1145
INFO - 2024-08-15 19:08:50 --> Config Class Initialized
INFO - 2024-08-15 19:08:50 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:08:50 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:08:50 --> Utf8 Class Initialized
INFO - 2024-08-15 19:08:50 --> URI Class Initialized
INFO - 2024-08-15 19:08:50 --> Router Class Initialized
INFO - 2024-08-15 19:08:50 --> Output Class Initialized
INFO - 2024-08-15 19:08:50 --> Security Class Initialized
DEBUG - 2024-08-15 19:08:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:08:50 --> Input Class Initialized
INFO - 2024-08-15 19:08:50 --> Language Class Initialized
INFO - 2024-08-15 19:08:50 --> Loader Class Initialized
INFO - 2024-08-15 19:08:50 --> Helper loaded: application_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: url_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: file_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: security_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: date_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: form_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: language_helper
INFO - 2024-08-15 19:08:50 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:08:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:08:50 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:08:50 --> Upload Class Initialized
INFO - 2024-08-15 19:08:50 --> Controller Class Initialized
INFO - 2024-08-15 19:08:50 --> Model "M_admin" initialized
INFO - 2024-08-15 19:08:50 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:08:50 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:08:50 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:08:50 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:08:50 --> Config Class Initialized
INFO - 2024-08-15 19:08:50 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:08:50 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:08:50 --> Utf8 Class Initialized
INFO - 2024-08-15 19:08:50 --> URI Class Initialized
INFO - 2024-08-15 19:08:50 --> Router Class Initialized
INFO - 2024-08-15 19:08:50 --> Output Class Initialized
INFO - 2024-08-15 19:08:50 --> Security Class Initialized
DEBUG - 2024-08-15 19:08:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:08:50 --> Input Class Initialized
INFO - 2024-08-15 19:08:50 --> Language Class Initialized
INFO - 2024-08-15 19:08:50 --> Loader Class Initialized
INFO - 2024-08-15 19:08:50 --> Helper loaded: application_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: url_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: file_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: security_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: date_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: form_helper
INFO - 2024-08-15 19:08:50 --> Helper loaded: language_helper
INFO - 2024-08-15 19:08:50 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:08:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:08:50 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:08:50 --> Upload Class Initialized
INFO - 2024-08-15 19:08:50 --> Controller Class Initialized
INFO - 2024-08-15 19:08:50 --> Model "M_admin" initialized
INFO - 2024-08-15 19:08:50 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:08:50 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:08:50 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:08:50 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:08:50 --> Final output sent to browser
DEBUG - 2024-08-15 19:08:50 --> Total execution time: 0.1106
INFO - 2024-08-15 19:09:04 --> Config Class Initialized
INFO - 2024-08-15 19:09:04 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:09:04 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:09:04 --> Utf8 Class Initialized
INFO - 2024-08-15 19:09:04 --> URI Class Initialized
INFO - 2024-08-15 19:09:04 --> Router Class Initialized
INFO - 2024-08-15 19:09:04 --> Output Class Initialized
INFO - 2024-08-15 19:09:04 --> Security Class Initialized
DEBUG - 2024-08-15 19:09:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:09:04 --> Input Class Initialized
INFO - 2024-08-15 19:09:04 --> Language Class Initialized
INFO - 2024-08-15 19:09:04 --> Loader Class Initialized
INFO - 2024-08-15 19:09:04 --> Helper loaded: application_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: url_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: file_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: security_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: date_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: form_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: language_helper
INFO - 2024-08-15 19:09:04 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:09:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:09:04 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:09:04 --> Upload Class Initialized
INFO - 2024-08-15 19:09:04 --> Controller Class Initialized
INFO - 2024-08-15 19:09:04 --> Model "M_admin" initialized
INFO - 2024-08-15 19:09:04 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:09:04 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:09:04 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:09:04 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:09:04 --> Config Class Initialized
INFO - 2024-08-15 19:09:04 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:09:04 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:09:04 --> Utf8 Class Initialized
INFO - 2024-08-15 19:09:04 --> URI Class Initialized
INFO - 2024-08-15 19:09:04 --> Router Class Initialized
INFO - 2024-08-15 19:09:04 --> Output Class Initialized
INFO - 2024-08-15 19:09:04 --> Security Class Initialized
DEBUG - 2024-08-15 19:09:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:09:04 --> Input Class Initialized
INFO - 2024-08-15 19:09:04 --> Language Class Initialized
INFO - 2024-08-15 19:09:04 --> Loader Class Initialized
INFO - 2024-08-15 19:09:04 --> Helper loaded: application_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: url_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: file_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: security_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: date_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: form_helper
INFO - 2024-08-15 19:09:04 --> Helper loaded: language_helper
INFO - 2024-08-15 19:09:04 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:09:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:09:04 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:09:04 --> Upload Class Initialized
INFO - 2024-08-15 19:09:04 --> Controller Class Initialized
INFO - 2024-08-15 19:09:04 --> Model "M_admin" initialized
INFO - 2024-08-15 19:09:04 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:09:04 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:09:04 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:09:04 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:09:04 --> Final output sent to browser
DEBUG - 2024-08-15 19:09:04 --> Total execution time: 0.1058
INFO - 2024-08-15 19:10:01 --> Config Class Initialized
INFO - 2024-08-15 19:10:01 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:10:01 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:10:01 --> Utf8 Class Initialized
INFO - 2024-08-15 19:10:01 --> URI Class Initialized
INFO - 2024-08-15 19:10:01 --> Router Class Initialized
INFO - 2024-08-15 19:10:01 --> Output Class Initialized
INFO - 2024-08-15 19:10:01 --> Security Class Initialized
DEBUG - 2024-08-15 19:10:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:10:01 --> Input Class Initialized
INFO - 2024-08-15 19:10:01 --> Language Class Initialized
INFO - 2024-08-15 19:10:01 --> Loader Class Initialized
INFO - 2024-08-15 19:10:01 --> Helper loaded: application_helper
INFO - 2024-08-15 19:10:01 --> Helper loaded: url_helper
INFO - 2024-08-15 19:10:01 --> Helper loaded: file_helper
INFO - 2024-08-15 19:10:01 --> Helper loaded: security_helper
INFO - 2024-08-15 19:10:01 --> Helper loaded: date_helper
INFO - 2024-08-15 19:10:01 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:10:01 --> Helper loaded: form_helper
INFO - 2024-08-15 19:10:01 --> Helper loaded: language_helper
INFO - 2024-08-15 19:10:01 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:10:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:10:01 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:10:01 --> Upload Class Initialized
INFO - 2024-08-15 19:10:02 --> Controller Class Initialized
INFO - 2024-08-15 19:10:02 --> Model "M_admin" initialized
INFO - 2024-08-15 19:10:02 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:10:02 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:10:02 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:10:02 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:10:02 --> Config Class Initialized
INFO - 2024-08-15 19:10:02 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:10:02 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:10:02 --> Utf8 Class Initialized
INFO - 2024-08-15 19:10:02 --> URI Class Initialized
INFO - 2024-08-15 19:10:02 --> Router Class Initialized
INFO - 2024-08-15 19:10:02 --> Output Class Initialized
INFO - 2024-08-15 19:10:02 --> Security Class Initialized
DEBUG - 2024-08-15 19:10:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:10:02 --> Input Class Initialized
INFO - 2024-08-15 19:10:02 --> Language Class Initialized
INFO - 2024-08-15 19:10:02 --> Loader Class Initialized
INFO - 2024-08-15 19:10:02 --> Helper loaded: application_helper
INFO - 2024-08-15 19:10:02 --> Helper loaded: url_helper
INFO - 2024-08-15 19:10:02 --> Helper loaded: file_helper
INFO - 2024-08-15 19:10:02 --> Helper loaded: security_helper
INFO - 2024-08-15 19:10:02 --> Helper loaded: date_helper
INFO - 2024-08-15 19:10:02 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:10:02 --> Helper loaded: form_helper
INFO - 2024-08-15 19:10:02 --> Helper loaded: language_helper
INFO - 2024-08-15 19:10:02 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:10:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:10:02 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:10:02 --> Upload Class Initialized
INFO - 2024-08-15 19:10:02 --> Controller Class Initialized
INFO - 2024-08-15 19:10:02 --> Model "M_admin" initialized
INFO - 2024-08-15 19:10:02 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:10:02 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:10:02 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:10:02 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:10:02 --> Final output sent to browser
DEBUG - 2024-08-15 19:10:02 --> Total execution time: 0.1135
INFO - 2024-08-15 19:10:40 --> Config Class Initialized
INFO - 2024-08-15 19:10:40 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:10:40 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:10:40 --> Utf8 Class Initialized
INFO - 2024-08-15 19:10:40 --> URI Class Initialized
INFO - 2024-08-15 19:10:40 --> Router Class Initialized
INFO - 2024-08-15 19:10:40 --> Output Class Initialized
INFO - 2024-08-15 19:10:40 --> Security Class Initialized
DEBUG - 2024-08-15 19:10:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:10:40 --> Input Class Initialized
INFO - 2024-08-15 19:10:40 --> Language Class Initialized
INFO - 2024-08-15 19:10:40 --> Loader Class Initialized
INFO - 2024-08-15 19:10:40 --> Helper loaded: application_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: url_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: file_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: security_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: date_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: form_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: language_helper
INFO - 2024-08-15 19:10:40 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:10:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:10:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:10:40 --> Upload Class Initialized
INFO - 2024-08-15 19:10:40 --> Controller Class Initialized
INFO - 2024-08-15 19:10:40 --> Model "M_admin" initialized
INFO - 2024-08-15 19:10:40 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:10:40 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:10:40 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:10:40 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:10:40 --> Config Class Initialized
INFO - 2024-08-15 19:10:40 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:10:40 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:10:40 --> Utf8 Class Initialized
INFO - 2024-08-15 19:10:40 --> URI Class Initialized
INFO - 2024-08-15 19:10:40 --> Router Class Initialized
INFO - 2024-08-15 19:10:40 --> Output Class Initialized
INFO - 2024-08-15 19:10:40 --> Security Class Initialized
DEBUG - 2024-08-15 19:10:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:10:40 --> Input Class Initialized
INFO - 2024-08-15 19:10:40 --> Language Class Initialized
INFO - 2024-08-15 19:10:40 --> Loader Class Initialized
INFO - 2024-08-15 19:10:40 --> Helper loaded: application_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: url_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: file_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: security_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: date_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: form_helper
INFO - 2024-08-15 19:10:40 --> Helper loaded: language_helper
INFO - 2024-08-15 19:10:40 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:10:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:10:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:10:40 --> Upload Class Initialized
INFO - 2024-08-15 19:10:40 --> Controller Class Initialized
INFO - 2024-08-15 19:10:40 --> Model "M_admin" initialized
INFO - 2024-08-15 19:10:40 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:10:40 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:10:40 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:10:40 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:10:40 --> Final output sent to browser
DEBUG - 2024-08-15 19:10:40 --> Total execution time: 0.1145
INFO - 2024-08-15 19:10:53 --> Config Class Initialized
INFO - 2024-08-15 19:10:53 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:10:53 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:10:53 --> Utf8 Class Initialized
INFO - 2024-08-15 19:10:53 --> URI Class Initialized
INFO - 2024-08-15 19:10:53 --> Router Class Initialized
INFO - 2024-08-15 19:10:53 --> Output Class Initialized
INFO - 2024-08-15 19:10:53 --> Security Class Initialized
DEBUG - 2024-08-15 19:10:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:10:53 --> Input Class Initialized
INFO - 2024-08-15 19:10:53 --> Language Class Initialized
INFO - 2024-08-15 19:10:53 --> Loader Class Initialized
INFO - 2024-08-15 19:10:53 --> Helper loaded: application_helper
INFO - 2024-08-15 19:10:53 --> Helper loaded: url_helper
INFO - 2024-08-15 19:10:53 --> Helper loaded: file_helper
INFO - 2024-08-15 19:10:53 --> Helper loaded: security_helper
INFO - 2024-08-15 19:10:53 --> Helper loaded: date_helper
INFO - 2024-08-15 19:10:53 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:10:53 --> Helper loaded: form_helper
INFO - 2024-08-15 19:10:53 --> Helper loaded: language_helper
INFO - 2024-08-15 19:10:53 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:10:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:10:54 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:10:54 --> Upload Class Initialized
INFO - 2024-08-15 19:10:54 --> Controller Class Initialized
INFO - 2024-08-15 19:10:54 --> Model "M_admin" initialized
INFO - 2024-08-15 19:10:54 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:10:54 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:10:54 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:10:54 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:10:56 --> Config Class Initialized
INFO - 2024-08-15 19:10:56 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:10:56 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:10:56 --> Utf8 Class Initialized
INFO - 2024-08-15 19:10:56 --> URI Class Initialized
INFO - 2024-08-15 19:10:56 --> Router Class Initialized
INFO - 2024-08-15 19:10:56 --> Output Class Initialized
INFO - 2024-08-15 19:10:56 --> Security Class Initialized
DEBUG - 2024-08-15 19:10:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:10:56 --> Input Class Initialized
INFO - 2024-08-15 19:10:56 --> Language Class Initialized
INFO - 2024-08-15 19:10:56 --> Loader Class Initialized
INFO - 2024-08-15 19:10:56 --> Helper loaded: application_helper
INFO - 2024-08-15 19:10:56 --> Helper loaded: url_helper
INFO - 2024-08-15 19:10:56 --> Helper loaded: file_helper
INFO - 2024-08-15 19:10:56 --> Helper loaded: security_helper
INFO - 2024-08-15 19:10:56 --> Helper loaded: date_helper
INFO - 2024-08-15 19:10:56 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:10:56 --> Helper loaded: form_helper
INFO - 2024-08-15 19:10:56 --> Helper loaded: language_helper
INFO - 2024-08-15 19:10:56 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:10:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:10:56 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:10:56 --> Upload Class Initialized
INFO - 2024-08-15 19:10:56 --> Controller Class Initialized
INFO - 2024-08-15 19:10:56 --> Model "M_admin" initialized
INFO - 2024-08-15 19:10:56 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:10:56 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:10:56 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:10:56 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:12:35 --> Config Class Initialized
INFO - 2024-08-15 19:12:35 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:12:35 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:12:35 --> Utf8 Class Initialized
INFO - 2024-08-15 19:12:35 --> URI Class Initialized
INFO - 2024-08-15 19:12:35 --> Router Class Initialized
INFO - 2024-08-15 19:12:35 --> Output Class Initialized
INFO - 2024-08-15 19:12:35 --> Security Class Initialized
DEBUG - 2024-08-15 19:12:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:12:35 --> Input Class Initialized
INFO - 2024-08-15 19:12:35 --> Language Class Initialized
INFO - 2024-08-15 19:12:35 --> Loader Class Initialized
INFO - 2024-08-15 19:12:35 --> Helper loaded: application_helper
INFO - 2024-08-15 19:12:35 --> Helper loaded: url_helper
INFO - 2024-08-15 19:12:35 --> Helper loaded: file_helper
INFO - 2024-08-15 19:12:35 --> Helper loaded: security_helper
INFO - 2024-08-15 19:12:35 --> Helper loaded: date_helper
INFO - 2024-08-15 19:12:35 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:12:35 --> Helper loaded: form_helper
INFO - 2024-08-15 19:12:35 --> Helper loaded: language_helper
INFO - 2024-08-15 19:12:35 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:12:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:12:35 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:12:35 --> Upload Class Initialized
INFO - 2024-08-15 19:12:35 --> Controller Class Initialized
INFO - 2024-08-15 19:12:35 --> Model "M_admin" initialized
INFO - 2024-08-15 19:12:35 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:12:35 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:12:35 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:12:35 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:12:37 --> Config Class Initialized
INFO - 2024-08-15 19:12:37 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:12:37 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:12:37 --> Utf8 Class Initialized
INFO - 2024-08-15 19:12:37 --> URI Class Initialized
INFO - 2024-08-15 19:12:37 --> Router Class Initialized
INFO - 2024-08-15 19:12:37 --> Output Class Initialized
INFO - 2024-08-15 19:12:37 --> Security Class Initialized
DEBUG - 2024-08-15 19:12:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:12:37 --> Input Class Initialized
INFO - 2024-08-15 19:12:37 --> Language Class Initialized
INFO - 2024-08-15 19:12:37 --> Loader Class Initialized
INFO - 2024-08-15 19:12:37 --> Helper loaded: application_helper
INFO - 2024-08-15 19:12:37 --> Helper loaded: url_helper
INFO - 2024-08-15 19:12:37 --> Helper loaded: file_helper
INFO - 2024-08-15 19:12:37 --> Helper loaded: security_helper
INFO - 2024-08-15 19:12:37 --> Helper loaded: date_helper
INFO - 2024-08-15 19:12:37 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:12:37 --> Helper loaded: form_helper
INFO - 2024-08-15 19:12:37 --> Helper loaded: language_helper
INFO - 2024-08-15 19:12:37 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:12:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:12:37 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:12:37 --> Upload Class Initialized
INFO - 2024-08-15 19:12:37 --> Controller Class Initialized
INFO - 2024-08-15 19:12:37 --> Model "M_admin" initialized
INFO - 2024-08-15 19:12:37 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:12:37 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:12:37 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:12:37 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:12:42 --> Config Class Initialized
INFO - 2024-08-15 19:12:42 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:12:42 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:12:42 --> Utf8 Class Initialized
INFO - 2024-08-15 19:12:42 --> URI Class Initialized
INFO - 2024-08-15 19:12:42 --> Router Class Initialized
INFO - 2024-08-15 19:12:42 --> Output Class Initialized
INFO - 2024-08-15 19:12:42 --> Security Class Initialized
DEBUG - 2024-08-15 19:12:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:12:42 --> Input Class Initialized
INFO - 2024-08-15 19:12:42 --> Language Class Initialized
INFO - 2024-08-15 19:12:42 --> Loader Class Initialized
INFO - 2024-08-15 19:12:42 --> Helper loaded: application_helper
INFO - 2024-08-15 19:12:42 --> Helper loaded: url_helper
INFO - 2024-08-15 19:12:42 --> Helper loaded: file_helper
INFO - 2024-08-15 19:12:42 --> Helper loaded: security_helper
INFO - 2024-08-15 19:12:42 --> Helper loaded: date_helper
INFO - 2024-08-15 19:12:42 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:12:42 --> Helper loaded: form_helper
INFO - 2024-08-15 19:12:42 --> Helper loaded: language_helper
INFO - 2024-08-15 19:12:42 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:12:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:12:42 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:12:42 --> Upload Class Initialized
INFO - 2024-08-15 19:12:42 --> Controller Class Initialized
INFO - 2024-08-15 19:12:42 --> Model "M_admin" initialized
INFO - 2024-08-15 19:12:42 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:12:42 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:12:42 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:12:42 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:12:43 --> Config Class Initialized
INFO - 2024-08-15 19:12:43 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:12:43 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:12:43 --> Utf8 Class Initialized
INFO - 2024-08-15 19:12:43 --> URI Class Initialized
INFO - 2024-08-15 19:12:43 --> Router Class Initialized
INFO - 2024-08-15 19:12:43 --> Output Class Initialized
INFO - 2024-08-15 19:12:43 --> Security Class Initialized
DEBUG - 2024-08-15 19:12:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:12:43 --> Input Class Initialized
INFO - 2024-08-15 19:12:43 --> Language Class Initialized
INFO - 2024-08-15 19:12:43 --> Loader Class Initialized
INFO - 2024-08-15 19:12:43 --> Helper loaded: application_helper
INFO - 2024-08-15 19:12:43 --> Helper loaded: url_helper
INFO - 2024-08-15 19:12:43 --> Helper loaded: file_helper
INFO - 2024-08-15 19:12:43 --> Helper loaded: security_helper
INFO - 2024-08-15 19:12:43 --> Helper loaded: date_helper
INFO - 2024-08-15 19:12:43 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:12:43 --> Helper loaded: form_helper
INFO - 2024-08-15 19:12:43 --> Helper loaded: language_helper
INFO - 2024-08-15 19:12:43 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:12:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:12:43 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:12:43 --> Upload Class Initialized
INFO - 2024-08-15 19:12:43 --> Controller Class Initialized
INFO - 2024-08-15 19:12:43 --> Model "M_admin" initialized
INFO - 2024-08-15 19:12:43 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:12:43 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:12:43 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:12:43 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:12:43 --> Final output sent to browser
DEBUG - 2024-08-15 19:12:43 --> Total execution time: 0.1063
INFO - 2024-08-15 19:13:23 --> Config Class Initialized
INFO - 2024-08-15 19:13:23 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:13:23 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:13:23 --> Utf8 Class Initialized
INFO - 2024-08-15 19:13:23 --> URI Class Initialized
INFO - 2024-08-15 19:13:23 --> Router Class Initialized
INFO - 2024-08-15 19:13:23 --> Output Class Initialized
INFO - 2024-08-15 19:13:23 --> Security Class Initialized
DEBUG - 2024-08-15 19:13:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:13:23 --> Input Class Initialized
INFO - 2024-08-15 19:13:23 --> Language Class Initialized
INFO - 2024-08-15 19:13:23 --> Loader Class Initialized
INFO - 2024-08-15 19:13:23 --> Helper loaded: application_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: url_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: file_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: security_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: date_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: form_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: language_helper
INFO - 2024-08-15 19:13:23 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:13:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:13:23 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:13:23 --> Upload Class Initialized
INFO - 2024-08-15 19:13:23 --> Controller Class Initialized
INFO - 2024-08-15 19:13:23 --> Model "M_admin" initialized
INFO - 2024-08-15 19:13:23 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:13:23 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:13:23 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:13:23 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:13:23 --> Config Class Initialized
INFO - 2024-08-15 19:13:23 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:13:23 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:13:23 --> Utf8 Class Initialized
INFO - 2024-08-15 19:13:23 --> URI Class Initialized
INFO - 2024-08-15 19:13:23 --> Router Class Initialized
INFO - 2024-08-15 19:13:23 --> Output Class Initialized
INFO - 2024-08-15 19:13:23 --> Security Class Initialized
DEBUG - 2024-08-15 19:13:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:13:23 --> Input Class Initialized
INFO - 2024-08-15 19:13:23 --> Language Class Initialized
INFO - 2024-08-15 19:13:23 --> Loader Class Initialized
INFO - 2024-08-15 19:13:23 --> Helper loaded: application_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: url_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: file_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: security_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: date_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: form_helper
INFO - 2024-08-15 19:13:23 --> Helper loaded: language_helper
INFO - 2024-08-15 19:13:23 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:13:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:13:23 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:13:23 --> Upload Class Initialized
INFO - 2024-08-15 19:13:23 --> Controller Class Initialized
INFO - 2024-08-15 19:13:23 --> Model "M_admin" initialized
INFO - 2024-08-15 19:13:23 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:13:23 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:13:23 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:13:23 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:13:23 --> Final output sent to browser
DEBUG - 2024-08-15 19:13:23 --> Total execution time: 0.1029
INFO - 2024-08-15 19:13:28 --> Config Class Initialized
INFO - 2024-08-15 19:13:28 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:13:28 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:13:28 --> Utf8 Class Initialized
INFO - 2024-08-15 19:13:28 --> URI Class Initialized
INFO - 2024-08-15 19:13:28 --> Router Class Initialized
INFO - 2024-08-15 19:13:28 --> Output Class Initialized
INFO - 2024-08-15 19:13:28 --> Security Class Initialized
DEBUG - 2024-08-15 19:13:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:13:28 --> Input Class Initialized
INFO - 2024-08-15 19:13:28 --> Language Class Initialized
INFO - 2024-08-15 19:13:28 --> Loader Class Initialized
INFO - 2024-08-15 19:13:28 --> Helper loaded: application_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: url_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: file_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: security_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: date_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: form_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: language_helper
INFO - 2024-08-15 19:13:28 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:13:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:13:28 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:13:28 --> Upload Class Initialized
INFO - 2024-08-15 19:13:28 --> Controller Class Initialized
INFO - 2024-08-15 19:13:28 --> Model "M_admin" initialized
INFO - 2024-08-15 19:13:28 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:13:28 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:13:28 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:13:28 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:13:28 --> Config Class Initialized
INFO - 2024-08-15 19:13:28 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:13:28 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:13:28 --> Utf8 Class Initialized
INFO - 2024-08-15 19:13:28 --> URI Class Initialized
INFO - 2024-08-15 19:13:28 --> Router Class Initialized
INFO - 2024-08-15 19:13:28 --> Output Class Initialized
INFO - 2024-08-15 19:13:28 --> Security Class Initialized
DEBUG - 2024-08-15 19:13:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:13:28 --> Input Class Initialized
INFO - 2024-08-15 19:13:28 --> Language Class Initialized
INFO - 2024-08-15 19:13:28 --> Loader Class Initialized
INFO - 2024-08-15 19:13:28 --> Helper loaded: application_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: url_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: file_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: security_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: date_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: form_helper
INFO - 2024-08-15 19:13:28 --> Helper loaded: language_helper
INFO - 2024-08-15 19:13:28 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:13:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:13:28 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:13:28 --> Upload Class Initialized
INFO - 2024-08-15 19:13:28 --> Controller Class Initialized
INFO - 2024-08-15 19:13:28 --> Model "M_admin" initialized
INFO - 2024-08-15 19:13:28 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:13:28 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:13:28 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:13:28 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:13:28 --> Final output sent to browser
DEBUG - 2024-08-15 19:13:28 --> Total execution time: 0.1053
INFO - 2024-08-15 19:13:43 --> Config Class Initialized
INFO - 2024-08-15 19:13:43 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:13:43 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:13:43 --> Utf8 Class Initialized
INFO - 2024-08-15 19:13:43 --> URI Class Initialized
INFO - 2024-08-15 19:13:43 --> Router Class Initialized
INFO - 2024-08-15 19:13:43 --> Output Class Initialized
INFO - 2024-08-15 19:13:43 --> Security Class Initialized
DEBUG - 2024-08-15 19:13:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:13:43 --> Input Class Initialized
INFO - 2024-08-15 19:13:43 --> Language Class Initialized
INFO - 2024-08-15 19:13:43 --> Loader Class Initialized
INFO - 2024-08-15 19:13:43 --> Helper loaded: application_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: url_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: file_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: security_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: date_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: form_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: language_helper
INFO - 2024-08-15 19:13:43 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:13:43 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:13:43 --> Upload Class Initialized
INFO - 2024-08-15 19:13:43 --> Controller Class Initialized
INFO - 2024-08-15 19:13:43 --> Model "M_admin" initialized
INFO - 2024-08-15 19:13:43 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:13:43 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:13:43 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:13:43 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:13:43 --> Config Class Initialized
INFO - 2024-08-15 19:13:43 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:13:43 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:13:43 --> Utf8 Class Initialized
INFO - 2024-08-15 19:13:43 --> URI Class Initialized
INFO - 2024-08-15 19:13:43 --> Router Class Initialized
INFO - 2024-08-15 19:13:43 --> Output Class Initialized
INFO - 2024-08-15 19:13:43 --> Security Class Initialized
DEBUG - 2024-08-15 19:13:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:13:43 --> Input Class Initialized
INFO - 2024-08-15 19:13:43 --> Language Class Initialized
INFO - 2024-08-15 19:13:43 --> Loader Class Initialized
INFO - 2024-08-15 19:13:43 --> Helper loaded: application_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: url_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: file_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: security_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: date_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: form_helper
INFO - 2024-08-15 19:13:43 --> Helper loaded: language_helper
INFO - 2024-08-15 19:13:43 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:13:43 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:13:43 --> Upload Class Initialized
INFO - 2024-08-15 19:13:43 --> Controller Class Initialized
INFO - 2024-08-15 19:13:43 --> Model "M_admin" initialized
INFO - 2024-08-15 19:13:43 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:13:43 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:13:43 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:13:43 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:13:43 --> Final output sent to browser
DEBUG - 2024-08-15 19:13:43 --> Total execution time: 0.1096
INFO - 2024-08-15 19:15:44 --> Config Class Initialized
INFO - 2024-08-15 19:15:44 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:15:44 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:15:44 --> Utf8 Class Initialized
INFO - 2024-08-15 19:15:44 --> URI Class Initialized
INFO - 2024-08-15 19:15:44 --> Router Class Initialized
INFO - 2024-08-15 19:15:44 --> Output Class Initialized
INFO - 2024-08-15 19:15:44 --> Security Class Initialized
DEBUG - 2024-08-15 19:15:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:15:44 --> Input Class Initialized
INFO - 2024-08-15 19:15:44 --> Language Class Initialized
INFO - 2024-08-15 19:15:44 --> Loader Class Initialized
INFO - 2024-08-15 19:15:44 --> Helper loaded: application_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: url_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: file_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: security_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: date_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: form_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: language_helper
INFO - 2024-08-15 19:15:44 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:15:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:15:44 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:15:44 --> Upload Class Initialized
INFO - 2024-08-15 19:15:44 --> Controller Class Initialized
INFO - 2024-08-15 19:15:44 --> Model "M_admin" initialized
INFO - 2024-08-15 19:15:44 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:15:44 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:15:44 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:15:44 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:15:44 --> Config Class Initialized
INFO - 2024-08-15 19:15:44 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:15:44 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:15:44 --> Utf8 Class Initialized
INFO - 2024-08-15 19:15:44 --> URI Class Initialized
INFO - 2024-08-15 19:15:44 --> Router Class Initialized
INFO - 2024-08-15 19:15:44 --> Output Class Initialized
INFO - 2024-08-15 19:15:44 --> Security Class Initialized
DEBUG - 2024-08-15 19:15:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:15:44 --> Input Class Initialized
INFO - 2024-08-15 19:15:44 --> Language Class Initialized
INFO - 2024-08-15 19:15:44 --> Loader Class Initialized
INFO - 2024-08-15 19:15:44 --> Helper loaded: application_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: url_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: file_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: security_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: date_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: form_helper
INFO - 2024-08-15 19:15:44 --> Helper loaded: language_helper
INFO - 2024-08-15 19:15:44 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:15:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:15:44 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:15:44 --> Upload Class Initialized
INFO - 2024-08-15 19:15:45 --> Controller Class Initialized
INFO - 2024-08-15 19:15:45 --> Model "M_admin" initialized
INFO - 2024-08-15 19:15:45 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:15:45 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:15:45 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:15:45 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:15:45 --> Final output sent to browser
DEBUG - 2024-08-15 19:15:45 --> Total execution time: 0.1063
INFO - 2024-08-15 19:16:27 --> Config Class Initialized
INFO - 2024-08-15 19:16:27 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:16:27 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:16:27 --> Utf8 Class Initialized
INFO - 2024-08-15 19:16:27 --> URI Class Initialized
INFO - 2024-08-15 19:16:27 --> Router Class Initialized
INFO - 2024-08-15 19:16:27 --> Output Class Initialized
INFO - 2024-08-15 19:16:27 --> Security Class Initialized
DEBUG - 2024-08-15 19:16:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:16:27 --> Input Class Initialized
INFO - 2024-08-15 19:16:27 --> Language Class Initialized
INFO - 2024-08-15 19:16:27 --> Loader Class Initialized
INFO - 2024-08-15 19:16:27 --> Helper loaded: application_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: url_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: file_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: security_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: date_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: form_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: language_helper
INFO - 2024-08-15 19:16:27 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:16:27 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:16:27 --> Upload Class Initialized
INFO - 2024-08-15 19:16:27 --> Controller Class Initialized
INFO - 2024-08-15 19:16:27 --> Model "M_admin" initialized
INFO - 2024-08-15 19:16:27 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:16:27 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:16:27 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:16:27 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:16:27 --> Config Class Initialized
INFO - 2024-08-15 19:16:27 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:16:27 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:16:27 --> Utf8 Class Initialized
INFO - 2024-08-15 19:16:27 --> URI Class Initialized
INFO - 2024-08-15 19:16:27 --> Router Class Initialized
INFO - 2024-08-15 19:16:27 --> Output Class Initialized
INFO - 2024-08-15 19:16:27 --> Security Class Initialized
DEBUG - 2024-08-15 19:16:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:16:27 --> Input Class Initialized
INFO - 2024-08-15 19:16:27 --> Language Class Initialized
INFO - 2024-08-15 19:16:27 --> Loader Class Initialized
INFO - 2024-08-15 19:16:27 --> Helper loaded: application_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: url_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: file_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: security_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: date_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: form_helper
INFO - 2024-08-15 19:16:27 --> Helper loaded: language_helper
INFO - 2024-08-15 19:16:27 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:16:27 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:16:27 --> Upload Class Initialized
INFO - 2024-08-15 19:16:27 --> Controller Class Initialized
INFO - 2024-08-15 19:16:27 --> Model "M_admin" initialized
INFO - 2024-08-15 19:16:27 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:16:27 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:16:27 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:16:27 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:16:28 --> Final output sent to browser
DEBUG - 2024-08-15 19:16:28 --> Total execution time: 0.1000
INFO - 2024-08-15 19:17:32 --> Config Class Initialized
INFO - 2024-08-15 19:17:32 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:17:32 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:17:32 --> Utf8 Class Initialized
INFO - 2024-08-15 19:17:32 --> URI Class Initialized
INFO - 2024-08-15 19:17:32 --> Router Class Initialized
INFO - 2024-08-15 19:17:32 --> Output Class Initialized
INFO - 2024-08-15 19:17:32 --> Security Class Initialized
DEBUG - 2024-08-15 19:17:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:17:32 --> Input Class Initialized
INFO - 2024-08-15 19:17:32 --> Language Class Initialized
INFO - 2024-08-15 19:17:32 --> Loader Class Initialized
INFO - 2024-08-15 19:17:32 --> Helper loaded: application_helper
INFO - 2024-08-15 19:17:32 --> Helper loaded: url_helper
INFO - 2024-08-15 19:17:32 --> Helper loaded: file_helper
INFO - 2024-08-15 19:17:32 --> Helper loaded: security_helper
INFO - 2024-08-15 19:17:32 --> Helper loaded: date_helper
INFO - 2024-08-15 19:17:32 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:17:32 --> Helper loaded: form_helper
INFO - 2024-08-15 19:17:32 --> Helper loaded: language_helper
INFO - 2024-08-15 19:17:32 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:17:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:17:32 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:17:32 --> Upload Class Initialized
INFO - 2024-08-15 19:17:32 --> Controller Class Initialized
INFO - 2024-08-15 19:17:32 --> Model "M_admin" initialized
INFO - 2024-08-15 19:17:32 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:17:32 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:17:32 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:17:32 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:17:32 --> Config Class Initialized
INFO - 2024-08-15 19:17:32 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:17:32 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:17:32 --> Utf8 Class Initialized
INFO - 2024-08-15 19:17:32 --> URI Class Initialized
INFO - 2024-08-15 19:17:32 --> Router Class Initialized
INFO - 2024-08-15 19:17:32 --> Output Class Initialized
INFO - 2024-08-15 19:17:32 --> Security Class Initialized
DEBUG - 2024-08-15 19:17:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:17:32 --> Input Class Initialized
INFO - 2024-08-15 19:17:33 --> Language Class Initialized
INFO - 2024-08-15 19:17:33 --> Loader Class Initialized
INFO - 2024-08-15 19:17:33 --> Helper loaded: application_helper
INFO - 2024-08-15 19:17:33 --> Helper loaded: url_helper
INFO - 2024-08-15 19:17:33 --> Helper loaded: file_helper
INFO - 2024-08-15 19:17:33 --> Helper loaded: security_helper
INFO - 2024-08-15 19:17:33 --> Helper loaded: date_helper
INFO - 2024-08-15 19:17:33 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:17:33 --> Helper loaded: form_helper
INFO - 2024-08-15 19:17:33 --> Helper loaded: language_helper
INFO - 2024-08-15 19:17:33 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:17:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:17:33 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:17:33 --> Upload Class Initialized
INFO - 2024-08-15 19:17:33 --> Controller Class Initialized
INFO - 2024-08-15 19:17:33 --> Model "M_admin" initialized
INFO - 2024-08-15 19:17:33 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:17:33 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:17:33 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:17:33 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:17:33 --> Final output sent to browser
DEBUG - 2024-08-15 19:17:33 --> Total execution time: 0.1137
INFO - 2024-08-15 19:17:58 --> Config Class Initialized
INFO - 2024-08-15 19:17:58 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:17:58 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:17:58 --> Utf8 Class Initialized
INFO - 2024-08-15 19:17:58 --> URI Class Initialized
INFO - 2024-08-15 19:17:58 --> Router Class Initialized
INFO - 2024-08-15 19:17:58 --> Output Class Initialized
INFO - 2024-08-15 19:17:58 --> Security Class Initialized
DEBUG - 2024-08-15 19:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:17:58 --> Input Class Initialized
INFO - 2024-08-15 19:17:58 --> Language Class Initialized
INFO - 2024-08-15 19:17:58 --> Loader Class Initialized
INFO - 2024-08-15 19:17:58 --> Helper loaded: application_helper
INFO - 2024-08-15 19:17:58 --> Helper loaded: url_helper
INFO - 2024-08-15 19:17:58 --> Helper loaded: file_helper
INFO - 2024-08-15 19:17:58 --> Helper loaded: security_helper
INFO - 2024-08-15 19:17:58 --> Helper loaded: date_helper
INFO - 2024-08-15 19:17:58 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:17:58 --> Helper loaded: form_helper
INFO - 2024-08-15 19:17:58 --> Helper loaded: language_helper
INFO - 2024-08-15 19:17:58 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:17:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:17:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:17:59 --> Upload Class Initialized
INFO - 2024-08-15 19:17:59 --> Controller Class Initialized
INFO - 2024-08-15 19:17:59 --> Model "M_admin" initialized
INFO - 2024-08-15 19:17:59 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:17:59 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:17:59 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:17:59 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:17:59 --> Config Class Initialized
INFO - 2024-08-15 19:17:59 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:17:59 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:17:59 --> Utf8 Class Initialized
INFO - 2024-08-15 19:17:59 --> URI Class Initialized
INFO - 2024-08-15 19:17:59 --> Router Class Initialized
INFO - 2024-08-15 19:17:59 --> Output Class Initialized
INFO - 2024-08-15 19:17:59 --> Security Class Initialized
DEBUG - 2024-08-15 19:17:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:17:59 --> Input Class Initialized
INFO - 2024-08-15 19:17:59 --> Language Class Initialized
INFO - 2024-08-15 19:17:59 --> Loader Class Initialized
INFO - 2024-08-15 19:17:59 --> Helper loaded: application_helper
INFO - 2024-08-15 19:17:59 --> Helper loaded: url_helper
INFO - 2024-08-15 19:17:59 --> Helper loaded: file_helper
INFO - 2024-08-15 19:17:59 --> Helper loaded: security_helper
INFO - 2024-08-15 19:17:59 --> Helper loaded: date_helper
INFO - 2024-08-15 19:17:59 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:17:59 --> Helper loaded: form_helper
INFO - 2024-08-15 19:17:59 --> Helper loaded: language_helper
INFO - 2024-08-15 19:17:59 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:17:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:17:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:17:59 --> Upload Class Initialized
INFO - 2024-08-15 19:17:59 --> Controller Class Initialized
INFO - 2024-08-15 19:17:59 --> Model "M_admin" initialized
INFO - 2024-08-15 19:17:59 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:17:59 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:17:59 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:17:59 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:17:59 --> Final output sent to browser
DEBUG - 2024-08-15 19:17:59 --> Total execution time: 0.1213
INFO - 2024-08-15 19:18:08 --> Config Class Initialized
INFO - 2024-08-15 19:18:08 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:18:08 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:18:08 --> Utf8 Class Initialized
INFO - 2024-08-15 19:18:08 --> URI Class Initialized
INFO - 2024-08-15 19:18:08 --> Router Class Initialized
INFO - 2024-08-15 19:18:08 --> Output Class Initialized
INFO - 2024-08-15 19:18:08 --> Security Class Initialized
DEBUG - 2024-08-15 19:18:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:18:08 --> Input Class Initialized
INFO - 2024-08-15 19:18:08 --> Language Class Initialized
INFO - 2024-08-15 19:18:08 --> Loader Class Initialized
INFO - 2024-08-15 19:18:08 --> Helper loaded: application_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: url_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: file_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: security_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: date_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: form_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: language_helper
INFO - 2024-08-15 19:18:08 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:18:08 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:18:08 --> Upload Class Initialized
INFO - 2024-08-15 19:18:08 --> Controller Class Initialized
INFO - 2024-08-15 19:18:08 --> Model "M_admin" initialized
INFO - 2024-08-15 19:18:08 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:18:08 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:18:08 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:18:08 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:18:08 --> Config Class Initialized
INFO - 2024-08-15 19:18:08 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:18:08 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:18:08 --> Utf8 Class Initialized
INFO - 2024-08-15 19:18:08 --> URI Class Initialized
INFO - 2024-08-15 19:18:08 --> Router Class Initialized
INFO - 2024-08-15 19:18:08 --> Output Class Initialized
INFO - 2024-08-15 19:18:08 --> Security Class Initialized
DEBUG - 2024-08-15 19:18:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:18:08 --> Input Class Initialized
INFO - 2024-08-15 19:18:08 --> Language Class Initialized
INFO - 2024-08-15 19:18:08 --> Loader Class Initialized
INFO - 2024-08-15 19:18:08 --> Helper loaded: application_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: url_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: file_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: security_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: date_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: form_helper
INFO - 2024-08-15 19:18:08 --> Helper loaded: language_helper
INFO - 2024-08-15 19:18:08 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:18:08 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:18:08 --> Upload Class Initialized
INFO - 2024-08-15 19:18:09 --> Controller Class Initialized
INFO - 2024-08-15 19:18:09 --> Model "M_admin" initialized
INFO - 2024-08-15 19:18:09 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:18:09 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:18:09 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:18:09 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:18:09 --> Final output sent to browser
DEBUG - 2024-08-15 19:18:09 --> Total execution time: 0.1174
INFO - 2024-08-15 19:18:35 --> Config Class Initialized
INFO - 2024-08-15 19:18:35 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:18:35 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:18:35 --> Utf8 Class Initialized
INFO - 2024-08-15 19:18:35 --> URI Class Initialized
INFO - 2024-08-15 19:18:35 --> Router Class Initialized
INFO - 2024-08-15 19:18:35 --> Output Class Initialized
INFO - 2024-08-15 19:18:35 --> Security Class Initialized
DEBUG - 2024-08-15 19:18:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:18:35 --> Input Class Initialized
INFO - 2024-08-15 19:18:35 --> Language Class Initialized
INFO - 2024-08-15 19:18:35 --> Loader Class Initialized
INFO - 2024-08-15 19:18:35 --> Helper loaded: application_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: url_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: file_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: security_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: date_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: form_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: language_helper
INFO - 2024-08-15 19:18:35 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:18:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:18:35 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:18:35 --> Upload Class Initialized
INFO - 2024-08-15 19:18:35 --> Controller Class Initialized
INFO - 2024-08-15 19:18:35 --> Model "M_admin" initialized
INFO - 2024-08-15 19:18:35 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:18:35 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:18:35 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:18:35 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:18:35 --> Config Class Initialized
INFO - 2024-08-15 19:18:35 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:18:35 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:18:35 --> Utf8 Class Initialized
INFO - 2024-08-15 19:18:35 --> URI Class Initialized
INFO - 2024-08-15 19:18:35 --> Router Class Initialized
INFO - 2024-08-15 19:18:35 --> Output Class Initialized
INFO - 2024-08-15 19:18:35 --> Security Class Initialized
DEBUG - 2024-08-15 19:18:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:18:35 --> Input Class Initialized
INFO - 2024-08-15 19:18:35 --> Language Class Initialized
INFO - 2024-08-15 19:18:35 --> Loader Class Initialized
INFO - 2024-08-15 19:18:35 --> Helper loaded: application_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: url_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: file_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: security_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: date_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: form_helper
INFO - 2024-08-15 19:18:35 --> Helper loaded: language_helper
INFO - 2024-08-15 19:18:35 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:18:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:18:35 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:18:35 --> Upload Class Initialized
INFO - 2024-08-15 19:18:36 --> Controller Class Initialized
INFO - 2024-08-15 19:18:36 --> Model "M_admin" initialized
INFO - 2024-08-15 19:18:36 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:18:36 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:18:36 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:18:36 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:18:36 --> Final output sent to browser
DEBUG - 2024-08-15 19:18:36 --> Total execution time: 0.1179
INFO - 2024-08-15 19:21:48 --> Config Class Initialized
INFO - 2024-08-15 19:21:48 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:21:48 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:21:48 --> Utf8 Class Initialized
INFO - 2024-08-15 19:21:48 --> URI Class Initialized
INFO - 2024-08-15 19:21:48 --> Router Class Initialized
INFO - 2024-08-15 19:21:48 --> Output Class Initialized
INFO - 2024-08-15 19:21:48 --> Security Class Initialized
DEBUG - 2024-08-15 19:21:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:21:48 --> Input Class Initialized
INFO - 2024-08-15 19:21:48 --> Language Class Initialized
INFO - 2024-08-15 19:21:48 --> Loader Class Initialized
INFO - 2024-08-15 19:21:48 --> Helper loaded: application_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: url_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: file_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: security_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: date_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: form_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: language_helper
INFO - 2024-08-15 19:21:48 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:21:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:21:48 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:21:48 --> Upload Class Initialized
INFO - 2024-08-15 19:21:48 --> Controller Class Initialized
INFO - 2024-08-15 19:21:48 --> Model "M_admin" initialized
INFO - 2024-08-15 19:21:48 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:21:48 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:21:48 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:21:48 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:21:48 --> Config Class Initialized
INFO - 2024-08-15 19:21:48 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:21:48 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:21:48 --> Utf8 Class Initialized
INFO - 2024-08-15 19:21:48 --> URI Class Initialized
INFO - 2024-08-15 19:21:48 --> Router Class Initialized
INFO - 2024-08-15 19:21:48 --> Output Class Initialized
INFO - 2024-08-15 19:21:48 --> Security Class Initialized
DEBUG - 2024-08-15 19:21:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:21:48 --> Input Class Initialized
INFO - 2024-08-15 19:21:48 --> Language Class Initialized
INFO - 2024-08-15 19:21:48 --> Loader Class Initialized
INFO - 2024-08-15 19:21:48 --> Helper loaded: application_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: url_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: file_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: security_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: date_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: form_helper
INFO - 2024-08-15 19:21:48 --> Helper loaded: language_helper
INFO - 2024-08-15 19:21:48 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:21:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:21:48 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:21:48 --> Upload Class Initialized
INFO - 2024-08-15 19:21:48 --> Controller Class Initialized
INFO - 2024-08-15 19:21:48 --> Model "M_admin" initialized
INFO - 2024-08-15 19:21:48 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:21:48 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:21:48 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:21:48 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:21:48 --> Final output sent to browser
DEBUG - 2024-08-15 19:21:48 --> Total execution time: 0.1022
INFO - 2024-08-15 19:38:23 --> Config Class Initialized
INFO - 2024-08-15 19:38:23 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:38:23 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:38:23 --> Utf8 Class Initialized
INFO - 2024-08-15 19:38:23 --> URI Class Initialized
INFO - 2024-08-15 19:38:23 --> Router Class Initialized
INFO - 2024-08-15 19:38:23 --> Output Class Initialized
INFO - 2024-08-15 19:38:23 --> Security Class Initialized
DEBUG - 2024-08-15 19:38:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:38:23 --> Input Class Initialized
INFO - 2024-08-15 19:38:23 --> Language Class Initialized
INFO - 2024-08-15 19:38:23 --> Loader Class Initialized
INFO - 2024-08-15 19:38:23 --> Helper loaded: application_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: url_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: file_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: security_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: date_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: form_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: language_helper
INFO - 2024-08-15 19:38:23 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:38:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:38:23 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:38:23 --> Upload Class Initialized
INFO - 2024-08-15 19:38:23 --> Controller Class Initialized
INFO - 2024-08-15 19:38:23 --> Model "M_admin" initialized
INFO - 2024-08-15 19:38:23 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:38:23 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:38:23 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:38:23 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:38:23 --> Config Class Initialized
INFO - 2024-08-15 19:38:23 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:38:23 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:38:23 --> Utf8 Class Initialized
INFO - 2024-08-15 19:38:23 --> URI Class Initialized
INFO - 2024-08-15 19:38:23 --> Router Class Initialized
INFO - 2024-08-15 19:38:23 --> Output Class Initialized
INFO - 2024-08-15 19:38:23 --> Security Class Initialized
DEBUG - 2024-08-15 19:38:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:38:23 --> Input Class Initialized
INFO - 2024-08-15 19:38:23 --> Language Class Initialized
INFO - 2024-08-15 19:38:23 --> Loader Class Initialized
INFO - 2024-08-15 19:38:23 --> Helper loaded: application_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: url_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: file_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: security_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: date_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: form_helper
INFO - 2024-08-15 19:38:23 --> Helper loaded: language_helper
INFO - 2024-08-15 19:38:23 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:38:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:38:23 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:38:23 --> Upload Class Initialized
INFO - 2024-08-15 19:38:23 --> Controller Class Initialized
INFO - 2024-08-15 19:38:23 --> Model "M_admin" initialized
INFO - 2024-08-15 19:38:23 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:38:23 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:38:23 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:38:23 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:38:23 --> Final output sent to browser
DEBUG - 2024-08-15 19:38:23 --> Total execution time: 0.0998
INFO - 2024-08-15 19:49:44 --> Config Class Initialized
INFO - 2024-08-15 19:49:44 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:49:44 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:49:44 --> Utf8 Class Initialized
INFO - 2024-08-15 19:49:44 --> URI Class Initialized
INFO - 2024-08-15 19:49:44 --> Router Class Initialized
INFO - 2024-08-15 19:49:44 --> Output Class Initialized
INFO - 2024-08-15 19:49:44 --> Security Class Initialized
DEBUG - 2024-08-15 19:49:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:49:44 --> Input Class Initialized
INFO - 2024-08-15 19:49:44 --> Language Class Initialized
INFO - 2024-08-15 19:49:44 --> Loader Class Initialized
INFO - 2024-08-15 19:49:44 --> Helper loaded: application_helper
INFO - 2024-08-15 19:49:44 --> Helper loaded: url_helper
INFO - 2024-08-15 19:49:44 --> Helper loaded: file_helper
INFO - 2024-08-15 19:49:44 --> Helper loaded: security_helper
INFO - 2024-08-15 19:49:44 --> Helper loaded: date_helper
INFO - 2024-08-15 19:49:44 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:49:44 --> Helper loaded: form_helper
INFO - 2024-08-15 19:49:44 --> Helper loaded: language_helper
INFO - 2024-08-15 19:49:44 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:49:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:49:44 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:49:44 --> Upload Class Initialized
INFO - 2024-08-15 19:49:44 --> Controller Class Initialized
INFO - 2024-08-15 19:49:44 --> Model "M_admin" initialized
INFO - 2024-08-15 19:49:44 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:49:44 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:49:44 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:49:44 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:49:45 --> Config Class Initialized
INFO - 2024-08-15 19:49:45 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:49:45 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:49:45 --> Utf8 Class Initialized
INFO - 2024-08-15 19:49:45 --> URI Class Initialized
INFO - 2024-08-15 19:49:45 --> Router Class Initialized
INFO - 2024-08-15 19:49:45 --> Output Class Initialized
INFO - 2024-08-15 19:49:45 --> Security Class Initialized
DEBUG - 2024-08-15 19:49:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:49:45 --> Input Class Initialized
INFO - 2024-08-15 19:49:45 --> Language Class Initialized
INFO - 2024-08-15 19:49:45 --> Loader Class Initialized
INFO - 2024-08-15 19:49:45 --> Helper loaded: application_helper
INFO - 2024-08-15 19:49:45 --> Helper loaded: url_helper
INFO - 2024-08-15 19:49:45 --> Helper loaded: file_helper
INFO - 2024-08-15 19:49:45 --> Helper loaded: security_helper
INFO - 2024-08-15 19:49:45 --> Helper loaded: date_helper
INFO - 2024-08-15 19:49:45 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:49:45 --> Helper loaded: form_helper
INFO - 2024-08-15 19:49:45 --> Helper loaded: language_helper
INFO - 2024-08-15 19:49:45 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:49:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:49:45 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:49:45 --> Upload Class Initialized
INFO - 2024-08-15 19:49:45 --> Controller Class Initialized
INFO - 2024-08-15 19:49:45 --> Model "M_admin" initialized
INFO - 2024-08-15 19:49:45 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:49:45 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:49:45 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:49:45 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:49:45 --> Final output sent to browser
DEBUG - 2024-08-15 19:49:45 --> Total execution time: 0.1266
INFO - 2024-08-15 19:49:53 --> Config Class Initialized
INFO - 2024-08-15 19:49:53 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:49:53 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:49:53 --> Utf8 Class Initialized
INFO - 2024-08-15 19:49:53 --> URI Class Initialized
INFO - 2024-08-15 19:49:53 --> Router Class Initialized
INFO - 2024-08-15 19:49:53 --> Output Class Initialized
INFO - 2024-08-15 19:49:53 --> Security Class Initialized
DEBUG - 2024-08-15 19:49:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:49:53 --> Input Class Initialized
INFO - 2024-08-15 19:49:53 --> Language Class Initialized
INFO - 2024-08-15 19:49:53 --> Loader Class Initialized
INFO - 2024-08-15 19:49:53 --> Helper loaded: application_helper
INFO - 2024-08-15 19:49:53 --> Helper loaded: url_helper
INFO - 2024-08-15 19:49:53 --> Helper loaded: file_helper
INFO - 2024-08-15 19:49:53 --> Helper loaded: security_helper
INFO - 2024-08-15 19:49:53 --> Helper loaded: date_helper
INFO - 2024-08-15 19:49:53 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:49:53 --> Helper loaded: form_helper
INFO - 2024-08-15 19:49:53 --> Helper loaded: language_helper
INFO - 2024-08-15 19:49:53 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:49:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:49:53 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:49:53 --> Upload Class Initialized
INFO - 2024-08-15 19:49:53 --> Controller Class Initialized
INFO - 2024-08-15 19:49:53 --> Model "M_admin" initialized
INFO - 2024-08-15 19:49:53 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:49:53 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:49:53 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:49:53 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:49:58 --> Config Class Initialized
INFO - 2024-08-15 19:49:58 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:49:58 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:49:58 --> Utf8 Class Initialized
INFO - 2024-08-15 19:49:58 --> URI Class Initialized
INFO - 2024-08-15 19:49:58 --> Router Class Initialized
INFO - 2024-08-15 19:49:58 --> Output Class Initialized
INFO - 2024-08-15 19:49:58 --> Security Class Initialized
DEBUG - 2024-08-15 19:49:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:49:58 --> Input Class Initialized
INFO - 2024-08-15 19:49:58 --> Language Class Initialized
INFO - 2024-08-15 19:49:58 --> Loader Class Initialized
INFO - 2024-08-15 19:49:58 --> Helper loaded: application_helper
INFO - 2024-08-15 19:49:58 --> Helper loaded: url_helper
INFO - 2024-08-15 19:49:58 --> Helper loaded: file_helper
INFO - 2024-08-15 19:49:58 --> Helper loaded: security_helper
INFO - 2024-08-15 19:49:58 --> Helper loaded: date_helper
INFO - 2024-08-15 19:49:58 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:49:58 --> Helper loaded: form_helper
INFO - 2024-08-15 19:49:58 --> Helper loaded: language_helper
INFO - 2024-08-15 19:49:58 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:49:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:49:58 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:49:58 --> Upload Class Initialized
INFO - 2024-08-15 19:49:58 --> Controller Class Initialized
INFO - 2024-08-15 19:49:58 --> Model "M_admin" initialized
INFO - 2024-08-15 19:49:58 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:49:58 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:49:58 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:49:58 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:50:04 --> Config Class Initialized
INFO - 2024-08-15 19:50:04 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:50:04 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:50:04 --> Utf8 Class Initialized
INFO - 2024-08-15 19:50:04 --> URI Class Initialized
INFO - 2024-08-15 19:50:04 --> Router Class Initialized
INFO - 2024-08-15 19:50:04 --> Output Class Initialized
INFO - 2024-08-15 19:50:04 --> Security Class Initialized
DEBUG - 2024-08-15 19:50:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:50:04 --> Input Class Initialized
INFO - 2024-08-15 19:50:04 --> Language Class Initialized
INFO - 2024-08-15 19:50:04 --> Loader Class Initialized
INFO - 2024-08-15 19:50:04 --> Helper loaded: application_helper
INFO - 2024-08-15 19:50:04 --> Helper loaded: url_helper
INFO - 2024-08-15 19:50:04 --> Helper loaded: file_helper
INFO - 2024-08-15 19:50:04 --> Helper loaded: security_helper
INFO - 2024-08-15 19:50:04 --> Helper loaded: date_helper
INFO - 2024-08-15 19:50:04 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:50:04 --> Helper loaded: form_helper
INFO - 2024-08-15 19:50:04 --> Helper loaded: language_helper
INFO - 2024-08-15 19:50:04 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:50:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:50:04 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:50:04 --> Upload Class Initialized
INFO - 2024-08-15 19:50:05 --> Controller Class Initialized
INFO - 2024-08-15 19:50:05 --> Model "M_admin" initialized
INFO - 2024-08-15 19:50:05 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:50:05 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:50:05 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:50:05 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:50:05 --> Config Class Initialized
INFO - 2024-08-15 19:50:05 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:50:05 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:50:05 --> Utf8 Class Initialized
INFO - 2024-08-15 19:50:05 --> URI Class Initialized
INFO - 2024-08-15 19:50:05 --> Router Class Initialized
INFO - 2024-08-15 19:50:05 --> Output Class Initialized
INFO - 2024-08-15 19:50:05 --> Security Class Initialized
DEBUG - 2024-08-15 19:50:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:50:05 --> Input Class Initialized
INFO - 2024-08-15 19:50:05 --> Language Class Initialized
INFO - 2024-08-15 19:50:05 --> Loader Class Initialized
INFO - 2024-08-15 19:50:05 --> Helper loaded: application_helper
INFO - 2024-08-15 19:50:05 --> Helper loaded: url_helper
INFO - 2024-08-15 19:50:05 --> Helper loaded: file_helper
INFO - 2024-08-15 19:50:05 --> Helper loaded: security_helper
INFO - 2024-08-15 19:50:05 --> Helper loaded: date_helper
INFO - 2024-08-15 19:50:05 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:50:05 --> Helper loaded: form_helper
INFO - 2024-08-15 19:50:05 --> Helper loaded: language_helper
INFO - 2024-08-15 19:50:05 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:50:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:50:05 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:50:05 --> Upload Class Initialized
INFO - 2024-08-15 19:50:05 --> Controller Class Initialized
INFO - 2024-08-15 19:50:05 --> Model "M_admin" initialized
INFO - 2024-08-15 19:50:05 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:50:05 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:50:05 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:50:05 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:50:05 --> Final output sent to browser
DEBUG - 2024-08-15 19:50:05 --> Total execution time: 0.0888
INFO - 2024-08-15 19:57:20 --> Config Class Initialized
INFO - 2024-08-15 19:57:20 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:57:20 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:57:20 --> Utf8 Class Initialized
INFO - 2024-08-15 19:57:20 --> URI Class Initialized
INFO - 2024-08-15 19:57:20 --> Router Class Initialized
INFO - 2024-08-15 19:57:20 --> Output Class Initialized
INFO - 2024-08-15 19:57:20 --> Security Class Initialized
DEBUG - 2024-08-15 19:57:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:57:20 --> Input Class Initialized
INFO - 2024-08-15 19:57:20 --> Language Class Initialized
INFO - 2024-08-15 19:57:20 --> Loader Class Initialized
INFO - 2024-08-15 19:57:20 --> Helper loaded: application_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: url_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: file_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: security_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: date_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: form_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: language_helper
INFO - 2024-08-15 19:57:20 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:57:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:57:20 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:57:20 --> Upload Class Initialized
INFO - 2024-08-15 19:57:20 --> Controller Class Initialized
INFO - 2024-08-15 19:57:20 --> Model "M_admin" initialized
INFO - 2024-08-15 19:57:20 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:57:20 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:57:20 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:57:20 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:57:20 --> Config Class Initialized
INFO - 2024-08-15 19:57:20 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:57:20 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:57:20 --> Utf8 Class Initialized
INFO - 2024-08-15 19:57:20 --> URI Class Initialized
INFO - 2024-08-15 19:57:20 --> Router Class Initialized
INFO - 2024-08-15 19:57:20 --> Output Class Initialized
INFO - 2024-08-15 19:57:20 --> Security Class Initialized
DEBUG - 2024-08-15 19:57:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:57:20 --> Input Class Initialized
INFO - 2024-08-15 19:57:20 --> Language Class Initialized
INFO - 2024-08-15 19:57:20 --> Loader Class Initialized
INFO - 2024-08-15 19:57:20 --> Helper loaded: application_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: url_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: file_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: security_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: date_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: form_helper
INFO - 2024-08-15 19:57:20 --> Helper loaded: language_helper
INFO - 2024-08-15 19:57:20 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:57:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:57:20 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:57:20 --> Upload Class Initialized
INFO - 2024-08-15 19:57:20 --> Controller Class Initialized
INFO - 2024-08-15 19:57:20 --> Model "M_admin" initialized
INFO - 2024-08-15 19:57:20 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:57:20 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:57:20 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:57:20 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:57:20 --> Final output sent to browser
DEBUG - 2024-08-15 19:57:20 --> Total execution time: 0.1010
INFO - 2024-08-15 19:57:23 --> Config Class Initialized
INFO - 2024-08-15 19:57:23 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:57:23 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:57:23 --> Utf8 Class Initialized
INFO - 2024-08-15 19:57:23 --> URI Class Initialized
INFO - 2024-08-15 19:57:23 --> Router Class Initialized
INFO - 2024-08-15 19:57:23 --> Output Class Initialized
INFO - 2024-08-15 19:57:23 --> Security Class Initialized
DEBUG - 2024-08-15 19:57:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:57:23 --> Input Class Initialized
INFO - 2024-08-15 19:57:23 --> Language Class Initialized
INFO - 2024-08-15 19:57:23 --> Loader Class Initialized
INFO - 2024-08-15 19:57:23 --> Helper loaded: application_helper
INFO - 2024-08-15 19:57:23 --> Helper loaded: url_helper
INFO - 2024-08-15 19:57:23 --> Helper loaded: file_helper
INFO - 2024-08-15 19:57:23 --> Helper loaded: security_helper
INFO - 2024-08-15 19:57:23 --> Helper loaded: date_helper
INFO - 2024-08-15 19:57:23 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:57:23 --> Helper loaded: form_helper
INFO - 2024-08-15 19:57:23 --> Helper loaded: language_helper
INFO - 2024-08-15 19:57:23 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:57:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:57:23 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:57:23 --> Upload Class Initialized
INFO - 2024-08-15 19:57:23 --> Controller Class Initialized
INFO - 2024-08-15 19:57:23 --> Model "M_admin" initialized
INFO - 2024-08-15 19:57:23 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:57:23 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:57:23 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:57:23 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:57:25 --> Config Class Initialized
INFO - 2024-08-15 19:57:25 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:57:25 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:57:25 --> Utf8 Class Initialized
INFO - 2024-08-15 19:57:25 --> URI Class Initialized
INFO - 2024-08-15 19:57:25 --> Router Class Initialized
INFO - 2024-08-15 19:57:25 --> Output Class Initialized
INFO - 2024-08-15 19:57:25 --> Security Class Initialized
DEBUG - 2024-08-15 19:57:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:57:25 --> Input Class Initialized
INFO - 2024-08-15 19:57:25 --> Language Class Initialized
INFO - 2024-08-15 19:57:25 --> Loader Class Initialized
INFO - 2024-08-15 19:57:25 --> Helper loaded: application_helper
INFO - 2024-08-15 19:57:25 --> Helper loaded: url_helper
INFO - 2024-08-15 19:57:25 --> Helper loaded: file_helper
INFO - 2024-08-15 19:57:25 --> Helper loaded: security_helper
INFO - 2024-08-15 19:57:25 --> Helper loaded: date_helper
INFO - 2024-08-15 19:57:25 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:57:25 --> Helper loaded: form_helper
INFO - 2024-08-15 19:57:25 --> Helper loaded: language_helper
INFO - 2024-08-15 19:57:25 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:57:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:57:25 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:57:25 --> Upload Class Initialized
INFO - 2024-08-15 19:57:25 --> Controller Class Initialized
INFO - 2024-08-15 19:57:25 --> Model "M_admin" initialized
INFO - 2024-08-15 19:57:25 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:57:25 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:57:25 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:57:25 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:58:42 --> Config Class Initialized
INFO - 2024-08-15 19:58:42 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:58:42 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:58:42 --> Utf8 Class Initialized
INFO - 2024-08-15 19:58:42 --> URI Class Initialized
INFO - 2024-08-15 19:58:42 --> Router Class Initialized
INFO - 2024-08-15 19:58:42 --> Output Class Initialized
INFO - 2024-08-15 19:58:42 --> Security Class Initialized
DEBUG - 2024-08-15 19:58:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:58:42 --> Input Class Initialized
INFO - 2024-08-15 19:58:42 --> Language Class Initialized
INFO - 2024-08-15 19:58:42 --> Loader Class Initialized
INFO - 2024-08-15 19:58:42 --> Helper loaded: application_helper
INFO - 2024-08-15 19:58:42 --> Helper loaded: url_helper
INFO - 2024-08-15 19:58:42 --> Helper loaded: file_helper
INFO - 2024-08-15 19:58:42 --> Helper loaded: security_helper
INFO - 2024-08-15 19:58:42 --> Helper loaded: date_helper
INFO - 2024-08-15 19:58:42 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:58:42 --> Helper loaded: form_helper
INFO - 2024-08-15 19:58:42 --> Helper loaded: language_helper
INFO - 2024-08-15 19:58:42 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:58:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:58:42 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:58:42 --> Upload Class Initialized
INFO - 2024-08-15 19:58:42 --> Controller Class Initialized
INFO - 2024-08-15 19:58:42 --> Model "M_admin" initialized
INFO - 2024-08-15 19:58:42 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:58:42 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:58:42 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:58:42 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:58:46 --> Config Class Initialized
INFO - 2024-08-15 19:58:46 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:58:46 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:58:46 --> Utf8 Class Initialized
INFO - 2024-08-15 19:58:46 --> URI Class Initialized
INFO - 2024-08-15 19:58:46 --> Router Class Initialized
INFO - 2024-08-15 19:58:46 --> Output Class Initialized
INFO - 2024-08-15 19:58:46 --> Security Class Initialized
DEBUG - 2024-08-15 19:58:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:58:46 --> Input Class Initialized
INFO - 2024-08-15 19:58:46 --> Language Class Initialized
INFO - 2024-08-15 19:58:46 --> Loader Class Initialized
INFO - 2024-08-15 19:58:46 --> Helper loaded: application_helper
INFO - 2024-08-15 19:58:46 --> Helper loaded: url_helper
INFO - 2024-08-15 19:58:46 --> Helper loaded: file_helper
INFO - 2024-08-15 19:58:46 --> Helper loaded: security_helper
INFO - 2024-08-15 19:58:46 --> Helper loaded: date_helper
INFO - 2024-08-15 19:58:46 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:58:46 --> Helper loaded: form_helper
INFO - 2024-08-15 19:58:46 --> Helper loaded: language_helper
INFO - 2024-08-15 19:58:46 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:58:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:58:46 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:58:46 --> Upload Class Initialized
INFO - 2024-08-15 19:58:46 --> Controller Class Initialized
INFO - 2024-08-15 19:58:46 --> Model "M_admin" initialized
INFO - 2024-08-15 19:58:46 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:58:46 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:58:46 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:58:46 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:58:54 --> Config Class Initialized
INFO - 2024-08-15 19:58:54 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:58:54 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:58:54 --> Utf8 Class Initialized
INFO - 2024-08-15 19:58:54 --> URI Class Initialized
INFO - 2024-08-15 19:58:54 --> Router Class Initialized
INFO - 2024-08-15 19:58:54 --> Output Class Initialized
INFO - 2024-08-15 19:58:54 --> Security Class Initialized
DEBUG - 2024-08-15 19:58:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:58:54 --> Input Class Initialized
INFO - 2024-08-15 19:58:54 --> Language Class Initialized
INFO - 2024-08-15 19:58:54 --> Loader Class Initialized
INFO - 2024-08-15 19:58:54 --> Helper loaded: application_helper
INFO - 2024-08-15 19:58:54 --> Helper loaded: url_helper
INFO - 2024-08-15 19:58:54 --> Helper loaded: file_helper
INFO - 2024-08-15 19:58:54 --> Helper loaded: security_helper
INFO - 2024-08-15 19:58:54 --> Helper loaded: date_helper
INFO - 2024-08-15 19:58:54 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:58:54 --> Helper loaded: form_helper
INFO - 2024-08-15 19:58:54 --> Helper loaded: language_helper
INFO - 2024-08-15 19:58:54 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:58:54 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:58:54 --> Upload Class Initialized
INFO - 2024-08-15 19:58:55 --> Controller Class Initialized
INFO - 2024-08-15 19:58:55 --> Model "M_admin" initialized
INFO - 2024-08-15 19:58:55 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:58:55 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:58:55 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:58:55 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:58:55 --> Config Class Initialized
INFO - 2024-08-15 19:58:55 --> Hooks Class Initialized
DEBUG - 2024-08-15 19:58:55 --> UTF-8 Support Enabled
INFO - 2024-08-15 19:58:55 --> Utf8 Class Initialized
INFO - 2024-08-15 19:58:55 --> URI Class Initialized
INFO - 2024-08-15 19:58:55 --> Router Class Initialized
INFO - 2024-08-15 19:58:55 --> Output Class Initialized
INFO - 2024-08-15 19:58:55 --> Security Class Initialized
DEBUG - 2024-08-15 19:58:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 19:58:55 --> Input Class Initialized
INFO - 2024-08-15 19:58:55 --> Language Class Initialized
INFO - 2024-08-15 19:58:55 --> Loader Class Initialized
INFO - 2024-08-15 19:58:55 --> Helper loaded: application_helper
INFO - 2024-08-15 19:58:55 --> Helper loaded: url_helper
INFO - 2024-08-15 19:58:55 --> Helper loaded: file_helper
INFO - 2024-08-15 19:58:55 --> Helper loaded: security_helper
INFO - 2024-08-15 19:58:55 --> Helper loaded: date_helper
INFO - 2024-08-15 19:58:55 --> Helper loaded: captcha_helper
INFO - 2024-08-15 19:58:55 --> Helper loaded: form_helper
INFO - 2024-08-15 19:58:55 --> Helper loaded: language_helper
INFO - 2024-08-15 19:58:55 --> Database Driver Class Initialized
DEBUG - 2024-08-15 19:58:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 19:58:55 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 19:58:55 --> Upload Class Initialized
INFO - 2024-08-15 19:58:55 --> Controller Class Initialized
INFO - 2024-08-15 19:58:55 --> Model "M_admin" initialized
INFO - 2024-08-15 19:58:55 --> Model "M_config" initialized
DEBUG - 2024-08-15 19:58:55 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 19:58:55 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 19:58:55 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 19:58:55 --> Final output sent to browser
DEBUG - 2024-08-15 19:58:55 --> Total execution time: 0.1044
INFO - 2024-08-15 20:00:40 --> Config Class Initialized
INFO - 2024-08-15 20:00:40 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:00:40 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:00:40 --> Utf8 Class Initialized
INFO - 2024-08-15 20:00:40 --> URI Class Initialized
INFO - 2024-08-15 20:00:40 --> Router Class Initialized
INFO - 2024-08-15 20:00:40 --> Output Class Initialized
INFO - 2024-08-15 20:00:40 --> Security Class Initialized
DEBUG - 2024-08-15 20:00:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:00:40 --> Input Class Initialized
INFO - 2024-08-15 20:00:40 --> Language Class Initialized
INFO - 2024-08-15 20:00:40 --> Loader Class Initialized
INFO - 2024-08-15 20:00:40 --> Helper loaded: application_helper
INFO - 2024-08-15 20:00:40 --> Helper loaded: url_helper
INFO - 2024-08-15 20:00:40 --> Helper loaded: file_helper
INFO - 2024-08-15 20:00:40 --> Helper loaded: security_helper
INFO - 2024-08-15 20:00:40 --> Helper loaded: date_helper
INFO - 2024-08-15 20:00:40 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:00:40 --> Helper loaded: form_helper
INFO - 2024-08-15 20:00:40 --> Helper loaded: language_helper
INFO - 2024-08-15 20:00:40 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:00:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:00:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:00:40 --> Upload Class Initialized
INFO - 2024-08-15 20:00:40 --> Controller Class Initialized
INFO - 2024-08-15 20:00:40 --> Model "M_admin" initialized
INFO - 2024-08-15 20:00:40 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:00:40 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:00:40 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:00:40 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:00:41 --> Config Class Initialized
INFO - 2024-08-15 20:00:41 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:00:41 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:00:41 --> Utf8 Class Initialized
INFO - 2024-08-15 20:00:41 --> URI Class Initialized
INFO - 2024-08-15 20:00:41 --> Router Class Initialized
INFO - 2024-08-15 20:00:41 --> Output Class Initialized
INFO - 2024-08-15 20:00:41 --> Security Class Initialized
DEBUG - 2024-08-15 20:00:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:00:41 --> Input Class Initialized
INFO - 2024-08-15 20:00:41 --> Language Class Initialized
INFO - 2024-08-15 20:00:41 --> Loader Class Initialized
INFO - 2024-08-15 20:00:41 --> Helper loaded: application_helper
INFO - 2024-08-15 20:00:41 --> Helper loaded: url_helper
INFO - 2024-08-15 20:00:41 --> Helper loaded: file_helper
INFO - 2024-08-15 20:00:41 --> Helper loaded: security_helper
INFO - 2024-08-15 20:00:41 --> Helper loaded: date_helper
INFO - 2024-08-15 20:00:41 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:00:41 --> Helper loaded: form_helper
INFO - 2024-08-15 20:00:41 --> Helper loaded: language_helper
INFO - 2024-08-15 20:00:41 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:00:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:00:41 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:00:41 --> Upload Class Initialized
INFO - 2024-08-15 20:00:41 --> Controller Class Initialized
INFO - 2024-08-15 20:00:41 --> Model "M_admin" initialized
INFO - 2024-08-15 20:00:41 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:00:41 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:00:41 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:00:41 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:00:41 --> Final output sent to browser
DEBUG - 2024-08-15 20:00:41 --> Total execution time: 0.1090
INFO - 2024-08-15 20:02:33 --> Config Class Initialized
INFO - 2024-08-15 20:02:33 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:02:33 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:02:33 --> Utf8 Class Initialized
INFO - 2024-08-15 20:02:33 --> URI Class Initialized
INFO - 2024-08-15 20:02:33 --> Router Class Initialized
INFO - 2024-08-15 20:02:33 --> Output Class Initialized
INFO - 2024-08-15 20:02:33 --> Security Class Initialized
DEBUG - 2024-08-15 20:02:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:02:33 --> Input Class Initialized
INFO - 2024-08-15 20:02:33 --> Language Class Initialized
INFO - 2024-08-15 20:02:33 --> Loader Class Initialized
INFO - 2024-08-15 20:02:33 --> Helper loaded: application_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: url_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: file_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: security_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: date_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: form_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: language_helper
INFO - 2024-08-15 20:02:33 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:02:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:02:33 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:02:33 --> Upload Class Initialized
INFO - 2024-08-15 20:02:33 --> Controller Class Initialized
INFO - 2024-08-15 20:02:33 --> Model "M_admin" initialized
INFO - 2024-08-15 20:02:33 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:02:33 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:02:33 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:02:33 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:02:33 --> Config Class Initialized
INFO - 2024-08-15 20:02:33 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:02:33 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:02:33 --> Utf8 Class Initialized
INFO - 2024-08-15 20:02:33 --> URI Class Initialized
INFO - 2024-08-15 20:02:33 --> Router Class Initialized
INFO - 2024-08-15 20:02:33 --> Output Class Initialized
INFO - 2024-08-15 20:02:33 --> Security Class Initialized
DEBUG - 2024-08-15 20:02:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:02:33 --> Input Class Initialized
INFO - 2024-08-15 20:02:33 --> Language Class Initialized
INFO - 2024-08-15 20:02:33 --> Loader Class Initialized
INFO - 2024-08-15 20:02:33 --> Helper loaded: application_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: url_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: file_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: security_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: date_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: form_helper
INFO - 2024-08-15 20:02:33 --> Helper loaded: language_helper
INFO - 2024-08-15 20:02:33 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:02:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:02:33 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:02:33 --> Upload Class Initialized
INFO - 2024-08-15 20:02:33 --> Controller Class Initialized
INFO - 2024-08-15 20:02:33 --> Model "M_admin" initialized
INFO - 2024-08-15 20:02:33 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:02:33 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:02:33 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:02:33 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:02:33 --> Final output sent to browser
DEBUG - 2024-08-15 20:02:33 --> Total execution time: 0.0973
INFO - 2024-08-15 20:09:04 --> Config Class Initialized
INFO - 2024-08-15 20:09:04 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:09:04 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:09:04 --> Utf8 Class Initialized
INFO - 2024-08-15 20:09:04 --> URI Class Initialized
INFO - 2024-08-15 20:09:04 --> Router Class Initialized
INFO - 2024-08-15 20:09:04 --> Output Class Initialized
INFO - 2024-08-15 20:09:04 --> Security Class Initialized
DEBUG - 2024-08-15 20:09:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:09:04 --> Input Class Initialized
INFO - 2024-08-15 20:09:04 --> Language Class Initialized
INFO - 2024-08-15 20:09:04 --> Loader Class Initialized
INFO - 2024-08-15 20:09:04 --> Helper loaded: application_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: url_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: file_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: security_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: date_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: form_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: language_helper
INFO - 2024-08-15 20:09:04 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:09:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:09:04 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:09:04 --> Upload Class Initialized
INFO - 2024-08-15 20:09:04 --> Controller Class Initialized
INFO - 2024-08-15 20:09:04 --> Model "M_admin" initialized
INFO - 2024-08-15 20:09:04 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:09:04 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:09:04 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:09:04 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:09:04 --> Config Class Initialized
INFO - 2024-08-15 20:09:04 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:09:04 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:09:04 --> Utf8 Class Initialized
INFO - 2024-08-15 20:09:04 --> URI Class Initialized
INFO - 2024-08-15 20:09:04 --> Router Class Initialized
INFO - 2024-08-15 20:09:04 --> Output Class Initialized
INFO - 2024-08-15 20:09:04 --> Security Class Initialized
DEBUG - 2024-08-15 20:09:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:09:04 --> Input Class Initialized
INFO - 2024-08-15 20:09:04 --> Language Class Initialized
INFO - 2024-08-15 20:09:04 --> Loader Class Initialized
INFO - 2024-08-15 20:09:04 --> Helper loaded: application_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: url_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: file_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: security_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: date_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: form_helper
INFO - 2024-08-15 20:09:04 --> Helper loaded: language_helper
INFO - 2024-08-15 20:09:04 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:09:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:09:04 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:09:04 --> Upload Class Initialized
INFO - 2024-08-15 20:09:04 --> Controller Class Initialized
INFO - 2024-08-15 20:09:04 --> Model "M_admin" initialized
INFO - 2024-08-15 20:09:04 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:09:04 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:09:04 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:09:04 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:09:04 --> Final output sent to browser
DEBUG - 2024-08-15 20:09:04 --> Total execution time: 0.1074
INFO - 2024-08-15 20:15:48 --> Config Class Initialized
INFO - 2024-08-15 20:15:48 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:15:48 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:15:48 --> Utf8 Class Initialized
INFO - 2024-08-15 20:15:48 --> URI Class Initialized
INFO - 2024-08-15 20:15:48 --> Router Class Initialized
INFO - 2024-08-15 20:15:48 --> Output Class Initialized
INFO - 2024-08-15 20:15:48 --> Security Class Initialized
DEBUG - 2024-08-15 20:15:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:15:48 --> Input Class Initialized
INFO - 2024-08-15 20:15:48 --> Language Class Initialized
INFO - 2024-08-15 20:15:48 --> Loader Class Initialized
INFO - 2024-08-15 20:15:48 --> Helper loaded: application_helper
INFO - 2024-08-15 20:15:48 --> Helper loaded: url_helper
INFO - 2024-08-15 20:15:48 --> Helper loaded: file_helper
INFO - 2024-08-15 20:15:48 --> Helper loaded: security_helper
INFO - 2024-08-15 20:15:48 --> Helper loaded: date_helper
INFO - 2024-08-15 20:15:48 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:15:48 --> Helper loaded: form_helper
INFO - 2024-08-15 20:15:48 --> Helper loaded: language_helper
INFO - 2024-08-15 20:15:48 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:15:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:15:48 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:15:48 --> Upload Class Initialized
INFO - 2024-08-15 20:15:48 --> Controller Class Initialized
INFO - 2024-08-15 20:15:48 --> Model "M_admin" initialized
INFO - 2024-08-15 20:15:48 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:15:48 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:15:48 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:15:48 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:15:51 --> Config Class Initialized
INFO - 2024-08-15 20:15:51 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:15:51 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:15:51 --> Utf8 Class Initialized
INFO - 2024-08-15 20:15:51 --> URI Class Initialized
INFO - 2024-08-15 20:15:51 --> Router Class Initialized
INFO - 2024-08-15 20:15:51 --> Output Class Initialized
INFO - 2024-08-15 20:15:51 --> Security Class Initialized
DEBUG - 2024-08-15 20:15:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:15:51 --> Input Class Initialized
INFO - 2024-08-15 20:15:51 --> Language Class Initialized
INFO - 2024-08-15 20:15:51 --> Loader Class Initialized
INFO - 2024-08-15 20:15:51 --> Helper loaded: application_helper
INFO - 2024-08-15 20:15:51 --> Helper loaded: url_helper
INFO - 2024-08-15 20:15:51 --> Helper loaded: file_helper
INFO - 2024-08-15 20:15:51 --> Helper loaded: security_helper
INFO - 2024-08-15 20:15:51 --> Helper loaded: date_helper
INFO - 2024-08-15 20:15:51 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:15:51 --> Helper loaded: form_helper
INFO - 2024-08-15 20:15:51 --> Helper loaded: language_helper
INFO - 2024-08-15 20:15:51 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:15:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:15:51 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:15:51 --> Upload Class Initialized
INFO - 2024-08-15 20:15:51 --> Controller Class Initialized
INFO - 2024-08-15 20:15:51 --> Model "M_admin" initialized
INFO - 2024-08-15 20:15:51 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:15:51 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:15:51 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:15:51 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:17:34 --> Config Class Initialized
INFO - 2024-08-15 20:17:34 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:17:34 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:17:34 --> Utf8 Class Initialized
INFO - 2024-08-15 20:17:34 --> URI Class Initialized
INFO - 2024-08-15 20:17:34 --> Router Class Initialized
INFO - 2024-08-15 20:17:34 --> Output Class Initialized
INFO - 2024-08-15 20:17:34 --> Security Class Initialized
DEBUG - 2024-08-15 20:17:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:17:34 --> Input Class Initialized
INFO - 2024-08-15 20:17:34 --> Language Class Initialized
INFO - 2024-08-15 20:17:34 --> Loader Class Initialized
INFO - 2024-08-15 20:17:34 --> Helper loaded: application_helper
INFO - 2024-08-15 20:17:34 --> Helper loaded: url_helper
INFO - 2024-08-15 20:17:34 --> Helper loaded: file_helper
INFO - 2024-08-15 20:17:34 --> Helper loaded: security_helper
INFO - 2024-08-15 20:17:34 --> Helper loaded: date_helper
INFO - 2024-08-15 20:17:34 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:17:34 --> Helper loaded: form_helper
INFO - 2024-08-15 20:17:34 --> Helper loaded: language_helper
INFO - 2024-08-15 20:17:34 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:17:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:17:34 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:17:34 --> Upload Class Initialized
INFO - 2024-08-15 20:17:34 --> Controller Class Initialized
INFO - 2024-08-15 20:17:34 --> Model "M_admin" initialized
INFO - 2024-08-15 20:17:34 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:17:34 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:17:34 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:17:34 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:19:23 --> Config Class Initialized
INFO - 2024-08-15 20:19:23 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:19:23 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:19:23 --> Utf8 Class Initialized
INFO - 2024-08-15 20:19:23 --> URI Class Initialized
INFO - 2024-08-15 20:19:23 --> Router Class Initialized
INFO - 2024-08-15 20:19:23 --> Output Class Initialized
INFO - 2024-08-15 20:19:23 --> Security Class Initialized
DEBUG - 2024-08-15 20:19:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:19:23 --> Input Class Initialized
INFO - 2024-08-15 20:19:23 --> Language Class Initialized
INFO - 2024-08-15 20:19:23 --> Loader Class Initialized
INFO - 2024-08-15 20:19:23 --> Helper loaded: application_helper
INFO - 2024-08-15 20:19:23 --> Helper loaded: url_helper
INFO - 2024-08-15 20:19:23 --> Helper loaded: file_helper
INFO - 2024-08-15 20:19:23 --> Helper loaded: security_helper
INFO - 2024-08-15 20:19:24 --> Helper loaded: date_helper
INFO - 2024-08-15 20:19:24 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:19:24 --> Helper loaded: form_helper
INFO - 2024-08-15 20:19:24 --> Helper loaded: language_helper
INFO - 2024-08-15 20:19:24 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:19:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:19:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:19:24 --> Upload Class Initialized
INFO - 2024-08-15 20:19:24 --> Controller Class Initialized
INFO - 2024-08-15 20:19:24 --> Model "M_admin" initialized
INFO - 2024-08-15 20:19:24 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:19:24 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:19:24 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:19:24 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:23:10 --> Config Class Initialized
INFO - 2024-08-15 20:23:10 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:23:10 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:23:10 --> Utf8 Class Initialized
INFO - 2024-08-15 20:23:10 --> URI Class Initialized
INFO - 2024-08-15 20:23:10 --> Router Class Initialized
INFO - 2024-08-15 20:23:10 --> Output Class Initialized
INFO - 2024-08-15 20:23:10 --> Security Class Initialized
DEBUG - 2024-08-15 20:23:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:23:10 --> Input Class Initialized
INFO - 2024-08-15 20:23:10 --> Language Class Initialized
INFO - 2024-08-15 20:23:10 --> Loader Class Initialized
INFO - 2024-08-15 20:23:10 --> Helper loaded: application_helper
INFO - 2024-08-15 20:23:10 --> Helper loaded: url_helper
INFO - 2024-08-15 20:23:10 --> Helper loaded: file_helper
INFO - 2024-08-15 20:23:10 --> Helper loaded: security_helper
INFO - 2024-08-15 20:23:10 --> Helper loaded: date_helper
INFO - 2024-08-15 20:23:10 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:23:10 --> Helper loaded: form_helper
INFO - 2024-08-15 20:23:10 --> Helper loaded: language_helper
INFO - 2024-08-15 20:23:10 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:23:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:23:10 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:23:10 --> Upload Class Initialized
INFO - 2024-08-15 20:23:10 --> Controller Class Initialized
INFO - 2024-08-15 20:23:10 --> Model "M_admin" initialized
INFO - 2024-08-15 20:23:10 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:23:10 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:23:10 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:23:10 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:23:18 --> Config Class Initialized
INFO - 2024-08-15 20:23:18 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:23:18 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:23:18 --> Utf8 Class Initialized
INFO - 2024-08-15 20:23:18 --> URI Class Initialized
INFO - 2024-08-15 20:23:18 --> Router Class Initialized
INFO - 2024-08-15 20:23:18 --> Output Class Initialized
INFO - 2024-08-15 20:23:18 --> Security Class Initialized
DEBUG - 2024-08-15 20:23:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:23:18 --> Input Class Initialized
INFO - 2024-08-15 20:23:18 --> Language Class Initialized
INFO - 2024-08-15 20:23:18 --> Loader Class Initialized
INFO - 2024-08-15 20:23:18 --> Helper loaded: application_helper
INFO - 2024-08-15 20:23:18 --> Helper loaded: url_helper
INFO - 2024-08-15 20:23:18 --> Helper loaded: file_helper
INFO - 2024-08-15 20:23:18 --> Helper loaded: security_helper
INFO - 2024-08-15 20:23:18 --> Helper loaded: date_helper
INFO - 2024-08-15 20:23:18 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:23:18 --> Helper loaded: form_helper
INFO - 2024-08-15 20:23:18 --> Helper loaded: language_helper
INFO - 2024-08-15 20:23:18 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:23:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:23:18 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:23:18 --> Upload Class Initialized
INFO - 2024-08-15 20:23:18 --> Controller Class Initialized
INFO - 2024-08-15 20:23:18 --> Model "M_admin" initialized
INFO - 2024-08-15 20:23:18 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:23:18 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:23:18 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:23:18 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:23:25 --> Config Class Initialized
INFO - 2024-08-15 20:23:25 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:23:25 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:23:25 --> Utf8 Class Initialized
INFO - 2024-08-15 20:23:25 --> URI Class Initialized
INFO - 2024-08-15 20:23:25 --> Router Class Initialized
INFO - 2024-08-15 20:23:25 --> Output Class Initialized
INFO - 2024-08-15 20:23:25 --> Security Class Initialized
DEBUG - 2024-08-15 20:23:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:23:25 --> Input Class Initialized
INFO - 2024-08-15 20:23:25 --> Language Class Initialized
INFO - 2024-08-15 20:23:25 --> Loader Class Initialized
INFO - 2024-08-15 20:23:25 --> Helper loaded: application_helper
INFO - 2024-08-15 20:23:25 --> Helper loaded: url_helper
INFO - 2024-08-15 20:23:25 --> Helper loaded: file_helper
INFO - 2024-08-15 20:23:25 --> Helper loaded: security_helper
INFO - 2024-08-15 20:23:25 --> Helper loaded: date_helper
INFO - 2024-08-15 20:23:25 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:23:25 --> Helper loaded: form_helper
INFO - 2024-08-15 20:23:25 --> Helper loaded: language_helper
INFO - 2024-08-15 20:23:25 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:23:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:23:25 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:23:25 --> Upload Class Initialized
INFO - 2024-08-15 20:23:26 --> Controller Class Initialized
INFO - 2024-08-15 20:23:26 --> Model "M_admin" initialized
INFO - 2024-08-15 20:23:26 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:23:26 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:23:26 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:23:26 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:23:26 --> Config Class Initialized
INFO - 2024-08-15 20:23:26 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:23:26 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:23:26 --> Utf8 Class Initialized
INFO - 2024-08-15 20:23:26 --> URI Class Initialized
INFO - 2024-08-15 20:23:26 --> Router Class Initialized
INFO - 2024-08-15 20:23:26 --> Output Class Initialized
INFO - 2024-08-15 20:23:26 --> Security Class Initialized
DEBUG - 2024-08-15 20:23:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:23:26 --> Input Class Initialized
INFO - 2024-08-15 20:23:26 --> Language Class Initialized
INFO - 2024-08-15 20:23:26 --> Loader Class Initialized
INFO - 2024-08-15 20:23:26 --> Helper loaded: application_helper
INFO - 2024-08-15 20:23:26 --> Helper loaded: url_helper
INFO - 2024-08-15 20:23:26 --> Helper loaded: file_helper
INFO - 2024-08-15 20:23:26 --> Helper loaded: security_helper
INFO - 2024-08-15 20:23:26 --> Helper loaded: date_helper
INFO - 2024-08-15 20:23:26 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:23:26 --> Helper loaded: form_helper
INFO - 2024-08-15 20:23:26 --> Helper loaded: language_helper
INFO - 2024-08-15 20:23:26 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:23:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:23:26 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:23:26 --> Upload Class Initialized
INFO - 2024-08-15 20:23:26 --> Controller Class Initialized
INFO - 2024-08-15 20:23:26 --> Model "M_admin" initialized
INFO - 2024-08-15 20:23:26 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:23:26 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:23:26 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:23:26 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:23:26 --> Final output sent to browser
DEBUG - 2024-08-15 20:23:26 --> Total execution time: 0.0853
INFO - 2024-08-15 20:25:32 --> Config Class Initialized
INFO - 2024-08-15 20:25:32 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:25:32 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:25:32 --> Utf8 Class Initialized
INFO - 2024-08-15 20:25:32 --> URI Class Initialized
INFO - 2024-08-15 20:25:32 --> Router Class Initialized
INFO - 2024-08-15 20:25:32 --> Output Class Initialized
INFO - 2024-08-15 20:25:32 --> Security Class Initialized
DEBUG - 2024-08-15 20:25:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:25:32 --> Input Class Initialized
INFO - 2024-08-15 20:25:32 --> Language Class Initialized
INFO - 2024-08-15 20:25:32 --> Loader Class Initialized
INFO - 2024-08-15 20:25:32 --> Helper loaded: application_helper
INFO - 2024-08-15 20:25:32 --> Helper loaded: url_helper
INFO - 2024-08-15 20:25:32 --> Helper loaded: file_helper
INFO - 2024-08-15 20:25:32 --> Helper loaded: security_helper
INFO - 2024-08-15 20:25:32 --> Helper loaded: date_helper
INFO - 2024-08-15 20:25:32 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:25:32 --> Helper loaded: form_helper
INFO - 2024-08-15 20:25:32 --> Helper loaded: language_helper
INFO - 2024-08-15 20:25:32 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:25:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:25:32 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:25:32 --> Upload Class Initialized
INFO - 2024-08-15 20:25:32 --> Controller Class Initialized
INFO - 2024-08-15 20:25:32 --> Model "M_admin" initialized
INFO - 2024-08-15 20:25:32 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:25:32 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:25:32 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:25:32 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:25:39 --> Config Class Initialized
INFO - 2024-08-15 20:25:39 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:25:39 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:25:39 --> Utf8 Class Initialized
INFO - 2024-08-15 20:25:39 --> URI Class Initialized
INFO - 2024-08-15 20:25:39 --> Router Class Initialized
INFO - 2024-08-15 20:25:39 --> Output Class Initialized
INFO - 2024-08-15 20:25:39 --> Security Class Initialized
DEBUG - 2024-08-15 20:25:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:25:39 --> Input Class Initialized
INFO - 2024-08-15 20:25:39 --> Language Class Initialized
INFO - 2024-08-15 20:25:39 --> Loader Class Initialized
INFO - 2024-08-15 20:25:39 --> Helper loaded: application_helper
INFO - 2024-08-15 20:25:39 --> Helper loaded: url_helper
INFO - 2024-08-15 20:25:39 --> Helper loaded: file_helper
INFO - 2024-08-15 20:25:39 --> Helper loaded: security_helper
INFO - 2024-08-15 20:25:39 --> Helper loaded: date_helper
INFO - 2024-08-15 20:25:39 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:25:39 --> Helper loaded: form_helper
INFO - 2024-08-15 20:25:39 --> Helper loaded: language_helper
INFO - 2024-08-15 20:25:39 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:25:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:25:40 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:25:40 --> Upload Class Initialized
INFO - 2024-08-15 20:25:40 --> Controller Class Initialized
INFO - 2024-08-15 20:25:40 --> Model "M_admin" initialized
INFO - 2024-08-15 20:25:40 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:25:40 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:25:40 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:25:40 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 20:25:42 --> Config Class Initialized
INFO - 2024-08-15 20:25:42 --> Hooks Class Initialized
DEBUG - 2024-08-15 20:25:42 --> UTF-8 Support Enabled
INFO - 2024-08-15 20:25:42 --> Utf8 Class Initialized
INFO - 2024-08-15 20:25:42 --> URI Class Initialized
INFO - 2024-08-15 20:25:42 --> Router Class Initialized
INFO - 2024-08-15 20:25:42 --> Output Class Initialized
INFO - 2024-08-15 20:25:42 --> Security Class Initialized
DEBUG - 2024-08-15 20:25:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 20:25:42 --> Input Class Initialized
INFO - 2024-08-15 20:25:42 --> Language Class Initialized
INFO - 2024-08-15 20:25:42 --> Loader Class Initialized
INFO - 2024-08-15 20:25:42 --> Helper loaded: application_helper
INFO - 2024-08-15 20:25:42 --> Helper loaded: url_helper
INFO - 2024-08-15 20:25:42 --> Helper loaded: file_helper
INFO - 2024-08-15 20:25:42 --> Helper loaded: security_helper
INFO - 2024-08-15 20:25:42 --> Helper loaded: date_helper
INFO - 2024-08-15 20:25:42 --> Helper loaded: captcha_helper
INFO - 2024-08-15 20:25:42 --> Helper loaded: form_helper
INFO - 2024-08-15 20:25:42 --> Helper loaded: language_helper
INFO - 2024-08-15 20:25:42 --> Database Driver Class Initialized
DEBUG - 2024-08-15 20:25:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 20:25:42 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 20:25:42 --> Upload Class Initialized
INFO - 2024-08-15 20:25:42 --> Controller Class Initialized
INFO - 2024-08-15 20:25:42 --> Model "M_admin" initialized
INFO - 2024-08-15 20:25:42 --> Model "M_config" initialized
DEBUG - 2024-08-15 20:25:42 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 20:25:42 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 20:25:42 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:25:25 --> Config Class Initialized
INFO - 2024-08-15 22:25:25 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:25 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:25 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:25 --> URI Class Initialized
INFO - 2024-08-15 22:25:25 --> Router Class Initialized
INFO - 2024-08-15 22:25:25 --> Output Class Initialized
INFO - 2024-08-15 22:25:25 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:25 --> Input Class Initialized
INFO - 2024-08-15 22:25:25 --> Language Class Initialized
INFO - 2024-08-15 22:25:25 --> Loader Class Initialized
INFO - 2024-08-15 22:25:25 --> Helper loaded: application_helper
INFO - 2024-08-15 22:25:25 --> Helper loaded: url_helper
INFO - 2024-08-15 22:25:25 --> Helper loaded: file_helper
INFO - 2024-08-15 22:25:25 --> Helper loaded: security_helper
INFO - 2024-08-15 22:25:25 --> Helper loaded: date_helper
INFO - 2024-08-15 22:25:25 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:25:25 --> Helper loaded: form_helper
INFO - 2024-08-15 22:25:25 --> Helper loaded: language_helper
INFO - 2024-08-15 22:25:25 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:25:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:25:25 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:25:25 --> Upload Class Initialized
INFO - 2024-08-15 22:25:25 --> Controller Class Initialized
INFO - 2024-08-15 22:25:25 --> Model "M_admin" initialized
INFO - 2024-08-15 22:25:25 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:25:25 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:25:25 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:25:25 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:25:25 --> Config Class Initialized
INFO - 2024-08-15 22:25:25 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:25 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:25 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:25 --> URI Class Initialized
INFO - 2024-08-15 22:25:25 --> Router Class Initialized
INFO - 2024-08-15 22:25:25 --> Output Class Initialized
INFO - 2024-08-15 22:25:25 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:25 --> Input Class Initialized
INFO - 2024-08-15 22:25:25 --> Language Class Initialized
ERROR - 2024-08-15 22:25:25 --> 404 Page Not Found: Wp_login/index
INFO - 2024-08-15 22:25:29 --> Config Class Initialized
INFO - 2024-08-15 22:25:29 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:29 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:29 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:29 --> URI Class Initialized
INFO - 2024-08-15 22:25:29 --> Router Class Initialized
INFO - 2024-08-15 22:25:29 --> Output Class Initialized
INFO - 2024-08-15 22:25:29 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:29 --> Input Class Initialized
INFO - 2024-08-15 22:25:29 --> Language Class Initialized
INFO - 2024-08-15 22:25:29 --> Loader Class Initialized
INFO - 2024-08-15 22:25:29 --> Helper loaded: application_helper
INFO - 2024-08-15 22:25:29 --> Helper loaded: url_helper
INFO - 2024-08-15 22:25:29 --> Helper loaded: file_helper
INFO - 2024-08-15 22:25:29 --> Helper loaded: security_helper
INFO - 2024-08-15 22:25:29 --> Helper loaded: date_helper
INFO - 2024-08-15 22:25:29 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:25:29 --> Helper loaded: form_helper
INFO - 2024-08-15 22:25:29 --> Helper loaded: language_helper
INFO - 2024-08-15 22:25:29 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:25:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:25:29 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:25:29 --> Upload Class Initialized
INFO - 2024-08-15 22:25:29 --> Controller Class Initialized
INFO - 2024-08-15 22:25:29 --> Model "M_admin" initialized
INFO - 2024-08-15 22:25:29 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:25:29 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:25:29 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:25:29 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:25:30 --> Config Class Initialized
INFO - 2024-08-15 22:25:30 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:30 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:30 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:30 --> URI Class Initialized
INFO - 2024-08-15 22:25:30 --> Router Class Initialized
INFO - 2024-08-15 22:25:30 --> Output Class Initialized
INFO - 2024-08-15 22:25:30 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:30 --> Input Class Initialized
INFO - 2024-08-15 22:25:30 --> Language Class Initialized
INFO - 2024-08-15 22:25:30 --> Loader Class Initialized
INFO - 2024-08-15 22:25:30 --> Helper loaded: application_helper
INFO - 2024-08-15 22:25:30 --> Helper loaded: url_helper
INFO - 2024-08-15 22:25:30 --> Helper loaded: file_helper
INFO - 2024-08-15 22:25:30 --> Helper loaded: security_helper
INFO - 2024-08-15 22:25:30 --> Helper loaded: date_helper
INFO - 2024-08-15 22:25:30 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:25:30 --> Helper loaded: form_helper
INFO - 2024-08-15 22:25:30 --> Helper loaded: language_helper
INFO - 2024-08-15 22:25:30 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:25:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:25:30 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:25:30 --> Upload Class Initialized
INFO - 2024-08-15 22:25:30 --> Controller Class Initialized
INFO - 2024-08-15 22:25:30 --> Model "M_admin" initialized
INFO - 2024-08-15 22:25:30 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:25:30 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:25:30 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:25:30 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:25:39 --> Config Class Initialized
INFO - 2024-08-15 22:25:39 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:39 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:39 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:39 --> URI Class Initialized
DEBUG - 2024-08-15 22:25:39 --> No URI present. Default controller set.
INFO - 2024-08-15 22:25:39 --> Router Class Initialized
INFO - 2024-08-15 22:25:39 --> Output Class Initialized
INFO - 2024-08-15 22:25:39 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:39 --> Input Class Initialized
INFO - 2024-08-15 22:25:39 --> Language Class Initialized
INFO - 2024-08-15 22:25:39 --> Loader Class Initialized
INFO - 2024-08-15 22:25:39 --> Helper loaded: application_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: url_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: file_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: security_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: date_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: form_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: language_helper
INFO - 2024-08-15 22:25:39 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:25:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:25:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:25:39 --> Upload Class Initialized
INFO - 2024-08-15 22:25:39 --> Controller Class Initialized
INFO - 2024-08-15 22:25:39 --> Model "M_admin" initialized
INFO - 2024-08-15 22:25:39 --> Model "M_config" initialized
ERROR - 2024-08-15 22:25:39 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:25:39 --> Config Class Initialized
INFO - 2024-08-15 22:25:39 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:39 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:39 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:39 --> URI Class Initialized
INFO - 2024-08-15 22:25:39 --> Router Class Initialized
INFO - 2024-08-15 22:25:39 --> Output Class Initialized
INFO - 2024-08-15 22:25:39 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:39 --> Input Class Initialized
INFO - 2024-08-15 22:25:39 --> Language Class Initialized
INFO - 2024-08-15 22:25:39 --> Loader Class Initialized
INFO - 2024-08-15 22:25:39 --> Helper loaded: application_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: url_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: file_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: security_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: date_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: form_helper
INFO - 2024-08-15 22:25:39 --> Helper loaded: language_helper
INFO - 2024-08-15 22:25:39 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:25:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:25:39 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:25:39 --> Upload Class Initialized
INFO - 2024-08-15 22:25:39 --> Controller Class Initialized
INFO - 2024-08-15 22:25:39 --> Model "M_login" initialized
INFO - 2024-08-15 22:25:39 --> Model "M_admin" initialized
INFO - 2024-08-15 22:25:39 --> Model "M_config" initialized
ERROR - 2024-08-15 22:25:39 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:25:39 --> File loaded: C:\xampp\htdocs\ci_wms\application\views\admin/login.php
INFO - 2024-08-15 22:25:39 --> Final output sent to browser
DEBUG - 2024-08-15 22:25:39 --> Total execution time: 0.0894
INFO - 2024-08-15 22:25:44 --> Config Class Initialized
INFO - 2024-08-15 22:25:44 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:44 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:44 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:44 --> URI Class Initialized
INFO - 2024-08-15 22:25:44 --> Router Class Initialized
INFO - 2024-08-15 22:25:44 --> Output Class Initialized
INFO - 2024-08-15 22:25:44 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:44 --> Input Class Initialized
INFO - 2024-08-15 22:25:44 --> Language Class Initialized
INFO - 2024-08-15 22:25:44 --> Loader Class Initialized
INFO - 2024-08-15 22:25:44 --> Helper loaded: application_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: url_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: file_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: security_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: date_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: form_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: language_helper
INFO - 2024-08-15 22:25:44 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:25:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:25:44 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:25:44 --> Upload Class Initialized
INFO - 2024-08-15 22:25:44 --> Controller Class Initialized
INFO - 2024-08-15 22:25:44 --> Model "M_login" initialized
INFO - 2024-08-15 22:25:44 --> Model "M_admin" initialized
INFO - 2024-08-15 22:25:44 --> Model "M_config" initialized
ERROR - 2024-08-15 22:25:44 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:25:44 --> Config Class Initialized
INFO - 2024-08-15 22:25:44 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:44 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:44 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:44 --> URI Class Initialized
INFO - 2024-08-15 22:25:44 --> Router Class Initialized
INFO - 2024-08-15 22:25:44 --> Output Class Initialized
INFO - 2024-08-15 22:25:44 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:44 --> Input Class Initialized
INFO - 2024-08-15 22:25:44 --> Language Class Initialized
INFO - 2024-08-15 22:25:44 --> Loader Class Initialized
INFO - 2024-08-15 22:25:44 --> Helper loaded: application_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: url_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: file_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: security_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: date_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: form_helper
INFO - 2024-08-15 22:25:44 --> Helper loaded: language_helper
INFO - 2024-08-15 22:25:44 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:25:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:25:44 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:25:44 --> Upload Class Initialized
INFO - 2024-08-15 22:25:44 --> Controller Class Initialized
INFO - 2024-08-15 22:25:44 --> Model "M_admin" initialized
INFO - 2024-08-15 22:25:44 --> Model "M_config" initialized
ERROR - 2024-08-15 22:25:44 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:25:50 --> Config Class Initialized
INFO - 2024-08-15 22:25:50 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:50 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:50 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:50 --> URI Class Initialized
INFO - 2024-08-15 22:25:50 --> Router Class Initialized
INFO - 2024-08-15 22:25:50 --> Output Class Initialized
INFO - 2024-08-15 22:25:50 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:50 --> Input Class Initialized
INFO - 2024-08-15 22:25:50 --> Language Class Initialized
INFO - 2024-08-15 22:25:50 --> Loader Class Initialized
INFO - 2024-08-15 22:25:50 --> Helper loaded: application_helper
INFO - 2024-08-15 22:25:50 --> Helper loaded: url_helper
INFO - 2024-08-15 22:25:50 --> Helper loaded: file_helper
INFO - 2024-08-15 22:25:50 --> Helper loaded: security_helper
INFO - 2024-08-15 22:25:50 --> Helper loaded: date_helper
INFO - 2024-08-15 22:25:50 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:25:50 --> Helper loaded: form_helper
INFO - 2024-08-15 22:25:50 --> Helper loaded: language_helper
INFO - 2024-08-15 22:25:50 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:25:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:25:50 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:25:50 --> Upload Class Initialized
INFO - 2024-08-15 22:25:50 --> Controller Class Initialized
INFO - 2024-08-15 22:25:50 --> Model "M_admin" initialized
INFO - 2024-08-15 22:25:50 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:25:50 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:25:50 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:25:50 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:25:55 --> Config Class Initialized
INFO - 2024-08-15 22:25:55 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:55 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:55 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:55 --> URI Class Initialized
INFO - 2024-08-15 22:25:55 --> Router Class Initialized
INFO - 2024-08-15 22:25:55 --> Output Class Initialized
INFO - 2024-08-15 22:25:55 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:55 --> Input Class Initialized
INFO - 2024-08-15 22:25:55 --> Language Class Initialized
INFO - 2024-08-15 22:25:55 --> Loader Class Initialized
INFO - 2024-08-15 22:25:55 --> Helper loaded: application_helper
INFO - 2024-08-15 22:25:55 --> Helper loaded: url_helper
INFO - 2024-08-15 22:25:55 --> Helper loaded: file_helper
INFO - 2024-08-15 22:25:55 --> Helper loaded: security_helper
INFO - 2024-08-15 22:25:55 --> Helper loaded: date_helper
INFO - 2024-08-15 22:25:55 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:25:55 --> Helper loaded: form_helper
INFO - 2024-08-15 22:25:55 --> Helper loaded: language_helper
INFO - 2024-08-15 22:25:55 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:25:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:25:55 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:25:55 --> Upload Class Initialized
INFO - 2024-08-15 22:25:55 --> Controller Class Initialized
INFO - 2024-08-15 22:25:55 --> Model "M_admin" initialized
INFO - 2024-08-15 22:25:55 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:25:55 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:25:55 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:25:55 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:25:59 --> Config Class Initialized
INFO - 2024-08-15 22:25:59 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:25:59 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:25:59 --> Utf8 Class Initialized
INFO - 2024-08-15 22:25:59 --> URI Class Initialized
INFO - 2024-08-15 22:25:59 --> Router Class Initialized
INFO - 2024-08-15 22:25:59 --> Output Class Initialized
INFO - 2024-08-15 22:25:59 --> Security Class Initialized
DEBUG - 2024-08-15 22:25:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:25:59 --> Input Class Initialized
INFO - 2024-08-15 22:25:59 --> Language Class Initialized
INFO - 2024-08-15 22:25:59 --> Loader Class Initialized
INFO - 2024-08-15 22:25:59 --> Helper loaded: application_helper
INFO - 2024-08-15 22:25:59 --> Helper loaded: url_helper
INFO - 2024-08-15 22:25:59 --> Helper loaded: file_helper
INFO - 2024-08-15 22:25:59 --> Helper loaded: security_helper
INFO - 2024-08-15 22:25:59 --> Helper loaded: date_helper
INFO - 2024-08-15 22:25:59 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:25:59 --> Helper loaded: form_helper
INFO - 2024-08-15 22:25:59 --> Helper loaded: language_helper
INFO - 2024-08-15 22:25:59 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:25:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:25:59 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:25:59 --> Upload Class Initialized
INFO - 2024-08-15 22:25:59 --> Controller Class Initialized
INFO - 2024-08-15 22:25:59 --> Model "M_admin" initialized
INFO - 2024-08-15 22:25:59 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:25:59 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:25:59 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:25:59 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:44:13 --> Config Class Initialized
INFO - 2024-08-15 22:44:13 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:44:13 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:44:13 --> Utf8 Class Initialized
INFO - 2024-08-15 22:44:13 --> URI Class Initialized
INFO - 2024-08-15 22:44:13 --> Router Class Initialized
INFO - 2024-08-15 22:44:13 --> Output Class Initialized
INFO - 2024-08-15 22:44:13 --> Security Class Initialized
DEBUG - 2024-08-15 22:44:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:44:13 --> Input Class Initialized
INFO - 2024-08-15 22:44:13 --> Language Class Initialized
INFO - 2024-08-15 22:44:13 --> Loader Class Initialized
INFO - 2024-08-15 22:44:13 --> Helper loaded: application_helper
INFO - 2024-08-15 22:44:13 --> Helper loaded: url_helper
INFO - 2024-08-15 22:44:13 --> Helper loaded: file_helper
INFO - 2024-08-15 22:44:13 --> Helper loaded: security_helper
INFO - 2024-08-15 22:44:13 --> Helper loaded: date_helper
INFO - 2024-08-15 22:44:13 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:44:13 --> Helper loaded: form_helper
INFO - 2024-08-15 22:44:13 --> Helper loaded: language_helper
INFO - 2024-08-15 22:44:13 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:44:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:44:13 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:44:13 --> Upload Class Initialized
INFO - 2024-08-15 22:44:13 --> Controller Class Initialized
INFO - 2024-08-15 22:44:13 --> Model "M_admin" initialized
INFO - 2024-08-15 22:44:13 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:44:13 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:44:13 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:44:13 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:44:15 --> Config Class Initialized
INFO - 2024-08-15 22:44:15 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:44:15 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:44:15 --> Utf8 Class Initialized
INFO - 2024-08-15 22:44:15 --> URI Class Initialized
INFO - 2024-08-15 22:44:15 --> Router Class Initialized
INFO - 2024-08-15 22:44:15 --> Output Class Initialized
INFO - 2024-08-15 22:44:15 --> Security Class Initialized
DEBUG - 2024-08-15 22:44:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:44:15 --> Input Class Initialized
INFO - 2024-08-15 22:44:15 --> Language Class Initialized
INFO - 2024-08-15 22:44:15 --> Loader Class Initialized
INFO - 2024-08-15 22:44:15 --> Helper loaded: application_helper
INFO - 2024-08-15 22:44:15 --> Helper loaded: url_helper
INFO - 2024-08-15 22:44:15 --> Helper loaded: file_helper
INFO - 2024-08-15 22:44:15 --> Helper loaded: security_helper
INFO - 2024-08-15 22:44:15 --> Helper loaded: date_helper
INFO - 2024-08-15 22:44:15 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:44:15 --> Helper loaded: form_helper
INFO - 2024-08-15 22:44:15 --> Helper loaded: language_helper
INFO - 2024-08-15 22:44:15 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:44:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:44:15 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:44:15 --> Upload Class Initialized
INFO - 2024-08-15 22:44:15 --> Controller Class Initialized
INFO - 2024-08-15 22:44:15 --> Model "M_admin" initialized
INFO - 2024-08-15 22:44:15 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:44:15 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:44:15 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:44:15 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:44:17 --> Config Class Initialized
INFO - 2024-08-15 22:44:17 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:44:17 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:44:17 --> Utf8 Class Initialized
INFO - 2024-08-15 22:44:17 --> URI Class Initialized
INFO - 2024-08-15 22:44:17 --> Router Class Initialized
INFO - 2024-08-15 22:44:17 --> Output Class Initialized
INFO - 2024-08-15 22:44:17 --> Security Class Initialized
DEBUG - 2024-08-15 22:44:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:44:17 --> Input Class Initialized
INFO - 2024-08-15 22:44:17 --> Language Class Initialized
INFO - 2024-08-15 22:44:17 --> Loader Class Initialized
INFO - 2024-08-15 22:44:17 --> Helper loaded: application_helper
INFO - 2024-08-15 22:44:17 --> Helper loaded: url_helper
INFO - 2024-08-15 22:44:17 --> Helper loaded: file_helper
INFO - 2024-08-15 22:44:17 --> Helper loaded: security_helper
INFO - 2024-08-15 22:44:17 --> Helper loaded: date_helper
INFO - 2024-08-15 22:44:17 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:44:17 --> Helper loaded: form_helper
INFO - 2024-08-15 22:44:17 --> Helper loaded: language_helper
INFO - 2024-08-15 22:44:17 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:44:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:44:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:44:17 --> Upload Class Initialized
INFO - 2024-08-15 22:44:17 --> Controller Class Initialized
INFO - 2024-08-15 22:44:17 --> Model "M_admin" initialized
INFO - 2024-08-15 22:44:17 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:44:17 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:44:17 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:44:17 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:44:18 --> Config Class Initialized
INFO - 2024-08-15 22:44:18 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:44:18 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:44:18 --> Utf8 Class Initialized
INFO - 2024-08-15 22:44:18 --> URI Class Initialized
INFO - 2024-08-15 22:44:18 --> Router Class Initialized
INFO - 2024-08-15 22:44:18 --> Output Class Initialized
INFO - 2024-08-15 22:44:18 --> Security Class Initialized
DEBUG - 2024-08-15 22:44:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:44:18 --> Input Class Initialized
INFO - 2024-08-15 22:44:18 --> Language Class Initialized
INFO - 2024-08-15 22:44:18 --> Loader Class Initialized
INFO - 2024-08-15 22:44:18 --> Helper loaded: application_helper
INFO - 2024-08-15 22:44:18 --> Helper loaded: url_helper
INFO - 2024-08-15 22:44:18 --> Helper loaded: file_helper
INFO - 2024-08-15 22:44:18 --> Helper loaded: security_helper
INFO - 2024-08-15 22:44:18 --> Helper loaded: date_helper
INFO - 2024-08-15 22:44:18 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:44:18 --> Helper loaded: form_helper
INFO - 2024-08-15 22:44:18 --> Helper loaded: language_helper
INFO - 2024-08-15 22:44:18 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:44:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:44:19 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:44:19 --> Upload Class Initialized
INFO - 2024-08-15 22:44:19 --> Controller Class Initialized
INFO - 2024-08-15 22:44:19 --> Model "M_admin" initialized
INFO - 2024-08-15 22:44:19 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:44:19 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:44:19 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:44:19 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:44:25 --> Config Class Initialized
INFO - 2024-08-15 22:44:25 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:44:25 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:44:25 --> Utf8 Class Initialized
INFO - 2024-08-15 22:44:25 --> URI Class Initialized
INFO - 2024-08-15 22:44:25 --> Router Class Initialized
INFO - 2024-08-15 22:44:25 --> Output Class Initialized
INFO - 2024-08-15 22:44:25 --> Security Class Initialized
DEBUG - 2024-08-15 22:44:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:44:25 --> Input Class Initialized
INFO - 2024-08-15 22:44:25 --> Language Class Initialized
INFO - 2024-08-15 22:44:25 --> Loader Class Initialized
INFO - 2024-08-15 22:44:25 --> Helper loaded: application_helper
INFO - 2024-08-15 22:44:25 --> Helper loaded: url_helper
INFO - 2024-08-15 22:44:25 --> Helper loaded: file_helper
INFO - 2024-08-15 22:44:25 --> Helper loaded: security_helper
INFO - 2024-08-15 22:44:25 --> Helper loaded: date_helper
INFO - 2024-08-15 22:44:25 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:44:25 --> Helper loaded: form_helper
INFO - 2024-08-15 22:44:25 --> Helper loaded: language_helper
INFO - 2024-08-15 22:44:25 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:44:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:44:25 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:44:25 --> Upload Class Initialized
INFO - 2024-08-15 22:44:25 --> Controller Class Initialized
INFO - 2024-08-15 22:44:25 --> Model "M_admin" initialized
INFO - 2024-08-15 22:44:25 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:44:25 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:44:25 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:44:25 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:45:06 --> Config Class Initialized
INFO - 2024-08-15 22:45:06 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:45:06 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:45:06 --> Utf8 Class Initialized
INFO - 2024-08-15 22:45:06 --> URI Class Initialized
INFO - 2024-08-15 22:45:06 --> Router Class Initialized
INFO - 2024-08-15 22:45:06 --> Output Class Initialized
INFO - 2024-08-15 22:45:06 --> Security Class Initialized
DEBUG - 2024-08-15 22:45:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:45:06 --> Input Class Initialized
INFO - 2024-08-15 22:45:06 --> Language Class Initialized
INFO - 2024-08-15 22:45:06 --> Loader Class Initialized
INFO - 2024-08-15 22:45:06 --> Helper loaded: application_helper
INFO - 2024-08-15 22:45:06 --> Helper loaded: url_helper
INFO - 2024-08-15 22:45:06 --> Helper loaded: file_helper
INFO - 2024-08-15 22:45:06 --> Helper loaded: security_helper
INFO - 2024-08-15 22:45:06 --> Helper loaded: date_helper
INFO - 2024-08-15 22:45:06 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:45:06 --> Helper loaded: form_helper
INFO - 2024-08-15 22:45:06 --> Helper loaded: language_helper
INFO - 2024-08-15 22:45:06 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:45:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:45:06 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:45:06 --> Upload Class Initialized
INFO - 2024-08-15 22:45:06 --> Controller Class Initialized
INFO - 2024-08-15 22:45:06 --> Model "M_admin" initialized
INFO - 2024-08-15 22:45:06 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:45:06 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:45:06 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:45:06 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:45:26 --> Config Class Initialized
INFO - 2024-08-15 22:45:26 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:45:26 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:45:26 --> Utf8 Class Initialized
INFO - 2024-08-15 22:45:26 --> URI Class Initialized
INFO - 2024-08-15 22:45:26 --> Router Class Initialized
INFO - 2024-08-15 22:45:26 --> Output Class Initialized
INFO - 2024-08-15 22:45:26 --> Security Class Initialized
DEBUG - 2024-08-15 22:45:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:45:26 --> Input Class Initialized
INFO - 2024-08-15 22:45:26 --> Language Class Initialized
INFO - 2024-08-15 22:45:26 --> Loader Class Initialized
INFO - 2024-08-15 22:45:26 --> Helper loaded: application_helper
INFO - 2024-08-15 22:45:26 --> Helper loaded: url_helper
INFO - 2024-08-15 22:45:26 --> Helper loaded: file_helper
INFO - 2024-08-15 22:45:26 --> Helper loaded: security_helper
INFO - 2024-08-15 22:45:26 --> Helper loaded: date_helper
INFO - 2024-08-15 22:45:26 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:45:26 --> Helper loaded: form_helper
INFO - 2024-08-15 22:45:26 --> Helper loaded: language_helper
INFO - 2024-08-15 22:45:26 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:45:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:45:26 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:45:26 --> Upload Class Initialized
INFO - 2024-08-15 22:45:26 --> Controller Class Initialized
INFO - 2024-08-15 22:45:26 --> Model "M_admin" initialized
INFO - 2024-08-15 22:45:26 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:45:26 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:45:26 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:45:26 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:45:27 --> Config Class Initialized
INFO - 2024-08-15 22:45:27 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:45:27 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:45:27 --> Utf8 Class Initialized
INFO - 2024-08-15 22:45:27 --> URI Class Initialized
INFO - 2024-08-15 22:45:27 --> Router Class Initialized
INFO - 2024-08-15 22:45:27 --> Output Class Initialized
INFO - 2024-08-15 22:45:27 --> Security Class Initialized
DEBUG - 2024-08-15 22:45:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:45:27 --> Input Class Initialized
INFO - 2024-08-15 22:45:27 --> Language Class Initialized
INFO - 2024-08-15 22:45:27 --> Loader Class Initialized
INFO - 2024-08-15 22:45:27 --> Helper loaded: application_helper
INFO - 2024-08-15 22:45:27 --> Helper loaded: url_helper
INFO - 2024-08-15 22:45:27 --> Helper loaded: file_helper
INFO - 2024-08-15 22:45:27 --> Helper loaded: security_helper
INFO - 2024-08-15 22:45:27 --> Helper loaded: date_helper
INFO - 2024-08-15 22:45:27 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:45:27 --> Helper loaded: form_helper
INFO - 2024-08-15 22:45:27 --> Helper loaded: language_helper
INFO - 2024-08-15 22:45:27 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:45:27 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:45:27 --> Upload Class Initialized
INFO - 2024-08-15 22:45:27 --> Controller Class Initialized
INFO - 2024-08-15 22:45:27 --> Model "M_admin" initialized
INFO - 2024-08-15 22:45:27 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:45:27 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:45:27 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:45:27 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:46:17 --> Config Class Initialized
INFO - 2024-08-15 22:46:17 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:46:17 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:46:17 --> Utf8 Class Initialized
INFO - 2024-08-15 22:46:17 --> URI Class Initialized
INFO - 2024-08-15 22:46:17 --> Router Class Initialized
INFO - 2024-08-15 22:46:17 --> Output Class Initialized
INFO - 2024-08-15 22:46:17 --> Security Class Initialized
DEBUG - 2024-08-15 22:46:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:46:17 --> Input Class Initialized
INFO - 2024-08-15 22:46:17 --> Language Class Initialized
INFO - 2024-08-15 22:46:17 --> Loader Class Initialized
INFO - 2024-08-15 22:46:17 --> Helper loaded: application_helper
INFO - 2024-08-15 22:46:17 --> Helper loaded: url_helper
INFO - 2024-08-15 22:46:17 --> Helper loaded: file_helper
INFO - 2024-08-15 22:46:17 --> Helper loaded: security_helper
INFO - 2024-08-15 22:46:17 --> Helper loaded: date_helper
INFO - 2024-08-15 22:46:17 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:46:17 --> Helper loaded: form_helper
INFO - 2024-08-15 22:46:17 --> Helper loaded: language_helper
INFO - 2024-08-15 22:46:17 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:46:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:46:17 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:46:17 --> Upload Class Initialized
INFO - 2024-08-15 22:46:18 --> Controller Class Initialized
INFO - 2024-08-15 22:46:18 --> Model "M_admin" initialized
INFO - 2024-08-15 22:46:18 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:46:18 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:46:18 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:46:18 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:46:18 --> Config Class Initialized
INFO - 2024-08-15 22:46:18 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:46:18 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:46:18 --> Utf8 Class Initialized
INFO - 2024-08-15 22:46:18 --> URI Class Initialized
INFO - 2024-08-15 22:46:18 --> Router Class Initialized
INFO - 2024-08-15 22:46:18 --> Output Class Initialized
INFO - 2024-08-15 22:46:18 --> Security Class Initialized
DEBUG - 2024-08-15 22:46:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:46:18 --> Input Class Initialized
INFO - 2024-08-15 22:46:18 --> Language Class Initialized
INFO - 2024-08-15 22:46:18 --> Loader Class Initialized
INFO - 2024-08-15 22:46:18 --> Helper loaded: application_helper
INFO - 2024-08-15 22:46:18 --> Helper loaded: url_helper
INFO - 2024-08-15 22:46:18 --> Helper loaded: file_helper
INFO - 2024-08-15 22:46:18 --> Helper loaded: security_helper
INFO - 2024-08-15 22:46:18 --> Helper loaded: date_helper
INFO - 2024-08-15 22:46:18 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:46:18 --> Helper loaded: form_helper
INFO - 2024-08-15 22:46:18 --> Helper loaded: language_helper
INFO - 2024-08-15 22:46:18 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:46:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:46:18 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:46:18 --> Upload Class Initialized
INFO - 2024-08-15 22:46:18 --> Controller Class Initialized
INFO - 2024-08-15 22:46:18 --> Model "M_admin" initialized
INFO - 2024-08-15 22:46:18 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:46:18 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:46:18 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:46:18 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:46:19 --> Config Class Initialized
INFO - 2024-08-15 22:46:19 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:46:19 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:46:19 --> Utf8 Class Initialized
INFO - 2024-08-15 22:46:19 --> URI Class Initialized
INFO - 2024-08-15 22:46:19 --> Router Class Initialized
INFO - 2024-08-15 22:46:19 --> Output Class Initialized
INFO - 2024-08-15 22:46:19 --> Security Class Initialized
DEBUG - 2024-08-15 22:46:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:46:19 --> Input Class Initialized
INFO - 2024-08-15 22:46:19 --> Language Class Initialized
INFO - 2024-08-15 22:46:19 --> Loader Class Initialized
INFO - 2024-08-15 22:46:19 --> Helper loaded: application_helper
INFO - 2024-08-15 22:46:19 --> Helper loaded: url_helper
INFO - 2024-08-15 22:46:19 --> Helper loaded: file_helper
INFO - 2024-08-15 22:46:19 --> Helper loaded: security_helper
INFO - 2024-08-15 22:46:19 --> Helper loaded: date_helper
INFO - 2024-08-15 22:46:19 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:46:19 --> Helper loaded: form_helper
INFO - 2024-08-15 22:46:19 --> Helper loaded: language_helper
INFO - 2024-08-15 22:46:19 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:46:19 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:46:19 --> Upload Class Initialized
INFO - 2024-08-15 22:46:19 --> Controller Class Initialized
INFO - 2024-08-15 22:46:20 --> Model "M_admin" initialized
INFO - 2024-08-15 22:46:20 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:46:20 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:46:20 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:46:20 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:46:24 --> Config Class Initialized
INFO - 2024-08-15 22:46:24 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:46:24 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:46:24 --> Utf8 Class Initialized
INFO - 2024-08-15 22:46:24 --> URI Class Initialized
INFO - 2024-08-15 22:46:25 --> Router Class Initialized
INFO - 2024-08-15 22:46:25 --> Output Class Initialized
INFO - 2024-08-15 22:46:25 --> Security Class Initialized
DEBUG - 2024-08-15 22:46:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:46:25 --> Input Class Initialized
INFO - 2024-08-15 22:46:25 --> Language Class Initialized
INFO - 2024-08-15 22:46:25 --> Loader Class Initialized
INFO - 2024-08-15 22:46:25 --> Helper loaded: application_helper
INFO - 2024-08-15 22:46:25 --> Helper loaded: url_helper
INFO - 2024-08-15 22:46:25 --> Helper loaded: file_helper
INFO - 2024-08-15 22:46:25 --> Helper loaded: security_helper
INFO - 2024-08-15 22:46:25 --> Helper loaded: date_helper
INFO - 2024-08-15 22:46:25 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:46:25 --> Helper loaded: form_helper
INFO - 2024-08-15 22:46:25 --> Helper loaded: language_helper
INFO - 2024-08-15 22:46:25 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:46:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:46:25 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:46:25 --> Upload Class Initialized
INFO - 2024-08-15 22:46:25 --> Controller Class Initialized
INFO - 2024-08-15 22:46:25 --> Model "M_admin" initialized
INFO - 2024-08-15 22:46:25 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:46:25 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:46:25 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:46:25 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:46:28 --> Config Class Initialized
INFO - 2024-08-15 22:46:28 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:46:28 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:46:28 --> Utf8 Class Initialized
INFO - 2024-08-15 22:46:28 --> URI Class Initialized
INFO - 2024-08-15 22:46:28 --> Router Class Initialized
INFO - 2024-08-15 22:46:28 --> Output Class Initialized
INFO - 2024-08-15 22:46:28 --> Security Class Initialized
DEBUG - 2024-08-15 22:46:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:46:28 --> Input Class Initialized
INFO - 2024-08-15 22:46:28 --> Language Class Initialized
INFO - 2024-08-15 22:46:28 --> Loader Class Initialized
INFO - 2024-08-15 22:46:28 --> Helper loaded: application_helper
INFO - 2024-08-15 22:46:28 --> Helper loaded: url_helper
INFO - 2024-08-15 22:46:28 --> Helper loaded: file_helper
INFO - 2024-08-15 22:46:28 --> Helper loaded: security_helper
INFO - 2024-08-15 22:46:28 --> Helper loaded: date_helper
INFO - 2024-08-15 22:46:28 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:46:28 --> Helper loaded: form_helper
INFO - 2024-08-15 22:46:28 --> Helper loaded: language_helper
INFO - 2024-08-15 22:46:28 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:46:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:46:28 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:46:28 --> Upload Class Initialized
INFO - 2024-08-15 22:46:28 --> Controller Class Initialized
INFO - 2024-08-15 22:46:28 --> Model "M_admin" initialized
INFO - 2024-08-15 22:46:28 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:46:28 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:46:28 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:46:28 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:53:25 --> Config Class Initialized
INFO - 2024-08-15 22:53:25 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:53:25 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:53:25 --> Utf8 Class Initialized
INFO - 2024-08-15 22:53:25 --> URI Class Initialized
INFO - 2024-08-15 22:53:25 --> Router Class Initialized
INFO - 2024-08-15 22:53:25 --> Output Class Initialized
INFO - 2024-08-15 22:53:25 --> Security Class Initialized
DEBUG - 2024-08-15 22:53:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:53:25 --> Input Class Initialized
INFO - 2024-08-15 22:53:25 --> Language Class Initialized
INFO - 2024-08-15 22:53:25 --> Loader Class Initialized
INFO - 2024-08-15 22:53:25 --> Helper loaded: application_helper
INFO - 2024-08-15 22:53:25 --> Helper loaded: url_helper
INFO - 2024-08-15 22:53:25 --> Helper loaded: file_helper
INFO - 2024-08-15 22:53:25 --> Helper loaded: security_helper
INFO - 2024-08-15 22:53:25 --> Helper loaded: date_helper
INFO - 2024-08-15 22:53:25 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:53:25 --> Helper loaded: form_helper
INFO - 2024-08-15 22:53:25 --> Helper loaded: language_helper
INFO - 2024-08-15 22:53:25 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:53:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:53:25 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:53:25 --> Upload Class Initialized
INFO - 2024-08-15 22:53:25 --> Controller Class Initialized
INFO - 2024-08-15 22:53:25 --> Model "M_admin" initialized
INFO - 2024-08-15 22:53:25 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:53:25 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:53:25 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:53:25 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:53:26 --> Config Class Initialized
INFO - 2024-08-15 22:53:26 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:53:26 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:53:26 --> Utf8 Class Initialized
INFO - 2024-08-15 22:53:26 --> URI Class Initialized
INFO - 2024-08-15 22:53:26 --> Router Class Initialized
INFO - 2024-08-15 22:53:26 --> Output Class Initialized
INFO - 2024-08-15 22:53:26 --> Security Class Initialized
DEBUG - 2024-08-15 22:53:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:53:26 --> Input Class Initialized
INFO - 2024-08-15 22:53:26 --> Language Class Initialized
INFO - 2024-08-15 22:53:26 --> Loader Class Initialized
INFO - 2024-08-15 22:53:26 --> Helper loaded: application_helper
INFO - 2024-08-15 22:53:26 --> Helper loaded: url_helper
INFO - 2024-08-15 22:53:26 --> Helper loaded: file_helper
INFO - 2024-08-15 22:53:26 --> Helper loaded: security_helper
INFO - 2024-08-15 22:53:26 --> Helper loaded: date_helper
INFO - 2024-08-15 22:53:26 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:53:26 --> Helper loaded: form_helper
INFO - 2024-08-15 22:53:26 --> Helper loaded: language_helper
INFO - 2024-08-15 22:53:26 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:53:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:53:26 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:53:26 --> Upload Class Initialized
INFO - 2024-08-15 22:53:26 --> Controller Class Initialized
INFO - 2024-08-15 22:53:26 --> Model "M_admin" initialized
INFO - 2024-08-15 22:53:26 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:53:26 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:53:26 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:53:26 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:53:27 --> Config Class Initialized
INFO - 2024-08-15 22:53:27 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:53:27 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:53:27 --> Utf8 Class Initialized
INFO - 2024-08-15 22:53:27 --> URI Class Initialized
INFO - 2024-08-15 22:53:27 --> Router Class Initialized
INFO - 2024-08-15 22:53:27 --> Output Class Initialized
INFO - 2024-08-15 22:53:27 --> Security Class Initialized
DEBUG - 2024-08-15 22:53:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:53:27 --> Input Class Initialized
INFO - 2024-08-15 22:53:27 --> Language Class Initialized
INFO - 2024-08-15 22:53:27 --> Loader Class Initialized
INFO - 2024-08-15 22:53:27 --> Helper loaded: application_helper
INFO - 2024-08-15 22:53:27 --> Helper loaded: url_helper
INFO - 2024-08-15 22:53:27 --> Helper loaded: file_helper
INFO - 2024-08-15 22:53:27 --> Helper loaded: security_helper
INFO - 2024-08-15 22:53:27 --> Helper loaded: date_helper
INFO - 2024-08-15 22:53:27 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:53:27 --> Helper loaded: form_helper
INFO - 2024-08-15 22:53:27 --> Helper loaded: language_helper
INFO - 2024-08-15 22:53:27 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:53:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:53:27 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:53:27 --> Upload Class Initialized
INFO - 2024-08-15 22:53:27 --> Controller Class Initialized
INFO - 2024-08-15 22:53:27 --> Model "M_admin" initialized
INFO - 2024-08-15 22:53:27 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:53:27 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:53:27 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:53:27 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:53:41 --> Config Class Initialized
INFO - 2024-08-15 22:53:41 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:53:41 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:53:41 --> Utf8 Class Initialized
INFO - 2024-08-15 22:53:41 --> URI Class Initialized
INFO - 2024-08-15 22:53:41 --> Router Class Initialized
INFO - 2024-08-15 22:53:41 --> Output Class Initialized
INFO - 2024-08-15 22:53:41 --> Security Class Initialized
DEBUG - 2024-08-15 22:53:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:53:41 --> Input Class Initialized
INFO - 2024-08-15 22:53:41 --> Language Class Initialized
INFO - 2024-08-15 22:53:41 --> Loader Class Initialized
INFO - 2024-08-15 22:53:41 --> Helper loaded: application_helper
INFO - 2024-08-15 22:53:41 --> Helper loaded: url_helper
INFO - 2024-08-15 22:53:41 --> Helper loaded: file_helper
INFO - 2024-08-15 22:53:41 --> Helper loaded: security_helper
INFO - 2024-08-15 22:53:41 --> Helper loaded: date_helper
INFO - 2024-08-15 22:53:41 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:53:41 --> Helper loaded: form_helper
INFO - 2024-08-15 22:53:41 --> Helper loaded: language_helper
INFO - 2024-08-15 22:53:41 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:53:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:53:41 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:53:41 --> Upload Class Initialized
INFO - 2024-08-15 22:53:41 --> Controller Class Initialized
INFO - 2024-08-15 22:53:41 --> Model "M_admin" initialized
INFO - 2024-08-15 22:53:41 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:53:41 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:53:41 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:53:41 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:53:50 --> Config Class Initialized
INFO - 2024-08-15 22:53:50 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:53:50 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:53:50 --> Utf8 Class Initialized
INFO - 2024-08-15 22:53:50 --> URI Class Initialized
INFO - 2024-08-15 22:53:50 --> Router Class Initialized
INFO - 2024-08-15 22:53:50 --> Output Class Initialized
INFO - 2024-08-15 22:53:50 --> Security Class Initialized
DEBUG - 2024-08-15 22:53:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:53:50 --> Input Class Initialized
INFO - 2024-08-15 22:53:50 --> Language Class Initialized
INFO - 2024-08-15 22:53:50 --> Loader Class Initialized
INFO - 2024-08-15 22:53:50 --> Helper loaded: application_helper
INFO - 2024-08-15 22:53:50 --> Helper loaded: url_helper
INFO - 2024-08-15 22:53:50 --> Helper loaded: file_helper
INFO - 2024-08-15 22:53:50 --> Helper loaded: security_helper
INFO - 2024-08-15 22:53:50 --> Helper loaded: date_helper
INFO - 2024-08-15 22:53:50 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:53:50 --> Helper loaded: form_helper
INFO - 2024-08-15 22:53:50 --> Helper loaded: language_helper
INFO - 2024-08-15 22:53:50 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:53:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:53:50 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:53:50 --> Upload Class Initialized
INFO - 2024-08-15 22:53:50 --> Controller Class Initialized
INFO - 2024-08-15 22:53:50 --> Model "M_admin" initialized
INFO - 2024-08-15 22:53:50 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:53:50 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:53:50 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:53:50 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:54:12 --> Config Class Initialized
INFO - 2024-08-15 22:54:12 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:54:12 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:54:12 --> Utf8 Class Initialized
INFO - 2024-08-15 22:54:12 --> URI Class Initialized
INFO - 2024-08-15 22:54:12 --> Router Class Initialized
INFO - 2024-08-15 22:54:12 --> Output Class Initialized
INFO - 2024-08-15 22:54:12 --> Security Class Initialized
DEBUG - 2024-08-15 22:54:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:54:12 --> Input Class Initialized
INFO - 2024-08-15 22:54:12 --> Language Class Initialized
INFO - 2024-08-15 22:54:12 --> Loader Class Initialized
INFO - 2024-08-15 22:54:12 --> Helper loaded: application_helper
INFO - 2024-08-15 22:54:12 --> Helper loaded: url_helper
INFO - 2024-08-15 22:54:12 --> Helper loaded: file_helper
INFO - 2024-08-15 22:54:12 --> Helper loaded: security_helper
INFO - 2024-08-15 22:54:12 --> Helper loaded: date_helper
INFO - 2024-08-15 22:54:12 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:54:12 --> Helper loaded: form_helper
INFO - 2024-08-15 22:54:12 --> Helper loaded: language_helper
INFO - 2024-08-15 22:54:12 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:54:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:54:12 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:54:12 --> Upload Class Initialized
INFO - 2024-08-15 22:54:12 --> Controller Class Initialized
INFO - 2024-08-15 22:54:12 --> Model "M_admin" initialized
INFO - 2024-08-15 22:54:12 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:54:12 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:54:12 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:54:12 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:54:20 --> Config Class Initialized
INFO - 2024-08-15 22:54:20 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:54:20 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:54:20 --> Utf8 Class Initialized
INFO - 2024-08-15 22:54:20 --> URI Class Initialized
INFO - 2024-08-15 22:54:20 --> Router Class Initialized
INFO - 2024-08-15 22:54:20 --> Output Class Initialized
INFO - 2024-08-15 22:54:20 --> Security Class Initialized
DEBUG - 2024-08-15 22:54:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:54:20 --> Input Class Initialized
INFO - 2024-08-15 22:54:20 --> Language Class Initialized
INFO - 2024-08-15 22:54:20 --> Loader Class Initialized
INFO - 2024-08-15 22:54:20 --> Helper loaded: application_helper
INFO - 2024-08-15 22:54:20 --> Helper loaded: url_helper
INFO - 2024-08-15 22:54:20 --> Helper loaded: file_helper
INFO - 2024-08-15 22:54:20 --> Helper loaded: security_helper
INFO - 2024-08-15 22:54:20 --> Helper loaded: date_helper
INFO - 2024-08-15 22:54:20 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:54:20 --> Helper loaded: form_helper
INFO - 2024-08-15 22:54:20 --> Helper loaded: language_helper
INFO - 2024-08-15 22:54:20 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:54:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:54:20 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:54:20 --> Upload Class Initialized
INFO - 2024-08-15 22:54:20 --> Controller Class Initialized
INFO - 2024-08-15 22:54:20 --> Model "M_admin" initialized
INFO - 2024-08-15 22:54:20 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:54:20 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:54:20 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:54:20 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:54:41 --> Config Class Initialized
INFO - 2024-08-15 22:54:41 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:54:41 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:54:41 --> Utf8 Class Initialized
INFO - 2024-08-15 22:54:41 --> URI Class Initialized
INFO - 2024-08-15 22:54:41 --> Router Class Initialized
INFO - 2024-08-15 22:54:41 --> Output Class Initialized
INFO - 2024-08-15 22:54:41 --> Security Class Initialized
DEBUG - 2024-08-15 22:54:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:54:41 --> Input Class Initialized
INFO - 2024-08-15 22:54:41 --> Language Class Initialized
INFO - 2024-08-15 22:54:41 --> Loader Class Initialized
INFO - 2024-08-15 22:54:41 --> Helper loaded: application_helper
INFO - 2024-08-15 22:54:41 --> Helper loaded: url_helper
INFO - 2024-08-15 22:54:41 --> Helper loaded: file_helper
INFO - 2024-08-15 22:54:41 --> Helper loaded: security_helper
INFO - 2024-08-15 22:54:41 --> Helper loaded: date_helper
INFO - 2024-08-15 22:54:41 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:54:41 --> Helper loaded: form_helper
INFO - 2024-08-15 22:54:41 --> Helper loaded: language_helper
INFO - 2024-08-15 22:54:41 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:54:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:54:41 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:54:41 --> Upload Class Initialized
INFO - 2024-08-15 22:54:41 --> Controller Class Initialized
INFO - 2024-08-15 22:54:41 --> Model "M_admin" initialized
INFO - 2024-08-15 22:54:41 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:54:41 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:54:41 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:54:41 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:55:13 --> Config Class Initialized
INFO - 2024-08-15 22:55:13 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:55:13 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:55:13 --> Utf8 Class Initialized
INFO - 2024-08-15 22:55:13 --> URI Class Initialized
INFO - 2024-08-15 22:55:13 --> Router Class Initialized
INFO - 2024-08-15 22:55:13 --> Output Class Initialized
INFO - 2024-08-15 22:55:13 --> Security Class Initialized
DEBUG - 2024-08-15 22:55:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:55:13 --> Input Class Initialized
INFO - 2024-08-15 22:55:13 --> Language Class Initialized
INFO - 2024-08-15 22:55:13 --> Loader Class Initialized
INFO - 2024-08-15 22:55:13 --> Helper loaded: application_helper
INFO - 2024-08-15 22:55:13 --> Helper loaded: url_helper
INFO - 2024-08-15 22:55:13 --> Helper loaded: file_helper
INFO - 2024-08-15 22:55:13 --> Helper loaded: security_helper
INFO - 2024-08-15 22:55:13 --> Helper loaded: date_helper
INFO - 2024-08-15 22:55:13 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:55:13 --> Helper loaded: form_helper
INFO - 2024-08-15 22:55:13 --> Helper loaded: language_helper
INFO - 2024-08-15 22:55:13 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:55:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:55:13 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:55:13 --> Upload Class Initialized
INFO - 2024-08-15 22:55:13 --> Controller Class Initialized
INFO - 2024-08-15 22:55:13 --> Model "M_admin" initialized
INFO - 2024-08-15 22:55:13 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:55:13 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:55:13 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:55:13 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:55:24 --> Config Class Initialized
INFO - 2024-08-15 22:55:24 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:55:24 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:55:24 --> Utf8 Class Initialized
INFO - 2024-08-15 22:55:24 --> URI Class Initialized
INFO - 2024-08-15 22:55:24 --> Router Class Initialized
INFO - 2024-08-15 22:55:24 --> Output Class Initialized
INFO - 2024-08-15 22:55:24 --> Security Class Initialized
DEBUG - 2024-08-15 22:55:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:55:24 --> Input Class Initialized
INFO - 2024-08-15 22:55:24 --> Language Class Initialized
INFO - 2024-08-15 22:55:24 --> Loader Class Initialized
INFO - 2024-08-15 22:55:24 --> Helper loaded: application_helper
INFO - 2024-08-15 22:55:24 --> Helper loaded: url_helper
INFO - 2024-08-15 22:55:24 --> Helper loaded: file_helper
INFO - 2024-08-15 22:55:24 --> Helper loaded: security_helper
INFO - 2024-08-15 22:55:24 --> Helper loaded: date_helper
INFO - 2024-08-15 22:55:24 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:55:24 --> Helper loaded: form_helper
INFO - 2024-08-15 22:55:24 --> Helper loaded: language_helper
INFO - 2024-08-15 22:55:24 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:55:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:55:24 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:55:24 --> Upload Class Initialized
INFO - 2024-08-15 22:55:24 --> Controller Class Initialized
INFO - 2024-08-15 22:55:24 --> Model "M_admin" initialized
INFO - 2024-08-15 22:55:24 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:55:24 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:55:24 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:55:24 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:55:35 --> Config Class Initialized
INFO - 2024-08-15 22:55:35 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:55:35 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:55:35 --> Utf8 Class Initialized
INFO - 2024-08-15 22:55:35 --> URI Class Initialized
INFO - 2024-08-15 22:55:35 --> Router Class Initialized
INFO - 2024-08-15 22:55:35 --> Output Class Initialized
INFO - 2024-08-15 22:55:35 --> Security Class Initialized
DEBUG - 2024-08-15 22:55:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:55:35 --> Input Class Initialized
INFO - 2024-08-15 22:55:35 --> Language Class Initialized
INFO - 2024-08-15 22:55:35 --> Loader Class Initialized
INFO - 2024-08-15 22:55:35 --> Helper loaded: application_helper
INFO - 2024-08-15 22:55:35 --> Helper loaded: url_helper
INFO - 2024-08-15 22:55:35 --> Helper loaded: file_helper
INFO - 2024-08-15 22:55:35 --> Helper loaded: security_helper
INFO - 2024-08-15 22:55:35 --> Helper loaded: date_helper
INFO - 2024-08-15 22:55:35 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:55:35 --> Helper loaded: form_helper
INFO - 2024-08-15 22:55:35 --> Helper loaded: language_helper
INFO - 2024-08-15 22:55:35 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:55:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:55:35 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:55:35 --> Upload Class Initialized
INFO - 2024-08-15 22:55:35 --> Controller Class Initialized
INFO - 2024-08-15 22:55:35 --> Model "M_admin" initialized
INFO - 2024-08-15 22:55:35 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:55:35 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:55:35 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:55:35 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:55:36 --> Config Class Initialized
INFO - 2024-08-15 22:55:36 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:55:36 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:55:36 --> Utf8 Class Initialized
INFO - 2024-08-15 22:55:36 --> URI Class Initialized
INFO - 2024-08-15 22:55:36 --> Router Class Initialized
INFO - 2024-08-15 22:55:36 --> Output Class Initialized
INFO - 2024-08-15 22:55:36 --> Security Class Initialized
DEBUG - 2024-08-15 22:55:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:55:36 --> Input Class Initialized
INFO - 2024-08-15 22:55:36 --> Language Class Initialized
INFO - 2024-08-15 22:55:36 --> Loader Class Initialized
INFO - 2024-08-15 22:55:36 --> Helper loaded: application_helper
INFO - 2024-08-15 22:55:36 --> Helper loaded: url_helper
INFO - 2024-08-15 22:55:36 --> Helper loaded: file_helper
INFO - 2024-08-15 22:55:36 --> Helper loaded: security_helper
INFO - 2024-08-15 22:55:36 --> Helper loaded: date_helper
INFO - 2024-08-15 22:55:36 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:55:36 --> Helper loaded: form_helper
INFO - 2024-08-15 22:55:36 --> Helper loaded: language_helper
INFO - 2024-08-15 22:55:36 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:55:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:55:36 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:55:36 --> Upload Class Initialized
INFO - 2024-08-15 22:55:36 --> Controller Class Initialized
INFO - 2024-08-15 22:55:36 --> Model "M_admin" initialized
INFO - 2024-08-15 22:55:36 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:55:36 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:55:36 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:55:36 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:55:37 --> Config Class Initialized
INFO - 2024-08-15 22:55:37 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:55:37 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:55:37 --> Utf8 Class Initialized
INFO - 2024-08-15 22:55:37 --> URI Class Initialized
INFO - 2024-08-15 22:55:37 --> Router Class Initialized
INFO - 2024-08-15 22:55:37 --> Output Class Initialized
INFO - 2024-08-15 22:55:37 --> Security Class Initialized
DEBUG - 2024-08-15 22:55:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:55:37 --> Input Class Initialized
INFO - 2024-08-15 22:55:37 --> Language Class Initialized
INFO - 2024-08-15 22:55:37 --> Loader Class Initialized
INFO - 2024-08-15 22:55:37 --> Helper loaded: application_helper
INFO - 2024-08-15 22:55:37 --> Helper loaded: url_helper
INFO - 2024-08-15 22:55:37 --> Helper loaded: file_helper
INFO - 2024-08-15 22:55:37 --> Helper loaded: security_helper
INFO - 2024-08-15 22:55:37 --> Helper loaded: date_helper
INFO - 2024-08-15 22:55:37 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:55:37 --> Helper loaded: form_helper
INFO - 2024-08-15 22:55:37 --> Helper loaded: language_helper
INFO - 2024-08-15 22:55:37 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:55:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:55:37 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:55:37 --> Upload Class Initialized
INFO - 2024-08-15 22:55:37 --> Controller Class Initialized
INFO - 2024-08-15 22:55:37 --> Model "M_admin" initialized
INFO - 2024-08-15 22:55:37 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:55:37 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:55:37 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:55:37 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:56:12 --> Config Class Initialized
INFO - 2024-08-15 22:56:12 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:56:12 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:56:12 --> Utf8 Class Initialized
INFO - 2024-08-15 22:56:12 --> URI Class Initialized
INFO - 2024-08-15 22:56:12 --> Router Class Initialized
INFO - 2024-08-15 22:56:12 --> Output Class Initialized
INFO - 2024-08-15 22:56:12 --> Security Class Initialized
DEBUG - 2024-08-15 22:56:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:56:12 --> Input Class Initialized
INFO - 2024-08-15 22:56:12 --> Language Class Initialized
INFO - 2024-08-15 22:56:12 --> Loader Class Initialized
INFO - 2024-08-15 22:56:12 --> Helper loaded: application_helper
INFO - 2024-08-15 22:56:12 --> Helper loaded: url_helper
INFO - 2024-08-15 22:56:12 --> Helper loaded: file_helper
INFO - 2024-08-15 22:56:12 --> Helper loaded: security_helper
INFO - 2024-08-15 22:56:12 --> Helper loaded: date_helper
INFO - 2024-08-15 22:56:12 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:56:12 --> Helper loaded: form_helper
INFO - 2024-08-15 22:56:12 --> Helper loaded: language_helper
INFO - 2024-08-15 22:56:12 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:56:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:56:12 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:56:12 --> Upload Class Initialized
INFO - 2024-08-15 22:56:12 --> Controller Class Initialized
INFO - 2024-08-15 22:56:12 --> Model "M_admin" initialized
INFO - 2024-08-15 22:56:12 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:56:12 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:56:12 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:56:12 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:56:14 --> Config Class Initialized
INFO - 2024-08-15 22:56:14 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:56:14 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:56:14 --> Utf8 Class Initialized
INFO - 2024-08-15 22:56:14 --> URI Class Initialized
INFO - 2024-08-15 22:56:14 --> Router Class Initialized
INFO - 2024-08-15 22:56:14 --> Output Class Initialized
INFO - 2024-08-15 22:56:14 --> Security Class Initialized
DEBUG - 2024-08-15 22:56:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:56:14 --> Input Class Initialized
INFO - 2024-08-15 22:56:14 --> Language Class Initialized
INFO - 2024-08-15 22:56:14 --> Loader Class Initialized
INFO - 2024-08-15 22:56:14 --> Helper loaded: application_helper
INFO - 2024-08-15 22:56:14 --> Helper loaded: url_helper
INFO - 2024-08-15 22:56:14 --> Helper loaded: file_helper
INFO - 2024-08-15 22:56:14 --> Helper loaded: security_helper
INFO - 2024-08-15 22:56:14 --> Helper loaded: date_helper
INFO - 2024-08-15 22:56:14 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:56:14 --> Helper loaded: form_helper
INFO - 2024-08-15 22:56:14 --> Helper loaded: language_helper
INFO - 2024-08-15 22:56:14 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:56:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:56:14 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:56:14 --> Upload Class Initialized
INFO - 2024-08-15 22:56:14 --> Controller Class Initialized
INFO - 2024-08-15 22:56:14 --> Model "M_admin" initialized
INFO - 2024-08-15 22:56:14 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:56:14 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:56:14 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:56:14 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:56:18 --> Config Class Initialized
INFO - 2024-08-15 22:56:18 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:56:18 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:56:18 --> Utf8 Class Initialized
INFO - 2024-08-15 22:56:18 --> URI Class Initialized
INFO - 2024-08-15 22:56:18 --> Router Class Initialized
INFO - 2024-08-15 22:56:18 --> Output Class Initialized
INFO - 2024-08-15 22:56:18 --> Security Class Initialized
DEBUG - 2024-08-15 22:56:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:56:18 --> Input Class Initialized
INFO - 2024-08-15 22:56:18 --> Language Class Initialized
INFO - 2024-08-15 22:56:18 --> Loader Class Initialized
INFO - 2024-08-15 22:56:18 --> Helper loaded: application_helper
INFO - 2024-08-15 22:56:18 --> Helper loaded: url_helper
INFO - 2024-08-15 22:56:18 --> Helper loaded: file_helper
INFO - 2024-08-15 22:56:18 --> Helper loaded: security_helper
INFO - 2024-08-15 22:56:18 --> Helper loaded: date_helper
INFO - 2024-08-15 22:56:18 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:56:18 --> Helper loaded: form_helper
INFO - 2024-08-15 22:56:18 --> Helper loaded: language_helper
INFO - 2024-08-15 22:56:18 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:56:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:56:18 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:56:18 --> Upload Class Initialized
INFO - 2024-08-15 22:56:18 --> Controller Class Initialized
INFO - 2024-08-15 22:56:18 --> Model "M_admin" initialized
INFO - 2024-08-15 22:56:18 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:56:18 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:56:18 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:56:18 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:56:21 --> Config Class Initialized
INFO - 2024-08-15 22:56:21 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:56:21 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:56:21 --> Utf8 Class Initialized
INFO - 2024-08-15 22:56:21 --> URI Class Initialized
INFO - 2024-08-15 22:56:21 --> Router Class Initialized
INFO - 2024-08-15 22:56:21 --> Output Class Initialized
INFO - 2024-08-15 22:56:21 --> Security Class Initialized
DEBUG - 2024-08-15 22:56:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:56:21 --> Input Class Initialized
INFO - 2024-08-15 22:56:21 --> Language Class Initialized
INFO - 2024-08-15 22:56:21 --> Loader Class Initialized
INFO - 2024-08-15 22:56:21 --> Helper loaded: application_helper
INFO - 2024-08-15 22:56:21 --> Helper loaded: url_helper
INFO - 2024-08-15 22:56:21 --> Helper loaded: file_helper
INFO - 2024-08-15 22:56:21 --> Helper loaded: security_helper
INFO - 2024-08-15 22:56:21 --> Helper loaded: date_helper
INFO - 2024-08-15 22:56:21 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:56:21 --> Helper loaded: form_helper
INFO - 2024-08-15 22:56:21 --> Helper loaded: language_helper
INFO - 2024-08-15 22:56:21 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:56:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:56:21 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:56:21 --> Upload Class Initialized
INFO - 2024-08-15 22:56:21 --> Controller Class Initialized
INFO - 2024-08-15 22:56:21 --> Model "M_admin" initialized
INFO - 2024-08-15 22:56:21 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:56:21 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:56:21 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:56:21 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:56:43 --> Config Class Initialized
INFO - 2024-08-15 22:56:43 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:56:43 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:56:43 --> Utf8 Class Initialized
INFO - 2024-08-15 22:56:43 --> URI Class Initialized
INFO - 2024-08-15 22:56:43 --> Router Class Initialized
INFO - 2024-08-15 22:56:43 --> Output Class Initialized
INFO - 2024-08-15 22:56:43 --> Security Class Initialized
DEBUG - 2024-08-15 22:56:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:56:43 --> Input Class Initialized
INFO - 2024-08-15 22:56:43 --> Language Class Initialized
INFO - 2024-08-15 22:56:43 --> Loader Class Initialized
INFO - 2024-08-15 22:56:44 --> Helper loaded: application_helper
INFO - 2024-08-15 22:56:44 --> Helper loaded: url_helper
INFO - 2024-08-15 22:56:44 --> Helper loaded: file_helper
INFO - 2024-08-15 22:56:44 --> Helper loaded: security_helper
INFO - 2024-08-15 22:56:44 --> Helper loaded: date_helper
INFO - 2024-08-15 22:56:44 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:56:44 --> Helper loaded: form_helper
INFO - 2024-08-15 22:56:44 --> Helper loaded: language_helper
INFO - 2024-08-15 22:56:44 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:56:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:56:44 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:56:44 --> Upload Class Initialized
INFO - 2024-08-15 22:56:44 --> Controller Class Initialized
INFO - 2024-08-15 22:56:44 --> Model "M_admin" initialized
INFO - 2024-08-15 22:56:44 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:56:44 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:56:44 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:56:44 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:56:49 --> Config Class Initialized
INFO - 2024-08-15 22:56:49 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:56:49 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:56:49 --> Utf8 Class Initialized
INFO - 2024-08-15 22:56:49 --> URI Class Initialized
INFO - 2024-08-15 22:56:49 --> Router Class Initialized
INFO - 2024-08-15 22:56:49 --> Output Class Initialized
INFO - 2024-08-15 22:56:49 --> Security Class Initialized
DEBUG - 2024-08-15 22:56:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:56:49 --> Input Class Initialized
INFO - 2024-08-15 22:56:49 --> Language Class Initialized
INFO - 2024-08-15 22:56:49 --> Loader Class Initialized
INFO - 2024-08-15 22:56:49 --> Helper loaded: application_helper
INFO - 2024-08-15 22:56:49 --> Helper loaded: url_helper
INFO - 2024-08-15 22:56:49 --> Helper loaded: file_helper
INFO - 2024-08-15 22:56:49 --> Helper loaded: security_helper
INFO - 2024-08-15 22:56:49 --> Helper loaded: date_helper
INFO - 2024-08-15 22:56:49 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:56:50 --> Helper loaded: form_helper
INFO - 2024-08-15 22:56:50 --> Helper loaded: language_helper
INFO - 2024-08-15 22:56:50 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:56:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:56:50 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:56:50 --> Upload Class Initialized
INFO - 2024-08-15 22:56:50 --> Controller Class Initialized
INFO - 2024-08-15 22:56:50 --> Model "M_admin" initialized
INFO - 2024-08-15 22:56:50 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:56:50 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:56:50 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:56:50 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:57:04 --> Config Class Initialized
INFO - 2024-08-15 22:57:04 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:57:04 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:57:04 --> Utf8 Class Initialized
INFO - 2024-08-15 22:57:04 --> URI Class Initialized
INFO - 2024-08-15 22:57:04 --> Router Class Initialized
INFO - 2024-08-15 22:57:04 --> Output Class Initialized
INFO - 2024-08-15 22:57:04 --> Security Class Initialized
DEBUG - 2024-08-15 22:57:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:57:04 --> Input Class Initialized
INFO - 2024-08-15 22:57:04 --> Language Class Initialized
INFO - 2024-08-15 22:57:04 --> Loader Class Initialized
INFO - 2024-08-15 22:57:04 --> Helper loaded: application_helper
INFO - 2024-08-15 22:57:04 --> Helper loaded: url_helper
INFO - 2024-08-15 22:57:04 --> Helper loaded: file_helper
INFO - 2024-08-15 22:57:04 --> Helper loaded: security_helper
INFO - 2024-08-15 22:57:04 --> Helper loaded: date_helper
INFO - 2024-08-15 22:57:04 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:57:04 --> Helper loaded: form_helper
INFO - 2024-08-15 22:57:04 --> Helper loaded: language_helper
INFO - 2024-08-15 22:57:04 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:57:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:57:05 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:57:05 --> Upload Class Initialized
INFO - 2024-08-15 22:57:05 --> Controller Class Initialized
INFO - 2024-08-15 22:57:05 --> Model "M_admin" initialized
INFO - 2024-08-15 22:57:05 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:57:05 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:57:05 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:57:05 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:57:07 --> Config Class Initialized
INFO - 2024-08-15 22:57:07 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:57:07 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:57:07 --> Utf8 Class Initialized
INFO - 2024-08-15 22:57:07 --> URI Class Initialized
INFO - 2024-08-15 22:57:07 --> Router Class Initialized
INFO - 2024-08-15 22:57:07 --> Output Class Initialized
INFO - 2024-08-15 22:57:07 --> Security Class Initialized
DEBUG - 2024-08-15 22:57:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:57:07 --> Input Class Initialized
INFO - 2024-08-15 22:57:07 --> Language Class Initialized
INFO - 2024-08-15 22:57:07 --> Loader Class Initialized
INFO - 2024-08-15 22:57:07 --> Helper loaded: application_helper
INFO - 2024-08-15 22:57:07 --> Helper loaded: url_helper
INFO - 2024-08-15 22:57:07 --> Helper loaded: file_helper
INFO - 2024-08-15 22:57:07 --> Helper loaded: security_helper
INFO - 2024-08-15 22:57:07 --> Helper loaded: date_helper
INFO - 2024-08-15 22:57:07 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:57:07 --> Helper loaded: form_helper
INFO - 2024-08-15 22:57:07 --> Helper loaded: language_helper
INFO - 2024-08-15 22:57:07 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:57:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:57:07 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:57:07 --> Upload Class Initialized
INFO - 2024-08-15 22:57:07 --> Controller Class Initialized
INFO - 2024-08-15 22:57:07 --> Model "M_admin" initialized
INFO - 2024-08-15 22:57:07 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:57:07 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:57:07 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:57:07 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 22:57:10 --> Config Class Initialized
INFO - 2024-08-15 22:57:10 --> Hooks Class Initialized
DEBUG - 2024-08-15 22:57:10 --> UTF-8 Support Enabled
INFO - 2024-08-15 22:57:10 --> Utf8 Class Initialized
INFO - 2024-08-15 22:57:10 --> URI Class Initialized
INFO - 2024-08-15 22:57:10 --> Router Class Initialized
INFO - 2024-08-15 22:57:10 --> Output Class Initialized
INFO - 2024-08-15 22:57:10 --> Security Class Initialized
DEBUG - 2024-08-15 22:57:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 22:57:10 --> Input Class Initialized
INFO - 2024-08-15 22:57:10 --> Language Class Initialized
INFO - 2024-08-15 22:57:10 --> Loader Class Initialized
INFO - 2024-08-15 22:57:10 --> Helper loaded: application_helper
INFO - 2024-08-15 22:57:10 --> Helper loaded: url_helper
INFO - 2024-08-15 22:57:10 --> Helper loaded: file_helper
INFO - 2024-08-15 22:57:10 --> Helper loaded: security_helper
INFO - 2024-08-15 22:57:10 --> Helper loaded: date_helper
INFO - 2024-08-15 22:57:10 --> Helper loaded: captcha_helper
INFO - 2024-08-15 22:57:10 --> Helper loaded: form_helper
INFO - 2024-08-15 22:57:10 --> Helper loaded: language_helper
INFO - 2024-08-15 22:57:10 --> Database Driver Class Initialized
DEBUG - 2024-08-15 22:57:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 22:57:10 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 22:57:10 --> Upload Class Initialized
INFO - 2024-08-15 22:57:10 --> Controller Class Initialized
INFO - 2024-08-15 22:57:10 --> Model "M_admin" initialized
INFO - 2024-08-15 22:57:10 --> Model "M_config" initialized
DEBUG - 2024-08-15 22:57:10 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 22:57:10 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 22:57:10 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:12:03 --> Config Class Initialized
INFO - 2024-08-15 23:12:03 --> Hooks Class Initialized
DEBUG - 2024-08-15 23:12:03 --> UTF-8 Support Enabled
INFO - 2024-08-15 23:12:03 --> Utf8 Class Initialized
INFO - 2024-08-15 23:12:03 --> URI Class Initialized
INFO - 2024-08-15 23:12:03 --> Router Class Initialized
INFO - 2024-08-15 23:12:03 --> Output Class Initialized
INFO - 2024-08-15 23:12:03 --> Security Class Initialized
DEBUG - 2024-08-15 23:12:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 23:12:03 --> Input Class Initialized
INFO - 2024-08-15 23:12:03 --> Language Class Initialized
INFO - 2024-08-15 23:12:03 --> Loader Class Initialized
INFO - 2024-08-15 23:12:03 --> Helper loaded: application_helper
INFO - 2024-08-15 23:12:03 --> Helper loaded: url_helper
INFO - 2024-08-15 23:12:03 --> Helper loaded: file_helper
INFO - 2024-08-15 23:12:03 --> Helper loaded: security_helper
INFO - 2024-08-15 23:12:03 --> Helper loaded: date_helper
INFO - 2024-08-15 23:12:03 --> Helper loaded: captcha_helper
INFO - 2024-08-15 23:12:03 --> Helper loaded: form_helper
INFO - 2024-08-15 23:12:03 --> Helper loaded: language_helper
INFO - 2024-08-15 23:12:03 --> Database Driver Class Initialized
DEBUG - 2024-08-15 23:12:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 23:12:03 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 23:12:03 --> Upload Class Initialized
INFO - 2024-08-15 23:12:03 --> Controller Class Initialized
INFO - 2024-08-15 23:12:03 --> Model "M_admin" initialized
INFO - 2024-08-15 23:12:03 --> Model "M_config" initialized
DEBUG - 2024-08-15 23:12:03 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 23:12:03 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 23:12:03 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:14:36 --> Config Class Initialized
INFO - 2024-08-15 23:14:36 --> Hooks Class Initialized
DEBUG - 2024-08-15 23:14:36 --> UTF-8 Support Enabled
INFO - 2024-08-15 23:14:36 --> Utf8 Class Initialized
INFO - 2024-08-15 23:14:36 --> URI Class Initialized
INFO - 2024-08-15 23:14:36 --> Router Class Initialized
INFO - 2024-08-15 23:14:36 --> Output Class Initialized
INFO - 2024-08-15 23:14:36 --> Security Class Initialized
DEBUG - 2024-08-15 23:14:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 23:14:36 --> Input Class Initialized
INFO - 2024-08-15 23:14:36 --> Language Class Initialized
INFO - 2024-08-15 23:14:36 --> Loader Class Initialized
INFO - 2024-08-15 23:14:36 --> Helper loaded: application_helper
INFO - 2024-08-15 23:14:36 --> Helper loaded: url_helper
INFO - 2024-08-15 23:14:36 --> Helper loaded: file_helper
INFO - 2024-08-15 23:14:36 --> Helper loaded: security_helper
INFO - 2024-08-15 23:14:36 --> Helper loaded: date_helper
INFO - 2024-08-15 23:14:36 --> Helper loaded: captcha_helper
INFO - 2024-08-15 23:14:36 --> Helper loaded: form_helper
INFO - 2024-08-15 23:14:36 --> Helper loaded: language_helper
INFO - 2024-08-15 23:14:36 --> Database Driver Class Initialized
DEBUG - 2024-08-15 23:14:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 23:14:36 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 23:14:36 --> Upload Class Initialized
INFO - 2024-08-15 23:14:36 --> Controller Class Initialized
INFO - 2024-08-15 23:14:36 --> Model "M_admin" initialized
INFO - 2024-08-15 23:14:36 --> Model "M_config" initialized
DEBUG - 2024-08-15 23:14:36 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 23:14:36 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 23:14:36 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:14:37 --> Config Class Initialized
INFO - 2024-08-15 23:14:37 --> Hooks Class Initialized
DEBUG - 2024-08-15 23:14:37 --> UTF-8 Support Enabled
INFO - 2024-08-15 23:14:37 --> Utf8 Class Initialized
INFO - 2024-08-15 23:14:37 --> URI Class Initialized
INFO - 2024-08-15 23:14:37 --> Router Class Initialized
INFO - 2024-08-15 23:14:37 --> Output Class Initialized
INFO - 2024-08-15 23:14:37 --> Security Class Initialized
DEBUG - 2024-08-15 23:14:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 23:14:37 --> Input Class Initialized
INFO - 2024-08-15 23:14:37 --> Language Class Initialized
INFO - 2024-08-15 23:14:37 --> Loader Class Initialized
INFO - 2024-08-15 23:14:37 --> Helper loaded: application_helper
INFO - 2024-08-15 23:14:37 --> Helper loaded: url_helper
INFO - 2024-08-15 23:14:37 --> Helper loaded: file_helper
INFO - 2024-08-15 23:14:37 --> Helper loaded: security_helper
INFO - 2024-08-15 23:14:37 --> Helper loaded: date_helper
INFO - 2024-08-15 23:14:37 --> Helper loaded: captcha_helper
INFO - 2024-08-15 23:14:37 --> Helper loaded: form_helper
INFO - 2024-08-15 23:14:37 --> Helper loaded: language_helper
INFO - 2024-08-15 23:14:37 --> Database Driver Class Initialized
DEBUG - 2024-08-15 23:14:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 23:14:37 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 23:14:37 --> Upload Class Initialized
INFO - 2024-08-15 23:14:37 --> Controller Class Initialized
INFO - 2024-08-15 23:14:37 --> Model "M_admin" initialized
INFO - 2024-08-15 23:14:37 --> Model "M_config" initialized
DEBUG - 2024-08-15 23:14:37 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 23:14:37 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 23:14:37 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:14:38 --> Config Class Initialized
INFO - 2024-08-15 23:14:38 --> Hooks Class Initialized
DEBUG - 2024-08-15 23:14:38 --> UTF-8 Support Enabled
INFO - 2024-08-15 23:14:38 --> Utf8 Class Initialized
INFO - 2024-08-15 23:14:38 --> URI Class Initialized
INFO - 2024-08-15 23:14:38 --> Router Class Initialized
INFO - 2024-08-15 23:14:38 --> Output Class Initialized
INFO - 2024-08-15 23:14:38 --> Security Class Initialized
DEBUG - 2024-08-15 23:14:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 23:14:38 --> Input Class Initialized
INFO - 2024-08-15 23:14:38 --> Language Class Initialized
INFO - 2024-08-15 23:14:38 --> Loader Class Initialized
INFO - 2024-08-15 23:14:38 --> Helper loaded: application_helper
INFO - 2024-08-15 23:14:38 --> Helper loaded: url_helper
INFO - 2024-08-15 23:14:38 --> Helper loaded: file_helper
INFO - 2024-08-15 23:14:38 --> Helper loaded: security_helper
INFO - 2024-08-15 23:14:38 --> Helper loaded: date_helper
INFO - 2024-08-15 23:14:38 --> Helper loaded: captcha_helper
INFO - 2024-08-15 23:14:38 --> Helper loaded: form_helper
INFO - 2024-08-15 23:14:38 --> Helper loaded: language_helper
INFO - 2024-08-15 23:14:38 --> Database Driver Class Initialized
DEBUG - 2024-08-15 23:14:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 23:14:38 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 23:14:38 --> Upload Class Initialized
INFO - 2024-08-15 23:14:38 --> Controller Class Initialized
INFO - 2024-08-15 23:14:38 --> Model "M_admin" initialized
INFO - 2024-08-15 23:14:38 --> Model "M_config" initialized
DEBUG - 2024-08-15 23:14:38 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 23:14:38 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 23:14:38 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:49:42 --> Config Class Initialized
INFO - 2024-08-15 23:49:42 --> Hooks Class Initialized
DEBUG - 2024-08-15 23:49:42 --> UTF-8 Support Enabled
INFO - 2024-08-15 23:49:42 --> Utf8 Class Initialized
INFO - 2024-08-15 23:49:42 --> URI Class Initialized
INFO - 2024-08-15 23:49:42 --> Router Class Initialized
INFO - 2024-08-15 23:49:42 --> Output Class Initialized
INFO - 2024-08-15 23:49:42 --> Security Class Initialized
DEBUG - 2024-08-15 23:49:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 23:49:42 --> Input Class Initialized
INFO - 2024-08-15 23:49:42 --> Language Class Initialized
INFO - 2024-08-15 23:49:42 --> Loader Class Initialized
INFO - 2024-08-15 23:49:42 --> Helper loaded: application_helper
INFO - 2024-08-15 23:49:42 --> Helper loaded: url_helper
INFO - 2024-08-15 23:49:42 --> Helper loaded: file_helper
INFO - 2024-08-15 23:49:42 --> Helper loaded: security_helper
INFO - 2024-08-15 23:49:42 --> Helper loaded: date_helper
INFO - 2024-08-15 23:49:42 --> Helper loaded: captcha_helper
INFO - 2024-08-15 23:49:42 --> Helper loaded: form_helper
INFO - 2024-08-15 23:49:42 --> Helper loaded: language_helper
INFO - 2024-08-15 23:49:42 --> Database Driver Class Initialized
DEBUG - 2024-08-15 23:49:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 23:49:42 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 23:49:42 --> Upload Class Initialized
INFO - 2024-08-15 23:49:42 --> Controller Class Initialized
INFO - 2024-08-15 23:49:42 --> Model "M_admin" initialized
INFO - 2024-08-15 23:49:42 --> Model "M_config" initialized
DEBUG - 2024-08-15 23:49:42 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 23:49:42 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 23:49:42 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:56:30 --> Config Class Initialized
INFO - 2024-08-15 23:56:30 --> Hooks Class Initialized
DEBUG - 2024-08-15 23:56:30 --> UTF-8 Support Enabled
INFO - 2024-08-15 23:56:30 --> Utf8 Class Initialized
INFO - 2024-08-15 23:56:30 --> URI Class Initialized
INFO - 2024-08-15 23:56:30 --> Router Class Initialized
INFO - 2024-08-15 23:56:30 --> Output Class Initialized
INFO - 2024-08-15 23:56:30 --> Security Class Initialized
DEBUG - 2024-08-15 23:56:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 23:56:30 --> Input Class Initialized
INFO - 2024-08-15 23:56:30 --> Language Class Initialized
INFO - 2024-08-15 23:56:30 --> Loader Class Initialized
INFO - 2024-08-15 23:56:30 --> Helper loaded: application_helper
INFO - 2024-08-15 23:56:30 --> Helper loaded: url_helper
INFO - 2024-08-15 23:56:30 --> Helper loaded: file_helper
INFO - 2024-08-15 23:56:30 --> Helper loaded: security_helper
INFO - 2024-08-15 23:56:30 --> Helper loaded: date_helper
INFO - 2024-08-15 23:56:30 --> Helper loaded: captcha_helper
INFO - 2024-08-15 23:56:30 --> Helper loaded: form_helper
INFO - 2024-08-15 23:56:30 --> Helper loaded: language_helper
INFO - 2024-08-15 23:56:30 --> Database Driver Class Initialized
DEBUG - 2024-08-15 23:56:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 23:56:30 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 23:56:30 --> Upload Class Initialized
INFO - 2024-08-15 23:56:30 --> Controller Class Initialized
INFO - 2024-08-15 23:56:30 --> Model "M_admin" initialized
INFO - 2024-08-15 23:56:30 --> Model "M_config" initialized
DEBUG - 2024-08-15 23:56:30 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 23:56:30 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 23:56:30 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:57:27 --> Config Class Initialized
INFO - 2024-08-15 23:57:27 --> Hooks Class Initialized
DEBUG - 2024-08-15 23:57:27 --> UTF-8 Support Enabled
INFO - 2024-08-15 23:57:27 --> Utf8 Class Initialized
INFO - 2024-08-15 23:57:27 --> URI Class Initialized
INFO - 2024-08-15 23:57:27 --> Router Class Initialized
INFO - 2024-08-15 23:57:27 --> Output Class Initialized
INFO - 2024-08-15 23:57:27 --> Security Class Initialized
DEBUG - 2024-08-15 23:57:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 23:57:27 --> Input Class Initialized
INFO - 2024-08-15 23:57:27 --> Language Class Initialized
INFO - 2024-08-15 23:57:27 --> Loader Class Initialized
INFO - 2024-08-15 23:57:27 --> Helper loaded: application_helper
INFO - 2024-08-15 23:57:27 --> Helper loaded: url_helper
INFO - 2024-08-15 23:57:27 --> Helper loaded: file_helper
INFO - 2024-08-15 23:57:27 --> Helper loaded: security_helper
INFO - 2024-08-15 23:57:27 --> Helper loaded: date_helper
INFO - 2024-08-15 23:57:27 --> Helper loaded: captcha_helper
INFO - 2024-08-15 23:57:27 --> Helper loaded: form_helper
INFO - 2024-08-15 23:57:27 --> Helper loaded: language_helper
INFO - 2024-08-15 23:57:27 --> Database Driver Class Initialized
DEBUG - 2024-08-15 23:57:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 23:57:27 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 23:57:27 --> Upload Class Initialized
INFO - 2024-08-15 23:57:27 --> Controller Class Initialized
INFO - 2024-08-15 23:57:27 --> Model "M_admin" initialized
INFO - 2024-08-15 23:57:27 --> Model "M_config" initialized
DEBUG - 2024-08-15 23:57:27 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 23:57:27 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 23:57:27 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:58:25 --> Config Class Initialized
INFO - 2024-08-15 23:58:25 --> Hooks Class Initialized
DEBUG - 2024-08-15 23:58:25 --> UTF-8 Support Enabled
INFO - 2024-08-15 23:58:25 --> Utf8 Class Initialized
INFO - 2024-08-15 23:58:25 --> URI Class Initialized
INFO - 2024-08-15 23:58:25 --> Router Class Initialized
INFO - 2024-08-15 23:58:25 --> Output Class Initialized
INFO - 2024-08-15 23:58:25 --> Security Class Initialized
DEBUG - 2024-08-15 23:58:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 23:58:25 --> Input Class Initialized
INFO - 2024-08-15 23:58:25 --> Language Class Initialized
INFO - 2024-08-15 23:58:25 --> Loader Class Initialized
INFO - 2024-08-15 23:58:25 --> Helper loaded: application_helper
INFO - 2024-08-15 23:58:25 --> Helper loaded: url_helper
INFO - 2024-08-15 23:58:25 --> Helper loaded: file_helper
INFO - 2024-08-15 23:58:25 --> Helper loaded: security_helper
INFO - 2024-08-15 23:58:25 --> Helper loaded: date_helper
INFO - 2024-08-15 23:58:25 --> Helper loaded: captcha_helper
INFO - 2024-08-15 23:58:25 --> Helper loaded: form_helper
INFO - 2024-08-15 23:58:25 --> Helper loaded: language_helper
INFO - 2024-08-15 23:58:25 --> Database Driver Class Initialized
DEBUG - 2024-08-15 23:58:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 23:58:25 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 23:58:25 --> Upload Class Initialized
INFO - 2024-08-15 23:58:25 --> Controller Class Initialized
INFO - 2024-08-15 23:58:25 --> Model "M_admin" initialized
INFO - 2024-08-15 23:58:25 --> Model "M_config" initialized
DEBUG - 2024-08-15 23:58:25 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 23:58:25 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 23:58:25 --> Language file contains no data: language/indonesia/frontend_lang.php
INFO - 2024-08-15 23:59:28 --> Config Class Initialized
INFO - 2024-08-15 23:59:28 --> Hooks Class Initialized
DEBUG - 2024-08-15 23:59:28 --> UTF-8 Support Enabled
INFO - 2024-08-15 23:59:28 --> Utf8 Class Initialized
INFO - 2024-08-15 23:59:28 --> URI Class Initialized
INFO - 2024-08-15 23:59:28 --> Router Class Initialized
INFO - 2024-08-15 23:59:28 --> Output Class Initialized
INFO - 2024-08-15 23:59:28 --> Security Class Initialized
DEBUG - 2024-08-15 23:59:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2024-08-15 23:59:28 --> Input Class Initialized
INFO - 2024-08-15 23:59:28 --> Language Class Initialized
INFO - 2024-08-15 23:59:28 --> Loader Class Initialized
INFO - 2024-08-15 23:59:28 --> Helper loaded: application_helper
INFO - 2024-08-15 23:59:28 --> Helper loaded: url_helper
INFO - 2024-08-15 23:59:28 --> Helper loaded: file_helper
INFO - 2024-08-15 23:59:28 --> Helper loaded: security_helper
INFO - 2024-08-15 23:59:28 --> Helper loaded: date_helper
INFO - 2024-08-15 23:59:28 --> Helper loaded: captcha_helper
INFO - 2024-08-15 23:59:28 --> Helper loaded: form_helper
INFO - 2024-08-15 23:59:28 --> Helper loaded: language_helper
INFO - 2024-08-15 23:59:28 --> Database Driver Class Initialized
DEBUG - 2024-08-15 23:59:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2024-08-15 23:59:28 --> Session: Class initialized using 'files' driver.
INFO - 2024-08-15 23:59:28 --> Upload Class Initialized
INFO - 2024-08-15 23:59:28 --> Controller Class Initialized
INFO - 2024-08-15 23:59:28 --> Model "M_admin" initialized
INFO - 2024-08-15 23:59:28 --> Model "M_config" initialized
DEBUG - 2024-08-15 23:59:28 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-08-15 23:59:28 --> Session class already loaded. Second attempt ignored.
ERROR - 2024-08-15 23:59:28 --> Language file contains no data: language/indonesia/frontend_lang.php
