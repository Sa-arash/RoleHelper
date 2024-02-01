# RoleHelper
If you need to change the main text of your rols, then this package will help you

----------

STEP 1 :

>composer require sa-arash/rolehelper

STEP 2 : add `PROVIDERS` and `FACADES` in config/app.php


        'providers' => ServiceProvider::defaultProviders()->merge([
        ......
        SaArash\Rolehelper\roleHelperProvider::class,

    ])->toArray(),
        
         'aliases' => Facade::defaultAliases()->merge([
         ......
        'RoleHelper'=> SaArash\Rolehelper\Facades\roleFacad::class,
    ])->toArray(),

STEP 3 :
 >php artisan vendor:publish --tag=RoleHelper

----------

Now you can define your role in config/roleHelper.php and use this :

```{{ RoleHelper::convert($role) }}```

