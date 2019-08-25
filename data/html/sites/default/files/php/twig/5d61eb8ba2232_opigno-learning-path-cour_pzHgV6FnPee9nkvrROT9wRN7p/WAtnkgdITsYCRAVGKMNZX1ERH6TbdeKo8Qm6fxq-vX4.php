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

/* profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-courses.html.twig */
class __TwigTemplate_526f25e6ccb431ee1ecca46c6e02ff2935f275e0140462f5d64ea58454a64fcf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo "<!-- group/{group}/inner-courses -->

<base href=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["base_href"] ?? null))), "html", null, true);
        echo "\">

<script type=\"text/javascript\">
  window.appConfig = {
    formSubmitBtn: false,
    groupId: ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["learning_path_id"] ?? null)), "html", null, true);
        echo ",
    groupType: '";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_type"] ?? null)), "html", null, true);
        echo "',
    apiBaseUrl: '";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "',
    viewType: '";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_type"] ?? null)), "html", null, true);
        echo "',
    userHasInfoCard: '";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_has_info_card"] ?? null)), "html", null, true);
        echo "',
    hideInfocardUrl: '/opigno-group-manager/hide-info-card',
    getCourses: '/group/%groupId/courses/get-items',
    getEntitiesUrl: '/group/%groupId/get-items',
    getEntitiesPositionsUrl: '/group/%groupId/get-positions',
    setEntitiesPositionsUrl: '/group/%groupId/set-positions',
    getEntitiesTypesUrl: '/group/%groupId/get-item-types',
    getEntitiesAvailableUrl: '/group/%groupId/get-available-items',
    getEntityFormUrl: '/group/%groupId/item-form/%bundle/%entityId',
    getActivitiesUrl: '/group/%moduleId/get-activities',
    getGuidedNavigationUrl: '/group/%groupId/get-guided-navigation',
    getRequiredActivitiesUrl: '/group/%moduleId/get-activities-required',
    submitAddEntityFormUrl: '/group/%groupId/create-item/%bundle',
    addEntityUrl: '/group/%groupId/add-item',
    removeEntityUrl: '/group/%groupId/remove-item',
    addEntityLinkUrl: '/group/%groupId/add-link',
    updateEntityLinkUrl: '/group/%groupId/update-link',
    removeEntityLinkUrl: '/group/%groupId/remove-link',
    updateEntityMandatoryUrl: '/group/%groupId/update-mandatory',
    updateEntityMinScoreUrl: '/group/%groupId/update-min-score',
    updateEntitiesUrl: '/group/%groupId/update-entities',
    updateGuidedNavigationUrl: '/group/%groupId/update-guided-navigation',

    nextLink: '";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_link"] ?? null)), "html", null, true);
        echo "',
  };
</script>

<app-root class=\"d-block\">Loading app...</app-root>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-courses.html.twig", "/var/www/html/profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-courses.html.twig");
    }
}
