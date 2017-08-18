-- 创建数据库
create database wrox_calendar default character set utf8;

-- 选择数据库
use wrox_calendar;

-- 创建数据表
CREATE TABLE WROX_CALENDAR(
	EVENT_ID	INTEGER UNSIGNED	NOT NULL	AUTO_INCREMENT,
	EVENT_NAME	VARCHAR(100)		NOT NULL,
	EVENT_TSTAMP	TIMESTAMP		NOT NULL,
	NOTIFY		TINYINT(1) UNSIGNED	NOT NULL	DEFAULT 0,

	PRIMARY KEY(EVENT_ID) 
)
ENGINE = MyISAM DEFAULT CHARACTER SET UTF8;

-- 显示表结构
show create table wrox_calendar\G;
desc wrox_calendar;