<?php

return array(
    'elements' => array(
        // la saisie du login (type text)
        array(
            'spec' => array(
                'type' => 'Zend\Form\Element\Text',
                'name' => 'login',
                'attributes' => array(
                    'size' => '20',
                ),
                'options' => array(
                  'label' => 'Login : ',
                ),
            ),
        ),
        // la saisie du mot de passe (type pwd)
        array(
            'spec' => array(
                'type' => 'Zend\Form\Element\Password',
                'name' => 'password',
                'attributes' => array(
                    'size' => '20',
                ),
                'options' => array(
                  'label' => 'password : ',
                ),
            ),
        ),
        // le boutton de validation
        array(
            'spec' => array(
                'type' => 'Zend\Form\Element\Submit',
                'name' => 'submit',
                'attributes' => array(
                    'value' => 'Suite',
                ),
            ),
        ),
    ),
    'input_filter' => array(
        'login' => array(
            'validators' => array(
                array(
                    'name' => 'Zend\I18n\Validator\Alpha',
                ),
            ),
            //'filters' => array(
            //   array(
            //      'name' => 'Zend\I18n\Filter\Alpha'
            //    ),
            //),
        ),
    ),
);    