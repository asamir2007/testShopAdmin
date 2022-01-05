CREATE TABLE category_product (
	pk_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT
	,fk_id_parent INT(10) UNSIGNED NULL

		,PRIMARY KEY (pk_id)
		,FOREIGN KEY (fk_id_parent) REFERENCES category_product (pk_id)
		
		,INDEX (fk_id_parent)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';

CREATE TABLE category_product_info (
	fk_id_cat INT(10) UNSIGNED NOT NULL
	,title VARCHAR(100) NULL DEFAULT NULL

		,PRIMARY KEY (fk_id_cat)
		,FOREIGN KEY (fk_id_cat) REFERENCES category_product (pk_id)

		,INDEX (fk_id_cat)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';




CREATE TABLE product (
	pk_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT
	,shop_p_id VARCHAR(20) NULL DEFAULT NULL

		,PRIMARY KEY (pk_id)
		,INDEX (shop_p_id)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';

CREATE TABLE product_description (
	fk_id_product INT(10) UNSIGNED NOT NULL
	,title VARCHAR(100) NOT NULL
	,description TEXT NOT NULL
	
		,PRIMARY KEY (fk_id_product)
		,FOREIGN KEY (fk_id_product) REFERENCES product (pk_id)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';

CREATE TABLE product_price (
	fk_id_product INT(10) UNSIGNED NOT NULL
	,price BIGINT(20) NULL
	
		,PRIMARY KEY (fk_id_product)
		,FOREIGN KEY (fk_id_product) REFERENCES product (pk_id)
		
		,INDEX (fk_id_product)		
) ENGINE=InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';




CREATE TABLE users (
	pk_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT
	,name VARCHAR(100) NOT NULL
	,login VARCHAR(100) NOT NULL
	,password CHAR(60) NOT NULL
	,email VARCHAR(100) NOT NULL
	
		,PRIMARY KEY (pk_id)
		,UNIQUE KEY (email)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';



CREATE TABLE orders (
	pk_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT
	,fk_id_user INT(10) UNSIGNED NOT NULL
	
	,comment TEXT NOT NULL
	
		,PRIMARY KEY (pk_id)
		,FOREIGN KEY (fk_id_user) REFERENCES users (pk_id)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';





CREATE TABLE ordered_product (
	pk_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT
	,fk_id_product INT(10) UNSIGNED NOT NULL
	,fk_id_order INT(10) UNSIGNED NOT NULL
	
	,price BIGINT(20) NULL
	
		,PRIMARY KEY (pk_id)
		,INDEX (fk_id_order)
		,FOREIGN KEY (fk_id_product) REFERENCES product (pk_id)
		,FOREIGN KEY (fk_id_order) REFERENCES orders (pk_id)

		,INDEX (fk_id_order)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';



CREATE TABLE lnk_product_category (
	pk_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT
	,fk_id_cat INT(10) UNSIGNED NOT NULL
	,fk_id_product INT(10) UNSIGNED NOT NULL
	
		,PRIMARY KEY (pk_id)
		,FOREIGN KEY (fk_id_cat) REFERENCES category_product (pk_id)
		,FOREIGN KEY (fk_id_product) REFERENCES product (pk_id)

		,INDEX (fk_id_cat)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';

