<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ac40c24ec0e4b1e70b4f8240538bcb2bd53ed234403f114a5ddee021d9228867 extends Twig_Template
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
        $__internal_954e4a82280f230bfa31805bf68f0ce33b9dc419179bb374b8311b16ceef776b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954e4a82280f230bfa31805bf68f0ce33b9dc419179bb374b8311b16ceef776b->enter($__internal_954e4a82280f230bfa31805bf68f0ce33b9dc419179bb374b8311b16ceef776b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_fe354e1a29735e16b76b728116b4f951b51547b39afacd8f3a47336a22a3f778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe354e1a29735e16b76b728116b4f951b51547b39afacd8f3a47336a22a3f778->enter($__internal_fe354e1a29735e16b76b728116b4f951b51547b39afacd8f3a47336a22a3f778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_954e4a82280f230bfa31805bf68f0ce33b9dc419179bb374b8311b16ceef776b->leave($__internal_954e4a82280f230bfa31805bf68f0ce33b9dc419179bb374b8311b16ceef776b_prof);

        
        $__internal_fe354e1a29735e16b76b728116b4f951b51547b39afacd8f3a47336a22a3f778->leave($__internal_fe354e1a29735e16b76b728116b4f951b51547b39afacd8f3a47336a22a3f778_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
