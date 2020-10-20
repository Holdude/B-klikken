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
    
    CREATE TABLE Juice(
        juiceId INT AUTO_INCREMENT,
        juiceNavn VARCHAR(50),
        juicePris INT,
        juiceBilde VARCHAR(50),
        PRIMARY KEY (juiceId)
    )

    CREATE TABLE JuiceKommentar(
        kommentarID INT AUTO_INCREMENT,
        navn VARCHAR(50),
        kommentar VARCHAR(100),
        FOREIGN KEY (navn) REFERENCES Person(navn),
        PRIMARY KEY (kommentarID)
    );







    INSERT INTO Person VALUES ("ørl", 0);
    INSERT INTO Person VALUES("sogv", 0);
    INSERT INTO Person VALUES("stin", 0 );
    INSERT INTO Person VALUES("sonon", 0);