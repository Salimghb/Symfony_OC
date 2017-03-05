<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3159f0d967b285144a2b9f1ebbce44504ad0cf05866b700f2f437d5849d4bfef extends Twig_Template
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
        $__internal_46b0e86bf38cfe9dc65dc5acd16f6779755022b8f363a1881ee3fbd5a5de7be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b0e86bf38cfe9dc65dc5acd16f6779755022b8f363a1881ee3fbd5a5de7be7->enter($__internal_46b0e86bf38cfe9dc65dc5acd16f6779755022b8f363a1881ee3fbd5a5de7be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_345a98762d2ce09e84ac749deee1958e696e9b8423dfcc5bb3f770c57870c28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345a98762d2ce09e84ac749deee1958e696e9b8423dfcc5bb3f770c57870c28f->enter($__internal_345a98762d2ce09e84ac749deee1958e696e9b8423dfcc5bb3f770c57870c28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_46b0e86bf38cfe9dc65dc5acd16f6779755022b8f363a1881ee3fbd5a5de7be7->leave($__internal_46b0e86bf38cfe9dc65dc5acd16f6779755022b8f363a1881ee3fbd5a5de7be7_prof);

        
        $__internal_345a98762d2ce09e84ac749deee1958e696e9b8423dfcc5bb3f770c57870c28f->leave($__internal_345a98762d2ce09e84ac749deee1958e696e9b8423dfcc5bb3f770c57870c28f_prof);

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
