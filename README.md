Gielda Projektow Inzynierskich
=======================

Installation
------------

sometimes problems with downloading with composer classes:
 - src/application/sonata/classificationBundle/entity/Context.php
 - classificationBundle/.../context.orm.php

npm install

--------------------------------------------
composer install --prefer-dist

php app/console sonata:page:site-create
php app/console sonata:page:update-core-routes --site=all
php app/console sonata:page:create-snapshots --site=all

-------------------------------------------

Run
---

    php app/console server:run

Tests
-----

### Unit testing

To run the test suites, you can run the command:

    phpunit -c app --bootstrap app\tests.bootstrap.php src\GPI\AuctionBundle

To run continuous testing:

    grunt watch
