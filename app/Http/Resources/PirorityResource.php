<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PirorityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // 'pirority_id' => $this->pirority_id
            'id' => $this->id,
            'name' => $this->name,  
            'description' => $this->description,  
        ];
    }
}
