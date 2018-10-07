<script src="{{ asset('js/app.js') }}"></script>
<script>
  const APP = new Vue ({
    el: '#app',
    data: {
      searchIsOpen: false,
      searchText: '',
      userViewIsOpen: false
    },
    methods: {
      openSearch: function () {
        this.searchIsOpen = true;
      },
      openUserView: function () {
        this.userViewIsOpen = !this.userViewIsOpen;
      },
      closeSearch: function () {
        this.searchIsOpen = false;
        this.searchText = '';
      },
    }
  })
</script>