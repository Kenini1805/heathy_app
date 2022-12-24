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
 *                  @OA\Property(property="title", type="string"),
 *                  @OA\Property(property="content", type="string"),
 *                  @OA\Property(property="publish_date", type="string", format="date"),
 *                  @OA\Property(property="thumbnail", type="string"),
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
class ColumnResource extends JsonResource
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
            'title' => $this->title,
            'content' => $this->content,
            'publish_date' => $this->publish_date,
            'thumbnail' => $this->thumbnail,
            'tags' => TagResource::collection($this->tags),
        ];
    }
}
