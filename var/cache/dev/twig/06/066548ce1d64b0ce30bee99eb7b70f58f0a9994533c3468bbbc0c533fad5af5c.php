<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_22d5a44fcb2daef5e3be10cc69e4fd9d3060b6833dc43bd50e6c647157d37e00 extends Twig_Template
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
        $__internal_1e05ff2b297f1bf5304733381d025fc00768f137b5e2833cd7536eb147ac0146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e05ff2b297f1bf5304733381d025fc00768f137b5e2833cd7536eb147ac0146->enter($__internal_1e05ff2b297f1bf5304733381d025fc00768f137b5e2833cd7536eb147ac0146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4ce4f000352f529ef7ca98383d0496ac6ceb9eb6c67ab0d5439bcca21712a323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce4f000352f529ef7ca98383d0496ac6ceb9eb6c67ab0d5439bcca21712a323->enter($__internal_4ce4f000352f529ef7ca98383d0496ac6ceb9eb6c67ab0d5439bcca21712a323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1e05ff2b297f1bf5304733381d025fc00768f137b5e2833cd7536eb147ac0146->leave($__internal_1e05ff2b297f1bf5304733381d025fc00768f137b5e2833cd7536eb147ac0146_prof);

        
        $__internal_4ce4f000352f529ef7ca98383d0496ac6ceb9eb6c67ab0d5439bcca21712a323->leave($__internal_4ce4f000352f529ef7ca98383d0496ac6ceb9eb6c67ab0d5439bcca21712a323_prof);

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
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
