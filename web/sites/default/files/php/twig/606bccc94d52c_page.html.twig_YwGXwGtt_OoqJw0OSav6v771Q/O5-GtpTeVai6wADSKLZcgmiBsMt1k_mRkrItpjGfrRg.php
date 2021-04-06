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

/* themes/custom/abogados/templates/page/page.html.twig */
class __TwigTemplate_d0501c82bc87ca5bd06dd8e5a67863a1febee710d6cedc9c6be9dd68d693aaa4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<body class=\"layers-site\">
<header class=\"main-header\">
\t";
        // line 9
        $this->displayBlock('branding', $context, $blocks);
        // line 14
        echo "
\t";
        // line 15
        $this->displayBlock('left', $context, $blocks);
        // line 22
        echo "
\t";
        // line 23
        $this->displayBlock('right', $context, $blocks);
        // line 28
        echo "</header>
<div class=\"page\">
\t<main class=\"pb-5\">
\t\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 31)) {
            // line 32
            echo "\t\t\t<header class=\"page__header mb-3\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</header>
\t\t";
        }
        // line 38
        echo "
\t\t";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 39)) {
            // line 40
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
\t\t";
        }
        // line 42
        echo "\t</main>

\t";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 44)) {
            // line 45
            echo "\t\t<footer class=\"page__footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-flex justify-content-md-between\">
\t\t\t\t\t";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t";
        }
        // line 53
        echo "</div>
</body>
";
    }

    // line 9
    public function block_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 10)) {
            // line 11
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
\t\t";
        }
        // line 13
        echo "\t";
    }

    // line 15
    public function block_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 16)) {
            // line 17
            echo "\t\t\t<div class=\"mr-auto\">
\t\t\t\t";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 21
        echo "\t";
    }

    // line 23
    public function block_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 24)) {
            // line 25
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
\t\t";
        }
        // line 27
        echo "\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 27,  156 => 25,  153 => 24,  149 => 23,  145 => 21,  139 => 18,  136 => 17,  133 => 16,  129 => 15,  125 => 13,  119 => 11,  116 => 10,  112 => 9,  106 => 53,  98 => 48,  93 => 45,  91 => 44,  87 => 42,  81 => 40,  79 => 39,  76 => 38,  69 => 34,  65 => 32,  63 => 31,  58 => 28,  56 => 23,  53 => 22,  51 => 15,  48 => 14,  46 => 9,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for the main page.
 */
#}
<body class=\"layers-site\">
<header class=\"main-header\">
\t{% block branding %}
\t\t{% if page.navbar_branding %}
\t\t\t{{ page.navbar_branding }}
\t\t{% endif %}
\t{% endblock %}

\t{% block left %}
\t\t{% if page.navbar_left %}
\t\t\t<div class=\"mr-auto\">
\t\t\t\t{{ page.navbar_left }}
\t\t\t</div>
\t\t{% endif %}
\t{% endblock %}

\t{% block right %}
\t\t{% if page.navbar_right %}
\t\t\t{{ page.navbar_right }}
\t\t{% endif %}
\t{% endblock %}
</header>
<div class=\"page\">
\t<main class=\"pb-5\">
\t\t{% if page.header %}
\t\t\t<header class=\"page__header mb-3\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t{{ page.header }}
\t\t\t\t</div>
\t\t\t</header>
\t\t{% endif %}

\t\t{% if page.content %}
\t\t\t{{ page.content }}
\t\t{% endif %}
\t</main>

\t{% if page.footer %}
\t\t<footer class=\"page__footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-flex justify-content-md-between\">
\t\t\t\t\t{{ page.footer }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t{% endif %}
</div>
</body>
", "themes/custom/abogados/templates/page/page.html.twig", "/app/web/themes/custom/abogados/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 9, "if" => 31);
        static $filters = array("escape" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
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
