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

/* profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-training-content-step.html.twig */
class __TwigTemplate_ac94568f97a46e194bdf771952807c1c62a85b9fdfe9357b5dbfbc255e1220a3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 13, "for" => 19];
        $filters = ["escape" => 16, "raw" => 36];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
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
        // line 11
        echo "<div class=\"lp_step\">
  <div class=\"lp_step_title_wrapper\">
    ";
        // line 13
        if ($this->getAttribute(($context["step"] ?? null), "mandatory", [])) {
            // line 14
            echo "      <span class=\"lp_step_required\"></span>
    ";
        }
        // line 16
        echo "    <h3 class=\"lp_step_title\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["step"] ?? null), "name", [])), "html", null, true);
        echo "</h3>
  </div>
  ";
        // line 18
        if (($this->getAttribute(($context["step"] ?? null), "typology", []) == "Course")) {
            // line 19
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["step"] ?? null), "course_steps", []));
            foreach ($context['_seq'] as $context["_key"] => $context["course_step"]) {
                // line 20
                echo "      <div class=\"lp_step_content\">
        <div class=\"lp_step_summary\">
          <div class=\"lp_step_summary_title_wrapper\">
            <h3 class=\"lp_step_summary_title\">";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["course_step"], "title", [])), "html", null, true);
                echo "</h3>
          </div>
          ";
                // line 25
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["course_step"], "summary_details_table", [])), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course_step'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  ";
        } else {
            // line 30
            echo "    <div class=\"lp_step_content\">
      <div class=\"lp_step_summary\">
        <div class=\"lp_step_summary_title_wrapper\">
          <h3 class=\"lp_step_summary_title\">";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["step"] ?? null), "title", [])), "html", null, true);
            echo "</h3>
          <h4 class=\"lp_step_summary_subtitle\">";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["step"] ?? null), "sub_title", [])), "html", null, true);
            echo "</h4>
          ";
            // line 35
            if ($this->getAttribute(($context["step"] ?? null), "description", [])) {
                // line 36
                echo "            <div class=\"lp_step_summary_description\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["step"] ?? null), "description", [])));
                echo "</div>
          ";
            }
            // line 38
            echo "        </div>
        ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["step"] ?? null), "summary_details_table", [])), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 43
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-training-content-step.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  125 => 39,  122 => 38,  116 => 36,  114 => 35,  110 => 34,  106 => 33,  101 => 30,  98 => 29,  88 => 25,  83 => 23,  78 => 20,  73 => 19,  71 => 18,  65 => 16,  61 => 14,  59 => 13,  55 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-training-content-step.html.twig", "/var/www/html/profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-training-content-step.html.twig");
    }
}
