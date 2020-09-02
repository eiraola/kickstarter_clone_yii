CREATE TABLE tbl_user
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	email VARCHAR(128) NOT NULL,
	image VARCHAR(128) NOT NULL,
	profile TEXT
);

CREATE TABLE tbl_project
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(128) NOT NULL,
	content TEXT NOT NULL,
	type INTEGER NOT NULL,
	status INTEGER NOT NULL,
	create_time INTEGER,
	update_time INTEGER,
	author_id INTEGER NOT NULL,
	CONSTRAINT FK_project_author FOREIGN KEY (author_id)
		REFERENCES tbl_user (id) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_project_type FOREIGN KEY (type)
		REFERENCES tbl_type (id) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE tbl_comment
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content TEXT NOT NULL,
	status INTEGER NOT NULL,
	create_time INTEGER,
	author VARCHAR(128) NOT NULL,
	email VARCHAR(128) NOT NULL,
	url VARCHAR(128),
	post_id INTEGER NOT NULL,
	project_id INTEGER NOT NULL,
	CONSTRAINT FK_comment_post FOREIGN KEY (post_id)
		REFERENCES tbl_post (id) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_post_project FOREIGN KEY (project_id)
		REFERENCES tbl_project (id) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE tbl_type
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(128) NOT NULL
);
CREATE TABLE tbl_like_project
(
	user_id INTEGER NOT NULL,
	project_id INTEGER NOT NULL,

	CONSTRAINT FK_like_user FOREIGN KEY (user_id)
		REFERENCES tbl_user (id) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_like_project FOREIGN KEY (project_id)
		REFERENCES tbl_project (id) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE tbl_like_comment
(
	user_id INTEGER NOT NULL,
	comment_id INTEGER NOT NULL,

	CONSTRAINT FK_like_user FOREIGN KEY (user_id)
		REFERENCES tbl_user (id) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_like_comment FOREIGN KEY (comment_id)
		REFERENCES tbl_comment (id) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE tbl_found
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	amount INTEGER NOT NULL,

	user_id INTEGER NOT NULL,
	project_id INTEGER NOT NULL,

	CONSTRAINT FK_user_found FOREIGN KEY (user_id)
		REFERENCES tbl_user (id) ON DELETE CASCADE ON UPDATE RESTRICT,
	CONSTRAINT FK_project_found FOREIGN KEY (project_id)
		REFERENCES tbl_project (id) ON DELETE CASCADE ON UPDATE RESTRICT
);

INSERT INTO tbl_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test3', 'pass3', 'test3@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test4', 'pass4', 'test4@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test5', 'pass5', 'test5@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test6', 'pass6', 'test6@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test7', 'pass7', 'test7@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test8', 'pass8', 'test8@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test9', 'pass9', 'test9@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test10', 'pass10', 'test10@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test11', 'pass11', 'test11@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test12', 'pass12', 'test12@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test13', 'pass13', 'test13@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test14', 'pass14', 'test14@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test15', 'pass15', 'test15@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test16', 'pass16', 'test16@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test17', 'pass17', 'test17@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test18', 'pass18', 'test18@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test19', 'pass19', 'test19@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test20', 'pass20', 'test20@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test21', 'pass21', 'test21@example.com');
