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

/* themes/custom/abogados/templates/paragraph/paragraph--pictures-gallery.html.twig */
class __TwigTemplate_f5cf6cf756586d1b42a6f9702a08c4ab53cf733fdd9df74d44021f244e651cb2 extends \Twig\Template
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
        echo "<section class=\"pictures-gallery mt-4\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8 offset-md-2\">
\t\t\t\t<div class=\"header header-gellery text-center\">
\t\t\t\t\t<h3>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_title", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h3>
\t\t\t\t\t";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_summary", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"content-gallery\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 offset-md-2\">
\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_pictures", [], "any", false, false, true, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "\t\t\t\t\t\t\t\t\t<div class=\"col-3 m-1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 15), "field_image", [], "any", false, false, true, 15), "entity", [], "any", false, false, true, 15), "fileuri", [], "any", false, false, true, 15), 15, $this->source), "galeria_thumbnail")]), "html", null, true);
            echo "\" data-imagebox=\"gallery\" data-imagebox-src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 15), "field_image", [], "any", false, false, true, 15), "entity", [], "any", false, false, true, 15), "fileuri", [], "any", false, false, true, 15), 15, $this->source)]), "html", null, true);
            echo "\" data-imagebox-caption=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 15), "field_title", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/paragraph/paragraph--pictures-gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  66 => 15,  63 => 14,  59 => 13,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"pictures-gallery mt-4\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8 offset-md-2\">
\t\t\t\t<div class=\"header header-gellery text-center\">
\t\t\t\t\t<h3>{{paragraph.field_title.value}}</h3>
\t\t\t\t\t{{paragraph.field_summary.value|raw}}
\t\t\t\t</div>
\t\t\t\t<div class=\"content-gallery\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 offset-md-2\">
\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t{% for item in paragraph.field_pictures %}
\t\t\t\t\t\t\t\t\t<div class=\"col-3 m-1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ file_url(item.entity.field_image.entity.fileuri | image_style('galeria_thumbnail'))}}\" data-imagebox=\"gallery\" data-imagebox-src=\"{{ file_url(item.entity.field_image.entity.fileuri)}}\" data-imagebox-caption=\"{{item.entity.field_title.value}}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "themes/custom/abogados/templates/paragraph/paragraph--pictures-gallery.html.twig", "/app/web/themes/custom/abogados/templates/paragraph/paragraph--pictures-gallery.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 13);
        static $filters = array("escape" => 6, "raw" => 7, "image_style" => 15);
        static $functions = array("file_url" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'raw', 'image_style'],
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
