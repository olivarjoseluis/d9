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

/* themes/custom/abogados/templates/menu/social-network/menu-link-content--social-network.html.twig */
class __TwigTemplate_f8d0b22f47ab41e6db98e70d04f6edc94619368c1de4a6867edc6892a1719c9d extends \Twig\Template
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
        // line 15
        $macros["menu"] = $this->macros["menu"] = $this;
        // line 16
        echo "
";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menu"], "macro_build_menu_link_content", [($context["attributes"] ?? null), ($context["menu_link_content"] ?? null), ($context["show_item_link"] ?? null), ($context["content"] ?? null), ($context["elements"] ?? null)], 17, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 19
    public function macro_build_menu_link_content($__attributes__ = null, $__menu_link_content__ = null, $__show_item_link__ = null, $__content__ = null, $__elements__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "menu_link_content" => $__menu_link_content__,
            "show_item_link" => $__show_item_link__,
            "content" => $__content__,
            "elements" => $__elements__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 20
            echo "\t<div class=\"social-network-icon\">
\t\t";
            // line 21
            if (($context["content"] ?? null)) {
                // line 22
                echo "\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 22, $this->source), "html", null, true);
                echo "
\t\t";
            }
            // line 24
            echo "\t</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/menu/social-network/menu-link-content--social-network.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  73 => 22,  71 => 21,  68 => 20,  51 => 19,  44 => 17,  41 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to present a menu link entity entity.
 *
 * Available variables:
 * - menu_link_content: Menu link entity.
 * - show_item_link: Indicator for menu item link.
 *
 * @see template_preprocess_menu_link_content()
 *
 * @ingroup themeable
 */
#}
{% import _self as menu %}

{{ menu.build_menu_link_content(attributes, menu_link_content, show_item_link, content, elements) }}

{% macro build_menu_link_content(attributes, menu_link_content, show_item_link, content, elements) %}
\t<div class=\"social-network-icon\">
\t\t{% if content %}
\t\t\t{{ content }}
\t\t{% endif %}
\t</div>
{% endmacro %}
", "themes/custom/abogados/templates/menu/social-network/menu-link-content--social-network.html.twig", "/app/web/themes/custom/abogados/templates/menu/social-network/menu-link-content--social-network.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 15, "macro" => 19, "if" => 21);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if'],
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
