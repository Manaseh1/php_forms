CREATE TABLE posts(
	id int(11) not null	PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content varchar(1000) not null,
    date datetime not null
 );
 insert into posts(subject,content,date) VALUES('This is the subject','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.','2022-12-16 14:22:01');
--  select column_name from table_name (*)represents all
--  select column_name from table_name where id = 1 (*)represents all where is used for specification
-- AND OR can be used with where
delete from posts -- delete is used to delete data from a table
where id =1

SELECT * FROM posts ORDER BY id ASC --order by is used to show the content in the format specified from a column
--asc ascending