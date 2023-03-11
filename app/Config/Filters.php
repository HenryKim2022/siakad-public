<?php

namespace Config;

use App\Filters\auth_filter;
use App\Filters\admin_filter;
use App\Filters\moderator_filter;
use App\Filters\teacher_filter;
use App\Filters\student_filter;
use App\Filters\guest_filter;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'              => CSRF::class,
        'toolbar'           => DebugToolbar::class,
        'honeypot'          => Honeypot::class,
        'invalidchars'      => InvalidChars::class,
        'secureheaders'     => SecureHeaders::class,
        'authfilter'        => auth_filter::class,
        'adminfilter'       => admin_filter::class,
        'moderatorfilter'   => moderator_filter::class,
        'teacherfilter'     => teacher_filter::class,
        'studentfilter'     => student_filter::class,
        'guestfilter'       => guest_filter::class,
    ];


    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            'authfilter' => [
                'except' => [
                    'news', 'news/*',
                    'support', 'support/*',
                    'contact', 'contact/*',
                    'web', 'web/*',
                    'auth', 'auth/*',
                    'help', 'help/*',
                    'test', 'test/*',
                    '/',
                ]
            ],
            'adminfilter' => [
                'except' => [
                    'news', 'news/*',
                    'support', 'support/*',
                    'contact', 'contact/*',
                    'web', 'web/*',
                    'auth', 'auth/*',
                    'auth/signup', 'auth/signup/*',
                    'help', 'help/*',
                    'test', 'test/*',
                    '/',
                ]
            ],
            'moderatorfilter' => [
                'except' => [
                    'news', 'news/*',
                    'support', 'support/*',
                    'contact', 'contact/*',
                    'web', 'web/*',
                    'auth', 'auth/*',
                    'auth/signup', 'auth/signup/*',
                    'help', 'help/*',
                    'test', 'test/*',
                    '/',
                ]
            ],
            'teacherfilter' => [
                'except' => [
                    'news', 'news/*',
                    'support', 'support/*',
                    'contact', 'contact/*',
                    'web', 'web/*',
                    'auth', 'auth/*',
                    'auth/signup', 'auth/signup/*',
                    'help', 'help/*',
                    'test', 'test/*',
                    '/',
                ]
            ],
            'studentfilter' => [
                'except' => [
                    'news', 'news/*',
                    'support', 'support/*',
                    'contact', 'contact/*',
                    'web', 'web/*',
                    'auth', 'auth/*',
                    'auth/signup', 'auth/signup/*',
                    'help', 'help/*',
                    'test', 'test/*',
                    '/',
                ]
            ],
            'guestfilter' => [
                'except' => [
                    'news', 'news/*',
                    'support', 'support/*',
                    'contact', 'contact/*',
                    'web', 'web/*',
                    'auth', 'auth/*',
                    'auth/signup', 'auth/signup/*',
                    'help', 'help/*',
                    'test', 'test/*',
                    '/',
                ]
            ],

            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'authfilter' => [
                'except' => [
                    'news', 'news/*',
                    'support', 'support/*',
                    'contact', 'contact/*',
                    'web', 'web/*',
                    'help', 'help/*',
                    '/',
                ]
            ],

            'adminfilter' => [
                'except' => [
                    'home', 'home/*',
                    'news', 'news/*',
                    'help', 'help/*',
                    'myprofile', 'myprofile/*',
                    'admin/m11', 'admin/m11/*',
                    'admin/m12', 'admin/m12/*',
                    'admin/m21', 'admin/m21/*',
                    'admin/m22', 'admin/m22/*',
                    'admin/moderators-data', 'admin/moderators-data/*',
                    'admin/view/moderators-data', 'admin/view/moderators-data/*',
                    'admin/teachers-data', 'admin/teachers-data/*',
                    'admin/students-data', 'admin/students-data/*',
                    'admin/students-data/details', 'admin/students-data/details/*',
                    'admin/students-data/edit', 'admin/students-data/edit/*',
                    'admin/students-data/delete', 'admin/students-data/delete/*',
                    'admin/view/students-data', 'admin/view/students-data/*',
                    'admin/guests-data', 'admin/guests-data/*',
                    'admin/view/guests-data', 'admin/view/guests-data/*',
                ]
            ],
            'moderatorfilter' => [
                'except' => [
                    'home', 'home/*',
                    'news', 'news/*',
                    'help', 'help/*',
                    'myprofile', 'myprofile/*',
                    'moderator/m11', 'moderator/m11/*',
                    'moderator/m12', 'moderator/m12/*',
                    'moderator/m21', 'moderator/m21/*',
                    'moderator/m22', 'moderator/m22/*',
                    'moderator/view/moderators-data', 'moderator/view/moderators-data/*',
                    'moderator/teachers-data', 'moderator/teachers-data/*',
                    'moderator/view/teachers-data', 'moderator/view/teachers-data/*',
                    'moderator/students-data', 'moderator/students-data/*',
                    'moderator/view/students-data', 'moderator/view/students-data/*',
                    'moderator/guests-data', 'moderator/guests-data/*',
                    'moderator/view/guests-data', 'moderator/view/guests-data/*',
                ]
            ],
            'teacherfilter' => [
                'except' => [
                    'home', 'home/*',
                    'news', 'news/*',
                    'help', 'help/*',
                    'myprofile', 'myprofile/*',
                    'teacher/m11', 'teacher/m11/*',
                    'teacher/m12', 'teacher/m12/*',
                    'teacher/m21', 'teacher/m21/*',
                    'teacher/m22', 'teacher/m22/*',
                    'teacher/view/moderators-data', 'teacher/view/moderators-data/*',
                    'teacher/view/teachers-data', 'teacher/view/teachers-data/*',
                    'teacher/students-data', 'teacher/students-data/*',
                    'teacher/view/students-data', 'teacher/view/students-data/*',
                    'teacher/guests-data', 'teacher/guests-data/*',
                    'teacher/view/guests-data', 'teacher/view/guests-data/*',
                ]
            ],
            'studentfilter' => [
                'except' => [
                    'home', 'home/*',
                    'news', 'news/*',
                    'help', 'help/*',
                    'myprofile', 'myprofile/*',
                    'student/m11', 'student/m11/*',
                    'student/m12', 'student/m12/*',
                    'student/m21', 'student/m21/*',
                    'student/m22', 'student/m22/*',
                    'student/view/teachers-data', 'student/view/teachers-data/*',
                    'student/view/students-data', 'student/view/students-data/*',
                    'student/view/guests-data', 'student/view/guests-data/*',

                ]
            ],
            'guestfilter' => [
                'except' => [
                    'home', 'home/*',
                    'news', 'news/*',
                    'help', 'help/*',
                    'myprofile', 'myprofile/*',
                    'guest/m11', 'guest/m11/*',
                    'guest/m12', 'guest/m12/*',
                    'guest/m21', 'guest/m21/*',
                    'guest/m22', 'guest/m22/*',
                    'teacher/view/teachers-data', 'teacher/view/teachers-data/*',
                    'teacher/view/students-data', 'teacher/view/students-data/*',
                    'teacher/view/guests-data', 'teacher/view/guests-data/*',
                ]
            ],

            // 'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don’t expect could bypass the filter.
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
