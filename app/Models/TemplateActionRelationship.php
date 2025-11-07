<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemplateActionRelationship extends Model
{
    protected $table = 'template_action_relation_ship';
    protected $fillable = ['template_id', 'action_id'];
}
