# Caesar Cipher

An PHP implementation of Caesar Cipher

>In cryptography, a Caesar cipher, also known as Caesar’s cipher, the shift cipher, Caesar’s code or Caesar shift, is one of the simplest and most widely known encryption techniques. It is a type of substitution cipher in which each letter in the plaintext is replaced by a letter some fixed number of positions down the alphabet. For example, with a left shift of 3, D would be replaced by A, E would become B, and so on. The method is named after Julius Caesar, who used it in his private correspondence.

## Requirements

- php 7 or above

## Quick Start
```php
<?php
$cipher = new CaesarCipher();
$encrypted = $cipher->encrypt('Secret Text', 3); // Vhfuhw Whaw
$decrypted = $cipher->decrypt($encrypted, 3); // Secret Text

echo $encrypted .' = '. $decrypted;

```