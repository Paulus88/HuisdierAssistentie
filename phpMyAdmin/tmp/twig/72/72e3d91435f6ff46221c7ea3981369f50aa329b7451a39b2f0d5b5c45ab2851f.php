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

/* display/export/options_format.twig */
class __TwigTemplate_d4bca2ad3685c3997396355959982d60e7753b4e38bcc7e1f303380fa0564404 extends \Twig\Template
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
        echo "<div class=\"exportoptions\" id=\"format_specific_opts\">
    <h3>";
        // line 2
        echo _gettext("Format-specific options:");
        echo "</h3>
    <p class=\"no_js_msg\" id=\"scroll_to_options_msg\">
        ";
        // line 4
        echo _gettext("Scroll down to fill in the options for the selected format and ignore the options for other formats.");
        // line 5
        echo "    </p>
    ";
        // line 6
        echo ($context["options"] ?? null);
        echo "
</div>

";
        // line 9
        if (($context["can_convert_kanji"] ?? null)) {
            // line 10
            echo "    ";
            // line 11
            echo "    <div class=\"exportoptions\" id=\"kanji_encoding\">
        <h3>";
            // line 12
            echo _gettext("Encoding Conversion:");
            echo "</h3>
        ";
            // line 13
            $this->loadTemplate("encoding/kanji_encoding_form.twig", "display/export/options_format.twig", 13)->display($context);
            // line 14
            echo "    </div>
";
        }
        // line 16
        echo "
<div class=\"exportoptions\" id=\"submit\">
    <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 18
        echo _gettext("Go");
        echo "\"";
        // line 21
        if ((($context["exec_time_limit"] ?? null) > 0)) {
            // line 22
            echo "            onclick=\"check_time_out(";
            echo twig_escape_filter($this->env, ($context["exec_time_limit"] ?? null), "html", null, true);
            echo ")\"";
        }
        // line 23
        echo ">
</div>
";
    }

    public function getTemplateName()
    {
        return "display/export/options_format.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  80 => 22,  78 => 21,  75 => 18,  71 => 16,  67 => 14,  65 => 13,  61 => 12,  58 => 11,  56 => 10,  54 => 9,  48 => 6,  45 => 5,  43 => 4,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display/export/options_format.twig", "/home/files/phpmyadmin/release/phpMyAdmin-5.0+snapshot/templates/display/export/options_format.twig");
    }
}
