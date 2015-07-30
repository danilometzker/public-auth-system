CREATE TABLE users (
  id INT NOT NULL auto_increment,
  email VARCHAR(255),
  username VARCHAR(255),
  password VARCHAR(255),
  token VARCHAR(255),
  primary KEY (id)
);
