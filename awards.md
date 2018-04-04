---
layout: page
id: awards
title: Awards and Honors
permalink: /resume/awards/
---

{% for medium in site.data.awards %}
## {{ medium.media }}

{% for project in medium.projects  %}
{% assign loopindex = forloop.index | modulo: 2 %}
<section class="{% if project.feature == true %}feature{% else %}nofeature{% endif %}">
    <h3>
        {% if project.url %}<a href="{{ project.url }}">{% endif %}{{ project.name }}{% if project.url %}</a>{% endif %}
        {% if project.publisher %} <span class="publisher">&mdash; {{ project.publisher }}</span>{% endif %}
    </h3>

    {% if project.description %}
    <p>{{ project.description }}</p>
    {% endif %}

    {% if project.role %}
    <p>My role: {{ project.role }}</p>
    {% endif %}

    {% if project.awards != null %}
    <ul>
        {% for award in project.awards %}
        <li>
            {% if award.url %}<a href="{{ award.url }}">{% endif %}
            {{ award.name }}
            {% if award.date %} <span class="date">({{ award.date }})</span>{% endif %}
            {% if award.url %}</a>{% endif %}
            {% if award.category %} &mdash; {{ award.category }}{% endif %}
            {% if award.description %} <span class="desc">({{ award.description }})</span>{% endif %}
        </li>
        {% endfor %}
    </ul>
    {% endif %}
</section>
{% endfor %}

{% endfor %}
