<?php

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['cnpj', 'company_name', 'address', 'phone'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}