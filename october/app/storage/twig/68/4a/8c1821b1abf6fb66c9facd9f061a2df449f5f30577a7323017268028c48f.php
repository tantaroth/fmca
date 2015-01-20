<?php

/* /var/www/html/fmca/october/themes/jtherczeg-multi/partials/nav.htm */
class __TwigTemplate_684a8c1821b1abf6fb66c9facd9f061a2df449f5f30577a7323017268028c48f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#home\"><img src=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"scroll active\"><a href=\"#home\">Home</a></li>
                        <li class=\"scroll\"><a href=\"#features\">Features</a></li>
                        <li class=\"scroll\"><a href=\"#services\">Services</a></li>
                        <li class=\"scroll\"><a href=\"#portfolio\">Portfolio</a></li>
                        <li class=\"scroll\"><a href=\"#about\">About</a></li>
                        <li class=\"scroll\"><a href=\"#meet-team\">Team</a></li>
                        <li class=\"scroll\"><a href=\"#pricing\">Pricing</a></li>
                        <li class=\"scroll\"><a href=\"#blog\">Blog</a></li> 
                        <li class=\"scroll\"><a href=\"#get-in-touch\">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/fmca/october/themes/jtherczeg-multi/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
