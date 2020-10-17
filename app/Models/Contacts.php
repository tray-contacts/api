<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
    ];

    /**
     * Gets the socials associated with the contact.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function socials(){
        return $this->hasOne(Social::class);
    }

    /**
     * Gets the telephone associated with the contact.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function telephone(){
        return $this->hasOne(Telephone::class);
    }
}
