<?php

namespace App\Http\View\Composers;
use Illuminate\View\View;

class SidebarComposer
{
    protected $menus;

    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->menus = collect();

        $this->registerMenu();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // $this->checkActiveMenu();
        $view->with('menus', $this->menus);
    }

    private function registerMenu()
    {   
        $this->menus->push(collect([
            'key' => 'dashboard',
            'url' => route('home'),
            'icon' => 'nav-icon fas fa-tachometer-alt',
            'label' => 'Dashboard',
            'visible' => true,
            
        ]));
        $this->menus->push(collect([
            'key' => 'ahli_keluarga',
            'url' => route('family.index'),
            'icon' => 'nav-icon fas fa fa-users',
            'label' => 'Ahli keluarga',
            'visible' => true,
            'us'

        ]));
        $this->menus->push(collect([
            'key' => 'salasilah',
            'url' => route('family.index'),
            'icon' => 'nav-icon fas fa fa-sitemap',
            'label' => 'Salasilah',
            'visible' => true,

        ]));
        $this->menus->push(collect([
            'key' => 'profile',
            'url' => route('profile.index'),
            'icon' => 'fa fa-lg fa fa-cog',
            'label' => 'Profil',
            'visible' => true,
            'order' => 'setting'
        ]));

    }
}

?>