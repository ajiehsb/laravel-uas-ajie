CREATE TABLE tb_artist (
	art_id INT(11) NOT NULL AUTO_INCREMENT,
	art_name VARCHAR(50) NOT NULL,
	PRIMARY KEY(art_id),
	UNIQUE KEY(art_name)
);

CREATE TABLE tb_album (
	alb_id INT(11) NOT NULL AUTO_INCREMENT,
	alb_id_artist INT(11) NOT NULL,
	alb_name VARCHAR(50) NOT NULL,
	PRIMARY KEY(alb_id),
	UNIQUE KEY(alb_name),
	FOREIGN KEY(alb_id_artist) REFERENCES tb_artist(art_id) ON UPDATE CASCADE ON DELETE RESTRICT
);	

CREATE TABLE tb_track (
	trc_id INT(11) NOT NULL AUTO_INCREMENT,
	trc_name VARCHAR(100) NOT NULL,
	trc_id_album INT(11) NOT NULL,
	PRIMARY KEY(trc_id),
	UNIQUE KEY(trc_name),
	FOREIGN KEY(trc_id_album) REFERENCES tb_album(alb_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_played (
	ply_id INT(11) NOT NULL AUTO_INCREMENT,
	ply_id_track INT(11) NOT NULL,
	ply_played TIMESTAMP,
	PRIMARY KEY(ply_id),
	FOREIGN KEY(ply_id_track) REFERENCES tb_track(trc_id) ON UPDATE CASCADE ON DELETE RESTRICT
);
