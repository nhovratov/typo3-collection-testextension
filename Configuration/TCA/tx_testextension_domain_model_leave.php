<?php

return [
    'ctrl' => [
        'title' => 'Leave',
        'label' => 'name',
    ],
    'types' => [
        0 => ['showitem' => 'name']
    ],
    'columns' => [
        'name' => [
            'label' => 'Name',
            'config' => [
                'type' => 'input',
                'eval' => 'required'
            ]
        ]
    ]
];
