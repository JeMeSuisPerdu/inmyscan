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

/* error/notfound.html.twig */
class __TwigTemplate_53572030cefdbc4ab52444ee50c3d909 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/notfound.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "error/notfound.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Page Non Trouvée | Anime VOSTFR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        yield "    <meta name=\"description\" content=\"Désolé, ce chapitre d'anime n'a pas pu être trouvé. Vérifiez l'URL ou retournez à la page d'accueil pour explorer d'autres contenus.\" />
    <meta name=\"robots\" content=\"noindex, nofollow\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "<style>
    .error-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f8f9fa;
        color: #333;
        text-align: center;
        padding: 20px;
        font-family: Arial, sans-serif;
    }
    
    .error-container h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #dc3545; /* Rouge pour indiquer une erreur */
    }
    
    .error-container p {
        font-size: 1.2rem;
        margin-bottom: 1.5rem;
    }

    .error-container button {
        padding: 10px 20px;
        font-size: 1rem;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .error-container button:hover {
        background-color: #0056b3;
    }
</style>

<div class=\"error-container\">
    <h1>ERR0R 404</h1>
    <p>Nous n'avons pas pu trouver cette page. Veuillez retourner à la page d'accueil.</p>
    <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
        <button>Retour à la page d'accueil</button>
    </a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "error/notfound.html.twig";
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
        return array (  139 => 55,  93 => 11,  86 => 10,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page Non Trouvée | Anime VOSTFR{% endblock %}

{% block meta %}
    <meta name=\"description\" content=\"Désolé, ce chapitre d'anime n'a pas pu être trouvé. Vérifiez l'URL ou retournez à la page d'accueil pour explorer d'autres contenus.\" />
    <meta name=\"robots\" content=\"noindex, nofollow\" />
{% endblock %}

{% block body %}
<style>
    .error-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f8f9fa;
        color: #333;
        text-align: center;
        padding: 20px;
        font-family: Arial, sans-serif;
    }
    
    .error-container h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #dc3545; /* Rouge pour indiquer une erreur */
    }
    
    .error-container p {
        font-size: 1.2rem;
        margin-bottom: 1.5rem;
    }

    .error-container button {
        padding: 10px 20px;
        font-size: 1rem;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .error-container button:hover {
        background-color: #0056b3;
    }
</style>

<div class=\"error-container\">
    <h1>ERR0R 404</h1>
    <p>Nous n'avons pas pu trouver cette page. Veuillez retourner à la page d'accueil.</p>
    <a href=\"{{ path('app_home') }}\">
        <button>Retour à la page d'accueil</button>
    </a>
</div>
{% endblock %}
", "error/notfound.html.twig", "C:\\Users\\Rikuzen\\Downloads\\inmyscan\\inmyscannn\\templates\\error\\notfound.html.twig");
    }
}
