<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9fb48ab85c6fa2ec16cc489adf99081fd879f3501ba7d70b54c2fa40d5384b93 extends Twig_Template
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
        $__internal_ede978fe3770a0e04818b536e8859c2f605552985f7b1b81c43a3a14fc375c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede978fe3770a0e04818b536e8859c2f605552985f7b1b81c43a3a14fc375c52->enter($__internal_ede978fe3770a0e04818b536e8859c2f605552985f7b1b81c43a3a14fc375c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d49ea074dceffc1d376d3bd893dc4a2214c3f542027d8ea2cc1efd77b4076fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49ea074dceffc1d376d3bd893dc4a2214c3f542027d8ea2cc1efd77b4076fc1->enter($__internal_d49ea074dceffc1d376d3bd893dc4a2214c3f542027d8ea2cc1efd77b4076fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ede978fe3770a0e04818b536e8859c2f605552985f7b1b81c43a3a14fc375c52->leave($__internal_ede978fe3770a0e04818b536e8859c2f605552985f7b1b81c43a3a14fc375c52_prof);

        
        $__internal_d49ea074dceffc1d376d3bd893dc4a2214c3f542027d8ea2cc1efd77b4076fc1->leave($__internal_d49ea074dceffc1d376d3bd893dc4a2214c3f542027d8ea2cc1efd77b4076fc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
