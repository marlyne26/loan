CREATE TABLE `iplogging` (
  `ID` bigint(20) NOT NULL,
  `IPAddress` varchar(20) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `URL` text NOT NULL,
  `DATA` text NOT NULL,
  `AccessTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `SessionID` int(11) DEFAULT NULL
);

CREATE TABLE `logindetails` (
  `LoginDetailsID` bigint(20) NOT NULL,
  `UserID` int(11) NOT NULL,
  `SessionKey` varchar(50) NOT NULL,
  `SessionExpiryDateTime` datetime NOT NULL,
  `IPAddress` varchar(20) NOT NULL,
  `LoginDateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `isSuccessfull` bit(1) NOT NULL DEFAULT b'0',
  `isActive` bit(1) NOT NULL DEFAULT b'0',
  `SessionID` tinyint(4) DEFAULT NULL
);

CREATE TABLE `users` (
  `UserID` mediumint(9) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `UserType` tinyint(4) NOT NULL,
  `StaffID` int(11) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'0',
  `CreatedDateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `FCMToken` text DEFAULT NULL,
  `SessionID` tinyint(4) NOT NULL
);

CREATE TABLE `payment` (
  `RefNum` bigint(20) NOT NULL,
  `Payee` varchar(20) NOT NULL,
  `Amount` int(11) NOT NULL
);

INSERT INTO `users` (`UserID`, `Name`, `Username`, `Password`, `EmailID`, `ContactNo`, `UserType`, `StaffID`, `isActive`, `CreatedDateTime`, `FCMToken`, `SessionID`) VALUES
(1, 'Administrator', 'admin', '7c04837eb356565e28bb14e5a1dedb240a5ac2561f8ed318c54a279fb6a9665e', 'admin@techz.in', '8794151912', 1, NULL, b'1', '2021-11-23 03:38:06', NULL, 1),

--
-- Indexes for table `iplogging`
--
ALTER TABLE `iplogging`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`LoginDetailsID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iplogging`
--
ALTER TABLE `iplogging`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5350;

--
-- AUTO_INCREMENT for table `logindetails`
--
ALTER TABLE `logindetails`
  MODIFY `LoginDetailsID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;