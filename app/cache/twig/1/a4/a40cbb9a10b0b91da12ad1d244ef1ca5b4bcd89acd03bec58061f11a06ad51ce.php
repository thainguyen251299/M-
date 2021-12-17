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

/* default/my_space/index.tpl */
class __TwigTemplate_617c30b458e8b48b907daafcbabf82dc532591e57e1c0a4e7673251e2a557675 extends \Twig\Template
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
        echo "<div class=\"search-student\">
    ";
        // line 2
        echo ($context["form"] ?? null);
        echo "
</div>

<div class=\"page-header\">
    <h4>
        ";
        // line 7
        echo get_lang("Overview");
        echo "
    </h4>
</div>

<div class=\"view-global-followed\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"card\">
                <div class=\"content\">
                    <div class=\"card-title\"><a href=\"";
        // line 16
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/student.php\">";
        echo get_lang("FollowedStudents");
        echo "</a></div>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <div class=\"icon-big icon-student text-center\">
                                <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                        <div class=\"col-xs-7\">
                            <div class=\"numbers\">
                                <h2>";
        // line 25
        echo ($context["students"] ?? null);
        echo "</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"card\">
                <div class=\"content\">
                    <div class=\"card-title\"><a href=\"";
        // line 35
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/users.php?status=";
        echo ($context["studentboss"] ?? null);
        echo "\">";
        echo get_lang("FollowedStudentBosses");
        echo "</a></div>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <div class=\"icon-big icon-studentboss text-center\">
                                <i class=\"fa fa-address-book\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                        <div class=\"col-xs-7\">
                            <div class=\"numbers\">
                                <h2>";
        // line 44
        echo ($context["studentbosses"] ?? null);
        echo "</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"card\">
                <div class=\"content\">
                    <div class=\"card-title\"><a href=\"";
        // line 54
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/teachers.php\">";
        echo get_lang("FollowedTeachers");
        echo "</a></div>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <div class=\"icon-big icon-teachers text-center\">
                                <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                        <div class=\"col-xs-7\">
                            <div class=\"numbers\">
                                <h2>";
        // line 63
        echo ($context["numberTeachers"] ?? null);
        echo "</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"card\">
                <div class=\"content\">
                    <div class=\"card-title\"><a href=\"";
        // line 73
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/users.php?status=";
        echo ($context["drh"] ?? null);
        echo "\">";
        echo get_lang("FollowedHumanResources");
        echo "</a></div>
                    <div class=\"row\">
                        <div class=\"col-xs-5\">
                            <div class=\"icon-big icon-humanresources text-center\">
                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                        <div class=\"col-xs-7\">
                            <div class=\"numbers\">
                                <h2>";
        // line 82
        echo ($context["humanresources"] ?? null);
        echo "</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"view-global\">
    <div class=\"panel panel-default panel-view\">
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-3\">
                    <div class=\"easy-donut\">
                        <div id=\"easypiechart-blue\" class=\"easypiechart\" data-percent=\"";
        // line 97
        echo ($context["total_user"] ?? null);
        echo "\">
                            <span class=\"percent\">";
        // line 98
        echo ($context["total_user"] ?? null);
        echo "</span>
                        </div>
                        <div class=\"easypiechart-link\">
                            <a class=\"btn btn-default\" href=\"";
        // line 101
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/users.php\">
                                ";
        // line 102
        echo get_lang("FollowedUsers");
        echo "
                            </a>
                        </div>
                    </div>
                    ";
        // line 106
        if ((($this->getAttribute(($context["_u"] ?? null), "status", []) == 1) && $this->getAttribute(($context["_u"] ?? null), "is_admin", []))) {
            // line 107
            echo "                        <a href=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "admin/dashboard_add_users_to_user.php?user=";
            echo $this->getAttribute(($context["_u"] ?? null), "id", []);
            echo "\" class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 111
        echo "                </div>
                <div class=\"col-lg-3 col-sm-3\">
                    <div class=\"easy-donut\">
                        <div id=\"easypiechart-orange\" class=\"easypiechart\" data-percent=\"";
        // line 114
        echo $this->getAttribute(($context["stats"] ?? null), "courses", []);
        echo "\">
                            <span class=\"percent\">";
        // line 115
        echo $this->getAttribute(($context["stats"] ?? null), "courses", []);
        echo "</span>
                        </div>
                        <div class=\"easypiechart-link\">
                            <a class=\"btn btn-default\" href=\"";
        // line 118
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/course.php\">
                                ";
        // line 119
        echo get_lang("AssignedCourses");
        echo "
                            </a>
                        </div>
                    </div>
                    ";
        // line 123
        if (($this->getAttribute(($context["_u"] ?? null), "status", []) == 1)) {
            // line 124
            echo "                        <a href=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "mySpace/course.php\" class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 128
        echo "                </div>
                <div class=\"col-lg-3 col-sm-3\">
                    <div  class=\"easy-donut\">
                        <div id=\"easypiechart-teal\" class=\"easypiechart\" data-percent=\"";
        // line 131
        echo $this->getAttribute(($context["stats"] ?? null), "assigned_courses", []);
        echo "\">
                            <span class=\"percent\">";
        // line 132
        echo $this->getAttribute(($context["stats"] ?? null), "assigned_courses", []);
        echo "</span>
                        </div>
                        <div class=\"easypiechart-link\">
                            <a class=\"btn btn-default\" href=\"";
        // line 135
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/course.php?follow\">";
        echo get_lang("FollowedCourses");
        echo "</a>
                        </div>
                    </div>
                    ";
        // line 138
        if (($this->getAttribute(($context["_u"] ?? null), "status", []) == 1)) {
            // line 139
            echo "                        <a href=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "mySpace/course.php?follow\" class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 143
        echo "                </div>
                <div class=\"col-lg-3 col-sm-3\">
                    <div class=\"easy-donut\">
                        <div id=\"easypiechart-red\" class=\"easypiechart\" data-percent=\"";
        // line 146
        echo twig_length_filter($this->env, $this->getAttribute(($context["stats"] ?? null), "session_list", []));
        echo "\">
                            <span class=\"percent\">";
        // line 147
        echo twig_length_filter($this->env, $this->getAttribute(($context["stats"] ?? null), "session_list", []));
        echo "</span>
                        </div>
                        <div class=\"easypiechart-link\">
                            <a class=\"btn btn-default\" href=\"";
        // line 150
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "mySpace/session.php\">";
        echo get_lang("FollowedSessions");
        echo "</a>
                        </div>
                    </div>
                    ";
        // line 153
        if ((($this->getAttribute(($context["_u"] ?? null), "status", []) == 1) && $this->getAttribute(($context["_u"] ?? null), "is_admin", []))) {
            // line 154
            echo "                        <a href=\"";
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "admin/dashboard_add_sessions_to_user.php?user=";
            echo $this->getAttribute(($context["_u"] ?? null), "id", []);
            echo "\" class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 158
        echo "                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"page-header\">
    <h4>
        ";
        // line 165
        echo ($context["title"] ?? null);
        echo "
    </h4>
</div>
<div class=\"report-section\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 175
        echo $this->getAttribute(($context["report"] ?? null), "AverageCoursePerStudent", []);
        echo "
                        </div>
                    </div>
                </div>
                <p>";
        // line 179
        echo get_lang("AverageCoursePerStudent");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 187
        echo $this->getAttribute(($context["report"] ?? null), "InactivesStudents", []);
        echo "
                        </div>
                    </div>
                </div>
                <p>";
        // line 191
        echo get_lang("InactivesStudents");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 199
        echo $this->getAttribute(($context["report"] ?? null), "AverageTimeSpentOnThePlatform", []);
        echo "
                        </div>
                    </div>
                </div>
                <p>";
        // line 203
        echo get_lang("AverageTimeSpentOnThePlatform");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 211
        echo $this->getAttribute(($context["report"] ?? null), "AverageProgressInLearnpath", []);
        echo "
                        </div>
                    </div>
                </div>
                <p>";
        // line 215
        echo get_lang("AverageProgressInLearnpath");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 223
        echo $this->getAttribute(($context["report"] ?? null), "AvgCourseScore", []);
        echo "
                        </div>

                    </div>
                </div>
                <p>";
        // line 228
        echo get_lang("AvgCourseScore");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 236
        echo $this->getAttribute(($context["report"] ?? null), "AveragePostsInForum", []);
        echo "
                        </div>

                    </div>
                </div>
                <p> ";
        // line 241
        echo get_lang("AveragePostsInForum");
        echo "</p>
            </div>
        </div>
        <div class=\"col-lg-3 col-sm-3\">
            <div class=\"item-report\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"item-report-number\">
                            ";
        // line 249
        echo $this->getAttribute(($context["report"] ?? null), "AverageAssignments", []);
        echo "
                        </div>

                    </div>
                </div>
                <p> ";
        // line 254
        echo get_lang("AverageAssignments");
        echo "</p>
            </div>
        </div>
    </div>
</div>

<script>
    \$(function() {
        \$('#easypiechart-teal').easyPieChart({
            scaleColor: false,
            barColor: '#1ebfae',
            lineWidth:8,
            trackColor: '#f2f2f2'
        });

        \$('#easypiechart-orange').easyPieChart({
            scaleColor: false,
            barColor: '#ffb53e',
            lineWidth:8,
            trackColor: '#f2f2f2'
        });

        \$('#easypiechart-red').easyPieChart({
            scaleColor: false,
            barColor: '#f9243f',
            lineWidth:8,
            trackColor: '#f2f2f2'
        });

        \$('#easypiechart-blue').easyPieChart({
            scaleColor: false,
            barColor: '#30a5ff',
            lineWidth:8,
            trackColor: '#f2f2f2'
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "default/my_space/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 254,  439 => 249,  428 => 241,  420 => 236,  409 => 228,  401 => 223,  390 => 215,  383 => 211,  372 => 203,  365 => 199,  354 => 191,  347 => 187,  336 => 179,  329 => 175,  316 => 165,  307 => 158,  297 => 154,  295 => 153,  287 => 150,  281 => 147,  277 => 146,  272 => 143,  264 => 139,  262 => 138,  254 => 135,  248 => 132,  244 => 131,  239 => 128,  231 => 124,  229 => 123,  222 => 119,  218 => 118,  212 => 115,  208 => 114,  203 => 111,  193 => 107,  191 => 106,  184 => 102,  180 => 101,  174 => 98,  170 => 97,  152 => 82,  136 => 73,  123 => 63,  109 => 54,  96 => 44,  80 => 35,  67 => 25,  53 => 16,  41 => 7,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/my_space/index.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\my_space\\index.tpl");
    }
}
