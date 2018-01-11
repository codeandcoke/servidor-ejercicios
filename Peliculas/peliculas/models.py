from django.db import models


class Pelicula(models.Model):
    titulo = models.CharField(max_length=200)
    genero = models.CharField(max_length=200)
    director = models.CharField(max_length=200)
    fecha = models.DateField
    descargada = models.BooleanField(default=False)

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
