<?php

return [
    'title' => 'Users',
    'form-titles' => [
        'create' => 'Create Users',
        'show' => 'Display User Information',
        'edit' => 'Update User Information'
    ],
    'attributes' => [
        'name' => 'Full Name',
        'email' => 'Email',
        'password' => 'Password',
        'new_password' => 'New Password',
        'current_password' => 'Current Password',
        'password_confirmation' => 'Confirm Password',
    ],
    'seeders' => [
        'title' => '### CREATING USERS ###',
        'ask' => 'How many Users do you want to create for the development environment?',
        'saved' => '[:current] Creating user: :name',
        'end' => '### USERS CREATED ###',
    ],
    'messages' => [
        'error-saved' => 'Error while registering the user :name',
        'error-updated' => 'Error while updating the user :name',
        'error-deleted' => 'Error while deleting the user :name',

        'confirm_delete' => 'Are you sure to delete the user?',
        'saved' => 'The user :name has been successfully saved.',
        'updated' => 'The user :name has been successfully updated.',
        'password_updated' => 'The user password :name has been successfully updated.',
        'deleted' => 'The user :name has been successfully deleted.',
    ]
];
