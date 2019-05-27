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

/* test/gettext/notes.twig */
class __TwigTemplate_d63377465fb31bb97ec37347d74f3d2c0fbf4e1b7253e1c799a991f179446765 extends \Twig\Template
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
        // l10n: Notes
        echo _gettext("Text");
    }

    public function getTemplateName()
    {
        return "test/gettext/notes.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test/gettext/notes.twig", "/home/files/phpmyadmin/release/phpMyAdmin-5.0+snapshot/templates/test/gettext/notes.twig");
    }
}
