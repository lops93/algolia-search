<template>
  <div>
    <ais-instant-search
      :search-client="searchClient"
      index-name="collaborators"
    >
      <ais-search-box />
      <ais-hits>
        <template v-slot:item="{ item }">
          <div class="flex items-center justify-center">
            <img class="relative w-40" :src="item.image" alt="Item Image" />
          </div>
          <div class="relative text-black px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">{{ item.title }}</span>
            <div class="flex justify-between">
              <span class="block font-semibold text-xl">{{
                item.first_name
              }}</span>
              <span
                class="bg-white rounded-full text-green-500 text-xs font-bold px-3 py-2 leading-none flex items-center"
                >{{ item.phone_number }}</span
              >
            </div>
          </div>
        </template>
      </ais-hits>
    </ais-instant-search>
  </div>
</template>
  
  <script>
import algoliasearch from "algoliasearch/lite";
import "instantsearch.css/themes/algolia-min.css";

export default {
  data() {
    return {
      searchClient: algoliasearch(
        import.meta.env.VITE_ALGOLIA_APP_ID,
        import.meta.env.VITE_ALGOLIA_SECRET
      ),
    };
  },
};
</script>

  