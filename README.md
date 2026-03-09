## Proyek Latihan Kenzie Shane Setiawan

untuk memulai produksi,
jalankan ini di terminal:

composer install
npm install && npm run build
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
npm run dev (php artisan serve)