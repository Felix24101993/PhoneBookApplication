##1 - Make sure composer installs all the vendors;
##2 - Create a local database with the following credentials : 
DB_PORT=3307
DB_DATABASE=phonebookapplication
DB_USERNAME=root
DB_PASSWORD=root
Execute this script in the phonebookapplication database:
create table PhoneNumbers(
    phoneId int PRIMARY KEY AUTO_INCREMENT,
    phoneNumber int,
    name varchar(255),
    email varchar(255)
);

insert into PhoneNumbers(phoneNumber,name,email) values (0722234444, "Marinau Felix", "marinau@yahoo.com");
insert into PhoneNumbers(phoneNumber,name,email) values (0723452145, "Bon Jovi", "bjovi@yahoo.com");
insert into PhoneNumbers(phoneNumber,name,email) values (0722267676, "Tester Western", "twster@yahoo.com");


##3 - Run the command : php artisan serve; and then acces the link provided : http://127.0.0.1:8000  ;
    
