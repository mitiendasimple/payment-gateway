<?php


namespace MiTiendaSimple\PaymentGateway\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gateway
 * @package MiTiendaSimple\PaymentGateway\Models
 * @property-read int $id
 * @property-read string $driver
 * @property-read string $request
 * @property-read string $response
 * @property-read \Carbon\Carbon $created_at
 * @property-read \Carbon\Carbon $updated_at
 * @property-read \Carbon\Carbon $deleted_at
 */
class Gateway extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'driver', 'request', 'response',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'request' => 'array',
        'response' => 'array',
    ];

    /**
     * Get the owning gatewayable model.
     */
    public function gatewayable()
    {
        return $this->morphTo();
    }
}