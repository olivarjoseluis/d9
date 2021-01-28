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

/* themes/custom/abogados/templates/block/block--block-content--contact.html.twig */
class __TwigTemplate_0ecf584de2370b1828844a764ffa2c61f9065517a96ddb5f0910aff8e01acb52 extends \Twig\Template
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
        // line 11
        $context["classes"] = [0 => "block", 1 => ("block--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 13
($context["bundle"] ?? null), 13, $this->source))), 2 => "social-network-block"];
        // line 16
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 16), 16, $this->source), "html", null, true);
        echo ">
  <div class=\"social-network\">
    <div class=\"contact-information-box\">
      ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_information_block", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"social-networks\">
      ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_networks_block", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/block/block--block-content--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  49 => 19,  42 => 16,  40 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for a Block component.
 *
 * Available config:
 * - html_tag: The HTML tag for the block.
 * - utility_classes: An array of utility classes.
 */
#}
{% set classes = [
  'block',
  'block--' ~ bundle|clean_class,
  'social-network-block',
] %}
<div {{ attributes.addClass(classes) }}>
  <div class=\"social-network\">
    <div class=\"contact-information-box\">
      {{ content.field_contact_information_block }}
    </div>
    <div class=\"social-networks\">
      {{ content.field_social_networks_block }}
    </div>
  </div>
</div>", "themes/custom/abogados/templates/block/block--block-content--contact.html.twig", "/app/web/themes/custom/abogados/templates/block/block--block-content--contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11);
        static $filters = array("clean_class" => 13, "escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
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
