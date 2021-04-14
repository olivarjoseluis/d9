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

/* themes/custom/abogados/templates/content/node--perfil.html.twig */
class __TwigTemplate_7cc262e965502756cd78fadb3cac46226c6191ed28136b179337ccabfcba46fa extends \Twig\Template
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
        echo "<section class=\"profile\">
\t<div class=\"background-profile\">
\t\t<picture>
\t\t\t";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
\t\t</picture>
\t</div>
\t<section class=\"profile-details\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-10 offset-md-1 text-center\">
\t\t\t\t\t<div class=\"profile-content p-md-3\">
\t\t\t\t\t\t<div class=\"picture-profile\">
\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_profile_image", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h4>";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<p class=\"profession\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_profession", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</p>
                        <hr>
\t\t\t\t\t\t";
        // line 21
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_enlace", [], "any", false, false, true, 21))) {
            // line 22
            echo "\t\t\t\t\t\t\t<p class=\"url-hv\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_enlace", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\" target=\"_blank\">CV</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</section>
\t<section class=\"about-me\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-10 offset-md-1 text-center\">
\t\t\t\t\t";
        // line 36
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_summary", [], "any", false, false, true, 36))) {
            // line 37
            echo "\t\t\t\t\t\t<h3 class=\"text-center\">Sobre mi</h3>
\t\t\t\t\t\t";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_summary", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38), 38, $this->source));
            echo "
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_additional_elements", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/content/node--perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 44,  106 => 40,  101 => 38,  98 => 37,  96 => 36,  84 => 26,  78 => 23,  75 => 22,  73 => 21,  68 => 19,  64 => 18,  57 => 14,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"profile\">
\t<div class=\"background-profile\">
\t\t<picture>
\t\t\t{{content.field_image}}
\t\t</picture>
\t</div>
\t<section class=\"profile-details\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-10 offset-md-1 text-center\">
\t\t\t\t\t<div class=\"profile-content p-md-3\">
\t\t\t\t\t\t<div class=\"picture-profile\">
\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t{{content.field_profile_image}}
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h4>{{node.label}}</h4>
\t\t\t\t\t\t<p class=\"profession\">{{node.field_profession.value}}</p>
                        <hr>
\t\t\t\t\t\t{% if node.field_enlace is not empty %}
\t\t\t\t\t\t\t<p class=\"url-hv\">
\t\t\t\t\t\t\t\t<a href=\"{{node.field_enlace.value}}\" target=\"_blank\">CV</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</section>
\t<section class=\"about-me\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-10 offset-md-1 text-center\">
\t\t\t\t\t{% if node.field_summary is not empty %}
\t\t\t\t\t\t<h3 class=\"text-center\">Sobre mi</h3>
\t\t\t\t\t\t{{node.field_summary.value|raw}}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t{{content.field_additional_elements}}
</section>
", "themes/custom/abogados/templates/content/node--perfil.html.twig", "/app/web/themes/custom/abogados/templates/content/node--perfil.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21);
        static $filters = array("escape" => 4, "raw" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
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
