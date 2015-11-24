# horizontal-parking app

## Requirements:

+ [Vagrant](https://www.vagrantup.com/downloads.html)
+ [Composer](https://getcomposer.org/)

## Environment

This app uses homestead/laravel vagrant box so please go to documentation to get homestead running
[Download Link](http://laravel.com/docs/5.0/homestead)

Edit `Homestead.yalm` with the configuration that you prefer depending on your configuration directories,
by default it's set to `/sites/hparkinglot/project`

Add a domain host **or not** with the ip set in Homestead.yalm `192.168.10.10`:
``` hosts
hparking.app 192.168.10.10
```

Inside laravel project directory install with composer:
```
composer install
```

Then create a ssh key to download packages from homestead
```
ssh-keygen -t rsa -C "you@homestead"
```

And finally up whit the vagrant:
```
vagrant up
```

then go to the IP stabilised http://192.168.10.10 or  http://hparking.app

and voilà, enjoy coding!

---
made with :heart: