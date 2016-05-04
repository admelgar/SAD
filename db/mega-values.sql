INSERT INTO accounts VALUES
/*password: hehehe; password:whyucry*/
/*encrypt password pls*/
/*paano pala if they want to change their password?*/
(1,'Anna', 'Melgar', "admelgar","$2a$10$J7ELAufFTDwm9REekaJSLObhlLnf7MCYvYBnt39ackgkuL.jUUkbi",'admin','anna.melgar@yahoo.com','09151230244','12111 Katipunan Avenue, Manila 1008','Go Anna!'),
(2,'Mandy','Moore',"mmoore","$2a$04$VUO5cBCOCWCy2o6bc6yCseAz7n9FIo.hnVpqOV5IuiMlk6uDr4n8W",'officer','cry@gmail.com','09121144211','12311 J Santos street, QC 1211','Go Mandy!'),

(3,'April May','Agustin',"amagustin","huhubels",'officer','aprilagustin@gmail.com','09182004567','20 Ferndale Street, Hotel Transylvania Subdivision, Antipolo City','Go April!'),
(4,'Katrina','Bautista',"kbautista","huhubelers",'officer','kmbautista79@gmail.com','09182374883','7 Eighth Street, Brgy. Siyamnapu, QC','Go Katrina!'),
(5,'Sam','Smith',"ssmith","lollers",'officer','sam_smith0820@gmail.com','09159317248','23 Pineapple Street, Brgy. Bikini Bottom, Marikina City','Go Sam!');


INSERT INTO clients VALUES
/*admin is manager who does not handle/input any client*/
(1,'3','Micro','Mar','Roxas','Leni','Robredo','Daang Matuwid Inc.','ACTIVE','tsinelas@yellow.com','0927123143','Go RoRo!'),
(2,'4','Medium','Miriam','Santiago','Bong Bong','Marcos','Red Company Inc.','RISK', 'mdsbbm@red.com','09121212453',''),
(3,'2','Small','Grace','Poe','Chiz','Escudero','Coffee Bean and Tea Leaf','IDLE','coffeeservice@cbtl.com','09817241832',''),
(4,'2','Micro','Rody','Duterte','Alan','Cayetano','Starbucks Partners','IDLE','customerservice@starbs.com','09123111112',''),

(5,'3','Small','Nadine','Luster','Hannah','Montana','Jadine Convenience Store','ACTIVE','jadinestore@gmail.com','09126469023',''),
(6,'3','Micro','James','Red','Betty','Boop','Kathniel Supermarket','IDLE','bboop@kathniel.com','09179520060',''),
(7,'3','Micro','Danielle','Padilla','Eddy','Wag','Lizquen Shopping Center','RISK','lizquenshop@yahoo.com','09739317248','Last payment June 23, 2014'),
(8,'4','Micro','Kathryn','Bernardino','Anne Lakisha','Dickinson','Saveless','ACTIVE','inquiry@saveless.com.ph','09184328765',''),
(9,'4','Medium','Anna','Arrobio','Yuko','Nah','Lucky Nugget','ACTIVE','stitchxnugs@luckynugget.com','09879876543',''),
(10,'4','Small','Alanis','Lena','Wanda','Fe','Carrefour Sports Center','ACTIVE','sports@carrefour.com','09219081273','Has to claim change 50 pesos'),
(11,'5','Micro','Robert','Quarter','Tina Elsa','Tabitu','Chicken Spot','ACTIVE','poppers@chickenspot.com','09832143567',''),
(12,'5','Small','Anna','Melguard','Michael','Jordan','AEU Residences','IDLE','residence_aeu@ucl.com','09289283922',''),
(13,'5','Medium','Alyssandra','Benitez','Evelyne','Dumont','ISEN Music Shop','ACTIVE','piano@music.isen.edu','09012917283',''),
(14,'5','Medium','June','Setyembre','Bonie Chonie','Chicken','Quick Burger Stop','ACTIVE','quick_burger@yahoo.com','09119234567',''),
(15,'4','Micro','Sam','Sung','Sam Ting','Wong','Mainit Grocery Store','ACTIVE','anglala@mainit.com','09992828282','Need cold by June 1'),
(16,'4','Micro','Ella','Arguelles','Mocha Latte','Matias','Picard Frozen Things','IDLE','picard@frozen.gov','09125454545','Collateral delivery by August 12'),
(17,'3','Micro','Trey','Perez','Julie Bae','Sunga','Bumper Cars','RISK','bumpercars@gmail.com','09456666666',''),
(18,'2','Small','Ronnalyn','Roman','Mark','Bautista','Space Mountain Hardware','ACTIVE','spacemountain@disneyland.com','09841302954',''),
(19,'2','Small','Elijah','Crisostomo','Jose Maria','Lalang','Chimes Square','IDLE','nyclv@chimes.com','09192010011',''),
(20,'5','Micro','Winnie','Pooh','Christian','Santos','Leffe','ACTIVE','mercileffe@beaucoup.com','09123135612','');


