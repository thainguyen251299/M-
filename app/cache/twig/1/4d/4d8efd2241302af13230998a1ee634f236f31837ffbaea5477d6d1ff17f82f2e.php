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

/* default/social/profile.tpl */
class __TwigTemplate_caac1fd4717b8ae9524fd491ce1a07927295aa1ec67e06daa5e41d56c2dc01dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/social/profile.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <style>
        #listFriends .list-group {
            max-height: 250px;
            overflow-y:auto;
        }
    </style>
<div class=\"row\">
    <div class=\"col-md-3\">
        ";
        // line 12
        echo ($context["social_avatar_block"] ?? null);
        echo "
        ";
        // line 13
        echo ($context["social_extra_info_block"] ?? null);
        echo "
        <div class=\"social-network-menu\">
            ";
        // line 15
        echo ($context["social_menu_block"] ?? null);
        echo "
        </div>
    </div>
    <div id=\"wallMessages\" class=\"col-md-6\">
        ";
        // line 19
        echo ($context["add_post_form"] ?? null);
        echo "
        <div class=\"spinner\"></div>
        <div class=\"panel panel-preview panel-default\" hidden=\"true\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 23
        echo get_lang("Url");
        echo " - ";
        echo get_lang("Preview");
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"url_preview\"></div>
            </div>
        </div>
        ";
        // line 29
        echo ($context["posts"] ?? null);
        echo "
        ";
        // line 30
        echo ($context["social_auto_extend_link"] ?? null);
        echo "
    </div>
    <div class=\"col-md-3\">
        ";
        // line 33
        echo ($context["social_group_info_block"] ?? null);
        echo "
        <div class=\"chat-friends\">
            <div class=\"panel-group\" id=\"blocklistFriends\" role=\"tablist\" aria-multiselectable=\"true\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                        <h4 class=\"panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#blocklistFriends\" href=\"#listFriends\" aria-expanded=\"true\" aria-controls=\"listFriends\">
                                ";
        // line 40
        echo get_lang("SocialFriend");
        echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"listFriends\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                        <div class=\"panel-body\">
                            ";
        // line 46
        echo ($context["social_friend_block"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 53
        echo ($context["social_skill_block"] ?? null);
        echo "

        <!-- Block course list -->
        ";
        // line 56
        if ((($context["social_course_block"] ?? null) != null)) {
            // line 57
            echo "        <div class=\"panel-group\" id=\"course-block\" role=\"tablist\" aria-multiselectable=\"true\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                    <h4 class=\"panel-title\">
                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#course-block\" href=\"#courseList\" aria-expanded=\"true\" aria-controls=\"courseList\">
                            ";
            // line 62
            echo get_lang("MyCourses");
            echo "
                        </a>
                    </h4>
                </div>
                <div id=\"courseList\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                    <div class=\"panel-body\">
                        <ul class=\"list-group\">
                            ";
            // line 69
            echo ($context["social_course_block"] ?? null);
            echo "
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 76
        echo "        <!-- Block session list -->
        ";
        // line 77
        if ((($context["session_list"] ?? null) != null)) {
            // line 78
            echo "        <div class=\"panel-group\" id=\"session-block\" role=\"tablist\" aria-multiselectable=\"true\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                    <h4 class=\"panel-title\">
                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#session-block\" href=\"#sessionList\" aria-expanded=\"true\" aria-controls=\"sessionList\">
                           ";
            // line 83
            echo get_lang("MySessions");
            echo "
                        </a>
                    </h4>
                </div>
                <div id=\"sessionList\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                    <div class=\"panel-body\">
                        <ul class=\"list-group\">
                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["session_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 91
                echo "                            <li id=\"session_";
                echo $this->getAttribute($context["session"], "id", []);
                echo "\" class=\"list-group-item\" style=\"min-height:65px;\">
                                <img class=\"img-session\" src=\"";
                // line 92
                echo $this->getAttribute($context["session"], "image", []);
                echo "\"/>
                                <span class=\"title\">";
                // line 93
                echo $this->getAttribute($context["session"], "name", []);
                echo "</span>
                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                        </ul>
                    </div>
                </div>
            </div>
         </div>
        ";
        }
        // line 102
        echo "        ";
        echo ($context["invitations"] ?? null);
        echo "
        ";
        // line 103
        echo ($context["social_rss_block"] ?? null);
        echo "
        ";
        // line 104
        echo ($context["social_right_information"] ?? null);
        echo "
    </div>
</div>

";
        // line 108
        if (array_key_exists("form_modals", $context)) {
            // line 109
            echo "    ";
            echo ($context["form_modals"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/social/profile.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 109,  227 => 108,  220 => 104,  216 => 103,  211 => 102,  203 => 96,  194 => 93,  190 => 92,  185 => 91,  181 => 90,  171 => 83,  164 => 78,  162 => 77,  159 => 76,  149 => 69,  139 => 62,  132 => 57,  130 => 56,  124 => 53,  114 => 46,  105 => 40,  95 => 33,  89 => 30,  85 => 29,  74 => 23,  67 => 19,  60 => 15,  55 => 13,  51 => 12,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/profile.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\social\\profile.tpl");
    }
}
