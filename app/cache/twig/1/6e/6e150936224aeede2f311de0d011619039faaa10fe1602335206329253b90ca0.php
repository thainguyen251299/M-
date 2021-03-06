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

/* default/layout/topbar.tpl */
class __TwigTemplate_c941497f510b0ea90ec440e3e59e52a71bde7cfcb3f6eb6a53822cf3fa8a3898 extends \Twig\Template
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
        echo "<!-- Topbar -->
";
        // line 2
        if ((($context["show_toolbar"] ?? null) == 1)) {
            // line 3
            echo "<nav id=\"toolbar-admin\" class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
            // line 12
            echo $this->getAttribute(($context["_p"] ?? null), "web", []);
            echo "\">
                <img src=\"";
            // line 13
            echo Display::get_icon_path("icon-chamilo.png", 22);
            echo "\" title=\"";
            echo api_get_setting("siteName");
            echo "\">
            </a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
            // line 19
            echo $this->getAttribute(($context["_p"] ?? null), "web", []);
            echo "user_portal.php\"> ";
            echo get_lang("MyCourses");
            echo "</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
            // line 21
            echo get_lang("Tracking");
            echo "<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 23
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "mySpace/\">";
            echo get_lang("CoursesReporting");
            echo "</a></li>
                        <li><a href=\"";
            // line 24
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "mySpace/index.php?view=admin\">";
            echo get_lang("AdminReports");
            echo "</a></li>
                        <li><a href=\"";
            // line 25
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "tracking/exams.php\">";
            echo get_lang("ExamsReporting");
            echo "</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
            // line 27
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "dashboard/\">";
            echo get_lang("Dashboard");
            echo "</a></li>
                    </ul>
                </li>
                ";
            // line 30
            if ($this->getAttribute(($context["_u"] ?? null), "logged", [])) {
                // line 31
                echo "                ";
                if (($this->getAttribute(($context["_u"] ?? null), "is_admin", []) == 1)) {
                    // line 32
                    echo "                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 33
                    echo get_lang("Administration");
                    echo "<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
                    // line 35
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "admin/\">";
                    echo get_lang("Home");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 36
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "admin/user_list.php\">";
                    echo get_lang("UserList");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 37
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "admin/course_list.php\">";
                    echo get_lang("CourseList");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 38
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "session/session_list.php\">";
                    echo get_lang("SessionList");
                    echo "</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
                    // line 40
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "admin/settings.php\">";
                    echo get_lang("Settings");
                    echo "</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
                    // line 42
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "admin/settings.php?category=Plugins\">";
                    echo get_lang("Plugins");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 43
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "admin/settings.php?category=Regions\">";
                    echo get_lang("Regions");
                    echo "</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 48
                    echo get_lang("Add");
                    echo "<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
                    // line 50
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "admin/user_add.php\">";
                    echo get_lang("User");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 51
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "admin/course_add.php\">";
                    echo get_lang("Course");
                    echo "</a></li>
                        <li><a href=\"";
                    // line 52
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "session/session_add.php\">";
                    echo get_lang("Session");
                    echo "</a></li>
                    </ul>
                </li>
                ";
                }
                // line 56
                echo "            </ul>

            ";
                // line 58
                if (($this->getAttribute(($context["_u"] ?? null), "is_admin", []) == 1)) {
                    // line 59
                    echo "            <form class=\"navbar-form navbar-left\" role=\"search\" action=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                    echo "admin/user_list.php\" method=\"get\">
                <input type=\"text\" class=\"form-control\" placeholder=\"";
                    // line 60
                    echo get_lang("SearchUsers");
                    echo "\" name=\"keyword\">
                <button type=\"submit\" class=\"btn btn-primary\">";
                    // line 61
                    echo get_lang("Search");
                    echo "</button>
            </form>
            ";
                }
                // line 64
                echo "
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
                // line 66
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "index.php?logout=logout&uid=";
                echo $this->getAttribute(($context["_u"] ?? null), "user_id", []);
                echo "\">";
                echo get_lang("Logout");
                echo "</a></li>
            </ul>
            ";
            }
            // line 69
            echo "        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/topbar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 69,  212 => 66,  208 => 64,  202 => 61,  198 => 60,  193 => 59,  191 => 58,  187 => 56,  178 => 52,  172 => 51,  166 => 50,  161 => 48,  151 => 43,  145 => 42,  138 => 40,  131 => 38,  125 => 37,  119 => 36,  113 => 35,  108 => 33,  105 => 32,  102 => 31,  100 => 30,  92 => 27,  85 => 25,  79 => 24,  73 => 23,  68 => 21,  61 => 19,  50 => 13,  46 => 12,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/topbar.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\layout\\topbar.tpl");
    }
}
