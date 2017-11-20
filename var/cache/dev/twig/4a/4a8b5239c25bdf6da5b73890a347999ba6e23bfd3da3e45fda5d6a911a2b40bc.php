<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a5c04fc2c10d80a244fc465581ba223a5176dc52698dc05a00391d10740bcfeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca6e633f5e1f11dc56c41b4a829843faeb64fe986c2b56b3313bdfe48619fa8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6e633f5e1f11dc56c41b4a829843faeb64fe986c2b56b3313bdfe48619fa8d->enter($__internal_ca6e633f5e1f11dc56c41b4a829843faeb64fe986c2b56b3313bdfe48619fa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_4bd77d5c2f2acd6be370fa00349a75c8f21d562281141dc9ec70ab1d0287093d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd77d5c2f2acd6be370fa00349a75c8f21d562281141dc9ec70ab1d0287093d->enter($__internal_4bd77d5c2f2acd6be370fa00349a75c8f21d562281141dc9ec70ab1d0287093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca6e633f5e1f11dc56c41b4a829843faeb64fe986c2b56b3313bdfe48619fa8d->leave($__internal_ca6e633f5e1f11dc56c41b4a829843faeb64fe986c2b56b3313bdfe48619fa8d_prof);

        
        $__internal_4bd77d5c2f2acd6be370fa00349a75c8f21d562281141dc9ec70ab1d0287093d->leave($__internal_4bd77d5c2f2acd6be370fa00349a75c8f21d562281141dc9ec70ab1d0287093d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf565265c8d3174ab32b6f2ddc72f3a93cd8a552fcfb7c1338b9e87e20b662ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf565265c8d3174ab32b6f2ddc72f3a93cd8a552fcfb7c1338b9e87e20b662ee->enter($__internal_bf565265c8d3174ab32b6f2ddc72f3a93cd8a552fcfb7c1338b9e87e20b662ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4cc2a0a8da7ce5853440f54fbf237e6d0b6daf3540c30366f49c036e1fdb9c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc2a0a8da7ce5853440f54fbf237e6d0b6daf3540c30366f49c036e1fdb9c5e->enter($__internal_4cc2a0a8da7ce5853440f54fbf237e6d0b6daf3540c30366f49c036e1fdb9c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4cc2a0a8da7ce5853440f54fbf237e6d0b6daf3540c30366f49c036e1fdb9c5e->leave($__internal_4cc2a0a8da7ce5853440f54fbf237e6d0b6daf3540c30366f49c036e1fdb9c5e_prof);

        
        $__internal_bf565265c8d3174ab32b6f2ddc72f3a93cd8a552fcfb7c1338b9e87e20b662ee->leave($__internal_bf565265c8d3174ab32b6f2ddc72f3a93cd8a552fcfb7c1338b9e87e20b662ee_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_075fd2d7299cf0520534b3ce061c602706cf1f64fbf269a77043b0e9bbb39905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075fd2d7299cf0520534b3ce061c602706cf1f64fbf269a77043b0e9bbb39905->enter($__internal_075fd2d7299cf0520534b3ce061c602706cf1f64fbf269a77043b0e9bbb39905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_075c618e5d567f6d137e90eaa76f7eaf0c06da031acf51063e159a4ba2fa9e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075c618e5d567f6d137e90eaa76f7eaf0c06da031acf51063e159a4ba2fa9e00->enter($__internal_075c618e5d567f6d137e90eaa76f7eaf0c06da031acf51063e159a4ba2fa9e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_075c618e5d567f6d137e90eaa76f7eaf0c06da031acf51063e159a4ba2fa9e00->leave($__internal_075c618e5d567f6d137e90eaa76f7eaf0c06da031acf51063e159a4ba2fa9e00_prof);

        
        $__internal_075fd2d7299cf0520534b3ce061c602706cf1f64fbf269a77043b0e9bbb39905->leave($__internal_075fd2d7299cf0520534b3ce061c602706cf1f64fbf269a77043b0e9bbb39905_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e92fd024c7997d9e872638aaa2bd23b299503a0d1faf71af147fc2c4f2ba7ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e92fd024c7997d9e872638aaa2bd23b299503a0d1faf71af147fc2c4f2ba7ce->enter($__internal_6e92fd024c7997d9e872638aaa2bd23b299503a0d1faf71af147fc2c4f2ba7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec61f53c1f57c2e4bf65c556ceda862245e5b1b631bfa4d4ea728ffe6bb8b0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec61f53c1f57c2e4bf65c556ceda862245e5b1b631bfa4d4ea728ffe6bb8b0ef->enter($__internal_ec61f53c1f57c2e4bf65c556ceda862245e5b1b631bfa4d4ea728ffe6bb8b0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ec61f53c1f57c2e4bf65c556ceda862245e5b1b631bfa4d4ea728ffe6bb8b0ef->leave($__internal_ec61f53c1f57c2e4bf65c556ceda862245e5b1b631bfa4d4ea728ffe6bb8b0ef_prof);

        
        $__internal_6e92fd024c7997d9e872638aaa2bd23b299503a0d1faf71af147fc2c4f2ba7ce->leave($__internal_6e92fd024c7997d9e872638aaa2bd23b299503a0d1faf71af147fc2c4f2ba7ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
