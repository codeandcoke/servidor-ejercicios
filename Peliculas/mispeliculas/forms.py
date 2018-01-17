from .models import Pelicula
from django import forms


class PeliculaForm(forms.ModelForm):
    class Meta:
        fields = ('titulo', 'director', 'genero', 'imagen')
        model = Pelicula
