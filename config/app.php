'providers' => [
        ....
        Collective\Html\HtmlServiceProvider::class,
        Laracasts\Flash\FlashServiceProvider::class,
        Prettus\Repository\Providers\RepositoryServiceProvider::class,
        \InfyOm\Generator\InfyOmGeneratorServiceProvider::class,
        \InfyOm\AdminLTETemplates\AdminLTETemplatesServiceProvider::class,
],
'aliases' => [
        ....
        'Form'    => Collective\Html\FormFacade::class,
        'Html'    => Collective\Html\HtmlFacade::class,
        'Flash'   => Laracasts\Flash\Flash::class,
]
