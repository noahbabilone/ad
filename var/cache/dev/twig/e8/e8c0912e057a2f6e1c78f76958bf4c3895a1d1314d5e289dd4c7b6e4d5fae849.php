<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c46e645c443ad7ababfab15791a6e281da2c5941c83661e2ccf1bc42fbed0c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31c915d9b2b8d52a06252590ae7a980f5e4c59d3441080aba6fe3ef19955c362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c915d9b2b8d52a06252590ae7a980f5e4c59d3441080aba6fe3ef19955c362->enter($__internal_31c915d9b2b8d52a06252590ae7a980f5e4c59d3441080aba6fe3ef19955c362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_769cef2fc9348c65c89340c6ebc530d9cb32d5474fe2bfc403c6622d6169352b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769cef2fc9348c65c89340c6ebc530d9cb32d5474fe2bfc403c6622d6169352b->enter($__internal_769cef2fc9348c65c89340c6ebc530d9cb32d5474fe2bfc403c6622d6169352b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c915d9b2b8d52a06252590ae7a980f5e4c59d3441080aba6fe3ef19955c362->leave($__internal_31c915d9b2b8d52a06252590ae7a980f5e4c59d3441080aba6fe3ef19955c362_prof);

        
        $__internal_769cef2fc9348c65c89340c6ebc530d9cb32d5474fe2bfc403c6622d6169352b->leave($__internal_769cef2fc9348c65c89340c6ebc530d9cb32d5474fe2bfc403c6622d6169352b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea70368e27230090ff9c5469bc1e769cc70ebafc19baad38c687956642257a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea70368e27230090ff9c5469bc1e769cc70ebafc19baad38c687956642257a9b->enter($__internal_ea70368e27230090ff9c5469bc1e769cc70ebafc19baad38c687956642257a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d2976bf773c5871621c1e561aa5a060f1ebf79c2e3054b9b32471ebae9399e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2976bf773c5871621c1e561aa5a060f1ebf79c2e3054b9b32471ebae9399e43->enter($__internal_d2976bf773c5871621c1e561aa5a060f1ebf79c2e3054b9b32471ebae9399e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d2976bf773c5871621c1e561aa5a060f1ebf79c2e3054b9b32471ebae9399e43->leave($__internal_d2976bf773c5871621c1e561aa5a060f1ebf79c2e3054b9b32471ebae9399e43_prof);

        
        $__internal_ea70368e27230090ff9c5469bc1e769cc70ebafc19baad38c687956642257a9b->leave($__internal_ea70368e27230090ff9c5469bc1e769cc70ebafc19baad38c687956642257a9b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6f3ea8a4b08278a94ee56a9a237690a6c2a388d9cc6338d3d025f17140e7db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f3ea8a4b08278a94ee56a9a237690a6c2a388d9cc6338d3d025f17140e7db9->enter($__internal_e6f3ea8a4b08278a94ee56a9a237690a6c2a388d9cc6338d3d025f17140e7db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4197f33134e867c5575343c96252aa3cbead72628dbfec4327198465d1d9fed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4197f33134e867c5575343c96252aa3cbead72628dbfec4327198465d1d9fed7->enter($__internal_4197f33134e867c5575343c96252aa3cbead72628dbfec4327198465d1d9fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4197f33134e867c5575343c96252aa3cbead72628dbfec4327198465d1d9fed7->leave($__internal_4197f33134e867c5575343c96252aa3cbead72628dbfec4327198465d1d9fed7_prof);

        
        $__internal_e6f3ea8a4b08278a94ee56a9a237690a6c2a388d9cc6338d3d025f17140e7db9->leave($__internal_e6f3ea8a4b08278a94ee56a9a237690a6c2a388d9cc6338d3d025f17140e7db9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7845d61f2b9f2c747255363d4955b9d6ff951f343c7b69cfbda0359f5cbdd78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7845d61f2b9f2c747255363d4955b9d6ff951f343c7b69cfbda0359f5cbdd78a->enter($__internal_7845d61f2b9f2c747255363d4955b9d6ff951f343c7b69cfbda0359f5cbdd78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_84abaca7ee0a2f2569bcd7baabadbf6cd972705a03b3c03d684e957e7d304142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84abaca7ee0a2f2569bcd7baabadbf6cd972705a03b3c03d684e957e7d304142->enter($__internal_84abaca7ee0a2f2569bcd7baabadbf6cd972705a03b3c03d684e957e7d304142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_84abaca7ee0a2f2569bcd7baabadbf6cd972705a03b3c03d684e957e7d304142->leave($__internal_84abaca7ee0a2f2569bcd7baabadbf6cd972705a03b3c03d684e957e7d304142_prof);

        
        $__internal_7845d61f2b9f2c747255363d4955b9d6ff951f343c7b69cfbda0359f5cbdd78a->leave($__internal_7845d61f2b9f2c747255363d4955b9d6ff951f343c7b69cfbda0359f5cbdd78a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
