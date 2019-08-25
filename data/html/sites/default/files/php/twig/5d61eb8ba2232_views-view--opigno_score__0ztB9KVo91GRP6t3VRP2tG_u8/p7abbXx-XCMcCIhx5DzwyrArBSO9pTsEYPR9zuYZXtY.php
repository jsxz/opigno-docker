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

/* profiles/opigno_lms/themes/contrib/platon/templates/views/views-view--opigno_score_modules.html.twig */
class __TwigTemplate_847f2f650d04a608aa10be3eb32edf18846cb515465c4a21ae735e9dfca8b9ed extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 36, "if" => 46];
        $filters = ["clean_class" => 38, "escape" => 44];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
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
        // line 36
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null)))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null))), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["display_id"] ?? null))), 4 => ((        // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : (""))];
        // line 44
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 50
        if (($context["header"] ?? null)) {
            // line 51
            echo "    <div class=\"view-header\">
      ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 55
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 56
            echo "    <div class=\"view-filters form-group\">
      ";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 60
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 61
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if (($context["rows"] ?? null)) {
            // line 67
            echo "    <div class=\"view-content\">
      ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 70
($context["empty"] ?? null)) {
            // line 71
            echo "    <div class=\"view-empty\">
      <div class=\"no-result-behaviour\">
        ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if (($context["pager"] ?? null)) {
            // line 79
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 81
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 82
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 86
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 87
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 89
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 90
            echo "    <div class=\"view-footer\">
      ";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 94
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 95
            echo "    <div class=\"feed-icons\">
      ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 99
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/themes/contrib/platon/templates/views/views-view--opigno_score_modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 99,  194 => 96,  191 => 95,  188 => 94,  182 => 91,  179 => 90,  176 => 89,  170 => 87,  167 => 86,  161 => 83,  158 => 82,  155 => 81,  149 => 79,  147 => 78,  144 => 77,  137 => 73,  133 => 71,  131 => 70,  126 => 68,  123 => 67,  121 => 66,  118 => 65,  112 => 62,  109 => 61,  106 => 60,  100 => 57,  97 => 56,  94 => 55,  88 => 52,  85 => 51,  83 => 50,  78 => 49,  72 => 47,  70 => 46,  66 => 45,  61 => 44,  59 => 41,  58 => 40,  57 => 39,  56 => 38,  55 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/themes/contrib/platon/templates/views/views-view--opigno_score_modules.html.twig", "/var/www/html/profiles/opigno_lms/themes/contrib/platon/templates/views/views-view--opigno_score_modules.html.twig");
    }
}
