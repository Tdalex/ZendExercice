<?php

return array(
    'elements' => array(
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
);    