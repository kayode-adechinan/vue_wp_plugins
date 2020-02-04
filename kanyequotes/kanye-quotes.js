new Vue({
  el: "#mount",
  template: `<div>
        <h1>Kanye Quotes</h1>
        <div>
            {{quote.quote}}
        </div>
      </div>
 `,
  data() {
    return {
      quote: {}
    };
  },

  mounted() {
    this.fetchQuote();
    setInterval(() => this.fetchQuote(), 5000);
  },

  methods: {
    fetchQuote() {
      var url = "https://api.kanye.rest/";
      fetch(url)
        .then(response => {
          return response.json();
        })
        .then(data => {
          this.quote = data;
        });
    }
  }
});
