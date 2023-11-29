<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# ApiDemo - Laravel API

Ce projet, nommé "ApiDemo", est une API Laravel développée à des fins d'apprentissage lors de mes cours en deuxième année de BTS SIO. L'objectif principal de cette API est de fournir un exemple simple de la création d'une API RESTful avec Laravel.

## Fonctionnalités

- **Endpoints :** L'API offre des endpoints pour interagir avec différentes ressources.
  
- **CRUD Operations :** Implémente les opérations CRUD (Create, Read, Update, Delete) pour démontrer le fonctionnement de base.

## Installation et Configuration

1. **Cloner le projet :**
   ```bash
   git clone https://github.com/nbena69/ApiDemo.git

2. **Installer les dépendances :**
   ```bash
   cd ApiDemo
   composer install

3. **Configurer la base de données :**
- Créez une copie du fichier .env.example et renommez-le en .env.
- Configurez les paramètres de la base de données dans le fichier .env.

4. **Effectuer les migrations et les seeds :**
   ```bash
   php artisan migrate --seed

5. **Lancer le serveur de développement :**
   ```bash
    php artisan serve

## Contributions

Si vous souhaitez contribuer à ce projet, suivez ces étapes :

1. Fork du projet
2. Créez une branche pour votre fonctionnalité
   ```bash
   git checkout -b feature/NouvelleFonctionnalite
3. Commit de vos modifications
   ```bash
   git commit -am 'Ajout de la nouvelle fonctionnalité'
4. Push vers la branche
   ```bash
   git push origin feature/NouvelleFonctionnalite
5. Créez une Pull Request
