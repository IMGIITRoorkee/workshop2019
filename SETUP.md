# Setup guidelines

Make sure you have installed all the technologies specified in [README.md](https://github.com/IMGIITRoorkee/workshop2019/blob/master/README.md#technologies-used-lamp-wamp-or-mamp).

## Database
Run the following commands to set up the database and create necessary tables
```sql
Open MySQL console from WAMP server // For Windows users
$ mysql -u root -p // For linux and mac users

> CREATE DATABASE workshop;
> USE workshop;
> CREATE TABLE `xtreme` (
    `id` INT AUTO_INCREMENT,
    `link` VARCHAR(31) NOT NULL,
    `genre` VARCHAR(255) NOT NULL DEFAULT 'xtreme-home',
    `description` TEXT,
    PRIMARY KEY(id)
);
```

## Project setup
### Linux users:
```bash
  $ sudo su
  $ cd  /var/www/html/
  $ git clone https://github.com/IMGIITRoorkee/workshop2019.git xtreme
  $ service apache2 start
```
### Windows users:
```bash
  > Download the project repository to C://wamp64/www/
  > Start the wamp server
```
### Mac users:
```bash
  $ sudo su
  $ cd  /Library/WebServer/Documents
  $ git clone https://github.com/IMGIITRoorkee/workshop2019.git xtreme
  $ service apache2 start
```

#### Visit [http://localhost/xtreme/index.php](http://localhost/xtreme/index.php) and play with the project.
