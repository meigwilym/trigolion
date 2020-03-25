<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends BaseModel
{
    public function residents() : HasMany
    {
        return $this->hasMany(Resident::class);
    }
}
