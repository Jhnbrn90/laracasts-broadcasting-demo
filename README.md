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


# Recompile assets

After configuring Pusher, recompile the assets

```
npm run dev
```

# Routes
The demo app has two main routes `/home` and `/send/{userId}`.

Create an account and leave one browser tab open on `/home`. The user you're currently logged in as, probably has the ID of 1. If you open a new tab and visit `/send/1` you'll receive a notification on the `/home` tab.


