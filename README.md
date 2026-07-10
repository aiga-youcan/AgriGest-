# 🌱 AgriGest

AgriGest est une application web développée avec **Laravel** permettant de gérer les parcelles d'une exploitation agricole. Elle facilite le suivi des cultures grâce à une interface simple permettant d'ajouter, consulter, modifier et supprimer des parcelles.

---

## 📖 Description

Cette application a été réalisée dans le cadre d'un projet de formation afin de mettre en pratique les fonctionnalités essentielles de Laravel :

- Architecture MVC
- Eloquent ORM
- Migrations
- Factories & Seeders
- Validation des formulaires
- Vues Blade
- CRUD complet

L'objectif est de centraliser les informations des parcelles agricoles pour simplifier leur gestion.

---

## ✨ Fonctionnalités

- 📋 Afficher la liste des parcelles
- 🔍 Consulter les détails d'une parcelle
- ➕ Ajouter une nouvelle parcelle
- ✏️ Modifier une parcelle
- 🗑️ Supprimer une parcelle
- 🌱 Générer des données de test avec Factory & Seeder
- ✅ Validation des formulaires

---

## 🛠️ Technologies utilisées

- Laravel
- PHP 8+
- MySQL
- Blade
- Bootstrap
- Eloquent ORM
- Faker

---

## 📂 Structure du projet

```
app/
├── Http/
│   └── Controllers/
├── Models/
database/
├── factories/
├── migrations/
├── seeders/
resources/
├── views/
routes/
└── web.php
```

---

## 🗄️ Base de données

### Table : `parcelles`

| Champ | Type |
|--------|------|
| id | bigint |
| nom | string |
| culture | string |
| superficie | decimal |
| date_plantation | date |
| statut | enum |
| created_at | timestamp |
| updated_at | timestamp |

### Valeurs possibles du statut

- En culture
- Récoltée
- En jachère

---

## ⚙️ Installation

### 1. Cloner le projet

```bash
git clone https://github.com/aiga-youcan/AgriGest-.git
```

### 2. Accéder au dossier

```bash
cd AgriGest-
```

### 3. Installer les dépendances

```bash
composer install
```

### 4. Copier le fichier d'environnement

```bash
cp .env.example .env
```

### 5. Générer la clé

```bash
php artisan key:generate
```

### 6. Configurer la base de données

Modifier le fichier `.env`

```
DB_DATABASE=agrigest
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Exécuter les migrations

```bash
php artisan migrate
```

### 8. Générer les données de test

```bash
php artisan db:seed
```

Ou

```bash
php artisan migrate:fresh --seed
```

### 9. Lancer le serveur

```bash
php artisan serve
```

Puis ouvrir :

```
http://127.0.0.1:8000
```

---

## 📸 Fonctionnalités principales

- Liste des parcelles
- Création d'une parcelle
- Modification d'une parcelle
- Suppression d'une parcelle
- Consultation détaillée
- Validation des formulaires
- Données de démonstration

---

## 📌 User Stories

- ✔️ Consulter une parcelle
- ✔️ Ajouter une parcelle
- ✔️ Modifier une parcelle
- ✔️ Supprimer une parcelle
- ✔️ Lister toutes les parcelles
- ✔️ Générer des données de test

---

## 📁 Architecture Laravel utilisée

- MVC
- Eloquent ORM
- Blade Templates
- Migrations
- Factories
- Seeders
- Resource Controllers
- Validation

---

## 👨‍💻 Auteur

**Nom :** Rida SABRAR

Projet réalisé dans le cadre de la formation **Développeur Web  )**.

---

## 📄 Licence

Projet pédagogique réalisé uniquement à des fins d'apprentissage.
