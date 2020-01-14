### Description

OS command injection (also known as shell injection) is a web security vulnerability that allows an attacker to execute arbitrary operating system (OS) commands on the server that is running an application.



refers :
-  https://www.owasp.org/index.php/Top_10-2017_A1-Injection
-  https://github.com/PortSwigger/command-injection-attacker/blob/master/README.md

### Issue 

OS Command Injection server which took advantage on endpoint `view` that allow OS command execution through a maliciously crafted command line argument..

### Exploit

By viewing `mail.log` user can execute os commands 

Eg PAYLOAD : `0.0.0.0:8000/?view=mail.log;uname -a`

### Fix

implemented input Sanitization to the endpoint `view`
