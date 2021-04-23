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

/* __string_template__33a661f4e7be9288778da8e77fc738973d99fb9223813c26e8b0392f906342d5 */
class __TwigTemplate_5b5959c7c33bd2843d8bc9a30046fd1f340d08b7508e18f57bc7506463146805 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"col-md-4 col-12 p-2\">
\t<div class=\"card-news\">
\t\t<div class=\"img-new\">
\t\t\t<picture>
\t\t\t\t";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null), 5, $this->source), "html", null, true);
        echo "
\t\t\t</picture>
\t\t</div>
\t\t<div class=\"description-new\">
\t\t\t<p class=\"date-new\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 9, $this->source), "html", null, true);
        echo "</p>
\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null), 10, $this->source), "html", null, true);
        echo "\" target=\"_blank\" class=\"title-new\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 10, $this->source), "html", null, true);
        echo "</a>
\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null), 11, $this->source), "html", null, true);
        echo "\" target=\"_blank\" class=\"link-new\">Ver más</a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__33a661f4e7be9288778da8e77fc738973d99fb9223813c26e8b0392f906342d5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  56 => 10,  52 => 9,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"col-md-4 col-12 p-2\">
\t<div class=\"card-news\">
\t\t<div class=\"img-new\">
\t\t\t<picture>
\t\t\t\t{{ field_image }}
\t\t\t</picture>
\t\t</div>
\t\t<div class=\"description-new\">
\t\t\t<p class=\"date-new\">{{ created }}</p>
\t\t\t<a href=\"{{ view_node }}\" target=\"_blank\" class=\"title-new\">{{title}}</a>
\t\t\t<a href=\"{{ view_node }}\" target=\"_blank\" class=\"link-new\">Ver más</a>
\t\t</div>
\t</div>
</div>
", "__string_template__33a661f4e7be9288778da8e77fc738973d99fb9223813c26e8b0392f906342d5", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
