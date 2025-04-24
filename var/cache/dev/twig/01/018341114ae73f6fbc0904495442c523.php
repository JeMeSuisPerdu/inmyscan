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
use Twig\TemplateWrapper;

/* login/login.html.twig */
class __TwigTemplate_9429c173239351ea2dd4c735fefec3c6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion | Bon retour !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    ";
        // line 7
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
<div class=\"login-container\">
 <div class=\"login-form\"> 
    <form action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\" class=\"form\">
      <h1>Te revoilà enfin !</h1>   
        <div class=\"flex-column\">
            <label for=\"username\">Email</label>
        </div>
        <div class=\"inputForm\">
            <!-- SVG Icon -->
            <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24.00 24.00\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"/>
            <g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke=\"#CCCCCC\" stroke-width=\"0.192\"/>
            <g id=\"SVGRepo_iconCarrier\"> <path d=\"M17.4009 19.2C15.8965 20.3302 14.0265 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12V13.5C21 14.8807 19.8807 16 18.5 16C17.1193 16 16 14.8807 16 13.5V8M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12Z\" stroke=\"#000000\" stroke-width=\"1.08\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </g>
            </svg>
            <input type=\"email\" class=\"input\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Entrez votre e-mail\" autocomplete=\"on\" required>
        </div>

        <div class=\"flex-column\">
            <label for=\"password\">Mot de passe</label>
        </div>
        <div class=\"inputForm\">
            <!-- SVG Icon -->
            <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"/>
            <g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            <g id=\"SVGRepo_iconCarrier\"> <path d=\"M7 10.0288C7.47142 10 8.05259 10 8.8 10H15.2C15.9474 10 16.5286 10 17 10.0288M7 10.0288C6.41168 10.0647 5.99429 10.1455 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C18.0057 10.1455 17.5883 10.0647 17 10.0288M7 10.0288V8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8V10.0288\" stroke=\"#000000\" stroke-width=\"1.08\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </g>
            </svg>
            <input type=\"password\" class=\"input\" id=\"password\" name=\"_password\" placeholder=\"Entrez votre mot de passe\" required>
        </div>

        <div class=\"flex-row\">
                ";
        // line 40
        yield "                ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })())) {
            // line 41
            yield "                    <div class=\"error-p\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })()), "messageKey", [], "any", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })()), "messageData", [], "any", false, false, false, 41), "security"), "html", null, true);
            yield "</div>
                ";
        }
        // line 43
        yield "            <span class=\"span\">Mot de passe oublié ?</span>
        </div>

        <button type=\"submit\" class=\"button-submit\">Se connecter</button>
        </form>
 </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  153 => 43,  147 => 41,  144 => 40,  124 => 22,  109 => 10,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion | Bon retour !{% endblock %}

{% block body %}

    {{ navbar() }}
<div class=\"login-container\">
 <div class=\"login-form\"> 
    <form action=\"{{ path('app_login') }}\" method=\"post\" class=\"form\">
      <h1>Te revoilà enfin !</h1>   
        <div class=\"flex-column\">
            <label for=\"username\">Email</label>
        </div>
        <div class=\"inputForm\">
            <!-- SVG Icon -->
            <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24.00 24.00\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"/>
            <g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke=\"#CCCCCC\" stroke-width=\"0.192\"/>
            <g id=\"SVGRepo_iconCarrier\"> <path d=\"M17.4009 19.2C15.8965 20.3302 14.0265 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12V13.5C21 14.8807 19.8807 16 18.5 16C17.1193 16 16 14.8807 16 13.5V8M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12Z\" stroke=\"#000000\" stroke-width=\"1.08\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </g>
            </svg>
            <input type=\"email\" class=\"input\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Entrez votre e-mail\" autocomplete=\"on\" required>
        </div>

        <div class=\"flex-column\">
            <label for=\"password\">Mot de passe</label>
        </div>
        <div class=\"inputForm\">
            <!-- SVG Icon -->
            <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"/>
            <g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            <g id=\"SVGRepo_iconCarrier\"> <path d=\"M7 10.0288C7.47142 10 8.05259 10 8.8 10H15.2C15.9474 10 16.5286 10 17 10.0288M7 10.0288C6.41168 10.0647 5.99429 10.1455 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C18.0057 10.1455 17.5883 10.0647 17 10.0288M7 10.0288V8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8V10.0288\" stroke=\"#000000\" stroke-width=\"1.08\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </g>
            </svg>
            <input type=\"password\" class=\"input\" id=\"password\" name=\"_password\" placeholder=\"Entrez votre mot de passe\" required>
        </div>

        <div class=\"flex-row\">
                {# Error = email ou mdp inconnue dans la bdd, symfony le gère en auto dans le controller login #}
                {% if error %}
                    <div class=\"error-p\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
            <span class=\"span\">Mot de passe oublié ?</span>
        </div>

        <button type=\"submit\" class=\"button-submit\">Se connecter</button>
        </form>
 </div>
</div>
{% endblock %}
", "login/login.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\login\\login.html.twig");
    }
}
