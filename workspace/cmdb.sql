use c9;

DROP TABLE IF EXISTS custreq;
CREATE TABLE custreq(
    cust_id int(11) NOT NULL auto_increment,
    name char(35),
    contact int(11),
    currentlocationloc char(100),
    destination char (100),
    timeofpickup varchar (5),
    numtravel varchar(3),
    driverrequest char(30),
    driver_id varchar(30),
    costofjourney varchar(10),
    PRIMARY KEY (cust_id)
);


DROP TABLE IF EXISTS drvinfo;
CREATE TABLE drvinfo(
     id varchar(20),
    name char(30),
    trn varchar(12),
    email varchar (30),
    address varchar(30),
    contact varchar(13),
    make varchar(30),
    model varchar(30),
    year varchar(30),
    colour char(20),
    licenseplate varchar(30),
    PRIMARY KEY (id)
    

);
