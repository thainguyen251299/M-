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

/* default/user_portal/classic_session.tpl */
class __TwigTemplate_03cc5d371c9991b063397ad9e8c6381a6864c227dfb72bae2292846aa170ba08 extends \Twig\Template
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
        $context["session_image"] = Display::get_image("window_list.png", 32, $this->getAttribute(($context["row"] ?? null), "title", []));
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["session"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 4
            echo "    <div class=\"panel panel-default\">
        ";
            // line 5
            $context["collapsable"] = "";
            // line 6
            echo "        ";
            if ( !$this->getAttribute($context["row"], "show_simple_session_info", [])) {
                // line 7
                echo "            ";
                if ($this->getAttribute($context["row"], "course_list_session_style", [])) {
                    // line 8
                    echo "                <div class=\"panel-heading\">
                    ";
                    // line 9
                    if ((($this->getAttribute($context["row"], "course_list_session_style", []) == 1) || ($this->getAttribute($context["row"], "course_list_session_style", []) == 2))) {
                        // line 10
                        echo "                        ";
                        // line 11
                        echo "                        ";
                        if ((($context["remove_session_url"] ?? null) == true)) {
                            // line 12
                            echo "                            ";
                            echo ($context["session_image"] ?? null);
                            echo " ";
                            echo $this->getAttribute($context["row"], "title", []);
                            echo "
                        ";
                        } else {
                            // line 14
                            echo "                            ";
                            // line 15
                            echo "                            ";
                            $context["session_link"] = (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", []));
                            // line 16
                            echo "                            ";
                            if ((($this->getAttribute($context["row"], "course_list_session_style", []) == 2) && (twig_length_filter($this->env, $this->getAttribute($context["row"], "courses", [])) == 1))) {
                                // line 17
                                echo "                                ";
                                // line 18
                                echo "                                ";
                                $context["session_link"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "courses", []), 0, []), "link", []);
                                // line 19
                                echo "                            ";
                            }
                            // line 20
                            echo "
                            <a href=\"";
                            // line 21
                            echo ($context["session_link"] ?? null);
                            echo "\">
                                ";
                            // line 22
                            echo ($context["session_image"] ?? null);
                            echo " ";
                            echo $this->getAttribute($context["row"], "title", []);
                            echo "
                            </a>
                        ";
                        }
                        // line 25
                        echo "                    ";
                    } elseif (($this->getAttribute($context["row"], "course_list_session_style", []) == 4)) {
                        // line 26
                        echo "                        ";
                        echo ($context["session_image"] ?? null);
                        echo " ";
                        echo $this->getAttribute($context["row"], "title", []);
                        echo "
                    ";
                    } elseif (($this->getAttribute(                    // line 27
$context["row"], "course_list_session_style", []) == 3)) {
                        // line 28
                        echo "                        ";
                        // line 29
                        echo "                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#page-content\" href=\"#collapse_";
                        echo $this->getAttribute($context["row"], "id", []);
                        echo "\"
                           aria-expanded=\"false\">
                            ";
                        // line 31
                        echo ($context["session_image"] ?? null);
                        echo " ";
                        echo $this->getAttribute($context["row"], "title", []);
                        echo "
                        </a>
                        ";
                        // line 33
                        if ($this->getAttribute($context["row"], "collapsable_link", [])) {
                            // line 34
                            echo "                            ";
                            if (($this->getAttribute($context["row"], "collapsed", []) == 1)) {
                                // line 35
                                echo "                                ";
                                $context["collapsable"] = "collapse";
                                // line 36
                                echo "                            ";
                            }
                            // line 37
                            echo "                        ";
                        } else {
                            // line 38
                            echo "                            ";
                            $context["collapsable"] = "collapse";
                            // line 39
                            echo "                        ";
                        }
                        // line 40
                        echo "                    ";
                    }
                    // line 41
                    echo "                    ";
                    if ($this->getAttribute($context["row"], "show_actions", [])) {
                        // line 42
                        echo "                        <div class=\"pull-right\">
                            <a href=\"";
                        // line 43
                        echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/resume_session.php?id_session=") . $this->getAttribute($context["row"], "id", []));
                        echo "\">
                                <img src=\"";
                        // line 44
                        echo Display::get_icon_path("edit.png", 22);
                        echo "\" width=\"22\" height=\"22\" alt=\"";
                        echo get_lang("Edit");
                        echo "\"
                                     title=\"";
                        // line 45
                        echo get_lang("Edit");
                        echo "\">
                            </a>
                        </div>
                    ";
                    }
                    // line 49
                    echo "                    ";
                    if ($this->getAttribute($context["row"], "collapsable_link", [])) {
                        // line 50
                        echo "                        <div class=\"pull-right\">
                            ";
                        // line 51
                        echo $this->getAttribute($context["row"], "collapsable_link", []);
                        echo "
                        </div>
                    ";
                    }
                    // line 54
                    echo "                </div>
            ";
                }
                // line 56
                echo "
            ";
                // line 57
                if ($this->getAttribute($context["row"], "collapsable_link", [])) {
                    // line 58
                    echo "                ";
                    if (($this->getAttribute($context["row"], "collapsed", []) == 1)) {
                        // line 59
                        echo "                    ";
                        $context["collapsable"] = "collapse";
                        // line 60
                        echo "                ";
                    }
                    // line 61
                    echo "            ";
                }
                // line 62
                echo "
            <div class=\"session panel-body ";
                // line 63
                echo ($context["collapsable"] ?? null);
                echo "\" id=\"collapse_";
                echo $this->getAttribute($context["row"], "id", []);
                echo "\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
                // line 66
                if ($this->getAttribute($context["row"], "show_description", [])) {
                    // line 67
                    echo "                            ";
                    echo $this->getAttribute($context["row"], "description", []);
                    echo "
                        ";
                }
                // line 69
                echo "                        <ul class=\"info-session list-inline\">
                            ";
                // line 70
                if ($this->getAttribute($context["row"], "coach_name", [])) {
                    // line 71
                    echo "                                <li>
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    ";
                    // line 73
                    echo $this->getAttribute($context["row"], "coach_name", []);
                    echo "
                                </li>
                            ";
                }
                // line 76
                echo "                            ";
                if ((($context["hide_session_dates_in_user_portal"] ?? null) == false)) {
                    // line 77
                    echo "                                ";
                    if ($this->getAttribute($context["row"], "date", [])) {
                        // line 78
                        echo "                                    <li>
                                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                        ";
                        // line 80
                        echo $this->getAttribute($context["row"], "date", []);
                        echo "
                                    </li>
                                ";
                    } elseif ($this->getAttribute(                    // line 82
$context["row"], "duration", [])) {
                        // line 83
                        echo "                                    <li>
                                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                        ";
                        // line 85
                        echo $this->getAttribute($context["row"], "duration", []);
                        echo "
                                    </li>
                                ";
                    }
                    // line 88
                    echo "                            ";
                }
                // line 89
                echo "                        </ul>
                        <div class=\"sessions-items\">
                        ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "courses", []));
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
                    // line 92
                    echo "                            <div class=\"courses\">
                                <div class=\"row\">
                                    <div class=\"col-md-2\">
                                        ";
                    // line 95
                    if ($this->getAttribute($context["item"], "requirements", [])) {
                        // line 96
                        echo "                                            <span class=\"thumbnail\">
                                                ";
                        // line 97
                        echo $this->getAttribute($context["item"], "html_image", []);
                        echo "
                                            </span>
                                        ";
                    } else {
                        // line 100
                        echo "                                            <a href=\"";
                        echo $this->getAttribute($context["item"], "link", []);
                        echo "\" class=\"thumbnail\">
                                                ";
                        // line 101
                        echo $this->getAttribute($context["item"], "html_image", []);
                        echo "
                                            </a>
                                        ";
                    }
                    // line 104
                    echo "                                    </div>
                                    <div class=\"col-md-10\">
                                        <div class=\"pull-right\">
                                            ";
                    // line 107
                    echo $this->getAttribute($context["item"], "unregister_button", []);
                    echo "
                                        </div>
                                        ";
                    // line 109
                    if ($this->getAttribute($context["item"], "requirements", [])) {
                        // line 110
                        echo "                                            <h4>";
                        echo $this->getAttribute($context["item"], "name", []);
                        echo "</h4>
                                        ";
                    } else {
                        // line 112
                        echo "                                            <h4>";
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "</h4>
                                        ";
                    }
                    // line 114
                    echo "
                                         <div class=\"list-teachers\">
                                            ";
                    // line 116
                    echo $this->getAttribute($context["item"], "requirements", []);
                    echo "

                                            ";
                    // line 118
                    if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "coaches", [])) > 0)) {
                        // line 119
                        echo "                                                <img src=\"";
                        echo Display::get_icon_path("teacher.png", 16);
                        echo "\" width=\"16\" height=\"16\">
                                                ";
                        // line 120
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "coaches", []));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                            // line 121
                            echo "                                                    ";
                            echo ((($this->getAttribute($context["loop"], "index", []) > 1)) ? (" | ") : (""));
                            echo "
                                                    <a href=\"";
                            // line 122
                            echo (($this->getAttribute(($context["_p"] ?? null), "web_ajax", []) . "user_manager.ajax.php?") . twig_urlencode_filter(["a" => "get_user_popup", "user_id" => $this->getAttribute($context["coach"], "user_id", []), "session_id" => $this->getAttribute($context["row"], "id", []), "course_id" => $this->getAttribute($context["item"], "real_id", [])]));
                            echo "\"
                                                       data-title=\"";
                            // line 123
                            echo $this->getAttribute($context["coach"], "full_name", []);
                            echo "\" class=\"ajax\">
                                                        ";
                            // line 124
                            echo $this->getAttribute($context["coach"], "firstname", []);
                            echo ", ";
                            echo $this->getAttribute($context["coach"], "lastname", []);
                            echo "
                                                    </a>
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 127
                        echo "                                            ";
                    }
                    // line 128
                    echo "                                        </div>
                                        <div class=\"category\">
                                            ";
                    // line 130
                    echo $this->getAttribute($context["item"], "category", []);
                    echo "
                                        </div>
                                        <div class=\"course_extrafields\">
                                            ";
                    // line 133
                    if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "extrafields", [])) > 0)) {
                        // line 134
                        echo "                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extrafields", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["extrafield"]) {
                            // line 135
                            echo "                                            ";
                            $context["counter"] = (($context["counter"] ?? null) + 1);
                            // line 136
                            echo "                                            ";
                            if ((($context["counter"] ?? null) > 1)) {
                                echo " | ";
                            }
                            // line 137
                            echo "                                            ";
                            echo $this->getAttribute($context["extrafield"], "text", []);
                            echo " : <strong>";
                            echo $this->getAttribute($context["extrafield"], "value", []);
                            echo "</strong>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extrafield'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 139
                        echo "                                            ";
                    }
                    // line 140
                    echo "                                        </div>

                                        ";
                    // line 142
                    $this->loadTemplate(api_find_template("user_portal/course_student_info.tpl"), "default/user_portal/classic_session.tpl", 142)->display(twig_array_merge($context, ["student_info" => $this->getAttribute($context["item"], "student_info", [])]));
                    // line 143
                    echo "                                    </div>
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
                // line 147
                echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 152
                echo "            <div class=\"panel-heading\">
                <a href=\"";
                // line 153
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", []));
                echo "\">
                    <img id=\"session_img_";
                // line 154
                echo $this->getAttribute($context["row"], "id", []);
                echo "\" src=\"";
                echo Display::get_icon_path("window_list.png", 32);
                echo "\" alt=\"";
                echo $this->getAttribute($context["row"], "title", []);
                echo "\"
                         title=\"";
                // line 155
                echo $this->getAttribute($context["row"], "title", []);
                echo "\">
                    ";
                // line 156
                echo $this->getAttribute($context["row"], "title", []);
                echo "
                </a>
            </div>
            <!-- view simple info -->
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <a class=\"thumbnail\" href=\"";
                // line 163
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", []));
                echo "\">
                            <img class=\"img-responsive\"
                                 src=\"";
                // line 165
                echo (($this->getAttribute($context["row"], "image", [])) ? (($this->getAttribute(($context["_p"] ?? null), "web_upload", []) . $this->getAttribute($context["row"], "image", []))) : (Display::get_icon_path("session_default.png")));
                echo "\"
                                 alt=\"";
                // line 166
                echo $this->getAttribute($context["row"], "title", []);
                echo "\" title=\"";
                echo $this->getAttribute($context["row"], "title", []);
                echo "\">
                        </a>
                    </div>
                    <div class=\"col-md-10\">
                        <div class=\"info-session\">
                            <p>";
                // line 171
                echo $this->getAttribute($context["row"], "subtitle", []);
                echo "</p>
                            ";
                // line 172
                if ($this->getAttribute($context["row"], "show_description", [])) {
                    // line 173
                    echo "                                <div class=\"description\">
                                    ";
                    // line 174
                    echo $this->getAttribute($context["row"], "description", []);
                    echo "
                                </div>
                            ";
                }
                // line 177
                echo "                        </div>
                    </div>
                </div>
            </div>
            <!-- end view simple info -->
        ";
            }
            // line 183
            echo "    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/user_portal/classic_session.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 183,  554 => 177,  548 => 174,  545 => 173,  543 => 172,  539 => 171,  529 => 166,  525 => 165,  520 => 163,  510 => 156,  506 => 155,  498 => 154,  494 => 153,  491 => 152,  484 => 147,  467 => 143,  465 => 142,  461 => 140,  458 => 139,  447 => 137,  442 => 136,  439 => 135,  434 => 134,  432 => 133,  426 => 130,  422 => 128,  419 => 127,  400 => 124,  396 => 123,  392 => 122,  387 => 121,  370 => 120,  365 => 119,  363 => 118,  358 => 116,  354 => 114,  348 => 112,  342 => 110,  340 => 109,  335 => 107,  330 => 104,  324 => 101,  319 => 100,  313 => 97,  310 => 96,  308 => 95,  303 => 92,  286 => 91,  282 => 89,  279 => 88,  273 => 85,  269 => 83,  267 => 82,  262 => 80,  258 => 78,  255 => 77,  252 => 76,  246 => 73,  242 => 71,  240 => 70,  237 => 69,  231 => 67,  229 => 66,  221 => 63,  218 => 62,  215 => 61,  212 => 60,  209 => 59,  206 => 58,  204 => 57,  201 => 56,  197 => 54,  191 => 51,  188 => 50,  185 => 49,  178 => 45,  172 => 44,  168 => 43,  165 => 42,  162 => 41,  159 => 40,  156 => 39,  153 => 38,  150 => 37,  147 => 36,  144 => 35,  141 => 34,  139 => 33,  132 => 31,  126 => 29,  124 => 28,  122 => 27,  115 => 26,  112 => 25,  104 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  89 => 17,  86 => 16,  83 => 15,  81 => 14,  73 => 12,  70 => 11,  68 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/user_portal/classic_session.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\user_portal\\classic_session.tpl");
    }
}
