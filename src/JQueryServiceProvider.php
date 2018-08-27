<?php


namespace Mouf\Javascript\JQuery;

use Mouf\Html\Utils\WebLibraryManager\WebLibrary;
use Psr\Container\ContainerInterface;
use TheCodingMachine\Funky\Annotations\Factory;
use TheCodingMachine\Funky\Annotations\Tag;
use TheCodingMachine\Funky\ServiceProvider;

class JQueryServiceProvider extends ServiceProvider
{
    /**
     * @Factory(name="jQueryWebLibrary", tags={@Tag(name="webLibraries", priority=0.0)})
     */
    public static function createRootUrlWebLibrary(ContainerInterface $container): WebLibrary
    {
        return new WebLibrary(['vendor/mouf/javascript.jquery.jquery/jquery-1.11.0.min.js']);
    }
}
