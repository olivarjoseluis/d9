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

/* themes/custom/abogados/templates/paragraph/paragraph--education.html.twig */
class __TwigTemplate_5d9ff3d9d0fbd26b59ec9f3c746ad016ebce9542a3ac8cc41f54733a3ef9a950 extends \Twig\Template
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
        echo "<section class=\"education\">
\t<div class=\"card-education\">
\t\t<div class=\"row no-gutters\">
\t\t\t<div class=\"col-12 col-md-5\">
\t\t\t\t<div class=\"education-level p-3 text-center\">
\t\t\t\t\t<p class=\"education-title\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_education_level", [], "any", false, false, true, 6), "entity", [], "any", false, false, true, 6), "name", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t<p class=\"education-university\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_title", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-7\">
\t\t\t\t<div class=\"education-details p-3\">
\t\t\t\t\t<p><i class=\"fas fa-map-marker-alt\"></i> ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_schedule", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><i class=\"fas fa-file\"></i> ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_summary_short", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><i class=\"fas fa-users\"></i> ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_url", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t";
        // line 15
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_diploma", [], "any", false, false, true, 15))) {
            // line 16
            echo "\t\t\t\t\t\t<p class=\"url-diploma\">
\t\t\t\t\t\t\t<a href=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_diploma", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\" target=\"_blank\">Ver Diploma</a>
\t\t\t\t\t\t</p>

\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/paragraph/paragraph--education.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  75 => 17,  72 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"education\">
\t<div class=\"card-education\">
\t\t<div class=\"row no-gutters\">
\t\t\t<div class=\"col-12 col-md-5\">
\t\t\t\t<div class=\"education-level p-3 text-center\">
\t\t\t\t\t<p class=\"education-title\">{{paragraph.field_education_level.entity.name.value}}</p>
\t\t\t\t\t<p class=\"education-university\">{{paragraph.field_title.value}}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-7\">
\t\t\t\t<div class=\"education-details p-3\">
\t\t\t\t\t<p><i class=\"fas fa-map-marker-alt\"></i> {{paragraph.field_schedule.value}}</p>
\t\t\t\t\t<p><i class=\"fas fa-file\"></i> {{paragraph.field_summary_short.value}}</p>
\t\t\t\t\t<p><i class=\"fas fa-users\"></i> {{paragraph.\tfield_url.value}}</p>
\t\t\t\t\t{% if paragraph.field_diploma is not empty %}
\t\t\t\t\t\t<p class=\"url-diploma\">
\t\t\t\t\t\t\t<a href=\"{{paragraph.field_diploma.value}}\" target=\"_blank\">Ver Diploma</a>
\t\t\t\t\t\t</p>

\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "themes/custom/abogados/templates/paragraph/paragraph--education.html.twig", "/app/web/themes/custom/abogados/templates/paragraph/paragraph--education.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
