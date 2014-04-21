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
  type INTEGER,
  type_name VARCHAR(200),
  hit INTEGER DEFAULT(0),
  rank INTEGER DEFAULT(1),
  status VARCHAR(16),
  creator VARCHAR(32),
  create_time TIMESTAMP default (datetime('now', 'localtime')),
  modifier VARCHAR(16),
  modify_time TIMESTAMP default (datetime('now', 'localtime'))
);

-- 首页图片
CREATE TABLE tbl_hero (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(200) NOT NULL,
  picture VARCHAR(128),
	description VARCHAR(2000) NOT NULL,
	href VARCHAR(128),
  hit INTEGER DEFAULT(0),
  rank INTEGER DEFAULT(1),
  status VARCHAR(16),
  creator VARCHAR(32),
  create_time TIMESTAMP default (datetime('now', 'localtime')),
  modifier VARCHAR(16),
  modify_time TIMESTAMP default (datetime('now', 'localtime'))
);

-- 反馈留言
CREATE TABLE tbl_feedback (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(200) NOT NULL,
	country VARCHAR(200) NOT NULL,
	province VARCHAR(200) NOT NULL,
	city VARCHAR(200) NOT NULL,
	county VARCHAR(200) NOT NULL,
	address VARCHAR(200) NOT NULL,
  type VARCHAR(32) NOT NULL,
  type_name VARCHAR(32),
  user_type VARCHAR(32) NOT NULL,
  user_type_name VARCHAR(200),
	ip VARCHAR(128),
	tel VARCHAR(128) NOT NULL,
	email VARCHAR(128),
  message VARCHAR(2000) NOT NULL,
  status VARCHAR(16),
  creator VARCHAR(32),
  create_time TIMESTAMP default (datetime('now', 'localtime')),
  modifier VARCHAR(16),
  modify_time TIMESTAMP default (datetime('now', 'localtime'))
);

-- 在线订单
CREATE TABLE tbl_order (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(200) NOT NULL,
  country VARCHAR(200) NOT NULL,
  province VARCHAR(200) NOT NULL,
  city VARCHAR(200) NOT NULL,
  county VARCHAR(200) NOT NULL,
  address VARCHAR(200) NOT NULL,
  company VARCHAR(200) NOT NULL,
  product INTEGER NOT NULL,
  type VARCHAR(32) NOT NULL,
  type_name VARCHAR(32),
  user_type VARCHAR(32) NOT NULL,
  user_type_name VARCHAR(200),
  ip VARCHAR(128),
  tel VARCHAR(128) NOT NULL,
  email VARCHAR(128),
  message VARCHAR(2000) NOT NULL,
  status VARCHAR(16),
  creator VARCHAR(32),
  create_time TIMESTAMP default (datetime('now', 'localtime')),
  modifier VARCHAR(16),
  modify_time TIMESTAMP default (datetime('now', 'localtime'))
);


-- 产品分类
CREATE TABLE tbl_category (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(200) NOT NULL,
  parent_id INTEGER NOT NULL,
	class_name VARCHAR(200),
  status VARCHAR(16),
  creator VARCHAR(32),
  create_time TIMESTAMP default (datetime('now', 'localtime')),
  modifier VARCHAR(16),
  modify_time TIMESTAMP default (datetime('now', 'localtime'))
);

-- 产品介绍
CREATE TABLE tbl_product (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(200) NOT NULL,
	category_id INTEGER NOT NULL,
	category_name VARCHAR(200),
	description TEXT NOT NULL,
  image VARCHAR(200) NOT NULL,
  status VARCHAR(16),
  creator VARCHAR(32),
  create_time TIMESTAMP default (datetime('now', 'localtime')),
  modifier VARCHAR(16),
  modify_time TIMESTAMP default (datetime('now', 'localtime'))
);

-- 施工案例
CREATE TABLE tbl_case (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(200) NOT NULL,
  type INTEGER NOT NULL,
  type_name VARCHAR(200),
  description TEXT NOT NULL,
  image VARCHAR(200) NOT NULL,
  status VARCHAR(16),
  creator VARCHAR(32),
  create_time TIMESTAMP default (datetime('now', 'localtime')),
  modifier VARCHAR(16),
  modify_time TIMESTAMP default (datetime('now', 'localtime'))
);

-- 菜单
CREATE TABLE tbl_menu (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	title VARCHAR(200) NOT NULL,
	description TEXT,
	parent_id INTEGER NOT NULL,
	level INTEGER NOT NULL,
  level_class VARCHAR(200),
  single_page VARCHAR(1),
  predefined VARCHAR(1),
  page_content TEXT,
	href VARCHAR(128),
  hit INTEGER(128),
	status VARCHAR(16),
	creator VARCHAR(32),
	create_time TIMESTAMP default (datetime('now', 'localtime')),
	modifier VARCHAR(16),
	modify_time TIMESTAMP default (datetime('now', 'localtime'))
) ;

-- -- 栏目
-- CREATE TABLE tbl_column (
--   id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
--   title VARCHAR(200) NOT NULL,
--   parent_id INTEGER NOT NULL,
--   level INTEGER NOT NULL,
--   level_class VARCHAR(200),
--   sigle_page VARCHAR(1),
--   predefined VARCHAR(1),
--   page_content TEXT,
--   href VARCHAR(128),
--   status VARCHAR(16),
--   creator VARCHAR(32),
--   create_time TIMESTAMP default (datetime('now', 'localtime')),
--   modifier VARCHAR(16),
--   modify_time TIMESTAMP default (datetime('now', 'localtime'))
-- ) ;


--CREATE TABLE tbl_

