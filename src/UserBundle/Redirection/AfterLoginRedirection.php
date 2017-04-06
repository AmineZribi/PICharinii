<?php

namespace UserBundle\Redirection;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface {

    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router) {
        $this->router = $router;
    }

    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)  {
// Get list of roles for current user
        $roles = $token->getRoles();
        $user=$token->getUser();
        $user->getId();
        // Tranform this list in array
        $rolesTab = array_map(function($role) {
            return $role->getRole();
        }, $roles);
        // If is a admin or super admin we redirect to the backoffice area
        if (in_array('ROLE_ADMIN', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('admin_homepage'));
        // otherwise, if is a commercial user we redirect to the Client area
        else
            $redirection = new RedirectResponse($this->router->generate('user_homepage'));
        // otherwise, if is a Brand Manager we redirect to the Manager area


        return $redirection;
    }

}
