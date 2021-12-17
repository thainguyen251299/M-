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

/* default//user_portal/classic_courses_without_category.tpl */
class __TwigTemplate_8f1bb9596e43fbd3fa63f921e262aad4181cb4a24a287d26cf0edcd9c90ef420 extends \Twig\Template
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
        if ( !twig_test_empty(($context["courses"] ?? null))) {
            // line 2
            echo "    <div class=\"classic-courses\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
                // line 8
                if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                    // line 9
                    echo "                            <span class=\"thumbnail\">
                                ";
                    // line 10
                    if (($this->getAttribute($context["item"], "thumbnails", []) != "")) {
                        // line 11
                        echo "                                    <img src=\"";
                        echo $this->getAttribute($context["item"], "thumbnails", []);
                        echo "\" title=\"";
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "\"
                                         alt=\"";
                        // line 12
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "\"/>
                                ";
                    } else {
                        // line 14
                        echo "                                    ";
                        echo Display::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", []));
                        echo "
                                ";
                    }
                    // line 16
                    echo "                            </span>
                        ";
                } else {
                    // line 18
                    echo "                            <a href=\"";
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "\" class=\"thumbnail\">
                                ";
                    // line 19
                    if (($this->getAttribute($context["item"], "thumbnails", []) != "")) {
                        // line 20
                        echo "                                    <img src=\"";
                        echo $this->getAttribute($context["item"], "thumbnails", []);
                        echo "\" title=\"";
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "\"
                                         alt=\"";
                        // line 21
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "\"/>
                                ";
                    } else {
                        // line 23
                        echo "                                    ";
                        echo Display::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", []));
                        echo "
                                ";
                    }
                    // line 25
                    echo "                            </a>
                        ";
                }
                // line 27
                echo "                    </div>
                    <div class=\"col-md-10\">
                        <div class=\"pull-right\">
                            ";
                // line 30
                echo $this->getAttribute($context["item"], "unregister_button", []);
                echo "
                            ";
                // line 31
                if (($this->getAttribute($context["item"], "edit_actions", []) != "")) {
                    // line 32
                    echo "                                ";
                    if (($this->getAttribute($context["item"], "document", []) == "")) {
                        // line 33
                        echo "                                    <a class=\"btn btn-default btn-sm\" href=\"";
                        echo $this->getAttribute($context["item"], "edit_actions", []);
                        echo "\">
                                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                    </a>
                                ";
                    } else {
                        // line 37
                        echo "                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-default btn-sm\" href=\"";
                        // line 38
                        echo $this->getAttribute($context["item"], "edit_actions", []);
                        echo "\">
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                        ";
                        // line 41
                        echo $this->getAttribute($context["item"], "document", []);
                        echo "
                                    </div>
                                ";
                    }
                    // line 44
                    echo "                            ";
                }
                // line 45
                echo "                        </div>
                        <h4 class=\"course-items-title\">
                            ";
                // line 47
                if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                    // line 48
                    echo "                                ";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo " ";
                    echo $this->getAttribute($context["item"], "code_course", []);
                    echo " ";
                    echo $this->getAttribute($context["item"], "url_marker", []);
                    echo "
                            ";
                } else {
                    // line 50
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "\">
                                    ";
                    // line 51
                    echo $this->getAttribute($context["item"], "title", []);
                    echo " ";
                    echo $this->getAttribute($context["item"], "code_course", []);
                    echo "
                                </a>
                                ";
                    // line 53
                    echo $this->getAttribute($context["item"], "url_marker", []);
                    echo "
                                ";
                    // line 54
                    echo $this->getAttribute($context["item"], "notifications", []);
                    echo "
                                ";
                    // line 55
                    if ($this->getAttribute($context["item"], "is_special_course", [])) {
                        // line 56
                        echo "                                    ";
                        echo Display::get_image("klipper.png", 22, get_lang("CourseAutoRegister"));
                        echo "
                                ";
                    }
                    // line 58
                    echo "                            ";
                }
                // line 59
                echo "                        </h4>
                        <div class=\"course-items-session\">
                            <div class=\"list-teachers\">
                                ";
                // line 62
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", [])) > 0)) {
                    // line 63
                    echo "                                    ";
                    echo Display::get_image("teacher.png", 16, get_lang("Professor"));
                    echo "
                                    ";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 65
                        echo "                                        ";
                        $context["counter"] = (($context["counter"] ?? null) + 1);
                        // line 66
                        echo "                                        ";
                        if ((($context["counter"] ?? null) > 1)) {
                            echo " | ";
                        }
                        // line 67
                        echo "                                        <a href=\"";
                        echo $this->getAttribute($context["teacher"], "url", []);
                        echo "\" class=\"ajax\"
                                        data-title=\"";
                        // line 68
                        echo $this->getAttribute($context["teacher"], "firstname", []);
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", []);
                        echo "\">
                                            ";
                        // line 69
                        echo $this->getAttribute($context["teacher"], "firstname", []);
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", []);
                        echo "
                                        </a>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                                ";
                }
                // line 73
                echo "                            </div>

                            ";
                // line 75
                $this->loadTemplate(api_find_template("user_portal/course_student_info.tpl"), "default//user_portal/classic_courses_without_category.tpl", 75)->display(twig_array_merge($context, ["student_info" => $this->getAttribute($context["item"], "student_info", [])]));
                // line 76
                echo "                        </div>
                        <div class=\"category\">
                            ";
                // line 78
                echo $this->getAttribute($context["item"], "category", []);
                echo "
                        </div>
                        <div class=\"course_extrafields\">
                            ";
                // line 81
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "extrafields", [])) > 0)) {
                    // line 82
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extrafields", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["extrafield"]) {
                        // line 83
                        echo "                            ";
                        $context["counter"] = (($context["counter"] ?? null) + 1);
                        // line 84
                        echo "                            ";
                        if ((($context["counter"] ?? null) > 1)) {
                            echo " | ";
                        }
                        // line 85
                        echo "                            ";
                        echo $this->getAttribute($context["extrafield"], "text", []);
                        echo " : <strong>";
                        echo $this->getAttribute($context["extrafield"], "value", []);
                        echo "</strong>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extrafield'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "                            ";
                }
                // line 88
                echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default//user_portal/classic_courses_without_category.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 94,  297 => 88,  294 => 87,  283 => 85,  278 => 84,  275 => 83,  270 => 82,  268 => 81,  262 => 78,  258 => 76,  256 => 75,  252 => 73,  249 => 72,  238 => 69,  232 => 68,  227 => 67,  222 => 66,  219 => 65,  215 => 64,  210 => 63,  208 => 62,  203 => 59,  200 => 58,  194 => 56,  192 => 55,  188 => 54,  184 => 53,  177 => 51,  172 => 50,  162 => 48,  160 => 47,  156 => 45,  153 => 44,  147 => 41,  141 => 38,  138 => 37,  130 => 33,  127 => 32,  125 => 31,  121 => 30,  116 => 27,  112 => 25,  106 => 23,  101 => 21,  94 => 20,  92 => 19,  87 => 18,  83 => 16,  77 => 14,  72 => 12,  65 => 11,  63 => 10,  60 => 9,  58 => 8,  52 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default//user_portal/classic_courses_without_category.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\user_portal\\classic_courses_without_category.tpl");
    }
}
