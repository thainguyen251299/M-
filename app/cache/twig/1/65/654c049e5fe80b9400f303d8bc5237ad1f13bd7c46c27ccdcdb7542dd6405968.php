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

/* default/learnpath/list.tpl */
class __TwigTemplate_c1990cd6f8ad0f8e2c1a860be78f7a444f93d1ff461a271a578be8c39a88b407 extends \Twig\Template
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
        echo "<script>
    function confirmation(name) {
        if (confirm(\"";
        // line 3
        echo get_lang("AreYouSureToDeleteJS");
        echo " \\\"\" + name + \"\\\" ?\")) {
            return true;
        } else {
            return false;
        }
    }
</script>
";
        // line 10
        $context["configuration"] = api_get_configuration_value("lp_category_accordion");
        // line 11
        echo "<div class=\"lp-accordion panel-group\" id=\"lp-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lp_data"]) {
            // line 13
            echo "        ";
            $context["show_category"] = true;
            // line 14
            echo "
        ";
            // line 15
            if ((($context["filtered_category"] ?? null) && (($context["filtered_category"] ?? null) != $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", [])))) {
                // line 16
                echo "            ";
                $context["show_category"] = false;
                // line 17
                echo "        ";
            }
            // line 18
            echo "
        ";
            // line 19
            if (($context["show_category"] ?? null)) {
                // line 20
                echo "            ";
                if ((($context["configuration"] ?? null) == 0)) {
                    // line 21
                    echo "                <!--- old view -->
                ";
                    // line 22
                    if (((twig_length_filter($this->env, ($context["categories"] ?? null)) > 1) && $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []))) {
                        // line 23
                        echo "                    ";
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 24
                            echo "                        <h3 class=\"page-header\">
                            ";
                            // line 25
                            echo twig_trim_filter($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getName", [], "method"));
                            echo "

                            ";
                            // line 27
                            if ($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "sessionId", [])) {
                                // line 28
                                echo "                                ";
                                echo ($context["session_star_icon"] ?? null);
                                echo "
                            ";
                            }
                            // line 30
                            echo "
                            ";
                            // line 31
                            if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method") > 0)) {
                                // line 32
                                echo "                                ";
                                if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "sessionId", []) == $this->getAttribute(($context["_c"] ?? null), "session_id", []))) {
                                    // line 33
                                    echo "                                    <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=add_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                    echo "\"
                                       title=\"";
                                    // line 34
                                    echo get_lang("Edit");
                                    echo "\">
                                        <img src=\"";
                                    // line 35
                                    echo Display::get_icon_path("edit.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Edit");
                                    echo "\">
                                    </a>

                                    ";
                                    // line 38
                                    if ($this->getAttribute(($context["subscription_settings"] ?? null), "allow_add_users_to_lp_category", [])) {
                                        // line 39
                                        echo "                                        <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=add_users_to_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                        echo "\"
                                           title=\"";
                                        // line 40
                                        echo get_lang("AddUsers");
                                        echo "\">
                                            <img src=\"";
                                        // line 41
                                        echo Display::get_icon_path("user.png");
                                        echo "\" alt=\"";
                                        echo get_lang("AddUsers");
                                        echo "\">
                                        </a>
                                    ";
                                    }
                                    // line 44
                                    echo "
                                    ";
                                    // line 45
                                    if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "sessionId", []) == $this->getAttribute(($context["_c"] ?? null), "session_id", []))) {
                                        // line 46
                                        echo "                                        ";
                                        if ((($this->getAttribute($context["loop"], "index0", []) == 1) || (($context["first_session_category"] ?? null) == $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", [])))) {
                                            // line 47
                                            echo "                                            <a href=\"#\">
                                                <img src=\"";
                                            // line 48
                                            echo Display::get_icon_path("up_na.png");
                                            echo "\" alt=\"";
                                            echo get_lang("Move");
                                            echo "\">
                                            </a>
                                        ";
                                        } else {
                                            // line 51
                                            echo "                                            <a href=\"";
                                            echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=move_up_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                            echo "\"
                                               title=\"";
                                            // line 52
                                            echo get_lang("Move");
                                            echo "\">
                                                <img src=\"";
                                            // line 53
                                            echo Display::get_icon_path("up.png");
                                            echo "\" alt=\"";
                                            echo get_lang("Move");
                                            echo "\">
                                            </a>
                                        ";
                                        }
                                        // line 56
                                        echo "
                                        ";
                                        // line 57
                                        if (((twig_length_filter($this->env, ($context["data"] ?? null)) - 1) == $this->getAttribute($context["loop"], "index0", []))) {
                                            // line 58
                                            echo "                                            <a href=\"#\">
                                                <img src=\"";
                                            // line 59
                                            echo Display::get_icon_path("down_na.png");
                                            echo "\" alt=\"";
                                            echo get_lang("Move");
                                            echo "\">
                                            </a>
                                        ";
                                        } else {
                                            // line 62
                                            echo "                                            <a href=\"";
                                            echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=move_down_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                            echo "\"
                                               title=\"";
                                            // line 63
                                            echo get_lang("Move");
                                            echo "\">
                                                <img src=\"";
                                            // line 64
                                            echo Display::get_icon_path("down.png");
                                            echo "\" alt=\"";
                                            echo get_lang("Move");
                                            echo "\">
                                            </a>
                                        ";
                                        }
                                        // line 67
                                        echo "                                    ";
                                    }
                                    // line 68
                                    echo "                                ";
                                }
                                // line 69
                                echo "
";
                                // line 71
                                echo "                                    ";
                                if (($this->getAttribute($context["lp_data"], "category_visibility", []) == 0)) {
                                    // line 72
                                    echo "                                        <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 1]));
                                    echo "\"
                                           title=\"";
                                    // line 73
                                    echo get_lang("Show");
                                    echo "\">
                                            <img src=\"";
                                    // line 74
                                    echo Display::get_icon_path("invisible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Show");
                                    echo "\">
                                        </a>
                                    ";
                                } else {
                                    // line 77
                                    echo "                                        <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 0]));
                                    echo "\"
                                           title=\"";
                                    // line 78
                                    echo get_lang("Hide");
                                    echo "\">
                                            <img src=\"";
                                    // line 79
                                    echo Display::get_icon_path("visible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Hide");
                                    echo "\">
                                        </a>
                                    ";
                                }
                                // line 83
                                echo "
";
                                // line 85
                                echo "                                    ";
                                if (($this->getAttribute($context["lp_data"], "category_is_published", []) == 0)) {
                                    // line 86
                                    echo "                                        <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 1]));
                                    echo "\"
                                           title=\"";
                                    // line 87
                                    echo get_lang("LearnpathPublish");
                                    echo "\">
                                            <img src=\"";
                                    // line 88
                                    echo Display::get_icon_path("lp_publish_na.png");
                                    echo "\"
                                                 alt=\"";
                                    // line 89
                                    echo get_lang("LearnpathPublish");
                                    echo "\">
                                        </a>
                                    ";
                                } else {
                                    // line 92
                                    echo "                                        <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 0]));
                                    echo "\"
                                           title=\"";
                                    // line 93
                                    echo get_lang("LearnpathDoNotPublish");
                                    echo "\">
                                            <img src=\"";
                                    // line 94
                                    echo Display::get_icon_path("lp_publish.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Hide");
                                    echo "\">
                                        </a>
                                    ";
                                }
                                // line 98
                                echo "
                                ";
                                // line 99
                                if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "sessionId", []) == $this->getAttribute(($context["_c"] ?? null), "session_id", []))) {
                                    // line 100
                                    echo "                                    <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=delete_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                    echo "\"
                                       title=\"";
                                    // line 101
                                    echo get_lang("Delete");
                                    echo "\">
                                        <img src=\"";
                                    // line 102
                                    echo Display::get_icon_path("delete.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Delete");
                                    echo "\">
                                    </a>
                                ";
                                }
                                // line 105
                                echo "                            ";
                            }
                            // line 106
                            echo "                        </h3>
                    ";
                        } elseif ( !twig_test_empty($this->getAttribute(                        // line 107
$context["lp_data"], "lp_list", []))) {
                            // line 108
                            echo "                        <h3 class=\"page-header\">";
                            echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getName", [], "method");
                            echo "</h3>
                    ";
                        }
                        // line 110
                        echo "                ";
                    }
                    // line 111
                    echo "
                ";
                    // line 112
                    if ($this->getAttribute($context["lp_data"], "lp_list", [])) {
                        // line 113
                        echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-striped\">
                            <thead>
                            <tr>
                                <th>
                                    ";
                        // line 118
                        echo get_lang("Title");
                        echo "
                                </th>
                                ";
                        // line 120
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 121
                            echo "                                    <th>";
                            echo get_lang("PublicationDate");
                            echo "</th>
                                    <th>";
                            // line 122
                            echo get_lang("ExpirationDate");
                            echo "</th>
                                    <th>";
                            // line 123
                            echo get_lang("Progress");
                            echo "</th>
                                    ";
                            // line 124
                            if (($context["allow_min_time"] ?? null)) {
                                // line 125
                                echo "                                        <th>";
                                echo get_lang("TimeSpentTimeRequired");
                                echo "</th>
                                    ";
                            }
                            // line 127
                            echo "                                    <th>";
                            echo get_lang("AuthoringOptions");
                            echo "</th>
                                ";
                        } else {
                            // line 129
                            echo "                                    ";
                            if (($context["allow_dates_for_student"] ?? null)) {
                                // line 130
                                echo "                                        <th>";
                                echo get_lang("PublicationDate");
                                echo "</th>
                                        <th>";
                                // line 131
                                echo get_lang("ExpirationDate");
                                echo "</th>
                                    ";
                            }
                            // line 133
                            echo "                                    ";
                            if ( !($context["is_invitee"] ?? null)) {
                                // line 134
                                echo "                                        <th>";
                                echo get_lang("Progress");
                                echo "</th>
                                    ";
                            }
                            // line 136
                            echo "                                    ";
                            if (($context["allow_min_time"] ?? null)) {
                                // line 137
                                echo "                                        <th>";
                                echo get_lang("TimeSpentTimeRequired");
                                echo "</th>
                                    ";
                            }
                            // line 139
                            echo "                                    <th>";
                            echo get_lang("Actions");
                            echo "</th>
                                ";
                        }
                        // line 141
                        echo "                            </tr>
                            </thead>
                            <tbody>
                            ";
                        // line 144
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 145
                            echo "                                <tr>
                                    <td>
                                        ";
                            // line 147
                            echo $this->getAttribute($context["row"], "learnpath_icon", []);
                            echo "
                                        <a href=\"";
                            // line 148
                            echo $this->getAttribute($context["row"], "url_start", []);
                            echo "\">
                                            ";
                            // line 149
                            echo $this->getAttribute($context["row"], "title", []);
                            echo "
                                            ";
                            // line 150
                            echo $this->getAttribute($context["row"], "session_image", []);
                            echo "
                                        </a>
                                        ";
                            // line 152
                            echo $this->getAttribute($context["row"], "extra", []);
                            echo "
                                    </td>
                                    ";
                            // line 154
                            if (($context["is_allowed_to_edit"] ?? null)) {
                                // line 155
                                echo "                                        <td>
                                            ";
                                // line 156
                                if ($this->getAttribute($context["row"], "start_time", [])) {
                                    // line 157
                                    echo "                                                <span class=\"small\">";
                                    echo $this->getAttribute($context["row"], "start_time", []);
                                    echo "</span>
                                            ";
                                }
                                // line 159
                                echo "                                        </td>
                                        <td>
                                            <span class=\"small\">";
                                // line 161
                                echo $this->getAttribute($context["row"], "end_time", []);
                                echo "</span>
                                        </td>
                                        <td>
                                            ";
                                // line 164
                                echo $this->getAttribute($context["row"], "dsp_progress", []);
                                echo "
                                        </td>
                                        ";
                                // line 166
                                if (($context["allow_min_time"] ?? null)) {
                                    // line 167
                                    echo "                                            <td>
                                            ";
                                    // line 168
                                    if ($this->getAttribute($context["row"], "info_time_prerequisite", [])) {
                                        // line 169
                                        echo "                                                ";
                                        echo $this->getAttribute($context["row"], "info_time_prerequisite", []);
                                        echo "
                                            ";
                                    }
                                    // line 171
                                    echo "                                            </td>
                                        ";
                                }
                                // line 173
                                echo "                                    ";
                            } else {
                                // line 174
                                echo "                                        ";
                                if (($context["allow_dates_for_student"] ?? null)) {
                                    // line 175
                                    echo "                                            <td>
                                                ";
                                    // line 176
                                    if ($this->getAttribute($context["row"], "start_time", [])) {
                                        // line 177
                                        echo "                                                    <span class=\"small\">";
                                        echo $this->getAttribute($context["row"], "start_time", []);
                                        echo "</span>
                                                ";
                                    }
                                    // line 179
                                    echo "                                            </td>
                                            <td>
                                                <span class=\"small\">";
                                    // line 181
                                    echo $this->getAttribute($context["row"], "end_time", []);
                                    echo "</span>
                                            </td>
                                        ";
                                }
                                // line 184
                                echo "                                        ";
                                if ( !($context["is_invitee"] ?? null)) {
                                    // line 185
                                    echo "                                            <td>
                                                ";
                                    // line 186
                                    echo $this->getAttribute($context["row"], "dsp_progress", []);
                                    echo "
                                            </td>
                                        ";
                                }
                                // line 189
                                echo "                                        ";
                                if (($context["allow_min_time"] ?? null)) {
                                    // line 190
                                    echo "                                            <td>
                                                ";
                                    // line 191
                                    if ($this->getAttribute($context["row"], "info_time_prerequisite", [])) {
                                        // line 192
                                        echo "                                                    ";
                                        echo $this->getAttribute($context["row"], "info_time_prerequisite", []);
                                        echo "
                                                ";
                                    }
                                    // line 194
                                    echo "                                            </td>
                                        ";
                                }
                                // line 196
                                echo "                                    ";
                            }
                            // line 197
                            echo "                                    <td>
                                        ";
                            // line 198
                            echo $this->getAttribute($context["row"], "action_build", []);
                            echo "
                                        ";
                            // line 199
                            echo $this->getAttribute($context["row"], "action_edit", []);
                            echo "
                                        ";
                            // line 200
                            echo $this->getAttribute($context["row"], "action_visible", []);
                            echo "
                                        ";
                            // line 201
                            echo $this->getAttribute($context["row"], "action_tracking", []);
                            echo "
                                        ";
                            // line 202
                            echo $this->getAttribute($context["row"], "action_publish", []);
                            echo "
                                        ";
                            // line 203
                            echo $this->getAttribute($context["row"], "action_subscribe_users", []);
                            echo "
                                        ";
                            // line 204
                            echo $this->getAttribute($context["row"], "action_serious_game", []);
                            echo "
                                        ";
                            // line 205
                            echo $this->getAttribute($context["row"], "action_reinit", []);
                            echo "
                                        ";
                            // line 206
                            echo $this->getAttribute($context["row"], "action_default_view", []);
                            echo "
                                        ";
                            // line 207
                            echo $this->getAttribute($context["row"], "action_debug", []);
                            echo "
                                        ";
                            // line 208
                            echo $this->getAttribute($context["row"], "action_export", []);
                            echo "
                                        ";
                            // line 209
                            echo $this->getAttribute($context["row"], "action_copy", []);
                            echo "
                                        ";
                            // line 210
                            echo $this->getAttribute($context["row"], "action_auto_launch", []);
                            echo "
                                        ";
                            // line 211
                            echo $this->getAttribute($context["row"], "action_pdf", []);
                            echo "
                                        ";
                            // line 212
                            echo $this->getAttribute($context["row"], "action_delete", []);
                            echo "
                                        ";
                            // line 213
                            echo $this->getAttribute($context["row"], "action_order", []);
                            echo "
                                        ";
                            // line 214
                            echo $this->getAttribute($context["row"], "action_update_scorm", []);
                            echo "
                                        ";
                            // line 215
                            echo $this->getAttribute($context["row"], "action_export_to_course_build", []);
                            echo "
                                    </td>
                                </tr>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 219
                        echo "                            </tbody>
                        </table>
                    </div>
                ";
                    }
                    // line 223
                    echo "                <!--- end old view -->
            ";
                } else {
                    // line 225
                    echo "                <!-- new view block accordeon -->
                ";
                    // line 226
                    if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []) == 0)) {
                        // line 227
                        echo "                    ";
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 228
                            echo "                        ";
                            if ($this->getAttribute($context["lp_data"], "lp_list", [])) {
                                // line 229
                                echo "                            <div class=\"table-responsive\">
                                <table class=\"table table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th>";
                                // line 233
                                echo get_lang("Title");
                                echo "</th>
                                        ";
                                // line 234
                                if (($context["is_allowed_to_edit"] ?? null)) {
                                    // line 235
                                    echo "                                            <th>";
                                    echo get_lang("PublicationDate");
                                    echo "</th>
                                            <th>";
                                    // line 236
                                    echo get_lang("ExpirationDate");
                                    echo "</th>
                                            <th>";
                                    // line 237
                                    echo get_lang("Progress");
                                    echo "</th>
                                            ";
                                    // line 238
                                    if (($context["allow_min_time"] ?? null)) {
                                        // line 239
                                        echo "                                                <th>";
                                        echo get_lang("TimeSpentTimeRequired");
                                        echo "</th>
                                            ";
                                    }
                                    // line 241
                                    echo "                                            <th>";
                                    echo get_lang("AuthoringOptions");
                                    echo "</th>
                                        ";
                                } else {
                                    // line 243
                                    echo "                                            ";
                                    if (($context["allow_dates_for_student"] ?? null)) {
                                        // line 244
                                        echo "                                                <th>";
                                        echo get_lang("PublicationDate");
                                        echo "</th>
                                                <th>";
                                        // line 245
                                        echo get_lang("ExpirationDate");
                                        echo "</th>
                                            ";
                                    }
                                    // line 247
                                    echo "                                            ";
                                    if ( !($context["is_invitee"] ?? null)) {
                                        // line 248
                                        echo "                                                <th>";
                                        echo get_lang("Progress");
                                        echo "</th>
                                            ";
                                    }
                                    // line 250
                                    echo "                                            ";
                                    if (($context["allow_min_time"] ?? null)) {
                                        // line 251
                                        echo "                                                <th>";
                                        echo get_lang("TimeSpentTimeRequired");
                                        echo "</th>
                                            ";
                                    }
                                    // line 253
                                    echo "                                            <th>";
                                    echo get_lang("Actions");
                                    echo "</th>
                                        ";
                                }
                                // line 255
                                echo "                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                                // line 258
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                    // line 259
                                    echo "                                        <tr>
                                            <td>
                                                ";
                                    // line 261
                                    echo $this->getAttribute($context["row"], "learnpath_icon", []);
                                    echo "
                                                <a href=\"";
                                    // line 262
                                    echo $this->getAttribute($context["row"], "url_start", []);
                                    echo "\">
                                                    ";
                                    // line 263
                                    echo $this->getAttribute($context["row"], "title", []);
                                    echo "
                                                    ";
                                    // line 264
                                    echo $this->getAttribute($context["row"], "session_image", []);
                                    echo "
                                                    ";
                                    // line 265
                                    echo $this->getAttribute($context["row"], "extra", []);
                                    echo "
                                                </a>
                                            </td>
                                            ";
                                    // line 268
                                    if (($context["is_allowed_to_edit"] ?? null)) {
                                        // line 269
                                        echo "                                                <td>
                                                    ";
                                        // line 270
                                        if ($this->getAttribute($context["row"], "start_time", [])) {
                                            // line 271
                                            echo "                                                        <span class=\"small\">";
                                            echo $this->getAttribute($context["row"], "start_time", []);
                                            echo "</span>
                                                    ";
                                        }
                                        // line 273
                                        echo "                                                </td>
                                                <td>
                                                    <span class=\"small\">";
                                        // line 275
                                        echo $this->getAttribute($context["row"], "end_time", []);
                                        echo "</span>
                                                </td>
                                                <td>
                                                    ";
                                        // line 278
                                        echo $this->getAttribute($context["row"], "dsp_progress", []);
                                        echo "
                                                </td>
                                                ";
                                        // line 280
                                        if (($context["allow_min_time"] ?? null)) {
                                            // line 281
                                            echo "                                                    <td>
                                                        ";
                                            // line 282
                                            if ($this->getAttribute($context["row"], "info_time_prerequisite", [])) {
                                                // line 283
                                                echo "                                                            ";
                                                echo $this->getAttribute($context["row"], "info_time_prerequisite", []);
                                                echo "
                                                        ";
                                            }
                                            // line 285
                                            echo "                                                    </td>
                                                ";
                                        }
                                        // line 287
                                        echo "                                            ";
                                    } else {
                                        // line 288
                                        echo "                                                ";
                                        if (($context["allow_dates_for_student"] ?? null)) {
                                            // line 289
                                            echo "                                                    <td>
                                                        ";
                                            // line 290
                                            if ($this->getAttribute($context["row"], "start_time", [])) {
                                                // line 291
                                                echo "                                                            <span class=\"small\">";
                                                echo $this->getAttribute($context["row"], "start_time", []);
                                                echo "</span>
                                                        ";
                                            }
                                            // line 293
                                            echo "                                                    </td>
                                                    <td>
                                                        <span class=\"small\">";
                                            // line 295
                                            echo $this->getAttribute($context["row"], "end_time", []);
                                            echo "</span>
                                                    </td>
                                                ";
                                        }
                                        // line 298
                                        echo "                                                ";
                                        if ( !($context["is_invitee"] ?? null)) {
                                            // line 299
                                            echo "                                                    <td>
                                                        ";
                                            // line 300
                                            echo $this->getAttribute($context["row"], "dsp_progress", []);
                                            echo "
                                                    </td>
                                                ";
                                        }
                                        // line 303
                                        echo "                                                ";
                                        if (($context["allow_min_time"] ?? null)) {
                                            // line 304
                                            echo "                                                    <td>
                                                        ";
                                            // line 305
                                            if ($this->getAttribute($context["row"], "info_time_prerequisite", [])) {
                                                // line 306
                                                echo "                                                            ";
                                                echo $this->getAttribute($context["row"], "info_time_prerequisite", []);
                                                echo "
                                                        ";
                                            }
                                            // line 308
                                            echo "                                                    </td>
                                                ";
                                        }
                                        // line 310
                                        echo "                                            ";
                                    }
                                    // line 311
                                    echo "                                            <td>
                                                ";
                                    // line 312
                                    echo $this->getAttribute($context["row"], "action_build", []);
                                    echo "
                                                ";
                                    // line 313
                                    echo $this->getAttribute($context["row"], "action_edit", []);
                                    echo "
                                                ";
                                    // line 314
                                    echo $this->getAttribute($context["row"], "action_visible", []);
                                    echo "
                                                ";
                                    // line 315
                                    echo $this->getAttribute($context["row"], "action_tracking", []);
                                    echo "
                                                ";
                                    // line 316
                                    echo $this->getAttribute($context["row"], "action_publish", []);
                                    echo "
                                                ";
                                    // line 317
                                    echo $this->getAttribute($context["row"], "action_subscribe_users", []);
                                    echo "
                                                ";
                                    // line 318
                                    echo $this->getAttribute($context["row"], "action_serious_game", []);
                                    echo "
                                                ";
                                    // line 319
                                    echo $this->getAttribute($context["row"], "action_reinit", []);
                                    echo "
                                                ";
                                    // line 320
                                    echo $this->getAttribute($context["row"], "action_default_view", []);
                                    echo "
                                                ";
                                    // line 321
                                    echo $this->getAttribute($context["row"], "action_debug", []);
                                    echo "
                                                ";
                                    // line 322
                                    echo $this->getAttribute($context["row"], "action_export", []);
                                    echo "
                                                ";
                                    // line 323
                                    echo $this->getAttribute($context["row"], "action_copy", []);
                                    echo "
                                                ";
                                    // line 324
                                    echo $this->getAttribute($context["row"], "action_auto_launch", []);
                                    echo "
                                                ";
                                    // line 325
                                    echo $this->getAttribute($context["row"], "action_pdf", []);
                                    echo "
                                                ";
                                    // line 326
                                    echo $this->getAttribute($context["row"], "action_delete", []);
                                    echo "
                                                ";
                                    // line 327
                                    echo $this->getAttribute($context["row"], "action_order", []);
                                    echo "
                                                ";
                                    // line 328
                                    echo $this->getAttribute($context["row"], "action_update_scorm", []);
                                    echo "
                                                ";
                                    // line 329
                                    echo $this->getAttribute($context["row"], "action_export_to_course_build", []);
                                    echo "
                                            </td>
                                        </tr>
                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 333
                                echo "                                    </tbody>
                                </table>
                            </div>
                        ";
                            }
                            // line 337
                            echo "                    ";
                        } else {
                            // line 338
                            echo "                        <div id=\"not-category\" class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                ";
                            // line 340
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                // line 341
                                echo "                                    <div class=\"lp-item\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                <a href=\"";
                                // line 345
                                echo $this->getAttribute($context["row"], "url_start", []);
                                echo "\">
                                                    ";
                                // line 346
                                echo $this->getAttribute($context["row"], "title", []);
                                echo "
                                                    ";
                                // line 347
                                echo $this->getAttribute($context["row"], "session_image", []);
                                echo "
                                                    ";
                                // line 348
                                echo $this->getAttribute($context["row"], "extra", []);
                                echo "
                                                </a>
                                            </div>
                                            <div class=\"col-md-3\">
                                                ";
                                // line 352
                                echo $this->getAttribute($context["row"], "dsp_progress", []);
                                echo "
                                            </div>

                                            ";
                                // line 355
                                if (($context["allow_dates_for_student"] ?? null)) {
                                    // line 356
                                    echo "                                                <div class=\"col-md-2\">
                                                    ";
                                    // line 357
                                    if ($this->getAttribute($context["row"], "start_time", [])) {
                                        // line 358
                                        echo "                                                        <span class=\"small\">";
                                        echo $this->getAttribute($context["row"], "start_time", []);
                                        echo "</span>
                                                    ";
                                    }
                                    // line 360
                                    echo "                                                    <span class=\"small\">";
                                    echo $this->getAttribute($context["row"], "end_time", []);
                                    echo "</span>
                                                </div>
                                            ";
                                }
                                // line 363
                                echo "
                                            ";
                                // line 364
                                if (($context["allow_min_time"] ?? null)) {
                                    // line 365
                                    echo "                                                <div class=\"col-md-2\">
                                                    ";
                                    // line 366
                                    if ($this->getAttribute($context["row"], "info_time_prerequisite", [])) {
                                        // line 367
                                        echo "                                                        ";
                                        echo $this->getAttribute($context["row"], "info_time_prerequisite", []);
                                        echo "
                                                    ";
                                    }
                                    // line 369
                                    echo "                                                </div>
                                            ";
                                }
                                // line 371
                                echo "                                            <div class=\"col-md-1\">
                                                ";
                                // line 372
                                echo $this->getAttribute($context["row"], "action_pdf", []);
                                echo "
                                                ";
                                // line 373
                                echo $this->getAttribute($context["row"], "action_export", []);
                                echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 378
                            echo "                            </div>
                        </div>
                    ";
                        }
                        // line 381
                        echo "                ";
                    }
                    // line 382
                    echo "
                ";
                    // line 383
                    if (((twig_length_filter($this->env, ($context["categories"] ?? null)) > 1) && $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []))) {
                        // line 384
                        echo "                    ";
                        $context["number"] = (($context["number"] ?? null) + 1);
                        // line 385
                        echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"heading-";
                        // line 386
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method");
                        echo "\">
                            ";
                        // line 387
                        if (($context["is_allowed_to_edit"] ?? null)) {
                            // line 388
                            echo "                                <div class=\"tools-actions pull-right\">
                                    ";
                            // line 389
                            if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method") > 0)) {
                                // line 391
                                echo "                                        ";
                                if (($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "sessionId", []) == $this->getAttribute(($context["_c"] ?? null), "session_id", []))) {
                                    // line 392
                                    echo "                                            <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=add_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                    echo "\"
                                               title=\"";
                                    // line 393
                                    echo get_lang("Edit");
                                    echo "\">
                                                <img src=\"";
                                    // line 394
                                    echo Display::get_icon_path("edit.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Edit");
                                    echo "\">
                                            </a>

                                            ";
                                    // line 397
                                    if ($this->getAttribute(($context["subscription_settings"] ?? null), "allow_add_users_to_lp_category", [])) {
                                        // line 398
                                        echo "                                                <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=add_users_to_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                        echo "\"
                                                   title=\"";
                                        // line 399
                                        echo get_lang("AddUsers");
                                        echo "\">
                                                    <img src=\"";
                                        // line 400
                                        echo Display::get_icon_path("user.png");
                                        echo "\" alt=\"";
                                        echo get_lang("AddUsers");
                                        echo "\">
                                                </a>
                                            ";
                                    }
                                    // line 403
                                    echo "
                                            ";
                                    // line 404
                                    if (($this->getAttribute($context["loop"], "index0", []) == 1)) {
                                        // line 405
                                        echo "                                                <a href=\"#\">
                                                    <img src=\"";
                                        // line 406
                                        echo Display::get_icon_path("up_na.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                                </a>
                                            ";
                                    } else {
                                        // line 409
                                        echo "                                                <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=move_up_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                        echo "\"
                                                   title=\"";
                                        // line 410
                                        echo get_lang("Move");
                                        echo "\">
                                                    <img src=\"";
                                        // line 411
                                        echo Display::get_icon_path("up.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                                </a>
                                            ";
                                    }
                                    // line 414
                                    echo "
                                            ";
                                    // line 415
                                    if (((twig_length_filter($this->env, ($context["data"] ?? null)) - 1) == $this->getAttribute($context["loop"], "index0", []))) {
                                        // line 416
                                        echo "                                                <a href=\"#\">
                                                    <img src=\"";
                                        // line 417
                                        echo Display::get_icon_path("down_na.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                                </a>
                                            ";
                                    } else {
                                        // line 420
                                        echo "                                                <a href=\"";
                                        echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=move_down_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                        echo "\"
                                                   title=\"";
                                        // line 421
                                        echo get_lang("Move");
                                        echo "\">
                                                    <img src=\"";
                                        // line 422
                                        echo Display::get_icon_path("down.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Move");
                                        echo "\">
                                                </a>
                                            ";
                                    }
                                    // line 425
                                    echo "                                        ";
                                }
                                // line 426
                                echo "
                                        ";
                                // line 427
                                if (($this->getAttribute($context["lp_data"], "category_visibility", []) == 0)) {
                                    // line 428
                                    echo "                                            <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 1]));
                                    echo "\"
                                               title=\"";
                                    // line 429
                                    echo get_lang("Show");
                                    echo "\">
                                                <img src=\"";
                                    // line 430
                                    echo Display::get_icon_path("invisible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Show");
                                    echo "\">
                                            </a>
                                        ";
                                } else {
                                    // line 433
                                    echo "                                            <a href=\"lp_controller.php?";
                                    echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_visibility", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 0]));
                                    echo "\"
                                               title=\"";
                                    // line 434
                                    echo get_lang("Hide");
                                    echo "\">
                                                <img src=\"";
                                    // line 435
                                    echo Display::get_icon_path("visible.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Hide");
                                    echo "\">
                                            </a>
                                        ";
                                }
                                // line 438
                                echo "
                                        ";
                                // line 439
                                if (($this->getAttribute($context["lp_data"], "category_visibility", []) == 1)) {
                                    // line 440
                                    echo "                                            ";
                                    if (($this->getAttribute($context["lp_data"], "category_is_published", []) == 0)) {
                                        // line 441
                                        echo "                                                <a href=\"lp_controller.php?";
                                        echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 1]));
                                        echo "\"
                                                   title=\"";
                                        // line 442
                                        echo get_lang("LearnpathPublish");
                                        echo "\">
                                                    <img src=\"";
                                        // line 443
                                        echo Display::get_icon_path("lp_publish_na.png");
                                        echo "\"
                                                         alt=\"";
                                        // line 444
                                        echo get_lang("LearnpathPublish");
                                        echo "\">
                                                </a>
                                            ";
                                    } else {
                                        // line 447
                                        echo "                                                <a href=\"lp_controller.php?";
                                        echo (($this->getAttribute(($context["_p"] ?? null), "web_cid_query", []) . "&") . twig_urlencode_filter(["action" => "toggle_category_publish", "id" => $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "id", []), "new_status" => 0]));
                                        echo "\"
                                                   title=\"";
                                        // line 448
                                        echo get_lang("LearnpathDoNotPublish");
                                        echo "\">
                                                    <img src=\"";
                                        // line 449
                                        echo Display::get_icon_path("lp_publish.png");
                                        echo "\" alt=\"";
                                        echo get_lang("Hide");
                                        echo "\">
                                                </a>
                                            ";
                                    }
                                    // line 452
                                    echo "                                        ";
                                } else {
                                    // line 453
                                    echo "                                            <img src=\"";
                                    echo Display::get_icon_path("lp_publish_na.png");
                                    echo "\"
                                                 alt=\"";
                                    // line 454
                                    echo get_lang("LearnpathPublish");
                                    echo "\">
                                        ";
                                }
                                // line 456
                                echo "
                                        ";
                                // line 457
                                if ( !$this->getAttribute(($context["_c"] ?? null), "session_id", [])) {
                                    // line 458
                                    echo "                                            <a href=\"";
                                    echo ((("lp_controller.php?" . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=delete_lp_category&id=") . $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method"));
                                    echo "\"
                                               title=\"";
                                    // line 459
                                    echo get_lang("Delete");
                                    echo "\">
                                                <img src=\"";
                                    // line 460
                                    echo Display::get_icon_path("delete.png");
                                    echo "\" alt=\"";
                                    echo get_lang("Delete");
                                    echo "\">
                                            </a>
                                        ";
                                }
                                // line 463
                                echo "                                    ";
                            }
                            // line 464
                            echo "                                </div>
                            ";
                        }
                        // line 466
                        echo "                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#lp-accordion\"
                                   href=\"#collapse-";
                        // line 468
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method");
                        echo "\" aria-expanded=\"";
                        echo (((($context["number"] ?? null) == 1)) ? ("true") : ("false"));
                        echo "\"
                                   aria-controls=\"collapse-";
                        // line 469
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method");
                        echo "\">
                                    ";
                        // line 470
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getName", [], "method");
                        echo "

                                    ";
                        // line 472
                        if ($this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "sessionId", [])) {
                            // line 473
                            echo "                                        ";
                            echo ($context["session_star_icon"] ?? null);
                            echo "
                                    ";
                        }
                        // line 475
                        echo "                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse-";
                        // line 478
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method");
                        echo "\" class=\"panel-collapse collapse ";
                        echo (((($context["number"] ?? null) == 1)) ? ("in") : (""));
                        echo "\"
                             role=\"tabpanel\" aria-labelledby=\"heading-";
                        // line 479
                        echo $this->getAttribute($this->getAttribute($context["lp_data"], "category", []), "getId", [], "method");
                        echo "\">
                            <div class=\"panel-body\">
                                ";
                        // line 481
                        if ($this->getAttribute($context["lp_data"], "lp_list", [])) {
                            // line 482
                            echo "                                    ";
                            if (($context["is_allowed_to_edit"] ?? null)) {
                                // line 483
                                echo "                                        <div class=\"table-responsive\">
                                            <table class=\"table table-hover table-striped\">
                                                <thead>
                                                <tr>
                                                    <th>";
                                // line 487
                                echo get_lang("Title");
                                echo "</th>
                                                    ";
                                // line 488
                                if (($context["is_allowed_to_edit"] ?? null)) {
                                    // line 489
                                    echo "                                                        <th>";
                                    echo get_lang("PublicationDate");
                                    echo "</th>
                                                        <th>";
                                    // line 490
                                    echo get_lang("ExpirationDate");
                                    echo "</th>
                                                        <th>";
                                    // line 491
                                    echo get_lang("Progress");
                                    echo "</th>
                                                        ";
                                    // line 492
                                    if (($context["allow_min_time"] ?? null)) {
                                        // line 493
                                        echo "                                                            <th>";
                                        echo get_lang("TimeSpentTimeRequired");
                                        echo "</th>
                                                        ";
                                    }
                                    // line 495
                                    echo "                                                        <th>";
                                    echo get_lang("AuthoringOptions");
                                    echo "</th>
                                                    ";
                                } else {
                                    // line 497
                                    echo "                                                        ";
                                    if (($context["allow_dates_for_student"] ?? null)) {
                                        // line 498
                                        echo "                                                            <th>";
                                        echo get_lang("PublicationDate");
                                        echo "</th>
                                                            <th>";
                                        // line 499
                                        echo get_lang("ExpirationDate");
                                        echo "</th>
                                                        ";
                                    }
                                    // line 501
                                    echo "                                                        ";
                                    if ( !($context["is_invitee"] ?? null)) {
                                        // line 502
                                        echo "                                                            <th>";
                                        echo get_lang("Progress");
                                        echo "</th>
                                                        ";
                                    }
                                    // line 504
                                    echo "                                                        ";
                                    if (($context["allow_min_time"] ?? null)) {
                                        // line 505
                                        echo "                                                            <th>";
                                        echo get_lang("TimeSpentTimeRequired");
                                        echo "</th>
                                                        ";
                                    }
                                    // line 507
                                    echo "
                                                        <th>";
                                    // line 508
                                    echo get_lang("Actions");
                                    echo "</th>
                                                    ";
                                }
                                // line 510
                                echo "                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
                                // line 513
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                    // line 514
                                    echo "                                                    <tr>
                                                        <td>
                                                            ";
                                    // line 516
                                    echo $this->getAttribute($context["row"], "learnpath_icon", []);
                                    echo "
                                                            <a href=\"";
                                    // line 517
                                    echo $this->getAttribute($context["row"], "url_start", []);
                                    echo "\">
                                                                ";
                                    // line 518
                                    echo $this->getAttribute($context["row"], "title", []);
                                    echo "
                                                                ";
                                    // line 519
                                    echo $this->getAttribute($context["row"], "session_image", []);
                                    echo "
                                                                ";
                                    // line 520
                                    echo $this->getAttribute($context["row"], "extra", []);
                                    echo "
                                                            </a>
                                                        </td>
                                                        ";
                                    // line 523
                                    if (($context["is_allowed_to_edit"] ?? null)) {
                                        // line 524
                                        echo "                                                            <td>
                                                                ";
                                        // line 525
                                        if ($this->getAttribute($context["row"], "start_time", [])) {
                                            // line 526
                                            echo "                                                                    <span class=\"small\">";
                                            echo $this->getAttribute($context["row"], "start_time", []);
                                            echo "</span>
                                                                ";
                                        }
                                        // line 528
                                        echo "                                                            </td>
                                                            <td>
                                                                <span class=\"small\">";
                                        // line 530
                                        echo $this->getAttribute($context["row"], "end_time", []);
                                        echo "</span>
                                                            </td>
                                                            <td>
                                                                ";
                                        // line 533
                                        echo $this->getAttribute($context["row"], "dsp_progress", []);
                                        echo "
                                                            </td>
                                                            ";
                                        // line 535
                                        if (($context["allow_min_time"] ?? null)) {
                                            // line 536
                                            echo "                                                                <td>
                                                                    ";
                                            // line 537
                                            if ($this->getAttribute($context["row"], "info_time_prerequisite", [])) {
                                                // line 538
                                                echo "                                                                        ";
                                                echo $this->getAttribute($context["row"], "info_time_prerequisite", []);
                                                echo "
                                                                    ";
                                            }
                                            // line 540
                                            echo "                                                                </td>
                                                            ";
                                        }
                                        // line 542
                                        echo "                                                        ";
                                    } else {
                                        // line 543
                                        echo "                                                            ";
                                        if (($context["allow_dates_for_student"] ?? null)) {
                                            // line 544
                                            echo "                                                                <td>
                                                                    ";
                                            // line 545
                                            if ($this->getAttribute($context["row"], "start_time", [])) {
                                                // line 546
                                                echo "                                                                        <span class=\"small\">";
                                                echo $this->getAttribute($context["row"], "start_time", []);
                                                echo "</span>
                                                                    ";
                                            }
                                            // line 548
                                            echo "                                                                </td>
                                                                <td>
                                                                    <span class=\"small\">";
                                            // line 550
                                            echo $this->getAttribute($context["row"], "end_time", []);
                                            echo "</span>
                                                                </td>
                                                            ";
                                        }
                                        // line 553
                                        echo "                                                            ";
                                        if ( !($context["is_invitee"] ?? null)) {
                                            // line 554
                                            echo "                                                                <td>
                                                                    ";
                                            // line 555
                                            echo $this->getAttribute($context["row"], "dsp_progress", []);
                                            echo "
                                                                </td>
                                                            ";
                                        }
                                        // line 558
                                        echo "                                                            ";
                                        if (($context["allow_min_time"] ?? null)) {
                                            // line 559
                                            echo "                                                                <td>
                                                                    ";
                                            // line 560
                                            if ($this->getAttribute($context["row"], "info_time_prerequisite", [])) {
                                                // line 561
                                                echo "                                                                        ";
                                                echo $this->getAttribute($context["row"], "info_time_prerequisite", []);
                                                echo "
                                                                    ";
                                            }
                                            // line 563
                                            echo "                                                                </td>
                                                            ";
                                        }
                                        // line 565
                                        echo "                                                        ";
                                    }
                                    // line 566
                                    echo "                                                        <td>
                                                            ";
                                    // line 567
                                    echo $this->getAttribute($context["row"], "action_build", []);
                                    echo "
                                                            ";
                                    // line 568
                                    echo $this->getAttribute($context["row"], "action_edit", []);
                                    echo "
                                                            ";
                                    // line 569
                                    echo $this->getAttribute($context["row"], "action_visible", []);
                                    echo "
                                                            ";
                                    // line 570
                                    echo $this->getAttribute($context["row"], "action_tracking", []);
                                    echo "
                                                            ";
                                    // line 571
                                    echo $this->getAttribute($context["row"], "action_publish", []);
                                    echo "
                                                            ";
                                    // line 572
                                    echo $this->getAttribute($context["row"], "action_subscribe_users", []);
                                    echo "
                                                            ";
                                    // line 573
                                    echo $this->getAttribute($context["row"], "action_serious_game", []);
                                    echo "
                                                            ";
                                    // line 574
                                    echo $this->getAttribute($context["row"], "action_reinit", []);
                                    echo "
                                                            ";
                                    // line 575
                                    echo $this->getAttribute($context["row"], "action_default_view", []);
                                    echo "
                                                            ";
                                    // line 576
                                    echo $this->getAttribute($context["row"], "action_debug", []);
                                    echo "
                                                            ";
                                    // line 577
                                    echo $this->getAttribute($context["row"], "action_export", []);
                                    echo "
                                                            ";
                                    // line 578
                                    echo $this->getAttribute($context["row"], "action_copy", []);
                                    echo "
                                                            ";
                                    // line 579
                                    echo $this->getAttribute($context["row"], "action_auto_launch", []);
                                    echo "
                                                            ";
                                    // line 580
                                    echo $this->getAttribute($context["row"], "action_pdf", []);
                                    echo "
                                                            ";
                                    // line 581
                                    echo $this->getAttribute($context["row"], "action_delete", []);
                                    echo "
                                                            ";
                                    // line 582
                                    echo $this->getAttribute($context["row"], "action_order", []);
                                    echo "
                                                            ";
                                    // line 583
                                    echo $this->getAttribute($context["row"], "action_update_scorm", []);
                                    echo "
                                                            ";
                                    // line 584
                                    echo $this->getAttribute($context["row"], "action_export_to_course_build", []);
                                    echo "
                                                        </td>
                                                    </tr>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 588
                                echo "                                                </tbody>
                                            </table>
                                        </div>
                                    ";
                            } else {
                                // line 592
                                echo "                                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lp_data"], "lp_list", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                    // line 593
                                    echo "                                            <div class=\"lp-item\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                                        <a href=\"";
                                    // line 597
                                    echo $this->getAttribute($context["row"], "url_start", []);
                                    echo "\">
                                                            ";
                                    // line 598
                                    echo $this->getAttribute($context["row"], "title", []);
                                    echo "
                                                            ";
                                    // line 599
                                    echo $this->getAttribute($context["row"], "session_image", []);
                                    echo "
                                                            ";
                                    // line 600
                                    echo $this->getAttribute($context["row"], "extra", []);
                                    echo "
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-3\">
                                                        ";
                                    // line 604
                                    echo $this->getAttribute($context["row"], "dsp_progress", []);
                                    echo "
                                                    </div>

                                                    ";
                                    // line 607
                                    if (($context["allow_dates_for_student"] ?? null)) {
                                        // line 608
                                        echo "                                                        <div class=\"col-md-2\">
                                                            ";
                                        // line 609
                                        if ($this->getAttribute($context["row"], "start_time", [])) {
                                            // line 610
                                            echo "                                                                <span class=\"small\">";
                                            echo $this->getAttribute($context["row"], "start_time", []);
                                            echo "</span>
                                                            ";
                                        }
                                        // line 612
                                        echo "                                                            <span class=\"small\">";
                                        echo $this->getAttribute($context["row"], "end_time", []);
                                        echo "</span>
                                                        </div>
                                                    ";
                                    }
                                    // line 615
                                    echo "
                                                    ";
                                    // line 616
                                    if (($context["allow_min_time"] ?? null)) {
                                        // line 617
                                        echo "                                                        <div class=\"col-md-2\">
                                                            ";
                                        // line 618
                                        if ($this->getAttribute($context["row"], "info_time_prerequisite", [])) {
                                            // line 619
                                            echo "                                                                ";
                                            echo $this->getAttribute($context["row"], "info_time_prerequisite", []);
                                            echo "
                                                            ";
                                        }
                                        // line 621
                                        echo "                                                        </div>
                                                    ";
                                    }
                                    // line 623
                                    echo "                                                    <div class=\"col-md-1\">
                                                        ";
                                    // line 624
                                    echo $this->getAttribute($context["row"], "action_pdf", []);
                                    echo "
                                                        ";
                                    // line 625
                                    echo $this->getAttribute($context["row"], "action_export", []);
                                    echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 630
                                echo "                                    ";
                            }
                            // line 631
                            echo "                                ";
                        }
                        // line 632
                        echo "                            </div>
                        </div>
                    </div>
                ";
                    }
                    // line 636
                    echo "                <!-- end view block accordeon -->
            ";
                }
                // line 638
                echo "        ";
            }
            // line 639
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lp_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 640
        echo "</div>

