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
class __TwigTemplate_c2f0f4884c6d6d0eec3a236092bad8411f6588e5aae314672d7128bcdc2c37c4 extends \Twig\Template
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
        echo "<header class=\"main-header\">
\t";
        // line 8
        $this->displayBlock('branding', $context, $blocks);
        // line 13
        echo "
\t";
        // line 14
        $this->displayBlock('left', $context, $blocks);
        // line 21
        echo "
\t";
        // line 22
        $this->displayBlock('right', $context, $blocks);
        // line 27
        echo "</header>
<div class=\"page\">


\t<main class=\"pb-5\">
\t\t";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 32)) {
            // line 33
            echo "\t\t\t<header class=\"page__header mb-3\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</header>
\t\t";
        }
        // line 39
        echo "
\t\t";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 40)) {
            // line 41
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
\t\t";
        }
        // line 43
        echo "\t</main>

\t";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 45)) {
            // line 46
            echo "\t\t<footer class=\"page__footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-flex justify-content-md-between align-items-md-center\">
\t\t\t\t\t";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t";
        }
        // line 54
        echo "</div>
";
    }

    // line 8
    public function block_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 9)) {
            // line 10
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
\t\t";
        }
        // line 12
        echo "\t";
    }

    // line 14
    public function block_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 15)) {
            // line 16
            echo "\t\t\t<div class=\"mr-auto\">
\t\t\t\t";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 20
        echo "\t";
    }

    // line 22
    public function block_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 23)) {
            // line 24
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
\t\t";
        }
        // line 26
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
        return array (  162 => 26,  156 => 24,  153 => 23,  149 => 22,  145 => 20,  139 => 17,  136 => 16,  133 => 15,  129 => 14,  125 => 12,  119 => 10,  116 => 9,  112 => 8,  107 => 54,  99 => 49,  94 => 46,  92 => 45,  88 => 43,  82 => 41,  80 => 40,  77 => 39,  70 => 35,  66 => 33,  64 => 32,  57 => 27,  55 => 22,  52 => 21,  50 => 14,  47 => 13,  45 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/abogados/templates/page/page.html.twig", "/app/web/themes/custom/abogados/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 8, "if" => 32);
        static $filters = array("escape" => 35);
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
