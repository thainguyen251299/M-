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

/* default/layout/welcome_to_course.tpl */
class __TwigTemplate_ee4ba3e586e7e0c66ae6e9e4348b720803b4693285246aea2774d54cd148a7f2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"normal-message\">
  ";
        // line 2
        echo sprintf(get_lang("HelloXAsYouCanSeeYourCourseListIsEmpty"), $this->getAttribute(($context["_u"] ?? null), "complete_name", []));
        echo "

";
        // line 4
        if ((($context["count_courses"] ?? null) == 0)) {
            // line 5
            echo "    ";
            echo get_lang("PleaseAllowUsALittleTimeToSubscribeYouToOneOfOurCourses");
            echo "
";
        } else {
            // line 7
            echo "    ";
            if ( !api_get_configuration_value("hide_course_catalog_welcome")) {
                // line 8
                echo "        ";
                if ((api_get_setting("allow_students_to_browse_courses") == "true")) {
                    // line 9
                    echo "            ";
                    echo sprintf(get_lang("GoAheadAndBrowseOurCourseCatalogXOnceRegisteredYouWillSeeTheCourseHereX"), ($context["course_catalog_link"] ?? null), ($context["course_list_link"] ?? null));
                    echo "
            <a class=\"btn btn-primary btn-large\" href=\"";
                    // line 10
                    echo ($context["course_catalog_url"] ?? null);
                    echo "\">
                ";
                    // line 11
                    echo get_lang("CourseCatalog");
                    echo "
            </a>
        ";
                } else {
                    // line 14
                    echo "            ";
                    echo get_lang("PleaseAllowUsALittleTimeToSubscribeYouToOneOfOurCourses");
                    echo "
        ";
                }
                // line 16
                echo "    ";
            }
        }
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "default/layout/welcome_to_course.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  73 => 16,  67 => 14,  61 => 11,  57 => 10,  52 => 9,  49 => 8,  46 => 7,  40 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/welcome_to_course.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\layout\\welcome_to_course.tpl");
    }
}
