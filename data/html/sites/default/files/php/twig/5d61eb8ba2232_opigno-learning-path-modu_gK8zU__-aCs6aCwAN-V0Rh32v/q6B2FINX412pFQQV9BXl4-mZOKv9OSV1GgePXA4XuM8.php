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

/* profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-modules.html.twig */
class __TwigTemplate_eaf77f52e48ceb9c91d409ce646860bfe0d2c610a5c95cff26f96ecd43a68ba9 extends \Twig\Template
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
        echo "<!-- group/{group}/inner-modules -->

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
    apiBaseUrl: '";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "',
    moduleContext: ";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["module_context"] ?? null)), "html", null, true);
        echo ",
    viewType: 'activities',
    userHasInfoCard: '";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_has_info_card"] ?? null)), "html", null, true);
        echo "',
    hideInfocardUrl: '/opigno-group-manager/hide-info-card',
    getEntitiesUrl: '/group/%groupId/get-items',
    getEntitiesPositionsUrl: '/group/%groupId/get-positions',
    getModulesUrl: '/group/%groupId/modules/get-items',
    getActivitiesUrl: '/group/%moduleId/get-activities',
    getExtPackageFormUrl: '/module/%opigno_module/add-external-package',
    getExtPackagePptFormUrl: '/module/%opigno_module/add-external-package/ppt',
    updateActivityUrl: '/group/%moduleId/update-activity',
    deleteActivityUrl: '/group/%moduleId/delete-activity',
    getActivityTypesUrl: '/module/manager/get-activity-types',
    getActivityFormUrl: '/module/%opigno_module/item-form/%type/%item',
    getActivityPreviewUrl: '/module/manager/activity-preview/%opigno_activity',
    getActivityListUrl: '/module/%opigno_module/manager/get-activities-list',
    addActivityUrl: '/module/%opigno_module/add-activity/%opigno_activity',
    addActivitiesBankUrl: '/opigno_module/%opigno_module/activities-bank-lpm',
    updateWeightUrl: '/module/manager/update-weight',
    nextLink: '";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_link"] ?? null)), "html", null, true);
        echo "',
  };
</script>

<app-root class=\"d-block\">Loading app...</app-root>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  80 => 12,  75 => 10,  71 => 9,  67 => 8,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-modules.html.twig", "/var/www/html/profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/opigno-learning-path-modules.html.twig");
    }
}
