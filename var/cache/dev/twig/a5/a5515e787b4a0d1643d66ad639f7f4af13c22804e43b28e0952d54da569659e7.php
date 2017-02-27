<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_af9d5bdf6c09edefd9bfb7319280c22aa25d12dc7917a84d01005859b6866263 extends Twig_Template
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
        $__internal_dd4b76736a0f24401732efbbb484f87fba7d9d5e3ca886544be5285bfbf807cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4b76736a0f24401732efbbb484f87fba7d9d5e3ca886544be5285bfbf807cd->enter($__internal_dd4b76736a0f24401732efbbb484f87fba7d9d5e3ca886544be5285bfbf807cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_facd99fdcd3d77661d427c705426bb2f1b947641bf735e33afc263037053c357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facd99fdcd3d77661d427c705426bb2f1b947641bf735e33afc263037053c357->enter($__internal_facd99fdcd3d77661d427c705426bb2f1b947641bf735e33afc263037053c357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_dd4b76736a0f24401732efbbb484f87fba7d9d5e3ca886544be5285bfbf807cd->leave($__internal_dd4b76736a0f24401732efbbb484f87fba7d9d5e3ca886544be5285bfbf807cd_prof);

        
        $__internal_facd99fdcd3d77661d427c705426bb2f1b947641bf735e33afc263037053c357->leave($__internal_facd99fdcd3d77661d427c705426bb2f1b947641bf735e33afc263037053c357_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
