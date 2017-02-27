<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_92f62d2846d202a26fb29024b582cd18584bc0b31caa89bf64db66d776a71f16 extends Twig_Template
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
        $__internal_194c39d9e38353cb8d6de9075a6335f4d4d7ee0f1394f7dbab9de6c1176563ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194c39d9e38353cb8d6de9075a6335f4d4d7ee0f1394f7dbab9de6c1176563ba->enter($__internal_194c39d9e38353cb8d6de9075a6335f4d4d7ee0f1394f7dbab9de6c1176563ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_710191774a5fbf9f23a59a4f9db602feadb28d7ff2cbba1a7c8039764f8a8946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710191774a5fbf9f23a59a4f9db602feadb28d7ff2cbba1a7c8039764f8a8946->enter($__internal_710191774a5fbf9f23a59a4f9db602feadb28d7ff2cbba1a7c8039764f8a8946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_194c39d9e38353cb8d6de9075a6335f4d4d7ee0f1394f7dbab9de6c1176563ba->leave($__internal_194c39d9e38353cb8d6de9075a6335f4d4d7ee0f1394f7dbab9de6c1176563ba_prof);

        
        $__internal_710191774a5fbf9f23a59a4f9db602feadb28d7ff2cbba1a7c8039764f8a8946->leave($__internal_710191774a5fbf9f23a59a4f9db602feadb28d7ff2cbba1a7c8039764f8a8946_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
