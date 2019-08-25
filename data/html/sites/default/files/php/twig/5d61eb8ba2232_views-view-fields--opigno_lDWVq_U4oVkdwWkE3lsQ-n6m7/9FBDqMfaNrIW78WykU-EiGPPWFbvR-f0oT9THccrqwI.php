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

/* profiles/opigno_lms/themes/contrib/platon/templates/views/views-view-fields--opigno_training_catalog--training_catalogue.html.twig */
class __TwigTemplate_1f6ce9187294bab31bb9293fe350afad729ff8eb724afbfaf52002edc67aa23d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 35, "for" => 37];
        $filters = ["escape" => 36];
        $functions = ["opigno_catalog_is_member" => 35, "path" => 36];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                ['opigno_catalog_is_member', 'path']
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
        // line 34
        echo "
<div class=\"fields-content ";
        // line 35
        if ($this->env->getExtension('Drupal\opigno_catalog\TwigExtension\DefaultTwigExtension')->is_member($this->getAttribute(($context["row"] ?? null), "id", []))) {
            echo "is-member";
        } else {
            echo "is-not-member";
        }
        echo "\">
  <a href=\"";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.group.canonical", ["group" => $this->getAttribute(($context["row"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"not-take-link-wrapper\">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 38
            if (($this->getAttribute($context["field"], "class", []) != "opigno-lp-take-link")) {
                // line 39
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "separator", [])), "html", null, true);
                // line 40
                if ($this->getAttribute($context["field"], "wrapper_element", [])) {
                    // line 41
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "wrapper_element", [])), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "wrapper_attributes", [])), "html", null, true);
                    echo ">";
                }
                // line 43
                if ($this->getAttribute($context["field"], "label", [])) {
                    // line 44
                    if ($this->getAttribute($context["field"], "label_element", [])) {
                        // line 45
                        echo "<";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label_element", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label_attributes", [])), "html", null, true);
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label_suffix", [])), "html", null, true);
                        echo "</";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label_element", [])), "html", null, true);
                        echo ">";
                    } else {
                        // line 47
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label_suffix", [])), "html", null, true);
                    }
                }
                // line 50
                if ($this->getAttribute($context["field"], "element_type", [])) {
                    // line 51
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "element_type", [])), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "element_attributes", [])), "html", null, true);
                    echo ">
            ";
                    // line 52
                    if (($this->getAttribute($context["field"], "class", []) == "opigno-lp-progress")) {
                        // line 53
                        echo "              <span class=\"text\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "content", [])), "html", null, true);
                        echo "</span>
              <div class=\"chart mb-2\">
                <div class=\"bar\" style=\"width: ";
                        // line 55
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "content", [])), "html", null, true);
                        echo ";\"></div>
              </div>
            ";
                    } else {
                        // line 58
                        echo "              ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "content", [])), "html", null, true);
                    }
                    // line 60
                    echo "          </";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "element_type", [])), "html", null, true);
                    echo ">";
                } else {
                    // line 62
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "content", [])), "html", null, true);
                }
                // line 64
                if ($this->getAttribute($context["field"], "wrapper_element", [])) {
                    // line 65
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "wrapper_element", [])), "html", null, true);
                    echo ">";
                }
                // line 67
                echo "        ";
                if (($this->getAttribute($context["field"], "class", []) == "field-learning-path-media-image")) {
                    echo "<div class=\"text-wrapper\">";
                }
                // line 68
                echo "        ";
                if (($this->getAttribute($context["field"], "class", []) == "field-learning-path-description")) {
                    echo "</div>";
                }
                // line 69
                echo "      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "  </a>

  ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 74
            if (($this->getAttribute($context["field"], "class", []) == "opigno-lp-take-link")) {
                // line 75
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "separator", [])), "html", null, true);
                // line 76
                if ($this->getAttribute($context["field"], "wrapper_element", [])) {
                    // line 77
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "wrapper_element", [])), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "wrapper_attributes", [])), "html", null, true);
                    echo ">";
                }
                // line 79
                if ($this->getAttribute($context["field"], "label", [])) {
                    // line 80
                    if ($this->getAttribute($context["field"], "label_element", [])) {
                        // line 81
                        echo "<";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label_element", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label_attributes", [])), "html", null, true);
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label_suffix", [])), "html", null, true);
                        echo "</";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label_element", [])), "html", null, true);
                        echo ">";
                    } else {
                        // line 83
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "label_suffix", [])), "html", null, true);
                    }
                }
                // line 86
                if ($this->getAttribute($context["field"], "element_type", [])) {
                    // line 87
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "element_type", [])), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "element_attributes", [])), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "content", [])), "html", null, true);
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "element_type", [])), "html", null, true);
                    echo ">";
                } else {
                    // line 89
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "content", [])), "html", null, true);
                }
                // line 91
                if ($this->getAttribute($context["field"], "wrapper_element", [])) {
                    // line 92
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["field"], "wrapper_element", [])), "html", null, true);
                    echo ">";
                }
                // line 94
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/themes/contrib/platon/templates/views/views-view-fields--opigno_training_catalog--training_catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 96,  228 => 94,  223 => 92,  221 => 91,  218 => 89,  208 => 87,  206 => 86,  201 => 83,  190 => 81,  188 => 80,  186 => 79,  180 => 77,  178 => 76,  175 => 75,  173 => 74,  169 => 73,  165 => 71,  158 => 69,  153 => 68,  148 => 67,  143 => 65,  141 => 64,  138 => 62,  133 => 60,  129 => 58,  123 => 55,  117 => 53,  115 => 52,  109 => 51,  107 => 50,  102 => 47,  91 => 45,  89 => 44,  87 => 43,  81 => 41,  79 => 40,  76 => 39,  74 => 38,  70 => 37,  66 => 36,  58 => 35,  55 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/themes/contrib/platon/templates/views/views-view-fields--opigno_training_catalog--training_catalogue.html.twig", "/var/www/html/profiles/opigno_lms/themes/contrib/platon/templates/views/views-view-fields--opigno_training_catalog--training_catalogue.html.twig");
    }
}
