<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $fillable = ['audan','locality','dou','lang_group','data_admission','surname','name','patronymic','date_of_born','gender'];
}
