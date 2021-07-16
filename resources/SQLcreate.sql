CREATE DATABASE exam;
USE exam;

CREATE TABLE questions(
    qst_no      INT             NOT NULL,
    question    VARCHAR(150)    NOT NULL,
    PRIMARY KEY (qst_no)
);

CREATE TABLE answers(
    qst_no     INT            NOT NULL,
    anw_no     CHAR(3)        NOT NULL,
    answer     VARCHAR(1500)   NOT NULL,
    is_correct BOOLEAN        NOT NULL,
    FOREIGN KEY (qst_no) REFERENCES questions (qst_no) ON DELETE CASCADE,
    PRIMARY KEY (qst_no, anw_no)    
);