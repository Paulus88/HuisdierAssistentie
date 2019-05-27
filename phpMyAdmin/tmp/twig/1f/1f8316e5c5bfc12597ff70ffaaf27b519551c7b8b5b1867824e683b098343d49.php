<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* test/gettext/pgettext.twig */
class __TwigTemplate_cb4d966230cfdf048bb79c9c4770faf13774e0513bf5c7a9b2037e5f122022fd extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo _pgettext(        "Text context", "Text");
    }

    public function getTemplateName()
    {
        return "test/gettext/pgettext.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test/gettext/pgettext.twig", "/home/files/phpmyadmin/release/phpMyAdmin-5.0+snapshot/templates/test/gettext/pgettext.twig");
    }
}
