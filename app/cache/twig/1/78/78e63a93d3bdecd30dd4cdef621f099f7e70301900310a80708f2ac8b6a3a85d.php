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

/* default/javascript/editor/ckeditor/config_js.tpl */
class __TwigTemplate_0ca58e0b8864108732d4d905846e506dba7068fa40338ef2ab67555e51dd9abc extends \Twig\Template
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
        echo "/* Ckeditor global configuration file */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here.
    // For complete reference see:
    // http://docs.ckeditor.com/#!/api/CKEDITOR.config

    // Remove some buttons provided by the standard plugins, which are
    // not needed in the Standard(s) toolbar.
    //config.removeButtons = 'Underline,Subscript,Superscript';

    // Set the most common block elements.
    config.format_tags = 'p;h1;h2;h3;h4;h5;h6;pre';

    // Simplify the dialog windows.
    config.removeDialogTabs = 'image:advanced;link:advanced';

    config.templates_files  = [
        '";
        // line 19
        echo ($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "inc/lib/elfinder/templates.php");
        echo "'
    ];
    //Style for default CKEditor Chamilo LMS
    config.stylesSet = [
        {
            name : 'Title 1',
            element : 'h1',
            attributes : { 'class': 'ck ck-title' }
        },
        {
            name : 'Title 2',
            element : 'h2',
            attributes : { 'class': 'ck ck-title2' }
        },
        {
            name : 'Alert Success',
            element : 'div',
            attributes : { 'class': 'alert alert-success' }
        },
        {
            name : 'Alert Info',
            element : 'div',
            attributes : { 'class': 'alert alert-info' }
        },
        {
            name : 'Alert Warning',
            element : 'div',
            attributes : { 'class': 'alert alert-warning' }
        },
        {
            name : 'Alert Danger',
            element : 'div',
            attributes : { 'class': 'alert alert-danger' }
        },
        {
            name : 'Section Article' ,
            element : 'h3' ,
            attributes : { 'class': 'ck ck-article' }
        }, {
            name : 'Paragraph box' ,
            element : 'p' ,
            attributes: { 'class': 'ck-paragraph-box' }
        }, {
            name : 'Superscript' ,
            element : 'sup'
        },
        {
            name : 'Subscript' ,
            element : 'sub'
        },
        {
            name : 'Strikethrough' ,
            element : 'del'
        },
        {
            name : 'Underlined' ,
            element : 'ins'
        },
        {
            name : 'Stand Out' ,
            element : 'span',
            attributes: { 'class':'ck-stand-out'}
        },
        {
            name : 'Separate Style 1' ,
            element : 'hr',
            attributes: { 'class':'ck-style1'}
        },
        {
            name : 'Separate Style 2' ,
            element : 'hr',
            attributes: { 'class':'ck-style2'}
        },
        {
            name : 'Separate Style 3' ,
            element : 'hr',
            attributes: { 'class':'ck-style3'}
        }
    ];

    ";
        // line 99
        if (($context["moreButtonsInMaximizedMode"] ?? null)) {
            // line 100
            echo "        config.toolbar = 'minToolbar';
        config.smallToolbar = 'minToolbar';
        config.maximizedToolbar = 'maxToolbar';
    ";
        }
        // line 104
        echo "
    // File manager (elFinder)
    config.filebrowserBrowseUrl = '";
        // line 106
        echo ($this->getAttribute(($context["_p"] ?? null), "web_lib", []) . "elfinder/filemanager.php?");
        echo ($context["course_condition"] ?? null);
        echo "';
    config.videobrowserBrowseUrl = '";
        // line 107
        echo ($this->getAttribute(($context["_p"] ?? null), "web_lib", []) . "elfinder/filemanager.php?");
        echo ($context["course_condition"] ?? null);
        echo "';

    ";
        // line 109
        if (($context["enter_mode"] ?? null)) {
            // line 110
            echo "        config.enterMode = ";
            echo ($context["enter_mode"] ?? null);
            echo ";
    ";
        }
        // line 112
        echo "
    // Allows to use \"class\" attribute inside divs and spans.
    config.allowedContent = true;
    // Option to set the \"styles\" menu
    config.contentsCss = [
        '";
        // line 117
        echo ($context["bootstrap_css"] ?? null);
        echo "',
        '";
        // line 118
        echo ($context["font_awesome_css"] ?? null);
        echo "',
        '";
        // line 119
        echo ($context["css_editor"] ?? null);
        echo "',
    ];

    config.language_list = ['";
        // line 122
        echo ($context["language_list"] ?? null);
        echo "'];

    config.qMarkersRollsUrl = '";
        // line 124
        echo $this->getAttribute(($context["_p"] ?? null), "web_ajax", []);
        echo "exercise.ajax.php?a=get_quiz_embeddable';

    config.font_names = \"";
        // line 126
        echo ($context["font_names"] ?? null);
        echo "\";
};

// Sets default target to \"_blank\" in link plugin
CKEDITOR.on('dialogDefinition', function (ev) {
    if (ev.data.name == 'link'){
        ev.data.definition.getContents('target').get('linkTargetType')['default']='_blank';
    }
});";
    }

    public function getTemplateName()
    {
        return "default/javascript/editor/ckeditor/config_js.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 126,  190 => 124,  185 => 122,  179 => 119,  175 => 118,  171 => 117,  164 => 112,  158 => 110,  156 => 109,  150 => 107,  145 => 106,  141 => 104,  135 => 100,  133 => 99,  50 => 19,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/javascript/editor/ckeditor/config_js.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\javascript\\editor\\ckeditor\\config_js.tpl");
    }
}
