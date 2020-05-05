<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => 'Mobirama Consultoría', // set false to total remove
            'description'  => '', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
                            'auditoría interna',
                            'auditoría administrativa',
                            'auditoría superior de la federación',
                            'reglamento interior de la auditoría superior de la federación',
                            'asf',
                            'auditoría superior del estado de puebla',
                            'que es auditoría',
                            'ley de fiscalización y rendición de cuentas de la federación',
                                ],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Mobirama Consultoria', // set false to total remove
            'description' => 'Somos una consultoría integral. Solventamos necesidades en materia Fiscal, Legal, Payroll, Contable y Financiera.', // set false to total remove
            'url'         => 'www.mobirama.com.mx', // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
        //   'card'        => 'summary',
        //   'site'        => '@LuizVinicius73',
        ],
    ],
];
