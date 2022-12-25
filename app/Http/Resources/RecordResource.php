<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     properties={
 *          @OA\Property(
 *              property="data",
 *              type="object",
 *                  @OA\Property(property="id", type="integer"),
 *                  @OA\Property(property="weight", type="number", format="float"),
 *                  @OA\Property(property="body_fat", type="number", format="float"),
 *          )
 *     }
 * )
 */
class RecordResource extends JsonResource
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
            'weight' => $this->weight,
            'body_fat' => $this->body_fat,
        ];
    }
}
