<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_cfcd385c22433fad8254c0b90aa0f172fa9c8bb4d6ac9a1c04b976d8f14e570d extends Twig_Template
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
        $__internal_963a7f30343f3ed8cd8e01cea0c087dcf58875d7024d8797b6877050deb664fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963a7f30343f3ed8cd8e01cea0c087dcf58875d7024d8797b6877050deb664fc->enter($__internal_963a7f30343f3ed8cd8e01cea0c087dcf58875d7024d8797b6877050deb664fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5c06a829b79eeac661cfeed1d4e95f4ecc6c864bda8e670eeb0325345fdebdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c06a829b79eeac661cfeed1d4e95f4ecc6c864bda8e670eeb0325345fdebdce->enter($__internal_5c06a829b79eeac661cfeed1d4e95f4ecc6c864bda8e670eeb0325345fdebdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_963a7f30343f3ed8cd8e01cea0c087dcf58875d7024d8797b6877050deb664fc->leave($__internal_963a7f30343f3ed8cd8e01cea0c087dcf58875d7024d8797b6877050deb664fc_prof);

        
        $__internal_5c06a829b79eeac661cfeed1d4e95f4ecc6c864bda8e670eeb0325345fdebdce->leave($__internal_5c06a829b79eeac661cfeed1d4e95f4ecc6c864bda8e670eeb0325345fdebdce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
