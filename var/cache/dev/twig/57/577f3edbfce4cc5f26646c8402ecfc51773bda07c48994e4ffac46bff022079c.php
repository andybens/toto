<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b6cba86f59b074c359328211e2d72989bee36114516636593aed43fba2ef5b34 extends Twig_Template
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
        $__internal_d32c56c19af3c9822cc5792101ee8fbd944ed00a6426b408fea437c3d321e43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32c56c19af3c9822cc5792101ee8fbd944ed00a6426b408fea437c3d321e43b->enter($__internal_d32c56c19af3c9822cc5792101ee8fbd944ed00a6426b408fea437c3d321e43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_59995121bdb06c4a4fc997a0bbc23c6212268a45d6441f31f88aad0996939764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59995121bdb06c4a4fc997a0bbc23c6212268a45d6441f31f88aad0996939764->enter($__internal_59995121bdb06c4a4fc997a0bbc23c6212268a45d6441f31f88aad0996939764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d32c56c19af3c9822cc5792101ee8fbd944ed00a6426b408fea437c3d321e43b->leave($__internal_d32c56c19af3c9822cc5792101ee8fbd944ed00a6426b408fea437c3d321e43b_prof);

        
        $__internal_59995121bdb06c4a4fc997a0bbc23c6212268a45d6441f31f88aad0996939764->leave($__internal_59995121bdb06c4a4fc997a0bbc23c6212268a45d6441f31f88aad0996939764_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
