<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d647941c87d5140c9e27b31af9751690bf711bd12a9362a8e92ed6192231dbb1 extends Twig_Template
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
        $__internal_80741a01b829dc5d4675e2b4c2f016f05af4c7ce1405d99356a643aba9fbd1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80741a01b829dc5d4675e2b4c2f016f05af4c7ce1405d99356a643aba9fbd1cd->enter($__internal_80741a01b829dc5d4675e2b4c2f016f05af4c7ce1405d99356a643aba9fbd1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_c0a92efb6657916dcec38880636e645aca4717a4b74c81d6c18af25593fd4c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a92efb6657916dcec38880636e645aca4717a4b74c81d6c18af25593fd4c42->enter($__internal_c0a92efb6657916dcec38880636e645aca4717a4b74c81d6c18af25593fd4c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_80741a01b829dc5d4675e2b4c2f016f05af4c7ce1405d99356a643aba9fbd1cd->leave($__internal_80741a01b829dc5d4675e2b4c2f016f05af4c7ce1405d99356a643aba9fbd1cd_prof);

        
        $__internal_c0a92efb6657916dcec38880636e645aca4717a4b74c81d6c18af25593fd4c42->leave($__internal_c0a92efb6657916dcec38880636e645aca4717a4b74c81d6c18af25593fd4c42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
