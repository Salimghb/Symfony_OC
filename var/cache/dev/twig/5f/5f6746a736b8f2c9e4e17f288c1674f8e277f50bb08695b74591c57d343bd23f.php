<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_84d8e4234ad8da65ead528aca2feb7c0ec16b867fc9e73a841cdd2f377dc8b9a extends Twig_Template
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
        $__internal_534ae9a466df97347eed73e84214c52c420dd49485326411b3bd991b428f8a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534ae9a466df97347eed73e84214c52c420dd49485326411b3bd991b428f8a56->enter($__internal_534ae9a466df97347eed73e84214c52c420dd49485326411b3bd991b428f8a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0b31dede5ee12aa6e8d97ce79d54efe08f3b66e2ac9daead6a2bf1204a0c2e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b31dede5ee12aa6e8d97ce79d54efe08f3b66e2ac9daead6a2bf1204a0c2e00->enter($__internal_0b31dede5ee12aa6e8d97ce79d54efe08f3b66e2ac9daead6a2bf1204a0c2e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_534ae9a466df97347eed73e84214c52c420dd49485326411b3bd991b428f8a56->leave($__internal_534ae9a466df97347eed73e84214c52c420dd49485326411b3bd991b428f8a56_prof);

        
        $__internal_0b31dede5ee12aa6e8d97ce79d54efe08f3b66e2ac9daead6a2bf1204a0c2e00->leave($__internal_0b31dede5ee12aa6e8d97ce79d54efe08f3b66e2ac9daead6a2bf1204a0c2e00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
