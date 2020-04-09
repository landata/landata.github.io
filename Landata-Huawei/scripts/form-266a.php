<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'email' => array(
        'from' => 'kremotory@gmail.com',
        'to' => 'kremotory@gmail.com'
    ),
    'fields' => array(
        'name' => array(
            'order' => 1,
            'type' => 'string',
            'label' => 'Имя',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Имя\' is required.'
            )
        ),
        'text' => array(
            'order' => 2,
            'type' => 'string',
            'label' => 'text',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'text\' is required.'
            )
        ),
        'text-1' => array(
            'order' => 3,
            'type' => 'string',
            'label' => 'text-1',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'text-1\' is required.'
            )
        ),
        'email' => array(
            'order' => 4,
            'type' => 'email',
            'label' => 'Email',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Email\' is required.'
            )
        ),
        'phone' => array(
            'order' => 5,
            'type' => 'tel',
            'label' => 'Телефон',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Телефон\' is required.'
            )
        ),
        'message' => array(
            'order' => 6,
            'type' => 'string',
            'label' => 'Адрес',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Адрес\' is required.'
            )
        ),
    )
);

$processor = new FormProcessor();
$processor->process($form);

?>