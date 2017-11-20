<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a9ef3c5a7f32c51edf32d3ad01c83c92e02db7c0cd16565a4d7706c0b3017381 extends Twig_Template
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
        $__internal_b3fba1bb755e414e6fbfb242cdbefcf5137129347b3e2b5d00bf81c9df4e7eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fba1bb755e414e6fbfb242cdbefcf5137129347b3e2b5d00bf81c9df4e7eb4->enter($__internal_b3fba1bb755e414e6fbfb242cdbefcf5137129347b3e2b5d00bf81c9df4e7eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_73a2879793e383aa16133b31ef82957af712fbb11eaab8ec4d02df68252cb883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a2879793e383aa16133b31ef82957af712fbb11eaab8ec4d02df68252cb883->enter($__internal_73a2879793e383aa16133b31ef82957af712fbb11eaab8ec4d02df68252cb883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b3fba1bb755e414e6fbfb242cdbefcf5137129347b3e2b5d00bf81c9df4e7eb4->leave($__internal_b3fba1bb755e414e6fbfb242cdbefcf5137129347b3e2b5d00bf81c9df4e7eb4_prof);

        
        $__internal_73a2879793e383aa16133b31ef82957af712fbb11eaab8ec4d02df68252cb883->leave($__internal_73a2879793e383aa16133b31ef82957af712fbb11eaab8ec4d02df68252cb883_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
