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

/* default/user_portal/course_student_info.tpl */
class __TwigTemplate_19e9e36b8fdf96673a2ba2326ab83a7cd692a7434199e87d8802551a8a111203 extends \Twig\Template
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
        if (($context["student_info"] ?? null)) {
            // line 2
            echo "    ";
            if ((( !(null === $this->getAttribute(($context["student_info"] ?? null), "progress", [])) ||  !(null === $this->getAttribute(($context["student_info"] ?? null), "score", []))) ||  !(null === $this->getAttribute(($context["student_info"] ?? null), "certificate", [])))) {
                // line 3
                echo "        ";
                $context["num_columns"] = (((((null === $this->getAttribute(($context["student_info"] ?? null), "progress", []))) ? (0) : (1)) + (((null === $this->getAttribute(($context["student_info"] ?? null), "score", []))) ? (0) : (1))) + (((null === $this->getAttribute(($context["student_info"] ?? null), "certificate", []))) ? (0) : (1)));
                // line 4
                echo "        <div class=\"course-student-info\">
            <div class=\"student-info\">
                <hr>
                <div class=\"row\">
                    ";
                // line 8
                if ( !(null === $this->getAttribute(($context["student_info"] ?? null), "progress", []))) {
                    // line 9
                    echo "                        <div class=\"";
                    echo (((($context["num_columns"] ?? null) == 1)) ? ("col-xs-12") : ((((($context["num_columns"] ?? null) == 2)) ? ("col-xs-9") : ("col-xs-6"))));
                    echo "\">
                            <strong>";
                    // line 10
                    echo get_lang("CourseAdvance");
                    echo "</strong>
                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                     aria-valuenow=\"";
                    // line 13
                    echo $this->getAttribute(($context["student_info"] ?? null), "progress", []);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"
                                     style=\"width: ";
                    // line 14
                    echo $this->getAttribute(($context["student_info"] ?? null), "progress", []);
                    echo "%;\">
                                    ";
                    // line 15
                    echo sprintf(get_lang("XPercentCompleted"), $this->getAttribute(($context["student_info"] ?? null), "progress", []));
                    echo "
                                </div>
                            </div>
                        </div>
                    ";
                }
                // line 20
                echo "                    ";
                if ( !(null === $this->getAttribute(($context["student_info"] ?? null), "score", []))) {
                    // line 21
                    echo "                        <div class=\"col-xs-3\">
                            <div>";
                    // line 22
                    echo sprintf(get_lang("StudentCourseScoreX"), $this->getAttribute(($context["student_info"] ?? null), "score", []));
                    echo "</div>
                        </div>
                    ";
                }
                // line 25
                echo "                    ";
                if ( !(null === $this->getAttribute(($context["student_info"] ?? null), "certificate", []))) {
                    // line 26
                    echo "                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-certificate text-warning\" aria-hidden=\"true\"></i>
                            ";
                    // line 28
                    echo sprintf(get_lang("StudentCourseCertificateX"), $this->getAttribute(($context["student_info"] ?? null), "certificate", []));
                    echo "
                        </div>
                    ";
                }
                // line 31
                echo "                </div>
            </div>
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/user_portal/course_student_info.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  92 => 28,  88 => 26,  85 => 25,  79 => 22,  76 => 21,  73 => 20,  65 => 15,  61 => 14,  57 => 13,  51 => 10,  46 => 9,  44 => 8,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/user_portal/course_student_info.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\user_portal\\course_student_info.tpl");
    }
}
