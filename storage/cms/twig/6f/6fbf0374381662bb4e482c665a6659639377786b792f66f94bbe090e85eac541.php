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

/* /mnt/c/www/Livkalni/themes/demo/pages/home.htm */
class __TwigTemplate_4ae96216a1c4ba206f5c9903ed7747c94720465907967ad3d7089e164cbaf946 extends \Twig\Template
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
        echo "<div class=\"d-flex align-items-center justify-content-center intro\">
    <div class=\"intro-logo\">
        <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-lg.png");
        echo "\" alt=\"Līvkalnu Logo\" class=\"img-fluid\" />
    </div>
</div>
<div class=\"section\">
    <div class=\"row mx-0\">
        <div class=\"col-12 p-0 d-flex align-items-center flex-column\">
            <div class=\"light-logo\">
                <img class=\"img-fluid\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-light.png");
        echo "\" alt=\"Mazais Līvkalns Logo\" />
            </div>
            <h3>Brīvdienu māja</h3>
            <h1>„MAZAIS LĪVKALNS“</h1>
        </div>
    </div>
</div>
<div class=\"content-section\">
    <div class=\"row ml-0\">
        <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 content align-self-center p-0\">
            <h4>Kāpēc brīvdienu māja “Mazais Līvkalns” ir labākā izvēle Jūsu atpūtai?</h4>
            <div class=\"main-content\">
                <p>„Mazais Līvkalns“ atrodas tikai 10 minūšu gājiena attālumā no Siguldas centra.</p>
                <p>Mēs esam vien dažu simtu metru attālumā no Siguldas pils, kur regulāri notiek festivāli, koncerti un citi pasākumi.</p>
                <p>Turklāt pavisam netālu no mums atrodas gandrīz jebkurš apskates vai apmeklēt vērtais objekts pilsētā!</p>
                <p>Kilometriem garas pastaigu takas; velo maršruti; Siguldas gaisa trošu vagoniņš, atrakciju un izklaides parki bērniem un pieaugušajiem; labākais kinoteātris Latvijā un burvīga kafejnīcu kultūra - un tas viss Siguldā!</p>
            </div>
        </div>
        <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 bg-line p-0\">
            <div class=\"d-flex h-100 align-items-end\">
                <div class=\"content-image\">
                    <img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/building-1.png");
        echo "\" alt=\"Mazais Līvkalns\" class=\"align-self-end img-fluid\" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"content-section\">
    <div class=\"row ml-0\">
        <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 content align-self-center p-0\">
            <div class=\"main-content\">
                <p>Turaida, Krimulda, alas, ieži un varenā daba Siguldas rajonā - tas viss nudien liek domāt par to, cik brīnumaini koncentrēta un bagāta ir šī vieta!</p>
                <p>Brīvdienu māja “Mazais Līvkalns” viesiem piedāvā izīrēt atsevišķu brīvdienu māja vai studija tipa dzīvokli ar lielu terasi vai tā saucamo lielo māju (atsevišķi vienojoties). Ir iespējams iznomāt visas mājas un teritoriju.</p>
                <p>Vēlamies uzsvērt, mūsu brīvdienu māja netiek iznomāta ballītēm un dažādu saviesīgu pasākumu svinēšanai. Mūsu galvenās vērtības ir klusums un miers.</p>
            </div>
        </div>
        <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 bg-line p-0\">
            <div class=\"d-flex h-100 flex-grow-1 align-items-end justify-content-end\">
                <div class=\"content-image\">
                    <img src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/building-2.png");
        echo "\" alt=\"Mazais Līvkalns\" class=\"align-self-end img-fluid\" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"section mt-73\">
    <div class=\"row mx-0\">
        <div class=\"col-12 p-0 d-flex align-items-center flex-column\">
            <h3 class=\"shadow-none mb-24\">Ar sirsnīgiem sveicieniem “Mazais Līvkalns” saimnieki</h3>
            <h2>Iveta un Guntars</h2>
            <div class=\"heading-lines\">
                <img class=\"img-fluid\" alt=\"Line icon\" src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/heding-lines.png");
        echo "\" />
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/mnt/c/www/Livkalni/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 61,  96 => 49,  75 => 31,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex align-items-center justify-content-center intro\">
    <div class=\"intro-logo\">
        <img src=\"{{ 'assets/images/logo-lg.png'|theme }}\" alt=\"Līvkalnu Logo\" class=\"img-fluid\" />
    </div>
