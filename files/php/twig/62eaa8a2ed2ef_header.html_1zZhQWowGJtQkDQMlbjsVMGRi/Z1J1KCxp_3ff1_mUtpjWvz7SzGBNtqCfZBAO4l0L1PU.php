<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @subbartik/includes/header.html */
class __TwigTemplate_d02ae851266df4670bef35ac8220469ddcce86ff5626193e91c117e82b5d94a9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"main-header\">
\t<a href=\"/home\">
\t\t<div id=\"logo-wrapper\" aria-level=\"1\">
\t\t\t<div id=\"flex-wrapper\">
\t\t\t<div>
\t\t\t\t<img src=\"/sites/default/files/2022-06/let-er-buck-logo.png\" alt=\"\" id=\"let-er-buck-logo\">
\t\t\t</div>
\t\t \t<div>
\t\t\t\t<span id=\"city-text\">City of</span>
\t\t\t\t<img src=\"/sites/default/files/2022-06/pendleton-wordmark-logo.png\" alt=\"City of Pendleton\" id=\"pendleton-wordmark-logo\">
\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"slogan-wrapper\">
\t\t\t\t<span id=\"main-slogan\">Working Everyday to be the Premier City in Eastern Oregon</span>
\t\t\t\t<div id=\"main-slogan-background-top\"></div>
\t\t\t\t<div id=\"main-slogan-background-bottom\"></div>
\t\t\t\t<div id=\"main-slogan-background-shadow\"></div>
\t\t\t</div>
\t\t</div>
\t</a>
\t<div id=\"main-navigation\">
\t\t<a href=\"https://pendleton.or.us/\" id=\"back-to-pendleton-link\">Return to the City of Pendleton</a>
\t\t<nav>
\t\t\t<a href=\"/\">Home</a>
\t\t\t<a href=\"https://pendleton.or.us/cdev\">CIFS Documents</a>
\t\t\t<a href=\"/projects-map\">Projects Map</a>
\t\t\t<a href=\"\">FAQs</a>
\t\t</nav>
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "@subbartik/includes/header.html";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@subbartik/includes/header.html", "/Users/telwoolsey/Desktop/Drupal Development/pendletonprojects/web/sites/default/themes/subbartik/templates/includes/header.html");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
