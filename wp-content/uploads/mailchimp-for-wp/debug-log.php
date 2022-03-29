<?php exit; ?>
[2020-08-30 05:32:05] ERROR: Form 445 > Mailchimp API error: 400 Bad Request. Invalid Resource. noreply@amazon-service.xyz has signed up to a lot of lists very recently; we're not allowing more signups for now

Request: 
POST https://us12.api.mailchimp.com/3.0/lists/2d4b53bfb2/members

{"status":"pending","email_address":"noreply@amazon-service.xyz","interests":{},"merge_fields":{},"email_type":"html","ip_signup":"180.183.122.52","tags":[]}

Response: 
400 Bad Request
{"type":"http://developer.mailchimp.com/documentation/mailchimp/guides/error-glossary/","title":"Invalid Resource","status":400,"detail":"noreply@amazon-service.xyz has signed up to a lot of lists very recently; we're not allowing more signups for now","instance":"e545edf7-d305-4462-a2db-21ee4d677e5b"}
[2021-03-02 14:34:59] WARNING: Form 445 > mend********@gm***.com is already subscribed to the selected list(s)
