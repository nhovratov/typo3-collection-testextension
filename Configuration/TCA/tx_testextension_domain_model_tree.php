<?php

return [
    'ctrl' => [
        'title' => 'Tree',
        'label' => 'name',
    ],
    'types' => [
        0 => ['showitem' => 'name, leaves']
    ],
    'columns' => [
        'name' => [
            'label' => 'Name',
            'config' => [
                'type' => 'input',
                'eval' => 'required'
            ]
        ],
        'leaves' => [
            'label' => 'Leaves',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_testextension_domain_model_leave',
                'MM' => 'tx_testextension_tree_leaves_mm',
                'foreign_table' => 'tx_testextension_domain_model_leave',
            ]
        ]
    ]
];
