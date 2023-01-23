<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# KAITOSS TASK

## About TASK

### Programming a script for sending e-mail messages

There are more than a million users, and we need to send messages to all users at once, without affecting server speed
or losing any message to any user.
In addition to not waiting for the browser to open after pressing the submit button until the completion of the download
and transmission

# How To Run

- **Install Composer**

``` bash
    composer install 
```

- **Create Database**


- **Edit .env file**

  Edit QUEUE_CONNECTION in .env file

``` 
    QUEUE_CONNECTION=database
```

- **Run Migration And Seed Users Table**

``` bash
    php artisan migrate:fresh --seed 
```

- **Run Server**

``` bash
    php artisan serve
```

- **Run Queue**

``` bash
    php artisan queue:work 
```

- **Open The browser**

```
    http://127.0.0.1:8000
```

