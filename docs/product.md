# Mail-Domain

Bestellung: `POST /products/mailserver/domains`. ID: `data.id`.

Kundenfelder: `name`.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `mailserver_location_id` | string | Ja | required; uuid; exists:mailserver_locations,id |
| `name` | string | Ja | required; string; max:255; regex:/^(\[a-zA-Z0-9\](\[a-zA-Z0-9-\]{0,61}\[a-zA-Z0-9\])?\\.)+\[a-zA-Z\]{2,}$/; unique:customer_mail_domains,name |
| `quota_bytes` | integer | Nein | nullable; integer; min:104857600 |

API-Key-Rechte für alle Modulansichten und Aktionen: `mailserver:create`, `mailserver:delete`, `mailserver:read`.

Verwaltungsaktionen: Produktübersicht und Zugangsdaten.

Hinweise:
- No domain suspend/unsuspend endpoint
- Mailboxes separately created at POST /products/mailserver/domains/{domain}/mailboxes (local_part required, optional quota_bytes); response data.id
- Mailbox enabled toggle is access control, not whole domain suspension
