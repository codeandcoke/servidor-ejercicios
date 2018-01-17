from django.shortcuts import render, reverse
from django.http import Http404, HttpResponse, HttpResponseRedirect
import json

from .models import Pelicula
from .forms import PeliculaForm


def index(request):
    return render(request, 'peliculas/index.html')


def peliculas(request):
    lista_peliculas = Pelicula.objects.all()
    contexto = {'lista_peliculas': lista_peliculas}
    return render(request, 'peliculas/peliculas.html', contexto)


def get_pelicula(request, pelicula_id):
    try:
        pelicula = Pelicula.objects.get(pk=pelicula_id)
    except Pelicula.DoesNotExist:
        raise Http404("No existe la pelicula " + pelicula_id)

    contexto = {'pelicula': pelicula}
    return render(request, 'peliculas/pelicula.html', contexto)


def eliminar_pelicula(request, pelicula_id):

    pelicula = Pelicula.objects.get(pk=pelicula_id)
    pelicula.delete()
    return HttpResponse(json.dumps({}), content_type='application/json')


def nueva_pelicula(request):
    return render(request, 'peliculas/nueva_pelicula.html')


def anadir_pelicula(request):
    if request.method == 'POST':
        form = PeliculaForm(request.POST, request.FILES)
        if form.is_valid():
            pelicula = Pelicula()
            pelicula.titulo = form.cleaned_data['titulo']
            pelicula.director = form.cleaned_data['director']
            pelicula.genero = form.cleaned_data['genero']
            pelicula.imagen = form.cleaned_data['imagen']
            pelicula.save()
        else:
            return render(request, 'peliculas/nueva_pelicula.html', {'form': form})

        return HttpResponseRedirect(reverse('nueva_pelicula'))
