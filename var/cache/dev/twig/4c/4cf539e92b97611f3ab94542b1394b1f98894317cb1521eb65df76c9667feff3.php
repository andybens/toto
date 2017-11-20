<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e4d41c99b9d10766b3b4784254a9a74a8f287d34c6ac18cce793bf3e59f1b090 extends Twig_Template
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
        $__internal_13fb66b317a5830c087b8a2787e87a8dbf86907ee058aa95af04b41675287139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13fb66b317a5830c087b8a2787e87a8dbf86907ee058aa95af04b41675287139->enter($__internal_13fb66b317a5830c087b8a2787e87a8dbf86907ee058aa95af04b41675287139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_45af8b8fab809b051eecd37333fed6e25efc09a489ba77bbb9728fa1dc8abea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45af8b8fab809b051eecd37333fed6e25efc09a489ba77bbb9728fa1dc8abea9->enter($__internal_45af8b8fab809b051eecd37333fed6e25efc09a489ba77bbb9728fa1dc8abea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_13fb66b317a5830c087b8a2787e87a8dbf86907ee058aa95af04b41675287139->leave($__internal_13fb66b317a5830c087b8a2787e87a8dbf86907ee058aa95af04b41675287139_prof);

        
        $__internal_45af8b8fab809b051eecd37333fed6e25efc09a489ba77bbb9728fa1dc8abea9->leave($__internal_45af8b8fab809b051eecd37333fed6e25efc09a489ba77bbb9728fa1dc8abea9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
