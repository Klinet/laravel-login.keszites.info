#####setting
#####make sure about required php ext for laravel. ex. routing doesnt work without! (found it misstake takes me 20m)
    set github for transparent
    set dns for sub-domain
    set db
    set ftp
____________________
    composer update
    composer install on server
____________________
    create router
    create authController
    create passwdController
____________________
    for rendering:
    create views
        common header, footer
    create template 
_______________
    create db migration file for users tbl
        php artisan migrate --force -> create database
        this test for db connection from .env file
        OK
_______________________
    add package "bootstrap": "^4.0.0"
    // this was in deafault install
    so npm i
    and npm i on server
    node_modules folder as exlude
    make sure /node_modules in gitignore 
_____________________________
    php artisan make:model Users
    
#####make a git commit: MVC created
    a session íráshoz foldernek jogot kell adni:
###### drwxrwxr-x  5 laravel www-data 4.0K Jun 28 22:03 storage

    routolás
    -create a login page
    -create a page where all userdata
    
__________________________________
    local frontend node server
    npm install bootstrap jquery popper.js --save
    npm run dev -> make combined css from scss of bootstrap4 to dist folder and deploy it
    
    php artisan make:auth
    
