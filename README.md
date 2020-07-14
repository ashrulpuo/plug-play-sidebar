# plug-play-sidebar
sidebar menu

# AppServiceProvider
public function boot()
{
    View::composer(
        'layouts.sidebar', 'App\Http\View\Composers\SidebarComposer'
    );

}
using laravel view composer https://laravel.com/docs/7.x/views#view-composers
