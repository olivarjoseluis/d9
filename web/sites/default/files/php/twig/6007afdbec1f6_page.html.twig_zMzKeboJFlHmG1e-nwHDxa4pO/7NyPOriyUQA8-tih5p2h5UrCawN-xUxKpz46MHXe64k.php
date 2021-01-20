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
  ";
        // line 8
        $this->displayBlock('branding', $context, $blocks);
        // line 13
        echo "
  ";
        // line 14
        $this->displayBlock('left', $context, $blocks);
        // line 21
        echo "
  ";
        // line 22
        $this->displayBlock('right', $context, $blocks);
        // line 27
        echo "</header>
<div class=\"page\">


  <main class=\"pt-5 pb-5\">
    ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 32)) {
            // line 33
            echo "      <header class=\"page__header mb-3\">
        <div class=\"container\">
          ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
        </div>
      </header>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 40)) {
            // line 41
            echo "      <div class=\"page__content\">
        <div class=\"container\">
          ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 47
        echo "  </main>

  ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 49)) {
            // line 50
            echo "    <footer class=\"page__footer\">
      <div class=\"container\">
        <div class=\"d-flex justify-content-md-between align-items-md-center\">
          ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </footer>
  ";
        }
        // line 58
        echo "</div>";
    }

    // line 8
    public function block_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 9)) {
            // line 10
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 12
        echo "  ";
    }

    // line 14
    public function block_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 15)) {
            // line 16
            echo "      <div class=\"mr-auto\">
        ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 20
        echo "  ";
    }

    // line 22
    public function block_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 23)) {
            // line 24
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 26
        echo "  ";
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
        return array (  166 => 26,  160 => 24,  157 => 23,  153 => 22,  149 => 20,  143 => 17,  140 => 16,  137 => 15,  133 => 14,  129 => 12,  123 => 10,  120 => 9,  116 => 8,  112 => 58,  104 => 53,  99 => 50,  97 => 49,  93 => 47,  86 => 43,  82 => 41,  80 => 40,  77 => 39,  70 => 35,  66 => 33,  64 => 32,  57 => 27,  55 => 22,  52 => 21,  50 => 14,  47 => 13,  45 => 8,  42 => 7,);
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
