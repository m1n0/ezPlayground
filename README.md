
# Docker eZ Platform

Clean installation of eZ Platform 16.04 (v1.3.0)

## Docker

If this is your first time using Docker visit [dock-cli](https://github.com/inviqa/dock-cli) and follow the instructions to install dock-cli and docker

Once you have docker installed you can start the project by navigating to the project root directory and running  

```
dock-cli start
```

## Getting started

Install PHP dependencies (you may need to [configure composer first](#composer)):
```
composer install
```

Only the first time, install eZPlatform demo data itself:
```
docker-compose run web app/console ezplatform:install clean
```

And finally to create the css and js files
```
docker-compose run web app/console assetic:dump
```

At the end, running the following command will show a list of the running containers:
```
dock-cli ps
```
That will produce an output similar to (if you used the default project dir):
```
+-----------+-----------------------------+---------------------------------------------------------------+----------+---------+
| Component | Container                   | DNS addresses                                                 | Port(s)  | Status  |
+-----------+-----------------------------+---------------------------------------------------------------+----------+---------+
| mysql     | dockerezplatform_mysql_1    | mysql.docker                                                  | 3306/tcp | running |
|           |                             | dockerezplatform_mysql_1.mysql.docker                         |          |         |
+-----------+-----------------------------+---------------------------------------------------------------+----------+---------+
| selenium  | dockerezplatform_selenium_1 | selenium/standalone-chrome.docker                             | 4444/tcp | running |
|           |                             | dockerezplatform_selenium_1.selenium/standalone-chrome.docker |          |         |
+-----------+-----------------------------+---------------------------------------------------------------+----------+---------+
| web       | dockerezplatform_web_1      | dockerezplatform_web.docker                                   | 80/tcp   | exited  |
|           |                             | dockerezplatform_web_1.dockerezplatform_web.docker            |          |         |
+-----------+-----------------------------+---------------------------------------------------------------+----------+---------+
```

Site: [http://dockerezplatform_web.docker](http://dockerezplatform_web.docker)

Admin: [http://dockerezplatform_web.docker/ez](http://dockerezplatform_web.docker/ez) (by default the username is `admin` and the password `publish`)
