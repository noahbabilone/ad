<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_918167c0365035924bc97ec19e632abad8dfb706ad09eb725033dbe4d793efa6 extends Twig_Template
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
        $__internal_fdf5756bbddb20af4a1657b557e2d1d58090f7c05f894db8456d26322582b5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf5756bbddb20af4a1657b557e2d1d58090f7c05f894db8456d26322582b5d5->enter($__internal_fdf5756bbddb20af4a1657b557e2d1d58090f7c05f894db8456d26322582b5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8247ffcc5b338427b66cc9c1f67314678fcbc0e7fb14163b4f7ceb5f569770f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8247ffcc5b338427b66cc9c1f67314678fcbc0e7fb14163b4f7ceb5f569770f1->enter($__internal_8247ffcc5b338427b66cc9c1f67314678fcbc0e7fb14163b4f7ceb5f569770f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_fdf5756bbddb20af4a1657b557e2d1d58090f7c05f894db8456d26322582b5d5->leave($__internal_fdf5756bbddb20af4a1657b557e2d1d58090f7c05f894db8456d26322582b5d5_prof);

        
        $__internal_8247ffcc5b338427b66cc9c1f67314678fcbc0e7fb14163b4f7ceb5f569770f1->leave($__internal_8247ffcc5b338427b66cc9c1f67314678fcbc0e7fb14163b4f7ceb5f569770f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
