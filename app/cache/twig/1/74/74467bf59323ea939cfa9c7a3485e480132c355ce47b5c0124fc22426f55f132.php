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

/* default/layout/menu.tpl */
class __TwigTemplate_51f3c619eb98a7818cd6ed1372ab4b77a0514078f18c901fe39e09ffe1696820 extends \Twig\Template
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
        echo "<!-- Fixed navbar -->
";
        // line 2
        if ((($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1) &&  !($context["user_in_anon_survey"] ?? null))) {
            // line 3
            echo "    <script>
        \$(function () {
            \$.get('";
            // line 5
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "inc/ajax/message.ajax.php?a=get_count_message', function(data) {
                var countNotifications = (data.ms_friends + data.ms_groups + data.ms_inbox);
                if (countNotifications === 0 || isNaN(countNotifications)) {
                    \$(\"#count_message_li\").addClass('hidden');
                } else {
                    \$(\"#count_message_li\").removeClass('hidden');
                    \$(\"#count_message\").append(countNotifications);
                }
            });
        });
    </script>
";
        }
        // line 17
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"pull-right  navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>

            ";
        // line 27
        if ((($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1) && (($context["notification_event"] ?? null) == 1))) {
            // line 28
            echo "                <button id=\"user-dropdown\"  type=\"button\" class=\"menu-dropdown pull-right navbar-toggle collapsed\"
                        data-toggle=\"collapse\" data-target=\"#user-dropdown-menu\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <img class=\"img-circle\" src=\"";
            // line 30
            echo $this->getAttribute(($context["_u"] ?? null), "avatar_small", []);
            echo "\" alt=\"";
            echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
            echo "\"/>
                    <span class=\"caret\"></span>

                    <ul id=\"user-dropdown-menu\" class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"user-dropdown\">
                        <li class=\"user-header\">
                            <div class=\"text-center\">
                                <a href=\"";
            // line 36
            echo ($context["profile_url"] ?? null);
            echo "\">
                                    <img class=\"img-circle\" src=\"";
            // line 37
            echo $this->getAttribute(($context["_u"] ?? null), "avatar_medium", []);
            echo "\" alt=\"";
            echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
            echo "\"/>
                                    <p class=\"name\">";
            // line 38
            echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
            echo "</p>
                                </a>
                                <p><em class=\"fa fa-envelope-o\" aria-hidden=\"true\"></em> ";
            // line 40
            echo $this->getAttribute(($context["_u"] ?? null), "email", []);
            echo "</p>
                            </div>
                        </li>
                        <li role=\"separator\" class=\"divider\"></li>
                        ";
            // line 44
            if (($context["message_url"] ?? null)) {
                // line 45
                echo "                            <li class=\"user-body\">
                                <a title=\"";
                // line 46
                echo get_lang("Inbox");
                echo "\" href=\"";
                echo ($context["message_url"] ?? null);
                echo "\">
                                    <em class=\"fa fa-envelope\" aria-hidden=\"true\"></em> ";
                // line 47
                echo get_lang("Inbox");
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 51
            echo "
                        ";
            // line 52
            if (($context["pending_survey_url"] ?? null)) {
                // line 53
                echo "                            <li class=\"user-body\">
                                <a href=\"";
                // line 54
                echo ($context["pending_survey_url"] ?? null);
                echo "\">
                                    <em class=\"fa fa-pie-chart\"></em> ";
                // line 55
                echo get_lang("PendingSurveys");
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 59
            echo "
                        ";
            // line 60
            if (($context["certificate_url"] ?? null)) {
                // line 61
                echo "                            <li class=\"user-body\">
                                <a title=\"";
                // line 62
                echo get_lang("MyCertificates");
                echo "\" href=\"";
                echo ($context["certificate_url"] ?? null);
                echo "\">
                                    <em class=\"fa fa-graduation-cap\"
                                        aria-hidden=\"true\"></em> ";
                // line 64
                echo get_lang("MyCertificates");
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 68
            echo "
                        <li class=\"user-body\">
                            <a id=\"logout_button\" title=\"";
            // line 70
            echo get_lang("Logout");
            echo "\" href=\"";
            echo ($context["logout_link"] ?? null);
            echo "\">
                                <em class=\"fa fa-sign-out\"></em> ";
            // line 71
            echo get_lang("Logout");
            echo "
                            </a>
                        </li>
                    </ul>
                </button>

                ";
            // line 77
            if (($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1)) {
                // line 78
                echo "                    <button id=\"notifications-dropdown\" type=\"button\" class=\"pull-right menu-dropdown navbar-toggle collapsed\"
                            data-toggle=\"collapse\" data-target=\"#notification-menu\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <em id=\"notificationsIcon\" class=\"fa fa-bell-o \" aria-hidden=\"true\"></em>
                        ";
                // line 82
                echo "                        <span id=\"notificationsBadge\" class=\"label label-danger\">
                        <em class=\"fa fa-spinner fa-pulse fa-fw\" aria-hidden=\"true\"></em>
                        </span>
                        <div id=\"notification-menu\"
                             class=\"dropdown-menu notification-dropdown-menu\" aria-labelledby=\"notifications-dropdown\">
                            <h5 class=\"dropdown-header\">
                                <em class=\"fa fa-bell-o\" aria-hidden=\"true\"></em> <span class=\"fw-600 c-grey-900\">
                                    ";
                // line 89
                echo get_lang("Notifications");
                echo "
                                </span>
                            </h5>
                            <a id=\"notificationsLoader\" class=\"dropdown-item dropdown-notification\" href=\"#\">
                                <p class=\"notification-solo text-center\">
                                    <em id=\"notificationsIcon\" class=\"fa fa-spinner fa-pulse fa-fw\" aria-hidden=\"true\"></em>
                                    ";
                // line 95
                echo get_lang("Loading");
                echo "
                                </p>
                            </a>
                            <ul id=\"notificationsContainer\" class=\"notifications-container\"></ul>
                            <a id=\"notificationEmpty\" class=\"dropdown-item dropdown-notification\" href=\"#\">
                                <p class=\"notification-solo text-center\"> ";
                // line 100
                echo get_lang("NoNewNotification");
                echo "</p>
                            </a>
                        </div>
                    </button>

                    <button id=\"count_message_li\" type=\"button\" class=\"pull-right navbar-toggle collapsed menu-dropdown\" aria-expanded=\"true\">
                        <a href=\"";
                // line 106
                echo ($context["message_url"] ?? null);
                echo "\">
                            <span id=\"count_message\" class=\"badge badge-warning\"></span>
                        </a>
                    </button>
                ";
            }
            // line 111
            echo "            ";
        }
        // line 112
        echo "            <a class=\"navbar-brand\" href=\"";
        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
        echo "\"> <em class=\"fa fa-home\"></em> </a>
        </div>

        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 118
            echo "                    ";
            $context["show_item"] = true;
            // line 119
            echo "                    ";
            if ((($context["user_in_anon_survey"] ?? null) && ($this->getAttribute($context["item"], "key", []) != "homepage"))) {
                // line 120
                echo "                        ";
                $context["show_item"] = false;
                // line 121
                echo "                    ";
            }
            // line 122
            echo "
                    ";
            // line 123
            if (($context["show_item"] ?? null)) {
                // line 124
                echo "                        <li class=\"";
                echo $this->getAttribute($context["item"], "key", []);
                echo " ";
                echo $this->getAttribute($context["item"], "current", []);
                echo "\">
                            <a href=\"";
                // line 125
                echo $this->getAttribute($context["item"], "url", []);
                echo "\" ";
                echo (($this->getAttribute($context["item"], "target", [])) ? ((("target=\"" . $this->getAttribute($context["item"], "target", [])) . "\"")) : (""));
                echo " title=\"";
                echo $this->getAttribute($context["item"], "title", []);
                echo "\">
                                ";
                // line 126
                echo $this->getAttribute($context["item"], "title", []);
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 130
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "            </ul>
            ";
        // line 132
        if ((($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1) &&  !($context["user_in_anon_survey"] ?? null))) {
            // line 133
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    ";
            // line 134
            if (($context["language_form"] ?? null)) {
                // line 135
                echo "                        <li class=\"dropdown language\">
                            ";
                // line 136
                echo ($context["language_form"] ?? null);
                echo "
                        </li>
                    ";
            }
            // line 139
            echo "                    ";
            if ((($context["notification_event"] ?? null) == 0)) {
                // line 140
                echo "                        ";
                if (($this->getAttribute(($context["_u"] ?? null), "status", []) != 6)) {
                    // line 141
                    echo "                            <li id=\"count_message_li\" class=\"pull-left \" style=\"float: left !important;\" aria-expanded=\"true\">
                                <a href=\"";
                    // line 142
                    echo ($context["message_url"] ?? null);
                    echo "\">
                                    <span id=\"count_message\" class=\"badge badge-warning\"></span>
                                </a>
                            </li>
                            <li class=\"dropdown avatar-user\" style=\"float:right\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                                   aria-expanded=\"false\">
                                    <img class=\"img-circle\" src=\"";
                    // line 149
                    echo $this->getAttribute(($context["_u"] ?? null), "avatar_small", []);
                    echo "\" alt=\"";
                    echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
                    echo "\"/>
                                    <span class=\"username-movil\">";
                    // line 150
                    echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
                    echo "</span>
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li class=\"user-header\">
                                        <div class=\"text-center\">
                                            <a href=\"";
                    // line 156
                    echo ($context["profile_url"] ?? null);
                    echo "\">
                                                <img class=\"img-circle\" src=\"";
                    // line 157
                    echo $this->getAttribute(($context["_u"] ?? null), "avatar_medium", []);
                    echo "\" alt=\"";
                    echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
                    echo "\"/>
                                                <p class=\"name\">";
                    // line 158
                    echo $this->getAttribute(($context["_u"] ?? null), "complete_name", []);
                    echo "</p>
                                            </a>
                                            <p><em class=\"fa fa-envelope-o\" aria-hidden=\"true\"></em> ";
                    // line 160
                    echo $this->getAttribute(($context["_u"] ?? null), "email", []);
                    echo "</p>
                                        </div>
                                    </li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    ";
                    // line 164
                    if (($context["message_url"] ?? null)) {
                        // line 165
                        echo "                                        <li class=\"user-body\">
                                            <a title=\"";
                        // line 166
                        echo get_lang("Inbox");
                        echo "\" href=\"";
                        echo ($context["message_url"] ?? null);
                        echo "\">
                                                <em class=\"fa fa-envelope\" aria-hidden=\"true\"></em> ";
                        // line 167
                        echo get_lang("Inbox");
                        echo "
                                            </a>
                                        </li>
                                    ";
                    }
                    // line 171
                    echo "
                                    ";
                    // line 172
                    if (($context["pending_survey_url"] ?? null)) {
                        // line 173
                        echo "                                        <li class=\"user-body\">
                                            <a href=\"";
                        // line 174
                        echo ($context["pending_survey_url"] ?? null);
                        echo "\">
                                                <em class=\"fa fa-pie-chart\"></em> ";
                        // line 175
                        echo get_lang("PendingSurveys");
                        echo "
                                            </a>
                                        </li>
                                    ";
                    }
                    // line 179
                    echo "
                                    ";
                    // line 180
                    if (($context["certificate_url"] ?? null)) {
                        // line 181
                        echo "                                        <li class=\"user-body\">
                                            <a title=\"";
                        // line 182
                        echo get_lang("MyCertificates");
                        echo "\" href=\"";
                        echo ($context["certificate_url"] ?? null);
                        echo "\">
                                                <em class=\"fa fa-graduation-cap\"
                                                    aria-hidden=\"true\"></em> ";
                        // line 184
                        echo get_lang("MyCertificates");
                        echo "
                                            </a>
                                        </li>
                                    ";
                    }
                    // line 188
                    echo "
                                    <li class=\"user-body\">
                                        <a id=\"logout_button\" title=\"";
                    // line 190
                    echo get_lang("Logout");
                    echo "\" href=\"";
                    echo ($context["logout_link"] ?? null);
                    echo "\">
                                            <em class=\"fa fa-sign-out\"></em> ";
                    // line 191
                    echo get_lang("Logout");
                    echo "
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        ";
                }
                // line 197
                echo "                    ";
            }
            // line 198
            echo "
                    ";
            // line 199
            if ((($context["notification_event"] ?? null) == 1)) {
                // line 200
                echo "                        ";
                $this->loadTemplate("default/layout/notification.tpl", "default/layout/menu.tpl", 200)->display($context);
                // line 201
                echo "                    ";
            }
            // line 202
            echo "                </ul>
            ";
        }
        // line 204
        echo "        </div><!--/.nav-collapse -->
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "default/layout/menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 204,  461 => 202,  458 => 201,  455 => 200,  453 => 199,  450 => 198,  447 => 197,  438 => 191,  432 => 190,  428 => 188,  421 => 184,  414 => 182,  411 => 181,  409 => 180,  406 => 179,  399 => 175,  395 => 174,  392 => 173,  390 => 172,  387 => 171,  380 => 167,  374 => 166,  371 => 165,  369 => 164,  362 => 160,  357 => 158,  351 => 157,  347 => 156,  338 => 150,  332 => 149,  322 => 142,  319 => 141,  316 => 140,  313 => 139,  307 => 136,  304 => 135,  302 => 134,  299 => 133,  297 => 132,  294 => 131,  288 => 130,  281 => 126,  273 => 125,  266 => 124,  264 => 123,  261 => 122,  258 => 121,  255 => 120,  252 => 119,  249 => 118,  245 => 117,  236 => 112,  233 => 111,  225 => 106,  216 => 100,  208 => 95,  199 => 89,  190 => 82,  185 => 78,  183 => 77,  174 => 71,  168 => 70,  164 => 68,  157 => 64,  150 => 62,  147 => 61,  145 => 60,  142 => 59,  135 => 55,  131 => 54,  128 => 53,  126 => 52,  123 => 51,  116 => 47,  110 => 46,  107 => 45,  105 => 44,  98 => 40,  93 => 38,  87 => 37,  83 => 36,  72 => 30,  68 => 28,  66 => 27,  54 => 17,  39 => 5,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/menu.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\layout\\menu.tpl");
    }
}
