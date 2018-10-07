<template>
  <div class="searchbar right" :class="{ active: searchIsActive }">
    <form action="#" method="POST" autocomplete="off" class="search-wrapper">
      <div class="search-field">
        <a class="search-icon" @click="openSearch"><i class="material-icons">search</i></a>
        <input type="text" id="search-input" placeholder="Search" class="browser-default search-input" v-model="searchText">
        <a class="close-icon" @click="closeSearch"><i class="material-icons">close</i></a>
      </div>
    </form>
    <div class="search-popup" :class="{ 'active': searchText !== '' }">
      <ul class="search-suggestion">
        <li><a href="#">Google</a></li>
        <li><a href="#">Apple</a></li>
        <li><a href="#">Microsoft</a></li>
      </ul>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        searchIsActive: false,
        searchText: ''
      }
    },
    methods: {
      openSearch: () => {
        this.searchIsActive = true
      },
      closeSearch: () => {
        this.searchIsActive = false
        this.searchText = ''
      }
    }
  }
</script>