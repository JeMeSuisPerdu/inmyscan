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

/* navbar/footer.html.twig */
class __TwigTemplate_132a996cad62dffc7f1a37041e8d510f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/footer.html.twig"));

        // line 1
        yield "<footer>
    <div class=\"footer-content\">
        <div class=\"footer-section about\">
            <h3>À propos</h3>
            <p>
                Bienvenue sur InMyScan, votre plateforme dédiée à la découverte et au visionnage des meilleurs animes.
                Retrouvez des centaines de mangas et d'animes à découvrir et partager avec vos amis.
            </p>
        </div>
    <div class=\"footer-section links\">
        <h3>DMCA</h3>
        <p>
            InMyScan est une plateforme qui indexe uniquement les liens vers des scans de mangas ainsi que les animes disponibles publiquement sur d'autres sites. Nous ne stockons aucun contenu protégé par des droits d'auteur sur nos serveurs et n'hébergeons pas directement les scans. 
            <br><br>
            ";
        // line 17
        yield "            ";
        // line 19
        yield "            ";
        // line 20
        yield "        </p>
    </div>
";
        // line 30
        yield "    <div class=\"footer-bottom\">
        <p>&copy; ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " InMyScan. Tous droits réservés.</p>
    </div>
</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navbar/footer.html.twig";
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
        return array (  68 => 31,  65 => 30,  61 => 20,  59 => 19,  57 => 17,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"footer-content\">
        <div class=\"footer-section about\">
            <h3>À propos</h3>
            <p>
                Bienvenue sur InMyScan, votre plateforme dédiée à la découverte et au visionnage des meilleurs animes.
                Retrouvez des centaines de mangas et d'animes à découvrir et partager avec vos amis.
            </p>
        </div>
    <div class=\"footer-section links\">
        <h3>DMCA</h3>
        <p>
            InMyScan est une plateforme qui indexe uniquement les liens vers des scans de mangas ainsi que les animes disponibles publiquement sur d'autres sites. Nous ne stockons aucun contenu protégé par des droits d'auteur sur nos serveurs et n'hébergeons pas directement les scans. 
            <br><br>
            {# Nous comprenons que la législation concernant les droits d'auteur sur les œuvres numérisées peut être floue. Si vous êtes titulaire de droits ou un représentant légitime, et que vous souhaitez faire valoir vos droits sur un contenu spécifique référencé sur notre site, nous vous invitons à nous contacter via notre serveur Discord. Vous devrez fournir des preuves solides de la propriété de ces droits.
            <br><br> #}
            {# Dès que la preuve de la propriété est établie, nous retirerons le lien concerné du site dans les plus brefs délais, conformément aux dispositions de la <a style=\"color: red;\" href=\"https://www.law.cornell.edu/uscode/text/17/512\">section 512(c) du Digital Millennium Copyright Act (DMCA)</a>.
            <br><br> #}
            {# Veuillez noter que ce processus est en place pour protéger à la fois les créateurs de contenu et les utilisateurs, tout en respectant les principes de la législation internationale sur les droits d'auteur. #}
        </p>
    </div>
{# 
        <div class=\"footer-section links\">
            <h3>Liens utiles</h3>
            <ul>
                <li><a href=\"#\">Conditions d'utilisation</a></li>
            </ul>
        </div>
    </div> #}
    <div class=\"footer-bottom\">
        <p>&copy; {{ \"now\"|date(\"Y\") }} InMyScan. Tous droits réservés.</p>
    </div>
</footer>
", "navbar/footer.html.twig", "C:\\Users\\Rikuzen\\Downloads\\inmyscan\\inmyscannn\\templates\\navbar\\footer.html.twig");
    }
}