INSERT INTO cases VALUES
/*wait pareho yung status dito and sa client?*/
/*didnt change actual balances yet*/
(1,'1','78000.00','78000.00','2016-04-23','2016-07-02','10','5','Contact Leni if Mar is busy','ACTIVE','100.00','200.50'),
(2,'2','95000.00','80000.00','2015-05-10','2015-12-25','24','12','','RISK','300.00','200.00'),
(3,'3','24000.00','18000.00','2016-02-29','2016-05-23','12','7','','IDLE','4000.00','1000.00'),
(4,'4','32000.00','80000.00','2016-03-12','2016-06-04','12','5','','IDLE','300.00','200.00'),
(5,'5','16000.00','80000.00','2016-01-30','2016-04-23','12','7','','ACTIVE','300.00','200.00'),
(6,'6','18000.00','80000.00','2016-03-23','2016-06-01','10','5','','IDLE','300.00','200.00'),
(7,'7','40000.00','80000.00','2015-11-22','2016-05-08','24','5','','RISK','300.00','200.00'),
(8,'8','80000.00','80000.00','2016-01-19','2016-04-12','12','5','','ACTIVE','300.00','200.00'),
(9,'9','74000.00','80000.00','2016-01-20','2016-04-13','12','12','','ACTIVE','300.00','200.00'),
(10,'10','13000.00','80000.00','2016-05-01','2016-07-24','12','7','','ACTIVE','300.00','200.00'),
(11,'11','10000.00','80000.00','2016-04-08','2016-06-17','10','5','','ACTIVE','300.00','200.00')
(12,'12','82000.00','80000.00','2016-04-12','2016-07-05','12','7','May pay whole on 5th dormer','IDLE','300.00','200.00')
(13,'13','37000.00','80000.00','2016-04-23','2016-07-16','12','12','','ACTIVE','300.00','200.00')
(14,'14','39000.00','80000.00','2016-03-14','2016-06-06','12','12','','ACTIVE','300.00','200.00')
(15,'15','58000.00','80000.00','2016-02-06','2016-04-30','12','5','','ACTIVE','300.00','200.00')
(16,'16','26000.00','80000.00','2016-03-01','2016-05-24','12','5','','IDLE','300.00','200.00')
(17,'17','72000.00','80000.00','2016-04-19','2016-07-12','12','5','','RISK','300.00','200.00')
(18,'18','90000.00','80000.00','2016-05-01','2016-07-24','24','7','','ACTIVE','300.00','200.00')
(19,'19','56000.00','80000.00','2016-01-27','2016-04-20','12','7','','IDLE','300.00','200.00')
(20,'20','34000.00','80000.00','2016-02-02','2016-04-26','12','5','','ACTIVE','300.00','200.00');


INSERT INTO expected VALUES
/*expected values for client_id 1 only*/
/*principal_due, interest_due and total_due not changed*/
(1,'1','1','2016-04-30','7800.00','3900.00','11700.00','300.00','200.00','500.00','PAID'),
(2,'1','1','2016-05-07','7800.00','3900.00','11700.00','300.00','200.00','500.00','PAID'),
(3,'1','1','2016-05-14','7800.00','3900.00','11700.00','300.00','200.00','500.00','UNPAID'),
(4,'1','1','2016-05-21','7800.00','3900.00','11700.00','300.00','200.00','500.00','UNPAID'),
(5,'1','1','2016-05-28','7800.00','3900.00','11700.00','300.00','200.00','500.00','UNPAID'),
(6,'1','1','2016-06-04','7800.00','3900.00','11700.00','300.00','200.00','500.00','UNPAID'),
(7,'1','1','2016-06-11','7800.00','3900.00','11700.00','300.00','200.00','500.00','UNPAID'),
(8,'1','1','2016-06-18','7800.00','3900.00','11700.00','300.00','200.00','500.00','UNPAID'),
(9,'1','1','2016-06-25','7800.00','3900.00','11700.00','300.00','200.00','500.00','UNPAID'),
(10,'1','1','2016-07-02','7800.00','3900.00','11700.00','300.00','200.00','500.00','UNPAID');


INSERT INTO actual VALUES
/*actual for client_id 1 only*/
(1,'1','1','3','2016-04-30','Cash','0','11700.00','7800.00','3900.00','0.00','VALID',''),
(2,'1','1','3','2016-05-07','Check','1211121','11700.00','7800.00','3900.00','BOUNCE','Bounced check. Process of replacement');


INSERT INTO logs VALUES
(1,'Melgar Anna','2016-04-23 21:35:02','Add Payment','Daang Matuwid Inc.','','78000 paid last 04/23/16'),
(2,'Melgar Anna','2016-04-24 21:22:02','Edit Client Status','RCI','ACTIVE','RISK');