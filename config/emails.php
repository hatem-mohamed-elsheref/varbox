<?php

return [

    /*
    |
    | All email types available for your application.
    | Whenever you create a new block using the "php artisan varbox:make-block" command or manually, append the type here.
    |
    | --- [Class]:
    | The mailable class used for sending the email.
    | This gets generated automatically when running "php artisan varbox:make-mail", but you can also create it manually.
    | If your create this class manually, don't forget it will have to extend the abstract "Varbox\Cms\Mail\Mailable" class.
    |
    | --- [View]:
    | The blade file used for rendering the email.
    | The value here will be relative to the "resources/views/" directory.
    |
    | --- [Variables]:
    | Array of variables that the respective mail type is allowed to use.
    | Each array item defined here, should represent a key from the "variables" config option defined below.
    |
    */
    'types' => [

        /*'password-recovery' => [
            'class' => 'Varbox\Cms\Mail\PasswordRecovery',
            'view' => 'varbox::emails.password_recovery',
            'variables' => [
                'first_name', 'last_name', 'full_name', 'reset_password_url'
            ],
        ],*/

    ],

    /*
    |
    | All the available variables to be used inside mailables as dynamic content.
    | Each of these variables may belong to more than only one mail, but the implementation may differ inside each mailable class.
    |
    | --- [ARRAY KEY]:
    | The actual variable name.
    | You should reference variables by this, throughout your application.
    |
    | --- [Name]:
    | The visual name of the variable.
    |
    | --- [Label]:
    | Short description of what the variable represents.
    |
    | --- [Description]:
    | Longer description of what the variable represents and how it works.
    | If you don't want a description for your variables, you can make the value of this option either an "empty string" or "null".
    |
    */
    'variables' => [

        'first_name' => [
            'name' => 'First Name',
            'label' => 'The first name of the logged in user.',
            'description' => 'If used in an email, but no logged in user exists, this variable will not render anything.',
        ],

        'last_name' => [
            'name' => 'Last Name',
            'label' => 'The last name of the logged in user.',
            'description' => 'If used in an email, but no logged in user exists, this variable will not render anything.',
        ],

        'full_name' => [
            'name' => 'Full Name',
            'label' => 'The full name of the logged in user.',
            'description' => 'If used in an email, but no logged in user exists, this variable will not render anything.',
        ],

        'home_url' => [
            'name' => 'Home URL',
            'label' => 'The home URL of the site.',
            'description' => 'This URL will direct the users to the site\'s homepage.',
        ],

    ],

];
