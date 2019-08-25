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

/* profiles/opigno_lms/modules/opigno/opigno_module/templates/page--opigno-module--activity.html.twig */
class __TwigTemplate_3bc74e877f41cb7f93e383e15601bb38e5c7ffc0a9e5cb46e7dce88f47d84046 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 49, "if" => 56];
        $filters = ["escape" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
        // line 48
        echo "
";
        // line 49
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/layout/header.html.twig"), "profiles/opigno_lms/modules/opigno/opigno_module/templates/page--opigno-module--activity.html.twig", 49)->display($context);
        // line 50
        echo "
<div id=\"main\" class=\"flex-column container\">
  ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

  <div class=\"";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_wrapper_classes"] ?? null)), "html", null, true);
        echo "\">
    <div id=\"main-content\" class=\"row\">
      ";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "top", [])) {
            // line 57
            echo "        <div class=\"col-12\">
          ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 61
        echo "      <div class=\"d-flex col-12 mb-3 lp_progress_wrapper\">
        <div class=\"lp_progress flex-1 bg-faded\">
          <p class=\"lp_progress_label\">Global Training Progress</p>
          <p class=\"lp_progress_value\">";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["progress"] ?? null)), "html", null, true);
        echo "%</p>
          <div class=\"lp_progress_bar\">
            <div class=\"lp_progress_bar_completed\" style=\"width: ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["progress"] ?? null)), "html", null, true);
        echo "%\"></div>
          </div>
        </div>
        ";
        // line 69
        if (($context["home_link"] ?? null)) {
            // line 70
            echo "          <div class=\"home-link bg-faded d-flex ml-md-3\">
            ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["home_link"] ?? null)), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 74
        echo "        <div class=\"fullscreen-link bg-faded d-flex ml-md-3\">
          <a href=\"#\" class=\"w-100\">fullpage</a>
        </div>
      </div>
      ";
        // line 78
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 79
            echo "        <div class=\"col-lg-4 mb-4 mb-lg-0\" id=\"sidebar-first\">
          ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-8 p-static\" id=\"content\">
        ";
        } else {
            // line 84
            echo "          <div class=\"col-lg-12 p-static\" id=\"content\">
          ";
        }
        // line 86
        echo "          <div class=\"message-wrapper\">
            ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "status_messages", [])), "html", null, true);
        echo "
          </div>
          <div class=\"content-wrapper\">
            ";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 97
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/layout/footer.html.twig"), "profiles/opigno_lms/modules/opigno/opigno_module/templates/page--opigno-module--activity.html.twig", 97)->display($context);
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/opigno/opigno_module/templates/page--opigno-module--activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 97,  143 => 90,  137 => 87,  134 => 86,  130 => 84,  123 => 80,  120 => 79,  118 => 78,  112 => 74,  106 => 71,  103 => 70,  101 => 69,  95 => 66,  90 => 64,  85 => 61,  79 => 58,  76 => 57,  74 => 56,  69 => 54,  64 => 52,  60 => 50,  58 => 49,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/opigno/opigno_module/templates/page--opigno-module--activity.html.twig", "/var/www/html/profiles/opigno_lms/modules/opigno/opigno_module/templates/page--opigno-module--activity.html.twig");
    }
}
