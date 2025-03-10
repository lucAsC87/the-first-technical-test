CREATE TABLE availability_status (
  id INT,
  status_value VARCHAR(50),
  CONSTRAINT pk_ava_status PRIMARY KEY (id)
);

CREATE TABLE category (
  id INT AUTO_INCREMENT,
  category_name VARCHAR(100),
  CONSTRAINT pk_category PRIMARY KEY (id)
);

CREATE TABLE author (
  id INT AUTO_INCREMENT,
  first_name VARCHAR(300),
  last_name VARCHAR(300),
  CONSTRAINT pk_author PRIMARY KEY (id)
);

CREATE TABLE book (
  id INT AUTO_INCREMENT,
  title VARCHAR(500),
  author_id INT, 
  category_id INT,
  availability_id INT,
  publication_date YEAR,
  copies_owned INT,
  CONSTRAINT pk_book PRIMARY KEY (id),
  CONSTRAINT fk_book_author FOREIGN KEY (author_id) REFERENCES author(id),
  CONSTRAINT fk_book_category FOREIGN KEY (category_id) REFERENCES category(id),
  CONSTRAINT fk_book_availability FOREIGN KEY (availability_id) REFERENCES availability_status(id)
);

CREATE TABLE member_status (
  id INT,
  status_value VARCHAR(50),
  CONSTRAINT pk_memberstatus PRIMARY KEY (id)
);

CREATE TABLE member (
  id INT AUTO_INCREMENT,
  first_name VARCHAR(300),
  last_name VARCHAR(300),
  address VARCHAR(300),
  e_mail VARCHAR(300),
  telephone VARCHAR(300),
  joined_date DATE,
  active_status_id INT,
  CONSTRAINT pk_member PRIMARY KEY (id),
  CONSTRAINT fk_member_status FOREIGN KEY (active_status_id) REFERENCES member_status(id)
);

CREATE TABLE reservation (
  id INT,
  book_id INT,
  member_id INT,
  reservation_date DATE,
  availability_status_id INT,
  CONSTRAINT pk_reservation PRIMARY KEY (id),
  CONSTRAINT fk_res_book FOREIGN KEY (book_id) REFERENCES book(id),
  CONSTRAINT fk_res_member FOREIGN KEY (member_id) REFERENCES member(id),
  CONSTRAINT fk_ava_status FOREIGN KEY (availability_status_id) REFERENCES availability_status(id)
);

CREATE TABLE loan (
  id INT,
  book_id INT,
  member_id INT,
  loan_date DATE,
  returned_date DATE,
  CONSTRAINT pk_loan PRIMARY KEY (id),
  CONSTRAINT fk_loan_book FOREIGN KEY (book_id) REFERENCES book(id),
  CONSTRAINT fk_loan_member FOREIGN KEY (member_id) REFERENCES member(id)
);
