<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resident extends BaseModel
{
    public function address() : BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function getFullNameAttribute()
    {
        return $this->firstname.' '.($this->initials === '' ? '' : $this->initials.' ').$this->surname;
    }
}
