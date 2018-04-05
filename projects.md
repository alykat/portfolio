---
layout: page
id: projects
title: "Notable Projects"
permalink: /projects/
---

{% for project in site.data.projects %}
{% assign loopindex = forloop.index | modulo: 2 %}
<section class="{% if project.feature == true %}feature{% else %}nofeature{% endif %} {% if project.img != "" %}img{% endif %}">
    {% if project.img and project.img != "" %}
    <img src="{{ "/assets/img/" | relative_url }}{{ project.img }}" alt="{{ project.name }}" />
    {% endif %}

    <h3>
        {% if project.url and project.url != "" %}<a href="{{ project.url }}">{% endif %}{{ project.name }}{% if project.url %}</a>{% endif %}
        {% if project.publisher and project.publisher != "" %} <span class="publisher">&mdash; {{ project.publisher }}</span>{% endif %}
    </h3>

    {% if project.pubdate and project.pubdate != "" %}
    <p>First published: {{ project.pubdate }}</p>
    {% endif %}

    {% if project.description and project.description != "" %}
    <p>What's interesting about this: {{ project.description }}</p>
    {% endif %}

    {% if project.role and project.role != "" %}
    <p>My role: {{ project.role }}</p>
    {% endif %}

    {% if project.awards %}
    <h4>Awards:</h4>
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
