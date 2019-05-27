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

/* login/twofactor/simple.twig */
class __TwigTemplate_94f04d49639546fbf54ce4b9cf98e3058d26f1bf4494ce1d20a8b3487cf4ba99 extends \Twig\Template
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
        echo "<input type=\"hidden\" name=\"2fa_confirm\" value=\"1\">
";
    }

    public function getTemplateName()
    {
        return "login/twofactor/simple.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/twofactor/simple.twig", "/home/files/phpmyadmin/release/phpMyAdmin-5.0+snapshot/templates/login/twofactor/simple.twig");
    }
}
