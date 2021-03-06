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

/* /mnt/c/www/Livkalni/themes/demo/partials/site/footer.htm */
class __TwigTemplate_dbdfdfbf8462b92a89bd9851a13dd3e9d3c56e4f6afd27d4c779a55367437049 extends \Twig\Template
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
        echo "<div class=\"row mx-0 flex-row-reverse\">
    <div class=\"col-12 col-sm-12 col-md-6 col-lg-4 p-0\">
        <div class=\"contacts\">
            <div class=\"contact-phone\">
                <h5 class=\"mb-43\">LAI REZERVĒTU MŪSU ATPŪTAS MĀJAS LŪDZU ZVANIET</h5>
                <h5 class=\"mb4\">Guntars</h5>
                <a class=\"phone-link\" href=\"tel:+37127881139\">+371 2788 1139</a>
                <h5 class=\"mb4 mt-24\">Iveta</h5>
                <a class=\"phone-link\" href=\"tel:+37126517416\">+371 2651 7416</a>
            </div>
            <div class=\"address\">
                <p>ADRESE:</p>
                <p>LĪVKALNA IELA 6, SIGULDA</p>
                <p>LV-2150, LATVIJA</p>
            </div>
        </div>
    </div>
    <div class=\"col-12 col-sm-12 col-md-6 col-lg-4 p-0 bg-line-right\">
        <div class=\"footer-section\">
            <div class=\"bg-line-bottom\">
                <h5>LAI VIEGLĀK PIE MUMS NOKĻŪTU LŪDZU LIETOJIET ŠOS LINKUS</h5>
                <div class=\"car-image\">
                    <img class=\"img-fluid\" alt=\"Car Location Icon\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/car-location.png");
        echo "\" />
                </div>
            </div>
            <div class=\"mb-19\">
                <h5>Rezervē  brīvdienu māju arī internetā</h5>
                <div class=\"car-image mb-0\">
                    <img class=\"img-fluid\" alt=\"Car Location Icon\" src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/car-location.png");
        echo "\" />
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-12 col-md-12 col-lg-4 p-0 bg-line-right menu-col\">
        <div class=\"d-flex flex-column h-100 menu-col-wrapper\">
            <div class=\"d-flex flex-grow-1\">
                <a class=\"footer-logo\" href=\"/\">
                    <img class=\"img-fluid\" src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Līveklanu logo\" />
                </a>
                <div class=\"d-flex footer-nav flex-column\">
                    <a class=\"footer-link\" href=\"#\">Sākums</a>
                    <a class=\"footer-link\" href=\"#\">Galerija</a>
                    <a class=\"footer-link\" href=\"#\">Cenas</a>
                    <a class=\"footer-link\" href=\"#\">Kontakti</a>
                </div>
            </div>
            <h5 class=\"text-left mb-20\">designed by brandbox</h5>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/mnt/c/www/Livkalni/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  70 => 29,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row mx-0 flex-row-reverse\">
    <div class=\"col-12 col-sm-12 col-md-6 col-lg-4 p-0\">
        <div class=\"contacts\">
            <div class=\"contact-phone\">
                <h5 class=\"mb-43\">LAI REZERVĒTU MŪSU ATPŪTAS MĀJAS LŪDZU ZVANIET</h5>
                <h5 class=\"mb4\">Guntars</h5>
                <a class=\"phone-link\" href=\"tel:+37127881139\">+371 2788 1139</a>
                <h5 class=\"mb4 mt-24\">Iveta</h5>
                <a class=\"phone-link\" href=\"tel:+37126517416\">+371 2651 7416</a>
            </div>
            <div class=\"address\">
                <p>ADRESE:</p>
                <p>LĪVKALNA IELA 6, SIGULDA</p>
                <p>LV-2150, LATVIJA</p>
            </div>
        </div>
    </div>
    <div class=\"col-12 col-sm-12 col-md-6 col-lg-4 p-0 bg-line-right\">
        <div class=\"footer-section\">
            <div class=\"bg-line-bottom\">
                <h5>LAI VIEGLĀK PIE MUMS NOKĻŪTU LŪDZU LIETOJIET ŠOS LINKUS</h5>
                <div class=\"car-image\">
                    <img class=\"img-fluid\" alt=\"Car Location Icon\" src=\"{{ 'assets/images/car-location.png'|theme }}\" />
                </div>
            </div>
            <div class=\"mb-19\">
                <h5>Rezervē  brīvdienu māju arī internetā</h5>
                <div class=\"car-image mb-0\">
                    <img class=\"img-fluid\" alt=\"Car Location Icon\" src=\"{{ 'assets/images/car-location.png'|theme }}\" />
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-12 col-md-12 col-lg-4 p-0 bg-line-right menu-col\">
        <div class=\"d-flex flex-column h-100 menu-col-wrapper\">
            <div class=\"d-flex flex-grow-1\">
                <a class=\"footer-logo\" href=\"/\">
                    <img class=\"img-fluid\" src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"Līveklanu logo\" />
                </a>
                <div class=\"d-flex footer-nav flex-column\">
                    <a class=\"footer-link\" href=\"#\">Sākums</a>
                    <a class=\"footer-link\" href=\"#\">Galerija</a>
                    <a class=\"footer-link\" href=\"#\">Cenas</a>
                    <a class=\"footer-link\" href=\"#\">Kontakti</a>
                </div>
            </div>
            <h5 class=\"text-left mb-20\">designed by brandbox</h5>
        </div>
    </div>
</div>", "/mnt/c/www/Livkalni/themes/demo/partials/site/footer.htm", "");
    }
}
