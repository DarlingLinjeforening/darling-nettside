<template>
  <!-- Filter section -->
  <section class="mb-2">
    <h3 class="m-3 font-bold text-2xl">Filter</h3>
    <form action="">
      <select name="test" id="test">
        <option v-for="eventType in eventTypes" :value="eventType.title">
          {{ eventType.title }}
        </option>
      </select>
    </form>
  </section>
  <section>
    <EventComp
      v-for="(event, index) in events"
      :key="event"
      :title="event.title"
      :date="event.date"
      :time="event.time"
      :location="event.location"
      :type="event.typeTitle.title"
      :icon="event.icon"
      :dateformat="event.dateformat"
      :altbackground="isOdd(index) ? true : false"
    />
  </section>
</template>

<script>
import { builder } from "@/main";
import EventComp from "./EventComp.vue";

// Thx to: https://stackoverflow.com/questions/1643320/get-month-name-from-date
const monthNames = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

export default {
  components: {
    EventComp,
  },
  data() {
    return {
      events: [],
      eventTypes: []
    };
  },
  mounted() {
    this.$sanityClient
      .fetch(
        '*[_type == "events"]{title, datetime, location, description, "typeTitle":eventtype->{title}, "typeIcon":eventtype->{icon}}'
      )
      .then((data) => {
        this.events = data;
        this.events.forEach((event) => {
          // Build an image icon link for the event type icon
          event.icon = builder
            .image(event.typeIcon.icon.asset._ref)
            .width(100)
            .url();

          // Create a new date object from the Sanity datetime string
          let datetime = new Date(event.datetime);

          // Format the date into xx.xx.xxx (Day, Month, Year)
          event.date =
            datetime.getDate() +
            "." +
            datetime.getMonth() +
            "." +
            datetime.getFullYear();

          // Format the hours (add a 0 to the string if the hours are under 9)
          event.time =
            (datetime.getHours() > 9 ? "" : "0") +
            datetime.getHours() +
            ":" +
            (datetime.getMinutes() > 9 ? "" : "0") +
            datetime.getMinutes();

          // Format date for the "lemon" icon
          event.dateformat =
            (datetime.getDate() > 9 ? "" : "0") +
            datetime.getDate() +
            " " +
            monthNames[datetime.getMonth() - 1];
          // Cut the date so it only displays two numbers, a space and three letters of the month.
          event.dateformat = event.dateformat.substring(0, 6);
        });
      });

      this.$sanityClient
      .fetch(
        '*[_type == "eventType"]{title}'
      )
      .then((data) => {
        this.eventTypes = data;
        });
  },
  methods: {
    urlFor(source) {
      return builder.image(source);
    },
    isOdd(number) {
      return !!(number & 1);
    },
  },
};
</script>
