<?php
/**
 * Génère un nouveau token
 * @param string $length Taille du token souhaité. Par défaut : 40
 * @return string Token généré
 */
function generateToken( $length = 40 ) {
    $characters       = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_!?./$';
    $charactersLength = strlen( $characters );
    $token            = '';
    for( $i = 0; $i < $length; $i++ ) {
        $token .= $characters[rand(0, $charactersLength - 1)];
    }
    return $token;
}
/**
 * Hash un mot de passe
 * @param string $password Mot de passe non hashé
 * @return stirng Mot de passe hashé
 */
function hashPassword( $password ) {
    // Retour du mot de pass hashé
    return sha1( $password );
}

/**
 * Déconnecte l'utilisateur (affecte la session)
 */
function logout() {
    session_destroy();
}