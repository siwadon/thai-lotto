@servers(['web' => 'root@lotto.pungyen.com'])

@task('deploy', ['on' => 'web'])
    {{-- Target the project directory --}}
    cd /var/www/lotto
    {{-- Set app to maintenance mode --}}
    php artisan down
    {{-- Update composer to latest version --}}
    composer self-update
    {{-- Pull latest changes from Repository --}}
    git pull origin
    {{-- Install project dependencies without development dependencies and without interaction --}}
    composer install --prefer-source --no-interaction --no-dev
    {{-- If there is anything to migrate, migrate it --}}
    php artisan migrate
    {{-- Disable maintenance mode --}}
    php artisan up
@endtask
