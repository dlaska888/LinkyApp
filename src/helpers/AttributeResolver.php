<?php

namespace src\Helpers;

use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use src\attributes\authorization\Authorize;
use src\attributes\authorization\SkipAuthorization;
use src\attributes\controller\ApiController;
use src\attributes\controller\MvcController;
use src\Attributes\httpMethod\HttpMethod;
use src\Enums\UserRole;
use src\Route;

class AttributeResolver
{
    public function resolveControllerRoutes(string $controllerName): array
    {
        $controllerReflection = $this->getReflectionClass($controllerName);
        $routes = array();

        if (!$this->isControllerClass($controllerName))
            return [];

        foreach ($controllerReflection->getMethods() as $method) {
            $methodName = $method->getName();
            $routeAttributes = $method->getAttributes(\src\attributes\Route::class);

            if (empty($routeAttributes)) {
                continue;
            }

            $path = $routeAttributes[0]->getArguments()[0] ?? $methodName;
            $httpMethods = $this->resolveHttpMethods($controllerName, $methodName);
            $auth = $this->resolveAuthorization($controllerName, $methodName);

            foreach ($httpMethods as $httpMethod) {
                $route = new Route($path, $httpMethod, $controllerName, $methodName, $auth);
                $routes[$route->getKey()] = $route;
            }
        }

        return $routes;
    }

    public function resolveHttpMethods(string $controllerName, string $methodName): array
    {
        $reflection = $this->getReflectionMethod($controllerName, $methodName);
        if ($reflection === null)
            return [];

        $httpMethodAttributes = array_filter($reflection->getAttributes(),
            fn($attribute) => is_subclass_of($attribute->getName(), HttpMethod::class));

        $httpMethods = array();

        foreach ($httpMethodAttributes as $httpMethodAttribute) {
            $httpMethodAttribute = $httpMethodAttribute->newInstance();
            $httpMethods[] = $httpMethodAttribute->method;
        }

        if (empty($httpMethodAttributes)) {
            $httpMethods[] = 'GET';
        }

        return $httpMethods;
    }

    public function resolveAuthorization(string $controllerName, string $methodName): ?UserRole
    {
        $reflection = $this->getReflectionMethod($controllerName, $methodName);
        if ($reflection === null)
            return null;

        $attributes = $reflection->getAttributes(SkipAuthorization::class);

        if (!empty($attributes))
            return null;

        $classAttributes = $reflection->getDeclaringClass()->getAttributes(Authorize::class);

        if (empty($classAttributes))
            return null;

        return $classAttributes[0]->newInstance()->role;
    }

    private function isControllerClass(string $className): bool
    {
        $reflection = $this->getReflectionClass($className);
        if ($reflection === null)
            return false;

        $attributes = $reflection->getAttributes(ApiController::class) ?: $reflection->getAttributes(MvcController::class);

        if (empty($attributes))
            return false;

        return true;
    }

    private function getReflectionClass(string $className): ?ReflectionClass
    {
        try {
            $reflection = new ReflectionClass($className);
        } catch (ReflectionException) {
            return null;
        }

        return $reflection;
    }

    private function getReflectionMethod(string $className, string $methodName): ?ReflectionMethod
    {
        try {
            $reflection = new ReflectionMethod($className, $methodName);
        } catch (ReflectionException) {
            return null;
        }

        return $reflection;
    }

}