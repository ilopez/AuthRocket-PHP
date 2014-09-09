<?php
/**
 * Created by PhpStorm.
 * User: ilopez
 * Date: 9/8/14
 * Time: 1:01 PM
 */

return [
    'baseUrl' => '',
    'operations' => [
        'GetUsers' => [],
        'CreateUser' => []

    ],
    'models' => [
        'Resource' => [
            'type' => 'object',
            'additionalProperties' => [
                'location' => 'json',
            ]
        ]
    ]
];
