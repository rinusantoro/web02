BEGIN

DECLARE exit handler for sqlexception
BEGIN
-- ERROR
ROLLBACK;
END;
DECLARE exit handler for sqlwarning
BEGIN
-- WARNING
ROLLBACK;
END;

START TRANSACTION;
UPDATE table_1 SET jumlah=jumlah-jml WHERE kode=id;
UPDATE table_2 SET jumlah=jumlah+jml WHERE kode=id;

COMMIT;
END
