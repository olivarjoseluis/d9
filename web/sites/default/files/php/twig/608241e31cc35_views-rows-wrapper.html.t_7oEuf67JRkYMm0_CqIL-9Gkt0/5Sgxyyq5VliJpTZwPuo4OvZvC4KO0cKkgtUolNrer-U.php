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

/* modules/contrib/views_rows_wrapper/templates/views-rows-wrapper.html.twig */
class __TwigTemplate_c02ccbf6bb3b3907b381b7845a09bf2f07d5c015cca707fb3178ad3d0e0f4adf extends \Twig\Template
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
        // line 22
        if (($context["use_wrapper"] ?? null)) {
            // line 23
            echo "  ";
            if (($context["use_additional_wrapper"] ?? null)) {
                // line 24
                echo "    <div class=\"views-rows-wrapper\">
  ";
            }
            // line 26
            echo "  ";
            $context["k"] = 0;
            // line 27
            echo "  ";
            $context["is_wrapped_once"] = 0;
            // line 28
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 29
                echo "    ";
                $context["k"] = (($context["k"] ?? null) + 1);
                // line 30
                echo "    ";
                if (((($context["k"] ?? null) == 1) && (($context["is_wrapped_once"] ?? null) == 0))) {
                    // line 31
                    echo "      ";
                    if (($context["attribute_name"] ?? null)) {
                        // line 32
                        echo "        <";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element_type"] ?? null), 32, $this->source), "html", null, true);
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attribute_type"] ?? null), 32, $this->source), "html", null, true);
                        echo " =\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attribute_name"] ?? null), 32, $this->source), "html", null, true);
                        echo "\">
      ";
                    } else {
                        // line 34
                        echo "        <";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element_type"] ?? null), 34, $this->source), "html", null, true);
                        echo ">
      ";
                    }
                    // line 36
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 37
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo "
      </div>
    ";
                } else {
                    // line 40
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 41
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo "
      </div>
    ";
                }
                // line 44
                echo "    ";
                if (((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 44) % ($context["rows_number"] ?? null)) || ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 44) == twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 44)) && (($context["k"] ?? null) < ($context["rows_number"] ?? null))))) {
                    // line 45
                    echo "      ";
                    if ((($context["is_wrapped_once"] ?? null) == 0)) {
                        // line 46
                        echo "        </";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element_type"] ?? null), 46, $this->source), "html", null, true);
                        echo ">
      ";
                    }
                    // line 48
                    echo "    ";
                }
                // line 49
                echo "    ";
                if ((($context["k"] ?? null) == ($context["rows_number"] ?? null))) {
                    // line 50
                    echo "      ";
                    $context["k"] = 0;
                    // line 51
                    echo "      ";
                    if ((($context["wrap_method"] ?? null) == 1)) {
                        // line 52
                        echo "        ";
                        $context["is_wrapped_once"] = 1;
                        // line 53
                        echo "      ";
                    }
                    // line 54
                    echo "    ";
                }
                // line 55
                echo "  ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "  ";
            if (($context["use_additional_wrapper"] ?? null)) {
                // line 57
                echo "    </div>
  ";
            }
        } else {
            // line 60
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 61
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo ">
      ";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/views_rows_wrapper/templates/views-rows-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 62,  179 => 61,  174 => 60,  169 => 57,  166 => 56,  152 => 55,  149 => 54,  146 => 53,  143 => 52,  140 => 51,  137 => 50,  134 => 49,  131 => 48,  125 => 46,  122 => 45,  119 => 44,  113 => 41,  108 => 40,  102 => 37,  97 => 36,  91 => 34,  81 => 32,  78 => 31,  75 => 30,  72 => 29,  54 => 28,  51 => 27,  48 => 26,  44 => 24,  41 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to output a views rows wrapper display style plugin.
 *
 * Available variables:
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - element_type: Wrapper element type
 * - attribute_type: Attribute type of the selected wrapper element
 * - attribute_name: Name of the selected attribute.
 * - rows_number: A number of rows to wrap
 * - wrap_method: 0 - Apply to all items, 1 - Wrap once.
 * - use_wrapper: A flag for wrapper usage
 * - use_additional_wrapper: A flag for additional wrapper usage
 *
 * @ingroup themeable
 */
#}
{% if use_wrapper %}
  {% if use_additional_wrapper %}
    <div class=\"views-rows-wrapper\">
  {% endif %}
  {% set k = 0 %}
  {% set is_wrapped_once = 0 %}
  {% for row in rows %}
    {% set k = k + 1 %}
    {% if (k == 1) and (is_wrapped_once == 0) %}
      {% if attribute_name %}
        <{{ element_type }} {{ attribute_type }} =\"{{ attribute_name }}\">
      {% else %}
        <{{ element_type }}>
      {% endif %}
      <div{{ row.attributes }}>
        {{ row.content }}
      </div>
    {% else %}
      <div{{ row.attributes }}>
        {{ row.content }}
      </div>
    {% endif %}
    {% if (loop.index is divisible by(rows_number)) or ((loop.index == loop.last) and (k < rows_number)) %}
      {% if is_wrapped_once == 0 %}
        </{{ element_type }}>
      {% endif %}
    {% endif %}
    {% if (k == rows_number) %}
      {% set k = 0 %}
      {% if (wrap_method == 1) %}
        {% set is_wrapped_once = 1 %}
      {% endif %}
    {% endif %}
  {% endfor %}
  {% if use_additional_wrapper %}
    </div>
  {% endif %}
{% else %}
  {% for row in rows %}
    <div{{ row.attributes }}>
      {{ row.content }}
    </div>
  {% endfor %}
{% endif %}
", "modules/contrib/views_rows_wrapper/templates/views-rows-wrapper.html.twig", "/app/web/modules/contrib/views_rows_wrapper/templates/views-rows-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "set" => 26, "for" => 28);
        static $filters = array("escape" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
