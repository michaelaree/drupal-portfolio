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

/* page.html.twig */
class __TwigTemplate_f6fe97661decd01093d936da9b4b4cd1 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "getId", [], "method", false, false, true, 2), "html", null, true);
        yield "\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["head_title"] ?? null), "html", null, true);
        yield "</title>
    ";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["head"] ?? null), "html", null, true);
        yield "
    ";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["styles"] ?? null), "html", null, true);
        yield "
    ";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scripts"] ?? null), "html", null, true);
        yield "
    <style>
      body {
        margin: 0; /* Remove default margin */
      }

      .hero-text h1 {
        color: white;
      }

      .hero-image {
        position: relative;
        width: 100%;
        height: 650px; /* Adjust the height as needed */
        background: url('";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/hilton.jpg') no-repeat center center;
        background-size: cover;
      }

      /* Text content placed in front of the background image */
      .hero-text {
        position: absolute;
        top: 80%; /* Adjusted to drop the text down a bit */
        left: 50%; /* Position the text horizontally centered */
        transform: translate(-50%, -50%); /* Exactly center the text */
        color: white;
        font-size: 2rem; /* Adjust font size */
        text-align: center;
        padding: 20px;
        margin: 0; /* Remove margin */
        background-color: rgba(0, 0, 0, 0.5); /* Optional: Adds dark background to text for contrast */
        border-radius: 8px; /* Optional: Adds rounded corners to the background */
        z-index: 2; /* Ensure the text is above the background image */
      }

      header {
        position: relative;
        z-index: 3; /* Ensure the header is above the hero image */

      }

      /* Overlay using the ::before pseudo-element */
      .hero-image::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent dark overlay */
        z-index: 1; /* Ensure the overlay is above the image */
      }

      /* Content inside the hero-image (e.g., text, logo, etc.) */
      .hero-image > * {
        position: relative;
        z-index: 2;
      }

      body {
        font-family: 'Arial', sans-serif;
        background-color: #f9f9f9;
        color: #333;
        margin: 0;
        padding: 0;
      }

      .main-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        padding: 60px;
        gap: 40px;
      }

      .text-section {
        background-color: #1a1a2e;
        color: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      }

      .text-section h2 {
        font-size: 2rem;
        margin-bottom: 16px;
        color: #ff6f61;
      }

      .text-section p {
        font-size: 1.1rem;
        line-height: 1.6;
      }

      .image-section img {
        width: 100%;
        height: 400px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      /* Skills Section */
      .skills-container {
        padding: 60px;
        background-color: #f1f1f1;
      }

      .skills-heading {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 20px;
      }

      .skills-description {
        font-size: 1.2rem;
        text-align: center;
        margin-bottom: 40px;
      }

      .skills-wrapper {
        display: flex;
        justify-content: space-between;
        gap: 40px;
      }

      .skills-section {
        width: 45%;
      }

      .skill {
        margin-bottom: 20px;
      }

      .skill-title {
        font-size: 1.2rem;
        margin-bottom: 8px;
      }

      .skill-bar {
        width: 100%;
        height: 20px;
        background-color: #ddd;
        border-radius: 10px;
      }

      .skill-bar-fill {
        height: 100%;
        background-color: #ff6f61;
        text-align: center;
        line-height: 20px;
        color: white;
        border-radius: 10px;
      }

    </style>
  </head>
  <body class=\"";
        // line 164
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["body_classes"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_class"] ?? null), "html", null, true);
        yield "\">
    <header>
      <div class=\"logo\">
        <a href=\"";
        // line 167
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\">
          <img src=\"";
        // line 168
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/placeholder2.png\" alt=\"My Portfolio Logo\">
        </a>
      </div>
      <nav>
        ";
        // line 172
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 172), "html", null, true);
        yield "
      </nav>
    </header>

    <div class=\"hero-image\"></div>

    <div class=\"main-content\">
      <!-- Text Section -->
      <div class=\"text-section\">
        <h2>Welcome to My Portfolio!</h2>
        <p>
          Hi, I'm Michael Aree, a passionate web developer specializing in Drupal solutions at Cocomore. With a dedication to crafting dynamic, user-centric websites, I take pride in building seamless digital experiences that deliver real value.
          <br><br>
          Feel free to explore my work, where creativity meets robust development practices. Let's connect and bring innovative ideas to life together!
        </p>
      </div>

      <!-- Image Section -->
      <div class=\"image-section\">
        <img src=\"";
        // line 191
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/aree1.png\" alt=\"Striking Color Palette\">
      </div>
    </div>

    <!-- Hero Text Overlay -->
    <div class=\"hero-text\">
      <h1>Welcome to My Portfolio</h1>
      <p>Explore my work and creative projects</p>
    </div>

    <!-- Skills Section -->
    <section class=\"skills-container\">
      <h1 class=\"skills-heading\">SKILLS</h1>
      <p class=\"skills-description\">
        Here are some of the technical skills I’ve mastered over time, each representing my experience and passion for web development.
      </p>

      <div class=\"skills-wrapper\">
        <!-- Left Section -->
        <div class=\"skills-section\">
          <div class=\"skill\">
            <p class=\"skill-title\">HTML</p>
            <div class=\"skill-bar\">
              <div class=\"skill-bar-fill\" style=\"width: 90%;\">90%</div>
            </div>
          </div>

          <div class=\"skill\">
            <p class=\"skill-title\">CSS</p>
            <div class=\"skill-bar\">
              <div class=\"skill-bar-fill\" style=\"width: 80%;\">80%</div>
            </div>
          </div>

          <div class=\"skill\">
            <p class=\"skill-title\">JavaScript</p>
            <div class=\"skill-bar\">
              <div class=\"skill-bar-fill\" style=\"width: 60%;\">60%</div>
            </div>
          </div>
        </div>

        <!-- Right Section -->
        <div class=\"skills-section\">
          <div class=\"skill\">
            <p class=\"skill-title\">PHP</p>
            <div class=\"skill-bar\">
              <div class=\"skill-bar-fill\" style=\"width: 70%;\">70%</div>
            </div>
          </div>

          <div class=\"skill\">
            <p class=\"skill-title\">WordPress</p>
            <div class=\"skill-bar\">
              <div class=\"skill-bar-fill\" style=\"width: 75%;\">75%</div>
            </div>
          </div>

          <div class=\"skill\">
            <p class=\"skill-title\">Photoshop</p>
            <div class=\"skill-bar\">
              <div class=\"skill-bar-fill\" style=\"width: 45%;\">45%</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <p>&copy; 2025 Portfolio</p>
    </footer>
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["language", "head_title", "head", "styles", "scripts", "directory", "body_classes", "page_class", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page.html.twig";
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
        return array (  268 => 191,  246 => 172,  239 => 168,  235 => 167,  227 => 164,  83 => 23,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page.html.twig", "themes/custom/portfolio/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array("path" => 167);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['path'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
