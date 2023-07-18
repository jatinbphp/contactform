<?php

namespace Jatinbphp\Contactform\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $table = 'contact_form';
    protected $fillable = [
        'first_name',
        'last_name',
        'message'
    ];
    
}
