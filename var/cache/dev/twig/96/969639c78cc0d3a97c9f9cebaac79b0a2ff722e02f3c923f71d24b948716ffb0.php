<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_81c1a5d396cec14460da97f1994277ab6492e5dca7b9ba87c8ce5a01022073b2 extends Twig_Template
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
        $__internal_1f783e8323e2918a003da68c5ad39e8162f66b13f0ca9fed36534cf01233193c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f783e8323e2918a003da68c5ad39e8162f66b13f0ca9fed36534cf01233193c->enter($__internal_1f783e8323e2918a003da68c5ad39e8162f66b13f0ca9fed36534cf01233193c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_28f7013dd744ef3c1b50a72e8db69f70fe31746690d071e57443eb372c3194f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f7013dd744ef3c1b50a72e8db69f70fe31746690d071e57443eb372c3194f7->enter($__internal_28f7013dd744ef3c1b50a72e8db69f70fe31746690d071e57443eb372c3194f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1f783e8323e2918a003da68c5ad39e8162f66b13f0ca9fed36534cf01233193c->leave($__internal_1f783e8323e2918a003da68c5ad39e8162f66b13f0ca9fed36534cf01233193c_prof);

        
        $__internal_28f7013dd744ef3c1b50a72e8db69f70fe31746690d071e57443eb372c3194f7->leave($__internal_28f7013dd744ef3c1b50a72e8db69f70fe31746690d071e57443eb372c3194f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
