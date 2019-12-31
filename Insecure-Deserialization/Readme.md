### Description

Insecure deserialization often leads to remote code execution. Even if deserialization flaws do not result in remote code execution, they can be used to perform attacks,including replay attacks, injection attacks, and privilege escalation attacks.

refers : 
* https://www.owasp.org/index.php/Top_10-2017_A8-Insecure_Deserialization
* https://github.com/swisskyrepo/PayloadsAllTheThings/blob/master/Insecure%20Deserialization/PHP.md

### Issue 

It is possible to authentication bypass by Type juggling

### Exploit 

- urlencode the payload
- replace the cookie with payload

PAYLOAD : ``a:2:{s:8:"username";b:1;s:6:"passwd";b:1;}``

### Fix 

changed the comparison operator ``==`` to ``===``.
The '==' operator is a loose comparison operator, whereas the '===' does a strict comparison

refers : https://www.owasp.org/images/6/6b/PHPMagicTricks-TypeJuggling.pdf

---

- Other resources :

  Video about php deserialization : https://www.youtube.com/watch?v=HaW15aMzBUM
