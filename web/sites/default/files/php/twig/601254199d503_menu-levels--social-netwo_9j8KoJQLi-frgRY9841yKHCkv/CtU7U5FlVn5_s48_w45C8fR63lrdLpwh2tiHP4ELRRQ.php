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

/* menu-levels--social-network.html.twig */
class __TwigTemplate_7114fbe019f0a0ea122a9661bfa99e774231d6dbb82597db4c3c317726f8f607 extends \Twig\Template
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
        // line 7
        $macros["menu"] = $this->macros["menu"] = $this;
        // line 8
        echo "
";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menu"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 9, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 10
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 11
            echo "\t<ul class=\"social-network-list\">
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "\t\t\t";
                $context["menu_item_classes"] = "social-network-item";
                // line 14
                echo "\t\t\t<li";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 14), "addClass", [0 => ($context["menu_item_classes"] ?? null)], "method", false, false, true, 14), 14, $this->source), "html", null, true);
                echo ">
\t\t\t\t<a class=\"social-network-link\" href=\"";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\" target=\"_blank\">
\t\t\t\t\t";
                // line 16
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 16), "field_social_network")) {
                    // line 17
                    echo "\t\t\t\t\t\t";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 17), 17, $this->source), "field_social_network"), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t</ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "menu-levels--social-network.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  92 => 19,  86 => 17,  84 => 16,  80 => 15,  75 => 14,  72 => 13,  68 => 12,  65 => 11,  50 => 10,  44 => 9,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to each level of menu.
 */
#}
{% import _self as menu %}

{{ menu.menu_links(items, attributes, 0) }}
{% macro menu_links(items, attributes, menu_level) %}
\t<ul class=\"social-network-list\">
\t\t{% for item in items  %}
\t\t\t{% set menu_item_classes = 'social-network-item'%}
\t\t\t<li{{item.attributes.addClass(menu_item_classes)}}>
\t\t\t\t<a class=\"social-network-link\" href=\"{{ item.url }}\" target=\"_blank\">
\t\t\t\t\t{% if item.content|without('field_social_network')  %}
\t\t\t\t\t\t{{ item.content|without('field_social_network')  }}
\t\t\t\t\t{% endif %}
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endfor %}
\t</ul>
{% endmacro %}
", "menu-levels--social-network.html.twig", "themes/custom/abogados/templates/menu/social-network/menu-levels--social-network.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 7, "macro" => 10, "for" => 12, "set" => 13, "if" => 16);
        static $filters = array("escape" => 14, "without" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'for', 'set', 'if'],
                ['escape', 'without'],
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
