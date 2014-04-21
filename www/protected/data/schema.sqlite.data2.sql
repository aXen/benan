select * from tbl_category;
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