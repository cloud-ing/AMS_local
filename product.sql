drop database if exists journal;
CREATE USER 'interplan'@'%' IDENTIFIED VIA mysql_native_password USING '***';
GRANT ALL PRIVILEGES ON *.* TO 'interplan'@'%' REQUIRE NONE
 WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
 GRANT ALL PRIVILEGES ON `jornal`.* TO 'interplan'@'%';

CREATE USER 'interplan'@'%' IDENTIFIED VIA mysql_native_password USING '***';
GRANT ALL PRIVILEGES ON *.* TO 'interplan'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON `journal`.* TO 'interplan'@'%';

INSERT INTO `qa` (`qa_id`, `part_id`, `chapter`, `q11`, `q12`, `q21`, `q22`, `q3`, `q4`, `inputdate`, `modified`, `confirm`) VALUES (NULL, '2', '1', '5', '難しすぎてわかりません', '5', '黙読をやらせるのはやめてください', '必死でついてていってます', '今後のことはわかりませんが、きっと良い未来が開かれえているのではと思います。', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');