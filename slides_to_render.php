<?php
$slides_to_render = [
    // slide id => slide layers. Slides will be rendered in order first to last. Slide 1 will be active by default
    1 => [
        'data-slide-title' => 'The Future of Digital Transformation in 2025',   // human readable title
        'background' => [
            'data-filename' => 'digital-transformation-bg.jpg', // filename will specify image file name. The full path will be supplied by backend
            'data-alt' => 'Digital transformation background pattern',
            'data-animation-in' => 'animate__slideInRight',
            'data-animation-out' => 'animate__slideOutRight',
            'data-animation-duration' => '1200ms',
            'data-animation-delay' => '200ms',
        ],
        'images' => [
            [
                'data-filename' => 'sustainable-plants.png',
                'data-alt' => 'Indoor plants and sustainable products',
                'data-position' => 'top-right',  // layer apart from bg can be positioned
                // offsets to make minor position changes
                'data-offset-x' => '42%',
                'data-offset-y' => '23%',
                // width and height only apply to img layer
                'data-width' => '450px',
                'data-height' => '450px',
                'data-animation-in' => 'animate__fadeInUp',
                'data-animation-out' => 'animate__fadeOutDown',
                'data-animation-duration' => '1000ms',
                'data-animation-delay' => '400ms'
            ],
            [
                'data-filename' => 'digital-transformation-hero.png',
                'data-alt' => 'Digital transformation concept with AI and automation',
                'data-position' => 'center-right',
                'data-offset-x' => '-5%',
                'data-offset-y' => '-10%',
                'data-width' => '350px',
                'data-height' => '350px',
                'data-animation-in' => 'animate__fadeInUp',
                'data-animation-out' => 'animate__slideOutRight',
                'data-animation-duration' => '1200ms',
                'data-animation-delay' => '300ms'
            ],
        ],
        'text' => [
            [
                'data-content' => 'The Future of Digital Transformation',
                'data-position' => 'center-left',
                'data-offset-x' => '5%',
                'data-offset-y' => '-65%',
                'data-animation-in' => 'animate__bounceIn',
                'data-animation-out' => 'animate__slideOutLeft',
                'data-animation-duration' => '800ms',
                'data-animation-delay' => '600ms'
            ],
            [
                'data-content' => 'Exploring how AI and automation are reshaping business landscapes across industries in 2025.',
                'data-position' => 'center-left',
                'data-offset-x' => '5%',
                'data-offset-y' => '45%',
                'data-animation-in' => 'animate__slideInLeft',
                'data-animation-out' => 'animate__slideOutLeft',
                'data-animation-duration' => '800ms',
                'data-animation-delay' => '900ms'
            ]
        ]
    ],
    2 => [
        'data-slide-title' => 'Sustainable Living: Small Changes, Big Impact',
        'background' => [
            'data-filename' => 'sustainable-living-bg.jpg',
            'data-alt' => 'Green living and eco-friendly lifestyle background',
            'data-animation-in' => 'animate__fadeIn',
            'data-animation-out' => 'animate__fadeOut',
            'data-animation-duration' => '1200ms',
            'data-animation-delay' => '200ms',
        ],
        'images' => [
            [
                'data-filename' => 'sustainable-plants.png',
                'data-alt' => 'Indoor plants and sustainable products',
                'data-position' => 'top-left',
                'data-offset-x' => '-10%',
                'data-offset-y' => '15%',
                'data-width' => '450px',
                'data-height' => '450px',
                'data-animation-in' => 'animate__fadeInUp',
                'data-animation-out' => 'animate__fadeOutDown',
                'data-animation-duration' => '1000ms',
                'data-animation-delay' => '400ms'
            ]
        ],
        'text' => [
            [
                'data-content' => 'Sustainable Living',
                'data-position' => 'center-right',
                'data-offset-x' => '-130%',
                'data-offset-y' => '-5%',
                'data-animation-in' => 'animate__bounceInUp',
                'data-animation-out' => 'animate__bounceOutDown',
                'data-animation-duration' => '1000ms',
                'data-animation-delay' => '700ms'
            ],
        ]
    ],
    3 => [
        'data-slide-title' => 'Remote Work Productivity Tips',
        'background' => [
            'data-filename' => 'remote-work-bg.jpg',
            'data-alt' => 'Modern office workspace background',
            'data-animation-in' => 'animate__slideInRight',
            'data-animation-out' => 'animate__slideOutRight',
            'data-animation-duration' => '1200ms',
            'data-animation-delay' => '200ms',
        ],
        'images' => [
            [
                'data-filename' => 'laptop-workspace.png',
                'data-alt' => 'Laptop on modern desk setup',
                'data-position' => 'top-right',
                'data-offset-x' => '5%',
                'data-offset-y' => '10%',
                'data-width' => '600px',
                'data-height' => '400px',
                'data-animation-in' => 'animate__zoomIn',
                'data-animation-out' => 'animate__zoomOut',
                'data-animation-duration' => '900ms',
                'data-animation-delay' => '200ms'
            ]
        ],
        'text' => [
            [
                'data-content' => 'Maximize Your',
                'data-position' => 'center',
                'data-offset-x' => '10px',
                'data-offset-y' => '-99%',
                'data-animation-in' => 'animate__rotateInDownLeft',
                'data-animation-out' => 'animate__rotateOutUpLeft',
                'data-animation-duration' => '800ms',
                'data-animation-delay' => '500ms'
            ],
            [
                'data-content' => 'PRODUCTIVITY',
                'data-position' => 'center',
                'data-offset-x' => '10px',
                'data-offset-y' => '-5%',
                'data-animation-in' => 'animate__bounceIn',
                'data-animation-out' => 'animate__bounceOut',
                'data-animation-duration' => '1200ms',
                'data-animation-delay' => '800ms'
            ],
            [
                'data-content' => 'While Working Remotely',
                'data-position' => 'center',
                'data-offset-x' => '10px',
                'data-offset-y' => '75%',
                'data-animation-in' => 'animate__fadeInLeft',
                'data-animation-out' => 'animate__fadeOutLeft',
                'data-animation-duration' => '700ms',
                'data-animation-delay' => '1100ms'
            ]
        ]
    ],
    4 => [
        'data-slide-title' => 'Mediterranean Diet Health Benefits',
        'background' => [
            'data-filename' => 'mediterranean-bg.jpg',
            'data-alt' => 'Mediterranean coastal scene background',
            'data-animation-in' => 'animate__fadeIn',
            'data-animation-out' => 'animate__fadeOut',
            'data-animation-duration' => '1200ms',
            'data-animation-delay' => '200ms',
        ],
        'images' => [
            [
                'data-filename' => 'mediterranean-food-plate.png',
                'data-alt' => 'Healthy Mediterranean meal on plate',
                'data-position' => 'bottom-right',
                'data-offset-x' => '-5%',
                'data-offset-y' => '10%',
                'data-width' => '500px',
                'data-height' => '500px',
                'data-animation-in' => 'animate__rotateIn',
                'data-animation-out' => 'animate__rotateOut',
                'data-animation-duration' => '1000ms',
                'data-animation-delay' => '400ms'
            ]
        ],
        'text' => [
            [
                'data-content' => 'Mediterranean Diet',
                'data-position' => 'top-left',
                'data-offset-x' => '12%',
                'data-offset-y' => '25%',
                'data-animation-in' => 'animate__lightSpeedInRight',
                'data-animation-out' => 'animate__lightSpeedOutRight',
                'data-animation-duration' => '900ms',
                'data-animation-delay' => '700ms'
            ],
        ]
    ],
    5 => [
        'data-slide-title' => 'Cryptocurrency Market Trends',
        'background' => [
            'data-filename' => 'crypto-dark-bg.jpg',
            'data-alt' => 'Dark technology background with circuit patterns',
            'data-animation-in' => 'animate__slideInRight',
            'data-animation-out' => 'animate__slideOutRight',
            'data-animation-duration' => '1200ms',
            'data-animation-delay' => '200ms',
        ],
        'images' => [
            [
                'data-filename' => 'bitcoin-chart.png',
                'data-alt' => 'Bitcoin trading chart visualization',
                'data-position' => 'center-right',
                'data-offset-x' => '-3%',
                'data-offset-y' => '0%',
                'data-width' => '700px',
                'data-height' => '450px',
                'data-animation-in' => 'animate__slideInRight',
                'data-animation-out' => 'animate__slideOutRight',
                'data-animation-duration' => '900ms',
                'data-animation-delay' => '300ms'
            ]
        ],
        'text' => [
            [
                'data-content' => 'Essential insights for investors and enthusiasts',
                'data-position' => 'center-left',
                'data-offset-x' => '6%',
                'data-offset-y' => '25%',
                'data-animation-in' => 'animate__fadeInUp',
                'data-animation-out' => 'animate__fadeOutUp',
                'data-animation-duration' => '600ms',
                'data-animation-delay' => '1200ms'
            ]
        ]
    ],
    6 => [
        'data-slide-title' => 'Mindfulness for Professionals',
        'background' => [
            'data-filename' => 'zen-gradient-bg.jpg',
            'data-alt' => 'Peaceful gradient background with soft colors',
            'data-animation-in' => 'animate__fadeIn',
            'data-animation-out' => 'animate__fadeOut',
            'data-animation-duration' => '1200ms',
            'data-animation-delay' => '200ms',
        ],
        'images' => [
            [
                'data-filename' => 'meditation-stones.png',
                'data-alt' => 'Balanced meditation stones in zen arrangement',
                'data-position' => 'bottom-left',
                'data-offset-x' => '8%',
                'data-offset-y' => '-5%',
                'data-width' => '400px',
                'data-height' => '300px',
                'data-animation-in' => 'animate__fadeInLeft',
                'data-animation-out' => 'animate__fadeOutLeft',
                'data-animation-duration' => '1000ms',
                'data-animation-delay' => '400ms'
            ]
        ],
        'text' => [
            [
                'data-content' => 'Mindfulness meditation techniques for busy professionals. Reduce stress in just 10 minutes daily.',
                'data-position' => 'center',
                'data-offset-x' => '22%',
                'data-offset-y' => '60px',
                'data-animation-in' => 'animate__fadeInLeft',
                'data-animation-out' => 'animate__fadeOutLeft',
                'data-animation-duration' => '800ms',
                'data-animation-delay' => '1300ms'
            ]
        ]
    ]
];

return $slides_to_render;
