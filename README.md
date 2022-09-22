# STP Electronic Transfers #

This Laravel module adds support for you to accept STP electronic transfers in your project.

Records for the account holders are separated into two tables – one for issuers and another for recipients – both with polymorphic relations. This way, they can be used for any model.
- `eft_accounts`
- `recipient_eft_accounts`

_NB: EFT = Electronic Funds Transfer_

## Installation Notes:

Add the following requirement to `composer.json`:

```json
"kinedu/stp-transfers": "^2.0",
```

then run `composer update`.

## Supported versions

* PHP - supports versions 7.2, 7.3, and 7.4.
* Laravel - supports versions 5.x, and 6.x.
