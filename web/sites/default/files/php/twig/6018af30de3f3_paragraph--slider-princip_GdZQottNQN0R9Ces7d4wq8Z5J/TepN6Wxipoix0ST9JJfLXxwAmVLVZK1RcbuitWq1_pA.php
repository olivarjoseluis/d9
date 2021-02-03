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

/* themes/custom/abogados/templates/paragraph/paragraph--slider-principal.html.twig */
class __TwigTemplate_9d850340ed0187043f750366411f6ebd1c3b5a9a4cfbc2b6df06f9a2e6721936 extends \Twig\Template
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
        echo "<section id=\"primary-slider\">
\t<div class=\"primary-slider owl-carousel owl-theme\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_primary_slider", [], "any", false, false, true, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "\t\t\t";
            $context["opacidad"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 4), "field_opacity", [], "any", false, false, true, 4))) ? ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 4), "field_opacity", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4) / 100)) : (0));
            // line 5
            echo "\t\t\t<div class=\"item\">
\t\t\t\t<div class=\"layer-opacity\" style=\"background-color: rgba(21, 44, 64, ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["opacidad"] ?? null), 6, $this->source), "html", null, true);
            echo ");\"></div>
\t\t\t\t<div class=\"content-text-slider-primary\">
\t\t\t\t\t<div class=\"text-slider ";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 8), "field_orientation", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\">
\t\t\t\t\t\t<h2>";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 9), "field_title", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 10), "field_summary", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source));
            echo "
\t\t\t\t\t\t<div class=\"container-btn\">
<a href=\"";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 12), "field_button", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), "url", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 12), "field_button_type", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 12), "field_button", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<picture>
\t\t\t\t\t<img src=\" ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 18), "field_image", [], "any", false, false, true, 18), "entity", [], "any", false, false, true, 18), "fileuri", [], "any", false, false, true, 18), 18, $this->source)]), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 18), "field_image", [], "any", false, false, true, 18), "alt", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">
\t\t\t\t</picture>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/paragraph/paragraph--slider-principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  84 => 18,  71 => 12,  66 => 10,  62 => 9,  58 => 8,  53 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"primary-slider\">
\t<div class=\"primary-slider owl-carousel owl-theme\">
\t\t{% for item in paragraph.field_primary_slider %}
\t\t\t{% set opacidad=(item.entity.field_opacity is not empty) ? item.entity.field_opacity.value / 100 : 0 %}
\t\t\t<div class=\"item\">
\t\t\t\t<div class=\"layer-opacity\" style=\"background-color: rgba(21, 44, 64, {{opacidad}});\"></div>
\t\t\t\t<div class=\"content-text-slider-primary\">
\t\t\t\t\t<div class=\"text-slider {{item.entity.field_orientation.value}}\">
\t\t\t\t\t\t<h2>{{item.entity.field_title.value}}</h2>
\t\t\t\t\t\t{{item.entity.field_summary.value|raw}}
\t\t\t\t\t\t<div class=\"container-btn\">
<a href=\"{{ item.entity.field_button.0.url }}\" target=\"_blank\" class=\"btn btn-{{item.entity.field_button_type.value}}\">{{item.entity.field_button.title}}</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<picture>
\t\t\t\t\t<img src=\" {{ file_url(item.entity.field_image.entity.fileuri) }}\" alt=\"{{ item.entity.field_image.alt }}\">
\t\t\t\t</picture>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
</section>
", "themes/custom/abogados/templates/paragraph/paragraph--slider-principal.html.twig", "/app/web/themes/custom/abogados/templates/paragraph/paragraph--slider-principal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "set" => 4);
        static $filters = array("escape" => 6, "raw" => 10);
        static $functions = array("file_url" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 'raw'],
                ['file_url']
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
