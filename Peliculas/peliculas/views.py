from django.shortcuts import render
from django.http import Http404
from .models import Pelicula


def index(request):
    lista_peliculas = Pelicula.objects.all()
    contexto = {'lista_peliculas': lista_peliculas}
    return render(request, 'peliculas/index.html', contexto)


def get_pelicula(request, pelicula_id):
    try:
        pelicula = Pelicula.objects.get(pk=pelicula_id)
    except Pelicula.DoesNotExist:
        raise Http404("No existe la pelicula " + pelicula_id)

    contexto = {'pelicula': pelicula}
    return render(request, 'peliculas/pelicula.html', contexto)




