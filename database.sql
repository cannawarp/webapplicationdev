DROP TABLE IF EXISTS `tbl_type`;
CREATE TABLE `tbl_type` (
  `type_id` int(3) unsigned NOT NULL auto_increment, 
  `type_name` varchar(180) NOT NULL default '',
  `type_date_added` date NOT NULL,
  `type_time_added` time NOT NULL,	
  `type_date_updated` date NOT NULL,
  `type_time_updated` time NOT NULL,	
  `type_status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=301;

INSERT INTO tbl_type(type_name,type_date_added,type_time_added,type_status) 
VALUES ("Flavored Wings",NOW(),NOW(),'1');
INSERT INTO tbl_type(type_name,type_date_added,type_time_added,type_status) 
VALUES ("Bundled Wings",NOW(),NOW(),'1');
INSERT INTO tbl_type(type_name,type_date_added,type_time_added,type_status) 
VALUES ("Rice Meals",NOW(),NOW(),'1');
INSERT INTO tbl_type(type_name,type_date_added,type_time_added,type_status) 
VALUES ("Snacks",NOW(),NOW(),'1');
INSERT INTO tbl_type(type_name,type_date_added,type_time_added,type_status) 
VALUES ("Drinks",NOW(),NOW(),'1');

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE `tbl_product` (
  `prod_id` int(8) unsigned NOT NULL auto_increment, 
  `prod_name` varchar(180) NOT NULL default '',
  `prod_description` varchar(180) NOT NULL default '',
  `prod_price` varchar(180) NOT NULL default '',
  `prod_date_added` date NOT NULL,
  `prod_time_added` time NOT NULL,	
  `prod_date_updated` date NOT NULL,
  `prod_time_updated` time NOT NULL,	
  `prod_status` int(1) NOT NULL default '0',
  `type_id` int(3) NOT NULL default '0',
  PRIMARY KEY  (`prod_id`),
  KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10000001;

DROP TABLE IF EXISTS `tbl_product_pricing`;
CREATE TABLE `tbl_product_pricing` (
  `prod_id` int(8) NOT NULL default '0',
  `prod_retail_price` decimal(10,2) NOT NULL default '0.00',
  KEY  (`prod_id`)
) ENGINE=MyISAM;



DROP TABLE IF EXISTS `tbl_product_qty`;
CREATE TABLE `tbl_product_qty` (
  `prodqty_id` int(8) unsigned NOT NULL auto_increment, 
  `prodqty_date_added` date NOT NULL,
  `prodqty_time_added` time NOT NULL ,	
  `prodqty_date_updated` date NOT NULL,
  `prodqty_time_updated` time NOT NULL,	
  `prodqty_quantity` int(10) NOT NULL default '0',
  `prod_id` int(8) NOT NULL default '0',
  PRIMARY KEY  (`prodqty_id`),
  KEY (`prod_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10000001;

/*DROP TABLE IF EXISTS `tbl_receive`;
CREATE TABLE `tbl_receive` (
  `rec_id` int(8) unsigned NOT NULL auto_increment, 
  `rec_supplier` varchar(180) NOT NULL default '',
  `rec_description` varchar(180) NOT NULL default '',
  `rec_amount` int(10) NOT NULL default '0',
  `rec_date_added` date NOT NULL,
  `rec_time_added` time NOT NULL,
  `rec_saved` int(1) NOT NULL default '0',	
  `rec_status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`rec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10000001;

DROP TABLE IF EXISTS `tbl_receive_items`;
CREATE TABLE `tbl_receive_items` (
  `rec_id` int(8) NOT NULL default '0',
  `prod_id` int(8) NOT NULL default '0',
  `rec_qty` int(8) NOT NULL default '0',
  KEY  (`rec_id`),
  KEY  (`prod_id`)
) ENGINE=MyISAM;*/

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE `tbl_order` (
  `order_id` int(8) unsigned NOT NULL auto_increment, 
  `order_customer` varchar(180) NOT NULL default '',
  `order_description` varchar(180) NOT NULL default '',
  `order_amount` int(10) NOT NULL default '0',
  `order_date_added` date NOT NULL,
  `order_time_added` time NOT NULL,
  `order_saved` int(1) NOT NULL default '0',	
  `order_status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10000001;

DROP TABLE IF EXISTS `tbl_order_items`;
CREATE TABLE `tbl_order_items` (
  `order_id` int(8) NOT NULL default '0',
  `prod_id` int(8) NOT NULL default '0',
  `order_qty` int(8) NOT NULL default '0',
  KEY  (`order_id`),
  KEY  (`prod_id`)
) ENGINE=MyISAM;

DROP TABLE IF EXISTS `tbl_order_sales`;
CREATE TABLE `tbl_order_sales` (
  `order_id` int(8) NOT NULL default '0',
  `prod_id` int(8) NOT NULL default '0',
  `prod_qty` int(8) NOT NULL default '0',
  KEY  (`prod_id`),
  KEY (`order_id`)
) ENGINE=MyISAM;