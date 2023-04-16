CREATE TABLE tx_tinyclassifieds_domain_model_classifieds (
	title varchar(255) NOT NULL DEFAULT '',
	price varchar(255) NOT NULL DEFAULT '',
	text text,
	images int(11) unsigned NOT NULL DEFAULT '0',
	author int(11) unsigned DEFAULT '0'
);
