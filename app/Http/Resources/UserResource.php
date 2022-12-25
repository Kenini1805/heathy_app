<?php

namespace App\Http\Resources;

use App\Http\Resources\TagResource;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     properties={
 *          @OA\Property(
 *              property="data",
 *              type="object",
 *                  @OA\Property(property="id", type="integer"),
 *                  @OA\Property(property="username", type="string"),
 *                  @OA\Property(property="email", type="string"),
 *                  @OA\Property(property="tags", type="array",
 *                      @OA\Items(
 *                          @OA\Property(property="id", type="integer",),
 *                          @OA\Property(property="name", type="string",),
 *                      ),
 *                  ),
 *          )
 *     }
 * )
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'tags' => TagResource::collection($this->tags),
        ];
    }
}
