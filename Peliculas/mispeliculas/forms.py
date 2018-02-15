from .models import Pelicula, Director
from django import forms


class PeliculaForm(forms.ModelForm):
    class Meta:
        fields = ('titulo', 'genero', 'imagen', 'director')
        model = Pelicula


class DirectorForm(forms.ModelForm):
    class Meta:
        fields = ('nombre_apellidos', 'nacionalidad')
        model = Director
