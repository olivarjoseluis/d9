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

/* themes/contrib/radix/templates/navigation/links.html.twig */
class __TwigTemplate_327e7f933e9719cf8cfd879cf0af7f5e177c2197680ccce58c6c078ca2631ac9 extends \Twig\Template
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
        $this->loadTemplate("themes/contrib/radix/templates/navigation/links.html.twig", "themes/contrib/radix/templates/navigation/links.html.twig", 7, "963551774")->display(twig_array_merge($context, ["items" =>         // line 8
($context["links"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/navigation/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for links.
 */
#}
{% embed '@radix/nav/nav.twig' with {
  items: links,
} %}

{% block items %}
  {%- for item in links -%}
    <li{{ item.attributes.addClass('nav-item') }}>
      {%- if item.link -%}
        <a href=\"{{ item.link['#url'] }}\" class=\"nav-link\">{{ item.link['#title'] }}</a>
      {%- elseif item.text_attributes -%}
        <span{{ item.text_attributes.addClass('nav-link') }}>{{ item.text }}</span>
      {%- else -%}
        <span class=\"nav-link\">{{ item.text }}</span>
      {%- endif -%}
    </li>
  {%- endfor -%}
{% endblock %}

{% endembed %}
", "themes/contrib/radix/templates/navigation/links.html.twig", "/app/web/themes/contrib/radix/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
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


/* themes/contrib/radix/templates/navigation/links.html.twig */
class __TwigTemplate_327e7f933e9719cf8cfd879cf0af7f5e177c2197680ccce58c6c078ca2631ac9___963551774 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'items' => [$this, 'block_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "@radix/nav/nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@radix/nav/nav.twig", "themes/contrib/radix/templates/navigation/links.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "<li";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 13), "addClass", [0 => "nav-item"], "method", false, false, true, 13), 13, $this->source), "html", null, true);
            echo ">";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 14)) {
                // line 15
                echo "<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 15)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#url"] ?? null) : null), 15, $this->source), "html", null, true);
                echo "\" class=\"nav-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 15)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["#title"] ?? null) : null), 15, $this->source), "html", null, true);
                echo "</a>";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 16
$context["item"], "text_attributes", [], "any", false, false, true, 16)) {
                // line 17
                echo "<span";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 17), "addClass", [0 => "nav-link"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</span>";
            } else {
                // line 19
                echo "<span class=\"nav-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "</span>";
            }
            // line 21
            echo "</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/navigation/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 21,  180 => 19,  173 => 17,  171 => 16,  165 => 15,  163 => 14,  159 => 13,  155 => 12,  151 => 11,  140 => 7,  40 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for links.
 */
#}
{% embed '@radix/nav/nav.twig' with {
  items: links,
} %}

{% block items %}
  {%- for item in links -%}
    <li{{ item.attributes.addClass('nav-item') }}>
      {%- if item.link -%}
        <a href=\"{{ item.link['#url'] }}\" class=\"nav-link\">{{ item.link['#title'] }}</a>
      {%- elseif item.text_attributes -%}
        <span{{ item.text_attributes.addClass('nav-link') }}>{{ item.text }}</span>
      {%- else -%}
        <span class=\"nav-link\">{{ item.text }}</span>
      {%- endif -%}
    </li>
  {%- endfor -%}
{% endblock %}

{% endembed %}
", "themes/contrib/radix/templates/navigation/links.html.twig", "/app/web/themes/contrib/radix/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "if" => 14);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
