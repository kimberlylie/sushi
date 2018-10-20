# Database Structure

To initialize the database, run
>f37ee.sql

### menu table

| Column        | Data Type     |  Key  |
| :-------------: |:-------------:| :-----:|
| id      | int(10) | Primary |
| name      | varchar(50)      |    |
| type | varchar(10)     |     |
| description | varchar(200) |  |
| price | int(10) |  |
| imgURL | varchar(80) |  |

### customers table

| Column        | Data Type     |  Key  |
| :-------------: |:-------------:| :-----:|
| id      | int(10) | Primary |
| name      | varchar(50)      |    |
| address | varchar(100)     |     |
| postalcode | int(10) |  |
| email | varchar(50) |  |
| phone | int(80) |  |

### orders table

| Column        | Data Type     |  Key  |
| :-------------: |:-------------:| :-----:|
| id      | int(10) | Primary |
| customer_ID      | int(10)      |  Foreign `customers.id`  |
| date | date     |     |
| menu_ID | int(10) | Foreign `menu.id` |
| quantity | int(10) |  |
| remarks | varchar(100) |  |

### feedback table

| Column        | Data Type     |  Key  |
| :-------------: |:-------------:| :-----:|
| id      | int(10) | Primary |
| name      | varchar(50)      |    |
| email | varchar(50)     |     |
| subject | varchar(80) |  |
| message | varchar(140) |  |

