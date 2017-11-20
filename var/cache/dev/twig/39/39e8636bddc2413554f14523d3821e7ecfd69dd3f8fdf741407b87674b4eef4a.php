<?php

/* ::base.html.twig */
class __TwigTemplate_c1456ddbdf9606a7165406174076cb7481571ad57e83cc6334b553bfc0489a6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b69d259fcd240972531d14ededa6f66c35339442f102b42dd97f379e385a600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b69d259fcd240972531d14ededa6f66c35339442f102b42dd97f379e385a600->enter($__internal_1b69d259fcd240972531d14ededa6f66c35339442f102b42dd97f379e385a600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_017e78496ab55b945c496c1a9f3f030b50a56bf152116089e9308be506411d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017e78496ab55b945c496c1a9f3f030b50a56bf152116089e9308be506411d5f->enter($__internal_017e78496ab55b945c496c1a9f3f030b50a56bf152116089e9308be506411d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width\">
    <!--<script src=\"https://code.jquery.com/jquery.min.js\"></script>-->

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('javascript', $context, $blocks);
        // line 38
        echo "
</body>
</html>
";
        
        $__internal_1b69d259fcd240972531d14ededa6f66c35339442f102b42dd97f379e385a600->leave($__internal_1b69d259fcd240972531d14ededa6f66c35339442f102b42dd97f379e385a600_prof);

        
        $__internal_017e78496ab55b945c496c1a9f3f030b50a56bf152116089e9308be506411d5f->leave($__internal_017e78496ab55b945c496c1a9f3f030b50a56bf152116089e9308be506411d5f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c68c12d6c1029703209dfbd39cd0ff8e9d053b6f5ed3e3ba078727eadc58321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c68c12d6c1029703209dfbd39cd0ff8e9d053b6f5ed3e3ba078727eadc58321->enter($__internal_3c68c12d6c1029703209dfbd39cd0ff8e9d053b6f5ed3e3ba078727eadc58321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2464b52c9e43618fefd8e709481dc797678c2223557b1a76169e8dece30aa297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2464b52c9e43618fefd8e709481dc797678c2223557b1a76169e8dece30aa297->enter($__internal_2464b52c9e43618fefd8e709481dc797678c2223557b1a76169e8dece30aa297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Base ";
        
        $__internal_2464b52c9e43618fefd8e709481dc797678c2223557b1a76169e8dece30aa297->leave($__internal_2464b52c9e43618fefd8e709481dc797678c2223557b1a76169e8dece30aa297_prof);

        
        $__internal_3c68c12d6c1029703209dfbd39cd0ff8e9d053b6f5ed3e3ba078727eadc58321->leave($__internal_3c68c12d6c1029703209dfbd39cd0ff8e9d053b6f5ed3e3ba078727eadc58321_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28d226ae88da11c71074445b8152407ea327cd8872c864d66c1a8113b7d3c934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d226ae88da11c71074445b8152407ea327cd8872c864d66c1a8113b7d3c934->enter($__internal_28d226ae88da11c71074445b8152407ea327cd8872c864d66c1a8113b7d3c934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_40dd19e8da3f2645f298741669e48579166e11737f45010af7ef48e12db099af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dd19e8da3f2645f298741669e48579166e11737f45010af7ef48e12db099af->enter($__internal_40dd19e8da3f2645f298741669e48579166e11737f45010af7ef48e12db099af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
    ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "086eecb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_086eecb_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/086eecb_font-awesome.min_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "086eecb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_086eecb_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/086eecb_main_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "086eecb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_086eecb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/086eecb.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "
    ";
        
        $__internal_40dd19e8da3f2645f298741669e48579166e11737f45010af7ef48e12db099af->leave($__internal_40dd19e8da3f2645f298741669e48579166e11737f45010af7ef48e12db099af_prof);

        
        $__internal_28d226ae88da11c71074445b8152407ea327cd8872c864d66c1a8113b7d3c934->leave($__internal_28d226ae88da11c71074445b8152407ea327cd8872c864d66c1a8113b7d3c934_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_37084bd802eb907a74fb9bf6e9ed286660fc44c3af680ea00792f0ab6ee6a248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37084bd802eb907a74fb9bf6e9ed286660fc44c3af680ea00792f0ab6ee6a248->enter($__internal_37084bd802eb907a74fb9bf6e9ed286660fc44c3af680ea00792f0ab6ee6a248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f22674c6d218bf6e24df8e4a557e8ac0595c9dd9d5f1c82d393de91e650b11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f22674c6d218bf6e24df8e4a557e8ac0595c9dd9d5f1c82d393de91e650b11f->enter($__internal_0f22674c6d218bf6e24df8e4a557e8ac0595c9dd9d5f1c82d393de91e650b11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " Base ";
        
        $__internal_0f22674c6d218bf6e24df8e4a557e8ac0595c9dd9d5f1c82d393de91e650b11f->leave($__internal_0f22674c6d218bf6e24df8e4a557e8ac0595c9dd9d5f1c82d393de91e650b11f_prof);

        
        $__internal_37084bd802eb907a74fb9bf6e9ed286660fc44c3af680ea00792f0ab6ee6a248->leave($__internal_37084bd802eb907a74fb9bf6e9ed286660fc44c3af680ea00792f0ab6ee6a248_prof);

    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f18db64a653d238b6175a8537da9fb208fd42a68cd90282ded3fcc21c48e4198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18db64a653d238b6175a8537da9fb208fd42a68cd90282ded3fcc21c48e4198->enter($__internal_f18db64a653d238b6175a8537da9fb208fd42a68cd90282ded3fcc21c48e4198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f23be99ade23c4d56ff7d9a76be5e8bbe1d8089db2bdf3e2bcc9dcb4c7beff8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23be99ade23c4d56ff7d9a76be5e8bbe1d8089db2bdf3e2bcc9dcb4c7beff8c->enter($__internal_f23be99ade23c4d56ff7d9a76be5e8bbe1d8089db2bdf3e2bcc9dcb4c7beff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 27
        echo "
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

";
        // line 32
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b3a044a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b3a044a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/b3a044a_main_1.js");
            // line 34
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "b3a044a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b3a044a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/b3a044a.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 36
        echo "
";
        
        $__internal_f23be99ade23c4d56ff7d9a76be5e8bbe1d8089db2bdf3e2bcc9dcb4c7beff8c->leave($__internal_f23be99ade23c4d56ff7d9a76be5e8bbe1d8089db2bdf3e2bcc9dcb4c7beff8c_prof);

        
        $__internal_f18db64a653d238b6175a8537da9fb208fd42a68cd90282ded3fcc21c48e4198->leave($__internal_f18db64a653d238b6175a8537da9fb208fd42a68cd90282ded3fcc21c48e4198_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 36,  178 => 34,  174 => 32,  167 => 27,  158 => 26,  140 => 24,  129 => 18,  109 => 16,  105 => 13,  102 => 12,  93 => 11,  75 => 9,  62 => 38,  60 => 26,  57 => 25,  55 => 24,  49 => 21,  46 => 20,  44 => 11,  39 => 9,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width\">
    <!--<script src=\"https://code.jquery.com/jquery.min.js\"></script>-->

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    <title>{% block title %} Base {% endblock %}</title>

    {% block stylesheets %}

    {% stylesheets
    '@DemoBundle/Resources/public/css/font-awesome.min.css'
    '@DemoBundle/Resources/public/css/main.css'filter='cssrewrite' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
    {% endstylesheets %}

    {% endblock %}

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %} Base {% endblock %}

{% block javascript %}

    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

{% javascripts
'@DemoBundle/Resources/public/js/main.js'%}
<script src=\"{{ asset_url }}\"></script>
{% endjavascripts %}

{% endblock %}

</body>
</html>
", "::base.html.twig", "/Users/oualid/toto/app/Resources/views/base.html.twig");
    }
}
