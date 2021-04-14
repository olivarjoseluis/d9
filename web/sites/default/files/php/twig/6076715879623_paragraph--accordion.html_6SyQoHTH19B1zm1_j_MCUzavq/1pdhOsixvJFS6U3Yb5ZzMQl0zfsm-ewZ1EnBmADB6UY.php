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

/* themes/custom/abogados/templates/paragraph/paragraph--accordion.html.twig */
class __TwigTemplate_7e533deebf9153f7657e928ad639ec1223e898483594191c8d62d3f850690982 extends \Twig\Template
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
        echo "<div id=\"accordion\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-md-10 offset-md-1\">
\t\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_accordion_section", [], "any", false, false, true, 5));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "\t\t\t\t\t<div class=\"accordion-card ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 6)) ? ("show") : ("")));
            echo "\">
\t\t\t\t\t\t<div class=\"accordion-card-header p-3\" id=\"heading-";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 7), "field_title", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source), ["á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u", " " => "-"])), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-target=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 7), "field_title", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source), ["á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u", " " => "-"])), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 7), "field_title", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source), ["á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u", " " => "-"])), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<p class=\"accordion-title\">";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 8), "field_title", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 11), "field_title", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), ["á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u", " " => "-"])), "html", null, true);
            echo "\" class=\"collapse ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 11)) ? ("show") : ("")));
            echo "\" aria-labelledby=\"heading-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 11), "field_title", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), ["á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u", " " => "-"])), "html", null, true);
            echo "\" data-parent=\"#accordion\">
\t\t\t\t\t\t<div class=\"accordion-card-body p-4\">
\t\t\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 13), "field_blocks", [], "any", false, false, true, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 14
                echo "\t\t\t\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("paragraph", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["element"], "target_id", [], "any", false, false, true, 14), 14, $this->source)), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/paragraph/paragraph--accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 19,  103 => 16,  94 => 14,  90 => 13,  81 => 11,  75 => 8,  67 => 7,  62 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"accordion\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-md-10 offset-md-1\">
\t\t\t\t{% for item in  paragraph.field_accordion_section %}
\t\t\t\t\t<div class=\"accordion-card {{ loop.first ? 'show'}}\">
\t\t\t\t\t\t<div class=\"accordion-card-header p-3\" id=\"heading-{{ item.entity.field_title.value|replace({'á':'a','é':'e','í':'i','ó':'o','ú':'u',' ':'-'})|lower }}\" data-toggle=\"collapse\" data-target=\"#{{ item.entity.field_title.value|replace({'á':'a','é':'e','í':'i','ó':'o','ú':'u',' ':'-'})|lower }}\" aria-expanded=\"true\" aria-controls=\"{{ item.entity.field_title.value|replace({'á':'a','é':'e','í':'i','ó':'o','ú':'u',' ':'-'})|lower }}\">
\t\t\t\t\t\t\t<p class=\"accordion-title\">{{ item.entity.field_title.value}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"{{ item.entity.field_title.value|replace({'á':'a','é':'e','í':'i','ó':'o','ú':'u',' ':'-'})|lower }}\" class=\"collapse {{ loop.first ? 'show'}}\" aria-labelledby=\"heading-{{ item.entity.field_title.value|replace({'á':'a','é':'e','í':'i','ó':'o','ú':'u',' ':'-'})|lower }}\" data-parent=\"#accordion\">
\t\t\t\t\t\t<div class=\"accordion-card-body p-4\">
\t\t\t\t\t\t\t{% for element in item.entity.field_blocks %}
\t\t\t\t\t\t\t\t{{ drupal_entity('paragraph', element.target_id) }}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "themes/custom/abogados/templates/paragraph/paragraph--accordion.html.twig", "/app/web/themes/custom/abogados/templates/paragraph/paragraph--accordion.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5);
        static $filters = array("escape" => 7, "lower" => 7, "replace" => 7);
        static $functions = array("drupal_entity" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'lower', 'replace'],
                ['drupal_entity']
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
