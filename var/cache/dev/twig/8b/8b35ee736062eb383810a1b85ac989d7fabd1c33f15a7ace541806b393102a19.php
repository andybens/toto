<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_cfe84c1a7d95fadcb26ab48354b25eb39c31aa0edf509673dca718d3f8487612 extends Twig_Template
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
        $__internal_6e059667092567f591bdf85fb32a12eb8b8a3c618084a2fa77a5f82a9b091566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e059667092567f591bdf85fb32a12eb8b8a3c618084a2fa77a5f82a9b091566->enter($__internal_6e059667092567f591bdf85fb32a12eb8b8a3c618084a2fa77a5f82a9b091566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d38679478bbbc02d00fa79398aeb7a8172723b9d5bc6a8f65320c00076462cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38679478bbbc02d00fa79398aeb7a8172723b9d5bc6a8f65320c00076462cd7->enter($__internal_d38679478bbbc02d00fa79398aeb7a8172723b9d5bc6a8f65320c00076462cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6e059667092567f591bdf85fb32a12eb8b8a3c618084a2fa77a5f82a9b091566->leave($__internal_6e059667092567f591bdf85fb32a12eb8b8a3c618084a2fa77a5f82a9b091566_prof);

        
        $__internal_d38679478bbbc02d00fa79398aeb7a8172723b9d5bc6a8f65320c00076462cd7->leave($__internal_d38679478bbbc02d00fa79398aeb7a8172723b9d5bc6a8f65320c00076462cd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
