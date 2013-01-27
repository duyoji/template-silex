# Template of Silex

## inclusion
- silex
- phpunit
- doctrine/orm


## composer install
- ./composer.phar install

**when finish this command, added vendor dirctory**


## phpunit
- ./vendor/bin/phpunit tests/Test/AlertTest.php

## doctrine

### set DB config(MySQL)

**get value from your DB**

set your DB infomation in config/DB.php

- 'driver'   => 'pdo_mysql'
- 'user'     => 'user_name'
- 'password' => 'db_password'
- 'dbname'   => 'db_name'
- 'path'     => '127.0.0.1' // set your host

when set above value, run following comman

- ./vendor/bin/doctrine orm:convert-mapping --namespace="Model\\\\" --from-database yml ./config/yaml 
- ./vendor/bin/doctrine orm:generate-entities ./libs/
- ./vendor/bin/doctrine orm:validate-schema

**if you have eror that display [Database], run following command**

- ./vendor/bin/doctrine help  orm:schema-tool:update --force
- ./vendor/bin/doctrine help  orm:schema-tool:update --dump-sql
- ./vendor/bin/doctrine orm:validate-schema

