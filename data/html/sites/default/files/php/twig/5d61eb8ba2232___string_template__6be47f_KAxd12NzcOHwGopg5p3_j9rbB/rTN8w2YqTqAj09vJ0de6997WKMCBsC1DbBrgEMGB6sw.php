<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__6be47f4ae1261a1754344ad3c581291513a1c6d0cd72e5509ce0aef4ae0cc147 */
class __TwigTemplate_732f281125ff4b1bb4d26cd265f81988e1dd3a974aaf193ebc2efa83ecefd5a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 2, "set" => 3];
        $filters = ["escape" => 4, "round" => 5];
        $functions = ["range" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 'round'],
                ['range']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<svg class=\"users-per-day\" viewBox=\"-20 -20 500 220\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($context["h_lines"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    ";
            $context["y"] = (($context["height"] ?? null) - ((($context["height"] ?? null) * $context["i"]) / ($context["h_lines"] ?? null)));
            // line 4
            echo "    <line x1=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["padding"] ?? null)), "html", null, true);
            echo "\" y1=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["y"] ?? null)), "html", null, true);
            echo "\" x2=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["padding"] ?? null) + (($context["day_x_step"] ?? null) * (($context["max_day"] ?? null) - ($context["min_day"] ?? null)))), "html", null, true);
            echo "\" y2=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["y"] ?? null)), "html", null, true);
            echo "\"></line>
    <text x=\"0\" y=\"";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["y"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_round(((($context["max_count"] ?? null) * $context["i"]) / ($context["h_lines"] ?? null))), "html", null, true);
            echo "</text>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["min_day"] ?? null), ($context["max_day"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "    ";
            $context["x"] = (( -5 + ($context["padding"] ?? null)) + (($context["day_x_step"] ?? null) * ($context["i"] - ($context["min_day"] ?? null))));
            // line 10
            echo "    ";
            $context["y"] = (($context["padding"] ?? null) + ($context["height"] ?? null));
            // line 11
            echo "    <text x=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["x"] ?? null)), "html", null, true);
            echo "\" y=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["y"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["i"]), "html", null, true);
            echo "</text>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
  <path d=\"
  ";
        // line 15
        $context["y"] = (($context["height"] ?? null) - ((($context["height"] ?? null) * $this->getAttribute(($context["data"] ?? null), ($context["min_day"] ?? null), [], "array")) / ($context["max_count"] ?? null)));
        // line 16
        echo "  M";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["padding"] ?? null)), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["y"] ?? null)), "html", null, true);
        echo "
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((($context["min_day"] ?? null) + 1), ($context["max_day"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            echo "    ";
            $context["x"] = (($context["padding"] ?? null) + (($context["day_x_step"] ?? null) * ($context["i"] - ($context["min_day"] ?? null))));
            // line 19
            echo "    ";
            $context["y"] = (($context["height"] ?? null) - ((($context["height"] ?? null) * $this->getAttribute(($context["data"] ?? null), $context["i"], [], "array")) / ($context["max_count"] ?? null)));
            // line 20
            echo "    L";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["x"] ?? null)), "html", null, true);
            echo ",";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["y"] ?? null)), "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  \"></path>

  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["min_day"] ?? null), ($context["max_day"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "    ";
            $context["x"] = (($context["padding"] ?? null) + (($context["day_x_step"] ?? null) * ($context["i"] - ($context["min_day"] ?? null))));
            // line 26
            echo "    ";
            $context["y"] = (($context["height"] ?? null) - ((($context["height"] ?? null) * $this->getAttribute(($context["data"] ?? null), $context["i"], [], "array")) / ($context["max_count"] ?? null)));
            // line 27
            echo "    <circle cx=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["x"] ?? null)), "html", null, true);
            echo "\" cy=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["y"] ?? null)), "html", null, true);
            echo "\" r=\"4\"></circle>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</svg>";
    }

    public function getTemplateName()
    {
        return "__string_template__6be47f4ae1261a1754344ad3c581291513a1c6d0cd72e5509ce0aef4ae0cc147";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 29,  160 => 27,  157 => 26,  154 => 25,  150 => 24,  146 => 22,  135 => 20,  132 => 19,  129 => 18,  125 => 17,  118 => 16,  116 => 15,  112 => 13,  99 => 11,  96 => 10,  93 => 9,  89 => 8,  86 => 7,  76 => 5,  65 => 4,  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6be47f4ae1261a1754344ad3c581291513a1c6d0cd72e5509ce0aef4ae0cc147", "");
    }
}
