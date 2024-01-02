<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class UserController extends AbstractController
{
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $login = $request->request->get('login');
            $password = $request->request->get('password');

            // Валидация и другие проверки могут быть добавлены здесь

            $user = new User();
            
            // Обработка возможных null значений
            if ($login !== null) {
                $user->setLogin($login);
            }
            
            if ($password !== null) {
                $user->setPassword($password);
            }

            $entityManager->persist($user);
            $entityManager->flush();

            // Редирект или возврат какой-то информации о успешном создании пользователя
            return $this->redirectToRoute('app_home');
        }

        // Обработка GET-запроса или других методов, если необходимо
        return $this->render('user/create.html.twig');
    }
}