";
        // line 642
        if ((( !($context["is_invitee"] ?? null) && ($context["lp_is_shown"] ?? null)) && ($context["allow_min_time"] ?? null))) {
            // line 643
            echo "    <div id=\"lp_notification_control\" class=\"controls text-center\">
        ";
            // line 644
            if ( !($context["is_ending"] ?? null)) {
                // line 645
                echo "            <button class=\"btn btn-primary\" type=\"button\" disabled>
                ";
                // line 646
                echo get_lang("IHaveFinishedTheLessonsNotifyTheTeacher");
                echo "
            </button>
        ";
            } else {
                // line 649
                echo "            <a href=\"";
                echo (((($context["web_self"] ?? null) . "?") . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=send_notify_teacher");
                echo "\" class=\"btn btn-primary\">
                ";
                // line 650
                echo get_lang("IHaveFinishedTheLessonsNotifyTheTeacher");
                echo "
            </a>
        ";
            }
            // line 653
            echo "    </div>
";
        }
        // line 655
        echo "
";
        // line 656
        if (((( !($context["is_invitee"] ?? null) && ($context["lp_is_shown"] ?? null)) && ($context["allow_min_time"] ?? null)) && ($context["is_ending"] ?? null))) {
            // line 657
            echo "    <div id=\"lp_download_file_after_finish\" class=\"controls text-center\">
        ";
            // line 658
            echo ($context["download_files_after_finish"] ?? null);
            echo "
    </div>
";
        }
        // line 661
        echo "
";
        // line 662
        if ((($context["is_allowed_to_edit"] ?? null) &&  !($context["lp_is_shown"] ?? null))) {
            // line 663
            echo "    <div id=\"no-data-view\">
        <h2>";
            // line 664
            echo get_lang("LearningPaths");
            echo "</h2>
        <img src=\"";
            // line 665
            echo Display::get_icon_path("scorms.png", 64);
            echo "\" width=\"64\" height=\"64\">
        <div class=\"controls\">
            <a href=\"";
            // line 667
            echo (((($context["web_self"] ?? null) . "?") . $this->getAttribute(($context["_p"] ?? null), "web_cid_query", [])) . "&action=add_lp");
            echo "\" class=\"btn btn-default\">
                ";
            // line 668
            echo get_lang("LearnpathAddLearnpath");
            echo "
            </a>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/learnpath/list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1893 => 668,  1889 => 667,  1884 => 665,  1880 => 664,  1877 => 663,  1875 => 662,  1872 => 661,  1866 => 658,  1863 => 657,  1861 => 656,  1858 => 655,  1854 => 653,  1848 => 650,  1843 => 649,  1837 => 646,  1834 => 645,  1832 => 644,  1829 => 643,  1827 => 642,  1823 => 640,  1809 => 639,  1806 => 638,  1802 => 636,  1796 => 632,  1793 => 631,  1790 => 630,  1779 => 625,  1775 => 624,  1772 => 623,  1768 => 621,  1762 => 619,  1760 => 618,  1757 => 617,  1755 => 616,  1752 => 615,  1745 => 612,  1739 => 610,  1737 => 609,  1734 => 608,  1732 => 607,  1726 => 604,  1719 => 600,  1715 => 599,  1711 => 598,  1707 => 597,  1701 => 593,  1696 => 592,  1690 => 588,  1680 => 584,  1676 => 583,  1672 => 582,  1668 => 581,  1664 => 580,  1660 => 579,  1656 => 578,  1652 => 577,  1648 => 576,  1644 => 575,  1640 => 574,  1636 => 573,  1632 => 572,  1628 => 571,  1624 => 570,  1620 => 569,  1616 => 568,  1612 => 567,  1609 => 566,  1606 => 565,  1602 => 563,  1596 => 561,  1594 => 560,  1591 => 559,  1588 => 558,  1582 => 555,  1579 => 554,  1576 => 553,  1570 => 550,  1566 => 548,  1560 => 546,  1558 => 545,  1555 => 544,  1552 => 543,  1549 => 542,  1545 => 540,  1539 => 538,  1537 => 537,  1534 => 536,  1532 => 535,  1527 => 533,  1521 => 530,  1517 => 528,  1511 => 526,  1509 => 525,  1506 => 524,  1504 => 523,  1498 => 520,  1494 => 519,  1490 => 518,  1486 => 517,  1482 => 516,  1478 => 514,  1474 => 513,  1469 => 510,  1464 => 508,  1461 => 507,  1455 => 505,  1452 => 504,  1446 => 502,  1443 => 501,  1438 => 499,  1433 => 498,  1430 => 497,  1424 => 495,  1418 => 493,  1416 => 492,  1412 => 491,  1408 => 490,  1403 => 489,  1401 => 488,  1397 => 487,  1391 => 483,  1388 => 482,  1386 => 481,  1381 => 479,  1375 => 478,  1370 => 475,  1364 => 473,  1362 => 472,  1357 => 470,  1353 => 469,  1347 => 468,  1343 => 466,  1339 => 464,  1336 => 463,  1328 => 460,  1324 => 459,  1319 => 458,  1317 => 457,  1314 => 456,  1309 => 454,  1304 => 453,  1301 => 452,  1293 => 449,  1289 => 448,  1284 => 447,  1278 => 444,  1274 => 443,  1270 => 442,  1265 => 441,  1262 => 440,  1260 => 439,  1257 => 438,  1249 => 435,  1245 => 434,  1240 => 433,  1232 => 430,  1228 => 429,  1223 => 428,  1221 => 427,  1218 => 426,  1215 => 425,  1207 => 422,  1203 => 421,  1198 => 420,  1190 => 417,  1187 => 416,  1185 => 415,  1182 => 414,  1174 => 411,  1170 => 410,  1165 => 409,  1157 => 406,  1154 => 405,  1152 => 404,  1149 => 403,  1141 => 400,  1137 => 399,  1132 => 398,  1130 => 397,  1122 => 394,  1118 => 393,  1113 => 392,  1110 => 391,  1108 => 389,  1105 => 388,  1103 => 387,  1099 => 386,  1096 => 385,  1093 => 384,  1091 => 383,  1088 => 382,  1085 => 381,  1080 => 378,  1069 => 373,  1065 => 372,  1062 => 371,  1058 => 369,  1052 => 367,  1050 => 366,  1047 => 365,  1045 => 364,  1042 => 363,  1035 => 360,  1029 => 358,  1027 => 357,  1024 => 356,  1022 => 355,  1016 => 352,  1009 => 348,  1005 => 347,  1001 => 346,  997 => 345,  991 => 341,  987 => 340,  983 => 338,  980 => 337,  974 => 333,  964 => 329,  960 => 328,  956 => 327,  952 => 326,  948 => 325,  944 => 324,  940 => 323,  936 => 322,  932 => 321,  928 => 320,  924 => 319,  920 => 318,  916 => 317,  912 => 316,  908 => 315,  904 => 314,  900 => 313,  896 => 312,  893 => 311,  890 => 310,  886 => 308,  880 => 306,  878 => 305,  875 => 304,  872 => 303,  866 => 300,  863 => 299,  860 => 298,  854 => 295,  850 => 293,  844 => 291,  842 => 290,  839 => 289,  836 => 288,  833 => 287,  829 => 285,  823 => 283,  821 => 282,  818 => 281,  816 => 280,  811 => 278,  805 => 275,  801 => 273,  795 => 271,  793 => 270,  790 => 269,  788 => 268,  782 => 265,  778 => 264,  774 => 263,  770 => 262,  766 => 261,  762 => 259,  758 => 258,  753 => 255,  747 => 253,  741 => 251,  738 => 250,  732 => 248,  729 => 247,  724 => 245,  719 => 244,  716 => 243,  710 => 241,  704 => 239,  702 => 238,  698 => 237,  694 => 236,  689 => 235,  687 => 234,  683 => 233,  677 => 229,  674 => 228,  671 => 227,  669 => 226,  666 => 225,  662 => 223,  656 => 219,  646 => 215,  642 => 214,  638 => 213,  634 => 212,  630 => 211,  626 => 210,  622 => 209,  618 => 208,  614 => 207,  610 => 206,  606 => 205,  602 => 204,  598 => 203,  594 => 202,  590 => 201,  586 => 200,  582 => 199,  578 => 198,  575 => 197,  572 => 196,  568 => 194,  562 => 192,  560 => 191,  557 => 190,  554 => 189,  548 => 186,  545 => 185,  542 => 184,  536 => 181,  532 => 179,  526 => 177,  524 => 176,  521 => 175,  518 => 174,  515 => 173,  511 => 171,  505 => 169,  503 => 168,  500 => 167,  498 => 166,  493 => 164,  487 => 161,  483 => 159,  477 => 157,  475 => 156,  472 => 155,  470 => 154,  465 => 152,  460 => 150,  456 => 149,  452 => 148,  448 => 147,  444 => 145,  440 => 144,  435 => 141,  429 => 139,  423 => 137,  420 => 136,  414 => 134,  411 => 133,  406 => 131,  401 => 130,  398 => 129,  392 => 127,  386 => 125,  384 => 124,  380 => 123,  376 => 122,  371 => 121,  369 => 120,  364 => 118,  357 => 113,  355 => 112,  352 => 111,  349 => 110,  343 => 108,  341 => 107,  338 => 106,  335 => 105,  327 => 102,  323 => 101,  318 => 100,  316 => 99,  313 => 98,  305 => 94,  301 => 93,  296 => 92,  290 => 89,  286 => 88,  282 => 87,  277 => 86,  274 => 85,  271 => 83,  263 => 79,  259 => 78,  254 => 77,  246 => 74,  242 => 73,  237 => 72,  234 => 71,  231 => 69,  228 => 68,  225 => 67,  217 => 64,  213 => 63,  208 => 62,  200 => 59,  197 => 58,  195 => 57,  192 => 56,  184 => 53,  180 => 52,  175 => 51,  167 => 48,  164 => 47,  161 => 46,  159 => 45,  156 => 44,  148 => 41,  144 => 40,  139 => 39,  137 => 38,  129 => 35,  125 => 34,  120 => 33,  117 => 32,  115 => 31,  112 => 30,  106 => 28,  104 => 27,  99 => 25,  96 => 24,  93 => 23,  91 => 22,  88 => 21,  85 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  72 => 15,  69 => 14,  66 => 13,  49 => 12,  46 => 11,  44 => 10,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/learnpath/list.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\learnpath\\list.tpl");
    }
}
