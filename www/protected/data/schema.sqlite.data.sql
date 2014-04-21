
-- 用户测试数据
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


-- MENU
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (0, '根', '0', '0', 'root', '1', '1', null, '', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));

-- level 1
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (100, '首页', '0', '1', 'home', '1', '1', null, '', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (200, '关于亚大', '0', '1', 'about', '1', '1', null, 'about', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (300, '新闻动态', '0', '1', 'news', '1', '1', null, 'news', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (400, '产品中心', '0', '1', 'products', '1', '1', null, 'products', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (500, '施工案例', '0', '1', 'cases', '1', '1', null, 'cases', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (600, '服务与支持', '0', '1', 'service&support', '1', '1', null, 'service', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));


-- level 2
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (201, '企业简介', '200', '2', 'intro', '1', '1', null, 'intro', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (202, '管理团队', '200', '2', 'team', '1', '1', null, 'team', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (203, '组织机构', '200', '2', 'orgs', '1', '1', null, 'orgs', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (204, '企业文化', '200', '2', 'culture', '1', '1', null, 'culture', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (205, '企业荣誉', '200', '2', 'honour', '1', '1', null, 'honour', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (206, '联系我们', '200', '2', 'contact', '1', '1', null, 'contact', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));

INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (301, '企业新闻', '300', '2', 'companynews', '1', '1', null, 'companynews', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (302, '行业动态', '300', '2', 'industrynews', '1', '1', null, 'industrynews', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (303, '媒体报道', '300', '2', 'medianews', '1', '1', null, 'medianews', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));

INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (501, '精品展示', '500', '2', 'excellent', '1', '1', null, 'excellent', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (502, '核心技术', '500', '2', 'coretech', '1', '1', null, 'coretech', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (503, '竞争优势', '500', '2', 'advantage', '1', '1', null, 'advantage', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));

INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (601, '服务介绍', '600', '2', 'ssintro', '1', '1', null, 'ssintro', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (602, '在线反馈', '600', '2', 'feadback', '1', '1', null, 'feadback', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (603, '在线商城', '600', '2', 'order', '1', '1', null, 'order', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_menu (id, title, parent_id, level, level_class, single_page, predefined, page_content, href, status, creator, create_time, modifier, modify_time) VALUES (604, '销售/服务网络', '600', '2', 'ssnetwork', '1', '1', null, 'ssnetwork', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));


-- 产品分类
INSERT INTO tbl_category (id, name, parent_id, class_name, status, creator, create_time, modifier, modify_time)
VALUES (0, '产品分类', '-1', 'root', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));

INSERT INTO tbl_category (id, name, parent_id, class_name, status, creator, create_time, modifier, modify_time)
VALUES (1, 'UV产品', '0', 'uv', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_category (id, name, parent_id, class_name, status, creator, create_time, modifier, modify_time)
VALUES (2, '木器', '0', 'mq', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_category (id, name, parent_id, class_name, status, creator, create_time, modifier, modify_time)
VALUES (3, '扣板', '0', 'kb', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_category (id, name, parent_id, class_name, status, creator, create_time, modifier, modify_time)
VALUES (4, '封边条', '0', 'fbt', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_category (id, name, parent_id, class_name, status, creator, create_time, modifier, modify_time)
VALUES (5, '防腐产品', '0', 'ffcp', 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));

-- 首页图片
INSERT INTO tbl_hero (id, title, picture, description, href, hit, rank, status, creator, create_time, modifier, modify_time)
VALUES (1, '本安亚大新网站发布', '1.jpg', '本安亚大新网站发布', '/', 0, 1, 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_hero (id, title, picture, description, href, hit, rank, status, creator, create_time, modifier, modify_time)
VALUES (2, '本安亚大新网站发布', '2.jpg', '本安亚大新网站发布', '/', 0, 1, 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_hero (id, title, picture, description, href, hit, rank, status, creator, create_time, modifier, modify_time)
VALUES (3, '本安亚大新网站发布', '3.jpg', '本安亚大新网站发布', '/', 0, 1, 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_hero (id, title, picture, description, href, hit, rank, status, creator, create_time, modifier, modify_time)
VALUES (4, '本安亚大新网站发布', '4.jpg', '本安亚大新网站发布', '/', 0, 1, 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_hero (id, title, picture, description, href, hit, rank, status, creator, create_time, modifier, modify_time)
VALUES (5, '本安亚大新网站发布', '5.jpg', '本安亚大新网站发布', '/', 0, 1, 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));
INSERT INTO tbl_hero (id, title, picture, description, href, hit, rank, status, creator, create_time, modifier, modify_time)
VALUES (6, '本安亚大新网站发布', '6.jpg', '本安亚大新网站发布', '/', 0, 1, 100, 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'), 'system', datetime('now', 'localtime'));

-- 产品