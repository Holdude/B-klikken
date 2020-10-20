CREATE TABLE Person (
	navn VARCHAR(50),
    antall INT,
    PRIMARY KEY (navn)
    );
    
    CREATE TABLE Spyinfo (
		id INT AUTO_INCREMENT,
		navn VARCHAR(50),
        info VARCHAR(100),
        dato DATE,
        FOREIGN KEY (navn) REFERENCES Person(navn),
        PRIMARY KEY (id)
	);
    
    INSERT INTO Person VALUES ("ørl", 0);
    INSERT INTO Person VALUES("sogv", 0);
    INSERT INTO Person VALUES("stin", 0 );
    INSERT INTO Person VALUES("sonon", 0);