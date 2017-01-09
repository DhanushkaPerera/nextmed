-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 06:29 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Trainee_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--
CREATE TABLE IF NOT EXISTS `questions` (
`qId` int(2) NOT NULL,
  `question` varchar(500) NOT NULL,
  `correctAns` varchar(200) NOT NULL,
  `wrongAns1` varchar(200) NOT NULL,
  `wrongAns2` varchar(200) NOT NULL,
  `wrongAns3` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `questions`
--
INSERT INTO `question` (`qId`, `question`, `correctAns`, `wrongAns1`, `wrongAns2`, `wrongAns3`) VALUES
(1, 'Heparin therapy is monitored by which of the following tests?', 'APTT', 'INR', 'Bleeding time', 'Serum fibrinogen')
(2, 'Which of the following is a common side effect of calcium channel blockers?', 'Peripheral oedema', 'Angio-oedema', 'Headache', 'Insomnia')
(3, 'A 68-years old female presents with a 2-week history of unilateral headache and an ESR 80 mm/hr. The most appropriate treatment is?', 'Prednisolone', 'NSAID’, 'panadol', v')
(4, 'A patient, who had been taking a particular drug, now presents with haematuria. The drug is most likely?', 'Naproxen-NSAID', 'Calcium channel blocker', 'Digoxin', 'Shigella')
(5, 'The most common cause of traveller’s diarrhoea is?', 'Enterotoxic E. Coli', 'Salmonella Typhi', 'Shigella', 'Giardia Lamblia') 
(6, 'Which of the following is least likely to cause facial nerve palsy?', 'Chronic parotitis', 'Parotid tumour', 'Skull fracture', 'Mastoiditis')
(7, 'The single most reliable test for Haemochromatosis is?', 'Transferrin saturation', 'Red cell mass', 'Serum iron', 'Serum ferritin')
(8, 'which of the following, is administration of immunoglobin as a prophylaxis not useful?', 'Hepatitis A', 'Hepatitis B', 'Rubella', 'Mumps')
(9, 'Von Willebrandt’s disease you will find:', 'Increase bleeding time', 'Cannot find anything', 'Increased platelet count', 'Normal APTT')
(10, 'The following drugs are proven to decrease the mortality in myocardial infection, except?', 'Aspirin', 'ACE inhibitors', 'Beta blockers', 'Nifedipine')
(11, 'The following are feature of ROSS RIVER, Except', 'Chest pain', 'Muscle pain Davidson-107',  'Fever', 'Lathergy')
(12, 'Haemochromatosis, WOF will suggest diagnosis?', 'Serum transferrin', 'Serum Fe', 'Serum Ferritin', 'Iron daturation')
(13, 'A 57 yr oldlady develops sudden onset of left sided weakness and right eye blindness.This is most likely due to-', 'Cerebellar lesion', 'Vertebro-basilar insufficy', 'Pituitary tumour', 'Carotid artery stenosis')
(14, 'Another repeated ques. (and confusing as well!!): Which org does not cause lung abscess', 'P. carinii', 'M. pneuminiae', 'M. TB', 'Staph aureus')
(15, 'S/S of thyrotoxicosis,', 'widening of pulse pressure', 'coarse tremor',  'Wasting of the small muscles of hand', 'Narrowing pulse pressure')

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`qId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `qId` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
