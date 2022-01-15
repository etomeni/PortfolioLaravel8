<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'clientName',
        'projecType',
        'technologiesUsed',
        'pDescription',
        'pScreenshot',
        'pWhiteLogo',
        'pBlackLogo',
    ];
}
