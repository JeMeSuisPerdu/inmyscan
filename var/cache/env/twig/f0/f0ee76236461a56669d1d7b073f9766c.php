<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navbar/navbar.html.twig */
class __TwigTemplate_56a4bcb569af78e447461dc9c8687b16 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/navbar.html.twig"));

        // line 2
        yield "
<div class=\"auth-links\" data-turbolinks=\"false\">
    <div class=\"home-navbar-container container\">
        <a class=\"logo-site\" href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <img height=\"40\" src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo.png"), "html", null, true);
        yield "\" alt=\"Logo InMyScan\">InMyScan</a>
        
        <div class=\"home-icon-account\">
            <a style=\"color: white; font-weight: bold;\" href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        yield "\">CATALOGUE</a>
            <a style=\"color: white; font-weight: bold;display: flex; margin-left:50px;padding-right: 55px;\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\">PROFIL</a>
        </div>

        ";
        // line 14
        yield "        <div class=\"menu-icon\" id=\"menuIcon\" onclick=\"toggleSidebar()\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"45\" height=\"45\" fill=\"white\">
                <path d=\"M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z\"/>
            </svg>
        </div>
    </div>

    ";
        // line 22
        yield "    <div class=\"sidebar\" id=\"sidebarMenu\">
        <ul>
            <li><a style=\"color: white; font-weight: bold;\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        yield "\">CATALOGUE</a></li>
            <li><a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\" style=\"color: white; font-weight: bold;\">PROFIL</a></li>
            <li><a href=\"#item3\"></a></li>
        </ul>
    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebarMenu');
        // Vérifiez si le menu a la classe active
        if (sidebar.classList.contains('active')) {
            sidebar.classList.remove('active'); // Masquer le menu
        } else {
            sidebar.classList.add('active'); // Afficher le menu
        }
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navbar/navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  83 => 25,  79 => 24,  75 => 22,  66 => 14,  60 => 10,  56 => 9,  50 => 6,  46 => 5,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/navbar/navbar.html.twig #}

<div class=\"auth-links\" data-turbolinks=\"false\">
    <div class=\"home-navbar-container container\">
        <a class=\"logo-site\" href=\"{{ path('app_home') }}\">
            <img height=\"40\" src=\"{{ asset('img/logo/logo.png') }}\" alt=\"Logo InMyScan\">InMyScan</a>
        
        <div class=\"home-icon-account\">
            <a style=\"color: white; font-weight: bold;\" href=\"{{ path('catalogue') }}\">CATALOGUE</a>
            <a style=\"color: white; font-weight: bold;display: flex; margin-left:50px;padding-right: 55px;\" href=\"{{ path('profile') }}\">PROFIL</a>
        </div>

        {# Bouton menu masqué par défaut #}
        <div class=\"menu-icon\" id=\"menuIcon\" onclick=\"toggleSidebar()\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"45\" height=\"45\" fill=\"white\">
                <path d=\"M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z\"/>
            </svg>
        </div>
    </div>

    {# Menu de gauche masqué par défaut #}
    <div class=\"sidebar\" id=\"sidebarMenu\">
        <ul>
            <li><a style=\"color: white; font-weight: bold;\" href=\"{{ path('catalogue') }}\">CATALOGUE</a></li>
            <li><a href=\"{{ path('profile') }}\" style=\"color: white; font-weight: bold;\">PROFIL</a></li>
            <li><a href=\"#item3\"></a></li>
        </ul>
    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebarMenu');
        // Vérifiez si le menu a la classe active
        if (sidebar.classList.contains('active')) {
            sidebar.classList.remove('active'); // Masquer le menu
        } else {
            sidebar.classList.add('active'); // Afficher le menu
        }
    }
</script>
", "navbar/navbar.html.twig", "C:\\Users\\Rikuzen\\Downloads\\inmyscan\\inmyscannn\\templates\\navbar\\navbar.html.twig");
    }
}
