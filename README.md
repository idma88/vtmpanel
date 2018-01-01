# About

This project was originally a draft and will not be used.
It provides users with the ability to submit there loads / jobs from the popular game Euro Truck Simulator 2.

It should be noted that this code is by no means secure or production ready. It's actually still missing some important features such as an admin area to approve jobs without the need to edit the database directly.

Dashboard
![Image1](https://i.imgur.com/BQrdpbi.png)

Submit Delivery
![Image2](https://i.imgur.com/NShf3hf.png)

# Installation

1) Setup and configure a basic lamp stack.

2) Upload the contents of this repository to the root of your web server.

3) Import the provided import.sql file to populate the database tables.

4) Edit the database table called users and add / edit as required.

5) Edit the /auth/connection.php (Starts Line 3) and /auth/submit.php (Starts Line 31) and enter your MySQL information.

# FAQ

1) How do I approve a job?
You can edit the table called deliveries and change the column called approved from a 0 to 1.
