<?php

    function displayAuthor(string $authorEmail, array $users): string
    {
        foreach($users as $user) {
            if ($authorEmail === $user['email']) {
                return $user['full_name'] . '(' . $user['age'] . ' ans)';
            }
        }

        return 'Auteur inconnu';
    }

    function isValidRecip(array $recip): bool
    {
        if (array_key_exists('is_enabled', $recip)) {
            $isEnabled = $recip['is_enabled'];
        } else {
            $isEnabled = false;
        }

        return $isEnabled;
    }

    function getRecipes(array $recipes): array
    {
        $valid_recipes = [];

        foreach ($recipes as $recipe) {
            if (isValidRecip($recipe)) {
                $valid_recipes[] = $recipe;
            }
        }

        return $valid_recipes;
    }