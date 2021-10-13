# STP Electronic Transfers #

This Laravel module adds support for you to accept STP electronic transfers in your project.

### Installation Notes:

For Student and School specific projects (e.g. Aldea), install 0.0.x versions:

```php
"kinedu/stp-transfers": "^0.0.4",
```

In this version EFT Accounts are separated into two tables:
- `student_eft_accounts`
- `school_eft_accounts`

---

For all other projects, install 0.1.x versions

```php
"kinedu/stp-transfers": "^0.1",
```

In this version EFT Accounts are separated into two tables – one for issuers and another for recipients – both with polymorphic relations. This way, they can be used for any model.
- `eft_accounts`
- `recipient_eft_accounts`
