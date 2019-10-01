CREATE TABLE `brand_countries` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `brand_country` varchar(45) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `neurony`.`brand_countries`
(`brand_country`)
SELECT DISTINCT `brand_country` FROM `neurony`.`cars`;

UPDATE `neurony`.`cars`
SET
`brand_country` = (SELECT `id` FROM `neurony`.`brand_countries` WHERE `cars`.`brand_country` = `brand_countries`.`brand_country`)
WHERE `id` > 0;

ALTER TABLE `neurony`.`cars`
CHANGE COLUMN `brand_country` `brand_country_id` INT(10) NULL DEFAULT NULL ;

ALTER TABLE `neurony`.`cars`
ADD INDEX `fk_cars_1_idx` (`brand_country_id` ASC);
ALTER TABLE `neurony`.`cars`
ADD CONSTRAINT `fk_cars_1`
  FOREIGN KEY (`brand_country_id`)
  REFERENCES `neurony`.`brand_countries` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


