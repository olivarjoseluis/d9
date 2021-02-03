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

/* themes/custom/abogados/templates/content/node--practice-areas.html.twig */
class __TwigTemplate_68b687f442008af85fb1e8d7a5733dfa6911a08ba6eaf2cf4ae6d7e0a98527fc extends \Twig\Template
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
        echo "<section class=\"practice-areas\">
\t<section class=\"initial-banner\">
\t\t<picture>
\t\t\t<img src=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4), "fileuri", [], "any", false, false, true, 4), 4, $this->source)]), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 4), "alt", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">
\t\t</picture>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"loyout-opacity\"></div>
\t\t\t\t\t<h1>";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 10, $this->source), "html", null, true);
        echo "</h1>
\t\t\t\t\t";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_motto", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
                    ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_bloques", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
                </div>
\t\t\t</div>
\t\t</div>
\t</section>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/content/node--practice-areas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  59 => 11,  55 => 10,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"practice-areas\">
\t<section class=\"initial-banner\">
\t\t<picture>
\t\t\t<img src=\"{{ file_url(node.field_image.entity.fileuri) }}\" alt=\"{{ node.field_image.alt }}\">
\t\t</picture>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"loyout-opacity\"></div>
\t\t\t\t\t<h1>{{label}}</h1>
\t\t\t\t\t{{node.field_motto.value|raw}}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
                    {{content.field_bloques}}
                </div>
\t\t\t</div>
\t\t</div>
\t</section>
</section>
", "themes/custom/abogados/templates/content/node--practice-areas.html.twig", "/app/web/themes/custom/abogados/templates/content/node--practice-areas.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4, "raw" => 11);
        static $functions = array("file_url" => 4);

        try {
            $this->sandbox->checkSecurity(
                [],
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
