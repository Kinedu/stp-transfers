# STP Electronic Transfers #

This Laravel module adds support for you to accept STP electronic transfers in your project.

Records for the account holders are separated into two tables – one for issuers and another for recipients – both with polymorphic relations. This way, they can be used for any model.
- `eft_accounts`
- `recipient_eft_accounts`

_NB: EFT = Electronic Funds Transfer_

## Installation Notes:

Add the following requirement to `composer.json`:
```json
"kinedu/stp-transfers": "^3.0",
```

then run `composer update`.

## Supported versions

* PHP - supports versions 7.2, 7.3, 7.4, 8.0, and 8.1.
* Laravel - supports versions 5.8, 6.x, 7.x, 8.x, and 9.x.
