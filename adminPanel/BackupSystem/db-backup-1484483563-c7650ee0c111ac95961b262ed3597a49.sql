DROP TABLE bill;

CREATE TABLE `bill` (
  `InvoiceNo` char(50) NOT NULL DEFAULT '0',
  `ItemNo` char(50) NOT NULL DEFAULT '1',
  `BrandName` varchar(50) DEFAULT NULL,
  `DosageForm` varchar(50) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `ExpirationDate` date DEFAULT NULL,
  `UnitPrice` double DEFAULT NULL,
  `ItemPrice` double DEFAULT NULL,
  `Discount` double DEFAULT NULL,
  `HealthTips` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`InvoiceNo`,`ItemNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO bill VALUES("1001","1","Panadol","Syrup","3","2017-04-08","130","9","","");
INSERT INTO bill VALUES("1701085","1","","","","","","","","");
INSERT INTO bill VALUES("1701086","1","Panadol","Syrup","3","2017-06-12","0","6","","");
INSERT INTO bill VALUES("1701087","1","Panadol","Syrup","3","2017-04-08","130","9","","");



DROP TABLE complete;

CREATE TABLE `complete` (
  `OrderNo.` int(100) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `DP` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DPTime` time NOT NULL,
  `Telephone` char(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `ImageName1` varchar(64) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `ImageName2` varchar(64) NOT NULL,
  `Image3` varchar(255) NOT NULL,
  `ImageName3` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO complete VALUES("131","933560621 ","Pickup","-","21:30:00","112422628","lasithd2@gmail.com","photo/1.JPG","1.JPG","No copy"," ","No copy"," ");
INSERT INTO complete VALUES("151","933560621 ","Pickup","-","12:00:00","112422628","lasithd2@gmail.com","photo/1.JPG","1.JPG","photo/2.JPG","2.JPG","No copy"," ");



DROP TABLE customer;

CREATE TABLE `customer` (
  `NIC` varchar(13) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(255) NOT NULL DEFAULT 'NOT SET',
  `Status` varchar(10) NOT NULL DEFAULT 'NOT SET',
  `Contact` char(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `BloodGroup` varchar(50) DEFAULT 'NOT SET',
  `AllergicDrugs` varchar(50) NOT NULL DEFAULT 'NOT SET',
  PRIMARY KEY (`NIC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("933560514V","Kasun","Kumararathna","male","1993-12-11",""," ","0718124190","kasun@gmail.com","$2y$10$1U.0q1F3UI31sEqb6mrZIeo6bFqiJXEGVwQdDbm3ZM9vvhvs1Z3wq","NOT SET","NOT SET");
INSERT INTO customer VALUES("933560524V","Vishva","Sudantha","male","1993-12-01","Kalutara","Single","0719124190","ab@gmail.com","$2y$10$5Neyc9GagcyeYHF8KSL7cOvimGTHHHq/6x1YTpOmqhK7EQDzZA9N6"," ","Cordarone");
INSERT INTO customer VALUES("935780942V","Ushani","Nayanathara","","1993-03-18",""," ","0710598705","ushani93@gmail.com","$2y$10$.mLztOHkBhP8F8IFOhyC5OFwl.jkHrZib.AUstaZZjsjlVJS0i6Ge","NOT SET","NOT SET");
INSERT INTO customer VALUES("955643091V","Amal","Perera","male","1995-12-12",""," ","0719938109","a@gmail.com","$2y$10$1wXc9z2m035J8BXSwr1Rs..0RfTykwsBBiGiT.hxoQAuZGsi8mcMu","NOT SET","NOT SET");



DROP TABLE doctor;

CREATE TABLE `doctor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `hospital` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO doctor VALUES("1","Dr. Abewardhana","Cancer Specialist","Distric Base Hospital - Gampaha");
INSERT INTO doctor VALUES("2","Dr.  Prasad Abeysinghe","Cancer Specialist","Base Hospital - Watthupitiwala");
INSERT INTO doctor VALUES("3","Dr. AgeyGunasekara","Denito Urinary Surgeon","Teaching Hospital - Ragama");
INSERT INTO doctor VALUES("4","Dr. S. C. Abeysooriya","Neuro Surgeon","Distric Base Hospital - Gampaha");
INSERT INTO doctor VALUES("5","Dr. M. Abeywardhana","Gynaecologist","Distric Hospital - Minuwangoda");
INSERT INTO doctor VALUES("6","Dr. R.  Ajanthan","Paediatrician","District Hospital - Divulapitiya ");
INSERT INTO doctor VALUES("7","Dr.  S.  F.  L.  Akbar ","Gynaecologist","District Hospital - Mirigama ");
INSERT INTO doctor VALUES("8","Dr.  Dasanthi Akmeemana ","Psychiatrist","Sethma Hospital - Gampaha ");
INSERT INTO doctor VALUES("9","Dr.  K.  Alagarathnam ","Surgeon","District Base Hospital - Kiribathgoda ");
INSERT INTO doctor VALUES("10","Dr.  A.  T.  Alibhoy ","Neuro Physician","Peripheral Hospital - Pamunuwa ");
INSERT INTO doctor VALUES("11","Dr. Sanjaya AbeyGunasekara","Paediatric Surgeon","Distric Base Hospital - Gamapaha");
INSERT INTO doctor VALUES("12","Dr.  Ranjith Almeida ","Gynaecologist","Rural Hospital - Udupila ");
INSERT INTO doctor VALUES("13","Dr.  Stanley Amarasekara ","Cardiologist","Rural Hospital - Biyagama ");
INSERT INTO doctor VALUES("14","Dr.  Sarath Amarasekara","Cardiologist","Vijaya Kumarathunga Memorial Hospital - Seeduwa ");
INSERT INTO doctor VALUES("15","Dr.  N.  Amarasekara ","Physician","Rural Hospital - Kapala Kanda ");
INSERT INTO doctor VALUES("16","Dr.  Binara Amarasinghe ","Eye Surgeon","Peripheral Hospital - Radawana ");
INSERT INTO doctor VALUES("17","Dr.  Anil  P.  Ambawatta ","Surgeon","Peripheral Hospital - Akkaragama ");
INSERT INTO doctor VALUES("19","Dr. Yasantha Ariyarathna ","Oncologist","Peripheral Hospital - Bokalagama ");
INSERT INTO doctor VALUES("20","Dr. D.  N. Athukorala ","Dermatologist","Rural Hospital - Hiripitiya ");
INSERT INTO doctor VALUES("31","Dr. Abeyrathne","Heart Surgeon","Gampaha District Hospital ");



DROP TABLE drug;

CREATE TABLE `drug` (
  `DrugNo` char(50) NOT NULL,
  `GeneticName` varchar(50) NOT NULL,
  `BrandName` varchar(20) NOT NULL,
  `DosageForm` varchar(20) NOT NULL,
  `Alternatives` varchar(150) DEFAULT NULL,
  `Compositions` varchar(100) NOT NULL,
  `DosePerPerson` varchar(50) NOT NULL,
  `Strength` varchar(5) NOT NULL,
  `healthTips` varchar(500) DEFAULT NULL,
  `storage` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`DrugNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO drug VALUES("010101","Paracetamol","Panadol","Tablet","Calpol, Disprol","Paracetamol, Sucrose, Sorbitol","2 tablets 3 times a day","500mg","Stop taking the medication and seek immediate medical attention if there are signs of a serious allergic reaction,  difficulty breathing,  swelling of face or throat","Any place");
INSERT INTO drug VALUES("010102","Paracetamol","Panadol","Syrup","Calpol, Disprol","Paracetamol, Sucrose, Sorbitol","1 spoon three times a day (8kg)","120ml","Stop taking the medication and seek immediate medical attention if there are signs of a serious allergic reaction,  difficulty breathing,  swelling of face or throat","Any place");
INSERT INTO drug VALUES("010201","Paracetamol","Disprol","Tablet","Panadol, Calpol","Paracetamol, Sucrose, Sorbitol","2 tablets three times a day","250mg","Stop taking the medication and seek immediate medical attention if there are signs of a serious allergic reaction,  difficulty breathing,  swelling of face or throat","");
INSERT INTO drug VALUES("010202","Paracetamol","Disprol","Syrup","Panadol, Calpol","Paracetamol, Sucrose, Sorbitol","2 tablets 3 times a day","500mg","Stop taking the medication and seek immediate medical attention if there are signs of a serious allergic reaction,  difficulty breathing,  swelling of face or throat","Any place");
INSERT INTO drug VALUES("010301","Paracetamol","Calpol","tablet","Panadol, Disprol","Paracetamol, Sucrose, Sorbitol","2 tablets 3 times a day","500mg","Stop taking the medication and seek immediate medical attention if there are signs of a serious allergic reaction,  difficulty breathing,  swelling of face or throat","Any place");
INSERT INTO drug VALUES("010302","Paracetamol","Calpol","Syrup","Panadol, Disprol","Paracetamol, Sucrose, Sorbitol","1 spoon three times a day","120ml","Stop taking the medication and seek immediate medical attention if there are signs of a serious allergic reaction,  difficulty breathing,  swelling of face or throat","");
INSERT INTO drug VALUES("010401","Oaracetamol","Cryptol","Tablet","","Paracetamol, Sorbitol","2 tablets 3 times a day","500mg","Stop taking the medication and seek immediate medical attention if there are signs of a serious allergic reaction,  difficulty breathing,  swelling of face or throat","Any place");
INSERT INTO drug VALUES("020401","Bupropion"," 	Wellbutrin XL","Tablet","Wellbutrin SR","bupropion hydrochloride","1 tablet 2 times a day","150mg","Stop taking the medication and seek immediate medical attention if there are signs of a serious allergic reaction,  difficulty breathing,  swelling of face or throat","Any place");
INSERT INTO drug VALUES("030501","Amiodarone","CordaroneIV","Tablet","Nexterone, Cordarone, Pacerone","2-butyl-3-benzofuranyl 4-[2-(diethylamino)-ethoxy]-3, 5-diiodophenyl ketone hydrochloride","2 tablet 3 times ","500mg","If taken during pregnancy or breastfeeding it can cause problems in the baby","Store in a cool, dry place, away from direct heat and light");
INSERT INTO drug VALUES("030601","Amiodarone","Nexterone","Tablet"," Cordarone, Pacerone, CordaroneIV","2-butyl-3-benzofuranyl 4-[2-(diethylamino)-ethoxy]-3, 5-diiodophenyl ketone hydrochloride","2 tablet 3 times","500mg","If taken during pregnancy or breastfeeding it can cause problems in the baby","Store in a cool, dry place, away from direct heat and light");
INSERT INTO drug VALUES("030701","Amiodarone","Pacerone","Tablet","Nexterone, Cordarone, CordaroneIV","2-butyl-3-benzofuranyl 4-[2-(diethylamino)-ethoxy]-3, 5-diiodophenyl ketone hydrochloride","2 tablet 3 times","500mg","If taken during pregnancy or breastfeeding it can cause problems in the baby","Store in a cool, dry place, away from direct heat and light");
INSERT INTO drug VALUES("030801","Amiodarone ","Cordarone","Tablet","Pacerone, Nexterone, Cordarone IV","2-butyl-3-benzofuranyl 4-[2-(diethylamino)-ethoxy]-3, 5-diiodophenyl ketone hydrochloride","2 tablet three times","500mg","If taken during pregnancy or breastfeeding it can cause problems in the baby","Store in a cool, dry place, away from direct heat and light");
INSERT INTO drug VALUES("040901","Altretamine","Hexalen ","Tablet","","Tenormin, altretamine","1 capsule three times a day","250mg","","");
INSERT INTO drug VALUES("051001","Bupropion","Wellbutrin SR","Tablet","Wellbutrin XL","bupropion hydrochloride","1 tablet 2 times a day","150mg","Stop taking bupropion and get medical help right away if you have any very serious side effects, including: seizure, eye pain/swelling/redness, widened pupils, vision changes (such as seeing rainbows around lights at night, blurred vision).","Any place");
INSERT INTO drug VALUES("061103","Capsaissin","Rezil","Cream","Quenteza, Theragen","Dihydrocapsaicin, Nodihydrocapsaicin, Homodihydrocaapsaicin","Up to 4 times daily","120mg","If blurred vision,dizziness,nervousness or fast heartbeat occur, stop using and meet your doctor","Store at room temperature, away from heat, moisture, and light.");
INSERT INTO drug VALUES("061203","Capsaisin","Theragen","Cream","Quenteza, Rezil","Dihydrocapsaicin, Nodihydrocapsaicin, Homodihydrocaapsaicin","Up to 4 times daily","120mg","If blurred vision,dizziness,nervousness or fast heartbeat occur, stop using and meet your doctor","Store at room temperature, away from heat, moisture, and light.");
INSERT INTO drug VALUES("061303","Capsaisin","Qutenza","Cream","Theragen, Rezil","Dihydrocapsaicin, Nodihydrocapsaicin, Homodihydrocaapsaicin","up to 4 times daily","120mg","If blurred vision,dizziness,nervousness or fast heartbeat occur, stop using and meet your doctor","Store at room temperature, away from heat, moisture, and light.");
INSERT INTO drug VALUES("081401","Benzoate","Zonatuss","Tablet","Tessalon","Procaine, Tetracaine","1 tablet 2 times a day","125mg","Tell your doctor right away if any mental/mood changes, loss of feeling in the chest, burning in the eyes occur.","Any place");
INSERT INTO drug VALUES("081501","Benzonatate","Tessalon","Tablet","Zonatuss","procaine, tetracaine","1 tablet two times a day","125mg","Tell your doctor right away if any mental/mood changes, loss of feeling in the chest, burning in the eyes occur.","Any place");



DROP TABLE drugstock;

CREATE TABLE `drugstock` (
  `StockNo` char(50) NOT NULL,
  `BrandName` varchar(50) NOT NULL DEFAULT '0',
  `DosageForm` varchar(50) NOT NULL DEFAULT '0',
  `SupplierName` varchar(50) NOT NULL DEFAULT '0',
  `PurchaseDate` date NOT NULL,
  `ExpireDate` date NOT NULL,
  `Expired` int(3) NOT NULL DEFAULT '0',
  `QtyType` varchar(50) NOT NULL,
  `RemainingQty` varchar(50) NOT NULL,
  `OrderedQty` varchar(50) NOT NULL DEFAULT '0',
  `ReturnPolicy` int(11) NOT NULL DEFAULT '0',
  `RetailPrice` double NOT NULL DEFAULT '0',
  `OrderedPrice` double NOT NULL DEFAULT '0',
  `Discount` double NOT NULL DEFAULT '0',
  `ProfitMargin` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`StockNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO drugstock VALUES("010101","Panadol","Tablet","Hemas Pharmaceuticals","2016-11-12","2019-01-12","0","No.ofBoxes","250","0","0","110","100","1","1");
INSERT INTO drugstock VALUES("010201","Panadol  ","Syrup  ","Hemas Pharmaceuticals  ","2016-11-08","2017-04-08","0","No. of Bottles","20","2000","1","130","100","3","2");
INSERT INTO drugstock VALUES("010202","Panadol","Syrup","Glaxo Healthcare (Pvt) Ltd ","2016-11-12","2017-06-12","0","No. of Bottles","8","2000","1","110","100","2","2");
INSERT INTO drugstock VALUES("010203","Panadol","Syrup","Meditech","2017-01-12","2019-01-13","0","No. of Bottles","12","2000","0","110","110","0","0");
INSERT INTO drugstock VALUES("020103","Disprol","Tablet","Meditech","2016-06-12","2018-11-13","0","No.of Packets","100","1000","1","65","65","0","0");
INSERT INTO drugstock VALUES("020201","Calpol","Syrup","Hemas Pharmaceuticals","2016-09-05","2018-01-12","0","No.of Bottles","40","1000","0","143","130","1","1");
INSERT INTO drugstock VALUES("020203","Disprol","Syrup","Meditech","2016-01-14","2019-01-12","0","No.ofBottles","300","400","0","100","100","0","1");
INSERT INTO drugstock VALUES("020204","Calpol","Tablet","Arogya","2016-02-12","2020-01-12","0","No.ofBottles","500","1000","0","550","500","1","0");
INSERT INTO drugstock VALUES("040101","Wellbutrin SR","Tablet","Hemas Pharmaceuticals","2016-11-12","2019-01-12","0","No. of Packets","123","400","1","129.8","118","1","2");
INSERT INTO drugstock VALUES("040102","Wellbutrin XL","Tablet","Glaxo Healthcare (Pvt) Ltd","2016-01-12","2019-01-12","0","No. of Packets","243","1000","0","121","110","2","2");
INSERT INTO drugstock VALUES("040104","Wellbutrin XL","Tablet","Arogya","2016-11-30","2019-01-12","0","No. of Packets","250","1000","1","132","120","1","2");
INSERT INTO drugstock VALUES("050101","Cordarone","Tablet","Hemas Pharmaceuticals","2015-01-13","2018-01-12","0","No.of Packets","250","400","1","84","70","2","1");
INSERT INTO drugstock VALUES("050103","CordaroneIV","Tablet","Meditech","2016-04-12","2018-11-22","0","No.of Packets","200","1000","1","96.2","81","2","2");
INSERT INTO drugstock VALUES("060104","Nexterone","Tablet","Arogya","2016-11-12","2018-11-12","0","No. of Packets","300","500","1","82.5","75","1","1");
INSERT INTO drugstock VALUES("070103","Pacerone","Tablet","Meditech","2016-10-12","2018-01-12","0","No. of Packets","200","1000","1","80.3","73","1","2");
INSERT INTO drugstock VALUES("070104","Pacerone","Tablet","Arogya","2015-11-12","2017-01-12","120","No.of Packets","120","600","1","71.07","69","3","2");
INSERT INTO drugstock VALUES("090102","Hexalen","Tablet","Glaxo Healthcare (Pvt) Ltd","2016-11-12","2018-01-12","0","No.of Packets","30","200","0","120","100","2","2");
INSERT INTO drugstock VALUES("100103","Wellbutrin SR","Tablet","Meditech","2015-03-15","2017-01-12","45","No. of Packets","45","2000","1","136.4","124","2","2");
INSERT INTO drugstock VALUES("110301","Rezil","Cream","Hemas Pharmaceuticals","2016-05-10","2018-07-16","0","No.of Tubes","200","1000","1","66","60","1","2");
INSERT INTO drugstock VALUES("120301","Quetenza","Cream","Hemas Pharmaceuticals","2016-11-12","2018-11-12","0","no. of Tubes","75","400","1","143","130","1","2");
INSERT INTO drugstock VALUES("120302","Theragen","Cream","Glaxo Healthcare (Pvt) Ltd","2015-01-12","2016-12-31","100","No.of Tubes","100","700","1","137.5","125","2","2");
INSERT INTO drugstock VALUES("140101","Zonatuss","Tablet","Hemas Pharmaceuticals","2016-11-02","2018-11-22","0","No. of Packets","150","1500","1","51","50","2","2");
INSERT INTO drugstock VALUES("150102","Tessalon","Tablet","Glaxo Healthcare (Pvt) Ltd","2016-01-12","2018-01-12","0","No. of Packets","200","2000","1","81.6","80","2","1");



DROP TABLE hospital;

CREATE TABLE `hospital` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hospitalname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `telephonenum` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

INSERT INTO hospital VALUES("1","Base Hospital","Wattupitiwala","0332959262");
INSERT INTO hospital VALUES("2","Distric Base Hospita\nl","Negambo","0332959263");
INSERT INTO hospital VALUES("3","Distric Base Hospital","Gampaha","0332222629");
INSERT INTO hospital VALUES("4","Distric Hospital","Minuwangoda","0332959264");
INSERT INTO hospital VALUES("5","Distric Hospital","Dompe","0332959265");
INSERT INTO hospital VALUES("7","District Hospital","Minuwangoda","0332959267");
INSERT INTO hospital VALUES("8","Peripheral Hospital","Pamunuwa","0332959268");
INSERT INTO hospital VALUES("9","Teaching Hospital","Ragama","0332959261");
INSERT INTO hospital VALUES("10","Sethma Hospital ","Gampaha ","0335963874");
INSERT INTO hospital VALUES("11","District Hospital","Divulapitiya ","0312246261");
INSERT INTO hospital VALUES("12","District Hospital ","Mirigama ","0332273261");
INSERT INTO hospital VALUES("13","District Base Hospital ","Kiribathgoda ","0112911493");
INSERT INTO hospital VALUES("14","Peripheral Hospital ","Pamunuwa ","112236622");
INSERT INTO hospital VALUES("15","Rural Hospital ","Udupila ","0112402237");
INSERT INTO hospital VALUES("16","Rural Hospital","Biyagama ","112487527");
INSERT INTO hospital VALUES("17","Vijaya Kumarathunga Memorial Hospital","Seeduwa ","0112258862");
INSERT INTO hospital VALUES("18","Rural Hospital","Kapala Kanda ","0112236328");
INSERT INTO hospital VALUES("19","Peripheral Hospital ","Radawana ","0332267261");
INSERT INTO hospital VALUES("20","Peripheral Hospital ","Akkaragama ","0312269261");
INSERT INTO hospital VALUES("21","Peripheral Hospital ","Bokalagama ","332270283");
INSERT INTO hospital VALUES("22","Rural Hospital","Hiripitiya ","0332279261");
INSERT INTO hospital VALUES("41","Rural hospital","Seeduwa","0335685741");
INSERT INTO hospital VALUES("51","Co-operative Hospital","Gampaha","0332222201");



DROP TABLE invoice;

CREATE TABLE `invoice` (
  `InvoiceNo` char(50) DEFAULT NULL,
  `NIC` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `DrugNo` char(50) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `Discount` varchar(50) DEFAULT NULL,
  `DiscountedPrice` varchar(50) DEFAULT NULL,
  `Method` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO invoice VALUES("1701081","935643090v","2017-01-08","1","18","2","100.00","0");
INSERT INTO invoice VALUES("1701081","933560612V","2017-01-08","2","50","1","200.00","1");
INSERT INTO invoice VALUES("1701085","930492515v","2017-01-11","3","10","1","500.00","0");



DROP TABLE news;

CREATE TABLE `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `postnews` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO news VALUES("1","Tommorow we will be closed.","2016-11-02");
INSERT INTO news VALUES("2","Now you can order online your prescribed medicine","2016-11-02");
INSERT INTO news VALUES("3","Now you can buy medicine with 5% discount.","2017-01-10");
INSERT INTO news VALUES("11","There is a vacancy for a pharmacist","2016-05-12");
INSERT INTO news VALUES("12","Tommorow will be opened at 10 am","2017-01-10");
INSERT INTO news VALUES("21","Tommorrow pharmacy will be closed","2017-01-15");



DROP TABLE notifications;

CREATE TABLE `notifications` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Content` varchar(200) NOT NULL DEFAULT '0',
  `Title` varchar(50) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE order;

;




DROP TABLE pharmacist;

CREATE TABLE `pharmacist` (
  `NIC` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `DOB` date NOT NULL,
  `PermanentAddress` varchar(150) NOT NULL,
  `CivilStatus` enum('Single','Married','Widowed','Divorced') NOT NULL,
  `ContactNo` char(50) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `DateHired` date NOT NULL,
  `Admin/Trainee` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`NIC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pharmacist VALUES("930492515V","Admin","User","Male","1993-12-07","No.13, Main Stret, Gamapaha.","Married","773003002","admin@gmail.com","test123","2016-12-07","1");



DROP TABLE questions;

CREATE TABLE `questions` (
  `qId` int(2) NOT NULL,
  `question` varchar(500) NOT NULL,
  `correctAns` varchar(200) NOT NULL,
  `wrongAns1` varchar(200) NOT NULL,
  `wrongAns2` varchar(200) NOT NULL,
  `wrongAns3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO questions VALUES("1","Heparin therapy is monitored by which of the following tests?","APTT"," 	INR","Bleeding time","Serum fibrinogen");
INSERT INTO questions VALUES("2","Which of the following is a common side effect of calcium channel blockers?","Peripheral oedema","Angio-oedema","Headache","Insomnia");
INSERT INTO questions VALUES("3","A 68-years old female presents with a 2-week history of unilateral headache and an ESR 80 mm/hr. The most appropriate treatment is?","Prednisolone\nPrednisolone","NSAID","Panadol","Insulin");
INSERT INTO questions VALUES("4","A patient, who had been taking a particular drug, now presents with haematuria. The drug is most likely?","Naproxen-NSAID","Calcium channel blocke","Digoxin","Shigella");
INSERT INTO questions VALUES("5","The most common cause of traveller’s diarrhoea is?","Enterotoxic E. Coli","Salmonella Typhi","Shigella","Giardia Lamblia");
INSERT INTO questions VALUES("6","Which of the following is least likely to cause facial nerve palsy?","Chronic parotitis","Parotid tumour","Skull fracture","Mastoiditis");
INSERT INTO questions VALUES("7","The single most reliable test for Haemochromatosis is?","Transferrin saturation","Red cell mass","Serum iron","Serum ferritin");
INSERT INTO questions VALUES("8","Which of the following, is administration of immunoglobin as a prophylaxis not useful?","Hepatitis A","Hepatitis B","Rubella","Mumps");
INSERT INTO questions VALUES("9","Von Willebrandt’s disease you will find:","Increase bleeding time","Cannot find anything","Increased platelet count","Normal APTT");
INSERT INTO questions VALUES("10","The following drugs are proven to decrease the mortality in myocardial infection,","Aspirin","ACE inhibitors","Beta blockers","Nifedipine");
INSERT INTO questions VALUES("11","The following are feature of ROSS RIVER, Except","Chest pain","Muscle pain Davidson-107","Fever","Lathergy");
INSERT INTO questions VALUES("12","Haemochromatosis, WOF will suggest diagnosis?","Serum transferrin","Serum Fe","Serum Ferritin","Iron daturation");
INSERT INTO questions VALUES("13","A 57 yr oldlady develops sudden onset of left sided weakness and right eye blindness.This is most likely due to-","Cerebellar lesion","Vertebro-basilar insufficy","Pituitary tumour","Carotid artery stenosis");
INSERT INTO questions VALUES("14","Another repeated ques. (and confusing as well!!): Which org does not cause lung abscess","P. carinii","M. pneuminiae","M. TB","Staph aureus");



DROP TABLE reportorder;

CREATE TABLE `reportorder` (
  `Email` varchar(60) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-12");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-12");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-12");
INSERT INTO reportorder VALUES("ab@gmail.com","2017-01-13");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-13");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-13");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-13");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("amal@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("abc@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("ab@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("ab@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("ab@gmail.com","2017-01-14");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-15");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-15");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-15");
INSERT INTO reportorder VALUES("lasithd2@gmail.com","2017-01-15");
INSERT INTO reportorder VALUES("dhanushka93u@gmail.com","2017-01-15");



DROP TABLE supplier;

CREATE TABLE `supplier` (
  `supNo` char(50) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Permenant_Address` varchar(100) NOT NULL,
  `Contact_No` char(50) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  PRIMARY KEY (`supNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO supplier VALUES("01","Hemas Pharmaceuticals","No.75, Sir Baron Jayathilaka Mawatha, Colombo 8","0112320356","Hemas@gmail.com");
INSERT INTO supplier VALUES("02","Glaxo Healthcare (Pvt) Ltd","No. 94, Old Kottawa Road, Nawinna.","0112850229","gl@gmail.com");
INSERT INTO supplier VALUES("03","Meditech ","23, Medtech, Temple road, Gampaha","0332323456","med@gmail.com");
INSERT INTO supplier VALUES("04","Arogya","23 ,Godagama Road, Kalutara","0342345678","Arogya45@gmail.com");



DROP TABLE trainee;

CREATE TABLE `trainee` (
  `NIC` varchar(50) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `DOB` date NOT NULL,
  `PermenentAddr` varchar(150) NOT NULL,
  `CivilStatus` enum('Single','Married') NOT NULL,
  `ContactNo` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `DateHired` date NOT NULL,
  PRIMARY KEY (`NIC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO trainee VALUES("923456789V","Anusha","Mendis","Female","1992-11-10","Kandy","Married","772123457","lmn@gmail.com","lmn123","2017-01-01");
INSERT INTO trainee VALUES("935780942V","Geeth","Perera","Male","1993-01-11","Colombo","Single","710598705","asd@gmail.com","gee123","2016-01-11");
INSERT INTO trainee VALUES("946756435V","Ishan","Aoki","Male","1994-01-10","Bandarawela","Single","771234567","xyz@gmail.com","xyz123","2016-01-10");



DROP TABLE vacancy;

CREATE TABLE `vacancy` (
  `FullName` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `District` tinytext NOT NULL,
  `ContactNumber` char(10) NOT NULL,
  `NIC` varchar(13) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Experience` varchar(10) NOT NULL,
  `Information` varchar(255) NOT NULL,
  `CV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




