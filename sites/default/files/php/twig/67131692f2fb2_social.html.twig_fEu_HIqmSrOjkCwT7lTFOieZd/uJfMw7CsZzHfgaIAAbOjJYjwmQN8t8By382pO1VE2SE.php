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

/* @mahi/parts/social.html.twig */
class __TwigTemplate_1c0eefdd69885405f8228903aa93972d extends Template
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
        yield "<div class=\"social-icons\">
  ";
        // line 2
        if ((($context["facebook_url"] ?? null) != "")) {
            // line 3
            yield "    <div class=\"social-icon\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 3, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"social-icon icon-facebook\" aria-hidden=\"true\"></i></a></div>
  ";
        }
        // line 5
        yield "  ";
        if ((($context["twitter_url"] ?? null) != "")) {
            // line 6
            yield "    <div class=\"social-icon\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 6, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"social-icon icon-twitter\" aria-hidden=\"true\"></i></a></div>
  ";
        }
        // line 8
        yield "  ";
        if ((($context["instagram_url"] ?? null) != "")) {
            // line 9
            yield "    <div class=\"social-icon\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 9, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"social-icon icon-instagram\" aria-hidden=\"true\"></i></a></div>
  ";
        }
        // line 11
        yield "  ";
        if ((($context["linkedin_url"] ?? null) != "")) {
            // line 12
            yield "    <div class=\"social-icon\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 12, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"social-icon icon-linkedin\" aria-hidden=\"true\"></i></a></div>
  ";
        }
        // line 14
        yield "  ";
        if ((($context["youtube_url"] ?? null) != "")) {
            // line 15
            yield "    <div class=\"social-icon\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 15, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"social-icon icon-youtube\" aria-hidden=\"true\"></i></a></div>
  ";
        }
        // line 17
        yield "  ";
        if ((($context["vimeo_url"] ?? null) != "")) {
            // line 18
            yield "    <div class=\"social-icon\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vimeo_url"] ?? null), 18, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"social-icon icon-vimeo\" aria-hidden=\"true\"></i></a></div>
  ";
        }
        // line 20
        yield "  ";
        if ((($context["vk_url"] ?? null) != "")) {
            // line 21
            yield "    <div class=\"social-icon\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vk_url"] ?? null), 21, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"social-icon icon-vk\" aria-hidden=\"true\"></i></a></div>
  ";
        }
        // line 23
        yield "  ";
        if ((($context["whatsapp_url"] ?? null) != "")) {
            // line 24
            yield "    <div class=\"social-icon\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["whatsapp_url"] ?? null), 24, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"social-icon icon-whatsapp\" aria-hidden=\"true\"></i></a></div>
  ";
        }
        // line 26
        yield "  ";
        if ((($context["github_url"] ?? null) != "")) {
            // line 27
            yield "    <div class=\"social-icon\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["github_url"] ?? null), 27, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"social-icon icon-github\" aria-hidden=\"true\"></i></a></div>
  ";
        }
        // line 29
        yield "  ";
        if ((($context["telegram_url"] ?? null) != "")) {
            // line 30
            yield "    <div class=\"social-icon\"><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["telegram_url"] ?? null), 30, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"social-icon icon-telegram\" aria-hidden=\"true\"></i></a></div>
  ";
        }
        // line 32
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["facebook_url", "twitter_url", "instagram_url", "linkedin_url", "youtube_url", "vimeo_url", "vk_url", "whatsapp_url", "github_url", "telegram_url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@mahi/parts/social.html.twig";
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
        return array (  136 => 32,  130 => 30,  127 => 29,  121 => 27,  118 => 26,  112 => 24,  109 => 23,  103 => 21,  100 => 20,  94 => 18,  91 => 17,  85 => 15,  82 => 14,  76 => 12,  73 => 11,  67 => 9,  64 => 8,  58 => 6,  55 => 5,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@mahi/parts/social.html.twig", "C:\\xampp\\htdocs\\drupal11\\core\\themes\\mahi\\templates\\parts\\social.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
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
