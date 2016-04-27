INSERT INTO accounts VALUES
/*password: hehehe; password:whyucry*/
(1,'Anna', 'Melgar', "admelgar","$2a$10$J7ELAufFTDwm9REekaJSLObhlLnf7MCYvYBnt39ackgkuL.jUUkbi",'admin','anna.melgar@yahoo.com','09151230244','12111 Katipunan Avenue, Manila 1008','Go Anna!'),
(2,'Mandy','Moore',"mmoore","$2a$04$VUO5cBCOCWCy2o6bc6yCseAz7n9FIo.hnVpqOV5IuiMlk6uDr4n8W",'manager','cry@gmail.com','09121144211','12311 J Santos street, QC 1211','Go Mandy!');

INSERT INTO clients VALUES

(1,'1','Micro','Mar','Roxas','Leni','Robredo','Daang Matuwid Inc.','ACTIVE','tsinelas@yellow.com','027123143','Go RoRo!'),
(2,'1','Medium','Miriam','Santiago','Bong Bong','Marcos','Red Company Inc.','RISK', 'mdsbbm@red.com','09121212453',''),

(3,'2','Small','Grace','Poe','Chiz','Escudero','Coffee Bean and Tea Leaf','IDLE','coffeeservice@cbtl.com','09817241832',''),
(4,'2','Micro','Rody','Duterte','Alan','Cayetano','Starbucks Partners','IDLE','customerservice@starbs.com','09123111112','');

INSERT INTO cases VALUES

(1,'1','78000.00','78000.00','2016-04-23','2016-07-23','10','7','Contact Leni if Mar is busy','ACTIVE','100.00','200.50'),
(2,'2','95000.00','80000.00','2015-05-10','2015-12-25','24','5','','RISK','300.00','200.00');

INSERT INTO expected VALUES
(1,'1','1','1','2016-04-23','1000.00','2000.50','3000.50','300.50','100.00','200.50'),
(2,'2','2','2','2015-05-10','15000.00','3000.00','2000.00','300.00','200.00','500.00');


INSERT INTO actual VALUES

(1,'1','1','1','2016-04-23','Cash','0','300.50','100.00','200.50','0.00','VALID',''),
(2,'2','2','1','2015-05-10','Check','1211121','15000.00','3000.00','2000.00','100.00','BOUNCE','Bounced check. Process of replacement');



INSERT INTO logs VALUES
(1,'Melgar Anna','2016-04-23 21:35:02','Add Payment','Daang Matuwid Inc.','','78000 paid last 04/23/16'),
(2,'Melgar Anna','2016-04-24 21:22:02','Edit Client Status','RCI','ACTIVE','RISK');