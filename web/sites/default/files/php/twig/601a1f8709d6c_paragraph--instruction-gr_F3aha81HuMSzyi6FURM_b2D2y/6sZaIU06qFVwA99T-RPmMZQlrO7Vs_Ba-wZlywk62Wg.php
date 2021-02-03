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

/* themes/custom/abogados/templates/paragraph/paragraph--instruction-groups.html.twig */
class __TwigTemplate_e0725d0a3e325912d6b9713c6755d6692d7f5efd9dd1daac33513df6a0ddff33 extends \Twig\Template
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
        echo "<section class=\"instruction-groups\">
\t<header class=\"instruction-groups-header\">
\t\t<h2>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_title", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</h2>
\t\t";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_summary", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4), 4, $this->source));
        echo "
\t</header>
\t<div class=\"instruction-groups-content\">
\t\t<div class=\"row\">
\t\t\t";
        // line 8
        $context["count"] = 1;
        // line 9
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_instructions", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"instruction-card\">
\t\t\t\t\t\t<div class=\"count-primary\">
\t\t\t\t\t\t\t<h2>";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 13, $this->source), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t<span class=\"count-mobile\">";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 16, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 17), "field_title", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<p>";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 18), "field_summary_short", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<a href=\"";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 19), "field_link", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 19), "field_link", [], "any", false, false, true, 19), "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\" target=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 19), "field_link", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), "url", [], "any", false, false, true, 19), "external", [], "any", false, false, true, 19)) ? ("_blank") : ("_self")));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 19), "field_link", [], "any", false, false, true, 19), "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 22
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 23
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/paragraph/paragraph--instruction-groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  98 => 23,  96 => 22,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  66 => 13,  61 => 10,  56 => 9,  54 => 8,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"instruction-groups\">
\t<header class=\"instruction-groups-header\">
\t\t<h2>{{paragraph.field_title.value}}</h2>
\t\t{{paragraph.field_summary.value|raw}}
\t</header>
\t<div class=\"instruction-groups-content\">
\t\t<div class=\"row\">
\t\t\t{% set count = 1 %}
\t\t\t{% for item in paragraph.field_instructions %}
\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"instruction-card\">
\t\t\t\t\t\t<div class=\"count-primary\">
\t\t\t\t\t\t\t<h2>{{count}}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t<span class=\"count-mobile\">{{count}}</span>
\t\t\t\t\t\t\t{{item.entity.field_title.value}}</h3>
\t\t\t\t\t\t<p>{{item.entity.field_summary_short.value}}</p>
\t\t\t\t\t\t<a href=\"{{item.entity.field_link.0.url}}\" title=\"{{item.entity.field_link.title}}\" target=\"{{ item.entity.field_link.0.url.external ? '_blank' : '_self' }}\">{{item.entity.field_link.title}}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% set count = count + 1 %}
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</section>
", "themes/custom/abogados/templates/paragraph/paragraph--instruction-groups.html.twig", "/app/web/themes/custom/abogados/templates/paragraph/paragraph--instruction-groups.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "for" => 9);
        static $filters = array("escape" => 3, "raw" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
