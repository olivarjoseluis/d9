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
class __TwigTemplate_85005ba8a3e119faee4b91cb15dd3e780c5ee6f434260a2dcb7310e211d67244 extends \Twig\Template
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
\t\t\t\t\t<div class=\"text-slider\">
\t\t\t\t\t\t<h2>";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 9), "field_title", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 10), "field_summary", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source));
            echo "
\t\t\t\t\t\t<a href=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 11), "field_button", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11), "url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-line \">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 11), "field_button", [], "any", false, false, true, 11), "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<picture>
\t\t\t\t\t<img src=\" ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 15), "field_image", [], "any", false, false, true, 15), "entity", [], "any", false, false, true, 15), "fileuri", [], "any", false, false, true, 15), 15, $this->source)]), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 15), "field_image", [], "any", false, false, true, 15), "alt", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
\t\t\t\t</picture>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
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
        return array (  88 => 19,  76 => 15,  67 => 11,  63 => 10,  59 => 9,  53 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/abogados/templates/paragraph/paragraph--slider-principal.html.twig", "/app/web/themes/custom/abogados/templates/paragraph/paragraph--slider-principal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "set" => 4);
        static $filters = array("escape" => 6, "raw" => 10);
        static $functions = array("file_url" => 15);

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
