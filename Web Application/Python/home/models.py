from django.db import models

# Create your models here.

from django.contrib.auth.models import User


class PostModel(models.Model):
    user = models.ForeignKey(User)
    description = models.TextField()
    time = models.DateTimeField(auto_now=True)

    def __str__(self):
        return f'{self.user} - {self.time}' 