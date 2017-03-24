<?php
namespace Craft;

class PrintrPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Printr');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Clear';
    }

    public function getDeveloperUrl()
    {
        return 'http://clearmpls.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.printr.twigextensions.PrintrTwigExtension');

        return new PrintrTwigExtension();
    }
}
