<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_daa9458c34cead30dabc09c34ab228186431c9166e9a5401643bca584a95b842 extends Twig_Template
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
        $__internal_d66f20d2daf42bf29d4a8a18de917573ef7dc60fae55a79edae0019333960bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66f20d2daf42bf29d4a8a18de917573ef7dc60fae55a79edae0019333960bcd->enter($__internal_d66f20d2daf42bf29d4a8a18de917573ef7dc60fae55a79edae0019333960bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_073d7edfdd12cb7256650d944167bd5cdecbe6ff4a589cbffd3ac5bc25650dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073d7edfdd12cb7256650d944167bd5cdecbe6ff4a589cbffd3ac5bc25650dea->enter($__internal_073d7edfdd12cb7256650d944167bd5cdecbe6ff4a589cbffd3ac5bc25650dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d66f20d2daf42bf29d4a8a18de917573ef7dc60fae55a79edae0019333960bcd->leave($__internal_d66f20d2daf42bf29d4a8a18de917573ef7dc60fae55a79edae0019333960bcd_prof);

        
        $__internal_073d7edfdd12cb7256650d944167bd5cdecbe6ff4a589cbffd3ac5bc25650dea->leave($__internal_073d7edfdd12cb7256650d944167bd5cdecbe6ff4a589cbffd3ac5bc25650dea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
