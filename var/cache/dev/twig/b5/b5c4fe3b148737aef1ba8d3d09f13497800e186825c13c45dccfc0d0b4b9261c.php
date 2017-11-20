<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3861920366b875bba5a913e3e19233f5e9a49c56ee3e917737ed306624b2d2b5 extends Twig_Template
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
        $__internal_dbfe1937dec03385d56f777f9480278b1bd3601009a97d5321b5fe2fd510b4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbfe1937dec03385d56f777f9480278b1bd3601009a97d5321b5fe2fd510b4c4->enter($__internal_dbfe1937dec03385d56f777f9480278b1bd3601009a97d5321b5fe2fd510b4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_7f19dd70e85569623142a9d9695948096084e57163e5430f583d8fea4da6b426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f19dd70e85569623142a9d9695948096084e57163e5430f583d8fea4da6b426->enter($__internal_7f19dd70e85569623142a9d9695948096084e57163e5430f583d8fea4da6b426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_dbfe1937dec03385d56f777f9480278b1bd3601009a97d5321b5fe2fd510b4c4->leave($__internal_dbfe1937dec03385d56f777f9480278b1bd3601009a97d5321b5fe2fd510b4c4_prof);

        
        $__internal_7f19dd70e85569623142a9d9695948096084e57163e5430f583d8fea4da6b426->leave($__internal_7f19dd70e85569623142a9d9695948096084e57163e5430f583d8fea4da6b426_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
