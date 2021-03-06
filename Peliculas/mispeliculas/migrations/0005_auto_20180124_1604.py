# -*- coding: utf-8 -*-
# Generated by Django 1.11.8 on 2018-01-24 16:04
from __future__ import unicode_literals

import datetime
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('mispeliculas', '0004_pelicula_fecha'),
    ]

    operations = [
        migrations.CreateModel(
            name='Director',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nombre_apellidos', models.CharField(max_length=200)),
                ('nacionalidad', models.CharField(blank=True, max_length=200)),
            ],
        ),
        migrations.AlterField(
            model_name='pelicula',
            name='director',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='mispeliculas.Director'),
        ),
        migrations.AlterField(
            model_name='pelicula',
            name='fecha',
            field=models.DateField(default=datetime.date(2018, 1, 24)),
        ),
    ]
