# Bake Application

Bienvenue sur le dépôt de la Bake Application, une application web et API dynamique conçue avec Symfony 7 et MySQL.  
Notre application permet aux utilisateurs de gérer leur boulangerie et leurs produits en ligne.

## Pré-requis

Avant de procéder à l'installation de Bake Application, assurez-vous de disposer des éléments suivants sur votre
système :

- PHP 8.2 ou supérieur
- Composer 2
- MySQL 5.7 ou supérieur
- Symfony CLI

## Étapes d'installation

Suivez ces étapes pour installer et configurer votre instance de Bake Application.

1. **Clonez le dépôt**  
   Commencez par cloner ce dépôt sur votre machine locale. Ouvrez un terminal et exécutez :
    ```bash
    git clone https://github.com/votre-username/BakeApplication.git
    cd BakeApplication
    ```

2. **Installez les dépendances**  
   Utilisez Composer pour installer les dépendances PHP de l'application :
    ```bash
    composer install
    ```

3. **Configurez l'environnement**  
   Copiez le fichier `.env` en `.env.local` :
    ```bash
    cp .env .env.local
    ```
   Dans le fichier `.env.local`, modifiez les paramètres suivants pour correspondre à votre configuration de base de
   données MySQL :
   ```env
   DATABASE_URL="mysql://username:password@localhost:3306/nom_de_votre_base_de_donnees"
   ```

4. **Créez la base de données**  
   Utilisez la ligne de commande Symfony pour créer la base de données si elle n'existe pas déjà :
   ```bash
   php bin/console doctrine:database:create
   ```

5. **Appliquez les migrations**  
   Appliquez les migrations pour structurer la base de données :
   ```bash
   php bin/console doctrine:migrations:migrate
   ```

6. **Chargez les fixtures**  
   Chargez les fixtures pour injecter les données initiales dans la base de données :
   ```bash
   php bin/console doctrine:fixtures:load
   ```

7. **Lancez le serveur de développement**  
   Utilisez le serveur web intégré de Symfony pour lancer votre application :
   ```bash
   symfony serve
   ```

Votre application Bake Application est maintenant prête et peut être accédée à l'adresse http://localhost:8000.
