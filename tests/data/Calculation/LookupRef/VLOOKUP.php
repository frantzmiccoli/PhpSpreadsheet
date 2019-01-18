<?php

return [
    [
        '#N/A',
        1,
        [
            [
                'Density',
                'Viscosity',
                'Temperature',
            ],
            [
                0.45700000000000002,
                3.5499999999999998,
                500,
            ],
            [
                0.52500000000000002,
                3.25,
                400,
            ],
            [
                0.61599999999999999,
                2.9300000000000002,
                300,
            ],
            [
                0.67500000000000004,
                2.75,
                250,
            ],
            [
                0.746,
                2.5699999999999998,
                200,
            ],
            [
                0.83499999999999996,
                2.3799999999999999,
                150,
            ],
            [
                0.94599999999999995,
                2.1699999999999999,
                100,
            ],
            [
                1.0900000000000001,
                1.95,
                50,
            ],
            [
                1.29,
                1.71,
                0,
            ],
        ],
        2,
        false,
    ],
    [
        100,
        1,
        [
            [
                'Density',
                'Viscosity',
                'Temperature',
            ],
            [
                0.45700000000000002,
                3.5499999999999998,
                500,
            ],
            [
                0.52500000000000002,
                3.25,
                400,
            ],
            [
                0.61599999999999999,
                2.9300000000000002,
                300,
            ],
            [
                0.67500000000000004,
                2.75,
                250,
            ],
            [
                0.746,
                2.5699999999999998,
                200,
            ],
            [
                0.83499999999999996,
                2.3799999999999999,
                150,
            ],
            [
                0.94599999999999995,
                2.1699999999999999,
                100,
            ],
            [
                1.0900000000000001,
                1.95,
                50,
            ],
            [
                1.29,
                1.71,
                0,
            ],
        ],
        3,
        true,
    ],
    [
        '#N/A',
        0.69999999999999996,
        [
            [
                'Density',
                'Viscosity',
                'Temperature',
            ],
            [
                0.45700000000000002,
                3.5499999999999998,
                500,
            ],
            [
                0.52500000000000002,
                3.25,
                400,
            ],
            [
                0.61599999999999999,
                2.9300000000000002,
                300,
            ],
            [
                0.67500000000000004,
                2.75,
                250,
            ],
            [
                0.746,
                2.5699999999999998,
                200,
            ],
            [
                0.83499999999999996,
                2.3799999999999999,
                150,
            ],
            [
                0.94599999999999995,
                2.1699999999999999,
                100,
            ],
            [
                1.0900000000000001,
                1.95,
                50,
            ],
            [
                1.29,
                1.71,
                0,
            ],
        ],
        3,
        false,
    ],
    [
        '#N/A',
        0.10000000000000001,
        [
            [
                'Density',
                'Viscosity',
                'Temperature',
            ],
            [
                0.45700000000000002,
                3.5499999999999998,
                500,
            ],
            [
                0.52500000000000002,
                3.25,
                400,
            ],
            [
                0.61599999999999999,
                2.9300000000000002,
                300,
            ],
            [
                0.67500000000000004,
                2.75,
                250,
            ],
            [
                0.746,
                2.5699999999999998,
                200,
            ],
            [
                0.83499999999999996,
                2.3799999999999999,
                150,
            ],
            [
                0.94599999999999995,
                2.1699999999999999,
                100,
            ],
            [
                1.0900000000000001,
                1.95,
                50,
            ],
            [
                1.29,
                1.71,
                0,
            ],
        ],
        2,
        true,
    ],
    [
        1.71,
        2,
        [
            [
                'Density',
                'Viscosity',
                'Temperature',
            ],
            [
                0.45700000000000002,
                3.5499999999999998,
                500,
            ],
            [
                0.52500000000000002,
                3.25,
                400,
            ],
            [
                0.61599999999999999,
                2.9300000000000002,
                300,
            ],
            [
                0.67500000000000004,
                2.75,
                250,
            ],
            [
                0.746,
                2.5699999999999998,
                200,
            ],
            [
                0.83499999999999996,
                2.3799999999999999,
                150,
            ],
            [
                0.94599999999999995,
                2.1699999999999999,
                100,
            ],
            [
                1.0900000000000001,
                1.95,
                50,
            ],
            [
                1.29,
                1.71,
                0,
            ],
        ],
        2,
        true,
    ],
    [
        5,
        'x',
        [
            [
                'Selection column',
                'Value to retrieve',
            ],
            ['0', 1],
            ['0', 2],
            ['0', 3],
            ['0', 4],
            ['x', 5],
            ['x', 6],
            ['x', 7],
            ['x', 8],
            ['x', 9],
        ],
        2,
        false
    ],

    [
        10,
        '10y2',
        [
            ['5y-1', 2.0],
            // dropping this line creates inconsistenties with Microsoft Excel
            // Excel returns #N/A while we return 10
            ['10y1', 7.0],
            ['10y2', 10.0],
        ],
        2.0
    ]

];
