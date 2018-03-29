<?php

namespace Todstoychev\Econt\Model;

use Symfony\Component\OptionsResolver\OptionsResolver;

final class Client extends AbstractModel
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Client
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @param OptionsResolver $resolver
     * @param array $options
     */
    protected function configureOptions(OptionsResolver $resolver, array $options = [])
    {
        $resolver->setRequired(
            [
                'username',
                'password',
            ]
        )
            ->setAllowedTypes('username', 'string')
            ->setAllowedTypes('password', 'string');
        $this->options = $resolver->resolve($options);
    }
}