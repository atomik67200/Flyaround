<?php

/* flight/show.html.twig */
class __TwigTemplate_7607033062b11fca4dbdab1e3bea79e40826852933370dcec9e7cb969dc4fd7f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "flight/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbfreeseats</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 14, $this->source); })()), "nbFreeSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Seatprice</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 18, $this->source); })()), "seatPrice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Takeofftime</th>
                <td>";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 22, $this->source); })()), "takeOffTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 22, $this->source); })()), "takeOffTime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 26, $this->source); })()), "publicationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 26, $this->source); })()), "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 30, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Wasdone</th>
                <td>";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 34, $this->source); })()), "wasDone", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Distance</th>
                <td>";
        // line 38
        if ((isset($context["distance"]) || array_key_exists("distance", $context) ? $context["distance"] : (function () { throw new Twig_Error_Runtime('Variable "distance" does not exist.', 38, $this->source); })())) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["distance"]) || array_key_exists("distance", $context) ? $context["distance"] : (function () { throw new Twig_Error_Runtime('Variable "distance" does not exist.', 38, $this->source); })()), 2, ",", " "), "html", null, true);
        }
        echo twig_escape_filter($this->env, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new Twig_Error_Runtime('Variable "unit" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>";
        // line 42
        if ((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new Twig_Error_Runtime('Variable "time" does not exist.', 42, $this->source); })())) {
            echo twig_escape_filter($this->env, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new Twig_Error_Runtime('Variable "time" does not exist.', 42, $this->source); })()), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("flight_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 52, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 55, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "flight/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  152 => 55,  146 => 52,  140 => 49,  128 => 42,  118 => 38,  107 => 34,  100 => 30,  91 => 26,  82 => 22,  75 => 18,  68 => 14,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ flight.id }}</td>
            </tr>
            <tr>
                <th>Nbfreeseats</th>
                <td>{{ flight.nbFreeSeats }}</td>
            </tr>
            <tr>
                <th>Seatprice</th>
                <td>{{ flight.seatPrice }}</td>
            </tr>
            <tr>
                <th>Takeofftime</th>
                <td>{% if flight.takeOffTime %}{{ flight.takeOffTime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>{% if flight.publicationDate %}{{ flight.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ flight.description }}</td>
            </tr>
            <tr>
                <th>Wasdone</th>
                <td>{% if flight.wasDone %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Distance</th>
                <td>{% if distance %}{{ distance|number_format(2, ',', ' ') }}{% endif %}{{ unit }}</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>{% if time %}{{ time }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('flight_edit', { 'id': flight.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "flight/show.html.twig", "/home/wilder/flyaround/Qu-te-nouveau-projet/app/Resources/views/flight/show.html.twig");
    }
}
