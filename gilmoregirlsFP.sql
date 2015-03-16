CREATE TABLE `characters` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`fname` varchar(255) NOT NULL,
`lname` varchar(255),
hometown int(11),
PRIMARY KEY (`id`)
) ENGINE = InnoDB

CREATE TABLE school (
id int(11) NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
location int(11),
PRIMARY KEY (id)
) ENGINE = InnoDB

CREATE TABLE job (
id int(11) NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
location int(11),
PRIMARY KEY (id)
) ENGINE = InnoDB

CREATE TABLE location (
id int(11) NOT NULL AUTO_INCREMENT,
city varchar(255) NOT NULL,
state varchar(255),
PRIMARY KEY (id)
) ENGINE = InnoDB

CREATE TABLE character_school (
cid int(11) NOT NULL,
sid int(11) NOT NULL,
FOREIGN KEY (cid) REFERENCES characters (id),
FOREIGN KEY (sid) REFERENCES school (id)
) ENGINE = InnoDB

CREATE TABLE character_job (
cid int(11) NOT NULL,
jid int(11) NOT NULL,
FOREIGN KEY (cid) REFERENCES characters (id),
FOREIGN KEY (jid) REFERENCES job (id)
) ENGINE = InnoDB