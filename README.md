Europeana Professional v2.0
===========================

This is the repository for Europeana Professional v2.0. To install this, do the following: 

- Clone this repository from Github
- Copy `app/config/config_local.yml.dist` to `app/config/config_local.yml`, set up your database credentials
- Done!

This version is a "base" install of Bolt, with one major exception: The vendors folder has been rebuilt, to accomodate for the `google/apiclient` package. The package is included in the repository, but it will not be automatically updated. To rebuild the vendors folder, use the following on the command line. 

```
curl -s http://getcomposer.org/installer | php
php composer.phar update
```



-------
