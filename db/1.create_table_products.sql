
CREATE TABLE `Product` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `stock` int DEFAULT NULL
);


ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Product`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

