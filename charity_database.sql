SET SQL_MODE ="NO_AUTO_VALUE_ON_ZERO";
SET TIME_ZONE = "+00:00";

CREATE TABLE `userTable` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(15) NOT NULL,
    `password` text NOT NULL,
    `email` text NOT NULL,
    `refered` varchar(50) NOT NULL,
    `signupcode` text NOT NULL,
    `fname` varchar(50) NOT NULL,
    `lname` varchar(50) NOT NULL,
    `phone` bigint(11) NOT NULL,
    `referlink` varchar(255) NOT NULL,
    `date` date
)  ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERT INTO `userTable` (`id`, `username`, `password`, `email`, `refered`, `signupcode`, `fname`, `lname`, `phone`, `referlink`) VALUES (
--     'sparkybug', 'sinach123', 'sinach@gmail.com', 'gift', 2345167892, 'osinachi', 'ukaegbu', 07067325493, 'localhost/index.php'
-- );



CREATE TABLE `adminTable` (
    `adminId` bigint(12) NOT NULL,
    `adminUsername` varchar(50) NOT NULL,
    `password` varchar(20) NOT NULL,
    `adminFname` varchar(50) NOT NULL,
    `adminLname` varchar(50) NOT NULL,
    `adminEmail` varchar(50) NOT NULL,
    `adminPhone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `adminTable` (`adminId`, `adminUsername`, `password`, `adminFname`, `adminLname`, `adminEmail`, `adminPhone`) VALUES (
    20, 'admin', 'admin123', 'Flora', 'Eze', 'info@covenanthelpersfoundation.com', '09152389355'
); INSERT INTO `adminTable` (`adminId`, `adminUsername`, `password`, `adminFname`, `adminLname`, `adminEmail`, `adminPhone`) VALUES (
    21, 'admin', 'admin', 'Flora', 'Eze', 'admin@email.com', '07067325493'
); INSERT INTO `adminTable` (`adminId`, `adminUsername`, `password`, `adminFname`, `adminLname`, `adminEmail`, `adminPhone`) VALUES (
    22, 'kendricks', 'Kendrick@', 'Kendricks', 'Fagbems', 'kendricks@email.com', '09152389355'
);



CREATE TABLE `donate` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fname` varchar(50) NOT NULL,
    `lname` varchar(50) NOT NULL,
    `company` varchar(100) NOT NULL,
    `address` varchar(50) NOT NULL,
    `city` varchar(100) NOT NULL,
    `state` varchar(50) NOT NULL,
    `phone` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `amount` int(50) NOT NULL,
    `withdrawn` int(50) NOT NULL,
    `date` date
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `volunteer` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fname` varchar(50) NOT NULL,
    `lname` varchar(50) NOT NULL,
    `company` varchar(50) NOT NULL,
    `address` varchar(50) NOT NULL,
    `phone` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `support` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fname` varchar(50) NOT NULL,
    `lname` varchar(50) NOT NULL,
    `company` varchar(50) NOT NULL,
    `phone` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `smessage` varchar(300) NOT NULL,
    `cpreference` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `events` (
    `current_events` varchar(500) NOT NULL,
    `past_events` varchar(500) NOT NULL,
    `current_event_date` date,
    `past_event_date` date,
    `Duration` varchar(50) NOT NULL,
    `Duration2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `account` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `amount_donated` int(255) NOT NULL,
    `amount_withdrawn` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
