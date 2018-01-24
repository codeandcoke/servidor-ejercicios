from django.db import models
from datetime import date


class Director(models.Model):
    nombre_apellidos = models.CharField(max_length=200)
    nacionalidad = models.CharField(max_length=200, blank=True)

    def __str__(self):
        return self.nombre_apellidos


class Pelicula(models.Model):
    titulo = models.CharField(max_length=200)
    genero = models.CharField(max_length=200)
    fecha = models.DateField(default=date.today)
    descargada = models.BooleanField(default=False)
    imagen = models.ImageField(upload_to='img')
    director = models.ForeignKey(Director, on_delete=models.CASCADE)

    def __str__(self):
        return self.titulo


class Serie(models.Model):
    titulo = models.CharField(max_length=200)
    genero = models.CharField(max_length=200)
    fecha = models.DateField
    temporadas = models.IntegerField(default=1)
    completada = models.BooleanField(default=False)
    descargada = models.BooleanField(default=False)

    def __str__(self):
        return self.titulo


class Capitulo(models.Model):
    numero = models.IntegerField(default=0)
    temporada = models.IntegerField(default=0)
    serie = models.ForeignKey(Serie, on_delete=models.CASCADE)
    fecha_emision = models.DateField

    def __str__(self):
        return self.serie.titulo + " " + self.temporada + "x" + self.numero
