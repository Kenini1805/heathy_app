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
 *                  @OA\Property(property="name", type="string"),
 *                  @OA\Property(property="kcal", type="integer"),
 *                  @OA\Property(property="date", type="string", format="date"),
 *                  @OA\Property(property="time", type="integer"),
 *          )
 *     }
 * )
 */
class ExerciseResource extends JsonResource
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
            'name' => $this->name,
            'kcal' => $this->kcal,
            'date' => $this->date,
            'time' => $this->time,
        ];
    }
}
