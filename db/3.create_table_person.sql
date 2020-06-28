
CREATE TABLE `Person` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `surname` varchar(1000) NOT NULL,
  `phone`  INT DEFAULT NULL,
  `address_line1` varchar(1000) DEFAULT NULL,
  `address_line2` varchar(1000) DEFAULT NULL
);


ALTER TABLE `Person`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Person`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;


