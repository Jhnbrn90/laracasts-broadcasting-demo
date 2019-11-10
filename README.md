# laracasts-broadcasting-demo
A demo app regarding https://laracasts.com/discuss/channels/code-review/broadcasting-from-one-partner-to-user

# Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
```

# Pusher

Make sure `.env` contains:

```
BROADCAST_DRIVER=pusher
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=eu
```



