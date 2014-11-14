Gielda Projektow Inzynierskich
=======================

What's inside?
--------------

Installation
------------

sometimes problems with downloading with composer classes:
 - src/application/sonata/classificationBundle/entity/Context.php
 - classificationBundle/.../context.orm.php

Reset the data
--------------


Run
---

php app/console server:run

Tests
-----

### Functional testing

To run the Behat tests, copy the default configuration file and adjust the base_url to your needs

    # behat.yml
    imports:
        - behat.yml.dist

    # Overwrite only the config you want to change here

You can now run the tests suite using the following command

    bin/qa_behat.sh

To get more informations about Behat, feel free to check [the official documentation][link_behat].


### Unit testing

To run the Sonata test suites, you can run the command:

    bin/qa_client_ci.sh

Enjoy!

[link_behat]: http://docs.behat.org "the official Behat documentation"
