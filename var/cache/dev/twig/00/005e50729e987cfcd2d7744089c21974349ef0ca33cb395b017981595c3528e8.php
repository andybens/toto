<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9c87678692e14be3c3517a1af0f2d2e9afd418718a7cf94e0d5ba08a314470ec extends Twig_Template
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
        $__internal_9bb68874b2527345f33323413042d49fd74b469e69181634ce0bda7c319a2800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb68874b2527345f33323413042d49fd74b469e69181634ce0bda7c319a2800->enter($__internal_9bb68874b2527345f33323413042d49fd74b469e69181634ce0bda7c319a2800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d3b89abba6503650b9b172a326b16ee1bafc6bd025b28ecccc06e99fa6b6a48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b89abba6503650b9b172a326b16ee1bafc6bd025b28ecccc06e99fa6b6a48e->enter($__internal_d3b89abba6503650b9b172a326b16ee1bafc6bd025b28ecccc06e99fa6b6a48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9bb68874b2527345f33323413042d49fd74b469e69181634ce0bda7c319a2800->leave($__internal_9bb68874b2527345f33323413042d49fd74b469e69181634ce0bda7c319a2800_prof);

        
        $__internal_d3b89abba6503650b9b172a326b16ee1bafc6bd025b28ecccc06e99fa6b6a48e->leave($__internal_d3b89abba6503650b9b172a326b16ee1bafc6bd025b28ecccc06e99fa6b6a48e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
