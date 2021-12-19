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

/* default/layout/layout_2_col.tpl */
class __TwigTemplate_47a4d2279e4386cfd94c17a05b680b5bec5af1a4f20dae8ea70a6c8ea4923551 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'page_body' => [$this, 'block_page_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/page.tpl"), "default/layout/layout_2_col.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["display"] = $this->loadTemplate("default/macro/macro.tpl", "default/layout/layout_2_col.tpl", 2)->unwrap();
        // line 3
        $context["sidebar_hide"] = api_get_configuration_value("sidebar_hide");
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if (($context["plugin_main_top"] ?? null)) {
            // line 7
            echo "        ";
            echo $context["display"]->getpluginPanel("main-top", ($context["plugin_main_top"] ?? null));
            echo "
    ";
        }
        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-md-9 col-md-push-3\">
            <div class=\"page-content\">
                ";
        // line 12
        if (($context["plugin_content_top"] ?? null)) {
            // line 13
            echo "                    <div class=\"page-content-top\">
                        ";
            // line 14
            echo ($context["plugin_content_top"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 17
        echo "
                ";
        // line 18
        echo ($context["sniff_notification"] ?? null);
        echo "

                ";
        // line 20
        $this->displayBlock('page_body', $context, $blocks);
        // line 23
        echo "
                ";
        // line 24
        if (($context["home_welcome"] ?? null)) {
            // line 25
            echo "                    <article id=\"home-welcome\">
                        ";
            // line 26
            echo ($context["home_welcome"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 29
        echo "
                ";
        // line 30
        if (($context["home_include"] ?? null)) {
            // line 31
            echo "                <article id=\"home-include\">
                    ";
            // line 32
            echo ($context["home_include"] ?? null);
            echo "
                </article>
                ";
        }
        // line 35
        echo "

                ";
        // line 37
        if (($context["welcome_to_course_block"] ?? null)) {
            // line 38
            echo "                    <article id=\"homepage-course\">
                        ";
            // line 39
            echo ($context["welcome_to_course_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 42
        echo "
                ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "
                ";
        // line 51
        if (($context["announcements_block"] ?? null)) {
            // line 52
            echo "                    <article id=\"homepage-announcements\">
                        ";
            // line 53
            echo ($context["announcements_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 56
        echo "
                ";
        // line 57
        if (($context["course_category_block"] ?? null)) {
            // line 58
            echo "                    <article id=\"homepage-course-category\">
                        ";
            // line 59
            echo ($context["course_category_block"] ?? null);
            echo "
                    </article>
                ";
        }
        // line 62
        echo "                ";
        $this->loadTemplate(api_find_template("layout/hot_courses.tpl"), "default/layout/layout_2_col.tpl", 62)->display($context);
        // line 63
        echo "                ";
        $this->loadTemplate(api_find_template("session/sessions_current.tpl"), "default/layout/layout_2_col.tpl", 63)->display($context);
        // line 64
        echo "                ";
        if (($context["plugin_content_bottom"] ?? null)) {
            // line 65
            echo "                    <div id=\"plugin_content_bottom\">
                        ";
            // line 66
            echo ($context["plugin_content_bottom"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 69
        echo "            </div>
        </div>
        <div class=\"col-md-3 col-md-pull-9\">
            <div class=\"sidebar\">
                ";
        // line 73
        if (($context["plugin_menu_top"] ?? null)) {
            // line 74
            echo "                    ";
            echo $context["display"]->getpluginSidebar("sidebar-top", ($context["plugin_menu_top"] ?? null));
            echo "
                ";
        }
        // line 76
        echo "
                ";
        // line 77
        $this->loadTemplate(api_find_template("layout/login_form.tpl"), "default/layout/layout_2_col.tpl", 77)->display($context);
        // line 78
        echo "
                ";
        // line 79
        if ( !($context["sidebar_hide"] ?? null)) {
            // line 80
            echo "
                    ";
            // line 81
            if (($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1)) {
                // line 82
                echo "                        ";
                echo ($context["user_image_block"] ?? null);
                echo "
                    ";
            }
            // line 84
            echo "
                    <!-- BLOCK PROFILE -->
                    ";
            // line 86
            if (($context["profile_block"] ?? null)) {
                // line 87
                echo "                        ";
                echo $context["display"]->getcollapseMenu("profile", get_lang("Profile"), ($context["profile_block"] ?? null));
                echo "
                    ";
            }
            // line 89
            echo "
                    <!-- BLOCK COURSE -->
                    ";
            // line 91
            if (($context["course_block"] ?? null)) {
                // line 92
                echo "                        ";
                echo $context["display"]->getcollapseMenu("courses", get_lang("Courses"), ($context["course_block"] ?? null));
                echo "
                    ";
            }
            // line 94
            echo "
                    <!-- BLOCK SKILLS -->
                    ";
            // line 96
            if (($context["skills_block"] ?? null)) {
                // line 97
                echo "                        ";
                echo $context["display"]->getcollapseMenu("skills", get_lang("Skills"), ($context["skills_block"] ?? null));
                echo "
                    ";
            }
            // line 99
            echo "
                    <!-- BLOCK WORK -->
                    ";
            // line 101
            if (($context["student_publication_block"] ?? null)) {
                // line 102
                echo "                        ";
                echo $context["display"]->getcollapseMenu("student_publications", get_lang("StudentPublications"), ($context["student_publication_block"] ?? null));
                echo "
                    ";
            }
            // line 104
            echo "
                    ";
            // line 105
            if (($context["grade_book_sidebar"] ?? null)) {
                // line 106
                echo "                        <div class=\"panel-group\" id=\"skill\" role=\"tablist\" aria-multiselectable=\"true\">
                        <div class=\"panel panel-default\" id=\"gradebook_block\">
                            <div class=\"panel-heading\" role=\"tab\">
                                <h4 class=\"panel-title\">
                                    <a role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#skill\"
                                       href=\"#skillCollapse\"
                                       aria-expanded=\"true\"
                                       aria-controls=\"skillCollapse\">
                                        ";
                // line 115
                echo get_lang("Gradebook");
                echo "
                                    </a>
                                </h4>
                            </div>
                            <div style=\"\" aria-expanded=\"true\" id=\"skillCollapse\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                                <div class=\"panel-body\">
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item ";
                // line 122
                echo $this->getAttribute(($context["item"] ?? null), "class", []);
                echo "\">
                                            ";
                // line 123
                echo get_lang("Progress");
                echo " : ";
                echo ($context["grade_book_progress"] ?? null);
                echo " %
                                            <br />
                                            ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["grade_book_badge_list"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                    // line 126
                    echo "                                                <div class=\"badge_sidebar\">
                                                ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["badge"], "skills", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                        // line 128
                        echo "                                                    ";
                        if ($this->getAttribute($context["badge"], "finished", [])) {
                            // line 129
                            echo "                                                        <img class=\"badge_sidebar_image \" src =\"";
                            echo $this->getAttribute($context["skill"], "icon_big", []);
                            echo "\" />
                                                    ";
                        } else {
                            // line 131
                            echo "                                                        <img class=\"badge_sidebar_image badge_sidebar_image_transparency\"
                                                             src = \"";
                            // line 132
                            echo $this->getAttribute($context["skill"], "icon_big", []);
                            echo "\" />
                                                    ";
                        }
                        // line 134
                        echo "                                                    <div class=\"badge_sidebar_title\">
                                                    ";
                        // line 135
                        echo $this->getAttribute($context["skill"], "name", []);
                        echo "
                                                    </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 147
            echo "                    ";
            echo ($context["certificates_search_block"] ?? null);
            echo "
                    <!-- BLOCK NOTICE -->
                    ";
            // line 149
            if (($context["notice_block"] ?? null)) {
                // line 150
                echo "                        ";
                echo $context["display"]->getcollapse("notice", get_lang("Notice"), ($context["notice_block"] ?? null));
                echo "
                    ";
            }
            // line 152
            echo "                    <!-- BLOCK HELP -->
                    ";
            // line 153
            if (($context["help_block"] ?? null)) {
                // line 154
                echo "                        ";
                echo $context["display"]->getcollapse("help", get_lang("MenuGeneral"), ($context["help_block"] ?? null), true);
                echo "
                    ";
            }
            // line 156
            echo "                    <!-- BLOCK LINKS NAVIGATION -->
                    ";
            // line 157
            if (($context["navigation_links"] ?? null)) {
                // line 158
                echo "                        ";
                echo $context["display"]->getcollapseFor("navigation_sidebar", get_lang("MainNavigation"), ($context["navigation_links"] ?? null));
                echo "
                    ";
            }
            // line 160
            echo "                    ";
            echo ($context["search_block"] ?? null);
            echo "
                    ";
            // line 161
            echo ($context["classes_block"] ?? null);
            echo "

                    ";
            // line 163
            if (($context["plugin_menu_bottom"] ?? null)) {
                // line 164
                echo "                        ";
                echo $context["display"]->getpluginSidebar("sidebar-bottom", ($context["plugin_menu_bottom"] ?? null));
                echo "
                    ";
            }
            // line 166
            echo "                ";
        }
        // line 167
        echo "            </div>
        </div>
    </div>
    ";
        // line 170
        if (($context["plugin_main_bottom"] ?? null)) {
            // line 171
            echo "        ";
            echo $context["display"]->getpluginPanel("main-bottom", ($context["plugin_main_bottom"] ?? null));
            echo "
    ";
        }
    }

    // line 20
    public function block_page_body($context, array $blocks = [])
    {
        // line 21
        echo "                    ";
        $this->loadTemplate(api_find_template("layout/page_body.tpl"), "default/layout/layout_2_col.tpl", 21)->display($context);
        // line 22
        echo "                ";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        // line 44
        echo "                    ";
        if ( !(null === ($context["content"] ?? null))) {
            // line 45
            echo "                        <section id=\"page\" class=\"";
            echo ($context["course_history_page"] ?? null);
            echo "\">
                            ";
            // line 46
            echo ($context["content"] ?? null);
            echo "
                        </section>
                    ";
        }
        // line 49
        echo "                ";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_2_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 49,  446 => 46,  441 => 45,  438 => 44,  435 => 43,  431 => 22,  428 => 21,  425 => 20,  417 => 171,  415 => 170,  410 => 167,  407 => 166,  401 => 164,  399 => 163,  394 => 161,  389 => 160,  383 => 158,  381 => 157,  378 => 156,  372 => 154,  370 => 153,  367 => 152,  361 => 150,  359 => 149,  353 => 147,  344 => 140,  337 => 138,  328 => 135,  325 => 134,  320 => 132,  317 => 131,  311 => 129,  308 => 128,  304 => 127,  301 => 126,  297 => 125,  290 => 123,  286 => 122,  276 => 115,  265 => 106,  263 => 105,  260 => 104,  254 => 102,  252 => 101,  248 => 99,  242 => 97,  240 => 96,  236 => 94,  230 => 92,  228 => 91,  224 => 89,  218 => 87,  216 => 86,  212 => 84,  206 => 82,  204 => 81,  201 => 80,  199 => 79,  196 => 78,  194 => 77,  191 => 76,  185 => 74,  183 => 73,  177 => 69,  171 => 66,  168 => 65,  165 => 64,  162 => 63,  159 => 62,  153 => 59,  150 => 58,  148 => 57,  145 => 56,  139 => 53,  136 => 52,  134 => 51,  131 => 50,  129 => 43,  126 => 42,  120 => 39,  117 => 38,  115 => 37,  111 => 35,  105 => 32,  102 => 31,  100 => 30,  97 => 29,  91 => 26,  88 => 25,  86 => 24,  83 => 23,  81 => 20,  76 => 18,  73 => 17,  67 => 14,  64 => 13,  62 => 12,  57 => 9,  51 => 7,  48 => 6,  45 => 5,  41 => 1,  39 => 3,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/layout_2_col.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\layout\\layout_2_col.tpl");
    }
}
