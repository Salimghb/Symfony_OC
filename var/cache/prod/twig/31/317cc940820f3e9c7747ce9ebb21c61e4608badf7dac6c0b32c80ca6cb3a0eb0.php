<?php

/* SalimPlateformeBundle:Advert:add.html.twig */
class __TwigTemplate_9aacfedd846df980ef0a1fb55ef7e5a749d90df34ce7e2e4cdf7f378246632bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "SalimPlateformeBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'salimplateforme_body' => array($this, 'block_salimplateforme_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SalimPlateformeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t<h2>Ajouter une annonce</h2>

\t";
        // line 11
        echo twig_include($this->env, $context, "SalimPlateformeBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tAttention : cette annonce sera ajoutée directement sur la page d'accueil après validation du formulaire.
\t</p>

\t<p>
\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">

\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'accueil

\t\t</a>
\t</p>

";
    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SalimPlateformeBundle:Advert:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/add.html.twig");
    }
}
