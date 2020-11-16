from django.shortcuts import render

from home.models import PostModel

# Create your views here.

def index(request):
    posts = PostModel.objects.all()
    context = {
        'posts': posts
    }
    return render(request, 'index.html', context)

def login(request):
    return render(request, 'login.html', {})

def signup(request):
    return render(request, 'signup.html', {})
