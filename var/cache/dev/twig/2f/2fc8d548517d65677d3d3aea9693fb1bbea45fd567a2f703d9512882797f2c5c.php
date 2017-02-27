<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8731a420aec54a97ee655fb2d2b7631a4ae901573530878e2dc0fada578b27e6 extends Twig_Template
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
        $__internal_e28da1222ee4cd18ec3e25ffe73fe868734c11b13625fe9ced8f17bda88c6978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28da1222ee4cd18ec3e25ffe73fe868734c11b13625fe9ced8f17bda88c6978->enter($__internal_e28da1222ee4cd18ec3e25ffe73fe868734c11b13625fe9ced8f17bda88c6978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_10459fddd868a5b1b8fac625b9516352e8456d015d325c74fa1b195d628b44ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10459fddd868a5b1b8fac625b9516352e8456d015d325c74fa1b195d628b44ee->enter($__internal_10459fddd868a5b1b8fac625b9516352e8456d015d325c74fa1b195d628b44ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e28da1222ee4cd18ec3e25ffe73fe868734c11b13625fe9ced8f17bda88c6978->leave($__internal_e28da1222ee4cd18ec3e25ffe73fe868734c11b13625fe9ced8f17bda88c6978_prof);

        
        $__internal_10459fddd868a5b1b8fac625b9516352e8456d015d325c74fa1b195d628b44ee->leave($__internal_10459fddd868a5b1b8fac625b9516352e8456d015d325c74fa1b195d628b44ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
