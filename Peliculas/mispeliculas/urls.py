from django.conf.urls import url

from . import views

urlpatterns = [
    url(r'^$', views.index, name='index'),
    url(r'^peliculas/', views.peliculas, name='peliculas'),
    url(r'^pelicula/(?P<pelicula_id>[0-9]+)/$', views.get_pelicula, name='pelicula'),
    url(r'^eliminar_pelicula/(?P<pelicula_id>[0-9]+)/$', views.eliminar_pelicula, name="eliminar_pelicula"),
    url(r'^nueva_pelicula/', views.nueva_pelicula, name='nueva_pelicula'),
    url(r'^anadir_pelicula/', views.anadir_pelicula, name='anadir_pelicula'),
    url(r'^nuevo_director/', views.nuevo_director, name='nuevo_director'),
    url(r'^anadir_director/', views.anadir_director, name='anadir_director')
]