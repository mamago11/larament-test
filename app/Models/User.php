<?php

    namespace App\Models;

    // use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Filament\Models\Contracts\FilamentUser;
    use Filament\Panel;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Support\Facades\Gate;

    class User extends Authenticatable implements FilamentUser
    {
        use HasFactory, Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'name',
            'email',
            'password',
            'telescope_admin',
            'filament_admin',
        ];

        /**
         * The attributes that should be hidden for serialization.
         *
         * @var array<int, string>
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];

        public function canAccessPanel(Panel $panel):bool
        {
            return $this->filament_admin;
        }

        /**
         * Get the attributes that should be cast.
         *
         * @return array<string, string>
         */
        protected function casts():array
        {
            return [
                'email_verified_at' => 'datetime',
                'password' => 'hashed',
                'telescope_admin' => 'boolean',
                'filament_admin' => 'boolean',
            ];
        }

        protected function gate():void
        {
            Gate::define('viewTelescope', function (User $user) {
                return $user->telescope_admin;
            });
        }
    }
