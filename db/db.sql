DROP DATABASE IF EXISTS mega;
CREATE DATABASE mega;

USE mega;

CREATE TABLE accounts(
	account_id MEDIUMINT NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	account_type VARCHAR(6) NOT NULL,
	email VARCHAR(30),
	contact_number VARCHAR(30),
	address VARCHAR(100),
	notes VARCHAR(200),
	CONSTRAINT accounts_pk PRIMARY KEY (account_id)
 );

CREATE TABLE clients(
	client_id MEDIUMINT NOT NULL AUTO_INCREMENT,
	account_id MEDIUMINT NOT NULL,
	representative_first_name VARCHAR(30) NOT NULL,
	representative_last_name VARCHAR(30) NOT NULL,
	comaker_first_name VARCHAR(30) NOT NULL,
	comaker_last_name VARCHAR(30) NOT NULL, 
	company_name VARCHAR(30) NOT NULL,
	email VARCHAR(30),
	contact_number VARCHAR(15),
	notes VARCHAR(200),
	CONSTRAINT clients_pk PRIMARY KEY (client_id),
	CONSTRAINT clients_fk FOREIGN KEY (account_id) REFERENCES accounts(account_id)
);

CREATE TABLE payments(
	payment_id MEDIUMINT NOT NULL AUTO_INCREMENT,
	client_id MEDIUMINT NOT NULL,
	case_id MEDIUMINT NOT NULL,
	account_id MEDIUMINT NOT NULL,
	turn_date DATE NOT NULL,
	type_of_payment VARCHAR(11) NOT NULL,
	check_number VARCHAR(15) NOT NULL,
	turn_amount FLOAT(6) NOT NULL,
	principal_paid FLOAT(6) NOT NULL,
	interest_paid FLOAT(6) NOT NULL,
	penalty FLOAT(4) NOT NULL,
	status VARCHAR(8) NOT NULL,
	CONSTRAINT payment_pk PRIMARY KEY (payment_id),
	CONSTRAINT payment_fk1 FOREIGN KEY (client_id) REFERENCES clients(client_id),
	CONSTRAINT payment_fk2 FOREIGN KEY (account_id) REFERENCES accounts(account_id)
);

CREATE TABLE cases(
	case_id MEDIUMINT NOT NULL AUTO_INCREMENT,
	client_id MEDIUMINT NOT NULL,
	payment_id MEDIUMINT NOT NULL,
	loan_amount FLOAT(6) NOT NULL,
	actual_total_balance FLOAT(6) NOT NULL,
	date_of_release DATE NOT NULL,
	date_of_maturity DATE NOT NULL,
	payment_period SMALLINT(3) NOT NULL,
	weekly_interest_rate SMALLINT(3) NOT NULL,
	notes VARCHAR(200),
	status VARCHAR(8) NOT NULL,
	actual_principal_balance FLOAT(6) NOT NULL,
	actual_interest_balance FLOAT(6) NOT NULL,
	CONSTRAINT cases_pk PRIMARY KEY (case_id),
	CONSTRAINT cases_fk1 FOREIGN KEY (client_id) REFERENCES clients(client_id),
	CONSTRAINT cases_fk2 FOREIGN KEY (payment_id) REFERENCES payments(payment_id)
);

ALTER TABLE payments
	ADD CONSTRAINT payment_fk3 FOREIGN KEY (case_id) REFERENCES cases(case_id);

CREATE TABLE expected(
	expected_id MEDIUMINT NOT NULL AUTO_INCREMENT,
	payment_id MEDIUMINT NOT NULL,
	case_id MEDIUMINT NOT NULL,
	expected_collection_date DATE NOT NULL,
	expected_principal_balance FLOAT(6) NOT NULL,
	expected_interest_balance FLOAT(6) NOT NULL,
	expected_total_balance FLOAT(6) NOT NULL,
	principal_due FLOAT(6) NOT NULL,
	interest_due FLOAT(6) NOT NULL,
	total_due FLOAT(6) NOT NULL,
	CONSTRAINT expected_pk PRIMARY KEY (expected_id),
	CONSTRAINT expected_fk1 FOREIGN KEY (payment_id) REFERENCES payments(payment_id),
	CONSTRAINT expected_fk2 FOREIGN KEY (case_id) REFERENCES cases(case_id)
);

CREATE TABLE logs
(
	log_id MEDIUMINT NOT NULL AUTO_INCREMENT,
	account_id MEDIUMINT NOT NULL,
	user VARCHAR(61) NOT NULL,
	time_stamp TIMESTAMP NOT NULL,
	action VARCHAR(50) NOT NULL,
	client VARCHAR(60) NOT NULL,
	old_value VARCHAR(200) NOT NULL,
	new_value VARCHAR(200) NOT NULL,
	CONSTRAINT logs_pk PRIMARY KEY (log_id),
	CONSTRAINT logs_fk FOREIGN KEY (account_id) REFERENCES accounts(account_id)
);





