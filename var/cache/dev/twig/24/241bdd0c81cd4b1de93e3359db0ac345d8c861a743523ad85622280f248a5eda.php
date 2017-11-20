<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3b8ef984fb20e71dbcbaea994705d3d871e99de7f3e2953b9f460785fe5d7a53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ef477957e664638d228b1a2393e0e541d3591d8b1d7a1da2559c346e7e31c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef477957e664638d228b1a2393e0e541d3591d8b1d7a1da2559c346e7e31c1c->enter($__internal_1ef477957e664638d228b1a2393e0e541d3591d8b1d7a1da2559c346e7e31c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_8ce1e8545555eaf4a2b9c8cc4cc4632506d9ca0a2a33677ed85b84bd5ea31a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce1e8545555eaf4a2b9c8cc4cc4632506d9ca0a2a33677ed85b84bd5ea31a08->enter($__internal_8ce1e8545555eaf4a2b9c8cc4cc4632506d9ca0a2a33677ed85b84bd5ea31a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1ef477957e664638d228b1a2393e0e541d3591d8b1d7a1da2559c346e7e31c1c->leave($__internal_1ef477957e664638d228b1a2393e0e541d3591d8b1d7a1da2559c346e7e31c1c_prof);

        
        $__internal_8ce1e8545555eaf4a2b9c8cc4cc4632506d9ca0a2a33677ed85b84bd5ea31a08->leave($__internal_8ce1e8545555eaf4a2b9c8cc4cc4632506d9ca0a2a33677ed85b84bd5ea31a08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
