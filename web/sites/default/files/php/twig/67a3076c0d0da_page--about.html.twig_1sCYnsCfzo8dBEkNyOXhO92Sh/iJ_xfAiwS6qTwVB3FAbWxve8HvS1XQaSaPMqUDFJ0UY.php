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

/* themes/custom/portfolio/templates/page--about.html.twig */
class __TwigTemplate_55fcc2fec18793f04923a19f0f0feca1 extends Template
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
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f9f9f9;
        color: #333;
      }

      /* Hero Section */
      .hero-section {
        text-align: center;
        padding: 80px 20px;
        background-color: #3e4c59;
        color: white;
      }

      .hero-section h1 {
        font-size: 3rem;
        margin: 0;
        font-weight: 700;
      }

      .hero-section p {
        font-size: 1.2rem;
        margin: 20px 0;
        line-height: 1.6;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
      }



      /* About Section */
      .about-section {
        padding: 60px 20px;
        background-color: #ffffff;
        color: #333;
      }

      .about-section h2 {
        font-size: 2.5rem;
        color: black;
        margin-bottom: 20px;
        font-weight: 700;
        text-align: center;
      }

      .about-section p {
        font-size: 1.1rem;
        line-height: 1.8;
        max-width: 800px;
        margin: 0 auto 20px;
        color: black;
      }

      .about-images {
        display: flex;
        justify-content: space-evenly;
        gap: 20px;
        margin-top: 20px;
      }

      .about-images img {
        width: 45%;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
      }

      .about-images img:hover {
        transform: scale(1.05);
      }

      /* Footer */
 footer {
    margin-top: 40px; /* Space between content and footer */
    padding: 20px 0;
    background-color: #00264d;
    color: white;
    text-align: center;
}

      /* Responsive Styling */
      @media screen and (max-width: 768px) {
        .hero-section h1 {
          font-size: 2.5rem;
        }

        .hero-section p {
          font-size: 1rem;
        }

        .about-images {
          flex-direction: column;
          align-items: center;
        }

        .about-images img {
          width: 80%;
          margin-bottom: 20px;
        }
      }
    </style>
  </head>
  <body class=\"";
        // line 115
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["body_classes"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_class"] ?? null), "html", null, true);
        yield "\">
    <header>
      <div class=\"logo\">
        <a href=\"";
        // line 118
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\">
          <img src=\"";
        // line 119
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/placeholder.png\" alt=\"My Portfolio Logo\">
        </a>
      </div>
      <nav>
        ";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 123), "html", null, true);
        yield "
      </nav>
    </header>



    <section class=\"about-section\">
      <div class=\"content-wrapper\">
        <h2>About Me</h2>
        <p>Hi, I'm Michael Aree, a passionate web developer specializing in Drupal solutions at Cocomore. With years of experience, I craft dynamic, user-centric web applications. My expertise includes custom theme development, module integration, and problem-solving to build scalable, high-quality websites.</p>
        <p>When I'm not coding, I love learning new technologies, staying creative, and exploring design trends to keep my skills sharp. Check out my portfolio or feel free to get in touch!</p>

        <div class=\"about-images\">
          <img src=\"";
        // line 136
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/about-1.jpg\" alt=\"Creative Coding\" />
          <img src=\"";
        // line 137
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/about-2.jpg\" alt=\"Modern Design Projects\" />
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
            ->checkDeprecations($context, ["language", "head_title", "head", "styles", "scripts", "body_classes", "page_class", "directory", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/portfolio/templates/page--about.html.twig";
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
        return array (  214 => 137,  210 => 136,  194 => 123,  187 => 119,  183 => 118,  175 => 115,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/portfolio/templates/page--about.html.twig", "/var/www/html/web/themes/custom/portfolio/templates/page--about.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array("path" => 118);

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
