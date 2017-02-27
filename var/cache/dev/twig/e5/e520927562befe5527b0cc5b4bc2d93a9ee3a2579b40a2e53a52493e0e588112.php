<?php

/* SalimPlateformeBundle:Advert:view.html.twig */
class __TwigTemplate_53d274ef40c8369d246992f6a35e0d1817a200d5122d632f78aed58825350162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "SalimPlateformeBundle:Advert:view.html.twig", 1);
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
        $__internal_086eb6ce5f0b210c1e0b2985e598fb8049fd98348dfe0930b485f34660f374d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086eb6ce5f0b210c1e0b2985e598fb8049fd98348dfe0930b485f34660f374d7->enter($__internal_086eb6ce5f0b210c1e0b2985e598fb8049fd98348dfe0930b485f34660f374d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:view.html.twig"));

        $__internal_0f0ba7169f88291d5adc78b17687b2c3535c277f589e5c15d6447738800b5fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0ba7169f88291d5adc78b17687b2c3535c277f589e5c15d6447738800b5fb8->enter($__internal_0f0ba7169f88291d5adc78b17687b2c3535c277f589e5c15d6447738800b5fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086eb6ce5f0b210c1e0b2985e598fb8049fd98348dfe0930b485f34660f374d7->leave($__internal_086eb6ce5f0b210c1e0b2985e598fb8049fd98348dfe0930b485f34660f374d7_prof);

        
        $__internal_0f0ba7169f88291d5adc78b17687b2c3535c277f589e5c15d6447738800b5fb8->leave($__internal_0f0ba7169f88291d5adc78b17687b2c3535c277f589e5c15d6447738800b5fb8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fd54028943942fd6ce5b21e1a63e571dae52683a2cd697fc2dfa1f41cd4b9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd54028943942fd6ce5b21e1a63e571dae52683a2cd697fc2dfa1f41cd4b9ca->enter($__internal_0fd54028943942fd6ce5b21e1a63e571dae52683a2cd697fc2dfa1f41cd4b9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03abf406bb5a7aaa50facb03b015a44d152fa5b207f48e8f6a0468df63d5b325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03abf406bb5a7aaa50facb03b015a44d152fa5b207f48e8f6a0468df63d5b325->enter($__internal_03abf406bb5a7aaa50facb03b015a44d152fa5b207f48e8f6a0468df63d5b325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_03abf406bb5a7aaa50facb03b015a44d152fa5b207f48e8f6a0468df63d5b325->leave($__internal_03abf406bb5a7aaa50facb03b015a44d152fa5b207f48e8f6a0468df63d5b325_prof);

        
        $__internal_0fd54028943942fd6ce5b21e1a63e571dae52683a2cd697fc2dfa1f41cd4b9ca->leave($__internal_0fd54028943942fd6ce5b21e1a63e571dae52683a2cd697fc2dfa1f41cd4b9ca_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_0afed89d1802da4a8a595e9ea7507c34aae0cf8f1ea4a7ed7edbb68473f3641b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afed89d1802da4a8a595e9ea7507c34aae0cf8f1ea4a7ed7edbb68473f3641b->enter($__internal_0afed89d1802da4a8a595e9ea7507c34aae0cf8f1ea4a7ed7edbb68473f3641b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_3e72ea0ef01b457cf8d8ebaa4f3f0dacbe84385f72aa4926397a6fe94e7b2890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e72ea0ef01b457cf8d8ebaa4f3f0dacbe84385f72aa4926397a6fe94e7b2890->enter($__internal_3e72ea0ef01b457cf8d8ebaa4f3f0dacbe84385f72aa4926397a6fe94e7b2890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 8
        echo "
\t";
        // line 10
        echo "\t";
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 11
            echo "\t\t<img src=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo " \" alt=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo " \">
\t";
        }
        // line 13
        echo "
\t";
        // line 15
        echo "\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
\t<i>Par ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo " </i>
\t<div class=\"well\">
\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
\t</div>

\t";
        // line 22
        echo "\t";
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 23
            echo "\t\t<p>
\t\t\tCatégories de l'annonce :
\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 26
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "
\t\t\t\t";
                // line 28
                echo "\t\t\t\t";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    // line 29
                    echo "\t\t\t\t\t, 
\t\t\t\t";
                }
                // line 31
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t</p>
\t";
        }
        // line 34
        echo "
\t";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 36
            echo "\t\t<div>
\t\t\tCompétences requises : 
\t\t\t<ul>
\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 40
                echo "\t\t\t\t\t<li> Niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo " en ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " </li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 45
        echo "
\t";
        // line 47
        echo "\t<p>
\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>

\t\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>

\t\t<a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_3e72ea0ef01b457cf8d8ebaa4f3f0dacbe84385f72aa4926397a6fe94e7b2890->leave($__internal_3e72ea0ef01b457cf8d8ebaa4f3f0dacbe84385f72aa4926397a6fe94e7b2890_prof);

        
        $__internal_0afed89d1802da4a8a595e9ea7507c34aae0cf8f1ea4a7ed7edbb68473f3641b->leave($__internal_0afed89d1802da4a8a595e9ea7507c34aae0cf8f1ea4a7ed7edbb68473f3641b_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 58,  205 => 53,  197 => 48,  194 => 47,  191 => 45,  186 => 42,  175 => 40,  171 => 39,  166 => 36,  164 => 35,  161 => 34,  157 => 32,  143 => 31,  139 => 29,  136 => 28,  131 => 26,  114 => 25,  110 => 23,  107 => 22,  101 => 18,  94 => 16,  89 => 15,  86 => 13,  78 => 11,  75 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SalimPlateformeBundle::layout.html.twig\" %}

{% block title %}
\tLecture d'une annonce - {{parent()}}
{% endblock %}

{% block salimplateforme_body %}

\t{# Image de l'annonce #}
\t{% if advert.image is not null %}
\t\t<img src=\" {{advert.image.url}} \" alt=\" {{advert.image.alt}} \">
\t{% endif %}

\t{# Spécifications de l'annonce #}
\t<h2>{{advert.title}}</h2>
\t<i>Par {{advert.author}}, le {{advert.date|date('d/m/Y')}} </i>
\t<div class=\"well\">
\t\t{{advert.content}}
\t</div>

\t{# Liste des catégories #}
\t{% if not advert.categories.empty %}
\t\t<p>
\t\t\tCatégories de l'annonce :
\t\t\t{% for category in advert.categories %}
\t\t\t\t{{ category.name }}
\t\t\t\t{# Si ce n'est pas le dernier élément on met une virgule #}
\t\t\t\t{% if not loop.last %}
\t\t\t\t\t, 
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</p>
\t{% endif %}

\t{% if listAdvertSkills|length > 0 %}
\t\t<div>
\t\t\tCompétences requises : 
\t\t\t<ul>
\t\t\t\t{% for advertSkill in listAdvertSkills %}
\t\t\t\t\t<li> Niveau {{advertSkill.level}} en {{advertSkill.skill.name}} </li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t{% endif %}

\t{# Boutons d'interactions #}
\t<p>
\t\t<a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>

\t\t<a href=\"{{ path('oc_platform_edit',{'id':advert.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>

\t\t<a href=\"{{ path('oc_platform_delete',{'id':advert.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

{% endblock %}", "SalimPlateformeBundle:Advert:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/view.html.twig");
    }
}
