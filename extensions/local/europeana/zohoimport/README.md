ZOHO Import
===========

Pulling data from the CRM into the CMS will require a custom extension for Bolt.
What this extension has to do is quite similar for all the three User Stories it applies to.

For example, #2 would do the following:
- It will run via a Cronjob. (once a night? once every hour? depending on how much changes will be expected)
- It fetches all Network Members from the CRM via the REST API.
 - It then iterates over all these items, comparing them with what we have in the corresponding Bolt table:
   - If it's a new item, create a new record in Bolt with this data
   - If it's an existing item, update some/all of the fields with the data fetched from the CRM
- Finally, delete (or unpublish) items that are no longer present in the CRM.

For more info <a href="https://www.zoho.com/crm/help/api/api-methods.html">ZOHO API documentation</a>

# api example

<code php>
    header("Content-type: application/xml");
    $token="AUTHTOKEN";
    $url = "https://crm.zoho.com/crm/private/xml/Leads/getRecords";
    $param= "authtoken=".$token."&scope=crmapi";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;
    return $result;
</code>