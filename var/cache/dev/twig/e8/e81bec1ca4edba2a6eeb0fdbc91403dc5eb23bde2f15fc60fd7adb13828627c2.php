<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e42db9d73d88cef359ffe8a78fe765ce9896c9f72da0814cda82e863170fa3eb extends Twig_Template
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
        $__internal_aa243f9de6eeba6c0270a593fee3bfead41e7d6c0451241b083fced261b5e727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa243f9de6eeba6c0270a593fee3bfead41e7d6c0451241b083fced261b5e727->enter($__internal_aa243f9de6eeba6c0270a593fee3bfead41e7d6c0451241b083fced261b5e727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f065bd07596d9e3e954f2063643f066cbe818880d26dc8e19e8daf5330a87d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f065bd07596d9e3e954f2063643f066cbe818880d26dc8e19e8daf5330a87d50->enter($__internal_f065bd07596d9e3e954f2063643f066cbe818880d26dc8e19e8daf5330a87d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_aa243f9de6eeba6c0270a593fee3bfead41e7d6c0451241b083fced261b5e727->leave($__internal_aa243f9de6eeba6c0270a593fee3bfead41e7d6c0451241b083fced261b5e727_prof);

        
        $__internal_f065bd07596d9e3e954f2063643f066cbe818880d26dc8e19e8daf5330a87d50->leave($__internal_f065bd07596d9e3e954f2063643f066cbe818880d26dc8e19e8daf5330a87d50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
