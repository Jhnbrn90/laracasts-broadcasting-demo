<template>
    <div>
        <p>Listening for {{ user.id }} ({{ user.name }})</p>

        <p
            class="card card-body bg-primary text-white"
            v-if="booking !== null"
        >
            New Incoming Booking with ID  {{ booking.id }}
        </p>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                booking: null,
            }
        },

        created() {
            window.Echo.private(`bookings.${this.user.id}`)
                .listen("ConfirmBookingEvent", (e) => {
                    this.booking = e.booking;

                    setTimeout(() => {
                        this.booking = null;
                    }, 3000)
                });
        }
    }
</script>
