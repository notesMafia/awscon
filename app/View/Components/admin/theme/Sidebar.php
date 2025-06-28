<?php

namespace App\View\Components\admin\theme;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Sidebar extends Component
{
    protected string $role;
    public array $sidebarMenu = [];
    public function __construct(Request $request)
    {
        $this->role = Auth::user()->userType();
        $this->sidebarMenu  = $this->generateSidebarMenu();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.theme.sidebar');
    }

    private function generateSidebarMenu(): array
    {
        return [
            'Dashboard'=>[
                'name'=>"Dashboard",
                'link'=>route('admin::dashboard.main'),
                'icon'=>'o-home',
                'subMenu'=>[]
            ],
            'Calculator'=>[
                'name'=>"Calculator",
                'link'=>route('admin::calculator:main'),
                'icon'=>'bi.calculator',
                'subMenu'=>[]
            ],
            'Services'=>[
                'name'=>"Services",
                'link'=>route('admin::services:list'),
                'icon'=>'o-briefcase',
                'subMenu'=>[]
            ],
            'Contact'=>[
                'name'=>"Contact",
                'link'=>route('admin::contact:list'),
                'icon'=>'o-envelope',
                'subMenu'=>[]
            ],
            'Blog'=>[
                'name'=>"Blog",
                'icon'=>'o-newspaper',
                'subMenu'=>[
                    'Posts'=>[
                        'name'=>"Posts",
                        'link'=>route('admin::blog.post.list'),
                        'subMenu'=>[]
                    ],
                    'Category'=>[
                        'name'=>"Category",
                        'link'=>route('admin::blog.category.list'),
                        'subMenu'=>[]
                    ],
                    'Tags'=>[
                        'name'=>"Tags",
                        'link'=>route('admin::blog.tags'),
                        'subMenu'=>[]
                    ],
                ]
            ],
            'Users'=>[
                'name'=>"Users",
                'icon'=>'o-users',
                'subMenu'=>[
                    'Website'=>[
                        'name'=>"Website",
                        'link'=>route('admin::users.website'),
                        'subMenu'=>[]
                    ],
                    'Team'=>[
                        'name'=>"Team",
                        'link'=>route('admin::users.team'),
                        'subMenu'=>[]
                    ],
                ]
            ],
            'Theme'=>[
                'name'=>"Theme",
                'icon'=>'o-swatch',
                'subMenu'=>[
                    'HomePage'=>[
                        'name'=>"Home",
                        'link'=>route('admin::themes:home-page'),
                        'subMenu'=>[]
                    ],
                    'AboutPage'=>[
                        'name'=>"About Us",
                        'link'=>route('admin::themes:about-page'),
                        'subMenu'=>[]
                    ],
                    'ContactPage'=>[
                        'name'=>"Contact Us",
                        'link'=>route('admin::themes:contact-page'),
                        'subMenu'=>[]
                    ],
                    'Pages'=>[
                        'name'=>"Other Pages",
                        'link'=>route('admin::themes:pages.list'),
                        'subMenu'=>[]
                    ],
                ]
            ],
            'Settings'=>[
                'name'=>"Settings",
                'icon'=>'m-cog-6-tooth',
                'subMenu'=>[
                    'General'=>[
                        'name'=>"General",
                        'link'=>route('admin::settings.general'),
                        'subMenu'=>[]
                    ],
                    'Mail'=>[
                        'name'=>"Mail",
                        'link'=>route('admin::settings.mail'),
                        'subMenu'=>[]
                    ],
                    'Website'=>[
                        'name'=>"Platform",
                        'link'=>route('admin::settings.website'),
                        'subMenu'=>[]
                    ],
                    'Server'=>[
                        'name'=>"Server",
                        'link'=>route('admin::settings.server-logs'),
                        'subMenu'=>[
                            'Logs'=>[
                                'name'=>"Logs",
                                'link'=>route('admin::settings.server-logs'),
                                'subMenu'=>[],
                                'no-navigate'=>true,
                            ],
                            'Info'=>[
                                'name'=>"Info",
                                'link'=>route('admin::settings.server-info'),
                                'subMenu'=>[]
                            ],
                        ]
                    ],
                ]
            ]
        ];
    }
}
