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

/* episode_upload/index.html.twig */
class __TwigTemplate_693ce4a502fb0bc0bcedcf1738df96b7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "episode_upload/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <h1 style=\"text-align: center; color: #fafafa; font-family: Arial, sans-serif;\">Uploader un Épisode</h1>
            <a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manga_create_form");
        yield "\" style=\"padding: 12px; display: flex; background-color: #43375b87; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;justify-content: center; width: 200px; margin: 50px auto;\">
                Créer un Manga / film ? 
            </a>
    <div style=\"max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\">
        <form action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("episode_upload");
        yield "\" method=\"post\" enctype=\"multipart/form-data\" style=\"display: flex; flex-direction: column;\">
            <label for=\"manga_id\" style=\"margin-bottom: 8px; color: #555; font-weight: bold;\">Manga :</label>
            <select id=\"manga_id\" name=\"manga_id\" required style=\"padding: 10px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #ccc;\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mangas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manga"]) {
            // line 13
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "id", [], "any", false, false, false, 13), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["manga"], "titre", [], "any", false, false, false, 13), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['manga'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "            </select>

            <label for=\"saison_numero\" style=\"margin-bottom: 8px; color: #555; font-weight: bold;\">Numéro de Saison :</label>
            <input type=\"number\" id=\"saison_numero\" name=\"saison_numero\" value=\"1\" required style=\"padding: 10px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #ccc;\">

            <label for=\"episode_number\" style=\"margin-bottom: 8px; color: #555; font-weight: bold;\">Numéro de l'Épisode :</label>
            <input type=\"number\" id=\"episode_number\" name=\"episode_number\" value=\"1\" required style=\"padding: 10px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #ccc;\">

            <label for=\"lecteur1\" style=\"margin-bottom: 8px; color: #555; font-weight: bold;\">Lien SIBNET :</label>
            <input type=\"url\" id=\"lecteur1\" name=\"lecteur1\" style=\"padding: 10px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #ccc;\">

            <label for=\"lecteur2\" style=\"margin-bottom: 8px; color: #555; font-weight: bold;\">Lien VIDMOLY :</label>
            <input type=\"url\" id=\"lecteur2\" name=\"lecteur2\" style=\"padding: 10px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #ccc;\">

            <label for=\"lecteur3\" style=\"margin-bottom: 8px; color: #555; font-weight: bold;\">Lien SENDVID :</label>
            <input type=\"url\" id=\"lecteur3\" name=\"lecteur3\" style=\"padding: 10px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #ccc;\">

            <div style=\"margin-bottom: 20px;\">
                <input type=\"checkbox\" id=\"is_film\" name=\"is_film\" value=\"true\" onchange=\"toggleFilmMode(this)\">
                <label for=\"is_film\" style=\"color: #555; font-weight: bold;\">Est-ce un film ?</label>
            </div>

            <button type=\"submit\" style=\"padding: 12px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;\">
                Uploader l'Épisode
            </button>
        </form>
        
    </div>


    <script>
        // Fonction pour activer/désactiver les champs saison et épisode
        function toggleFilmMode(checkbox) {
            const saisonInput = document.getElementById('saison_numero');
            const episodeInput = document.getElementById('episode_number');
            
            if (checkbox.checked) {
                // Si c'est un film, rendre les champs en lecture seule et mettre à 1
                saisonInput.value = 1;
                episodeInput.value = 1;
                saisonInput.setAttribute('readonly', true);
                episodeInput.setAttribute('readonly', true);
                saisonInput.style.backgroundColor = '#e0e0e0'; // Fond gris
                episodeInput.style.backgroundColor = '#e0e0e0'; // Fond gris
            } else {
                // Si ce n'est pas un film, retirer l'attribut readonly et réinitialiser la couleur
                saisonInput.removeAttribute('readonly');
                episodeInput.removeAttribute('readonly');
                saisonInput.style.backgroundColor = ''; // Retirer le fond gris
                episodeInput.style.backgroundColor = ''; // Retirer le fond gris
            }
        }
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "episode_upload/index.html.twig";
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
        return array (  89 => 15,  78 => 13,  74 => 12,  68 => 9,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "episode_upload/index.html.twig", "/home/inmyscan.com/templates/episode_upload/index.html.twig");
    }
}
