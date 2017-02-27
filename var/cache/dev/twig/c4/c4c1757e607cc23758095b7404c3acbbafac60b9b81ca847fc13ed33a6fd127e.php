<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2802bf873dfcf0b291c23335fc1509bada7d758941c7223e860f128766bc7f78 extends Twig_Template
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
        $__internal_2cdea7f904328cedfcd513e9182a60d6c4aba4393abca7fd9189b93bec9a776f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cdea7f904328cedfcd513e9182a60d6c4aba4393abca7fd9189b93bec9a776f->enter($__internal_2cdea7f904328cedfcd513e9182a60d6c4aba4393abca7fd9189b93bec9a776f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_824ec09cdbd1760598ce17cc286593ad820e7569e712f92a5bd3b029c5631f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824ec09cdbd1760598ce17cc286593ad820e7569e712f92a5bd3b029c5631f3b->enter($__internal_824ec09cdbd1760598ce17cc286593ad820e7569e712f92a5bd3b029c5631f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2cdea7f904328cedfcd513e9182a60d6c4aba4393abca7fd9189b93bec9a776f->leave($__internal_2cdea7f904328cedfcd513e9182a60d6c4aba4393abca7fd9189b93bec9a776f_prof);

        
        $__internal_824ec09cdbd1760598ce17cc286593ad820e7569e712f92a5bd3b029c5631f3b->leave($__internal_824ec09cdbd1760598ce17cc286593ad820e7569e712f92a5bd3b029c5631f3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
