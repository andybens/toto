<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b15dde27d33c166231a805fe7f43602fb8a2a69cc87afa182bc0e4c77249ff98 extends Twig_Template
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
        $__internal_c33aa7f304710ef72e69eb807c5c06c91ef4432cca8e9dc20f01151fd98947f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33aa7f304710ef72e69eb807c5c06c91ef4432cca8e9dc20f01151fd98947f4->enter($__internal_c33aa7f304710ef72e69eb807c5c06c91ef4432cca8e9dc20f01151fd98947f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c9cc9c3a223c19bd9857fc4b96a9c2e96f89611e09ce815f88c083fbdce8e108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9cc9c3a223c19bd9857fc4b96a9c2e96f89611e09ce815f88c083fbdce8e108->enter($__internal_c9cc9c3a223c19bd9857fc4b96a9c2e96f89611e09ce815f88c083fbdce8e108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c33aa7f304710ef72e69eb807c5c06c91ef4432cca8e9dc20f01151fd98947f4->leave($__internal_c33aa7f304710ef72e69eb807c5c06c91ef4432cca8e9dc20f01151fd98947f4_prof);

        
        $__internal_c9cc9c3a223c19bd9857fc4b96a9c2e96f89611e09ce815f88c083fbdce8e108->leave($__internal_c9cc9c3a223c19bd9857fc4b96a9c2e96f89611e09ce815f88c083fbdce8e108_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
