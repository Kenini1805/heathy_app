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
 *                  @OA\Property(property="day", type="number"),
 *                  @OA\Property(property="week", type="number"),
 *                  @OA\Property(property="month", type="number"),
 *                  @OA\Property(property="year", type="number"),
 * 
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
            'weight' => $this->weight,
            'body_fat' => $this->body_fat,
            'day' => $this->day,
            'week' => $this->week,
            'month' => $this->month,
            'year' => $this->year,
        ];
    }
}
