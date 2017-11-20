<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c8e930abaed710e85d23c832fae6e870fac6e1d85ad8caeb7d2ad5035da121b7 extends Twig_Template
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
        $__internal_31f33ff5f60412cc3d090662e27e26b1cb7861cef8d7b794177308247c2256e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f33ff5f60412cc3d090662e27e26b1cb7861cef8d7b794177308247c2256e7->enter($__internal_31f33ff5f60412cc3d090662e27e26b1cb7861cef8d7b794177308247c2256e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_187508185924b378b8da51c11130491ccd488345cb91531a7c6ec33661ce31ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187508185924b378b8da51c11130491ccd488345cb91531a7c6ec33661ce31ae->enter($__internal_187508185924b378b8da51c11130491ccd488345cb91531a7c6ec33661ce31ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_31f33ff5f60412cc3d090662e27e26b1cb7861cef8d7b794177308247c2256e7->leave($__internal_31f33ff5f60412cc3d090662e27e26b1cb7861cef8d7b794177308247c2256e7_prof);

        
        $__internal_187508185924b378b8da51c11130491ccd488345cb91531a7c6ec33661ce31ae->leave($__internal_187508185924b378b8da51c11130491ccd488345cb91531a7c6ec33661ce31ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
