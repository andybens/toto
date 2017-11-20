<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c31af4dfc8ae0eb8c666b74b9600fbddced1312abe3219c378c72923d14b2bda extends Twig_Template
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
        $__internal_53d2102bd6fa457dbf761c42ccc857aefc0fc2261f9e79cbc88389614545744c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d2102bd6fa457dbf761c42ccc857aefc0fc2261f9e79cbc88389614545744c->enter($__internal_53d2102bd6fa457dbf761c42ccc857aefc0fc2261f9e79cbc88389614545744c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a34b10345c2e98f0abb978358110970a3caf13e2398222253395b875a43b1e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34b10345c2e98f0abb978358110970a3caf13e2398222253395b875a43b1e14->enter($__internal_a34b10345c2e98f0abb978358110970a3caf13e2398222253395b875a43b1e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_53d2102bd6fa457dbf761c42ccc857aefc0fc2261f9e79cbc88389614545744c->leave($__internal_53d2102bd6fa457dbf761c42ccc857aefc0fc2261f9e79cbc88389614545744c_prof);

        
        $__internal_a34b10345c2e98f0abb978358110970a3caf13e2398222253395b875a43b1e14->leave($__internal_a34b10345c2e98f0abb978358110970a3caf13e2398222253395b875a43b1e14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
