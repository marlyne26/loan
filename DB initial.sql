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

CREATE TABLE Loan_Payment_Info  (
    `BorrowerID` int(20) NOT NULL,
    `LoanEMIDetailsIDs` int(20) NOT NULL,
    `Amount` int(11) NOT NULL,
    `TransactionDate` int(20),
    `TransactionNumber` int(20),
    `PaymentModeID` varchar(20),
    `PaymentDocumentIDs` varchar(20),
    `BankName` varchar(20),
    `UpdatedDateTime` int(10),
    `UpdatedByUserID` varchar(20),
    `isRejected` varchar(20),
    `ApprovedRepeatedly` varchar(20),
    `isMatchedWithBankStatement` varchar(20),
    `entryByTransID` varchar(20),
    `entryDate` varchar(20)
);

CREATE TABLE Loan_Details (
    `LoanDetailsID` varchar(20) NOT NULL,
    `BorrowerID` varchar(20) NOT NULL,
    `LoanAmount` int(20) NOT NULL,
    `LoanDisbursedDate` int(20),
    `InterestRate` int(20),
    `EMIAmount` varchar(20),
    `MoratoriumPeriod` varchar(20),
    `LoanPaymentStartDAte` int(20),
    `LoanPaymentEndDAte` int(10),
    `LoanStatus` varchar(20),
    `Remarks` varchar(20)
);

CREATE TABLE Loan_EMI (
    `LoanEMIID` varchar(20) NOT NULL,
    `LoanDetailsID` varchar(20) NOT NULL,
    `EMIAmount` int(20) NOT NULL,
    `PaymentDueDate` int(20),
    `isPaid` int(20),
    `PaidDateTime` varchar(20),
    `RecordedByUserID` varchar(20),
    `PaymentMode` int(20),
    `isLatePayment` int(10),
    `isReCalculated` varchar(20)
  );


CREATE TABLE Loan_Payment (
    `BorrowerID` varchar(20) NOT NULL,
    `PaymentModeID` varchar(20) NOT NULL,
    `Amount` int(20) NOT NULL,
    `LoanEMIIDs` int(20),
    `isPaid` int(20)
  );

CREATE TABLE Bank_Statement (
    `StatementID` varchar(20) NOT NULL,
    `FromDate` varchar(20) NOT NULL,
    `ToDate` int(20) NOT NULL,
    `BankID` int(20),
    `DocumentID` int(20),
    `inProcess` int(20),
    `Processed` varchar(20)
    );

CREATE TABLE Loan_Request (
    `LoanRequestID` varchar(20) NOT NULL,
    `LoanTypeID` varchar(20) NOT NULL,
    `BorrowerID` int(20) NOT NULL,
    `Durations` int(20),
    `Interest` int(20),
    `Status` int(20),
    `LimitationPeriod` varchar(20),
    `CreatedDateTime` varchar(20)
    );

CREATE TABLE Loan_Type (
    `LoanTypeID` varchar(20) NOT NULL,
    `LoanName` varchar(20) NOT NULL,
    `Status` int(20) NOT NULL,
    `CreatedByID` int(20),
    `CreatedDateAndTime` int(20),
    );
  
CREATE TABLE Borrower (
    `ID` varchar(20) NOT NULL,
    `Name` varchar(20) NOT NULL,
    `Address` int(20) NOT NULL,
    `ContactNo` int(20),
    `EmailID` int(20),
    `isActive` int(20) NOT NULL,
    `CreatedDateAndTime` int(20),
    `CreatedByID` int(20)
  );







  

  


);

INSERT INTO `users` (`UserID`, `Name`, `Username`, `Password`, `EmailID`, `ContactNo`, `UserType`, `StaffID`, `isActive`, `CreatedDateTime`, `FCMToken`, `SessionID`) VALUES
(1, `Administrator', 'admin', '7c04837eb356565e28bb14e5a1dedb240a5ac2561f8ed318c54a279fb6a9665e', 'admin@techz.in', '8794151912', 1, NULL, b'1', '2021-11-23 03:38:06', NULL, 1),

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