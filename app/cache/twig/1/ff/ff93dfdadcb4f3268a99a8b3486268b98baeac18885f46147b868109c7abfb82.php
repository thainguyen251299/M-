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

/* default/course_home/about.tpl */
class __TwigTemplate_ce367dd1ec17f1332e95f4c846deaa2456fedf5f127afe0f825ac6f29e218e9f extends \Twig\Template
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
        echo "<div id=\"about-course\">
    <div id=\"course-info-top\">
        <h2 class=\"session-title\">";
        // line 3
        echo $this->getAttribute(($context["course"] ?? null), "title", []);
        echo "</h2>
        <div class=\"course-short\">
            <ul>
                <li class=\"author\">";
        // line 6
        echo get_lang("Professors");
        echo "</li>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "teachers", []));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 8
            echo "                    <li>";
            echo $this->getAttribute($context["teacher"], "complete_name", []);
            echo " | </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </ul>
        </div>
    </div>

    ";
        // line 14
        $context["course_video"] = "";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "extra_fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["extra_field"]) {
            // line 16
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["extra_field"], "value", []), "getField", [], "method"), "getVariable", [], "method") == "video_url")) {
                // line 17
                echo "            ";
                $context["course_video"] = $this->getAttribute($this->getAttribute($context["extra_field"], "value", []), "getValue", [], "method");
                // line 18
                echo "        ";
            }
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    ";
        // line 25
        if (($context["course_video"] ?? null)) {
            // line 26
            echo "                    <div class=\"course-video\">
                        <div class=\"embed-responsive embed-responsive-16by9\">
                            ";
            // line 28
            echo $this->getAttribute(($context["essence"] ?? null), "replace", [0 => ($context["course_video"] ?? null)], "method");
            echo "
                        </div>
                    </div>
                    ";
        } else {
            // line 32
            echo "                    <div class=\"course-image\">
                        <img src=\"";
            // line 33
            echo $this->getAttribute(($context["course"] ?? null), "image", []);
            echo "\" class=\"img-responsive\" />
                    </div>
                    ";
        }
        // line 36
        echo "                    ";
        if ( !api_get_configuration_value("hide_social_media_links")) {
            // line 37
            echo "                    <div class=\"share-social-media\">
                        <ul class=\"sharing-buttons\">
                            <li>
                                ";
            // line 40
            echo get_lang("ShareWithYourFriends");
            echo "
                            </li>
                            <li>
                                <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 43
            echo ($context["url"] ?? null);
            echo "\"
                                   target=\"_blank\" class=\"btn btn-facebook btn-inverse btn-xs\">
                                    <em class=\"fa fa-facebook\"></em> Facebook
                                </a>
                            </li>
                            <li>
                                <a href=\"https://twitter.com/home?";
            // line 49
            echo twig_urlencode_filter(["status" => (($this->getAttribute(($context["course"] ?? null), "title", []) . " ") . ($context["url"] ?? null))]);
            echo "\"
                                   target=\"_blank\" class=\"btn btn-twitter btn-inverse btn-xs\">
                                    <em class=\"fa fa-twitter\"></em> Twitter
                                </a>
                            </li>
                            <li>
                                <a href=\"https://www.linkedin.com/shareArticle?";
            // line 55
            echo twig_urlencode_filter(["mini" => "true", "url" => ($context["url"] ?? null), "title" => $this->getAttribute(($context["course"] ?? null), "title", [])]);
            echo "\"
                                   target=\"_blank\" class=\"btn btn-linkedin btn-inverse btn-xs\">
                                    <em class=\"fa fa-linkedin\"></em> Linkedin
                                </a>
                            </li>
                        </ul>
                    </div>
                    ";
        }
        // line 63
        echo "                </div>
                <div class=\"col-sm-7\">
                    <div class=\"course-description\">
                        ";
        // line 66
        echo Security::remove_XSS($this->getAttribute(($context["course"] ?? null), "description", []));
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 70
        if ($this->getAttribute(($context["course"] ?? null), "tags", [])) {
            // line 71
            echo "                <div class=\"panel-tags\">
                    <ul class=\"list-inline course-tags\">
                        <li>";
            // line 73
            echo get_lang("Tags");
            echo " :</li>
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "tags", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 75
                echo "                            <li class=\"tag-value\">
                                <span>";
                // line 76
                echo Security::remove_XSS($this->getAttribute($context["tag"], "getTag", []));
                echo "</span>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                    </ul>
                </div>
            ";
        }
        // line 82
        echo "        </div>
    </div>
    <section id=\"course-info-bottom\" class=\"course\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <h3 class=\"sub-title\">";
        // line 89
        echo get_lang("CourseInformation");
        echo "</h3>
                        <div class=\"course-information\">
                            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "syllabus", []));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 92
            echo "                                ";
            if (($this->getAttribute($context["topic"], "content", []) != "")) {
                // line 93
                echo "                                    <div class=\"topics\">
                                        <h4 class=\"title-info\">
                                            <em class=\"fa fa-book\"></em> ";
                // line 95
                echo Security::remove_XSS($this->getAttribute($context["topic"], "title", []));
                echo "
                                        </h4>
                                        <div class=\"content-info\">
                                            ";
                // line 98
                echo Security::remove_XSS($this->getAttribute($context["topic"], "content", []));
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 102
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                ";
        // line 108
        if ((($context["allow_subscribe"] ?? null) == true)) {
            // line 109
            echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
            // line 111
            if ((($context["is_premium"] ?? null) == false)) {
                // line 112
                echo "                            <div class=\"session-subscribe\">
                                ";
                // line 114
                echo "                                ";
                if ((3 == $this->getAttribute(($context["course"] ?? null), "visibility", []))) {
                    // line 115
                    echo "                                    <a href=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "courses/";
                    echo $this->getAttribute(($context["course"] ?? null), "code", []);
                    echo "/index.php?id_session=0\"
                                       class=\"btn btn-lg btn-success btn-block\">
                                        ";
                    // line 117
                    echo get_lang("CourseHomepage");
                    echo "
                                    </a>
                                ";
                } elseif (($this->getAttribute(                // line 119
($context["_u"] ?? null), "logged", []) == 0)) {
                    // line 120
                    echo "                                    ";
                    if ((api_get_setting("allow_registration") != "false")) {
                        // line 121
                        echo "                                        <a
                                            href=\"";
                        // line 122
                        echo (($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "auth/inscription.php") . ($context["redirect_to_session"] ?? null));
                        echo "\"
                                            class=\"btn btn-success btn-block btn-lg\">
                                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                            ";
                        // line 125
                        echo get_lang("SignUp");
                        echo "
                                        </a>
                                    ";
                    }
                    // line 128
                    echo "                                ";
                } elseif ($this->getAttribute(($context["course"] ?? null), "subscription", [])) {
                    // line 129
                    echo "                                    <a href=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "courses/";
                    echo $this->getAttribute(($context["course"] ?? null), "code", []);
                    echo "/index.php?id_session=0\"
                                       class=\"btn btn-lg btn-success btn-block\">
                                        ";
                    // line 131
                    echo get_lang("CourseHomepage");
                    echo "
                                    </a>
                                ";
                } else {
                    // line 134
                    echo "                                    <a
                                        href=\"";
                    // line 135
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "courses/";
                    echo $this->getAttribute(($context["course"] ?? null), "code", []);
                    echo "/index.php?action=subscribe&sec_token=";
                    echo ($context["token"] ?? null);
                    echo "\"
                                       class=\"btn btn-lg btn-success btn-block\">
                                        ";
                    // line 137
                    echo get_lang("Subscribe");
                    echo "
                                    </a>
                                ";
                }
                // line 140
                echo "                            </div>
                        ";
            } else {
                // line 142
                echo "                            <div class=\"session-price\">
                                <div class=\"sale-price\">
                                    ";
                // line 144
                echo get_lang("SalePrice");
                echo "
                                </div>
                                <div class=\"price-text\">
                                    ";
                // line 147
                echo $this->getAttribute(($context["is_premium"] ?? null), "total_price_formatted", []);
                echo "
                                </div>
                                <div class=\"buy-box\">
                                    <a
                                        href=\"";
                // line 151
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "plugin/buycourses/src/process.php?i=";
                echo $this->getAttribute(($context["is_premium"] ?? null), "product_id", []);
                echo "&t=";
                echo $this->getAttribute(($context["is_premium"] ?? null), "product_type", []);
                echo "\"
                                        class=\"btn btn-lg btn-primary btn-block\">
                                        ";
                // line 153
                echo get_lang("BuyNow");
                echo "
                                    </a>
                                </div>
                            </div>
                        ";
            }
            // line 158
            echo "
                        ";
            // line 159
            if (($context["has_requirements"] ?? null)) {
                // line 160
                echo "                            <div class=\"session-requirements\">
                                <h5>";
                // line 161
                echo get_lang("RequiredCourses");
                echo "</h5>
                                ";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["sequences"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                    // line 163
                    echo "                                    ";
                    if ($this->getAttribute($context["sequence"], "requirements", [])) {
                        // line 164
                        echo "                                        <p>
                                            ";
                        // line 165
                        echo $this->getAttribute($context["sequence"], "name", []);
                        echo " :
                                            ";
                        // line 166
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sequence"], "requirements", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                            // line 167
                            echo "                                                <a href=\"";
                            echo ((($this->getAttribute(($context["_p"] ?? null), "web", []) . "course/") . $this->getAttribute($context["requirement"], "getId", [])) . "/about/");
                            echo "\">
                                                    ";
                            // line 168
                            echo Security::remove_XSS($this->getAttribute($context["requirement"], "title", []));
                            echo "
                                                </a>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 171
                        echo "                                        </p>
                                    ";
                    }
                    // line 173
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "                            </div>
                        ";
            }
            // line 176
            echo "                    </div>
                </div>
                ";
        }
        // line 179
        echo "                ";
        if ($this->getAttribute(($context["course"] ?? null), "teachers", [])) {
            // line 180
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"panel-teachers\">
                                <h3 class=\"sub-title\">";
            // line 183
            echo get_lang("Coaches");
            echo "</h3>
                            </div>
                            ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "teachers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 186
                echo "                            <div class=\"coach-information\">
                                <div class=\"coach-header\">
                                    <div class=\"coach-avatar\">
                                        <img class=\"img-circle img-responsive\"
                                             src=\"";
                // line 190
                echo $this->getAttribute($context["teacher"], "image", []);
                echo "\"
                                             alt=\"";
                // line 191
                echo $this->getAttribute($context["teacher"], "complete_name", []);
                echo "\"
                                        >
                                    </div>
                                    <div class=\"coach-title\">
                                        <h4>";
                // line 195
                echo $this->getAttribute($context["teacher"], "complete_name", []);
                echo "</h4>
                                        <p> ";
                // line 196
                echo Security::remove_XSS($this->getAttribute($context["teacher"], "diploma", []));
                echo "</p>
                                    </div>
                                </div>
                                <div class=\"open-area  ";
                // line 199
                echo (((twig_length_filter($this->env, $this->getAttribute(($context["course"] ?? null), "teachers", [])) >= 2)) ? ("open-more") : (" "));
                echo "\">
                                    ";
                // line 200
                echo Security::remove_XSS($this->getAttribute($context["teacher"], "openarea", []));
                echo "
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "                        </div>
                    </div>
                ";
        }
        // line 207
        echo "            </div>
        </div>
    </section>
</div>

<script>
    \$(document).ready(function() {
        \$('.course-information').readmore({
            speed: 100,
            lessLink: '<a class=\"hide-content\" href=\"#\">";
        // line 216
        echo get_lang("SetInvisible");
        echo "</a>',
            moreLink: '<a class=\"read-more\" href=\"#\">";
        // line 217
        echo get_lang("ReadMore");
        echo "</a>',
            collapsedHeight: 730,
            heightMargin: 100
        });
        \$('.open-more').readmore({
            speed: 100,
            lessLink: '<a class=\"hide-content\" href=\"#\">";
        // line 223
        echo get_lang("SetInvisible");
        echo "</a>',
            moreLink: '<a class=\"read-more\" href=\"#\">";
        // line 224
        echo get_lang("ReadMore");
        echo "</a>',
            collapsedHeight: 90,
            heightMargin: 20
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "default/course_home/about.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 224,  521 => 223,  512 => 217,  508 => 216,  497 => 207,  492 => 204,  482 => 200,  478 => 199,  472 => 196,  468 => 195,  461 => 191,  457 => 190,  451 => 186,  447 => 185,  442 => 183,  437 => 180,  434 => 179,  429 => 176,  425 => 174,  419 => 173,  415 => 171,  406 => 168,  401 => 167,  397 => 166,  393 => 165,  390 => 164,  387 => 163,  383 => 162,  379 => 161,  376 => 160,  374 => 159,  371 => 158,  363 => 153,  354 => 151,  347 => 147,  341 => 144,  337 => 142,  333 => 140,  327 => 137,  318 => 135,  315 => 134,  309 => 131,  301 => 129,  298 => 128,  292 => 125,  286 => 122,  283 => 121,  280 => 120,  278 => 119,  273 => 117,  265 => 115,  262 => 114,  259 => 112,  257 => 111,  253 => 109,  251 => 108,  244 => 103,  238 => 102,  231 => 98,  225 => 95,  221 => 93,  218 => 92,  214 => 91,  209 => 89,  200 => 82,  195 => 79,  186 => 76,  183 => 75,  179 => 74,  175 => 73,  171 => 71,  169 => 70,  162 => 66,  157 => 63,  146 => 55,  137 => 49,  128 => 43,  122 => 40,  117 => 37,  114 => 36,  108 => 33,  105 => 32,  98 => 28,  94 => 26,  92 => 25,  85 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  65 => 15,  63 => 14,  57 => 10,  48 => 8,  44 => 7,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/course_home/about.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\course_home\\about.tpl");
    }
}
