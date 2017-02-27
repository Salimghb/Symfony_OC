<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_548bcaa49779f00f944e90208efd9609ffbc26896996f67ee7c056a88554c014 extends Twig_Template
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
        $__internal_90cdba81b28b4566ccfe80b6b8f1a3b0b8c98ee87a1f62a43c2121a96b930307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cdba81b28b4566ccfe80b6b8f1a3b0b8c98ee87a1f62a43c2121a96b930307->enter($__internal_90cdba81b28b4566ccfe80b6b8f1a3b0b8c98ee87a1f62a43c2121a96b930307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0b751bb50f8aca191601cdc5650def9e050becaf94049310628486c4ad88c75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b751bb50f8aca191601cdc5650def9e050becaf94049310628486c4ad88c75f->enter($__internal_0b751bb50f8aca191601cdc5650def9e050becaf94049310628486c4ad88c75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_90cdba81b28b4566ccfe80b6b8f1a3b0b8c98ee87a1f62a43c2121a96b930307->leave($__internal_90cdba81b28b4566ccfe80b6b8f1a3b0b8c98ee87a1f62a43c2121a96b930307_prof);

        
        $__internal_0b751bb50f8aca191601cdc5650def9e050becaf94049310628486c4ad88c75f->leave($__internal_0b751bb50f8aca191601cdc5650def9e050becaf94049310628486c4ad88c75f_prof);

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
