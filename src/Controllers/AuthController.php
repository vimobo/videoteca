<?php
declare(strict_types=1);

namespace Controllers;

use Core\Pages;
use Core\Session;
use Models\UserModel;

/**
 * Autenticación: comprueba credenciales y abre/cierra la sesión.
 * NO es el controlador de UserModel (para eso está UserController).
 */
final class AuthController
{
    // Etapa 5: leed los flash 'error' e 'info' con Session::getFlash()
    // y pasadlos a la vista (la vista no accede a Session).
    public function showLogin(): void
    {
        $error = Session::getFlash('error');
        $info  = Session::getFlash('info');
        (new Pages())->render('auth/login', ['error' => $error, 'info' => $info]);
    }

    public function login(): void
    {

        $user_with_email = (new UserModel())->findByEmail($_POST['email'] ?? '');

        if (!is_null($user_with_email) && password_verify($_POST['password'] ?? '', $user_with_email['hash'])) {
            Session::regenerar();
            Session::set('user_id', $user_with_email['id']);
            Session::set('ultima_actividad', time());
            redirect('perfil');
        }

        Session::setFlash('error', 'Usuario o contraseña incorrectos');
        redirect('login');
    }

    public function logout(): void
    {
        // TODO (Etapa 2): Session::destruir() y redirect('login')
        Session::setFlash('info', 'Session closed. Goobye');
        Session::destruir();
        redirect('login');
    }
}
