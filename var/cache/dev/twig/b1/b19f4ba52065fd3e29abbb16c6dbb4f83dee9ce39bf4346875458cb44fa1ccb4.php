<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3deafbbecda48bfb35e478f198e2b1f61457fdf6edb04b702a7a199b720c6c9d extends Twig_Template
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
        $__internal_4001d34c49e31f2e760fbd5dec998f1325cd134e8f0d58ff574dbcd09b24fdf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4001d34c49e31f2e760fbd5dec998f1325cd134e8f0d58ff574dbcd09b24fdf3->enter($__internal_4001d34c49e31f2e760fbd5dec998f1325cd134e8f0d58ff574dbcd09b24fdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_38f2241aa25e9cddaf2d87dbea14f03e516726c29279c959c81a71434ad00562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f2241aa25e9cddaf2d87dbea14f03e516726c29279c959c81a71434ad00562->enter($__internal_38f2241aa25e9cddaf2d87dbea14f03e516726c29279c959c81a71434ad00562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_4001d34c49e31f2e760fbd5dec998f1325cd134e8f0d58ff574dbcd09b24fdf3->leave($__internal_4001d34c49e31f2e760fbd5dec998f1325cd134e8f0d58ff574dbcd09b24fdf3_prof);

        
        $__internal_38f2241aa25e9cddaf2d87dbea14f03e516726c29279c959c81a71434ad00562->leave($__internal_38f2241aa25e9cddaf2d87dbea14f03e516726c29279c959c81a71434ad00562_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
