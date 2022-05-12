CREATE database intervolga
use intervolga
CREATE TABLE `спортсмены` (
    `id Спортсмена` INT AUTO_INCREMENT NOT NULL,
    `ФИО` VARCHAR 50 NOT NULL ,
    `е-mail` VARCHAR 50 NOT NULL ,
    `Телефон` VARCHAR 100 NOT NULL ,
    `Дата рождения` DATE NOT NULL ,
    `Возраст` INT NOT NULL ,
    `Дата и время создания записи` TIMESTAMP NOT NULL ,
    `Номер паспорта` VARCHAR 50 NOT NULL ,
    `Среднее место на соревнованиях` INT NOT NULL ,
    `Биография` TEXT NOT NULL ,
    `Видео презентация` VARCHAR 50 NOT NULL ,
    PRIMARY KEY(`id Спортсмена`)
    )
/*если речь шла о топ 5 по занимаемому месту на соревнованиях то
 SELECT будет выглядеть так:*/
use intervolga

SELECT `Среднее место на соревнованиях` FROM `спортсмены`
    ORDER BY `Среднее место на соревнованиях` ASC
    LIMIT 5;

