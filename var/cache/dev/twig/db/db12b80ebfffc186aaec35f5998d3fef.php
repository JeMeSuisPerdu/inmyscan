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

/* home/home.html.twig */
class __TwigTemplate_756739ad0ab4818934fe5d553182624f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "InMyScan | Films, Animes, et Séries gratuits VF/VOSTFR illimité";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "    ";
        yield $this->extensions['App\Twig\NavBarExtension']->renderNavbar($this->env);
        yield "
    <div class=\"home-container-box\" itemscope itemtype=\"https://schema.org/WebPage\">
        <meta itemprop=\"name\" content=\"InMyScan\">
        <meta itemprop=\"description\" content=\"Regardez des Séries, Films, Animes et lisez des scans gratuitement en VF/VOSTFR. Explorez notre catalogue gratuit et complet.\">
        <meta itemprop=\"inLanguage\" content=\"fr-FR\">
      
<script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"WebSite\",
  \"name\": \"InMyScan\",
  \"url\": \"https://inmyscan.com\",
  \"potentialAction\": {
    \"@type\": \"SearchAction\",
    \"target\": {
      \"@type\": \"EntryPoint\",
      \"urlTemplate\": \"https://inmyscan.com/search_manga?query={query}\"
    },
    \"query-input\": \"required name=query\"
  }
}
</script>

    <div class=\"home-banner\">
        <!-- SVG à gauche -->
        <div class=\"svg-container\">
            <svg viewBox=\"0 0 128 128\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" role=\"img\" class=\"iconify iconify--noto\" preserveAspectRatio=\"xMidYMid meet\" fill=\"#000000\"><g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"></g><g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></g><g id=\"SVGRepo_iconCarrier\"> <path d=\"M20.71 44.56l-6.52-5.93s-.27-2.95 2.04-3.89c2.63-1.07 5.16.19 5.16.19l3.99 7.68l-4.67 1.95z\" fill=\"#b40e1c\"> </path> <path d=\"M106.7 44.76l-5.64-4.47l3.79-5.54s1.96-1.59 5.35.1c2.59 1.29 3.23 3.79 2.93 4.56c-.29.77-6.43 5.35-6.43 5.35z\" fill=\"#b40e1c\"> </path> <path d=\"M22.75 43.49l-3.15-.85s-.36-1.49.32-2.81c.71-1.37 2.1-1.22 2.1-1.22s-3.35-1.63-1.89-5.62s5.93-3.11 5.93-3.11s-.1-2.53 1.95-4.09c2.04-1.56 3.6-.39 3.6-.39s-1.58-5.05 2.33-7.39c3.34-2 5.64-.1 5.64-.1s1.35-3.38 5.05-3.45c2.77-.05 3.61 1.02 3.61 1.02s.97-1.95 2.53-2.82c1.56-.88 2.49-.75 2.49-.75s-.71-2.42.04-4.4c1.32-3.5 4.96-4.28 7.68-3.6c3.73.93 3.27 3.51 3.27 3.51s1.89-1.27 3.64-1.07c1.75.19 2.67 1.35 2.67 1.35s1.22-3.58 5.3-3.58c4.09 0 5.25 2.43 5.45 4.28s-1.03 4.03-1.03 4.03s.59.23.77 1.63c.14 1.06-.27 2-.27 2s1.88-1.48 5.63 0c6.22 2.45 4.92 9.07 4.92 9.07s1.8-.21 3.16.37c1.56.67 2.28 1.77 2.28 1.77s.35-2.9 3.99-2.92c3.8-.02 6.91 7.1 6.23 9.14c-.68 2.04-2.53 2.53-2.53 2.53s1.69.48 2.32 2.53c.75 2.42.13 4.99.13 4.99s-26.38 16.1-26.67 16s-32.98 2.43-32.98 2.43L22.75 43.49z\" fill=\"#ffb91f\"> </path> <path d=\"M34.84 48.47c0-.21.3-1.08.89-1.46c.73-.47 1.82-.52 1.82-.52s-1.2-.57-1.87-2.45c-.44-1.22.1-2.54.1-2.54s-3.17.15-3.9-2.25s.42-2.71.42-2.71s-1.27-6.81 4.06-6.93c7.29-.16 6.04 9.11 6.04 9.11s1.04 0 1.67.57c.62.57.83 1.15.83 1.15s1.36-2.05 4.58-1.56c7.6 1.15 4.06 8.59 4.06 8.59s-1.41-3.85-3.85-4.01c-2.45-.16-5.47 1.51-5.47 1.51s4.63.57 5.88 3.02s1.15 5.78 1.15 5.78s-9.27 2.71-9.48 2.4c-.22-.3-6.93-7.7-6.93-7.7z\" fill=\"#fce193\"> </path> <path d=\"M40.61 40.35c-.67-.29-2.55 1.36-2.59 2.59c-.04 1.23 1 2.8 2.24 2.91c1.23.11 2.46-1.16 2.46-2.39c0-.62-1.28-2.75-2.11-3.11z\" fill=\"#e17a2c\"> </path> <path d=\"M46.27 26.55s-4.99-.72-4.89 3.4c.13 5.46 6.28 4.65 6.33 4.94c.05.29.3 2.15.3 2.15s2.43-.28 4.78 1.11s3.36 3.02 3.36 3.02s.48-2.25 1.15-3.21c.67-.96 1.39-1.68 1.39-1.68s0-1.2-.34-2.16c-.24-.69-.81-1.05-.81-1.05s5.4-2.56 2.68-6.81c-3.07-4.79-7.96-.34-7.96-.34s-1.92-2.78-4.31-2.11c-2.4.67-1.68 2.74-1.68 2.74z\" fill=\"#fce193\"> </path> <path d=\"M58.54 44.52s-1.44-4.94 1.25-6.33s4.46.19 4.55-.1s4.27-4.75 7.86-4.65c5.32.14 6.54 3.52 6.66 3.88c.59 1.72-.19 4.51-.19 4.51s2.01-3.12 4.89-2.83c2.88.29 3.2 2.59 3.2 2.59s3.18 1.97 3.03 3.84c-.14 1.87-2.16 3.26-2.16 3.26l-4.89 4.79l-5.27-1.82s-.72-2.4-.72-3.88c0-1.49.14-2.68.14-2.68s-1.44.77-2.44 1.05c-1.01.29-3.12.34-3.12.34s-.08-1.21-2.11-2.59c-4.45-3.02-10.68.62-10.68.62z\" fill=\"#fce193\"> </path> <path d=\"M60.65 51.18s-1.63-5.92 3.07-6.04c5.61-.14 6.42 4.84 6.62 7.62c.19 2.78-7.24 7.05-7.53 6.9c-.29-.14-7.25-4.42-7.25-4.42s-.53-1.54.64-2.91c1.22-1.45 4.45-1.15 4.45-1.15z\" fill=\"#fce193\"> </path> <path d=\"M91.86 48.45s-1.63-1.34-1.15-3.88s2.44-2.68 2.44-2.68s-1.49-2.3-.77-3.79s1.87-1.82 5.56-1.77s5.56 1.05 6.76 2.35c1.08 1.16.38 4.7.38 4.7s-5.46 6.57-6.09 6.42c-.62-.15-7.13-1.35-7.13-1.35z\" fill=\"#fce193\"> </path> <path d=\"M76.56 31.34s1.92 1.2 2.54 2.11c.62.91 1.44 2.64 1.44 2.64s.4-4.68 2.33-6.96c2.11-2.49 4.86-2.39 4.91-2.39c.52 0 1.39-3.88-.62-5.94c-2.52-2.58-6.85-1.68-6.81-1.29s1.58 2.25.58 6.57c-.93 3.94-4.37 5.26-4.37 5.26z\" fill=\"#fce193\"> </path> <path d=\"M63.14 32.25c.77.39 2.14-.9 3.31-1.44c1.34-.62 3.07-.86 3.12-1.53s-1.87-3.07-4.65-1.73c-2.78 1.34-2.64 4.27-1.78 4.7z\" fill=\"#fce193\"> </path> <path d=\"M21.82 34.57c-.24 2.44 2.25 3.2 2.25 3.2s-.31 2.25.58 3.55c.72 1.05 2.21 2.35 2.83 2.21c.62-.14 2.59-2.01 2.59-2.16c0-.14-.11-5.51-1.25-7.43c-1.58-2.7-6.57-3.7-7 .63z\" fill=\"#fce193\"> </path> <path d=\"M30.55 31.34c.67 0 1.34-1.53 1.73-2.11c.38-.58 1.82-1.53 1.82-1.53s-2.21-1.53-3.6-.14c-1.39 1.38-.96 3.78.05 3.78z\" fill=\"#fce193\"> </path> <path d=\"M35.91 26.98s1.34-.14 2.11-.1c.77.05 2.06.29 2.06.29s.19-1.25 1.58-2.16c1.39-.91 2.68-.62 2.68-.62s.29-1.73 1.39-2.49c1.1-.77 1.77-.77 1.77-.77s1.02-2.62-.48-3.6c-4.27-2.78-6.46 2.8-7.19 2.92c-.54.09-2.42-1.78-4.48-.34c-3.5 2.46.56 6.87.56 6.87z\" fill=\"#fce193\"> </path> <path d=\"M49.43 20.7s1.15.29 2.01.81s2.16 1.44 2.16 1.44l6.33-.19s1.39-1.82 3.4-2.64c1.64-.67 3.55-.72 3.55-.72s.18-4.68-3.69-5.9c-4.89-1.53-6.52 3.45-6.52 3.45s-1.44-1.62-3.12-1.58c-3.73.1-4.12 5.33-4.12 5.33z\" fill=\"#fce193\"> </path> <path d=\"M56.57 19.02c-.58 0-3.98 2.92-4.07 3.21c-.1.29.81.77.91 1.05c.1.29 6.23-.38 6.57-.62c.33-.24-2.11-3.64-3.41-3.64z\" fill=\"#e17a2c\"> </path> <path d=\"M48.91 28.89c.03.57 2.83 4.31 3.69 4.46s3.7-3.02 2.88-3.74c-.38-.34-3.21.05-3.21.05s-.05-2.11-.29-2.44c-.25-.34-3.12.72-3.07 1.67z\" fill=\"#e17a2c\"> </path> <path d=\"M55.86 12.5c.73.02 1.39-2.68 2.25-3.55s2.92-1.73 2.44-3.07s-4.17-.96-5.37 1.01c-1.33 2.19-.91 5.56.68 5.61z\" fill=\"#fce193\"> </path> <path d=\"M66.07 11.78c.15.66 2.01 1.44 2.3 1.77c.29.34 1.63 1.53 1.63 1.53s3.07-.77 4.89-.29c1.82.48 2.68 1.77 3.21 1.44c.53-.34.24-1.77-.05-2.25s-.86-1.39-.86-1.39s2.76-4.28-.1-4.99c-4.07-1.01-4.89 3.12-5.42 3.21s-2.06-1.53-3.74-1.29c-1.67.25-2.06 1.4-1.86 2.26z\" fill=\"#fce193\"> </path> <path d=\"M68.37 24.1c.68 1.51 2.83 1.63 2.83 1.63s1.05 3.36 3.21 3.64c2.16.29 3.58-1.96 4.03-3.83c.58-2.4.59-7.59-4.75-7.53c-4.03.05-5.75 5.13-5.32 6.09z\" fill=\"#fce193\"> </path> <path d=\"M89.55 41.21c.67-.02.22-3.96 2.34-5.56c2.29-1.73 4.08-1.41 6.43-1.25c2.44.16 4.09.92 4.6.24c.64-.84 1.03-6.7-2.3-7.19c-1.97-.29-2.49 1.63-2.49 1.63s-2.01-.43-3.12 1.58c-.76 1.39-.81 2.3-1.15 2.4c-.15.04-5.29-7.9-9.3-3.07c-4.17 5.03 3.45 9.2 3.45 9.2s.25 2.07 1.54 2.02z\" fill=\"#fce193\"> </path> <path d=\"M74.36 18.88c-.27.18-.38 4.84-.14 4.89c.24.05 3.26 1.68 3.69 1.25c.43-.43.43-2.64-.34-4.07c-.48-.92-2.25-2.7-3.21-2.07z\" fill=\"#e17a2c\"> </path> <path d=\"M67.98 13.03c-.04.49.62 3.07 1.39 3.16c1.28.16 3.64-1.2 3.88-1.68s-.19-1.87-2.11-2.35c-1.9-.47-3.11.2-3.16.87z\" fill=\"#e17a2c\"> </path> <path d=\"M68.46 42.22c.67.72 2.99-1.24 3.83-.86c.96.43 0 2.92 1.05 3.21c1.05.29 3.16-3.12 2.92-4.6c-.1-.62-1.34-1.44-2.68-1.92s-3.16-.81-3.98-.29s-2.34 3.17-1.14 4.46z\" fill=\"#e17a2c\"> </path> <path d=\"M96.5 45.67s-.1-3.07.72-4.6c.81-1.53 2.88-1.29 3.21-.91s1.49 3.16 1.49 3.16l-2.44 4.17l-2.98-1.82z\" fill=\"#e17a2c\"> </path> <path d=\"M63.35 61.35l-9.56-3.74l-.27-.42c-.48-.75-6.78-1.76-6.78-1.76l-.56-.11l-7.85-1.69l-.22-.38c-.49-.83-6.81-3.08-6.81-3.08l-5.94-2.4l-.16-.39c-.53-1.27-4.55-3.47-4.64-3.29l-1.79-.89c.47-.95 1.96-2.52 4.22-1.61c1.97.79 4.22 3.52 4.71 4.6l3.23 1.67c.79-.5 2.28-1 4.32-.29c2.96 1.04 3.74 3.33 4.35 4.28l6.5 1.4c.69-.56 2.15-1.5 4.1-1.18c3.41.56 4.24 2.53 4.95 3.53l7.49.64c.75-1.03 2.66-3.21 5.63-3.62c2.78-.39 4.81.57 5.63 1.53l7.16-2.41c.6-.93 2.67-3.56 5.91-4.15c3.02-.55 5.39.98 6.48 1.67l4.78-2.45c.51-.86 2.16-3.54 4.68-4.31c3.15-.95 5.17 1.04 5.26 1.11l-1.35 1.48c-.04-.04-6.61 3.69-6.63 3.72l-1.41 2.43l-5.52.36l-.5-.4c-.02-.02-10.13 1.81-10.15 1.84l-.19.35l-9.04 3.04l-.44-.47c-.06-.06-9.59 5.39-9.59 5.39z\" fill=\"#dfdfdf\"> </path> <path d=\"M107.72 46.58c-.23.02-2.11-2.62-4.56-1.6c-2.45 1.03-4.79 5.24-4.79 5.24l-7.63 1.2s-1.03-2.08-3.88-1.28c-2.85.8-5.41 4.3-5.47 4.07c-.06-.23-8.4 1.9-8.4 1.9S71.34 54.27 68.4 55c-3.04.76-4.69 4.49-4.69 4.49l-9.47-1.88s-1.62-2.72-4.07-3.06c-2.45-.34-4.04 1.26-4.04 1.26l-7.07-1.72s-1.08-2.96-4.16-3.99s-4.56.28-4.56.28l-4.58-3.11s-1.35-2.22-3.92-3.42c-2.56-1.2-3.3.9-3.3.9L34.5 111.9l30.56 12.43l30.17-13.21c.02.01 13.18-64.61 12.49-64.54z\" fill=\"#ffffff\"> </path> <path d=\"M20.71 44.56l-.02-.07c-.28-1.31-1.01-4.28-2.74-5.63c-2.25-1.75-3.76-.24-3.76-.24l17.35 72.18l4.24 1.62l-15.07-67.86z\" fill=\"#ed3d23\"> </path> <path d=\"M31.96 49.98s-.27-4.51-3.83-5.58c-2.83-.85-2.95 2.06-2.95 2.06l14.07 67.39l5.37 2.16l-12.66-66.03z\" fill=\"#ed3d23\"> </path> <path d=\"M47.06 55.19s-1.45-4.85-5.14-5.26c-3.69-.41-3.32 2.69-3.32 2.69l9.55 64.86l5.37 2.18l-6.46-64.47z\" fill=\"#ed3d23\"> </path> <path d=\"M58.79 53.82c-4.05-.51-4.61 3.56-4.61 3.56l4.19 64.26l6.72 2.7l-1.2-65.18s-.85-4.8-5.1-5.34z\" fill=\"#ed3d23\"> </path> <path d=\"M82.04 54.07s.21-5.1-4.35-3.81c-4.56 1.28-5.06 5.55-5.06 5.55l-1.14 65.75l5.66-2.51l4.89-64.98z\" fill=\"#ed3d23\"> </path> <g fill=\"#ed3d23\"> <path d=\"M98.95 48.6s-.19-4-4.1-3.19c-4.1.84-4.14 4.97-4.14 4.97l-7.19 65.93l5.46-2.41l9.97-65.3z\"> </path> <path d=\"M109.39 39.02c-3.36 1.61-3.65 5.93-3.65 5.93l-11.45 66.62l5.37-2.38l13.51-69.84c-.01 0-.84-1.74-3.78-.33z\"> </path> </g> </g></svg>
        </div>
        <!-- Texte à droite -->
        <div class=\"text-container\">
            <h1>Profitez d'un streaming gratuit de Films, Animes et Séries.</h1>
        </div>
    </div>
    <style>
        .home-banner {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .svg-container {
            width: 50px; 
            height: 50px;
        }

        /* Style pour le texte */
        .text-container {
            font-family: Arial, sans-serif;
            color: #f4f4f4;
            font-size: 18px;
        }
    </style>

<div class=\"container\">
    <div class=\"mt-slider rgr glide--ltr glide--slider glide--swipeable\">
        <div class=\"glide__track\" data-glide-el=\"track\">
            <ul class=\"glide__slides\" style=\"transition: transform cubic-bezier(0.165, 0.84, 0.44, 1); width: 1334px; transform: translate3d(0px, 0px, 0px);\">
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["latestFilms"]) || array_key_exists("latestFilms", $context) ? $context["latestFilms"] : (function () { throw new RuntimeError('Variable "latestFilms" does not exist.', 62, $this->source); })()), 0, 5));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["top"]) {
            // line 63
            yield "                    <li class=\"glide__slide\" style=\"width: 214px; margin-left: 5px; margin-right: 5px;\">
                        <article class=\"prr\">
                            <div class=\"ccfg\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65), "html", null, true);
            yield "</div>
                            <figure class=\"hoverable fhg\">
                                <div class=\"meta-body\">
                                    <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["top"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\">
                                        <img src=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("img/film_img/" . CoreExtension::getAttribute($this->env, $this->source, $context["top"], "photo", [], "any", false, false, false, 69))) ?: ("default-thumbnail.jpg"))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["top"], "titre", [], "any", false, false, false, 69), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow\">
                                    </a>
                                </div>
                            </figure>
                        </article>
                    </li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['top'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "            </ul>
        </div>
    </div>
</div>



        <div class=\"main-video-container\">
            <div class=\"main-anime-container\">
                <div class=\"anime-box\">
                    <h2>Un film pour commencer ?</h2>
                    <div class=\"carousel-btn-relative\">
                    <button class=\"carousel-btn left\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">◀</button>
                    <div class=\"anime-list\">
                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 90, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 91
            yield "                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("films_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "titre", [], "any", false, false, false, 93), "html", null, true);
            yield "\" itemprop=\"url\">
                                        <img src=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/film_img/" . CoreExtension::getAttribute($this->env, $this->source, $context["film"], "photo", [], "any", false, false, false, 94))), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "titre", [], "any", false, false, false, 94), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                        <div class=\"limited-text\">
                                            <p itemprop=\"name\" class=\"title-home-card\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "titre", [], "any", false, false, false, 96), "html", null, true);
            yield "</p>
                                            <p itemprop=\"name\" class=\"description-home-card\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["film"], "description", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["film"], "description", [], "any", false, false, false, 97), "La description n'est pas encore disponible... Désolé !")) : ("La description n'est pas encore disponible... Désolé !")), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                </div>
                             </article>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            yield "                            <p>Aucun Film trouvé.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['film'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "                    </div>
                    <button class=\"carousel-btn right\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">▶</button>
                    </div>
                </div>
            </div>

            <div class=\"main-anime-container\">
                <div class=\"anime-box\">
                    <h2>Animes et Kdrama un peu flippant...</h2>
                    <div class=\"carousel-btn-relative\">
                    <button class=\"carousel-btn left\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">◀</button>
                    <div class=\"anime-list\">
                        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actionMangas"]) || array_key_exists("actionMangas", $context) ? $context["actionMangas"] : (function () { throw new RuntimeError('Variable "actionMangas" does not exist.', 117, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 118
            yield "                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            yield "\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 120), "html", null, true);
            yield "\" itemprop=\"url\">
                                        <img src=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "photo", [], "any", false, false, false, 121))), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 121), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                        <div class=\"limited-text\">
                                            <p itemprop=\"name\" class=\"title-home-card\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 123), "html", null, true);
            yield "</p>
                                            <p itemprop=\"name\" class=\"description-home-card\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "description", [], "any", true, true, false, 124)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "description", [], "any", false, false, false, 124), "La description n'est pas encore disponible... Désolé !")) : ("La description n'est pas encore disponible... Désolé !")), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                </div>
                             </article>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            yield "                            <p>Aucun manga trouvé.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['manga'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                    </div>
                    <button class=\"carousel-btn right\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">▶</button>
                    </div>
                </div>
            </div>

            <div class=\"main-anime-container\">
                <div class=\"anime-box\">
                    <h2>Des séries rafraîchissantes</h2>
                    <div class=\"carousel-btn-relative\">
                    <button class=\"carousel-btn left\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">◀</button>
                    <div class=\"anime-list\">
                        ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 144, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 145
            yield "                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("series_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "titre", [], "any", false, false, false, 147), "html", null, true);
            yield "\" itemprop=\"url\">
                                        <img src=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/serie_img/" . CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "photo", [], "any", false, false, false, 148))), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "titre", [], "any", false, false, false, 148), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                        <div class=\"limited-text\">
                                            <p itemprop=\"name\" class=\"title-home-card\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "titre", [], "any", false, false, false, 150), "html", null, true);
            yield "</p>
                                            <p itemprop=\"name\" class=\"description-home-card\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "description", [], "any", true, true, false, 151)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "description", [], "any", false, false, false, 151), "La description n'est pas encore disponible... Désolé !")) : ("La description n'est pas encore disponible... Désolé !")), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                </div>
                             </article>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 157
            yield "                            <p>Aucun manga trouvé.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['serie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "                    </div>
                    <button class=\"carousel-btn right\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">▶</button>
                    </div>
                </div>
            </div>

            <div class=\"main-anime-container\">
                <div class=\"anime-box\">
                    <h2>Animes de romances.</h2>
                    <div class=\"carousel-btn-relative\">
                    <button class=\"carousel-btn left\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">◀</button>
                    <div class=\"anime-list\">
                        ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["romanceMangas"]) || array_key_exists("romanceMangas", $context) ? $context["romanceMangas"] : (function () { throw new RuntimeError('Variable "romanceMangas" does not exist.', 171, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 172
            yield "                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 174)]), "html", null, true);
            yield "\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 174), "html", null, true);
            yield "\" itemprop=\"url\">
                                        <img src=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/anime_pfp/" . CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "photo", [], "any", false, false, false, 175))), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 175), "html", null, true);
            yield "\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                        <div class=\"limited-text\">
                                            <p itemprop=\"name\" class=\"title-home-card\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 177), "html", null, true);
            yield "</p>
                                            <p itemprop=\"name\" class=\"description-home-card\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "description", [], "any", true, true, false, 178)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "description", [], "any", false, false, false, 178), "La description n'est pas encore disponible... Désolé !")) : ("La description n'est pas encore disponible... Désolé !")), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                </div>
                             </article>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 184
            yield "                            <p>Aucun manga trouvé.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['manga'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        yield "                    </div>
                    <button class=\"carousel-btn right\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">▶</button>
                    </div>
                </div>
            </div>

        </div>
</div>

    ";
        // line 195
        yield $this->extensions['App\Twig\FooterExtension']->renderFooter($this->env);
        yield "


<style>
    .anime-container {
        position: relative;
    }

    .anime-item {
        transition: transform 0.3s ease, margin 0.3s ease;
        position: relative;
    }

    .anime-item:hover {
        transform: scale(1.2);
        margin: 0 40px;
    }

    .anime-item img {
        transition: filter 0.3s ease;
    }

    .anime-item:hover img {
        
    }

    .anime-item a {
        position: relative; /
    }

    .limited-text {
        position: absolute;
        bottom: 10px;
        left: 0;
        width: 96.5%;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding-left: 10px;
        text-align: center;
        display: none;
        z-index: 1; 
        
    }

    .anime-item:hover .limited-text {
        display: block; /* Show the text when hovering */
    }

    .description-home-card{
        font-size: 10px;
        font-weight: normal;
        width: 238px;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    .title-home-card{
        text-align: left;
        margin-top:0;
        font-weight:500;
        color: #ffb62f;
    }
</style>

<style>
    /* Conteneur général */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        overflow: hidden;
        padding: 20px 10px;
    }

    /* Slider */
    .glide__track {
        height: 100%;
        overflow: hidden;
    }

    .glide__slides {
        position: relative;
        width: 100%;
        list-style: none;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        touch-action: pan-Y;
        overflow: hidden;
        padding: 0;
        white-space: nowrap;
        display: flex
    ;
        flex-wrap: nowrap;
        will-change: transform;
    }

    .glide__slide {
        list-style: none;
        flex-shrink: 0;
        border-radius: 8px;
        background: linear-gradient(
                        149deg,
                        #192247 0%,
                        #210e17 96.86%
                    ); /* Fond pour les cases */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 214px; /* Largeur fixe pour chaque slide */
        position: relative;
    }

    .glide__slide--active {
        border: 2px solid #b7b7b7; 
    }


    .ccfg {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        font-size: 160px;
        -webkit-text-stroke: 3px #e9e9e9; 
        color: #151b1e;
        font-weight: 700; 
        font-family: sans-serif; 
        z-index: 10; 
        pointer-events: none; 
    }


    /* Figure hoverable */
    .hoverable {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .hoverable:hover {
        transform: scale(1.05); /* Zoom léger au survol */
        box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
    }

    /* Images */
    .img-fluid {
        width: 100%;
        height: auto;
        border-radius: 8px;
        display: block;
    }

    /* Style du lien */
    .meta-body a {
        text-decoration: none;
        color: inherit;
    }

    .meta-body a:hover {
        text-decoration: underline;
        color: #ff9800; /* Couleur orange au survol */
    }

</style>

<script>
    // Sélectionne chaque conteneur de carrousel
    document.querySelectorAll('.carousel-btn-relative').forEach(carousel => {
        const animeList = carousel.querySelector('.anime-list');
        const btnLeft = carousel.querySelector('.carousel-btn.left');
        const btnRight = carousel.querySelector('.carousel-btn.right');

        // Définir la largeur de défilement pour chaque clic
        const scrollAmount = 350; // Valeur ajustable selon les besoins

        // Fonction pour défiler vers la gauche
        btnLeft.addEventListener('click', () => {
            animeList.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });

        // Fonction pour défiler vers la droite
        btnRight.addEventListener('click', () => {
            animeList.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
    });
</script>

<script>
        // Script de redirection sur clic image
        document.querySelectorAll('.clickable-image').forEach(image => {
            image.addEventListener('click', function() {
                const lien = this.src;
                const parts = lien.split('/');
                const nomManga = parts[parts.length - 3]; 
                const chapter = 1;
                const page = 1;
                window.location.href = `manga/scan/\${encodeURIComponent(nomManga)}/\${chapter}/\${page}`;
            });
        });
</script> 


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
        return "home/home.html.twig";
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
        return array (  461 => 195,  450 => 186,  443 => 184,  432 => 178,  428 => 177,  421 => 175,  415 => 174,  411 => 172,  406 => 171,  392 => 159,  385 => 157,  374 => 151,  370 => 150,  363 => 148,  357 => 147,  353 => 145,  348 => 144,  334 => 132,  327 => 130,  316 => 124,  312 => 123,  305 => 121,  299 => 120,  295 => 118,  290 => 117,  276 => 105,  269 => 103,  258 => 97,  254 => 96,  247 => 94,  241 => 93,  237 => 91,  232 => 90,  216 => 76,  193 => 69,  189 => 68,  183 => 65,  179 => 63,  162 => 62,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}InMyScan | Films, Animes, et Séries gratuits VF/VOSTFR illimité{% endblock %}
{% block body %}
    {{ navbar() }}
    <div class=\"home-container-box\" itemscope itemtype=\"https://schema.org/WebPage\">
        <meta itemprop=\"name\" content=\"InMyScan\">
        <meta itemprop=\"description\" content=\"Regardez des Séries, Films, Animes et lisez des scans gratuitement en VF/VOSTFR. Explorez notre catalogue gratuit et complet.\">
        <meta itemprop=\"inLanguage\" content=\"fr-FR\">
      
<script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"WebSite\",
  \"name\": \"InMyScan\",
  \"url\": \"https://inmyscan.com\",
  \"potentialAction\": {
    \"@type\": \"SearchAction\",
    \"target\": {
      \"@type\": \"EntryPoint\",
      \"urlTemplate\": \"https://inmyscan.com/search_manga?query={query}\"
    },
    \"query-input\": \"required name=query\"
  }
}
</script>

    <div class=\"home-banner\">
        <!-- SVG à gauche -->
        <div class=\"svg-container\">
            <svg viewBox=\"0 0 128 128\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" role=\"img\" class=\"iconify iconify--noto\" preserveAspectRatio=\"xMidYMid meet\" fill=\"#000000\"><g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"></g><g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></g><g id=\"SVGRepo_iconCarrier\"> <path d=\"M20.71 44.56l-6.52-5.93s-.27-2.95 2.04-3.89c2.63-1.07 5.16.19 5.16.19l3.99 7.68l-4.67 1.95z\" fill=\"#b40e1c\"> </path> <path d=\"M106.7 44.76l-5.64-4.47l3.79-5.54s1.96-1.59 5.35.1c2.59 1.29 3.23 3.79 2.93 4.56c-.29.77-6.43 5.35-6.43 5.35z\" fill=\"#b40e1c\"> </path> <path d=\"M22.75 43.49l-3.15-.85s-.36-1.49.32-2.81c.71-1.37 2.1-1.22 2.1-1.22s-3.35-1.63-1.89-5.62s5.93-3.11 5.93-3.11s-.1-2.53 1.95-4.09c2.04-1.56 3.6-.39 3.6-.39s-1.58-5.05 2.33-7.39c3.34-2 5.64-.1 5.64-.1s1.35-3.38 5.05-3.45c2.77-.05 3.61 1.02 3.61 1.02s.97-1.95 2.53-2.82c1.56-.88 2.49-.75 2.49-.75s-.71-2.42.04-4.4c1.32-3.5 4.96-4.28 7.68-3.6c3.73.93 3.27 3.51 3.27 3.51s1.89-1.27 3.64-1.07c1.75.19 2.67 1.35 2.67 1.35s1.22-3.58 5.3-3.58c4.09 0 5.25 2.43 5.45 4.28s-1.03 4.03-1.03 4.03s.59.23.77 1.63c.14 1.06-.27 2-.27 2s1.88-1.48 5.63 0c6.22 2.45 4.92 9.07 4.92 9.07s1.8-.21 3.16.37c1.56.67 2.28 1.77 2.28 1.77s.35-2.9 3.99-2.92c3.8-.02 6.91 7.1 6.23 9.14c-.68 2.04-2.53 2.53-2.53 2.53s1.69.48 2.32 2.53c.75 2.42.13 4.99.13 4.99s-26.38 16.1-26.67 16s-32.98 2.43-32.98 2.43L22.75 43.49z\" fill=\"#ffb91f\"> </path> <path d=\"M34.84 48.47c0-.21.3-1.08.89-1.46c.73-.47 1.82-.52 1.82-.52s-1.2-.57-1.87-2.45c-.44-1.22.1-2.54.1-2.54s-3.17.15-3.9-2.25s.42-2.71.42-2.71s-1.27-6.81 4.06-6.93c7.29-.16 6.04 9.11 6.04 9.11s1.04 0 1.67.57c.62.57.83 1.15.83 1.15s1.36-2.05 4.58-1.56c7.6 1.15 4.06 8.59 4.06 8.59s-1.41-3.85-3.85-4.01c-2.45-.16-5.47 1.51-5.47 1.51s4.63.57 5.88 3.02s1.15 5.78 1.15 5.78s-9.27 2.71-9.48 2.4c-.22-.3-6.93-7.7-6.93-7.7z\" fill=\"#fce193\"> </path> <path d=\"M40.61 40.35c-.67-.29-2.55 1.36-2.59 2.59c-.04 1.23 1 2.8 2.24 2.91c1.23.11 2.46-1.16 2.46-2.39c0-.62-1.28-2.75-2.11-3.11z\" fill=\"#e17a2c\"> </path> <path d=\"M46.27 26.55s-4.99-.72-4.89 3.4c.13 5.46 6.28 4.65 6.33 4.94c.05.29.3 2.15.3 2.15s2.43-.28 4.78 1.11s3.36 3.02 3.36 3.02s.48-2.25 1.15-3.21c.67-.96 1.39-1.68 1.39-1.68s0-1.2-.34-2.16c-.24-.69-.81-1.05-.81-1.05s5.4-2.56 2.68-6.81c-3.07-4.79-7.96-.34-7.96-.34s-1.92-2.78-4.31-2.11c-2.4.67-1.68 2.74-1.68 2.74z\" fill=\"#fce193\"> </path> <path d=\"M58.54 44.52s-1.44-4.94 1.25-6.33s4.46.19 4.55-.1s4.27-4.75 7.86-4.65c5.32.14 6.54 3.52 6.66 3.88c.59 1.72-.19 4.51-.19 4.51s2.01-3.12 4.89-2.83c2.88.29 3.2 2.59 3.2 2.59s3.18 1.97 3.03 3.84c-.14 1.87-2.16 3.26-2.16 3.26l-4.89 4.79l-5.27-1.82s-.72-2.4-.72-3.88c0-1.49.14-2.68.14-2.68s-1.44.77-2.44 1.05c-1.01.29-3.12.34-3.12.34s-.08-1.21-2.11-2.59c-4.45-3.02-10.68.62-10.68.62z\" fill=\"#fce193\"> </path> <path d=\"M60.65 51.18s-1.63-5.92 3.07-6.04c5.61-.14 6.42 4.84 6.62 7.62c.19 2.78-7.24 7.05-7.53 6.9c-.29-.14-7.25-4.42-7.25-4.42s-.53-1.54.64-2.91c1.22-1.45 4.45-1.15 4.45-1.15z\" fill=\"#fce193\"> </path> <path d=\"M91.86 48.45s-1.63-1.34-1.15-3.88s2.44-2.68 2.44-2.68s-1.49-2.3-.77-3.79s1.87-1.82 5.56-1.77s5.56 1.05 6.76 2.35c1.08 1.16.38 4.7.38 4.7s-5.46 6.57-6.09 6.42c-.62-.15-7.13-1.35-7.13-1.35z\" fill=\"#fce193\"> </path> <path d=\"M76.56 31.34s1.92 1.2 2.54 2.11c.62.91 1.44 2.64 1.44 2.64s.4-4.68 2.33-6.96c2.11-2.49 4.86-2.39 4.91-2.39c.52 0 1.39-3.88-.62-5.94c-2.52-2.58-6.85-1.68-6.81-1.29s1.58 2.25.58 6.57c-.93 3.94-4.37 5.26-4.37 5.26z\" fill=\"#fce193\"> </path> <path d=\"M63.14 32.25c.77.39 2.14-.9 3.31-1.44c1.34-.62 3.07-.86 3.12-1.53s-1.87-3.07-4.65-1.73c-2.78 1.34-2.64 4.27-1.78 4.7z\" fill=\"#fce193\"> </path> <path d=\"M21.82 34.57c-.24 2.44 2.25 3.2 2.25 3.2s-.31 2.25.58 3.55c.72 1.05 2.21 2.35 2.83 2.21c.62-.14 2.59-2.01 2.59-2.16c0-.14-.11-5.51-1.25-7.43c-1.58-2.7-6.57-3.7-7 .63z\" fill=\"#fce193\"> </path> <path d=\"M30.55 31.34c.67 0 1.34-1.53 1.73-2.11c.38-.58 1.82-1.53 1.82-1.53s-2.21-1.53-3.6-.14c-1.39 1.38-.96 3.78.05 3.78z\" fill=\"#fce193\"> </path> <path d=\"M35.91 26.98s1.34-.14 2.11-.1c.77.05 2.06.29 2.06.29s.19-1.25 1.58-2.16c1.39-.91 2.68-.62 2.68-.62s.29-1.73 1.39-2.49c1.1-.77 1.77-.77 1.77-.77s1.02-2.62-.48-3.6c-4.27-2.78-6.46 2.8-7.19 2.92c-.54.09-2.42-1.78-4.48-.34c-3.5 2.46.56 6.87.56 6.87z\" fill=\"#fce193\"> </path> <path d=\"M49.43 20.7s1.15.29 2.01.81s2.16 1.44 2.16 1.44l6.33-.19s1.39-1.82 3.4-2.64c1.64-.67 3.55-.72 3.55-.72s.18-4.68-3.69-5.9c-4.89-1.53-6.52 3.45-6.52 3.45s-1.44-1.62-3.12-1.58c-3.73.1-4.12 5.33-4.12 5.33z\" fill=\"#fce193\"> </path> <path d=\"M56.57 19.02c-.58 0-3.98 2.92-4.07 3.21c-.1.29.81.77.91 1.05c.1.29 6.23-.38 6.57-.62c.33-.24-2.11-3.64-3.41-3.64z\" fill=\"#e17a2c\"> </path> <path d=\"M48.91 28.89c.03.57 2.83 4.31 3.69 4.46s3.7-3.02 2.88-3.74c-.38-.34-3.21.05-3.21.05s-.05-2.11-.29-2.44c-.25-.34-3.12.72-3.07 1.67z\" fill=\"#e17a2c\"> </path> <path d=\"M55.86 12.5c.73.02 1.39-2.68 2.25-3.55s2.92-1.73 2.44-3.07s-4.17-.96-5.37 1.01c-1.33 2.19-.91 5.56.68 5.61z\" fill=\"#fce193\"> </path> <path d=\"M66.07 11.78c.15.66 2.01 1.44 2.3 1.77c.29.34 1.63 1.53 1.63 1.53s3.07-.77 4.89-.29c1.82.48 2.68 1.77 3.21 1.44c.53-.34.24-1.77-.05-2.25s-.86-1.39-.86-1.39s2.76-4.28-.1-4.99c-4.07-1.01-4.89 3.12-5.42 3.21s-2.06-1.53-3.74-1.29c-1.67.25-2.06 1.4-1.86 2.26z\" fill=\"#fce193\"> </path> <path d=\"M68.37 24.1c.68 1.51 2.83 1.63 2.83 1.63s1.05 3.36 3.21 3.64c2.16.29 3.58-1.96 4.03-3.83c.58-2.4.59-7.59-4.75-7.53c-4.03.05-5.75 5.13-5.32 6.09z\" fill=\"#fce193\"> </path> <path d=\"M89.55 41.21c.67-.02.22-3.96 2.34-5.56c2.29-1.73 4.08-1.41 6.43-1.25c2.44.16 4.09.92 4.6.24c.64-.84 1.03-6.7-2.3-7.19c-1.97-.29-2.49 1.63-2.49 1.63s-2.01-.43-3.12 1.58c-.76 1.39-.81 2.3-1.15 2.4c-.15.04-5.29-7.9-9.3-3.07c-4.17 5.03 3.45 9.2 3.45 9.2s.25 2.07 1.54 2.02z\" fill=\"#fce193\"> </path> <path d=\"M74.36 18.88c-.27.18-.38 4.84-.14 4.89c.24.05 3.26 1.68 3.69 1.25c.43-.43.43-2.64-.34-4.07c-.48-.92-2.25-2.7-3.21-2.07z\" fill=\"#e17a2c\"> </path> <path d=\"M67.98 13.03c-.04.49.62 3.07 1.39 3.16c1.28.16 3.64-1.2 3.88-1.68s-.19-1.87-2.11-2.35c-1.9-.47-3.11.2-3.16.87z\" fill=\"#e17a2c\"> </path> <path d=\"M68.46 42.22c.67.72 2.99-1.24 3.83-.86c.96.43 0 2.92 1.05 3.21c1.05.29 3.16-3.12 2.92-4.6c-.1-.62-1.34-1.44-2.68-1.92s-3.16-.81-3.98-.29s-2.34 3.17-1.14 4.46z\" fill=\"#e17a2c\"> </path> <path d=\"M96.5 45.67s-.1-3.07.72-4.6c.81-1.53 2.88-1.29 3.21-.91s1.49 3.16 1.49 3.16l-2.44 4.17l-2.98-1.82z\" fill=\"#e17a2c\"> </path> <path d=\"M63.35 61.35l-9.56-3.74l-.27-.42c-.48-.75-6.78-1.76-6.78-1.76l-.56-.11l-7.85-1.69l-.22-.38c-.49-.83-6.81-3.08-6.81-3.08l-5.94-2.4l-.16-.39c-.53-1.27-4.55-3.47-4.64-3.29l-1.79-.89c.47-.95 1.96-2.52 4.22-1.61c1.97.79 4.22 3.52 4.71 4.6l3.23 1.67c.79-.5 2.28-1 4.32-.29c2.96 1.04 3.74 3.33 4.35 4.28l6.5 1.4c.69-.56 2.15-1.5 4.1-1.18c3.41.56 4.24 2.53 4.95 3.53l7.49.64c.75-1.03 2.66-3.21 5.63-3.62c2.78-.39 4.81.57 5.63 1.53l7.16-2.41c.6-.93 2.67-3.56 5.91-4.15c3.02-.55 5.39.98 6.48 1.67l4.78-2.45c.51-.86 2.16-3.54 4.68-4.31c3.15-.95 5.17 1.04 5.26 1.11l-1.35 1.48c-.04-.04-6.61 3.69-6.63 3.72l-1.41 2.43l-5.52.36l-.5-.4c-.02-.02-10.13 1.81-10.15 1.84l-.19.35l-9.04 3.04l-.44-.47c-.06-.06-9.59 5.39-9.59 5.39z\" fill=\"#dfdfdf\"> </path> <path d=\"M107.72 46.58c-.23.02-2.11-2.62-4.56-1.6c-2.45 1.03-4.79 5.24-4.79 5.24l-7.63 1.2s-1.03-2.08-3.88-1.28c-2.85.8-5.41 4.3-5.47 4.07c-.06-.23-8.4 1.9-8.4 1.9S71.34 54.27 68.4 55c-3.04.76-4.69 4.49-4.69 4.49l-9.47-1.88s-1.62-2.72-4.07-3.06c-2.45-.34-4.04 1.26-4.04 1.26l-7.07-1.72s-1.08-2.96-4.16-3.99s-4.56.28-4.56.28l-4.58-3.11s-1.35-2.22-3.92-3.42c-2.56-1.2-3.3.9-3.3.9L34.5 111.9l30.56 12.43l30.17-13.21c.02.01 13.18-64.61 12.49-64.54z\" fill=\"#ffffff\"> </path> <path d=\"M20.71 44.56l-.02-.07c-.28-1.31-1.01-4.28-2.74-5.63c-2.25-1.75-3.76-.24-3.76-.24l17.35 72.18l4.24 1.62l-15.07-67.86z\" fill=\"#ed3d23\"> </path> <path d=\"M31.96 49.98s-.27-4.51-3.83-5.58c-2.83-.85-2.95 2.06-2.95 2.06l14.07 67.39l5.37 2.16l-12.66-66.03z\" fill=\"#ed3d23\"> </path> <path d=\"M47.06 55.19s-1.45-4.85-5.14-5.26c-3.69-.41-3.32 2.69-3.32 2.69l9.55 64.86l5.37 2.18l-6.46-64.47z\" fill=\"#ed3d23\"> </path> <path d=\"M58.79 53.82c-4.05-.51-4.61 3.56-4.61 3.56l4.19 64.26l6.72 2.7l-1.2-65.18s-.85-4.8-5.1-5.34z\" fill=\"#ed3d23\"> </path> <path d=\"M82.04 54.07s.21-5.1-4.35-3.81c-4.56 1.28-5.06 5.55-5.06 5.55l-1.14 65.75l5.66-2.51l4.89-64.98z\" fill=\"#ed3d23\"> </path> <g fill=\"#ed3d23\"> <path d=\"M98.95 48.6s-.19-4-4.1-3.19c-4.1.84-4.14 4.97-4.14 4.97l-7.19 65.93l5.46-2.41l9.97-65.3z\"> </path> <path d=\"M109.39 39.02c-3.36 1.61-3.65 5.93-3.65 5.93l-11.45 66.62l5.37-2.38l13.51-69.84c-.01 0-.84-1.74-3.78-.33z\"> </path> </g> </g></svg>
        </div>
        <!-- Texte à droite -->
        <div class=\"text-container\">
            <h1>Profitez d'un streaming gratuit de Films, Animes et Séries.</h1>
        </div>
    </div>
    <style>
        .home-banner {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .svg-container {
            width: 50px; 
            height: 50px;
        }

        /* Style pour le texte */
        .text-container {
            font-family: Arial, sans-serif;
            color: #f4f4f4;
            font-size: 18px;
        }
    </style>

<div class=\"container\">
    <div class=\"mt-slider rgr glide--ltr glide--slider glide--swipeable\">
        <div class=\"glide__track\" data-glide-el=\"track\">
            <ul class=\"glide__slides\" style=\"transition: transform cubic-bezier(0.165, 0.84, 0.44, 1); width: 1334px; transform: translate3d(0px, 0px, 0px);\">
                {% for top in latestFilms|slice(0, 5) %}
                    <li class=\"glide__slide\" style=\"width: 214px; margin-left: 5px; margin-right: 5px;\">
                        <article class=\"prr\">
                            <div class=\"ccfg\">{{ loop.index }}</div>
                            <figure class=\"hoverable fhg\">
                                <div class=\"meta-body\">
                                    <a href=\"{{ path('films_profile', { id: top.id }) }}\">
                                        <img src=\"{{ asset('img/film_img/' ~ top.photo ?: 'default-thumbnail.jpg') }}\" alt=\"{{ top.titre }}\" class=\"img-fluid rounded shadow\">
                                    </a>
                                </div>
                            </figure>
                        </article>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>
</div>



        <div class=\"main-video-container\">
            <div class=\"main-anime-container\">
                <div class=\"anime-box\">
                    <h2>Un film pour commencer ?</h2>
                    <div class=\"carousel-btn-relative\">
                    <button class=\"carousel-btn left\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">◀</button>
                    <div class=\"anime-list\">
                        {% for film in films %}
                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"{{ path('films_profile', { 'id': film.id}) }}\" aria-label=\"Voir {{ film.titre }}\" itemprop=\"url\">
                                        <img src=\"{{ asset('img/film_img/' ~ film.photo) }}\" alt=\"Couverture de {{ film.titre }}\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                        <div class=\"limited-text\">
                                            <p itemprop=\"name\" class=\"title-home-card\">{{ film.titre }}</p>
                                            <p itemprop=\"name\" class=\"description-home-card\">{{ film.description | default('La description n\\'est pas encore disponible... Désolé !') }}</p>
                                        </div>
                                    </a>
                                </div>
                             </article>
                        {% else %}
                            <p>Aucun Film trouvé.</p>
                        {% endfor %}
                    </div>
                    <button class=\"carousel-btn right\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">▶</button>
                    </div>
                </div>
            </div>

            <div class=\"main-anime-container\">
                <div class=\"anime-box\">
                    <h2>Animes et Kdrama un peu flippant...</h2>
                    <div class=\"carousel-btn-relative\">
                    <button class=\"carousel-btn left\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">◀</button>
                    <div class=\"anime-list\">
                        {% for manga in actionMangas %}
                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"{{ path('manga_profile', { 'id': manga.id}) }}\" aria-label=\"Voir {{ manga.titre }}\" itemprop=\"url\">
                                        <img src=\"{{ asset('img/anime_pfp/' ~ manga.photo) }}\" alt=\"Couverture de {{ manga.titre }}\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                        <div class=\"limited-text\">
                                            <p itemprop=\"name\" class=\"title-home-card\">{{ manga.titre }}</p>
                                            <p itemprop=\"name\" class=\"description-home-card\">{{ manga.description | default('La description n\\'est pas encore disponible... Désolé !') }}</p>
                                        </div>
                                    </a>
                                </div>
                             </article>
                        {% else %}
                            <p>Aucun manga trouvé.</p>
                        {% endfor %}
                    </div>
                    <button class=\"carousel-btn right\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">▶</button>
                    </div>
                </div>
            </div>

            <div class=\"main-anime-container\">
                <div class=\"anime-box\">
                    <h2>Des séries rafraîchissantes</h2>
                    <div class=\"carousel-btn-relative\">
                    <button class=\"carousel-btn left\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">◀</button>
                    <div class=\"anime-list\">
                        {% for serie in series %}
                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"{{ path('series_profile', { 'id': serie.id}) }}\" aria-label=\"Voir {{ serie.titre }}\" itemprop=\"url\">
                                        <img src=\"{{ asset('img/serie_img/' ~ serie.photo) }}\" alt=\"Couverture de {{ serie.titre }}\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                        <div class=\"limited-text\">
                                            <p itemprop=\"name\" class=\"title-home-card\">{{ serie.titre }}</p>
                                            <p itemprop=\"name\" class=\"description-home-card\">{{ serie.description | default('La description n\\'est pas encore disponible... Désolé !') }}</p>
                                        </div>
                                    </a>
                                </div>
                             </article>
                        {% else %}
                            <p>Aucun manga trouvé.</p>
                        {% endfor %}
                    </div>
                    <button class=\"carousel-btn right\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">▶</button>
                    </div>
                </div>
            </div>

            <div class=\"main-anime-container\">
                <div class=\"anime-box\">
                    <h2>Animes de romances.</h2>
                    <div class=\"carousel-btn-relative\">
                    <button class=\"carousel-btn left\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">◀</button>
                    <div class=\"anime-list\">
                        {% for manga in romanceMangas %}
                            <article class=\"anime-container\" itemscope itemtype=\"https://schema.org/CreativeWorkSeries\">
                                <div class=\"anime-item\">
                                    <a href=\"{{ path('manga_profile', { 'id': manga.id}) }}\" aria-label=\"Voir {{ manga.titre }}\" itemprop=\"url\">
                                        <img src=\"{{ asset('img/anime_pfp/' ~ manga.photo) }}\" alt=\"Couverture de {{ manga.titre }}\" loading=\"lazy\" class=\"clickable-image\" itemprop=\"image\">
                                        <div class=\"limited-text\">
                                            <p itemprop=\"name\" class=\"title-home-card\">{{ manga.titre }}</p>
                                            <p itemprop=\"name\" class=\"description-home-card\">{{ manga.description | default('La description n\\'est pas encore disponible... Désolé !') }}</p>
                                        </div>
                                    </a>
                                </div>
                             </article>
                        {% else %}
                            <p>Aucun manga trouvé.</p>
                        {% endfor %}
                    </div>
                    <button class=\"carousel-btn right\" style=\"position:absolute; z-index:2000; height:100%; width:45px;\">▶</button>
                    </div>
                </div>
            </div>

        </div>
</div>

    {{ footer() }}


<style>
    .anime-container {
        position: relative;
    }

    .anime-item {
        transition: transform 0.3s ease, margin 0.3s ease;
        position: relative;
    }

    .anime-item:hover {
        transform: scale(1.2);
        margin: 0 40px;
    }

    .anime-item img {
        transition: filter 0.3s ease;
    }

    .anime-item:hover img {
        
    }

    .anime-item a {
        position: relative; /
    }

    .limited-text {
        position: absolute;
        bottom: 10px;
        left: 0;
        width: 96.5%;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding-left: 10px;
        text-align: center;
        display: none;
        z-index: 1; 
        
    }

    .anime-item:hover .limited-text {
        display: block; /* Show the text when hovering */
    }

    .description-home-card{
        font-size: 10px;
        font-weight: normal;
        width: 238px;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    .title-home-card{
        text-align: left;
        margin-top:0;
        font-weight:500;
        color: #ffb62f;
    }
</style>

<style>
    /* Conteneur général */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        overflow: hidden;
        padding: 20px 10px;
    }

    /* Slider */
    .glide__track {
        height: 100%;
        overflow: hidden;
    }

    .glide__slides {
        position: relative;
        width: 100%;
        list-style: none;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        touch-action: pan-Y;
        overflow: hidden;
        padding: 0;
        white-space: nowrap;
        display: flex
    ;
        flex-wrap: nowrap;
        will-change: transform;
    }

    .glide__slide {
        list-style: none;
        flex-shrink: 0;
        border-radius: 8px;
        background: linear-gradient(
                        149deg,
                        #192247 0%,
                        #210e17 96.86%
                    ); /* Fond pour les cases */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 214px; /* Largeur fixe pour chaque slide */
        position: relative;
    }

    .glide__slide--active {
        border: 2px solid #b7b7b7; 
    }


    .ccfg {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        font-size: 160px;
        -webkit-text-stroke: 3px #e9e9e9; 
        color: #151b1e;
        font-weight: 700; 
        font-family: sans-serif; 
        z-index: 10; 
        pointer-events: none; 
    }


    /* Figure hoverable */
    .hoverable {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .hoverable:hover {
        transform: scale(1.05); /* Zoom léger au survol */
        box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
    }

    /* Images */
    .img-fluid {
        width: 100%;
        height: auto;
        border-radius: 8px;
        display: block;
    }

    /* Style du lien */
    .meta-body a {
        text-decoration: none;
        color: inherit;
    }

    .meta-body a:hover {
        text-decoration: underline;
        color: #ff9800; /* Couleur orange au survol */
    }

</style>

<script>
    // Sélectionne chaque conteneur de carrousel
    document.querySelectorAll('.carousel-btn-relative').forEach(carousel => {
        const animeList = carousel.querySelector('.anime-list');
        const btnLeft = carousel.querySelector('.carousel-btn.left');
        const btnRight = carousel.querySelector('.carousel-btn.right');

        // Définir la largeur de défilement pour chaque clic
        const scrollAmount = 350; // Valeur ajustable selon les besoins

        // Fonction pour défiler vers la gauche
        btnLeft.addEventListener('click', () => {
            animeList.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });

        // Fonction pour défiler vers la droite
        btnRight.addEventListener('click', () => {
            animeList.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
    });
</script>

<script>
        // Script de redirection sur clic image
        document.querySelectorAll('.clickable-image').forEach(image => {
            image.addEventListener('click', function() {
                const lien = this.src;
                const parts = lien.split('/');
                const nomManga = parts[parts.length - 3]; 
                const chapter = 1;
                const page = 1;
                window.location.href = `manga/scan/\${encodeURIComponent(nomManga)}/\${chapter}/\${page}`;
            });
        });
</script> 


{% endblock %}", "home/home.html.twig", "C:\\Users\\anisl\\Desktop\\inmyscan.com\\templates\\home\\home.html.twig");
    }
}
