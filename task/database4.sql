SELECT `cars`.`id`,
    `cars`.`brand`,
    `cars`.`model`,
    `cars`.`seats`,
    `cars`.`color`,
    `cars`.`year`,
    `cars`.`brand_country_id`,
    `cars`.`created`,
    `cars`.`updated`
FROM `neurony`.`cars`
WHERE `cars`.`year` > 2010 ;
