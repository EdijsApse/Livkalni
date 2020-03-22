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

/* /mnt/c/www/Livkalni/themes/demo/partials/site/header.htm */
class __TwigTemplate_ecd3c48e26530437eb906e3b8a02d36c209538df3a24c99ba6a77998c814f377 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg align-items-start\">
    <a class=\"navbar-brand py-0\" href=\"/\">
        <img class=\"img-fluid\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Līveklanu logo\" />
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fa fa-bars hamburger-icon\"></i>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link p-0\" href=\"#\">Sākums</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link p-0\" href=\"#\">Galerija</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link p-0\" href=\"#\">Cenas</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link p-0\" href=\"#\">Kontakti</a>
            </li>
        </ul>
        <div class=\"menu-controls-sm\">
            <div class=\"d-flex justify-content-center sm-language-select\">
                <a class=\"language active\" href=\"#\">LV</a>
                <a class=\"language\" href=\"#\">EN</a>
                <a class=\"language\" href=\"#\">RU</a>
            </div>
            <div class=\"d-flex justify-content-center reservation\">
                <a href=\"#\" class=\"text-center main-button\">Rezervēt</a>
            </div>
        </div>
    </div>
    <div class=\"d-flex align-items-center menu-controls\">
        <div class=\"dropdown d-flex align-items-center\">
            <span id=\"lang-select\" class=\"d-flex\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <p class=\"mb-0\">LV</p>
                <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow-down.svg");
        echo "\" />
            </span>
            <div class=\"dropdown-menu\" aria-labelledby=\"lang-select\">
                <a class=\"dropdown-item active\" href=\"#\">LV</a>
                <a class=\"dropdown-item\" href=\"#\">EN</a>
                <a class=\"dropdown-item\" href=\"#\">RU</a>
            </div>
        </div>
        <a href=\"#\" class=\"main-button\">Rezervēt</a>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/mnt/c/www/Livkalni/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 38,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg align-items-start\">
    <a class=\"navbar-brand py-0\" href=\"/\">
        <img class=\"img-fluid\" src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"Līveklanu logo\" />
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fa fa-bars hamburger-icon\"></i>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link p-0\" href=\"#\">Sākums</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link p-0\" href=\"#\">Galerija</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link p-0\" href=\"#\">Cenas</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link p-0\" href=\"#\">Kontakti</a>
            </li>
        </ul>
        <div class=\"menu-controls-sm\">
            <div class=\"d-flex justify-content-center sm-language-select\">
                <a class=\"language active\" href=\"#\">LV</a>
                <a class=\"language\" href=\"#\">EN</a>
                <a class=\"language\" href=\"#\">RU</a>
            </div>
            <div class=\"d-flex justify-content-center reservation\">
                <a href=\"#\" class=\"text-center main-button\">Rezervēt</a>
            </div>
        </div>
    </div>
    <div class=\"d-flex align-items-center menu-controls\">
        <div class=\"dropdown d-flex align-items-center\">
            <span id=\"lang-select\" class=\"d-flex\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <p class=\"mb-0\">LV</p>
                <img src=\"{{ 'assets/images/arrow-down.svg'|theme }}\" />
            </span>
            <div class=\"dropdown-menu\" aria-labelledby=\"lang-select\">
                <a class=\"dropdown-item active\" href=\"#\">LV</a>
                <a class=\"dropdown-item\" href=\"#\">EN</a>
                <a class=\"dropdown-item\" href=\"#\">RU</a>
            </div>
        </div>
        <a href=\"#\" class=\"main-button\">Rezervēt</a>
    </div>
</nav>", "/mnt/c/www/Livkalni/themes/demo/partials/site/header.htm", "");
    }
}
