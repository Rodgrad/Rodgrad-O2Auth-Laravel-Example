



### Note

## Dependencies




Composer lock file is included to resolve all dependencies with simple update command.


For more information about more advanced packages you can read more in the following Jetstream and Socialite sections.



### Auth




## Jetstream

Project is using Jetstream scalfolding for creating and authenticating accounts along with Socialite driver using Github o2auth.

To learn more about Jetstream and how to install Jetstream follow this link: https://jetstream.laravel.com/3.x/installation.html



## Socialite


Github o2auth driver is user for user creation and  autherntication/authorization, even if classic user creation is supported.

To install Socialite follow these instructions: https://laravel.com/docs/9.x/socialite#main-content

Here you will find explained how routes, config files, migrations and controllers for our User CRUD are made and configured.


## Github Create App for o2auth


In order to use Github o2auth it it is necessary to create Github application with callback to our site.

https://docs.github.com/en/apps/oauth-apps/building-oauth-apps/creating-an-oauth-app

It  may be necessary to set Email addresses Access to Read-only, it can be done in the Premission & events menu found on left sidebar of your Github application.



### API Tokens




## Passport 

API tokens are created by using Laravel Passport, how it is done you can read more on this link:  https://laravel.com/docs/9.x/passport#main-content

When deploying Passport to your application's servers for the first time, you will likely need to run the passport:keys command. This command generates the encryption keys Passport needs in order to generate access tokens. The generated keys are not typically kept in source control:

<code> php artisan passport:keys
</code>





