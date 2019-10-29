#
# Table structure for table 'tx_showmi_domain_model_activity'
#
CREATE TABLE tx_showmi_domain_model_activity (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	sender_name varchar(255) DEFAULT '' NOT NULL,
	sender_email varchar(255) DEFAULT '' NOT NULL,
	date date DEFAULT NULL,
	author varchar(255) DEFAULT '' NOT NULL,
	type varchar(255) DEFAULT '' NOT NULL,
	place varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	weblink varchar(255) DEFAULT '' NOT NULL,
	author_link varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state smallint(6) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,
	l10n_state text,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_showmi_domain_model_personnel'
#
CREATE TABLE tx_showmi_domain_model_personnel (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	sasid int(11) DEFAULT '0' NOT NULL,
	orcid char(19) DEFAULT '' NOT NULL,
	arlid char(8) DEFAULT '' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	surname varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	status varchar(255) DEFAULT '' NOT NULL,
	department varchar(255) DEFAULT '' NOT NULL,
	function varchar(255) DEFAULT '' NOT NULL,
	function_en varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	doors varchar(255) DEFAULT '' NOT NULL,
	building varchar(255) DEFAULT '' NOT NULL,
	phd_student varchar(255) DEFAULT '' NOT NULL,
	program varchar(255) DEFAULT '' NOT NULL,
	supervisor varchar(255) DEFAULT '' NOT NULL,
	theme varchar(255) DEFAULT '' NOT NULL,
	defense int(4) DEFAULT '0' NOT NULL,
	webpage varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state smallint(6) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,
	l10n_state text,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_showmi_domain_model_topic'
#
CREATE TABLE tx_showmi_domain_model_topic (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	program varchar(255) DEFAULT '' NOT NULL,
	supervisor_link varchar(255) DEFAULT '' NOT NULL,
	title_sk varchar(255) DEFAULT '' NOT NULL,
	title_en varchar(255) DEFAULT '' NOT NULL,
	annotation_sk text,
	annotation_en text,
	note varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state smallint(6) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,
	l10n_state text,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);
