<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4b4d369a58102cd72d9aa73e769a0248e7432eda4de1590ffcd83e8f2d8fc369 extends Twig_Template
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
        $__internal_39e54fce5af4f472b2c10e9f76f827094efef6ef8d3a99ca43d35a0343c071e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e54fce5af4f472b2c10e9f76f827094efef6ef8d3a99ca43d35a0343c071e0->enter($__internal_39e54fce5af4f472b2c10e9f76f827094efef6ef8d3a99ca43d35a0343c071e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_6c15b472baa3cd527471d610ece09ca97f3d27f47dd2d6f29ade455df6749d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c15b472baa3cd527471d610ece09ca97f3d27f47dd2d6f29ade455df6749d36->enter($__internal_6c15b472baa3cd527471d610ece09ca97f3d27f47dd2d6f29ade455df6749d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_39e54fce5af4f472b2c10e9f76f827094efef6ef8d3a99ca43d35a0343c071e0->leave($__internal_39e54fce5af4f472b2c10e9f76f827094efef6ef8d3a99ca43d35a0343c071e0_prof);

        
        $__internal_6c15b472baa3cd527471d610ece09ca97f3d27f47dd2d6f29ade455df6749d36->leave($__internal_6c15b472baa3cd527471d610ece09ca97f3d27f47dd2d6f29ade455df6749d36_prof);

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
", "@Framework/Form/button_widget.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
