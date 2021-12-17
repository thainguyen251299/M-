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

/* default/social/user_block.tpl */
class __TwigTemplate_46a23dd659a550813ca44d3023d6e352f13a9428d1e712113430704a49473d12 extends \Twig\Template
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
        echo "<div class=\"sidebar-avatar\">
    <div class=\"panel-group\" id=\"sn-avatar\" role=\"tablist\" aria-multiselectable=\"true\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"heading-sn\">
                <h4 class=\"panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#sn-avatar\"
                       href=\"#sn-avatar-one\" aria-expanded=\"true\" aria-controls=\"sn-avatar-one\">
                    ";
        // line 8
        echo get_lang("Profile");
        echo "
                    </a>
                    ";
        // line 10
        if (($this->getAttribute(($context["_u"] ?? null), "is_admin", []) == 1)) {
            // line 11
            echo "                        <div class=\"pull-right\">
                            <a class=\"btn btn-default btn-sm btn-social-edit\"
                               title=\"";
            // line 13
            echo get_lang("Edit");
            echo "\"
                               href=\"";
            // line 14
            echo $this->getAttribute(($context["_p"] ?? null), "web", []);
            echo "main/admin/user_edit.php?user_id=";
            echo $this->getAttribute(($context["user"] ?? null), "id", []);
            echo "\"
                            >
                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            </a>
                        </div>
                    ";
        }
        // line 20
        echo "                </h4>
            </div>
            <div id=\"sn-avatar-one\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"heading-sn\">
                <div class=\"panel-body\">
                    <div class=\"area-avatar\">
                        ";
        // line 25
        echo ($context["social_avatar_block"] ?? null);
        echo "
                        ";
        // line 26
        if ($this->getAttribute(($context["user"] ?? null), "icon_status", [])) {
            // line 27
            echo "                            <!-- User icon -->
                            <div class=\"avatar-icon\">
                                ";
            // line 29
            echo $this->getAttribute(($context["user"] ?? null), "icon_status_medium", []);
            echo "
                            </div>
                            <!-- End user icon -->
                        ";
        }
        // line 33
        echo "
                        ";
        // line 34
        if (($context["show_language_flag"] ?? null)) {
            // line 35
            echo "                        <!-- Language flag -->
                        <div class=\"avatar-lm\">
                            ";
            // line 37
            if ($this->getAttribute(($context["user"] ?? null), "language", [])) {
                // line 38
                echo "                                ";
                if (($this->getAttribute($this->getAttribute(($context["user"] ?? null), "language", []), "code", []) == "fr")) {
                    // line 39
                    echo "                                    <img src=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "web/assets/flag-icon-css/flags/4x3/fr.svg\" width=\"36px\">
                                ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 40
($context["user"] ?? null), "language", []), "code", []) == "de")) {
                    // line 41
                    echo "                                    <img src=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "web/assets/flag-icon-css/flags/4x3/de.svg\" width=\"36px\">
                                ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 42
($context["user"] ?? null), "language", []), "code", []) == "es")) {
                    // line 43
                    echo "                                    <img src=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "web/assets/flag-icon-css/flags/4x3/es.svg\" width=\"36px\">
                                ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 44
($context["user"] ?? null), "language", []), "code", []) == "it")) {
                    // line 45
                    echo "                                    <img src=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "web/assets/flag-icon-css/flags/4x3/it.svg\" width=\"36px\">
                                ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 46
($context["user"] ?? null), "language", []), "code", []) == "pl")) {
                    // line 47
                    echo "                                    <img src=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "web/assets/flag-icon-css/flags/4x3/pl.svg\" width=\"36px\">
                                ";
                }
                // line 49
                echo "                            ";
            }
            // line 50
            echo "                        </div>
                        <!-- End language flag -->

                        <!-- Language cible -->
                        <div class=\"avatar-lc\">
                            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extra_info"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 56
                echo "                                ";
                if (($this->getAttribute($context["item"], "variable", []) == "langue_cible")) {
                    // line 57
                    echo "                                    ";
                    if (($this->getAttribute($context["item"], "value", []) == "French2")) {
                        // line 58
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/fr.svg\" width=\"36px\">
                                    ";
                    } elseif (($this->getAttribute(                    // line 59
$context["item"], "value", []) == "German2")) {
                        // line 60
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/de.svg\" width=\"36px\">
                                    ";
                    } elseif (($this->getAttribute(                    // line 61
$context["item"], "value", []) == "Spanish")) {
                        // line 62
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/es.svg\" width=\"36px\">
                                    ";
                    } elseif (($this->getAttribute(                    // line 63
$context["item"], "value", []) == "Italian")) {
                        // line 64
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/it.svg\" width=\"36px\">
                                    ";
                    } elseif (($this->getAttribute(                    // line 65
$context["item"], "value", []) == "Polish")) {
                        // line 66
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/pl.svg\" width=\"36px\">
                                    ";
                    } elseif (($this->getAttribute(                    // line 67
$context["item"], "value", []) == "English")) {
                        // line 68
                        echo "                                        <img src=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                        echo "web/assets/flag-icon-css/flags/4x3/gb.svg\" width=\"36px\">
                                    ";
                    }
                    // line 70
                    echo "                                ";
                }
                // line 71
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                        </div>
                        <!-- End language cible -->
                        ";
        }
        // line 75
        echo "                    </div>
                    ";
        // line 77
        echo "                    <ul class=\"list-user-data\">
                        <li class=\"item item-name\">
                            <h5>";
        // line 79
        echo $this->getAttribute(($context["user"] ?? null), "complete_name", []);
        echo " </h5>
                        </li>

                        ";
        // line 82
        if (($context["show_full_profile"] ?? null)) {
            // line 83
            echo "                            ";
            if ($this->getAttribute(($context["user"] ?? null), "email", [])) {
                // line 84
                echo "                            <li class=\"item\">
                                <a href=\"";
                // line 85
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "main/messages/new_message.php\">
                                    ";
                // line 86
                echo Display::get_image("sn-message.png", 22, get_lang("Email"));
                echo "
                                    <div class=\"email-overflow\">";
                // line 87
                echo $this->getAttribute(($context["user"] ?? null), "email", []);
                echo "</div>
                                </a>
                            </li>
                            ";
            }
            // line 91
            echo "
                            ";
            // line 92
            if (($context["vcard_user_link"] ?? null)) {
                // line 93
                echo "                                <li class=\"item\">
                                    <a href=\"";
                // line 94
                echo ($context["vcard_user_link"] ?? null);
                echo "\">
                                        ";
                // line 95
                echo Display::get_image("vcard.png", 22, get_lang("BusinessCard"));
                echo "
                                        ";
                // line 96
                echo get_lang("BusinessCard");
                echo "
                                    </a>
                                </li>
                            ";
            }
            // line 100
            echo "
                            ";
            // line 101
            $context["skype_account"] = "";
            // line 102
            echo "                            ";
            $context["linkedin_url"] = "";
            // line 103
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "extra", []));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 104
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["extra"], "value", []), "getField", [], "method"), "getVariable", [], "method") == "skype")) {
                    // line 105
                    echo "                                    ";
                    ob_start(function () { return ''; });
                    // line 106
                    echo "                                    <a href=\"skype:";
                    echo $this->getAttribute($this->getAttribute($context["extra"], "value", []), "getValue", [], "method");
                    echo "?chat\">
                                        <span class=\"fa fa-skype fa-fw\" aria-hidden=\"true\"></span> ";
                    // line 107
                    echo get_lang("Skype");
                    echo "
                                    </a>
                                    ";
                    $context["skype_account"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 110
                    echo "                                ";
                }
                // line 111
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["extra"], "value", []), "getField", [], "method"), "getVariable", [], "method") == "linkedin_url")) {
                    // line 112
                    echo "                                    ";
                    ob_start(function () { return ''; });
                    // line 113
                    echo "                                        <a href=\"";
                    echo $this->getAttribute($this->getAttribute($context["extra"], "value", []), "getValue", [], "method");
                    echo "\" target=\"_blank\">
                                            <span class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></span> ";
                    // line 114
                    echo get_lang("LinkedIn");
                    echo "
                                        </a>
                                    ";
                    $context["linkedin_url"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 117
                    echo "                                ";
                }
                // line 118
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "
                            ";
            // line 120
            if (((api_get_setting("allow_show_skype_account") == "true") &&  !twig_test_empty(($context["skype_account"] ?? null)))) {
                // line 121
                echo "                                <li class=\"item\">
                                    ";
                // line 122
                echo Security::remove_XSS(($context["skype_account"] ?? null));
                echo "
                                </li>
                            ";
            }
            // line 125
            echo "
                            ";
            // line 126
            if (((api_get_setting("allow_show_linkedin_url") == "true") &&  !twig_test_empty(($context["linkedin_url"] ?? null)))) {
                // line 127
                echo "                                <li class=\"item\">
                                    ";
                // line 128
                echo Security::remove_XSS(($context["linkedin_url"] ?? null));
                echo "
                                </li>
                            ";
            }
            // line 131
            echo "                        ";
        }
        // line 132
        echo "                        ";
        if ((($context["chat_enabled"] ?? null) == 1)) {
            // line 133
            echo "                            ";
            if (($this->getAttribute(($context["user"] ?? null), "user_is_online_in_chat", []) != 0)) {
                // line 134
                echo "                                ";
                if ((($context["user_relation"] ?? null) == ($context["user_relation_type_friend"] ?? null))) {
                    // line 135
                    echo "                                    <li class=\"item\">
                                        <a
                                            onclick=\"javascript:chatWith('";
                    // line 137
                    echo $this->getAttribute(($context["user"] ?? null), "id", []);
                    echo "', '";
                    echo $this->getAttribute(($context["user"] ?? null), "complete_name", []);
                    echo "', '";
                    echo $this->getAttribute(($context["user"] ?? null), "user_is_online", []);
                    echo "','";
                    echo $this->getAttribute(($context["user"] ?? null), "avatar_small", []);
                    echo "')\"
                                            href=\"javascript:void(0);\"
                                        >
                                            <img src=\"";
                    // line 140
                    echo Display::get_icon_path("online.png");
                    echo "\" alt=\"";
                    echo get_lang("Online");
                    echo "\">
                                            ";
                    // line 141
                    echo get_lang("Chat");
                    echo " (";
                    echo get_lang("Online");
                    echo ")
                                        </a>
                                    </li>
                                ";
                }
                // line 145
                echo "                            ";
            }
            // line 146
            echo "                        ";
        }
        // line 147
        echo "                    <dl class=\"list-info\">
                        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extra_info"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 149
            echo "                            ";
            if (($this->getAttribute($context["item"], "variable", []) != "langue_cible")) {
                // line 150
                echo "                            <dt>";
                echo $this->getAttribute($context["item"], "label", []);
                echo ":</dt>
                            <dd>";
                // line 151
                echo Security::remove_XSS($this->getAttribute($context["item"], "value", []));
                echo "</dd>
                            ";
            }
            // line 153
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                    </dl>

                    ";
        // line 156
        if ( !twig_test_empty(($context["profile_edition_link"] ?? null))) {
            // line 157
            echo "                        <li class=\"item\">
                            <a class=\"btn btn-default btn-sm btn-block\" href=\"";
            // line 158
            echo ($context["profile_edition_link"] ?? null);
            echo "\">
                            <em class=\"fa fa-edit\"></em>";
            // line 159
            echo get_lang("EditProfile");
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 163
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "default/social/user_block.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 163,  446 => 159,  442 => 158,  439 => 157,  437 => 156,  433 => 154,  427 => 153,  422 => 151,  417 => 150,  414 => 149,  410 => 148,  407 => 147,  404 => 146,  401 => 145,  392 => 141,  386 => 140,  374 => 137,  370 => 135,  367 => 134,  364 => 133,  361 => 132,  358 => 131,  352 => 128,  349 => 127,  347 => 126,  344 => 125,  338 => 122,  335 => 121,  333 => 120,  330 => 119,  324 => 118,  321 => 117,  315 => 114,  310 => 113,  307 => 112,  304 => 111,  301 => 110,  295 => 107,  290 => 106,  287 => 105,  284 => 104,  279 => 103,  276 => 102,  274 => 101,  271 => 100,  264 => 96,  260 => 95,  256 => 94,  253 => 93,  251 => 92,  248 => 91,  241 => 87,  237 => 86,  233 => 85,  230 => 84,  227 => 83,  225 => 82,  219 => 79,  215 => 77,  212 => 75,  207 => 72,  201 => 71,  198 => 70,  192 => 68,  190 => 67,  185 => 66,  183 => 65,  178 => 64,  176 => 63,  171 => 62,  169 => 61,  164 => 60,  162 => 59,  157 => 58,  154 => 57,  151 => 56,  147 => 55,  140 => 50,  137 => 49,  131 => 47,  129 => 46,  124 => 45,  122 => 44,  117 => 43,  115 => 42,  110 => 41,  108 => 40,  103 => 39,  100 => 38,  98 => 37,  94 => 35,  92 => 34,  89 => 33,  82 => 29,  78 => 27,  76 => 26,  72 => 25,  65 => 20,  54 => 14,  50 => 13,  46 => 11,  44 => 10,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/user_block.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\social\\user_block.tpl");
    }
}
