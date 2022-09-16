# STP Electronic Transfers #

This Laravel module adds support for you to accept STP electronic transfers in your project.

### Installation Notes:

Add this module as a Composer package:

```php
"kinedu/stp-transfers": "^1.0",
```

In this version EFT Accounts are separated into two tables – one for issuers and another for recipients – both with polymorphic relations. This way, they can be used for any model.
- `eft_accounts`
- `recipient_eft_accounts`
