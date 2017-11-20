<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_109e6adf5e70c5bd5b47a85fe694284d5f541e8cc7edc3e062105df6f34637e4 extends Twig_Template
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
        $__internal_74d5b3c088cbe5fac72e992dda402115f168c37657d4f75b5ec8717f1888e435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d5b3c088cbe5fac72e992dda402115f168c37657d4f75b5ec8717f1888e435->enter($__internal_74d5b3c088cbe5fac72e992dda402115f168c37657d4f75b5ec8717f1888e435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_67e5b55548aa1589376e88753f9c185133ec1903ed8785fac045541074f492ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e5b55548aa1589376e88753f9c185133ec1903ed8785fac045541074f492ab->enter($__internal_67e5b55548aa1589376e88753f9c185133ec1903ed8785fac045541074f492ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_74d5b3c088cbe5fac72e992dda402115f168c37657d4f75b5ec8717f1888e435->leave($__internal_74d5b3c088cbe5fac72e992dda402115f168c37657d4f75b5ec8717f1888e435_prof);

        
        $__internal_67e5b55548aa1589376e88753f9c185133ec1903ed8785fac045541074f492ab->leave($__internal_67e5b55548aa1589376e88753f9c185133ec1903ed8785fac045541074f492ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
