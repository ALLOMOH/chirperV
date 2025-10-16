# ChirperV - Réseau Social Laravel

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-11.x-red.svg" alt="Laravel Version">
    <img src="https://img.shields.io/badge/PHP-8.2+-blue.svg" alt="PHP Version">
    <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
</p>

## 📋 Description

ChirperV est une application de réseau social développée avec Laravel 11, permettant aux utilisateurs de partager de courts messages appelés "chirps". L'application offre une expérience similaire à Twitter mais avec une architecture Laravel moderne et sécurisée.

## ✨ Fonctionnalités

- **🔐 Système d'authentification complet**
  - Inscription et connexion sécurisées
  - Gestion des sessions utilisateur
  - Protection CSRF

- **🐦 Gestion des Chirps**
  - Création de messages (255 caractères maximum)
  - Édition et suppression de ses propres chirps
  - Affichage chronologique des messages
  - Interface utilisateur moderne avec DaisyUI

- **👤 Gestion des utilisateurs**
  - Profils utilisateur avec avatars Gravatar
  - Autorisations et politiques de sécurité
  - Validation des données

- **🎨 Interface moderne**
  - Design responsive avec Tailwind CSS
  - Composants réutilisables avec Blade
  - Thème personnalisable avec DaisyUI

## 🛠️ Technologies utilisées

- **Backend** : Laravel 11
- **Base de données** : SQLite (développement) / Compatible MySQL/PostgreSQL
- **Frontend** : Blade templates, Tailwind CSS, DaisyUI
- **Outils de développement** : Vite, Laravel Mix
- **Sécurité** : Policies Laravel, validation des données

## 🚀 Installation

### Prérequis

- PHP 8.2 ou supérieur
- Composer
- Node.js et npm
- Git

### Étapes d'installation

1. **Cloner le repository**
   ```bash
   git clone https://github.com/ALLOMOH/chirperV.git
   cd chirperV
   ```

2. **Installer les dépendances PHP**
   ```bash
   composer install
   ```

3. **Configurer l'environnement**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configurer la base de données**
   ```bash
   # Créer la base de données SQLite
   touch database/database.sqlite

   # Migrer les tables
   php artisan migrate

   # Optionnel : Ajouter des données de test
   php artisan db:seed
   ```

5. **Installer les dépendances JavaScript**
   ```bash
   npm install
   npm run build
   ```

6. **Démarrer le serveur**
   ```bash
   php artisan serve
   ```

L'application sera accessible sur `http://localhost:8000`

## 📁 Structure du projet

```
chirperV/
├── app/
│   ├── Http/Controllers/     # Contrôleurs de l'application
│   ├── Models/              # Modèles Eloquent
│   ├── Policies/            # Politiques d'autorisation
│   └── View/Components/     # Composants Blade
├── database/
│   ├── migrations/          # Migrations de base de données
│   └── seeders/             # Seeders pour les données de test
├── public/                  # Fichiers publics
├── resources/
│   ├── css/                 # Styles CSS
│   ├── js/                  # JavaScript
│   └── views/               # Templates Blade
├── routes/
│   └── web.php              # Routes web
├── storage/                 # Fichiers générés
└── tests/                   # Tests automatisés
```

## 🔒 Sécurité

- **Authentification** : Système complet avec guards Laravel
- **Autorisations** : Policies pour contrôler l'accès aux ressources
- **Validation** : Validation stricte des données utilisateur
- **CSRF Protection** : Protection contre les attaques CSRF
- **XSS Protection** : Échappement automatique des sorties

## 🧪 Tests

```bash
# Lancer tous les tests
php artisan test

# Tests avec coverage
php artisan test --coverage

# Tests spécifiques
php artisan test --filter=FeatureTest
```

## 🚀 Déploiement

### Configuration de production

1. **Variables d'environnement**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   ```

2. **Base de données**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Serveur web**
   - Configurer un serveur Nginx/Apache
   - Pointer vers le dossier `public/`
   - Configurer les permissions des dossiers `storage/` et `bootstrap/cache/`

## 🤝 Contribution

Les contributions sont les bienvenues ! Merci de suivre ces étapes :

1. Fork le projet
2. Créer une branche pour votre fonctionnalité (`git checkout -b feature/AmazingFeature`)
3. Commit vos changements (`git commit -m 'Add some AmazingFeature'`)
4. Push la branche (`git push origin feature/AmazingFeature`)
5. Ouvrir une Pull Request

## 📝 License

Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.

## 🙏 Remerciements

- [Laravel](https://laravel.com) - Le framework web PHP
- [DaisyUI](https://daisyui.com) - Composants UI Tailwind CSS
- [Tailwind CSS](https://tailwindcss.com) - Framework CSS utilitaire

## 📞 Contact

Développé par [ALLOMOH](https://github.com/ALLOMOH)

---

⭐ Si ce projet vous plaît, n'hésitez pas à lui donner une étoile !
