<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_08bea31d60de8ce497ed413feb96187bb7b05abeb88ba0735a1291056550dbca extends Twig_Template
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
        $__internal_07a6cc1e97b8cae1b6da3677a0bd32598528ec8c7987efd7daf91162cbd7f941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a6cc1e97b8cae1b6da3677a0bd32598528ec8c7987efd7daf91162cbd7f941->enter($__internal_07a6cc1e97b8cae1b6da3677a0bd32598528ec8c7987efd7daf91162cbd7f941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_bf4bfca4c6117435bf25e3e7293d9da154f65969c02d05c925fa01bd402e25d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4bfca4c6117435bf25e3e7293d9da154f65969c02d05c925fa01bd402e25d2->enter($__internal_bf4bfca4c6117435bf25e3e7293d9da154f65969c02d05c925fa01bd402e25d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_07a6cc1e97b8cae1b6da3677a0bd32598528ec8c7987efd7daf91162cbd7f941->leave($__internal_07a6cc1e97b8cae1b6da3677a0bd32598528ec8c7987efd7daf91162cbd7f941_prof);

        
        $__internal_bf4bfca4c6117435bf25e3e7293d9da154f65969c02d05c925fa01bd402e25d2->leave($__internal_bf4bfca4c6117435bf25e3e7293d9da154f65969c02d05c925fa01bd402e25d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
