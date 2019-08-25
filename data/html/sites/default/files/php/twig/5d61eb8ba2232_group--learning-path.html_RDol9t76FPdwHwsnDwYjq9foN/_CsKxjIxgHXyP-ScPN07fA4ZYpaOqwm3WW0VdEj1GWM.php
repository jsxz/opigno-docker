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

/* profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/group--learning-path.html.twig */
class __TwigTemplate_8083a89d7050ffbe71653013a80121a0a787ad199e3416cd3e8463e5304b07f4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 46];
        $filters = ["escape" => 43, "t" => 58, "without" => 83];
        $functions = ["opigno_catalog_is_member" => 53, "get_progress" => 54, "opigno_catalog_get_default_image" => 64, "get_join_group_link" => 76, "get_start_link" => 86, "get_training_content" => 88];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'without'],
                ['opigno_catalog_is_member', 'get_progress', 'opigno_catalog_get_default_image', 'get_join_group_link', 'get_start_link', 'get_training_content']
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
        // line 42
        echo "
<div";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addclass", [0 => "group-opigno-course"], "method")), "html", null, true);
        echo ">

  ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 46
        if ( !($context["page"] ?? null)) {
            // line 47
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">
      <a href=\"";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 51
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  <div class=\"row\">
    ";
        // line 53
        if ($this->env->getExtension('Drupal\opigno_catalog\TwigExtension\DefaultTwigExtension')->is_member($this->getAttribute(($context["group"] ?? null), "id", [], "method"))) {
            // line 54
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\opigno_learning_path\TwigExtension\DefaultTwigExtension')->get_progress(), "html", null, true);
            echo "
    ";
        }
        // line 56
        echo "    <div class=\"col-md-4\">
      <section>
        <h2 class=\"h4 bg-primary color-white text-uppercase mb-0 px-3 py-2\">";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Information"));
        echo "</h2>
        <div class=\"content bg-light py-2 pr-3\">
          <div class=\"lp-image\">
            ";
        // line 61
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_learning_path_media_image", []), 0, [], "array")) {
            // line 62
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_learning_path_media_image", [])), "html", null, true);
            echo "
            ";
        } else {
            // line 64
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\opigno_catalog\TwigExtension\DefaultTwigExtension')->get_default_image("learning_path"), "html", null, true);
            echo "
            ";
        }
        // line 66
        echo "          </div>
          <div class=\"duration d-flex px-2 py-2 bg-white mt-2\">
            <div class=\"label\">";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Length"));
        echo "</div>
            <div class=\"value text-right ml-auto\">";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["group"] ?? null), "field_learning_path_duration", []), "value", [])), "html", null, true);
        echo "</div>
          </div>
          <div class=\"category d-flex px-2 py-2 bg-white mt-2\">
            <div class=\"label\">";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Subject"));
        echo "</div>
            <div class=\"value text-right ml-auto\">";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["learning_path_category"] ?? null)), "html", null, true);
        echo "</div>
          </div>
        </div>
        ";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\opigno_learning_path\TwigExtension\DefaultTwigExtension')->get_join_group_link(null, null, ["class" => [0 => "opigno-quiz-app-course-button", 1 => "bg-success", 2 => "color-white", 3 => "d-block", 4 => "px-2", 5 => "py-2", 6 => "text-center", 7 => "text-uppercase", 8 => "join-link"]]), "html", null, true);
        echo "
      </section>
    </div>
    <div id=\"group-content\" ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "col-md-8"], "method")), "html", null, true);
        echo ">
      <h2 class=\"h4 bg-primary text-uppercase color-white mb-0 px-3 py-2\">";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("About this training"));
        echo "</h2>
      <div class=\"content bg-light px-2 pt-2\">
        <div class=\"bg-white px-3 py-3\">
          ";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_learning_path_media_image", "field_learning_path_duration", "field_learning_path_category"), "html", null, true);
        echo "
        </div>
      </div>
      ";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\opigno_learning_path\TwigExtension\DefaultTwigExtension')->get_start_link(null, ["class" => [0 => "opigno-quiz-app-course-button", 1 => "bg-success", 2 => "color-white", 3 => "d-block", 4 => "px-2", 5 => "py-2", 6 => "text-center", 7 => "text-uppercase"]]), "html", null, true);
        echo "
    </div>
    ";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\opigno_learning_path\TwigExtension\DefaultTwigExtension')->get_training_content(), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/group--learning-path.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 88,  166 => 86,  160 => 83,  154 => 80,  150 => 79,  144 => 76,  138 => 73,  134 => 72,  128 => 69,  124 => 68,  120 => 66,  114 => 64,  108 => 62,  106 => 61,  100 => 58,  96 => 56,  90 => 54,  88 => 53,  82 => 51,  74 => 48,  69 => 47,  67 => 46,  63 => 45,  58 => 43,  55 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/group--learning-path.html.twig", "/var/www/html/profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/group--learning-path.html.twig");
    }
}
