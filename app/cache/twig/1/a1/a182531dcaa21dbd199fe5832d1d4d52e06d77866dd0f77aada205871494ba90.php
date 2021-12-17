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

/* default/social/home.tpl */
class __TwigTemplate_6f18507bd547482e615466f4b91c9dd4d0ce6c2082f578216a6888028bdaeac3 extends \Twig\Template
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
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/social/home.tpl", 1);
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

            <div class=\"social-network-menu\">
            ";
        // line 15
        echo ($context["social_menu_block"] ?? null);
        echo "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div id=\"wallMessages\">
                ";
        // line 20
        echo ($context["add_post_form"] ?? null);
        echo "
                <div class=\"spinner\"></div>
                <div class=\"panel panel-preview panel-default\" hidden=\"true\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 24
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
        // line 30
        echo ($context["posts"] ?? null);
        echo "
                ";
        // line 31
        echo ($context["social_auto_extend_link"] ?? null);
        echo "
            </div>

            ";
        // line 34
        echo ($context["social_right_content"] ?? null);
        echo "
            <div id=\"message_ajax_reponse\" class=\"\"></div>
            <div id=\"display_response_id\"></div>
        </div>
        <div class=\"col-md-3\">
            ";
        // line 39
        echo ($context["social_group_block"] ?? null);
        echo "
            <!-- Block chat list -->
            <div class=\"chat-friends\">
                <div class=\"panel-group\" id=\"blocklistFriends\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\"
                                   data-toggle=\"collapse\"
                                   data-parent=\"#blocklistFriends\"
                                   href=\"#listFriends\"
                                   aria-expanded=\"true\"
                                   aria-controls=\"listFriends\">
                                    ";
        // line 52
        echo get_lang("SocialFriend");
        echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"listFriends\"
                             class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body\">
                                <div class=\"search-friend\">
                                    ";
        // line 60
        echo ($context["search_friends_form"] ?? null);
        echo "
                                </div>

                                ";
        // line 63
        echo ($context["social_friend_block"] ?? null);
        echo "

                                ";
        // line 65
        if (api_get_configuration_value("allow_social_map_fields")) {
            // line 66
            echo "                                <div class=\"geolocalization\">
                                    <a class=\"btn btn-maps\" id=\"profile-tab\" href=\"";
            // line 67
            echo $this->getAttribute(($context["_p"] ?? null), "web", []);
            echo "main/social/map.php\" >
                                        ";
            // line 68
            echo Display::get_image("geolocalization.png", 32);
            echo "
                                        ";
            // line 69
            echo get_lang("SearchUserByGeolocalization");
            echo "
                                    </a>
                                </div>
                                ";
        }
        // line 73
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 79
        echo ($context["social_skill_block"] ?? null);
        echo "

            <!-- Block session list -->
            ";
        // line 82
        if ((($context["session_list"] ?? null) != null)) {
            // line 83
            echo "            <div class=\"panel-group\" id=\"session-block\" role=\"tablist\" aria-multiselectable=\"true\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                        <h4 class=\"panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#session-block\" href=\"#sessionList\" aria-expanded=\"true\" aria-controls=\"sessionList\">
                               ";
            // line 88
            echo get_lang("MySessions");
            echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"sessionList\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                        <div class=\"panel-body\">
                            <ul class=\"list-group\">
                                ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["session_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 96
                echo "                                <li id=\"session_";
                echo $this->getAttribute($context["session"], "id", []);
                echo "\" class=\"list-group-item\" style=\"min-height:65px;\">
                                    <img class=\"img-session\" src=\"";
                // line 97
                echo $this->getAttribute($context["session"], "image", []);
                echo "\"/>
                                    <span class=\"title\">";
                // line 98
                echo $this->getAttribute($context["session"], "name", []);
                echo "</span>
                                </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                            </ul>
                        </div>
                    </div>
                </div>
             </div>
             ";
        }
        // line 107
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/social/home.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 107,  214 => 101,  205 => 98,  201 => 97,  196 => 96,  192 => 95,  182 => 88,  175 => 83,  173 => 82,  167 => 79,  159 => 73,  152 => 69,  148 => 68,  144 => 67,  141 => 66,  139 => 65,  134 => 63,  128 => 60,  117 => 52,  101 => 39,  93 => 34,  87 => 31,  83 => 30,  72 => 24,  65 => 20,  57 => 15,  51 => 12,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/home.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\social\\home.tpl");
    }
}
