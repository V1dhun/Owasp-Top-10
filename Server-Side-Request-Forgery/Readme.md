### Description

Server-side request forgery (also known as SSRF) is a web security vulnerability that allows an attacker to induce the server-side application to make HTTP requests to an arbitrary domain of the attacker's choosing.

### What is SSRF-Attack

A successful SSRF attack can often result in unauthorized actions or access to data within the organization, either in the vulnerable application itself or on other back-end systems that the application can communicate with.

refers : https://portswigger.net/web-security/ssrf


### Setting env

```$ docker-compose up --build```

### Issue

Check Stock Product form is vulnerable for SSRF attack

### Expolit 

* Here the network is 10.0.0.0/29
* The web server is running in 10.0.0.2
* The internal server is running in 10.0.0.3

* Malicous User can access internal server by changing the Product value 

```html
<option value="http://10.0.0.3">Laptop</option>

```
* Then submit

### Fix 

implemented if function to check the ip of the request
