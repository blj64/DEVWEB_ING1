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

/* table/export/index.twig */
class __TwigTemplate_144f8c64cd08acadeea10772dfce5ececaf9fa04dd7c558f0a9aef2ed3e1ec5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "export.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo "  ";
echo _gettext("@SERVER@ will become the server name, @DATABASE@ will become the database name and @TABLE@ will become the table name.");
        $context["filename_hint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("export.twig", "table/export/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        if ((0 === twig_compare(($context["export_type"] ?? null), "raw"))) {
            // line 5
            echo "    ";
// l10n: A query that the user has written freely
echo _gettext("Exporting a raw query");
            // line 6
            echo "  ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Exporting rows from \"%s\" table"), ($context["table"] ?? null)), "html", null, true);
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "table/export/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 7,  64 => 6,  60 => 5,  57 => 4,  53 => 3,  48 => 1,  44 => 12,  42 => 11,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/export/index.twig", "/home/cytech/Cours/Web/Projets/DEVWEB_ING1/phpmyadmin/templates/table/export/index.twig");
    }
}
