<?php

namespace Api\Controller;

use Api\Repository\CategoriesRepository;
use DI\Container;
use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Laminas\Diactoros\Response\JsonResponse;
use Ramsey\Uuid\Uuid;
use OpenApi\Annotations as OA;

/**
 * @OA\Get(
 *     path="/v1/categories/{category_id}",
 *     description="Returns a Category by ID.",
 *     tags={"Categories"},
 *     @OA\Parameter(
 *         description="ID of category to fetch",
 *         in="path",
 *         name="category_id",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Category response",
 *         @OA\JsonContent(ref="#/components/schemas/CategoryResponseResult")
 *     )
 * )
 */
class GetCategoryByIdController
{
    private CategoriesRepository $categoriesRepository;

    public function __construct(Container $container)
    {
        $this->categoriesRepository = $container->get(CategoriesRepository::class);
    }
    public function __invoke(Request $request, Response $response, $args): JsonResponse
    {
        $category = $this->categoriesRepository->fetchById(Uuid::fromString($args['category_id']));
        return new JsonResponse(CategoryResponse::categoryResponse($category));
    }
}