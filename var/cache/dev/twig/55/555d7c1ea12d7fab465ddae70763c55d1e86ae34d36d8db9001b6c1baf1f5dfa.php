<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_143bee69180d753ab9570922aa5648472ab160122848f18d0af665119d478689 extends Twig_Template
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
        $__internal_6ef8b230823cf5f55c924726b84790bfa760874292669a5d05fa49199871761d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef8b230823cf5f55c924726b84790bfa760874292669a5d05fa49199871761d->enter($__internal_6ef8b230823cf5f55c924726b84790bfa760874292669a5d05fa49199871761d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_21f6bb6f8d21dd50648e2fb8751faf28f7b6604dcc968fa20509bcc975a8f13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f6bb6f8d21dd50648e2fb8751faf28f7b6604dcc968fa20509bcc975a8f13a->enter($__internal_21f6bb6f8d21dd50648e2fb8751faf28f7b6604dcc968fa20509bcc975a8f13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6ef8b230823cf5f55c924726b84790bfa760874292669a5d05fa49199871761d->leave($__internal_6ef8b230823cf5f55c924726b84790bfa760874292669a5d05fa49199871761d_prof);

        
        $__internal_21f6bb6f8d21dd50648e2fb8751faf28f7b6604dcc968fa20509bcc975a8f13a->leave($__internal_21f6bb6f8d21dd50648e2fb8751faf28f7b6604dcc968fa20509bcc975a8f13a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
