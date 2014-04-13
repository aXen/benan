CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

-- 首页新闻
CREATE TABLE tbl_news (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(200) NOT NULL,
	content TEXT NOT NULL, --VARCHAR(MAX) NOT NULL,
	status VARCHAR(16),
	creator VARCHAR(32),
	create_time timestamp,
	modifier VARCHAR(16),
	modify_time timestamp,
	hit INTEGER DEFAULT(0),
	rank INTEGER DEFAULT(1)
);

-- 首页图片
CREATE TABLE tbl_hero (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(200) NOT NULL,
	description VARCHAR(2000) NOT NULL,
	picture VARCHAR(128),
	status VARCHAR(16),
	creator VARCHAR(32),
	create_time timestamp,
	modifier VARCHAR(16),
	modify_time timestamp,
	hit INTEGER DEFAULT(0),
	rank INTEGER DEFAULT(1)
);

-- 访客留言
CREATE TABLE tbl_note (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(200) NOT NULL,
	type VARCHAR(32),
	message VARCHAR(2000) NOT NULL,
	ip VARCHAR(128),
	tel VARCHAR(128),
	email VARCHAR(128),
	create_time timestamp
);


-- 产品分类
CREATE TABLE tbl_category (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(200) NOT NULL,
	parent_id INTEGER NOT NULL,
	status VARCHAR(16),
	creator VARCHAR(32),
	create_time timestamp,
	modifier VARCHAR(16),
	modify_time timestamp
);

-- 产品介绍
CREATE TABLE tbl_product (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(200) NOT NULL,
	category_id INTEGER NOT NULL,
	description TEXT,
	status VARCHAR(16),
	creator VARCHAR(32),
	create_time timestamp,
	modifier VARCHAR(16),
	modify_time timestamp
);

-- 首页菜单
CREATE TABLE tbl_menu (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(200) NOT NULL,
	parent_id INTEGER NOT NULL,
	level INTEGER NOT NULL,
	href VARCHAR(128),
	status VARCHAR(16),
	creator VARCHAR(32),
	create_time timestamp,
	modifier VARCHAR(16),
	modify_time timestamp
) ;


--CREATE TABLE tbl_

