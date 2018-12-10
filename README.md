# Code for Good 2018 - Educon
Educon is a web based solution developed for the NGO Jain Social Group with a motive of semi-automating the entire process of providing donations to needy students. This solution was developed as a part of Code for Good 2018 organised by J. P. Morgan Chase & Co.

Jain Social Group is a Mumbai based NGO that aims in helping needy students by providing financial assistance for their ongoing education. Various such students register themselves with the NGO. The NGO finds potential donors for such students also giving the donor the independence to choose the student whom they would like to give financial assitance for the current year or throughout his or hers education life.

At this time this entire process is manual, volunteers from the foundation personally register the students and donors and maintain the records on excel sheets.
Other processes like verifying the student personally, passing the donation, funds management is also done manually by the volunteers and the committee members. 

To eliminate the manual process and provide a semi automated solution in this era of digitization, we have implemented some economical and feasible solutions that will help in smooth functioning of NGO processes.
Following are the features we have implemented:
* Role Based Authentication Systen for different users of the System - Donor, Student, Committee Member, etc.
* Chart Based Visualization of Student profile for assisting in decision making to both donor while donating amount as well as committee members for passing donations
* Document Uploading and Viewing of every student user for verifying their authenticity
* PHP Mailer Based Notification of Application Status

Link to Original Directory: [Code for Good Mumbai 2018 - Team 7 ](https://github.com/Mumbai18/team-7)

## Getting Started

* After cloning the project you need to import the project's database from DB Folder into phpmyadmin of your local machine.
* Modify the file assets/backend/connect.php according to your phpmyadmin credentials
* Now you are ready to run the project on your local machine.

### Setting up PHP Mailer

* Open the file in PHP Mailer/vendor/test.php
* Enter your Gmail Credential in the required section to enable the PHP Mailer functionality

### Prerequisites

* [Xampp PHP 5.6 or Above](https://www.apachefriends.org/download.html)
* [Gmail Email ID](https://www.gmail.com)

## Demo

### Login Page
<center><img src="SS/3.png"></center>

### Student Registration Page
<center><img src="SS/4.png"></center>

### Donor Registration Page
<center><img src="SS/5.png"></center>

### Student Profile Page
<center><img src="SS/6.png"></center>

### Apply for Application Page 1 (Personal Details)
<center><img src="SS/8.png"></center>

### Apply for Application Page 2 (Educational Details)
<center><img src="SS/9.png"></center>

### Apply for Application Page 3 (Document Upload)
<center><img src="SS/10.png"></center>

### Apply for Application Page 4 (Status)
<center><img src="SS/11.png"></center>

### PHP Mailer based Notification System
<center><img src="SS/12.png" width="250" height="400"></center>

### Application Status
<center><img src="SS/7.png"></center>

## Built With

* [PHP Mailer](https://github.com/PHPMailer/PHPMailer)
* [Admin LTE 2 Bootstrap Template](https://adminlte.io/themes/AdminLTE/index2.html)

## Authors

* **Prathmesh Mhapsekar**-[prathmesh36](https://github.com/prathmesh36 )
* **Gurpreet Kaur Saimy**-[preet-kaur](https://github.com/preet-kaur)
* **Priyanka Narwani**-[priyanka68](https://github.com/Priyanka68)
* **Jyoti Tejwani**-[JyotiTejwani29](https://github.com/JyotiTejwani29)
* **Hrithik Gavali**-[hrithikgavali](https://github.com/hrithikgavali)
* **Purvam Poojari**-[PurvamPujari](https://github.com/PurvamPujari)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

##### The code ("Code") in this repository was created solely by the student teams during a coding competition hosted by JPMorgan Chase Bank, N.A. ("JPMC").						JPMC did not create or contribute to the development of the Code.  This Code is provided AS IS and JPMC makes no warranty of any kind, express or implied, as to the Code,						including but not limited to, merchantability, satisfactory quality, non-infringement, title or fitness for a particular purpose or use.