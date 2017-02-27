<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8a4d41bb74f452199bf28de936c450a734ad83d53d445b4d2685954a776bba10 extends Twig_Template
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
        $__internal_af783d3ea1a565d9679681190e4e24061511ff436844f42e52bd2274bc980f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af783d3ea1a565d9679681190e4e24061511ff436844f42e52bd2274bc980f1b->enter($__internal_af783d3ea1a565d9679681190e4e24061511ff436844f42e52bd2274bc980f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c5209c74176e3d145148714e2dbbdbb1fa8f8b06217e2a0c3f4c7cc20651ee9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5209c74176e3d145148714e2dbbdbb1fa8f8b06217e2a0c3f4c7cc20651ee9c->enter($__internal_c5209c74176e3d145148714e2dbbdbb1fa8f8b06217e2a0c3f4c7cc20651ee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_af783d3ea1a565d9679681190e4e24061511ff436844f42e52bd2274bc980f1b->leave($__internal_af783d3ea1a565d9679681190e4e24061511ff436844f42e52bd2274bc980f1b_prof);

        
        $__internal_c5209c74176e3d145148714e2dbbdbb1fa8f8b06217e2a0c3f4c7cc20651ee9c->leave($__internal_c5209c74176e3d145148714e2dbbdbb1fa8f8b06217e2a0c3f4c7cc20651ee9c_prof);

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
