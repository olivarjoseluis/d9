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

/* themes/contrib/radix/templates/misc/status-messages.html.twig */
class __TwigTemplate_33063a163c3b538ab8eb24f37ee97433eaef979d8c60e6d0a3945ee69d87e31e extends \Twig\Template
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
        $context["types"] = ["status" => "success", "warning" => "warning", "error" => "danger", "info" => "info"];
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 15
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["status_headings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["type"]] ?? null) : null), 15, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 15, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
    ";
            // line 16
            $this->loadTemplate("themes/contrib/radix/templates/misc/status-messages.html.twig", "themes/contrib/radix/templates/misc/status-messages.html.twig", 16, "1547265126")->display(twig_array_merge($context, ["type" => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             // line 17
($context["types"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["type"]] ?? null) : null)]));
            // line 34
            echo "  </div>
";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 34,  69 => 17,  68 => 16,  61 => 15,  44 => 14,  41 => 13,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for status messages.
 */
#}
{% set types = {
  status: 'success',
  warning: 'warning',
  error: 'danger',
  info: 'info',
} %}

{% for type, messages in message_list %}
  <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes|without('role', 'aria-label') }}>
    {% embed '@radix/alert/alert.twig' with {
      type: types[type],
    } %}
      {% block content %}
        {% if status_headings[type] %}
          <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
        {% endif %}
        {% if messages|length > 1 %}
          <ul>
            {% for message in messages %}
              <li>{{ message }}</li>
            {% endfor %}
          </ul>
        {% else %}
          {{ messages|first }}
        {% endif %}
      {% endblock %}
    {% endembed %}
  </div>
{% endfor %}
", "themes/contrib/radix/templates/misc/status-messages.html.twig", "/app/web/themes/contrib/radix/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "for" => 14, "embed" => 16);
        static $filters = array("escape" => 15, "without" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'embed'],
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


/* themes/contrib/radix/templates/misc/status-messages.html.twig */
class __TwigTemplate_33063a163c3b538ab8eb24f37ee97433eaef979d8c60e6d0a3945ee69d87e31e___1547265126 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 16
        return "@radix/alert/alert.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@radix/alert/alert.twig", "themes/contrib/radix/templates/misc/status-messages.html.twig", 16);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        ";
        if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["status_headings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["type"] ?? null)] ?? null) : null)) {
            // line 21
            echo "          <h2 class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["status_headings"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["type"] ?? null)] ?? null) : null), 21, $this->source), "html", null, true);
            echo "</h2>
        ";
        }
        // line 23
        echo "        ";
        if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 1)) {
            // line 24
            echo "          <ul>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 26
                echo "              <li>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 26, $this->source), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "          </ul>
        ";
        } else {
            // line 30
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 30, $this->source)), "html", null, true);
            echo "
        ";
        }
        // line 32
        echo "      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 32,  241 => 30,  237 => 28,  228 => 26,  224 => 25,  221 => 24,  218 => 23,  212 => 21,  209 => 20,  205 => 19,  194 => 16,  71 => 34,  69 => 17,  68 => 16,  61 => 15,  44 => 14,  41 => 13,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for status messages.
 */
#}
{% set types = {
  status: 'success',
  warning: 'warning',
  error: 'danger',
  info: 'info',
} %}

{% for type, messages in message_list %}
  <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes|without('role', 'aria-label') }}>
    {% embed '@radix/alert/alert.twig' with {
      type: types[type],
    } %}
      {% block content %}
        {% if status_headings[type] %}
          <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
        {% endif %}
        {% if messages|length > 1 %}
          <ul>
            {% for message in messages %}
              <li>{{ message }}</li>
            {% endfor %}
          </ul>
        {% else %}
          {{ messages|first }}
        {% endif %}
      {% endblock %}
    {% endembed %}
  </div>
{% endfor %}
", "themes/contrib/radix/templates/misc/status-messages.html.twig", "/app/web/themes/contrib/radix/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "for" => 25);
        static $filters = array("escape" => 21, "length" => 23, "first" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length', 'first'],
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
