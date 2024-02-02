<template>
  <!-- Events section -->
  <div class="flex flex-col-reverse md:flex-row">
    <div class="flex-col">
      <section class="mb-2 min-w-[50vw]">
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
        <p v-if="events.length < 1">There are no upcoming events.</p>
      </section>
    </div>
    <!-- Filter section -->
    <section
      class="flex flex-col mb-2 shadow-2xl bg-white md:w-60 md:h-full w-full"
    >
      <div class="p-2">
        <form action="" class="flex flex-col ml-3">
          <div class="flex flex-row [&>*]:px-3 md:flex-col">
            <div class="flex flex-col justify-center items-center md:justify-start md:flex-row ">
              <h3
                class="text-2xl font-bold md:flex md:flex-row-reverse text-center md:text-left"
              >
                Filter / Sort
              </h3>
              <div class="flex flex-row py-2">
                <div
                  tabindex="0"
                  @click="switchSort"
                  @keyup.enter="switchSort"
                  class="flex justify-center items-center text-xl bg-darling-secondary-orange w-8 h-8 md:w-6 md:h-6 md:text-base rounded-md hover:bg-darling-secondary-yellow"
                >
                  <i class="pi pi-arrow-down" v-if="sortType === 'asc'"></i>
                  <i class="pi pi-arrow-up" v-if="sortType === 'desc'"></i>
                </div>
              </div>
            </div>
            <div class="flex flex-col">
              <div
                v-for="eventType in eventTypes"
                class="flex flex-row items-center py-1"
              >
                <input
                  @change="filterBy"
                  v-model="options"
                  type="checkbox"
                  :value="eventType.title"
                  :id="eventType.title"
                  :name="eventType.title"
                />
                <label
                  class="flex flex-row px-1 items-center"
                  :for="eventType.title"
                  ><img
                    :src="urlFor(eventType.icon).url()"
                    :alt="eventType.title"
                    class="align-baselien w-4 h-4 mr-1"
                  />{{ eventType.title }}</label
                >
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
  <!-- Past events section-->
  <section class="mt-10">
    <h3 class="text-2xl font-bold mb-2">Past events</h3>
    <details>
      <summary class=" pl-2 mb-2 cursor-pointer"> Show previous events</summary>

      <EventComp
        v-for="(event, index) in oldEvents"
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
      <p v-if="oldEvents.length < 1">There are no past events.</p>
    </details>
  </section>
</template>

<script>
import { builder } from "@/main";
import EventComp from "./EventComp.vue";

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

function compareDates(a, b, ascending = true) {
  const dateA = a.properDateTime;
  const dateB = b.properDateTime;

  const comparison = ascending ? 1 : -1;

  if (dateA > dateB) return comparison;
  if (dateA < dateB) return -comparison;
  return 0;
}

export default {
  components: {
    EventComp,
  },
  data() {
    return {
      allEvents: [],
      events: [],
      eventTypes: [],
      oldEvents: [],
      options: [],
      sortType: "desc",
      newEvents: [],
    };
  },
  mounted() {
    this.$sanityClient
      .fetch(
        '*[_type == "events"]{title, datetime, location, description, "typeTitle":eventtype->{title}, "typeIcon":eventtype->{icon}}'
      )
      .then((data) => {
        this.allEvents = data;
        this.allEvents.forEach((event) => {
          // Build an image icon link for the event type icon
          if (event.typeIcon.icon.asset._ref){
            event.icon = builder
            .image(event.typeIcon.icon.asset._ref)
            .width(100)
            .url();
          }

          // Create a new date object from the Sanity datetime string
          let datetime = new Date(event.datetime);
          event.properDateTime = datetime;

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
            monthNames[datetime.getMonth()];
          // Cut the date so it only displays two numbers, a space and three letters of the month.
          event.dateformat = event.dateformat.substring(0, 6);
        });

        const currentDate = new Date();
        this.events = this.allEvents.filter((event) => {
          return event.properDateTime >= currentDate;
        });

        this.newEvents = this.events;

        this.oldEvents = this.allEvents.filter((event) => {
          return event.properDateTime < currentDate;
        });

        // Ascending date default
        this.events.sort((a, b) => compareDates(a, b, true));
        this.oldEvents.sort((a, b) => compareDates(a, b, true));
      });

    this.$sanityClient
      .fetch('*[_type == "eventType"]{title, icon}')
      .then((data) => {
        this.eventTypes = data;
        console.log(this.eventTypes);
        /*  this.eventTypes.forEach((e) => {
        this.options.push(e.title);
      }); */
      });
  },
  methods: {
    urlFor(source) {
      return builder.image(source);
    },
    isOdd(number) {
      return !!(number & 1);
    },

    switchSort() {
      if (this.sortType === "asc") {
        this.sortType = "desc";
      } else {
        this.sortType = "asc";
      }
      this.sortBy();
    },

    filterBy() {
      if (this.options.length < 1) {
        this.events = this.newEvents;
      } else {
        this.events = this.newEvents.filter((event) => {
          return this.options.some((e) => event.typeTitle.title === e);
        });
      }
    },

    sortBy() {
      if (this.sortType === "asc") {
        this.events.sort((a, b) => compareDates(a, b, true));
      } else if (this.sortType === "desc") {
        this.events.sort((a, b) => compareDates(a, b, false));
      }
    },
  },
};

// ! skru ned lemon size på mobil
</script>
