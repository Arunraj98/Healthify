-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2021 at 02:56 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `securecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `typ` text NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `typ`) VALUES
(1, 'healthify', 'healthify', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `hbkid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcpatid` text,
  `pname` text,
  `age` text,
  `sex` text,
  `pcont1` text,
  `dat` text,
  `tm` text,
  `bkid` text,
  `bkname` text,
  `hcntn1` text,
  `date` text,
  `diseases` text,
  `descrp` text,
  `stat` text,
  PRIMARY KEY (`hbkid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `census`
--

CREATE TABLE IF NOT EXISTS `census` (
  `censid` int(11) NOT NULL AUTO_INCREMENT,
  `censuspid` text,
  `name` text,
  `inchaprsn` text,
  `cntn1` text,
  `cntn2` text,
  `email` text,
  `addr` text,
  `wbaddr` text,
  `jdate` text,
  `username` text,
  `password` text,
  `stat` text,
  `utyp` text,
  PRIMARY KEY (`censid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `dcid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcdcid` text,
  `name` text,
  `inchaprsn` text,
  `cntn1` text,
  `cntn2` text,
  `email` text,
  `addr` text,
  `wbaddr` text,
  `jdate` text,
  `username` text,
  `password` text,
  `stat` text,
  `utyp` text,
  PRIMARY KEY (`dcid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `dcoid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcdocid` text,
  `mrs` text,
  `name` text,
  `sex` text,
  `dob` text,
  `age` text,
  `qul` text,
  `addr` text,
  `cont` text,
  `email` text,
  `special` text,
  `licen` text,
  `exp` text,
  `jdate` text,
  `bsalary` text,
  `aadharno` text,
  `designa` text,
  `photo1` text,
  `photo2` text,
  `photo3` text,
  `des` text,
  `username` text,
  `password` text,
  `hname` text,
  `stat` text,
  `utyp` text,
  PRIMARY KEY (`dcoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctoramount`
--

CREATE TABLE IF NOT EXISTS `doctoramount` (
  `dmtpid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcpatid` text,
  `name` text,
  `sex` text,
  `dob` text,
  `age` text,
  `cont1` text,
  `blgrp` text,
  `hdname` text,
  `docname` text,
  `diseas` text,
  `cdate` text,
  `diseasdesc` text,
  `prescriptn` text,
  `amount` text,
  `date` date DEFAULT NULL,
  `doctor` text,
  PRIMARY KEY (`dmtpid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `hostid` text,
  `hname` text,
  `cntn1` text,
  `cntn2` text,
  `location` text,
  `addr` text,
  `waddr` text,
  `email` text,
  `special` text,
  `licen` text,
  `seplty` text,
  `typ` text,
  `jdate` text,
  `photo1` text,
  `photo2` text,
  `photo3` text,
  `exp` text,
  `username` text,
  `password` text,
  `stat` text,
  `utyp` text,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hospitalamount`
--

CREATE TABLE IF NOT EXISTS `hospitalamount` (
  `hospid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcpatid` text,
  `name` text,
  `sex` text,
  `dob` text,
  `age` text,
  `cont1` text,
  `blgrp` text,
  `hdname` text,
  `docname` text,
  `diseas` text,
  `cdate` text,
  `diseasdesc` text,
  `prescriptn` text,
  `amount` text,
  `date` date DEFAULT NULL,
  `hospital` text,
  PRIMARY KEY (`hospid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
  `insid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcinsid` text,
  `name` text,
  `cmpny` text,
  `cntn1` text,
  `cntn2` text,
  `email` text,
  `addr` text,
  `wbaddr` text,
  `jdate` text,
  `username` text,
  `password` text,
  `stat` text,
  `utyp` text,
  PRIMARY KEY (`insid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `insuranceapply`
--

CREATE TABLE IF NOT EXISTS `insuranceapply` (
  `inscmpid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcpatid` text,
  `pname` text,
  `age` text,
  `sex` text,
  `cont1` text,
  `hdname` text,
  `docname` text,
  `aadharno` text,
  `cdate` text,
  `mdcinsid` text,
  `cmpny` text,
  `iccntn1` text,
  `descpd` text,
  `amount` text,
  `diseas` text,
  `dat` text,
  `tm` text,
  `stat` text,
  PRIMARY KEY (`inscmpid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE IF NOT EXISTS `laboratory` (
  `lbid` int(11) NOT NULL AUTO_INCREMENT,
  `mdclbid` text,
  `name` text,
  `cntn1` text,
  `cntn2` text,
  `locatn` text,
  `addr` text,
  `email` text,
  `typ` text,
  `splty` text,
  `jdate` text,
  `photo1` text,
  `licen` text,
  `photo2` text,
  `expr` text,
  `username` text,
  `password` text,
  `stat` text,
  `utyp` text,
  PRIMARY KEY (`lbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `laboratoryamount`
--

CREATE TABLE IF NOT EXISTS `laboratoryamount` (
  `laboratryid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcpatid` text,
  `name` text,
  `sex` text,
  `dob` text,
  `age` text,
  `cont1` text,
  `blgrp` text,
  `hdname` text,
  `docname` text,
  `diseas` text,
  `cdate` text,
  `diseasdesc` text,
  `prescriptn` text,
  `photo1` text,
  `photo2` text,
  `amount` text,
  `date` text,
  `lab` text,
  PRIMARY KEY (`laboratryid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `mhostid` text,
  `hname` text,
  `cntn1` text,
  `email` text,
  `subj` text,
  `dat` text,
  `reply` text,
  `rdate` text,
  PRIMARY KEY (`msgid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `panchayath`
--

CREATE TABLE IF NOT EXISTS `panchayath` (
  `panid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcpanid` text,
  `name` text,
  `inchaprsn` text,
  `cntn1` text,
  `cntn2` text,
  `email` text,
  `addr` text,
  `wbaddr` text,
  `jdate` text,
  `username` text,
  `password` text,
  `stat` text,
  `utyp` text,
  PRIMARY KEY (`panid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcpatid` text,
  `mrs` text,
  `name` text,
  `sex` text,
  `dob` text,
  `age` text,
  `qul` text,
  `addr` text,
  `cont1` text,
  `cont2` text,
  `email` text,
  `district` text,
  `thaluk` text,
  `panchayath` text,
  `ward` text,
  `jdate` text,
  `blgrp` text,
  `aadharno` text,
  `photo` text,
  `descp` text,
  `hdname` text,
  PRIMARY KEY (`patid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `phid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcphid` text,
  `name` text,
  `cntn1` text,
  `cntn2` text,
  `locatn` text,
  `addr` text,
  `email` text,
  `typ` text,
  `splty` text,
  `jdate` text,
  `photo1` text,
  `licen` text,
  `photo2` text,
  `expr` text,
  `username` text,
  `password` text,
  `stat` text,
  `utyp` text,
  PRIMARY KEY (`phid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacyamount`
--

CREATE TABLE IF NOT EXISTS `pharmacyamount` (
  `pharmacyid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcpatid` text,
  `name` text,
  `sex` text,
  `dob` text,
  `age` text,
  `cont1` text,
  `blgrp` text,
  `hdname` text,
  `docname` text,
  `diseas` text,
  `cdate` text,
  `diseasdesc` text,
  `prescriptn` text,
  `amount` text,
  `date` text,
  `pharmacy` text,
  PRIMARY KEY (`pharmacyid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `prscid` int(11) NOT NULL AUTO_INCREMENT,
  `mdcpatid` text,
  `mrs` text,
  `name` text,
  `sex` text,
  `dob` text,
  `age` text,
  `cont1` text,
  `blgrp` text,
  `aadharno` text,
  `addr` text,
  `district` text,
  `thaluk` text,
  `panchayath` text,
  `ward` text,
  `hdname` text,
  `docname` text,
  `diseas` text,
  `cdate` date DEFAULT NULL,
  `diseasdesc` text,
  `prescriptn` text,
  `lbtestdescp` text,
  PRIMARY KEY (`prscid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE IF NOT EXISTS `vaccine` (
  `vacid` int(11) NOT NULL AUTO_INCREMENT,
  `photo` text NOT NULL,
  `mdcpatid` text,
  `mrs` text,
  `name` text,
  `sex` text,
  `dob` text,
  `age` text,
  `cont1` text,
  `blgrp` text,
  `aadharno` text,
  `addr` text,
  `district` text,
  `thaluk` text,
  `panchayath` text,
  `ward` text,
  `hdname` text,
  `docname` text,
  `vaccine` text,
  `descr` text,
  `cert` text,
  `date` text,
  `diseas` text,
  `cdate` text,
  PRIMARY KEY (`vacid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
