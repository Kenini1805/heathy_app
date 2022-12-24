<?php

namespace App\Http\Resources;

use App\Http\Resources\MealResource;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     properties={
 *          @OA\Property(
 *              property="data",
 *              type="object",
 *                  @OA\Property(property="id", type="integer"),
 *                  @OA\Property(property="content", type="string"),
 *                  @OA\Property(property="meal_date", type="string", format="date"),
 *                  @OA\Property(property="meal_time", type="string", format="time"),
 *                  @OA\Property(property="thumbnail", type="string"),
 *                  @OA\Property(property="meal", type="object",
 *                      @OA\Property(property="id", type="integer"),
 *                      @OA\Property(property="name", type="string"),
 *                  ),
 *          )
 *     }
 * )
 */
class DiaryResource extends JsonResource
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
            'content' => $this->content,
            'meal_date' => $this->meal_date,
            'meal_time' => $this->meal_time,
            'thumbnail' => $this->thumbnail,
            'meal' => new MealResource($this->meal),
        ];
    }
}