</div>
<div class=\"section\">
    <div class=\"row mx-0\">
        <div class=\"col-12 p-0 d-flex align-items-center flex-column\">
            <div class=\"light-logo\">
                <img class=\"img-fluid\" src=\"{{ 'assets/images/logo-light.png'|theme }}\" alt=\"Mazais Līvkalns Logo\" />
            </div>
            <h3>Brīvdienu māja</h3>
            <h1>„MAZAIS LĪVKALNS“</h1>
        </div>
    </div>
</div>
<div class=\"content-section\">
    <div class=\"row ml-0\">
        <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 content align-self-center p-0\">
            <h4>Kāpēc brīvdienu māja “Mazais Līvkalns” ir labākā izvēle Jūsu atpūtai?</h4>
            <div class=\"main-content\">
                <p>„Mazais Līvkalns“ atrodas tikai 10 minūšu gājiena attālumā no Siguldas centra.</p>
                <p>Mēs esam vien dažu simtu metru attālumā no Siguldas pils, kur regulāri notiek festivāli, koncerti un citi pasākumi.</p>
                <p>Turklāt pavisam netālu no mums atrodas gandrīz jebkurš apskates vai apmeklēt vērtais objekts pilsētā!</p>
                <p>Kilometriem garas pastaigu takas; velo maršruti; Siguldas gaisa trošu vagoniņš, atrakciju un izklaides parki bērniem un pieaugušajiem; labākais kinoteātris Latvijā un burvīga kafejnīcu kultūra - un tas viss Siguldā!</p>
            </div>
        </div>
        <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 bg-line p-0\">
            <div class=\"d-flex h-100 align-items-end\">
                <div class=\"content-image\">
                    <img src=\"{{ 'assets/images/building-1.png'|theme }}\" alt=\"Mazais Līvkalns\" class=\"align-self-end img-fluid\" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"content-section\">
    <div class=\"row ml-0\">
        <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 content align-self-center p-0\">
            <div class=\"main-content\">
                <p>Turaida, Krimulda, alas, ieži un varenā daba Siguldas rajonā - tas viss nudien liek domāt par to, cik brīnumaini koncentrēta un bagāta ir šī vieta!</p>
                <p>Brīvdienu māja “Mazais Līvkalns” viesiem piedāvā izīrēt atsevišķu brīvdienu māja vai studija tipa dzīvokli ar lielu terasi vai tā saucamo lielo māju (atsevišķi vienojoties). Ir iespējams iznomāt visas mājas un teritoriju.</p>
                <p>Vēlamies uzsvērt, mūsu brīvdienu māja netiek iznomāta ballītēm un dažādu saviesīgu pasākumu svinēšanai. Mūsu galvenās vērtības ir klusums un miers.</p>
            </div>
        </div>
        <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 bg-line p-0\">
            <div class=\"d-flex h-100 flex-grow-1 align-items-end justify-content-end\">
                <div class=\"content-image\">
                    <img src=\"{{ 'assets/images/building-2.png'|theme }}\" alt=\"Mazais Līvkalns\" class=\"align-self-end img-fluid\" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"section mt-73\">
    <div class=\"row mx-0\">
        <div class=\"col-12 p-0 d-flex align-items-center flex-column\">
            <h3 class=\"shadow-none mb-24\">Ar sirsnīgiem sveicieniem “Mazais Līvkalns” saimnieki</h3>
            <h2>Iveta un Guntars</h2>
            <div class=\"heading-lines\">
                <img class=\"img-fluid\" alt=\"Line icon\" src=\"{{ 'assets/images/heding-lines.png'|theme }}\" />
            </div>
        </div>
    </div>
</div>", "/mnt/c/www/Livkalni/themes/demo/pages/home.htm", "");
    }
}
