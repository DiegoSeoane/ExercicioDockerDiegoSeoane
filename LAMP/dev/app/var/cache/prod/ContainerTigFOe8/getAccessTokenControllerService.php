<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDGunFBFiyeKvfK'."\n".'j5htbyZmz/D8jodB6ZC/l6B+e7QZZbjIT89rxho+02RmpxjKQJe1UNatWrXTL963'."\n".'eXjOdfPDDApMhGM+X+GAo0JFI50X+CVuu/HsfF7bF44QrB750VPD3Vt1FP4hGn32'."\n".'6Xjkh2HO4t/3PFCMkfm8T0HSZRTs1clgieOuMpQ0tvC+tHhSkli7JM5mjhAkAUHL'."\n".'8b0emTSzDep9poIrfN0cBye6bJ4JQxoWh3jtEp5Usz5/LsiK7vlNM5vAPde/s/Bu'."\n".'td8/IbsID0zpVHVsK+lKmLzCT7am2qk5vjb5BZki5Qv3I6rl6tQZ5sN1h0UPP93w'."\n".'xQyWG8FdAgMBAAECggEAJt/Jz8WarMYS+tjkJGQdyvbaWU04QDiETDZI+vUP4ff4'."\n".'EZcrKBX0hF2twjblroq8IofRts+LyegPVSy56QlByeHNEfLDxyvSXOuSxxuUW1/7'."\n".'UpIJXQ1nMMyGydQhqxS7ohDnFxwoKimYgnhhYbLp+yJ+VUrDJvxXMfL/GT0Uvs8q'."\n".'dYySFpduV5ot4CegtGDwH83pZiq+CCdDSfa9VS8l7oqyoUMFxbNbfZ890jHybpxA'."\n".'rCYBYEaj49QhY0M2HWvDm9ytJTksgcXz/Htvbh35/9VhYYYTHL70xOSxTXnpEKVg'."\n".'Ig7yORfOmdWkKhmB9IH3VRlAMD1atLQOi4uTaayCMQKBgQD7a4luXHrJbidU3MFn'."\n".'mdnhYZ4WrNC5tGWv5MzLm6ReBiM2S3ZBBjePx0OMUpksoghyYKVGSpnVDj9Jh7Qp'."\n".'g/mapWYQWE2JgIcvGuUlQrVZQk6+peCv4RR6gaeWtE13Uki9spBFWvG0T1eJC6qV'."\n".'rTmuNpMc1dmSK8JZ75VxBGq5twKBgQDKWS9FuvaOK27UoJTgE9NLUtsfKY/ieq86'."\n".'+WUtVu+BLN1C7w9x71UX9HW9Z1nwtpJK4zMARInL3J4vxFjOdd4bAjdHeWKSj6PQ'."\n".'YAw8O0HOXdjQQyTDK63jKoUxg3DnVjLaXb4c6LhxX7qZ2WNGn7uI87CFIFOe4PWA'."\n".'0UxiMZptiwKBgQDdqmknwSeMsq7AtkVahx2/BWbxTPpV0IQa+VnKZfYb48Nl2lBv'."\n".'cgDIpgGbFTPxUwapeSYefCV237HSrW+dbrtBqnP7Ey+BfK0zTb4cBN2IzdpJYkxg'."\n".'JMz+WZOdXmgyPHzfqzBhxZX2yEFAFeYXQvvo6jr4IF9L7YLT8lTKqP9DrwKBgG4a'."\n".'EQrULIw3PdscdWVn5DS8JNbT+qK1NtvUECWXhEK5cruU8MaB/79FGTuyHNJJxVhS'."\n".'P9IJeSEgLkK3h8rvf6cakZGmjuhImE4ttPqhE7GChxLrNfmsrrVI0aibaLe3w3vm'."\n".'PifkyVeHSzWjf81R5O0kDAykBlwQ9ATf3bwgWXL5AoGANmOBSAS6c9IyJUyNtiKf'."\n".'37HlVV3x31Y0CP0csTlBX18p2JsBhw0nFLqmj8XLeFY7yJPe+p0kUFhjxMLM6xHV'."\n".'deilR104/goO/TrjZNsm0DbnZaibIW/HeoVECnC/MxMIQqK+hwsEb1+PtJFQcHp3'."\n".'ewlVKCpYfqeFI6t2vWg8ul0='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000d918f95e026d274b0b4864bc670045fcf5dcb9aae9a60d7aaa023d0480fc5a6564ec54a1adf77db7cb697903364cfffb5a1f0d56daa286ec1d6a91b2347c2160');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);