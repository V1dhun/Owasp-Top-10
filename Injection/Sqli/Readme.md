### Description

SQL injection is a web security vulnerability that allows an attacker to interfere with the queries that an application makes to its database.

refers :  https://portswigger.net/web-security/sql-injection

### Setting Env

```bash
$ docker-compose -d up --build
$ bash run.sh
```
### To Check

```bash
$ curl -I 0:8000

```

### Issue 

SQLi vulnerability allowing login bypass

### Expolit

In username : ``'+OR+1=1+--++`` and submit.

### Fix

Added `mysqli_real_escape_string()` to input parameters
