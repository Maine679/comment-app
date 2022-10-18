## Comment-app
#### 1. Setup:
Requirements:
* node: 14.*
* npm: 8.*
```
-	git clone
-	git checkout develop

-	composer create-project laravel/laravel comment-app
-	cd comment-app
-	set file .env (DB)
-	php artisan migrate
-   composer install
-   composer require laravel/breeze --dev
-	php artisan breeze:install vue
-   npm install
-   npm run ved
-   php artisan serve
```

#### 2. Setup file .env

#### 3. In the admin panel in the table of organisation click on checkbox from list choose 
####    Actions "Activate Visma" && "Activate Pipedrive" && "Activate Google drive"  

```
- activate visma
  { base.url }}/visma/oauth-callback?…

- activate pipedrive
  { base.url }}/pipedrive/oauth-callback?…

- activate google drive
  { base.url }}/googledrive/oauth-callback?… 
 
```


### 4. Run DB Seed:
```
-	php artisan db:seed
```

### 5. Run Queue:
```
    ### Send email
-	php artisan queue:work --queue=send_email

    ### Send sms
-   php artisan queue:work --queue=send_sms

    ### Manage Auction
-   php artisan queue:work --queue=auction

```

### 6. Sync actions and violations:
```
-	php artisan violation:sync
```

### ENV file
```
VEHICLE_API=true - if you want to make real requests in api Fragus and CarInfo
```

### For autotests
```
1) Set env files
- if local enveronment is local - copy .env => .env.dusk.local
- if local enveronment is test - copy .env => .env.dusk.test
- change db settings in .env.dusk.xxxx to your test db
- add variable QUICK_TEST=true to .env.dusk.xxxxx

2) Create or update MySQL dump
add DB_PATH_TO_MYSQL_BINS='C:\\Open Server 5.3.5\\OSPanel\\modules\\database\\MySQL-8.0-x64\\bin\\'
    to .env file
    real path to bin catalog
-   php artisan db:dump
3) Create or update mySQL dump for UserPanel  
- php artisan dusk tests\Browser\DumpFreshUserPanelStart.php
- php artisan dusk tests\Browser\DumpFreshUserPanelAddDeals.php

4) Create or update mySQL dump for SellerPanel  
- php artisan dusk tests\Browser\DumpFreshAddSales.php 
(Create a 2 new deal, users and 2 sale and save result in dump file db:dump dump-user-panel-add-sales.sql)

in case you need in user panel tests use your specific dump add

public function setUp(): void
    {
        $this->dumpName= '{$dumpName}';
        parent::setUp();
    }
4) Use variable EMAIL_TEST=example@gmail.com in .env file to receive emails in 
    non-production enveronment 
```

### For PhpStorm Vue component path aliases:
1) Create file webpack.config.js in project root
2) Add content:
```
const mixConfig = require('./node_modules/laravel-mix/setup/webpack.config')();

module.exports = {
  ...mixConfig,
  resolve: {
    alias: {
      ...require('./alias'),
    },
    ...mixConfig.resolve
  }
}
```
3) File > Settings... > Languages & Frameworks > Javascript > Webpack: 
   Select "Manually" and set the configuration file to webpack.config.js
4) Run webpack.config.js with node.js

### IMPORTANT: (before clear DB (organisations table))
  ```
  php artisan delete:old-data
  ```
  
####  Comment out text in 3 files where there is a label 'Comment in local'

  ## API Info
| Name       | Info                      |
|------------|---------------------------|
| Visma      | Invoice and Accounting    |
| Fragus     | Сar information           |
| Scrive     | Documents                 |
| Aros       | Bank (partner)            |
| Trustly    | Payment                   |
| Car.Info   | Simply car information    |
| Merinfo    | Organization data         |
| Chat       | API TIDIO                 |


