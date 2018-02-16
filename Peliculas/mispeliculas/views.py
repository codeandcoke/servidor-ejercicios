from django.shortcuts import render, redirect
from django.http import Http404, HttpResponse
from django.contrib import messages
import json

from .models import Pelicula, Director
from .forms import PeliculaForm, DirectorForm
from Peliculas.settings import PELICULAS_POR_PAGINA


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
    form = PeliculaForm()
    context = {'form': form}
    return render(request, 'peliculas/nueva_pelicula.html', context)


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
            print(form.errors)
            return render(request, 'peliculas/nueva_pelicula.html', {'form': form})

        messages.success(request, 'Pelicula registrada correctamente')
        return redirect('nueva_pelicula')


def nuevo_director(request, director_id=None):
    if director_id:
        director = Director.objects.get(pk=director_id)
        form = DirectorForm(instance=director)
    else:
        form = DirectorForm()

    context = {'form': form, 'director_id': director_id}
    return render(request, 'peliculas/nuevo_director.html', context)


def anadir_director(request):
    if request.method == 'POST':
        form = DirectorForm(request.POST, request.FILES)
        if not form.is_valid():
            return render(request, 'peliculas/nuevo_director.html', {'form': form})

        form.save()
        messages.success(request, 'Director registrado correctamente')
        return redirect('nuevo_director')


def modificar_director(request):
    if request.method == 'POST':
        director_id = request.POST['director_id']
        director = Director.objects.get(pk=director_id)
        form = DirectorForm(request.POST, request.FILES, instance=director)
        if not form.is_valid():
            return render(request, 'peliculas/nuevo_director.html', {'form': form})

        form.save()
        return redirect('directores')


def directores(request):
    lista_directores = Director.objects.all()
    contexto = {'lista_directores': lista_directores}
    return render(request, 'peliculas/directores.html', contexto)


def eliminar_director(request, director_id):
    director = Director.objects.get(pk=director_id)
    director.delete()
    return HttpResponse(json.dumps({}), content_type='application/json')
