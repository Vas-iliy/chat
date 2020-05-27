create table message
(
    id      int auto_increment
        primary key,
    login   varchar(30)                         not null,
    message text                                not null,
    time    timestamp default CURRENT_TIMESTAMP not null
);

INSERT INTO chat.message (id, login, message, time) VALUES (1, 'ln', 'nkj', '2020-05-27 22:42:45');
INSERT INTO chat.message (id, login, message, time) VALUES (2, 'kjjnk', 'kjnk', '2020-05-27 22:43:44');
INSERT INTO chat.message (id, login, message, time) VALUES (3, 'vdfd', 'fghf', '2020-05-27 22:52:53');
INSERT INTO chat.message (id, login, message, time) VALUES (4, 'dfg', 'ert', '2020-05-27 22:55:33');