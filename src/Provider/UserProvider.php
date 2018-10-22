<?php

namespace App\Provider;

use App\Entity\User;
use App\Manager\UserManager;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthAwareUserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserProvider implements OAuthAwareUserProviderInterface
{
    private $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * Loads the user by a given UserResponseInterface object.
     *
     * @param UserResponseInterface $response
     *
     * @return UserInterface
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response): UserInterface
    {
        $responseData = $response->getData();

        $user = $this->userManager->getRepository()->findOneBy(['email' => $responseData['email']]);
        if (null === $user) {
            $user = new User();
            $user->setEmail($responseData['email']);
            $user->setUsername($responseData['name']);
            $user->setAvatarUrl($responseData['avatar_url']);
            $user->setProfileUrl($responseData['html_url']);
            $user->setReposUrl($responseData['repos_url']);
            $this->userManager->save($user);
        }

        return $user;
    }
}
