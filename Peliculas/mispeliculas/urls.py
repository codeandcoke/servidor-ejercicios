from django.conf.urls import url

from . import views

urlpatterns = [
    url(r'^$', views.index, name='index'),
    url(r'^peliculas/', views.peliculas, name='peliculas'),
    url(r'^pelicula/(?P<pelicula_id>[0-9]+)/$', views.get_pelicula, name='pelicula')
]