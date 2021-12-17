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

/* default//user_portal/classic_courses_with_category.tpl */
class __TwigTemplate_731a31254977e12bec34395702401186f8c5eaa1d04a3ebecefd96cb7af73b73 extends \Twig\Template
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
        $context["display"] = $this->loadTemplate(api_find_template("macro/macro.tpl"), "default//user_portal/classic_courses_with_category.tpl", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ( !twig_test_empty(($context["categories"] ?? null))) {
            // line 4
            echo "    <div class=\"classic-courses\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "            ";
                if ($this->getAttribute($context["category"], "courses", [])) {
                    // line 7
                    echo "                ";
                    ob_start(function () { return ''; });
                    // line 8
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "courses", []));
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
                        // line 9
                        echo "                    <div class=\"row\">
                        <div class=\"col-md-2\">
                            ";
                        // line 11
                        if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                            // line 12
                            echo "                                <span class=\"thumbnail\">
                                    ";
                            // line 13
                            if (($this->getAttribute($context["item"], "thumbnails", []) != "")) {
                                // line 14
                                echo "                                        <img src=\"";
                                echo $this->getAttribute($context["item"], "thumbnails", []);
                                echo "\" title=\"";
                                echo $this->getAttribute($context["item"], "title", []);
                                echo "\"
                                             alt=\"";
                                // line 15
                                echo $this->getAttribute($context["item"], "title", []);
                                echo "\"/>
                                    ";
                            } else {
                                // line 17
                                echo "                                        ";
                                echo Display::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", []));
                                echo "
                                    ";
                            }
                            // line 19
                            echo "                                </span>
                            ";
                        } else {
                            // line 21
                            echo "                                <a href=\"";
                            echo $this->getAttribute($context["item"], "link", []);
                            echo "\" class=\"thumbnail\">
                                    ";
                            // line 22
                            if (($this->getAttribute($context["item"], "thumbnails", []) != "")) {
                                // line 23
                                echo "                                        <img src=\"";
                                echo $this->getAttribute($context["item"], "thumbnails", []);
                                echo "\" title=\"";
                                echo $this->getAttribute($context["item"], "title", []);
                                echo "\"
                                             alt=\"";
                                // line 24
                                echo $this->getAttribute($context["item"], "title", []);
                                echo "\"/>
                                    ";
                            } else {
                                // line 26
                                echo "                                        ";
                                echo Display::get_image("blackboard.png", 48, $this->getAttribute($context["item"], "title", []));
                                echo "
                                    ";
                            }
                            // line 28
                            echo "                                </a>
                            ";
                        }
                        // line 30
                        echo "                        </div>
                        <div class=\"col-md-10\">
                            ";
                        // line 32
                        if (($this->getAttribute($context["item"], "edit_actions", []) != "")) {
                            // line 33
                            echo "                                <div class=\"pull-right\">
                                    ";
                            // line 34
                            if (($this->getAttribute($context["item"], "document", []) == "")) {
                                // line 35
                                echo "                                        <a class=\"btn btn-default btn-sm\" href=\"";
                                echo $this->getAttribute($context["item"], "edit_actions", []);
                                echo "\">
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                        </a>
                                    ";
                            } else {
                                // line 39
                                echo "                                        <div class=\"btn-group\" role=\"group\">
                                            <a class=\"btn btn-default btn-sm\" href=\"";
                                // line 40
                                echo $this->getAttribute($context["item"], "edit_actions", []);
                                echo "\">
                                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                            </a>
                                            ";
                                // line 43
                                echo $this->getAttribute($context["item"], "document", []);
                                echo "
                                        </div>
                                    ";
                            }
                            // line 46
                            echo "                                </div>
                            ";
                        }
                        // line 48
                        echo "                            <h4 class=\"course-items-title\">
                                ";
                        // line 49
                        ob_start(function () { return ''; });
                        // line 50
                        echo "                                    ";
                        if ((($this->getAttribute($context["item"], "visibility", []) == twig_constant("COURSE_VISIBILITY_CLOSED")) &&  !$this->getAttribute($context["item"], "current_user_is_teacher", []))) {
                            // line 51
                            echo "                                        ";
                            echo $this->getAttribute($context["item"], "title", []);
                            echo " ";
                            echo $this->getAttribute($context["item"], "code_course", []);
                            echo " ";
                            echo $this->getAttribute($context["item"], "url_marker", []);
                            echo "
                                    ";
                        } else {
                            // line 53
                            echo "                                        <a href=\"";
                            echo $this->getAttribute($context["item"], "link", []);
                            echo "\">
                                            ";
                            // line 54
                            echo $this->getAttribute($context["item"], "title", []);
                            echo " ";
                            echo $this->getAttribute($context["item"], "code_course", []);
                            echo " ";
                            echo $this->getAttribute($context["item"], "url_marker", []);
                            echo "
                                        </a>
                                        ";
                            // line 56
                            echo $this->getAttribute($context["item"], "notifications", []);
                            echo "
                                    ";
                        }
                        // line 58
                        echo "                                ";
                        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 59
                        echo "                                ";
                        echo Security::remove_XSS(($context["title"] ?? null));
                        echo "
                            </h4>
                            <div class=\"course-items-session\">
                                <div class=\"list-teachers\">
                                    ";
                        // line 63
                        if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", [])) > 0)) {
                            // line 64
                            echo "                                        <img src=\"";
                            echo Display::get_icon_path("teacher.png", 16);
                            echo "\" width=\"16\" height=\"16\">&nbsp;
                                        ";
                            // line 65
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                                // line 66
                                echo "                                            ";
                                $context["counter"] = (($context["counter"] ?? null) + 1);
                                // line 67
                                echo "                                            ";
                                if ((($context["counter"] ?? null) > 1)) {
                                    echo " | ";
                                }
                                // line 68
                                echo "                                            <a href=\"";
                                echo $this->getAttribute($context["teacher"], "url", []);
                                echo "\" class=\"ajax\"
                                               data-title=\"";
                                // line 69
                                echo $this->getAttribute($context["teacher"], "firstname", []);
                                echo " ";
                                echo $this->getAttribute($context["teacher"], "lastname", []);
                                echo "\">
                                                ";
                                // line 70
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
                            // line 73
                            echo "                                    ";
                        }
                        // line 74
                        echo "                                </div>

                                ";
                        // line 76
                        $this->loadTemplate(api_find_template("user_portal/course_student_info.tpl"), "default//user_portal/classic_courses_with_category.tpl", 76)->display(twig_array_merge($context, ["student_info" => $this->getAttribute($context["item"], "student_info", [])]));
                        // line 77
                        echo "                            </div>
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
                    // line 81
                    echo "                ";
                    $context["course_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 82
                    echo "
                ";
                    // line 83
                    echo $context["display"]->getcollapse(("course_category_" . $this->getAttribute(                    // line 84
$context["category"], "id_category", [])), ((($this->getAttribute(                    // line 85
$context["category"], "title_category", []) . "<div class=\"pull-right\">") . $this->getAttribute($context["category"], "collapsable_link", [])) . "</div>"),                     // line 86
($context["course_content"] ?? null), false, ($this->getAttribute(                    // line 88
$context["category"], "collapsed", []) == 0));
                    // line 90
                    echo "
            ";
                }
                // line 92
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "    </div>
";
        }
        // line 95
        echo "
";
    }

    public function getTemplateName()
    {
        return "default//user_portal/classic_courses_with_category.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 95,  326 => 93,  312 => 92,  308 => 90,  306 => 88,  305 => 86,  304 => 85,  303 => 84,  302 => 83,  299 => 82,  296 => 81,  279 => 77,  277 => 76,  273 => 74,  270 => 73,  259 => 70,  253 => 69,  248 => 68,  243 => 67,  240 => 66,  236 => 65,  231 => 64,  229 => 63,  221 => 59,  218 => 58,  213 => 56,  204 => 54,  199 => 53,  189 => 51,  186 => 50,  184 => 49,  181 => 48,  177 => 46,  171 => 43,  165 => 40,  162 => 39,  154 => 35,  152 => 34,  149 => 33,  147 => 32,  143 => 30,  139 => 28,  133 => 26,  128 => 24,  121 => 23,  119 => 22,  114 => 21,  110 => 19,  104 => 17,  99 => 15,  92 => 14,  90 => 13,  87 => 12,  85 => 11,  81 => 9,  63 => 8,  60 => 7,  57 => 6,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default//user_portal/classic_courses_with_category.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\user_portal\\classic_courses_with_category.tpl");
    }
}
